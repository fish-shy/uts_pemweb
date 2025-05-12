<?php
    session_start()
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

<section class="py-5 bg-white">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-lg-6 mb-4 mb-lg-0">
        <h1 class="display-4 fw-bold mb-2">
          Delicious Baked<br/>
          Goods
        </h1>
        <p class="lead text-secondary mb-4">Discover our variety of freshly baked product</p>
        <a href="product.php" class="btn btn-dark">Get Started →</a>
      </div>
      <div class="col-lg-6 text-center">
        <img src="../assets/hero.png" alt="Freshly baked loaf of bread, croissant and donut" class="img-fluid" style="max-width: 450px;">
      </div>
    </div>
  </div>
</section>

<section class="py-5 bg-light">
  <div class="container">
    <h2 class="display-5 fw-bold text-center mb-5">Signature</h2>
    <div class="row g-4">
      <div class="col-md-6 col-lg-4">
        <div class="card h-100 shadow-sm">
          <img src="https://images.smuckers.ca/images/recipes/29/Soft-Simple-White-Bread_desktop.jpg" alt="Assortment of white bread" class="card-img-top" style="height: 200px; object-fit: cover;">
          <div class="card-body text-center">
            <p class="card-text fw-bold fs-5">White Bread</p>
          </div>
        </div>
      </div>
      <div class="col-md-6 col-lg-4">
        <div class="card h-100 shadow-sm">
          <img src="https://th.bing.com/th/id/OIP.-uRYzX6DHH0PtcEHCciT4AHaFG?rs=1&pid=ImgDetMain" alt="Golden croissants" class="card-img-top" style="height: 200px; object-fit: cover;">
          <div class="card-body text-center">
            <p class="card-text fw-bold fs-5">Croissant 👑</p>
          </div>
        </div>
      </div>
      <div class="col-md-6 col-lg-4">
        <div class="card h-100 shadow-sm">
          <img src="https://static01.nyt.com/images/2014/12/14/magazine/14eat1/14mag-14eat.t_CA0-superJumbo.jpg" alt="donuts" class="card-img-top" style="height: 200px; object-fit: cover;">
          <div class="card-body text-center">
            <p class="card-text fw-bold fs-5">Donut</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="py-5 bg-white">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-8">
        <h2 class="display-5 fw-bold text-center mb-4">About Us</h2>
        <p class="text-secondary mb-4">
          Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur
          finibus nisi non nibh pellentesque fringilla. Sed quis sollicitudin
          mauris. Donec tristique bibendum justo vel vestibulum. Nunc in
          egestas augue. Nam sagittis sapien nisi, nec dignissim ante suscipit
          eget. Pellentesque tincidunt nisl ac dapibus. Etiam ac lacus neque.
          Donec tempor ligula quam, sed commodo velit tincidunt ac. Sed
          maximus ante non diam accumsan, at consectetur eros sodales. Duis
          bibendum tristique. Sed viverra tellus eu est auctor blandit. Praesent
          feugiat lorem a diam pulvinar, sit amet porta mi rhoncus.
        </p>
        <p class="text-secondary">
          Nulla at quam eu varius sagittis nec ac nunc. Nulla quis lectus
          tempor, semper nunc et, vulputate est. Integer ut turpis eget lorem
          gravida tempus. Vestibulum quis volutpat nibh. Quisque volutpat
          rutrum lectus, vitae consectetur justo finibus at. Duis pulvinar,
          nulla a consectetur iaculis, turpis nisl eleifend ex, ac
          pellentesque ex libero ut ante. Nam sed odio ligula. Sed non risus
          vitae nibh cursus suscipit. Proin at elit et mi laoreet vehicula eu
          eget urna. Donec volutpat nibh ut finibus convallis. Pellentesque
          habitant morbi tristique senectus et netus et malesuada fames ac
          turpis egestas. Donec eget lacus eget urna. Suspendisse pharetra,
          purus nec porta ultrices, purus ligula ultrices dolor, non dictum orci
          nisi quis arcu. Nullam
        </p>
      </div>
    </div>
  </div>
</section>

<!-- Contact Us Section -->
<section class="py-5 bg-light">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-8 text-center">
        <h2 class="display-5 fw-bold mb-3">Contact Us</h2>
        <p class="lead text-secondary mb-5">
          Have questions or want to place a custom order? Get in touch with us!
        </p>
        <div class="mb-3">
          <p class="fs-5">
            <strong>Phone:</strong>
            <a href="tel:+62115100900"> 62115100900</a>
          </p>
          <p class="fs-5">
            <strong>Email:</strong>
            <a href="mailto:rayhandika@gmail.com">rayhandika@gmail.com</a>
          </p>
          <p>
            <strong>Github</strong>
            <a href="https://github.com/fish-shy">fish-shy</a>
          </p>
        </div>
      </div>
    </section>

</body>
</html>
<?php
  include '../component/footer.php';
?>