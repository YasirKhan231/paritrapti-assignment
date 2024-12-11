<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>JinStore</title>
  <link rel="stylesheet" href="{{ asset('css/app.css') }}">
  <script src="{{ asset('js/app.js') }}" ></script>
  
</head>

<body>
  <!-- Top Banner -->
  <div class="top-banner">
    <p class="header-text">FREE delivery & 40% Discount for next 3 orders! Place your 1st order in.</p>
    <div class="countdown">
      <span id="hours">47</span>hrs
      <span id="minutes">06</span>min
      <span id="seconds">57</span>sec
      <span id="milliseconds">08</span>
    </div>
  </div>

  <!-- Secondary Header -->
  <div class="secondary-header">
    <div class="left-links">
      <a href="#">About Us</a>
      <a href="#">My account</a>
      <a href="#">Wishlist</a>
      <span class="delivery-time">We deliver to you every day from 7:00 to 23:00</span>
    </div>
    <div class="right-links">
      <select class="language-select">
        <option>English</option>
      </select>
      <select class="currency-select">
        <option>USD</option>
      </select>
      <a href="#">Order Tracking</a>
    </div>
  </div>

  <!-- Main Header -->
  <header class="main-header">
    <div class="logo">
      <img src="{{ asset('logo.png') }}" alt="JinStore" class="logo-image">
      <span>JinStore</span>
    </div>

    <div class="location-selector">
      <span class="location-icon">📍</span>
      <span>Deliver to</span>
    </div>

    <div class="search-bar">
      <input type="text" placeholder="Search for products, categories or brands...">
      <button type="submit">
        <img src="{{ asset('search2.png') }}" class="search-icon" alt="">
      </button>
    </div>

    <div class="header-actions">
      <button class="sign-in">
        <span class="user-icon">👤</span>
        <span>Sign In<br>Account</span>
      </button>

      <button class="wishlist">
        <span class="heart-icon">❤️</span>
        <span class="counter">0</span>
      </button>

      <button class="cart">
        <span class="cart-icon">🛒</span>
        <span class="counter">0</span>
      </button>
    </div>
  </header>

  <!-- Navigation Menu -->
  <nav class="main-nav">
    <ul class="left-menu">
      <li><a href="#" class="home">Home</a></li>
      <li><a href="#" class="shop">Shop</a></li>
      <li><a href="#">Fruits & Vegetables</a></li>
      <li><a href="#">Beverages</a></li>
      <li><a href="#">Blog</a></li>
      <li><a href="#">Contact</a></li>
    </ul>

    <div class="right-menu">
      <div class="trending">
        <span>Trending Products</span>
        <span class="arrow">▼</span>
      </div>
      <div class="almost-finished">
        <span>Almost Finished</span>
        <span class="hot">HOT</span>
      </div>
    </div>
  </nav>
  <div class="banner">
    <div class="banner-content">
      <span class="discount-tag">Weekend Discount</span>
      <h1>Shopping with us for better quality and the best price</h1>
      <p>We have prepared special discounts for you on grocery products.<br>
        Don't miss these opportunities...</p>
      <div class="price-action">
        <button class="shop-now">Shop Now</button>
        <div class="price">
          <span class="current-price">$21.67</span>
          <span class="original-price">$26.67</span>
        </div>
      </div>
    </div>
    <div class="banner-images">
      <img src="https://encrypted-tbn3.gstatic.com/images?q=tbn:ANd9GcTysfa6VOOyfLLjimeMn0Yh7yPM69T5-i5s4vA7CUDqs0912eiZ" alt="Breakfast cereal with fruits"
        class="cereal-bowl">
      
    </div>
  </div>
  <nav class="category-nav">
    <div class="category-item">
      <img src="https://images.unsplash.com/photo-1542838132-92c53300491e?w=150" alt="Fruits & Vegetables">
      <span>Fruits & Vegetables</span>
    </div>
    <div class="category-item">
      <img src="https://images.unsplash.com/photo-1544367567-0f2fcb009e0b?w=150" alt="Baby & Pregnancy">
      <span>Baby & Pregnancy</span>
    </div>
    <div class="category-item">
      <img src="https://images.unsplash.com/photo-1625772299848-391b6a87d7b3?w=150" alt="Beverages">
      <span>Beverages</span>
    </div>
    <div class="category-item">
      <img src="https://images.unsplash.com/photo-1607623814075-e51df1bdc82f?w=150" alt="Meats & Seafood">
      <span>Meats & Seafood</span>
    </div>
    <div class="category-item">
      <img src="{{ asset('biscuit.png') }}" alt="Biscuits & Snacks">
      <span>Biscuits & Snacks</span>
    </div>
    <div class="category-item">
      <img src="https://images.unsplash.com/photo-1509440159596-0249088772ff?w=150" alt="Breads & Bakery">
      <span>Breads & Bakery</span>
    </div>
    <div class="category-item">
      <img src="https://images.unsplash.com/photo-1550583724-b2692b85b150?w=150" alt="Breakfast & Dairy">
      <span>Breakfast & Dairy</span>
    </div>
    <div class="category-item">
      <img src="https://images.unsplash.com/photo-1576398289164-c48dc021b4e1?w=150" alt="Frozen Foods">
      <span>Frozen Foods</span>
    </div>
    <div class="category-item">
      <img src="https://images.unsplash.com/photo-1578916171728-46686eac8d58?w=150" alt="Grocery & Staples">
      <span>Grocery & Staples</span>
    </div>
  </nav>
  <div class="ep-container">
    <div class="ep-header">
      <div>
        <h2 class="ep-title">Editor's Pick</h2>
        <p class="ep-subtitle">New products with updated stocks.</p>
      </div>
      <button class="ep-view-all">View All →</button>
    </div>

    <div class="ep-flex-grid">
      <!-- Example Card -->
      <div class="ep-card">
        <div class="ep-card-content">
          <span class="ep-badge ep-discount">75%</span>
          <button class="ep-wishlist">❤️</button>
          <div class="ep-image-container">
            <img src="https://images.unsplash.com/photo-1600271886742-f049cd451bba?auto=format&fit=crop&w=500"
              alt="100 Percent Apple Juice - 64 fl oz Bottle" />
          </div>
          <div class="ep-badges">
            <span class="ep-badge ep-organic">ORGANIC</span>
          </div>
          <div class="ep-rating">
            ★★★☆☆
            <span class="ep-reviews">3 reviews</span>
          </div>
          <h3 class="ep-product-title">100 Percent Apple Juice - 64 fl oz Bottle</h3>
          <div class="ep-price">
            <span class="ep-price-current">$0.50</span>
            <span class="ep-price-original">$1.99</span>
          </div>
          <button class="ep-add-to-cart">
            Add to cart
            <span>+</span>
          </button>
          <div class="ep-stock-info">
            <p>Available only: 23</p>
            <div class="ep-stock-bar">
              <div class="ep-stock-fill" style="width: 46%;"></div>
            </div>
          </div>
        </div>
      </div>
      <div class="ep-card">
        <div class="ep-card-content">
          <span class="ep-badge ep-discount">75%</span>
          <button class="ep-wishlist">❤️</button>
          <div class="ep-image-container">
            <img src="https://images.unsplash.com/photo-1600271886742-f049cd451bba?auto=format&fit=crop&w=500"
              alt="100 Percent Apple Juice - 64 fl oz Bottle" />
          </div>
          <div class="ep-badges">
            <span class="ep-badge ep-organic">ORGANIC</span>
          </div>
          <div class="ep-rating">
            ★★★☆☆
            <span class="ep-reviews">3 reviews</span>
          </div>
          <h3 class="ep-product-title">100 Percent Apple Juice - 64 fl oz Bottle</h3>
          <div class="ep-price">
            <span class="ep-price-current">$0.50</span>
            <span class="ep-price-original">$1.99</span>
          </div>
          <button class="ep-add-to-cart">
            Add to cart
            <span>+</span>
          </button>
          <div class="ep-stock-info">
            <p>Available only: 23</p>
            <div class="ep-stock-bar">
              <div class="ep-stock-fill" style="width: 46%;"></div>
            </div>
          </div>
        </div>
      </div>
      <div class="ep-card">
        <div class="ep-card-content">
          <span class="ep-badge ep-discount">75%</span>
          <button class="ep-wishlist">❤️</button>
          <div class="ep-image-container">
            <img src="https://images.unsplash.com/photo-1600271886742-f049cd451bba?auto=format&fit=crop&w=500"
              alt="100 Percent Apple Juice - 64 fl oz Bottle" />
          </div>
          <div class="ep-badges">
            <span class="ep-badge ep-organic">ORGANIC</span>
          </div>
          <div class="ep-rating">
            ★★★☆☆
            <span class="ep-reviews">3 reviews</span>
          </div>
          <h3 class="ep-product-title">100 Percent Apple Juice - 64 fl oz Bottle</h3>
          <div class="ep-price">
            <span class="ep-price-current">$0.50</span>
            <span class="ep-price-original">$1.99</span>
          </div>
          <button class="ep-add-to-cart">
            Add to cart
            <span>+</span>
          </button>
          <div class="ep-stock-info">
            <p>Available only: 23</p>
            <div class="ep-stock-bar">
              <div class="ep-stock-fill" style="width: 46%;"></div>
            </div>
          </div>
        </div>
      </div>
      <div class="ep-card">
        <div class="ep-card-content">
          <span class="ep-badge ep-discount">75%</span>
          <button class="ep-wishlist">❤️</button>
          <div class="ep-image-container">
            <img src="https://images.unsplash.com/photo-1600271886742-f049cd451bba?auto=format&fit=crop&w=500"
              alt="100 Percent Apple Juice - 64 fl oz Bottle" />
          </div>
          <div class="ep-badges">
            <span class="ep-badge ep-organic">ORGANIC</span>
          </div>
          <div class="ep-rating">
            ★★★☆☆
            <span class="ep-reviews">3 reviews</span>
          </div>
          <h3 class="ep-product-title">100 Percent Apple Juice - 64 fl oz Bottle</h3>
          <div class="ep-price">
            <span class="ep-price-current">$0.50</span>
            <span class="ep-price-original">$1.99</span>
          </div>
          <button class="ep-add-to-cart">
            Add to cart
            <span>+</span>
          </button>
          <div class="ep-stock-info">
            <p>Available only: 23</p>
            <div class="ep-stock-bar">
              <div class="ep-stock-fill" style="width: 46%;"></div>
            </div>
          </div>
        </div>
      </div>
      <!-- Repeat Cards as needed -->
    </div>
  </div>
  <div class="category-products">
    <!-- Header Section -->
    <div class="header">
      <div class="header-text">
        <h2>Category Products</h2>
        <span>Do not miss the current offers until the end of March.</span>
      </div>
      <a href="#" class="view-all-link">View All →</a>
    </div>

    <!-- Grid of Promotional Cards -->
    <div class="grid">
      <!-- First Promotional Card -->
      <div class="card card-one">
        <div class="overlay"></div>
        <div class="card-content">
          <span class="badge">Only This Week</span>
          <h3>Make your grocery shopping easy with us</h3>
          <p>Feed your family the best</p>
          <a href="#" class="shop-now-link">Shop Now →</a>
        </div>
      </div>

      <!-- Second Promotional Card -->
      <div class="card card-two">
        <div class="overlay"></div>
        <div class="card-content">
          <span class="badge">Only This Week</span>
          <h3>Get your everyday needs here with us</h3>
          <p>A different kind of grocery store</p>
          <a href="#" class="shop-now-link">Shop Now →</a>
        </div>
      </div>
    </div>
  </div>
  <!-- new 0000000000000-->
  <div class="product-grid">
    <!-- Product Card 1 -->
    <div class="product-card">
      <div class="product-image-container">
        <img src="{{ asset('pizza.jpeg') }}" alt="Pizza" class="product-image">
        <button class="heart-icon">♡</button>
        <span class="badge discount-badge">14%</span>
        <span class="badge cold-sale-badge">COLD SALE</span>
      </div>
      <h3 class="product-title">Great Value Rising Crust Frozen Pizza, Supreme</h3>
      <div class="rating">★★★★☆</div>
      <div class="price">
        <span class="sale-price">$8.99</span>
        <span class="original-price">$9.99</span>
      </div>
      <button class="stock-button">
        🛒 IN STOCK
      </button>
    </div>

    <!-- Product Card 2 -->
    <div class="product-card">
      <div class="product-image-container">
        <img src="https://images.unsplash.com/photo-1464965911861-746a04b4bca6" alt="Strawberries"
          class="product-image">
        <button class="heart-icon">♡</button>
        <span class="badge discount-badge">23%</span>
      </div>
      <h3 class="product-title">Simple Kitchen FD Sliced Strawberries - 1.08lb</h3>
      <div class="rating">★★★★☆</div>
      <div class="price">
        <span class="sale-price">$21.90</span>
        <span class="original-price">$24.90</span>
      </div>
      <button class="stock-button">
        🛒 IN STOCK
      </button>
    </div>

    <!-- Product Card 3 -->
    <div class="product-card">
      <div class="product-image-container">
        <img src="https://images.unsplash.com/photo-1534308983496-4fabb1a015ee" alt="Pepperoni Pizza"
          class="product-image">
        <button class="heart-icon">♡</button>
        <span class="badge discount-badge">33%</span>
      </div>
      <h3 class="product-title">Red Baron Frozen Hand Tossed Ultimate Pepperoni Pizza</h3>
      <div class="rating">★★★★☆</div>
      <div class="price">
        <span class="sale-price">$14.99</span>
        <span class="original-price">$19.99</span>
      </div>
      <button class="stock-button">
        🛒 IN STOCK
      </button>
    </div>

    <!-- Product Card 4 -->
    <div class="product-card">
      <div class="product-image-container">
        <img src="https://images.unsplash.com/photo-1485451456034-3f9391c6f769" alt="Ham & Swiss" class="product-image">
        <button class="heart-icon">♡</button>
        <span class="badge discount-badge">8%</span>
      </div>
      <h3 class="product-title">Oscar Meyer Ham & Swiss Melt Scrambler - 3oz</h3>
      <div class="rating">★★★★★</div>
      <div class="price">
        <span class="sale-price">$11.90</span>
        <span class="original-price">$12.90</span>
      </div>
      <button class="stock-button">
        🛒 IN STOCK
      </button>
    </div>

    <!-- Product Card 5 -->
    <div class="product-card">
      <div class="product-image-container">
        <img src="https://images.unsplash.com/photo-1598449356475-b9f71db7d847" alt="Wraps" class="product-image">
        <button class="heart-icon">♡</button>
        <span class="badge discount-badge">17%</span>
      </div>
      <h3 class="product-title">Large Garden Spinach & Herb Wrap Tortillas - 15oz_6ct</h3>
      <div class="rating">★★★★☆</div>
      <div class="price">
        <span class="sale-price">$27.90</span>
        <span class="original-price">$32.90</span>
      </div>
      <button class="stock-button">
        🛒 IN STOCK
      </button>
    </div>

    <!-- Product Card 6 -->
    <div class="product-card">
      <div class="product-image-container">
        <img src="https://images.unsplash.com/photo-1513104890138-7c749659a591" alt="Cheese Pizza"
          class="product-image">
        <button class="heart-icon">♡</button>
        <span class="badge discount-badge">14%</span>
      </div>
      <h3 class="product-title">Great Value Rising Crust Pizza, Cheese, 27.4 oz</h3>
      <div class="rating">★★★★☆</div>
      <div class="price">
        <span class="sale-price">$27.89</span>
        <span class="original-price">$31.89</span>
      </div>
      <button class="stock-button">
        🛒 IN STOCK
      </button>
    </div>
  </div>
  <div class="hs-banner">
    <div class="hs-banner-content">
      <div class="hs-text-content">
        <h1 class="hs-main-title">In store or online your health & safety is our top priority</h1>
        <p class="hs-subtitle">The only supermarket that makes your life easier, makes you enjoy life and makes it
          better</p>
      </div>
      <div class="hs-illustrations">
        <div class="hs-illustration"></div>
        <div class="hs-illustration"></div>
        <div class="hs-illustration"></div>
      </div>
    </div>
  </div>



  <div class="promo-container">
    <div class="promo-card"
      style="background-image: url('https://images.unsplash.com/photo-1596591606975-97ee5cef3a1e?auto=format&fit=crop&w=800&q=80');">
      <div class="promo-content">
        <div class="promo-badge">Only This Week</div>
        <h2 class="promo-title">We provide you the best quality products</h2>
        <p class="promo-subtitle">A family place for grocery</p>
        <a href="#" class="shop-now">Shop Now</a>
      </div>
    </div>

    <div class="promo-card"
      style="background-image: url('https://images.unsplash.com/photo-1621447504864-d8686e12698c?auto=format&fit=crop&w=800&q=80');">
      <div class="promo-content">
        <div class="promo-badge">Only This Week</div>
        <h2 class="promo-title">We make your grocery shopping more exciting</h2>
        <p class="promo-subtitle">Shine the morning...</p>
        <a href="#" class="shop-now">Shop Now</a>
      </div>
    </div>

    <div class="promo-card"
      style="background-image: url('https://images.unsplash.com/photo-1610832958506-aa56368176cf?auto=format&fit=crop&w=800&q=80');">
      <div class="promo-content">
        <div class="promo-badge">Only This Week</div>
        <h2 class="promo-title">The one supermarket that saves your money</h2>
        <p class="promo-subtitle">Breakfast made better</p>
        <a href="#" class="shop-now">Shop Now</a>
      </div>
    </div>
  </div>
  <section class="news-container">
    <header class="news-header">
      <div class="news-title-wrapper">
        <h2 class="news-title">Our News</h2>
        <span class="news-subtitle">Some of the new posts this week</span>
      </div>
      <a href="#" class="news-view-all">View All →</a>
    </header>

    <div class="news-grid">
      <!-- Article 1 -->
      <article class="news-card">
        <span class="news-category">UNCATEGORIZED</span>
        <img src="{{ asset('news/image1.png') }}" alt="Yellow drink with ice" class="news-image">
        <div class="news-content">
          <h3 class="news-heading">How grocers are approaching delivery as the market evolves</h3>
          <p class="news-description">Blimåkvart treskade i nibel den mobilmasstruk deren jyn nöning osk heferoside i
            rel utran. Fälåss</p>
          <div class="news-meta">
            <span class="news-author">by sinan</span>
            <span class="news-date">3 Nov 2023</span>
          </div>
        </div>
      </article>

      <!-- Article 2 -->
      <article class="news-card">
        <span class="news-category">UNCATEGORIZED</span>
        <img src="{{ asset('news/image2.png') }}" alt="Bottles in ice" class="news-image">
        <div class="news-content">
          <h3 class="news-heading">The Friday Checkout: Food insecurity keeps retailers off balance</h3>
          <p class="news-description">Blimåkvart treskade i nibel den mobilmasstruk deren jyn nöning osk heferoside i
            rel utran. Fälåss</p>
          <div class="news-meta">
            <span class="news-author">by sinan</span>
            <span class="news-date">3 Nov 2023</span>
          </div>
        </div>
      </article>

      <!-- Article 3 -->
      <article class="news-card">
        <span class="news-category">UNCATEGORIZED</span>
        <img src="{{ asset('news/image3.png') }}" alt="Cheese display" class="news-image">
        <div class="news-content">
          <h3 class="news-heading">Consumer want grocer to use AI to help them save money Dunnhumby</h3>
          <p class="news-description">Blimåkvart treskade i nibel den mobilmasstruk deren jyn nöning osk heferoside i
            rel utran. Fälåss</p>
          <div class="news-meta">
            <span class="news-author">by sinan</span>
            <span class="news-date">3 Nov 2023</span>
          </div>
        </div>
      </article>

      <!-- Article 4 -->
      <article class="news-card">
        <span class="news-category">UNCATEGORIZED</span>
        <img src="{{ asset('news/image4.png') }}" alt="People shopping" class="news-image">
        <div class="news-content">
          <h3 class="news-heading">Order up! How grocers are replicating the restaurant experience in retail</h3>
          <p class="news-description">Blimåkvart treskade i nibel den mobilmasstruk deren jyn nöning osk heferoside i
            rel utran. Fälåss</p>
          <div class="news-meta">
            <span class="news-author">by sinan</span>
            <span class="news-date">3 Nov 2023</span>
          </div>
        </div>
      </article>
    </div>
  </section>

  <main class="container">
    <footer class="footer">
      <div class="newsletter">
        <div class="newsletter-content">
          <h3>Join our newsletter for £10 offs</h3>
          <p>Register now to get latest updates on promotions & coupons.Don't worry, we not spam!</p>
        </div>
        <div class="newsletter-form">
          <input type="email" placeholder="Enter your email address">
          <button>SEND</button>
        </div>
        <p class="terms">By subscribing you agree to our <a href="#">Terms & Conditions</a> and <a href="#">Privacy &
            Cookies Policy</a>.</p>
      </div>

      <div class="footer-content">
        <div class="footer-section">
          <h4>Do You Need Help ?</h4>
          <p class="help-text">Aullestigen syr. Nek diuråsk fridomssa. Nor antipol sveps nyrat. Pressa filmiska.</p>
          <div class="contact-info">
            <div class="phone">
              <span>Monday-Friday: 09am-6pm</span>
              <h3>0 800 300-353</h3>
            </div>
            <div class="email">
              <span>Need help with your order?</span>
              <a href="mailto:info@example.com">info@example.com</a>
            </div>
          </div>
        </div>

        <div class="footer-section">
          <h4>Make Money with Us</h4>
          <ul>
            <li><a href="#">Sell on Origin</a></li>
            <li><a href="#">Sell Your Services on Origin</a></li>
            <li><a href="#">Sell on Origin Business</a></li>
            <li><a href="#">Sell Your Apps on Origin</a></li>
            <li><a href="#">Become an Affiliate</a></li>
            <li><a href="#">Advertise Your Products</a></li>
            <li><a href="#">Self-Publish with Us</a></li>
            <li><a href="#">Become an IReview Vendor</a></li>
          </ul>
        </div>

        <div class="footer-section">
          <h4>Let Us Help You</h4>
          <ul>
            <li><a href="#">Accessibility Statement</a></li>
            <li><a href="#">Your Orders</a></li>
            <li><a href="#">Returns & Replacements</a></li>
            <li><a href="#">Shipping Rates & Policies</a></li>
            <li><a href="#">Refund and Returns Policy</a></li>
            <li><a href="#">Privacy Policy</a></li>
            <li><a href="#">Terms and Conditions</a></li>
            <li><a href="#">Cookie Settings</a></li>
            <li><a href="#">Help Center</a></li>
          </ul>
        </div>

        <div class="footer-section">
          <h4>Get to Know Us</h4>
          <ul>
            <li><a href="#">Careers for Origin</a></li>
            <li><a href="#">About Origin</a></li>
            <li><a href="#">Investor Relations</a></li>
            <li><a href="#">Origin Devices</a></li>
            <li><a href="#">Customer reviews</a></li>
            <li><a href="#">Social Responsibility</a></li>
            <li><a href="#">Store Locations</a></li>
          </ul>

          <div class="app-download">
            <h4>Download our app</h4>
            <div class="app-buttons">
              <a href="#" class="app-button">
                <img src="https://upload.wikimedia.org/wikipedia/commons/7/78/Google_Play_Store_badge_EN.svg"
                  alt="Get it on Google Play">
              </a>
              <a href="#" class="app-button">
                <img src="https://upload.wikimedia.org/wikipedia/commons/3/3c/Download_on_the_App_Store_Badge.svg"
                  alt="Download on the App Store">
              </a>
            </div>
          </div>
        </div>
      </div>

      <div class="footer-bottom">
        <div class="social-links">
          <span>Follow us on social media:</span>
          <a href="#" class="social-icon">Facebook</a>
          <a href="#" class="social-icon">Twitter</a>
          <a href="#" class="social-icon">Instagram</a>
          <a href="#" class="social-icon">LinkedIn</a>
        </div>

        <div class="payment-methods">
          <img src="https://upload.wikimedia.org/wikipedia/commons/5/5e/Visa_Inc._logo.svg" alt="Visa">
          <img src="https://upload.wikimedia.org/wikipedia/commons/b/b5/PayPal.svg" alt="PayPal">
          <img src="{{ asset('skrill.png') }}" alt="Skrill" class="skrill">
          <img src="{{ asset('klarna.png') }}" alt="Klarna" class="klarna">
        </div>

        <div class="copyright">
          <p>Copyright 2024 © Jiradom WooCommerce WordPress Theme. All right reserved. Powered by <a href="#">BlackFiles
              Themes</a>.</p>
          <div class="legal-links">
            <a href="#">Terms and Conditions</a>
            <a href="#">Privacy Policy</a>
            <a href="#">Order Tracking</a>
          </div>
        </div>
      </div>
    </footer>
</body>

</html>