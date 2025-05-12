<?php
session_start();
include '../server/fetch_user.php';

if (!isset($_SESSION['is_admin'])) {
    header("Location: ../app/home.php");
    exit;
}

if ($_SESSION['is_admin'] === '0') { 
    header("Location: ../app/home.php");
    exit;
}
?>
<?php
  include '../component/navbar.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1.0" />
  <title>Bakehouse User</title>
  <link rel="stylesheet" href="../style/css/bootstrap.min.css">
</head>
<body>
<div class="container mb-5 mt-5 ">
  <h1>User List</h1>
  <div class="d-flex justify-content-end mb-4 me-1 ">
    <a href="../App/add_user_page.php" class='btn btn-custom-black'>add User</a>
  </div>
  <?php if (!empty($user)): ?>
    <table class="user-table">
      <thead>
        <tr>
          <th>Profile Picture</th>
          <th>Username</th>
          <th>Is Admin</th>
          <th>Action</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach ($user as $i): ?>
          <tr>
            <td>
               <?php if (!empty($i['profile_picture'])): ?>
                        <img src="<?php echo $i['profile_picture']; ?>" alt="Current profile picture" class="mt-2" style="max-width: 100px; max-height: 100px;">
                    <?php else : ?>
                        <img src="../assets/image.png" alt="Current profile picture" class="mt-2" style="max-width: 100px; max-height: 100px;">
                    <?php endif; ?>
            </td>
            <td><?php echo $i['username'] ?> </td>
            <td><?php echo $i['is_admin'] ? 'Yes' : 'No'; ?></td>
            <td>
              <form action="../server/delete_user.php" method="POST">
                <input type="hidden" name="user_id" value="<?php echo$i['id'] ?>">
                <button type="submit" name="delete" class="btn btn-danger col-md-5">Delete</button>
              </form>
              <a href="edit_user_page.php?id=<?php echo $i['id']; ?>" class="btn btn-dark mt-2 col-md-5">Edit</a>
              
            </td>
          </tr>
        <?php endforeach; ?>
      </tbody>
    </table>
  <?php elseif ($user === null): ?>
    <p class="no-users">Could not retrieve user data due to an error.</p>
  <?php else: ?>
    <p class="no-users">No users found in the database.</p>
  <?php endif; ?>

</div>

</body>

</html>
<?php
  include '../component/footer.php';
?>
<style>

    h1 {
      text-align: center;
      color: #333;
      margin-bottom: 1.5rem;
    }
    table.user-table {
      width: 100%;
      border-collapse: collapse;
      margin-top: 1rem;
      box-shadow: 0 2px 5px rgba(0,0,0,0.1);
    }
    table.user-table th,
    table.user-table td {
      border: 1px solid #ddd;
      padding: 12px 15px;
      text-align: left;
    }
    table.user-table th {
      background-color: #f2f2f2;
      color: #333;
      font-weight: bold;
    }
    table.user-table tbody tr:nth-child(even) {
      background-color: #f9f9f9;
    }
    table.user-table tbody tr:hover {
      background-color: #f1f1f1;
    }
    .no-users {
      text-align: center;
      color: #777;
      margin-top: 2rem;
      font-style: italic;
    }
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