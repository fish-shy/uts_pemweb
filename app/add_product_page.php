<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../style/css/bootstrap.min.css">
</head>
<body>
<?php
  include '../component/navbar.php';
?>
<div class="container form"> 
    <h1 class="mt-5">Add User</h1>
    <form class="mb-5" action="/Uts/server/add_product.php" method="post">
        <div class="mb-3">
            <label for="product_name">Product Name<span class="text-danger">*</span></label>
            <input type="text" name="product_name" id="product_name"class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="description">deskripsi<span class="text-danger">*</span></label>
            <input type="text" name="description" id="description" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="price">Price<span class="text-danger">*</span></label>
            <input type="text" name="price" id="price" class="form-control" required>
        </div><div class="mb-3">
            <label for="image">Image Link<span class="text-danger">*</span></label>
            <input type="text" name="image" id="image" class="form-control" required>
        </div>
        <div class="mb-3">
            <button type="submit" class="btn btn-custom-black">Add User</button>
        </div>
    </form>
</div>  
<?php
  include '../component/footer.php';
?>
</body>
</html>
<style>
     .btn-custom-black {
    background-color: black;
    border-color: black;
    color: white;
  }

  .btn-custom-black:hover {
    background-color: grey;
    border-color: grey;
    color: white;
  }
</style>