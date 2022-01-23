<?php
session_start();
$con=mysqli_connect('localhost','root','','classe');

if(isset($_POST['save']))
{
$nom=$_POST['nom'];
$email=$_POST['email'];
$cin=$_POST['cin'];
$tel=$_POST['tel'];
$for=$_POST['for'];
$dip=$_POST['dip'];
$rencontre=$_POST['rencontre'];
$quest=$_POST['quest'];

$req="INSERT INTO  post_candidature (NOM_COMPLET,Email,CIN,Numéro_de_téléphone,Formation_choisie,Dernier_diplôme_obtenu,nous_trouver,QUESTIONS)
values ('$nom','$email','$cin','$tel','$for','$dip','$rencontre','$quest')";
    $query_run = mysqli_query($con, $req);

    if($query_run)
    {
        $_SESSION['status'] = "Inserted Succesfully";
        header("Location: index.php");
    }
    else
    {
        $_SESSION['status'] = "Not Inserted";
        header("Location: index.php");
    }
}
?>