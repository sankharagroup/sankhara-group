<?php
  session_start();

// Check if the user is logged in
if (!isset($_SESSION['admin_id'])) {
    header("Location: ./"); // Redirect to login page if not logged in
    exit;
}
include '../database_connection.php'; // Database connection

// Handle form submission for adding or updating a testimonial
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['action'])) {
    $action = $_POST['action'];
    $oldImagePath = null;

    // Fetch the old image path if updating
    if ($action == 'update' && isset($_POST['id'])) {
        $id = $_POST['id'];
        $stmt = $conn->prepare("SELECT image_url FROM testimonials WHERE id = ?");
        $stmt->bind_param("i", $id);
        $stmt->execute();
        $result = $stmt->get_result();
        $oldImage = $result->fetch_assoc();
        $oldImagePath = $oldImage['image_url']; // Save the old image path for deletion
    }

    // Handle file upload
    $image = null;
    if (isset($_FILES['image']) && $_FILES['image']['error'] === UPLOAD_ERR_OK) {
        $image_tmp_name = $_FILES['image']['tmp_name'];
        $image_name = basename($_FILES['image']['name']);
        $image_destination = '../assets/images/uploads/testimonial_images/' . $image_name;

        // Check if the uploaded image is a square (1:1)
        list($width, $height) = getimagesize($image_tmp_name);
        if ($width === $height) {
            // Move uploaded file
            if (move_uploaded_file($image_tmp_name, $image_destination)) {
                $image = $image_destination;
            }
        } else {
            echo "<script>alert('Please upload an image with 1:1 aspect ratio.');</script>";
        }
    }

    if ($action == 'add') {
        // Add testimonial logic
        $name = $_POST['name'];
        $content = $_POST['content'];

        $stmt = $conn->prepare("INSERT INTO testimonials (name, content, image_url) VALUES (?, ?, ?)");
        $stmt->bind_param("sss", $name, $content, $image);
        $stmt->execute();
    }

    if ($action == 'update') {
        // Update testimonial logic
        $name = $_POST['name'];
        $content = $_POST['content'];

        // Delete the old image if a new one is uploaded
        if ($image) {
            if (file_exists($oldImagePath)) {
                unlink($oldImagePath); // Delete the old image
            }
            $stmt = $conn->prepare("UPDATE testimonials SET name = ?, content = ?, image_url = ? WHERE id = ?");
            $stmt->bind_param("sssi", $name, $content, $image, $id);
        } else {
            $stmt = $conn->prepare("UPDATE testimonials SET name = ?, content = ? WHERE id = ?");
            $stmt->bind_param("ssi", $name, $content, $id);
        }
        $stmt->execute();
    }

    if ($action == 'delete') {
        // Delete testimonial logic
        $id = $_POST['id'];

        // Fetch the image URL before deleting the testimonial
        $stmt = $conn->prepare("SELECT image_url FROM testimonials WHERE id = ?");
        $stmt->bind_param("i", $id);
        $stmt->execute();
        $result = $stmt->get_result();
        $testimonialToDelete = $result->fetch_assoc();

        // Delete the testimonial
        $stmt = $conn->prepare("DELETE FROM testimonials WHERE id = ?");
        $stmt->bind_param("i", $id);
        $stmt->execute();

        // Delete the image file if it exists
        if (file_exists($testimonialToDelete['image_url'])) {
            unlink($testimonialToDelete['image_url']); // Delete the old image
        }
    }
}

