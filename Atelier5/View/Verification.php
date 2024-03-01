<?php 
$nom=$_POST['fName'];
$prenom=$_POST['lName'];
$phone=$_POST['phone'];
$email=$_POST['email'];
$dob=$_POST['dob'];
$pass1=$_POST['pass1'];
$pass2=$_POST['pass2'];

include "../Controller/EmployeC.php";
include "../Model/Employee.php";

$employe=new Employee($nom,$prenom,$pass1,$phone,$email,$dob);
$emplo=new EmployeC();
$emplo->showEmploye($employe);


?>