<?php

$objetPdo = new PDO('mysql:host=localhost;dbname=pageresponsive','root','root');

$pdoStat = $objetPdo->prepare('INSERT INTO userdata VALUES (NULL, :name, :email, :password)');

$pdoStat->bindValue(':name', $_POST['name'], PDO::PARAM_STR);

$pdoStat->bindValue(':email', $_POST['email'], PDO::PARAM_STR);

$pdoStat->bindValue(':password', $_POST['password'], PDO::PARAM_STR);


$insertIsOk = $pdoStat->execute();

if($insertIsOk){

    $message = 'Le contact a été ajouté dans la bdd';

}
else{
    $message = 'Echec de l\insertion';
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Insertion des contacts</h1>
    <p><?php echo $message; ?></p>
</body>
</html>