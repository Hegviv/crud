<?php
session_start();
?>

<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <title>Hozzáadás</title>
    <link rel="stylesheet" href="./hozzad.css ">
</head>
<body>
    <nav class="navbar navbar-expand bg-dark justify-content-end" >
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="./index.php"> Vásárlók</a>
            </li>
        </ul>
    </nav>  

    <?php include('uzenet.php'); ?>

    <div class="container">
        <form action="crud.php" method="POST">

            <div class="card-header">
                <h2>Hozzáadás</h2>
            </div>

            <div class="mb-3">
                <label>Név</label>
                <input type="text" name="nev" class="form-control" required>
            </div>

            <div class="mb-3">
                <label>jelszó</label>
                <input type="password" name="jelszo" class="form-control" required>
            </div>

            <div class="mb-3">
                <label>Email</label>
                <input type="email" name="email" class="form-control" required>
            </div>

            <div class="mb-3">
                <label>Számlázási cím</label>
                <input type="text" name="szamlazasi" class="form-control" required>
            </div>

            <div class="mb-3">
                <label>Szállítási cím</label>
                <input type="text" name="szallitasi" class="form-control" required>
            </div>

            <div class="mb-3">
                <label>Adószám</label>
                <input type="text" name="adoszam" class="form-control">
            </div>
                
            <div class="mb-3">
                <button type="submit" name="mentes" class="btn ">mentés</button>
            </div>

        </form>
    </div>

</body>
</html>