<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Assignments CSE 341</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <nav class="navbar navbar-dark bg-dark">
        <nav class="navbar navbar-light">
            <form class="container-fluid justify-content-start">
                <a href="https://dina-moreno-cse341.herokuapp.com/"> <button class="btn btn-outline-success me-2"
                        type="button">Dina Moreno</button></a>
                <a href="https://dina-moreno-cse341.herokuapp.com/assignments.php"> <button
                        class="btn btn-sm btn-outline-secondary" type="button">Assignments</button> </a>
            </form>
        </nav>
    </nav>
    <div id="header">
        <h1>Assignments</h1>
    </div>
    <ul>
        <li>
            <a href="https://dina-moreno-cse341.herokuapp.com/cart.php"></a>
        </li>
    </ul>
    <footer>
        <?php
// phpinfo();
echo "Today is " . date(l) . " ";
echo date("Y-m-d") . " The time is " . date("h:i:sa");
?>
    </footer>
</body>

</html>