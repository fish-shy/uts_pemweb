<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1.0" />
  <title>Bakehouse</title>
  <link rel="stylesheet" href="../styles/hero.css" />
</head>
<body>
<?php
  include '../component/navbar.php';
?>
  <section class="hero">
    <div class="hero__text">
      <h1>Delicious Baked Goods</h1>
      <p>Discover our variety of freshly baked products.</p>
      <a href="#get-started" class="btn">Get Started →</a>
    </div>
    <div class="hero__image">
      <img
        src="../assets/hero.png"
        alt="Freshly baked loaf of bread, croissant and donut"
      />
    </div>
  </section>
</body>
</html>
<?php
  include '../component/footer.php';
?>
<style>
.hero {
  display: flex;
  justify-content: space-between;
  align-items: center;
  max-width: 1200px;
  margin: 0 auto;
  padding: 4rem 1.5rem;
}

.hero__text {
  max-width: 550px;
}

.hero__text h1 {
  font-size: 3rem;
  line-height: 1.2;
  margin: 0;
  color: #111;
}

.hero__text p {
  font-size: 1.125rem;
  margin: 1rem 0 1rem;
  color: #444;
}

.btn {
  display: inline-block;
  padding: 0.75rem 1.5rem;
  background-color: #2563eb;
  color: #fff;
  text-decoration: none;
  border-radius: 0.375rem;
  font-size: 1rem;
  transition: background-color 0.2s;
}

.btn:hover {
  background-color: #1e4bb8;
}

.hero__image img {
  max-width: 100%;
  height: auto;
}

@media (max-width: 768px) {
  .hero {
    flex-direction: column-reverse;
    text-align: center;
  }
  .hero__text {
    margin-top: 2rem;
  }
}

</style>
