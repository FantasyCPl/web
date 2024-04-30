<!DOCTYPE html>
<html>
<head>
    <link rel="preload" href="main.js" as="script">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script type="text/javascript" src="slick.min.js"></script>
    <script src="main.js"></script>

    <script src="slider.js"></script>

    <?php require 'db.php'; ?>

    <link rel="stylesheet" href="slick.css">
    <link rel="stylesheet" href="scss/main.css">
</head>
<nav class="nav" id="menu">
  <div class="wrap">
    <div class="brand">
      <span>Landing Page</span>
    </div>
      <button id="mobile-btn" class="hamburger-btn">
      <span class="hamburger-line"></span>
      <span class="hamburger-line"></span>
      <span class="hamburger-line"></span>
    </button>
    <ul class="top-menu" id="top-menu">
      <li><a href="#"><i class="fa fa-home" aria-hidden="true"></i></a></li>
      <li><a href="#">Services</a></li>
      <li><a href="#">About</a></li>
      <li><a href="#">Contact</a></li>
    </ul>
  </div>
</nav>

<header class="hero">
  <div class="content">
    <p>Best university that you ever saw!</p>
    <button class="cta">Learn More</button>
  </div>
</header>

<main class="main">
  <section>
    <div class="tab-row">
      <div class="col-12">
        <h2>Regular Section</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dignissimos voluptatum repudiandae aliquam, sit quasi ipsa! Quidem dolorum, sit beatae laboriosam error cupiditate veniam commodi, animi, asperiores consequuntur laborum. Quod, deleniti.</p>
      </div>
    </section>
    <section class="feature">
      <div class="tab-row">
        <div class="col-12">
          	<h2>Feature Section</h2> 
		<div class="wrapper">
			<div class="slider">



    <?php 
    $person = get_person_all();
    foreach($person as $p) : ?>
			<?php require 'header.php';?>
    <?php endforeach; ?>



		</div>
			
		</div>
        	
        </div>
      </div>
  </section>
  <section>
    <div class="tab-row">
      <div class="col-4">
        <h2>Columns</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fuga porro sapiente, corporis dignissimos laudantium illo expedita corrupti asperiores esse quae.</p>
      </div>
      <div class="col-4">
        <h2>Columns</h2>
        <p>Repellat qui, dolores nemo asperiores incidunt quidem dolorum. Quos, deleniti neque architecto dolore magni aliquid. Inventore suscipit consequuntur excepturi ipsam.</p>
      </div>
      <div class="col-4">
        <h2>Columns</h2>
        <p>Doloribus perferendis a ipsum ad, consectetur animi aliquam maxime, earum aspernatur, ea commodi tempore suscipit explicabo cupiditate at nemo quae.</p>
      </div>
    </div>
  </section>
</main>

<footer class="footer">
    <div class="row">
      <div class="col-6">
        <p><i class="fa fa-phone" aria-hidden="true"></i> +44 (0)123 456 789</p>
			<p><i class="fa fa-envelope" aria-hidden="true"></i> info@landingpage.com</p>
      </div>
      <div class="col-6" style="text-align: right;">
        <h3>Heading</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi a unde iste harum quis veritatis laudantium tempora, error veniam, incidunt?</p>
        </ul>
      </div>
    </div>
    <hr>
    <div class="row">
      <div class="col-12">&copy; 2017 Brand - <a href="#">Facebook</a> - <a href="#">Twitter</a></div>
    </div>
</footer>
</html>
