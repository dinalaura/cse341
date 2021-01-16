<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Homepage - CSE 341</title>
  <link rel="stylesheet" href="styles.css">
  <!-- CSS only -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
</head>
<body>
<nav class="navbar navbar-dark bg-dark">
        <nav class="navbar navbar-light">
            <form class="container-fluid justify-content-start">
             <a href="https://dina-moreno-cse341.herokuapp.com/"> <button class="btn btn-outline-success me-2" type="button">Dina Moreno</button></a>
             <a href="https://dina-moreno-cse341.herokuapp.com/assignments.html"> <button class="btn btn-sm btn-outline-secondary" type="button">Assignments</button> </a>
            </form>
          </nav>
      </nav>
      <div id="header">
    <h1>Dina Moreno</h1>
<h2>CSE 341 Assignments</h2>
</div>

<div class="card" style="width: 18rem;">
  <img src="/foto.jpg" class="card-img-top" alt="Dina's picture">
  <div class="card-body">
    <p class="card-text">Hello Everyone! <br>
Welcome to my Heroku app. Here I will share some of my work on backend development. I'm learning PHP and jQuery; last semester, I learned JavaScript and Advanced CSS. Also, I'm learning English as I go with this project. I built this homepage using HTML, PHP, CSS, and Bootstrap. I'll add all of my work above on the "Assignments link."</p>
  </div>
</div>
<footer>
<?php
// phpinfo();
echo "Today is" . "date(l)" . "Y-m-d";
?>
</footer>


</body>
</html>
