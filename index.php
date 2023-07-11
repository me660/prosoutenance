<?php
    $servername="localhost";
    $username="root";
    $password="";
    $dbname="library";
    //mysql_select_db(string $library ,$localhost);
    if(!empty($_POST)){
        //var_dump($_POST);
        //on verifie que les champs existent
        if(isset($_POST["name"], $_POST["surname"],$_POST["mail"], $_POST["pass"])
             && !empty($_POST["name"]) && !empty($_POST["surname"]) && !empty($_POST["mail"]) && !empty($_POST["pass"])

            ){
                if(!filter_var($_POST["mail"], FILTER_VALIDATE_EMAIL)){
                    die("l'adresse email est incorrect");
                }
                //le formulaire est complet
                $name = $_POST["name"];
                $surname = $_POST["surname"];
                $mail = $_POST["mail"];
                $pass = $_POST["pass"];
                //on verifie que l'utilisateur n'existe pas
                //$req = "SELECT * FROM users WHERE mail = '$mail'";
                //$result = mysqli_query($conn,$req);
                //if(mysqli_num_rows($result) > 0){
                    //le mail existe deja
                    //echo "<script type='text/javascript'>alert('Le mail existe deja');</script>";
                //}   
                //else{
                    //le mail n'existe pas
                    $req = "INSERT INTO user (name, surname, mail, pass) VALUES ('$name', '$surname', '$mail', '$pass')";
                    //$result = $library->prepare($req);

                    // $result->execute();
                    // if($result){
                    //     echo "<script type='text/javascript'>alert('Votre compte a été créé');</script>";
                    // }
                    // else{
                    //     echo "<script type='text/javascript'>alert('Echec de création du compte');</script>";
                    // }
                //}
            

            }else{
                die("le formulaire est incomplet");
             }
    }
?>



<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="./bootstrap-5.0.2-dist/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> 

    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="entete">
                <img src="./images/logo.jpg" height="110px" alt="le logo">
                <h3>E-DAILY</h3>
                <H5>IME-Service</H5>
            </div>
            <div class="intitule">
                <h2>Inscription</h2>
            </div>
            <div class="formulaire">
                <form  action=""  class="form-group" method="post" action=""   >
                    <label for="name">NAME</label>
                    <input class="form-control" type="text" name="name" required id="name">
                    <label for="surname">SURNAME</label>
                    <input type="text" class="form-control" name="surname" required id="surname">
                    <label for="mail">E-MAIL</label>
                    <input type="email" class="form-control" name="mail" required id="mail">
                    <label for="pass">MOT DE PASSE</label>
                    <input type="password" class="form-control" name="pass" required id="pass">
                    <button type="submit" bg-danger>envoyer</button>
                </form> 
                
            </div>
        </div>
    </div>
    
</body>
</html>