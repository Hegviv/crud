<?php
    session_start();
    require 'kapcsolat.php';
?>
<!DOCTYPE html>
<html lang="hu">
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="wIDth=device-wIDth, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
  <title>Crud</title>
  <link rel="stylesheet" href="./index.css">
</head>
<body>

    <nav class="navbar navbar-expand bg-dark justify-content-end" >
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="./hozzad.php"> Hozzáadás</a>
            </li>
        </ul>
    </nav>  

    <?php include('uzenet.php'); ?>

    <table class="table table-hover table-striped container">           
        <thead>
            <tr>
                <th>ID</th>
                <th>Név</th>
                <th>Jelszó</th>
                <th>Email</th>
                <th>Számlázási cím</th>
                <th>Szállítási cím</th>
                <th>Adószám</th>
                <th>Műveletek</th>
            </tr>
        </thead>

        <tbody>
            <?php 
                $query = "SELECT * FROM vasarlo";
                $query_run = mysqli_query($con, $query);

                if(mysqli_num_rows($query_run) > 0){
                    foreach($query_run as $vasarlo){
            ?>

            <tr>
                <td><?= $vasarlo['ID']; ?></td>
                <td><?= $vasarlo['nev']; ?></td>
                <td><?= $vasarlo['jelszo']; ?></td>
                <td><?= $vasarlo['email']; ?></td>
                <td><?= $vasarlo['szamlazasi']; ?></td>
                <td><?= $vasarlo['szallitasi']; ?></td>
                <td><?= $vasarlo['adoszam']; ?></td>
                <td>
                    <a href="vasarlo_szerkesztes.php?ID=<?= $vasarlo['ID']; ?>" class="btn btn-sm" id="szerkbtn">Szerkesztés</a>
                    <form action="crud.php" method="POST" class="d-inline">
                        <button type="submit" name="vasarlo_torlese" value="<?=$vasarlo['ID'];?>" class="btn btn-danger btn-sm">Törlés</button>
                    </form>
                </td>
            </tr>

            <?php
                    }
                }
                else{
                    echo "<h5> Nem található</h5>";
                }
            ?>
                                
        </tbody>
    </table>

</body>
</html>