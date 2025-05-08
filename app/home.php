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
      <div class="hero-container">
        <div class="hero-text">
          <h1>
            Delicious Baked<br />
            Goods
          </h1>
          <p>Discover our variety of freshly baked product</p>
          <a href="#" class="btn btn-dark">Get Started →</a>
        </div>
        <div class="hero-image">
          <img
            src="../assets/hero.png"
            alt="Freshly baked loaf of bread, croissant and donut"
          />
        </div>
      </div>
    </section>

    <section class="signature">
      <div class="signature-container">
        <h2>Signature</h2>
        <div class="signature-cards">
          <div class="card">
            <img src="https://images.smuckers.ca/images/recipes/29/Soft-Simple-White-Bread_desktop.jpg" alt="Assortment of white bread" />
            <p>White Bread</p>
          </div>
          <div class="card">
            <img src="https://th.bing.com/th/id/OIP.-uRYzX6DHH0PtcEHCciT4AHaFG?rs=1&pid=ImgDetMain" alt="Golden croissants" />
            <p>Croissant 👑</p>
          </div>
          <div class="card">
            <img src="https://static01.nyt.com/images/2014/12/14/magazine/14eat1/14mag-14eat.t_CA0-superJumbo.jpg" alt="donuts" />
            <p>Donut</p>
          </div>
        </div>
      </div>
    </section>

    <section class="about-us">
      <div class="about-us-container">
        <h2>About Us</h2>
        <p>
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
        <p>
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
    </section>
        <!-- Contact Us Section -->
        <section class="contact">
      <div class="contact-container">
        <h2>Contact Us</h2>
        <p>
          Have questions or want to place a custom order? Get in touch with us!
        </p>
        <div class="contact-details">
          <p>
            <strong>Phone:</strong>
            <a href="tel:+62115100900">+62 115 100 900</a>
          </p>
          <p>
            <strong>Email:</strong>
            <a href="mailto:rayhandika@gmail.com">rayhandika@gmail.com</a>
          </p>>
        </div>
      </div>
    </section>

</body>
</html>
<?php
  include '../component/footer.php';
?>
<style>
.contact {
  padding: 4rem 0;
  background-color: #f8f8f8; /* Match signature background or use #fff */
}

.contact-container {
  max-width: 800px; /* Consistent width with About Us */
  margin: 0 auto;
  padding: 0 1.5rem;
  text-align: center; /* Center align content */
}

.contact h2 {
  font-size: 2.5rem;
  margin-bottom: 1rem; /* Reduced margin */
  color: #111;
  font-weight: 700;
}

.contact-container > p {
  /* Style for the introductory paragraph */
  font-size: 1.1rem;
  color: #555;
  margin-bottom: 2rem;
}

.contact-details p {
  font-size: 1.1rem; /* Slightly larger font for details */
  color: #333;
  margin-bottom: 0.75rem; /* Space between details */
  line-height: 1.8;
}

.contact-details strong {
  color: #111; /* Darker label */
  margin-right: 0.5em;
}

.contact-details a {
  color: #2563eb; /* Use a link color */
  text-decoration: none;
  transition: color 0.3s ease;
}

.contact-details a:hover {
  color: #1e4bb8; /* Darker link color on hover */
}

@media (max-width: 768px) {
  .contact h2 {
    font-size: 2rem;
  }
  .contact-container > p {
    font-size: 1rem;
  }
  .contact-details p {
    font-size: 1rem;
  }
}

* {
  box-sizing: border-box;
  margin: 0;
  padding: 0;
}

body {
  font-family: "Segoe UI", Tahoma, Geneva, Verdana, sans-serif;
  line-height: 1.6;
  color: #333;
}

/* Container Utility */
.navbar-container,
.hero-container,
.signature-container,
.about-us-container {
  max-width: 1200px;
  margin: 0 auto;
  padding: 0 1.5rem; /* Add side padding */
}

/* Navbar Styles */
.navbar {
  background-color: #fff;
  box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
  padding: 1rem 0;
}

.navbar-container {
  display: flex;
  justify-content: space-between;
  align-items: center;
}

.logo {
  display: flex;
  align-items: center;
  color: #000; /* Black logo text */
  font-weight: bold;
}

.logo i {
  font-size: 1.5em; /* Adjust icon size */
  margin-right: 3px;
  color: #555; /* Slightly lighter icon color */
}

.logo span {
  font-size: 1.2em;
  margin-left: 5px;
}

.navbar nav ul {
  list-style: none;
  display: flex;
}

.navbar nav li {
  margin-left: 1.5rem;
}

