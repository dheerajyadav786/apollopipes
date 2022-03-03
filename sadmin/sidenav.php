<?php
$url = 'http://' . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];
?>
<nav class="sidenav navbar navbar-vertical  fixed-left  navbar-expand-xs navbar-light bg-white" id="sidenav-main">
  <div class="scrollbar-inner">
    <!-- Brand -->
    <div class="sidenav-header  align-items-center">
      <a class="navbar-brand">
        <img src="assets/img/brand/blue.png" class="navbar-brand-img" alt="...">
      </a>
    </div>
    <div class="navbar-inner">
      <!-- Collapse -->
      <div class="collapse navbar-collapse" id="sidenav-collapse-main">
        <!-- Nav items -->
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link <?php if (strpos($url,'index') !== false) { echo 'active'; } ?>" href="index">
              <i class="ni ni-tv-2 text-primary"></i>
              <span class="nav-link-text">Dashboard</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link <?php if (strpos($url,'products') !== false) { echo 'active'; } ?>" href="products">
              <i class="ni ni-app text-orange"></i>
              <span class="nav-link-text">Products</span>
            </a>
          </li>
          <!-- <li class="nav-item">
            <a class="nav-link <?php if (strpos($url,'product-tabs') !== false) { echo 'active'; } ?>" href="product-tabs">
              <i class="ni ni-app text-orange"></i>
              <span class="nav-link-text">Product Tabs</span>
            </a>
          </li> -->
          <li class="nav-item">
            <a class="nav-link <?php if (strpos($url,'product-content') !== false) { echo 'active'; } ?>" href="product-content">
              <i class="ni ni-app text-orange"></i>
              <span class="nav-link-text">Product Tabs Content</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link <?php if (strpos($url,'investor-relations') !== false) { echo 'active'; } ?>" href="investor-relations">
              <i class="ni ni-app text-orange"></i>
              <span class="nav-link-text">Investor Relations</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link <?php if (strpos($url,'newsletter') !== false) { echo 'active'; } ?>" href="newsletter">
              <i class="ni ni-app text-orange"></i>
              <span class="nav-link-text">Newsletter Form Entries</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link <?php if (strpos($url,'contact-form') !== false) { echo 'active'; } ?>" href="contact-form">
              <i class="ni ni-app text-orange"></i>
              <span class="nav-link-text">Contact Form Entries</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link <?php if (strpos($url,'enquiry-form') !== false) { echo 'active'; } ?>" href="enquiry-form">
              <i class="ni ni-app text-orange"></i>
              <span class="nav-link-text">Enquiry Form Entries</span>
            </a>
          </li>
        </ul>
      </div>
    </div>
  </div>
</nav>