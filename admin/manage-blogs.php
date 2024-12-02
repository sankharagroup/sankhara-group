<?php
session_start();

// Check if the user is logged in
if (!isset($_SESSION['admin_id'])) {
    header("Location: ./"); // Redirect to login page if not logged in
    exit;
}

// Include your database connection if needed
include '../database_connection.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Sankhara Group | Manage Blogs</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- Summernote CSS -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.18/summernote-bs4.min.css" rel="stylesheet">
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">

  <!-- Navbar -->
  <?php include 'navbar.php'; ?>
  
  <!-- Sidebar -->
  <?php include 'sidebar.php'; ?>

  <!-- Content Wrapper. Contains page content -->
  <?php
  include '../database_connection.php'; // Database connection

  // Handle form submission for adding or updating a blog
  if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['action'])) {
      $action = $_POST['action'];
      $oldImagePath = null;

      // Fetch the old image path if updating
      if ($action == 'update' && isset($_POST['id'])) {
          $id = $_POST['id'];
          $stmt = $conn->prepare("SELECT image_url FROM blogs WHERE id = ?");
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
          $image_destination = '../assets/images/uploads/blog_images/' . $image_name;

          // Move uploaded file
          if (move_uploaded_file($image_tmp_name, $image_destination)) {
              $image = $image_destination;
          }
      }

      if ($action == 'add') {
          // Add blog logic
          $title = $_POST['title'];
          $content = $_POST['content'];

          $stmt = $conn->prepare("INSERT INTO blogs (title, content, image_url) VALUES (?, ?, ?)");
          $stmt->bind_param("sss", $title, $content, $image);
          $stmt->execute();
      }

      if ($action == 'update') {
          // Update blog logic
          $title = $_POST['title'];
          $content = $_POST['content'];

          // Delete the old image if a new one is uploaded
          if ($image) {
              if (file_exists($oldImagePath)) {
                  unlink($oldImagePath); // Delete the old image
              }
              $stmt = $conn->prepare("UPDATE blogs SET title = ?, content = ?, image_url = ? WHERE id = ?");
              $stmt->bind_param("sssi", $title, $content, $image, $id);
          } else {
              $stmt = $conn->prepare("UPDATE blogs SET title = ?, content = ? WHERE id = ?");
              $stmt->bind_param("ssi", $title, $content, $id);
          }
          $stmt->execute();
      }

      if ($action == 'delete') {
          // Delete blog logic
          $id = $_POST['id'];

          // Fetch the image URL before deleting the blog
          $stmt = $conn->prepare("SELECT image_url FROM blogs WHERE id = ?");
          $stmt->bind_param("i", $id);
          $stmt->execute();
          $result = $stmt->get_result();
          $blogToDelete = $result->fetch_assoc();

          // Delete the blog
          $stmt = $conn->prepare("DELETE FROM blogs WHERE id = ?");
          $stmt->bind_param("i", $id);
          $stmt->execute();

          // Delete the image file if it exists
          if (file_exists($blogToDelete['image_url'])) {
              unlink($blogToDelete['image_url']); // Delete the old image
          }
      }
  }

  // Fetch blogs to display
  $blogs_result = $conn->query("SELECT * FROM blogs");
  ?>

  <div class="content-wrapper">
    <!-- Manage Blog Section -->
    <div class="content-header">
      <div class="container-fluid">
        <h1>Manage Blogs</h1>
        <button class="btn btn-primary mt-5" onclick="openAddBlogModal()">Add Blog</button>
      </div>
    </div>
    <div class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- Blog List -->
          <?php while ($row = $blogs_result->fetch_assoc()) { ?>
            <div class="col-md-4">
              <div class="card">
                <?php if (!empty($row['image_url'])) { ?>
                  <img src="<?php echo $row['image_url']; ?>" class="card-img-top" alt="Blog Image">
                <?php } ?>
                <div class="card-body">
                  <h5 class="card-title"><?php echo htmlspecialchars($row['title']); ?></h5>
                  <p class="card-text"><?php echo htmlspecialchars(substr($row['content'], 0, 100)); ?>...</p>
                  <form method="POST">
                    <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                    <button type="button" class="btn btn-primary" onclick="editBlog(<?php echo $row['id']; ?>)">Edit</button>
                    <button type="submit" name="action" value="delete" class="btn btn-danger">Delete</button>
                  </form>
                </div>
              </div>
            </div>
          <?php } ?>
        </div>
      </div>
    </div>
  </div>

  <!-- Add/Edit Blog Modal -->
  <div class="modal fade" id="blogModal" tabindex="-1" role="dialog" aria-labelledby="blogModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <form id="blogForm" method="POST" enctype="multipart/form-data">
          <div class="modal-header">
            <h5 class="modal-title" id="blogModalLabel">Add Blog</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <input type="hidden" name="id" id="blogId">
            <div class="form-group">
              <label for="title">Title</label>
              <input type="text" name="title" id="title" class="form-control" required>
            </div>
            <div class="form-group">
              <label for="content">Content</label>
              <textarea id="summernote" name="content"></textarea>
            </div>
            <div class="form-group">
              <label for="image">Blog Image</label>
              <input type="file" name="image" id="image" class="form-control">
              <div id="oldImageContainer" style="display: none;">
                <label>Current Image:</label><br>
                <img id="oldImage" src="" alt="Old Blog Image" style="max-width: 100%; height: auto;">
              </div>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" name="action" value="add" class="btn btn-primary" id="submitButton">Save Blog</button>
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
        height: 200,
        toolbar: [
          // Custom toolbar with limited options
          ['style', ['bold', 'underline', 'italic']], // Only allow bold, underline, and italic
          ['para', ['ul', 'ol', 'paragraph']],
          ['misc', ['fullscreen', 'codeview']]
        ]
      });
    });

    function openAddBlogModal() {
      $('#blogModalLabel').text('Add Blog');
      $('#blogId').val('');
      $('#title').val('');
      $('#summernote').summernote('code', '');
      $('#oldImageContainer').hide();
      $('#submitButton').val('add'); // Set action to add
      $('#blogModal').modal('show');
    }

    function editBlog(id) {
      $.ajax({
        url: 'fetch_blog.php', // Create this file to fetch blog data based on ID
        method: 'POST',
        data: { id: id },
        dataType: 'json',
        success: function(data) {
          $('#blogModalLabel').text('Edit Blog');
          $('#blogId').val(data.id);
          $('#title').val(data.title);
          $('#summernote').summernote('code', data.content);
          $('#oldImage').attr('src', data.image_url).show();
          $('#oldImageContainer').show();
          $('#submitButton').val('update'); // Set action to update
          $('#blogModal').modal('show');
        }
      });
    }
  </script>

</body>
</html>