// Fetch testimonials to display
$testimonials_result = $conn->query("SELECT * FROM testimonials");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sankhara Group | Manage Testimonials</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="dist/css/adminlte.min.css">
    <!-- Summernote CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.18/summernote-bs4.min.css" rel="stylesheet">
    <style>
        .testimonial-image {
            width: 50px;
            height: 50px;
            border-radius: 50%; /* Circular image */
            object-fit: cover; /* Ensure the image covers the area */
        }
        .testimonial-card {
            margin-bottom: 5px; /* Spacing between cards */
        }
    </style>
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">

    <!-- Navbar -->
    <?php include 'navbar.php'; ?>
    
    <!-- Sidebar -->
    <?php include 'sidebar.php'; ?>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <h1>Manage Testimonials</h1>
      <button class="btn btn-primary mt-5" onclick="openAddTestimonialModal()">Add Testimonial</button>

            </div>
        </div>

        <div class="content">

    <div class="container-fluid">
        <div class="row">
            <!-- Testimonial List -->
            <?php while ($row = $testimonials_result->fetch_assoc()) { ?>
                <div class="col-md-4 testimonial-card">
                    <div class="card">
                        <div class="card-body d-flex align-items-center justify-content-start">
                            <?php if (!empty($row['image_url'])) { ?>
                                <img src="<?php echo $row['image_url']; ?>" class="testimonial-image" alt="User Image">
                                <h5 class="card-title ml-3"><?php echo htmlspecialchars($row['name']); ?></h5>
                            <?php } ?>
                        </div>
                        <p class="card-text p-2"><?php echo htmlspecialchars($row['content']); ?></p>
                        <form method="POST" class="card-body">
                            <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                            <button type="button" class="btn btn-primary" onclick="editTestimonial(<?php echo $row['id']; ?>)">Edit</button>
                            <button type="submit" name="action" value="delete" class="btn btn-danger">Delete</button>
                        </form>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</div>

    </div>

    <!-- Add/Edit Testimonial Modal -->
    <div class="modal fade" id="testimonialModal" tabindex="-1" role="dialog" aria-labelledby="testimonialModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <form id="testimonialForm" method="POST" enctype="multipart/form-data">
                    <div class="modal-header">
                        <h5 class="modal-title" id="testimonialModalLabel">Add Testimonial</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <input type="hidden" name="id" id="testimonialId">
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" name="name" id="name" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="content">Content</label>
                            <textarea id="summernote" name="content"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="image">User Image (1:1 size)</label>
                            <input type="file" name="image" id="image" class="form-control" accept="image/*">
                            <div id="oldImageContainer" style="display: none;">
                                <label>Current Image:</label><br>
                                <img id="oldImage" src="" alt="Old User Image" class="testimonial-image">
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" name="action" value="add" class="btn btn-primary" id="submitButton">Save Testimonial</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- jQuery -->
    <script src="plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Summernote -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.18/summernote-bs4.min.js"></script>
    <!-- AdminLTE App -->
    <script src="dist/js/adminlte.min.js"></script>

    <script>
        $(document).ready(function() {
            $('#summernote').summernote({
                height: 200, // set editor height
                toolbar: [
                    // [groupName, [list of button]]
                    ['style', ['bold', 'italic', 'underline', 'clear']],
                    ['para', ['ul', 'ol', 'paragraph']],
                    ['height', ['height']],
                ]
            });
        });

        function openAddTestimonialModal() {
            $('#testimonialModalLabel').text('Add Testimonial');
            $('#testimonialId').val('');
            $('#name').val('');
            $('#summernote').summernote('reset');
            $('#oldImageContainer').hide();
            $('#submitButton').val('add');
            $('#testimonialModal').modal('show');
        }

        function editTestimonial(id) {
            $.ajax({
                url: 'fetch_testimonial.php',
                type: 'GET',
                data: {id: id},
                success: function(response) {
                    const testimonial = JSON.parse(response);
                    $('#testimonialModalLabel').text('Edit Testimonial');
                    $('#testimonialId').val(testimonial.id);
                    $('#name').val(testimonial.name);
                    $('#summernote').summernote('code', testimonial.content);
                    $('#oldImage').attr('src', testimonial.image_url);
                    $('#oldImageContainer').show();
                    $('#submitButton').val('update');
                    $('#testimonialModal').modal('show');
                }
            });
        }
    </script>
</div>
</body>
</html>
