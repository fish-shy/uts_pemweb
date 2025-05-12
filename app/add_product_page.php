<?php
session_start();
if (!isset($_SESSION['is_admin'])) {
  header("Location: ../app/home.php");
  exit;
}

if ($_SESSION['is_admin'] === '0') {
  header("Location: ../app/home.php");
  exit;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Add Product</title>
  <link rel="stylesheet" href="../style/css/bootstrap.min.css">
</head>

<body>
  <?php include '../component/navbar.php'; ?>

  <div class="container py-5">
    <div class="row justify-content-center">
      <div class="col-lg-6">
        <div class="card shadow-sm">
          <div class="card-body p-4">
            <h1 class="text-center mb-4 fw-bold">Add Product</h1>
            <form action="/Uts/server/add_product.php" method="post">
              <div class="mb-3">
                <label for="product_name" class="form-label">Product Name<span class="text-danger">*</span></label>
                <input type="text" name="product_name" id="product_name" class="form-control" required>
              </div>
              <div class="mb-3">
                <label for="description" class="form-label">Description<span class="text-danger">*</span></label>
                <textarea name="description" id="description" class="form-control" rows="3" required></textarea>
              </div>
              <div class="mb-3">
                <label for="price" class="form-label">Price<span class="text-danger">*</span></label>
                <input type="number" name="price" id="price" class="form-control" step="0.01" required>
              </div>
              <div class="mb-3">
                <label for="image" class="form-label">Image Link<span class="text-danger">*</span></label>
                <input type="text" name="image" id="image" class="form-control" >
              </div>
              <div class="d-grid">
                <button type="submit" class="btn btn-dark">Add Product</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>

  <?php include '../component/footer.php'; ?>
</body>

</html>