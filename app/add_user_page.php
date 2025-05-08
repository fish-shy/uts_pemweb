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
    <form class="mb-5" action="/Uts/server/add_user.php" method="post">
        <div class="mb-3">
            <label for="username">Username<span class="text-danger">*</span></label>
            <input type="text" name="username" id="username" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="password">password<span class="text-danger">*</span></label>
            <input type="text" name="password" id="password" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="is_admin">Is Admin</label>
            <select name="is_admin" id="is_admin" class="form-control" required>
                <option value=0>No</option>
                <option value=1>Yes</option>
            </select>
        </div>
        <div class="mb-3">
            <button type="submit" class="btn btn-primary">Add User</button>
        </div>
    </form>
</div>  
<?php
  include '../component/footer.php';
?>
</body>
</html>