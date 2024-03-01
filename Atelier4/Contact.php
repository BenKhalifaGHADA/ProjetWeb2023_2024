<?php
 if (isset($_GET['nom']) && isset($_GET['prenom']) && isset($_GET['email']) && isset($_GET['tel']) && isset($_GET['adresse']) && isset($_GET['code'])) {
    if (!empty($_GET['nom']) && !empty($_GET['prenom']) && !empty($_GET['email']) && !empty($_GET['tel']) && !empty($_GET['adresse']) && !empty($_GET['code'])) {
    $nom=$_POST['Nom'];
 var_dump($nom);
 $prenom=$_POST['prenom'];
 $email=$_POST['email'];
 $tel=$_POST['tel'];
 $adresse=$_POST['adresse'];
 $code=$_POST['code'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border="1">
        <tr>
            <td>Nom</td>
            <td>Prenom</td>
            <td>Email</td>
            <td>Adresse</td>
            <td>Code Postale </td>
        </tr>
        <tr>
            <td><?php echo $nom; ?></td>
            <td><?php echo $prenom; ?></td>
            <td><?php echo $email; ?></td>
            <td><?php echo $adresse; ?></td>
            <td><?php echo $code; ?></td>
        </tr>
    </table>
    <?php
        } else {
            echo 'Champs Manquants';
        }
    }
    ?> 
</body>
</html>