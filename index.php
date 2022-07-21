<?php
session_start();
// $_SESSION['nom']="pierre"; //définir la session
// echo session_save_path(); // sauvegarde de la session sur le server (chemin)
//session_unset(); // supprimer la session
//unset($_SESSION); // vider la superglobale session
if(!empty($_GET)){
    session_unset();
    unset($_SESSION);
}

if(isset($_POST['connexion'])){
    $_SESSION["email"] = $_POST['email'];
    $_SESSION["password"] = $_POST['password'];
}
if(!empty($_SESSION['email']) && $_SESSION["password"] =="azerty" && $_SESSION['email'] == "toto@hotmail.fr"){

    ?>
    <h1>Boujour je suis <?php echo $_SESSION['email'] ?></h1>
    <a href="index.php?deconnexion=true">deconnexion</a>
    <?php
    
}else{


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <form action="" method="POST">
        <input type="text" name ="email">
        <input type="text" name="password">
        <button type="submit" name="connexion">connexion</button>
    </form>
    
</body>
</html>
<?php
}
?>