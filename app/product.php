<?php
include '../server/fetch_product.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1.0" />
  <title>Bakehouse</title>
  <link rel="stylesheet" href="../style/css/bootstrap.min.css">
</head>

<body>
  <?php
  include '../component/navbar.php';
  ?>

  <div class="container mt-4 mb-5">
    <div class="row">
      <div class="col-lg-8">
        <div class="d-flex justify-content-between align-items-center mb-3 flex-wrap">
          <div class="d-flex justify-content-between">
            <h2 class="me-3">Products</h2>
            <div class="d-flex align-items-center flex-grow-1 flex-wrap">
              <input type="search" class="form-control me-2 mb-2 mb-sm-0" placeholder="Search" style="max-width: 250px; min-width: 150px;">
            </div>
          </div>
          <a href="../app/add_product_page.php" class="btn btn-custom-black">Add Product</a>
        </div>
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 g-4">
          <?php if (!empty($product)): ?>
            <?php foreach ($product as $item): ?>
              <div class="col">
                <div class="card h-100 shadow-sm">
                  <img src='<?php echo $item['image'] ?>' class="card-img-top product-card-img" alt="<?php echo $item['product_name'] ?>">

                  <div class="card-body d-flex flex-column justify-content-between">
                    <h5 class="card-title"><?php echo $item['product_name'] ?></h5>
                    <p class="card-text mb-2"><strong>$<?php echo number_format((float)$item['price'], 2) ?></strong></p>
                    <?php
                    if (!empty($item['description'])) {
                      echo '<p class="card-text small text-muted">' . substr($item['description'], 0, 50) . '...</p>';
                    }
                    ?>
                    <div>
                      <form action="../server/add_to_cart.php" method="POST" class="mt-auto mb-2">
                        <input type="hidden" name="product_id" value="<?php echo $item['id'] ?>">
                        <input type="hidden" name="product_name" value="<?php echo $item['product_name'] ?>">
                        <input type="hidden" name="product_price" value="<?php echo $item['price'] ?>">
                        <button type="submit" name="add_to_cart" class="btn btn-custom-black w-100">Add</button>
                      </form>
                      <form action="../server/delete_product.php" method="POST" class="mt-auto">
                        <input type="hidden" name="product_id" value="<?php echo $item['id'] ?>">
                        <input type="hidden" name="product_name" value="<?php echo $item['product_name'] ?>">
                        <input type="hidden" name="product_price" value="<?php echo $item['price'] ?>">
                        <button type="submit" name="delete" class="btn btn-danger w-100">Delete</button>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
            <?php endforeach; ?>
          <?php else: ?>
            <div class="col-12">
              <div class="alert alert-info" role="alert">
                No products found. Please check back later!
              </div>
            </div>
          <?php endif; ?>
        </div>
      </div>

      <div class="col-lg-4 mt-4 mt-lg-0">
        <div class="card shadow-sm">
          <div class="card-body">
            <h3 class="card-title">Cart</h3>
            <?php
            $cartIsEmpty = true;
            $cartTotal = 0;
            if (isset($_SESSION['cart']) && !empty($_SESSION['cart'])):
              $cartIsEmpty = false;
            ?>
              <ul class="list-group list-group-flush mb-3">
                <?php foreach ($_SESSION['cart'] as $productId => $cartItem): ?>
                  <?php
                  $itemSubtotal = (float)$cartItem['price'] * (int)$cartItem['quantity'];
                  $cartTotal += $itemSubtotal;
                  ?>
                  <li class="list-group-item d-flex justify-content-between align-items-center">
                    <div>
                      <?php echo $cartItem['name'] ?>
                      <small class="d-block text-muted">
                        Qty: <?php echo (int)$cartItem['quantity']; ?> x $<?php echo number_format((float)$cartItem['price'], 2) ?>
                      </small>
                    </div>
                    <div class="text-end">
                      <strong>$<?php echo number_format($itemSubtotal, 2) ?></strong>
                      <div class="cart-item-actions">
                        <a href="../server/add_to_cart.php?remove_item=1&product_id=<?php echo $productId ?>" class="text-danger">Remove</a>
                      </div>
                    </div>
                  </li>
                <?php endforeach; ?>
              </ul>
              <hr>
              <div class="d-flex justify-content-between">
                <h5>Total:</h5>
                <h5><strong>$<?php echo number_format($cartTotal, 2) ?></strong></h5>
              </div>
              <div class="d-grid gap-2 mt-3">
                <a href="../server/add_to_cart.php?action=clear_cart" type="button" class="btn btn-custom-black btn-lg">Checkout</a>
                <a href="../server/add_to_cart.php?action=clear_cart" class="btn btn-outline-danger btn-sm">Clear Cart</a>
              </div>
            <?php endif; ?>

            <?php if ($cartIsEmpty): ?>
              <p>Your cart is empty.</p>
              <div class="d-grid">
                <button type="button" class="btn btn-custom-black btn-lg" disabled>Checkout</button>
              </div>
            <?php endif; ?>
          </div>
        </div>
      </div>
    </div>
  </div>

  <?php
  include '../component/footer.php';
  ?>
  <script src="../js/bootstrap.bundle.min.js"></script>
</body>

</html>
<style>
  .product-card-img {
    height: 180px;
    object-fit: cover;
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

  .filter-btn {
    min-width: 80px;
  }

  .cart-item-actions a {
    font-size: 0.8em;
  }
</style>