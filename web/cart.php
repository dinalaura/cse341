<?php
// Start the session
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shopping Cart</title>
  <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
<link rel="stylesheet" href="cart.css">
</head>
<body>

<!-- nav -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="https://dina-moreno-cse341.herokuapp.com/cart.php">Shopping Cart</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="https://dina-moreno-cse341.herokuapp.com/cart.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="https://dina-moreno-cse341.herokuapp.com/cartview.php">View Cart</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="https://dina-moreno-cse341.herokuapp.com/cartcheck.php">Checkout</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
<!-- end of nav -->
<!-- Items -->
<div class="grid-container">
<div class="card" style="width: 18rem;">
  <img src="cart/1.jpg" class="card-img-top" alt="Child Skate Board">
  <div class="card-body">
    <h5 class="card-title">Child Skate Board</h5>
    <p class="card-text">Different colors.</p>
    <h6>$30</h6>
    <a href="#" class="btn btn-primary">Add to cart</a>
  </div>
</div>

<div class="card" style="width: 18rem;">
  <img src="cart/2.jpg" class="card-img-top" alt="Clear Skateboard">
  <div class="card-body">
    <h5 class="card-title">Clear Skateboard</h5>
    <p class="card-text">100% clear.</p>
    <h6>$50</h6>
    <a href="#" class="btn btn-primary">Add to cart</a>
  </div>
</div>

<div class="card" style="width: 18rem;">
  <img src="cart/3.jpg" class="card-img-top" alt="Vintage Skateboard">
  <div class="card-body">
    <h5 class="card-title">Vintage Skateboard</h5>
    <p class="card-text">Brown and white stripes.</p>
    <h6>$80</h6>
    <a href="#" class="btn btn-primary">Add to cart</a>
  </div>
</div>

<div class="card" style="width: 18rem;">
  <img src="cart/4.jpg" class="card-img-top" alt="Blue Skateboard">
  <div class="card-body">
    <h5 class="card-title">Blue Skateboard</h5>
    <p class="card-text">Fresh style skaboard.</p>
    <h6>$60</h6>
    <a href="#" class="btn btn-primary">Add to cart</a>
  </div>
</div>

<div class="card" style="width: 18rem;">
  <img src="cart/5.jpg" class="card-img-top" alt="Surfboard">
  <div class="card-body">
    <h5 class="card-title">Surfboard</h5>
    <p class="card-text">Great for beginners.</p>
    <h6>$60</h6>
    <a href="#" class="btn btn-primary">Add to cart</a>
  </div>
</div>

<div class="card" style="width: 18rem;">
  <img src="cart/6.jpg" class="card-img-top" alt="Surfboard colors">
  <div class="card-body">
    <h5 class="card-title">Surfboard</h5>
    <p class="card-text">Various colors and sizes.</p>
    <h6>$50</h6>
    <a href="#" class="btn btn-primary">Add to cart</a>
  </div>
</div>

<div class="card" style="width: 18rem;">
  <img src="cart/7.jpg" class="card-img-top" alt="Bamboo surfboard">
  <div class="card-body">
    <h5 class="card-title">Bamboo Surfboard</h5>
    <p class="card-text">Perfect for competitions.</p>
    <h6>$100</h6>
    <a href="#" class="btn btn-primary">Add to cart</a>
  </div>
</div>

<div class="card" style="width: 18rem;">
<img src="cart/8.jpg" class="card-img-top" alt="Yellow backpack">
  <div class="card-body">
    <h5 class="card-title">Yellow Backpack</h5>
    <p class="card-text">Great for children.</p>
    <h6>$30</h6>
    <a href="#" class="btn btn-primary">Add to cart</a>
  </div>
</div>

<div class="card" style="width: 18rem;">
  <img src="cart/9.jpg" class="card-img-top" alt="Red backpack">
  <div class="card-body">
    <h5 class="card-title">Red backpack</h5>
    <p class="card-text">Largest backpack for trail activities.</p>
    <h6>$100</h6>
    <a href="#" class="btn btn-primary">Add to cart</a>
  </div>
</div>

<div class="card" style="width: 18rem;">
 <img src="cart/10.jpg" class="card-img-top" alt="blue backpack">
  <div class="card-body">
    <h5 class="card-title">Blue backpack</h5>
    <p class="card-text">Great for trail activities.</p>
    <h6>$20</h6>
    <a href="#" class="btn btn-primary">Add to cart</a>
  </div>
</div>

<div class="card" style="width: 18rem;">
<img src="cart/11.jpg" class="card-img-top" alt="Light sneakers">
  <div class="card-body">
    <h5 class="card-title">Sneakers</h5>
    <p class="card-text">Perfect for skateboarding.</p>
    <h6>$60</h6>
    <a href="#" class="btn btn-primary">Add to cart</a>
  </div>
</div>

<div class="card" style="width: 18rem;">
  <img src="cart/12.jpg" class="card-img-top" alt="sunglasses">
  <div class="card-body">
    <h5 class="card-title">Sunglasses</h5>
    <p class="card-text">Beach sunglasses.</p>
    <h6>$40</h6>
    <a href="#" class="btn btn-primary">Add to cart</a>
  </div>
</div>

</div>
<!-- End of Items -->

<footer class="navbar-dark bg-dark">Copyright©2021</footer>

</body>
</html>