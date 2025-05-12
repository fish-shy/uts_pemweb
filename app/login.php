<?php
session_start();
if (isset($_SESSION['username'])) {
  header('Location: home.php');
  exit();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login | Bakehouse</title>
  <link rel="stylesheet" href="../style/css/bootstrap.min.css">
</head>

<body>
  <?php include '../component/navbar.php'; ?>

  <section class="py-5 bg-light d-flex" style="min-height: 80vh;">
    <div class="container form">
      <div class="row justify-content-center">
        <div class="col-md-6 col-lg-5">
          <div class="card shadow border-0">
            <div class="card-body p-4 p-md-5">
              <h1 class="display-6 fw-bold text-center mb-4">login</h1>

              <?php if (isset($_GET['error'])): ?>
                <div class="alert alert-danger">
                  <?php echo htmlspecialchars($_GET['error']); ?>
                </div>
              <?php endif; ?>

              <form action="/Uts/server/auth.php" method="post">
                <div class="mb-3">
                  <label for="username" class="form-label">Username<span class="text-danger">*</span></label>
                  <input type="text" class="form-control form-control-lg" id="username" name="username" required>
                </div>

                <div class="mb-4">
                  <label for="password" class="form-label">Password<span class="text-danger">*</span></label>
                  <input type="password" class="form-control form-control-lg" id="password" name="password" required>
                </div>

                <div class="d-grid gap-2">
                  <button type="submit" class="btn btn-dark btn-lg py-3 fw-semibold">Login</button>
                </div>

              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <?php include '../component/footer.php'; ?>

</body>

</html>