.navbar nav a {
  text-decoration: none;
  color: #555; /* Grey link color */
  font-size: 1rem;
  font-weight: 500;
  transition: color 0.3s ease;
}

.navbar nav a:hover {
  color: #000; /* Black on hover */
}

/* Hero Section Styles */
.hero {
  background-color: #fff; /* White background */
  padding: 4rem 0; /* Vertical padding */
}

.hero-container {
  display: flex;
  justify-content: space-between;
  align-items: center;
  gap: 2rem; /* Space between text and image */
}

.hero-text h1 {
  font-size: 3rem; /* Large heading */
  line-height: 1.2;
  margin-bottom: 0.5rem;
  color: #111; /* Dark heading color */
  font-weight: 700; /* Bold */
}

.hero-text p {
  font-size: 1.1rem;
  margin-bottom: 1.5rem;
  color: #555; /* Grey paragraph text */
}

.btn {
  display: inline-block;
  padding: 0.75rem 1.5rem;
  text-decoration: none;
  border-radius: 6px; /* Slightly rounded corners */
  font-size: 1rem;
  font-weight: 500;
  transition: background-color 0.3s ease, color 0.3s ease;
  cursor: pointer;
  border: none;
}

.btn-dark {
  background-color: #333; /* Dark grey button */
  color: #fff;
}

.btn-dark:hover {
  background-color: #555; /* Lighter grey on hover */
}

.hero-image img {
  max-width: 450px; /* Adjust max-width as needed */
  height: auto;
  display: block; /* Remove extra space below image */
}

/* Signature Section Styles */
.signature {
  padding: 4rem 0;
  background-color: #f8f8f8; /* Light grey background */
}

.signature-container h2 {
  text-align: center;
  font-size: 2.5rem;
  margin-bottom: 3rem;
  color: #111;
  font-weight: 700;
}

.signature-cards {
  display: flex;
  justify-content: space-around; /* Distribute cards */
  align-items: flex-start; /* Align tops of cards */
  flex-wrap: wrap; /* Allow wrapping on smaller screens */
  gap: 2rem; /* Space between cards */
}

.card {
  background-color: #fff;
  text-align: center;
  width: calc(33.333% - 2rem); /* Approx 3 cards per row */
  min-width: 250px; /* Minimum card width */
  padding-bottom: 1.5rem;
  box-shadow: 0 1px 3px rgba(0, 0, 0, 0.1);
  border-radius: 4px;
  overflow: hidden; /* Ensure image corners are rounded if needed */
}

.card img {
  width: 100%;
  height: 200px; /* Fixed height for images */
  object-fit: cover; /* Cover the area, cropping if needed */
  display: block;
}

.card p {
  margin-top: 1rem;
  font-size: 1.1rem;
  font-weight: 600;
  color: #333;
}

/* About Us Section Styles */
.about-us {
  padding: 4rem 0;
  background-color: #fff;
}

.about-us-container {
  max-width: 800px; /* Narrower container for text */
}

.about-us h2 {
  text-align: center;
  font-size: 2.5rem;
  margin-bottom: 2rem;
  color: #111;
  font-weight: 700;
}

.about-us p {
  font-size: 1rem;
  color: #555;
  margin-bottom: 1.5rem;
  text-align: justify; /* Justify text */
}

/* Responsive Adjustments */
@media (max-width: 992px) {
  .hero-text h1 {
    font-size: 2.5rem;
  }
  .hero-image img {
    max-width: 350px;
  }
  .card {
    width: calc(50% - 1.5rem); /* 2 cards per row */
  }
}

@media (max-width: 768px) {
  /* Stack navbar items if needed, or implement a burger menu */
  .navbar-container {
    flex-direction: column;
    align-items: center;
  }
  .navbar nav {
    margin-top: 1rem;
  }
  .navbar nav li {
    margin: 0 0.75rem;
  }

  .hero {
    padding: 3rem 0;
  }
  .hero-container {
    flex-direction: column-reverse; /* Image above text */
    text-align: center;
  }
  .hero-text {
    margin-top: 2rem;
  }
  .hero-image img {
    max-width: 80%; /* Allow image to be larger relative to screen */
    margin: 0 auto;
  }

  .signature-container h2,
  .about-us h2 {
    font-size: 2rem;
  }

  .card {
    width: calc(50% - 1rem); /* Adjust gap/width */
  }
}

@media (max-width: 576px) {
  .hero-text h1 {
    font-size: 2rem;
  }
  .card {
    width: 100%; /* 1 card per row */
    max-width: 350px; /* Max width for single cards */
    margin-left: auto;
    margin-right: auto;
  }
  .about-us p {
    text-align: left; /* Revert justify on small screens if needed */
  }
}


</style>
