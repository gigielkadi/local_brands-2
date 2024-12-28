<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin Dashboard</title>
  <link rel="stylesheet" href="admin.css"> <!-- Link to your CSS file -->
</head>

<body>
<!-- Navbar -->
<div class="container-fluid p-0">
  <!-- First Section -->
  <nav class="navbar bg-primary">
    <div class="container-fluid">
      <nav class="navbar">
        <ul class="nav-list">
          <li class="nav-item">
            <a href="" class="nav-link">Welcome</a>
          </li>
        </ul>
      </nav>
    </div>
  </nav>
  <!-- Second Section -->
  <div class="bg-light">
    <h3 class="text-center p-2">Manage Details</h3>
  </div>
  <!-- Third Section -->
  <div class="row">
    <div class="col-md-12 bg-dark p-1 d-flex align-items-center">
      <div class="admin-info">
        <a href="#"><img src="" alt=""></a>
        <p class="text-center ">Admin</p>
      </div>
      <div class="button-container text-center">
        <button><a href="insert_products.php" class="btn-link">Insert Products</a></button>
        <button><a href="index.php?insert_category" class="btn-link">Insert Categories</a></button>
        <button><a href="index.php?insert_section" class="btn-link">insert section</a></button>
       
        <button class="btn-log-out">
        
          <div class="sign"><svg viewBox="0 0 512 512"><path d="M377.9 105.9L500.7 228.7c7.2 7.2 11.3 17.1 11.3 27.3s-4.1 20.1-11.3 27.3L377.9 406.1c-6.4 6.4-15 9.9-24 9.9c-18.7 0-33.9-15.2-33.9-33.9l0-62.1-128 0c-17.7 0-32-14.3-32-32l0-64c0-17.7 14.3-32 32-32l128 0 0-62.1c0-18.7 15.2-33.9 33.9-33.9c9 0 17.6 3.6 24 9.9zM160 96L96 96c-17.7 0-32 14.3-32 32l0 256c0 17.7 14.3 32 32 32l64 0c17.7 0 32 14.3 32 32s-14.3 32-32 32l-64 0c-53 0-96-43-96-96L0 128C0 75 43 32 96 32l64 0c17.7 0 32 14.3 32 32s-14.3 32-32 32z"></path></svg></div>
          <div class="text"><a href="../login.php">logout</a></div>
        </button>
       
      </div>
    </div>
  </div>
</div>
<div class="container">
  <?php
        if (isset($_GET['insert_category'])) {
            include('insert_categories.php');
        }
        if (isset($_GET['insert_section'])) {
            include('insert_section.php');
        }
        ?>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>

</body>

</html>