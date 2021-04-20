<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
 <h1>Vyplněná data</h1>
 <?php
 $nickname = filter_input(INPUT_POST, 'nickname');
 $password = filter_input(INPUT_POST, 'password');
 echo "Váš uživatelské jméno bylo vyplněno $nickname <br>"; 
 echo "Vaše heslo bylo vyplněno $password <br>" ;
 
  if(($password =='Dubinek')&& ($nickname =='Fildasek')){
     echo "Vaše uživatelské jméno i heslo je správně"; }

 ?>
 
</body>
</html>