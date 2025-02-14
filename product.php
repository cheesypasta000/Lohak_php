<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Our Product</title>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap"
    rel="stylesheet" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link rel="stylesheet" href="css/styles.css" />
  <link rel="stylesheet" href="css/product.css">
  <link rel="icon" type="image/png" href="pic/logo.png">
</head>

<body>
  <!-- Navbar -->
  <?php
  $navbarClass = ''; // No additional classes for navbar
  $searchBoxClass = 'custom-search-class'; // Custom class for search box
  $showLoginDropdown = false; // Show login dropdown
  include 'components/navbar.php';
  ?>

  <!-- hero -->
  <section class="hero">
    <div class="container">
      <h1 class="display-4">Discover Our Amazing Product</h1>
      <p class="lead">
        Learn more about the features and benefits of our product.
      </p>
      <a href="shoppingpage.html" class="btn btn-primary btn-lg">Explore More</a>
    </div>
  </section>
  <!-- features -->
  <section id="features" class="text-center py-5">
    <div class="container">
      <h2 class="mb-4 fade-in">Product Features</h2>
      <div class="row">
        <div class="col-md-4 fade-in">
          <i class="fa-solid fa-check fa-3x mb-3"></i>
          <h3>Authentic Artistry</h3>
          <p>
            Authentic Khmer handicrafts, from intricately woven textiles to
            hand-carved wooden sculptures.
          </p>
        </div>
        <div class="col-md-4 fade-in">
          <i class="fa-solid fa-location-dot fa-3x mb-3"></i>
          <h3>Empowering Artisans and Cultural</h3>
          <p>
            Help local and empowering local artisans and improving cultural
            awareness.
          </p>
        </div>
        <div class="col-md-4 fade-in">
          <i class="fa-solid fa-heart fa-3x mb-3"></i>
          <h3>User-Friendly Design</h3>
          <p>
            Designed with the user in mind, our product is intuitive and easy
            to use for everyone.
          </p>
        </div>
      </div>
    </div>
  </section>
  <!-- products -->
  <section id="products" class="container text-center my-5">
    <h2 class="mb-4 fade-in">Our Products</h2>
    <div class="row row-cols-1 row-cols-md-3 g-4">
      <div class="col scale-in">
        <div class="card h-100">
          <div class="card-img-top-container">
            <img
              src="https://images.squarespace-cdn.com/content/v1/5f4d612670877e18890aa67d/1670014246155-OY9TBS1BH1L3NFJ1RVUH/cambodianbrac2.jpg?format=1500w"
              class="card-img-top" alt="Silver Jewelry" />
          </div>
          <div class="card-body d-flex flex-column">
            <h5 class="card-title">Silver Jewelry</h5>
            <p class="card-text">
              Delicate necklaces, cuffs, and earrings made by local artisans
              are often set with semiprecious gems found in Cambodia.
            </p>
            <p class="card-text mt-auto"><strong>Price: $299.99</strong></p>
            
          </div>
        </div>
      </div>
      <div class="col scale-in">
        <div class="card h-100">
          <div class="card-img-top-container">
            <img src="https://www.khmertimeskh.com/wp-content/uploads/2019/07/Rattan-Association-of-Cambodia-3.jpg"
              class="card-img-top" alt="Rattan Furniture" />
          </div>
          <div class="card-body d-flex flex-column">
            <h5 class="card-title">Rattan Furniture</h5>
            <p class="card-text">
              Durable and stylish furniture made from rattan, including
              chairs, tables, and storage units, handcrafted using traditional
              weaving techniques.
            </p>
            <p class="card-text mt-auto"><strong>Price: $249.99</strong></p>
            
          </div>
        </div>
      </div>
      <div class="col scale-in">
        <div class="card h-100">
          <div class="card-img-top-container">
            <img
              src="https://www.triplekangkor.com/wp-content/uploads/2023/08/What-are-the-Cambodian-traditional-textiles.jpg"
              class="card-img-top" alt="Batik Fabrics" />
          </div>
          <div class="card-body d-flex flex-column">
            <h5 class="card-title">Batik Fabrics</h5>
            <p class="card-text">
              Vibrantly colored and patterned batik fabrics, created using a
              wax-resist dyeing technique, suitable for making clothing,
              accessories, and home decor items.
            </p>
            <p class="card-text mt-auto"><strong>Price: $39.99</strong></p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- testimonials -->
  <section id="testimonials" class="container text-center my-5">
    <h2 class="mb-4 fade-in">What Our Customers Say</h2>
    <div class="row">
      <div class="col-md-4 testimonial slide-in-left">
        <img src="https://d22e6o9mp4t2lx.cloudfront.net/cms/pfp3_d7855f9562.webp" alt="Customer 1" class="mb-3" />
        <blockquote class="blockquote">
          <p class="mb-0">
            "This product has exceeded my expectations. The quality and
            performance are unmatched!"
          </p>
          <footer class="blockquote-footer">Mark</footer>
        </blockquote>
      </div>
      <div class="col-md-4 testimonial fade-in">
        <img src="https://d22e6o9mp4t2lx.cloudfront.net/cms/pfp5_3be35ab548.jpg" alt="Customer 2" class="mb-3" />
        <blockquote class="blockquote">
          <p class="mb-0">
            "I love how easy it is to use. It has made my life so much
            easier."
          </p>
          <footer class="blockquote-footer">Sofia</footer>
        </blockquote>
      </div>
      <div class="col-md-4 testimonial slide-in-right">
        <img
          src="https://i0.wp.com/fiverr-res.cloudinary.com/images/q_auto,f_auto/gigs2/112692698/original/31a5d2469689575beee06ffcf4e9e76abab3abe2/logo-design-for-profile-picture-dessin-pour-photo-de-profil.png"
          alt="Customer 3" class="mb-3" />
        <blockquote class="blockquote">
          <p class="mb-0">
            "Great customer service and an even better product. Highly
            recommend!"
          </p>
          <footer class="blockquote-footer">John</footer>
        </blockquote>
      </div>
    </div>
  </section>
  <?php include 'components/footer.php'; ?>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/js/all.min.js"></script>
  <!-- animation for scrolling -->
  <script>
    document.addEventListener('DOMContentLoaded', (event) => {
      const animatedElements = document.querySelectorAll('.fade-in, .scale-in, .slide-in-left, .slide-in-right');

      const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
          if (entry.isIntersecting) {
            entry.target.classList.add('visible');
          }
        });
      }, {
        threshold: 0.1
      });

      animatedElements.forEach(el => {
        observer.observe(el);
      });
    });
  </script>
</body>

</html>