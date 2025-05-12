<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header('Location: login.php');
    exit;
}
$user_id = $_SESSION['user_id'];
$username = $_SESSION['user'];
$is_admin = $_SESSION['is_admin'];
$profile_picture = $_SESSION['profile_picture'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Profile</title>
    <link rel="stylesheet" href="../style/css/bootstrap.min.css">
</head>
<body>
    <?php include '../component/navbar.php'; ?>

    <div class="container form mt-5" style="min-height: 80vh;">
        
        <?php if ($_SESSION['user_id']): ?>
            <?php
                $src = !empty($profile_picture) ? $profile_picture : '../assets/image.png';
            ?>
            <div class="card mb-5 shadow-sm">
                <div class="card-header bg-dark text-white">
                    <h4 class="my-2">User Information</h4>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-4 text-center mb-3 mb-md-0 ">
                            <img src="<?php echo htmlspecialchars($src, ENT_QUOTES); ?>"
                                class="img-fluid rounded shadow w-20"
                                alt="Profile Picture"
                                style="max-height: 200px; object-fit: cover;">
                        </div>
                        <div class="col-md-8">
                            <div class="mb-3">
                                <h5>Username</h5>
                                <p class="lead"><?php echo htmlspecialchars($username, ENT_QUOTES); ?></p>
                            </div>
                            
                            <div class="mb-3">
                                <h5>Account Type</h5>
                                <p>
                                    <?php if ($is_admin): ?>
                                        <span class="badge bg-success">Administrator</span>
                                    <?php else: ?>
                                        <span class="badge bg-secondary">Standard User</span>
                                    <?php endif; ?>
                                </p>
                            </div>
                            
                            <div class="d-grid gap-2 d-md-flex justify-content-md-start mt-4">
                                <a href="edit_user_page.php?id=<?php echo $user_id; ?>" 
                                   class="btn btn-dark">
                                    <i class="bi bi-pencil-square"></i> Edit Profile
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
        <?php else: ?>
            <div class="alert alert-danger">User not found. Please try logging in again.</div>
        <?php endif; ?>
    </div>

    <?php include '../component/footer.php'; ?>
</body>
</html>
