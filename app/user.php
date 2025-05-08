<?php 
  include '../server/fetch_user.php'; // Make sure this path is correct
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1.0" />
  <title>Bakehouse - User List</title>
  <!-- Link your main CSS file if you have one -->
  <!-- <link rel="stylesheet" href="../styles/main.css" /> -->
  <style>
    /* Basic Table Styling */
    body {
      font-family: "Segoe UI", Tahoma, Geneva, Verdana, sans-serif;
      margin: 0;
      padding: 0;
      background-color: #f4f4f4;
    }
    .container {
      max-width: 1000px;
      margin: 2rem auto;
      padding: 1rem;
      background-color: #fff;
      box-shadow: 0 0 10px rgba(0,0,0,0.1);
    }
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
    /* Add styles for your navbar and footer if needed */
    /* Example: */
    /* header, footer { background: #333; color: #fff; padding: 1rem 0; text-align: center; } */
  </style>
</head>
<body>

<?php
  // Make sure this path is correct relative to the current file
  include '../component/navbar.php';
?>

<div class="container">
  <h1>User List</h1>

  <?php if (!empty($user)): ?>
    <table class="user-table">
      <thead>
        <tr>
          <th>Username</th>
          <th>Is Admin</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach ($user as $u): ?>
          <tr>
            <td><?php echo htmlspecialchars($u['username']); ?></td>
            <td><?php echo $u['is_admin'] ? 'Yes' : 'No'; ?></td>
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

<?php
  // Make sure this path is correct relative to the current file
  include '../component/footer.php';
?>

</body>
</html>