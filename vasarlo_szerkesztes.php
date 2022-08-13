<?php
session_start();
require 'kapcsolat.php';
?>

<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Szerkesztés</title>
    <link rel="stylesheet" href="./vasarlo_szerkesztes.css">
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

        <div class="card-header">
            <h2>Szerkesztés</h2>
        </div>

        <?php
            if(isset($_GET['ID'])){
                $ID = mysqli_real_escape_string($con, $_GET['ID']);
                $query = "SELECT * FROM vasarlo WHERE ID='$ID' ";
                $query_run = mysqli_query($con, $query);

                if(mysqli_num_rows($query_run) > 0){
                    $vasarlo = mysqli_fetch_array($query_run);
        ?>
            
        <form action="crud.php" method="POST">

            <input type="hidden" name="ID" value="<?= $vasarlo['ID']; ?>">

            <div class="mb-3">
                <label>Név</label>
                   <input type="text" name="nev" value="<?=$vasarlo['nev'];?>" class="form-control">
            </div>


            <div class="mb-3">
                <label>Jelszó</label>
                <input type="text" name="jelszo" value="<?=$vasarlo['jelszo'];?>" class="form-control">
            </div>


            <div class="mb-3">
                <label>Email</label>
                <input type="email" name="email" value="<?=$vasarlo['email'];?>" class="form-control">
            </div>


            <div class="mb-3">
                <label>Számlázási cím</label>
                <input type="text" name="szamlazasi" value="<?=$vasarlo['szamlazasi'];?>" class="form-control">
            </div>


            <div class="mb-3">
                <label>Szállítási</label>
                <input type="text" name="szallitasi" value="<?=$vasarlo['szallitasi'];?>" class="form-control">
            </div>
            

            <div class="mb-3">
                <label>Adószám</label>
                <input type="text" name="adoszam" value="<?=$vasarlo['adoszam'];?>" class="form-control">
            </div>


            <div class="mb-3">
                <button type="submit" name="vasarlo_szerkesztes" class="btn"> Szerekesztés </button>
            </div>
        </form>

        <?php
                }
                else{
                    echo "<h4>Id nem található</h4>";
                }
            }
        ?>
    </div>
</body>
</html>