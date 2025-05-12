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
    <title>Add User</title>
    <link rel="stylesheet" href="../style/css/bootstrap.min.css">
</head>
<body>
    <?php include '../component/navbar.php'; ?>

    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="card shadow-sm">
                    <div class="card-body p-4">
                        <h1 class="text-center mb-4 fw-bold">Add User</h1>
                        <form action="/Uts/server/add_user.php" method="post">
                            <div class="mb-3">
                                <label for="profile_picture" class="form-label">Profile Picture</label>
                                <input type="text" class="form-control" id="profile_picture" name="profile_picture">
                            </div>

                            <div class="mb-3">
                                <label for="username" class="form-label">Username<span class="text-danger">*</span></label>
                                <input type="text" name="username" id="username" class="form-control" required>
                            </div>

                            <div class="mb-3">
                                <label for="password" class="form-label">Password<span class="text-danger">*</span></label>
                                <input type="password" name="password" id="password" class="form-control" required>
                            </div>

                            <div class="mb-3">
                                <label for="is_admin" class="form-label">Is Admin</label>
                                <select name="is_admin" id="is_admin" class="form-select" required>
                                    <option value="0">No</option>
                                    <option value="1">Yes</option>
                                </select>
                            </div>

                            <div class="d-grid">
                                <button type="submit" class="btn btn-dark">Add User</button>
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
