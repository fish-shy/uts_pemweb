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
    <title>Edit User</title>
    <link rel="stylesheet" href="../style/css/bootstrap.min.css">
</head>
<body>
    <?php include '../component/navbar.php'; ?>

    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="card shadow-sm">
                    <div class="card-body p-4">
                        <h1 class="text- mb-4 fw-bold">Edit User</h1>
                        <?php
                        require_once '../server/connect_database.php';

                        if (isset($_GET['id'])) {
                            $user_id = $_GET['id'];
                            $sql = "SELECT * FROM user WHERE id = ?";
                            $stmt = $conn->prepare($sql);
                            $stmt->bind_param("i", $user_id);
                            $stmt->execute();
                            $result = $stmt->get_result();

                            if ($i = $result->fetch_assoc()) { ?>
                                <form id="editUserForm" method="POST" action="/Uts/server/edit_user.php">
                                    <input type="hidden" name="user_id" value="<?php echo $i['id']; ?>">

                                    <div class="mb-3 ">
                                        <label for="profile_picture" class="form-label">Profile Picture</label>
                                        <input type="text" class="form-control" id="profile_picture" name="profile_picture" value="<?php echo $i['profile_picture']; ?>">
                                        <?php if (!empty($i['profile_picture'])): ?>
                                            <img src="<?php echo $i['profile_picture']; ?>" alt="Current profile picture" class="img-thumbnail mt-3" style="max-width: 100px; max-height: 100px;">
                                        <?php else : ?>
                                            <img src="../assets/image.png" alt="Current profile picture" class="img-thumbnail mt-3" style="max-width: 100px; max-height: 100px;">
                                        <?php endif; ?>
                                    </div>

                                    <div class="mb-3">
                                        <label for="username" class="form-label">Username<span class="text-danger">*</span></label>
                                        <input type="text" class="form-control" id="username" name="username" value="<?php echo $i['username']; ?>" required>
                                    </div>

                                    <div class="mb-3">
                                        <label for="password" class="form-label">Password</label>
                                        <input type="password" class="form-control" id="password" name="password" placeholder="Enter new password or leave empty">
                                    </div>

                                    <div class="mb-3">
                                        <label for="is_admin" class="form-label">Is Admin</label>
                                        <select name="is_admin" id="is_admin" class="form-select" required>
                                            <option value="1" <?php echo $i['is_admin'] ? 'selected' : ''; ?>>Yes</option>
                                            <option value="0" <?php echo !$i['is_admin'] ? 'selected' : ''; ?>>No</option>
                                        </select>
                                    </div>

                                    <div class="d-grid">
                                        <button type="submit" class="btn btn-dark">Update User</button>
                                    </div>
                                </form>

                                <script>
                                    document.getElementById('editUserForm').addEventListener('submit', function(e) {
                                        e.preventDefault();

                                        const formData = new FormData(this);

                                        fetch('../server/edit_user.php', {
                                                method: 'POST',
                                                body: formData
                                            })
                                            .then(response => response.json())
                                            .then(data => {
                                                if (data.success) {
                                                    alert('User updated successfully!');
                                                    window.location.href = 'user.php';
                                                } else {
                                                    alert('Error updating user: ' + data.error);
                                                }
                                            })
                                            .catch(error => {
                                                console.error('Error:', error);
                                            });
                                    });
                                </script>
                        <?php
                            } else {
                                echo "<div class='alert alert-danger text-center'>User not found</div>";
                            }

                            $stmt->close();
                            $conn->close();
                        } else {
                            echo "<div class='alert alert-danger text-center'>No user ID provided</div>";
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php include '../component/footer.php'; ?>
</body>
</html>
