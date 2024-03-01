<?php 
class Employee{
 private $lastName;
 private $firstName;
 private $password;
 private $phone;
 private $email;
 private $dOB;

 public function getDob(){
    return $this->dOB;
 }

 public function setDob($a){
   $this->dOB=$a;
 }
 public function getEmail(){
    return $this->email;
 }

 public function setEmail($a){
   $this->email=$a;
 }
 public function getPhone(){
    return $this->phone;
 }

 public function setPhone($a){
   $this->phone=$a;
 }
 public function getLastname(){
    return $this->lastName;
 }

 public function setLastname($a){
   $this->lastName=$a;
 }

 public function getPassword(){
    return $this->password;
 }

 public function setPassword($a){
   $this->password=$a;
 }

 public function getFirstname(){
    return $this->firstName;
 }

 public function setFirstname($a){
   $this->firstName=$a;
 }
//  public function __construct(){
//     $this->firstName="";
//     $this->lastName="";
//     $this->password="";
//     $this->phone="";
//     $this->email="";
//     $this->dOB="";
//  }

 public function __construct($a,$b,$c,$d,$e,$f){
    $this->firstName=$a;
    $this->lastName=$b;
    $this->password=$c;
    $this->phone=$d;
    $this->email=$e;
    $this->dOB=$f;
 }

 public function Afficher(){
    echo "nom:".$this->firstName;
    echo "prenom:".$this->lastName;
    echo "password:". $this->password;
    echo "phone:". $this->phone;
    echo "email:". $this->email;
    echo "Date of birth:". $this->dOB;

    
 }
//  public function show() {
//    echo '<table border=1 width="100%">
//        <tr align="center">
//            <td>Last Name</td>
//            <td>First Name</td>
//            <td>Phone</td>
//            <td>Email</td>
//            <td>Date of Birth</td>
//        </tr>
//        <tr>
//            <td>'. $this->lastName .'</td>
//            <td>'. $this->firstName .'</td>
//            <td>'. $this->phone .'</td>
//            <td>'. $this->email .'</td>
//            <td>'. $this->dOB .'</td>
//        </tr>
//    </table>';
// }

}
$personne1=new Employee("Doe","Jane","1234","2222","test@gmail.com","12-02-2024");
$personne1->Afficher();






?>