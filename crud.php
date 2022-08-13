<?php
session_start();
require 'kapcsolat.php';

if(isset($_POST['vasarlo_torlese']))
{
    $ID = mysqli_real_escape_string($con, $_POST['vasarlo_torlese']);

    $query = "DELETE FROM vasarlo WHERE ID='$ID' ";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $_SESSION['uzenet'] = "Törölve!";
        header("Location:  index.php");
        exit(0);
    }
    else
    {
        $_SESSION['uzenet'] = "Törlés sikertelen!";
        header("Location:  index.php");
        exit(0);
    }
}

if(isset($_POST['vasarlo_szerkesztes']))
{
    $ID = mysqli_real_escape_string($con, $_POST['ID']);
    $nev = mysqli_real_escape_string($con, $_POST['nev']);
    $jelszo = mysqli_real_escape_string($con, $_POST['jelszo']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $szamlazasi = mysqli_real_escape_string($con, $_POST['szamlazasi']);
    $szallitasi = mysqli_real_escape_string($con, $_POST['szallitasi']);
    $adoszam = mysqli_real_escape_string($con, $_POST['adoszam']);

    $query = "UPDATE vasarlo SET nev='$nev', 
    jelszo='$jelszo',email='$email', szamlazasi='$szamlazasi', szallitasi='$szallitasi', adoszam='$adoszam' WHERE ID='$ID' ";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $_SESSION['uzenet'] = "Szerkesztve!";
        header("Location: index.php");
        exit(0);
    }
    else
    {
        $_SESSION['uzenet'] = "Szerkesztés sikertelen!";
        header("Location:  index.php");
        exit(0);
    }

}


if(isset($_POST['mentes']))
{
    $nev = mysqli_real_escape_string($con, $_POST['nev']);
    $jelszo = mysqli_real_escape_string($con, $_POST['jelszo']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $szamlazasi = mysqli_real_escape_string($con, $_POST['szamlazasi']);
    $szallitasi = mysqli_real_escape_string($con, $_POST['szallitasi']);
    $adoszam = mysqli_real_escape_string($con, $_POST['adoszam']);

    $query = "INSERT INTO vasarlo (nev,jelszo, email,szamlazasi,szallitasi,adoszam) VALUES ('$nev','$jelszo','$email','$szamlazasi','$szallitasi','$adoszam')";

    $query_run = mysqli_query($con, $query);
    if($query_run)
    {
        $_SESSION['uzenet'] = "Hozzáadva!";
        header("Location: index.php");
        exit(0);
    }
    else
    {
        $_SESSION['uzenet'] = "Hozzáadás sikertelen!";
        header("Location:  index.php");
        exit(0);
    }
}

?>