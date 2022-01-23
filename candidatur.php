<?php
$con=mysqli_connect('localhost','root','','classe') or die(mysqli_error());
$nom=$_POST['nom'];
$email=$_POST['email'];
$cin=$_POST['cin'];
$tel=$_POST['tel'];
$for=$_POST['for'];
$dip=$_POST['dip'];
$rencontre=$_POST['rencontre'];
$quest=$_POST['quest'];
$req="INSERT INTO  `post_candidature` (NOM_COMPLET,Email,CIN,Numéro_de_téléphone,Formation_choisie,Dernier_diplôme_obtenu,nous_trouver,QUESTIONS)
 values ('$nom','$email','$cin','$tel','$for','$dip','$rencontre','$quest')";
$res=mysqli_query($con,$req);
?>


