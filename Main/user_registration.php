<?php include "../connect/connect.php";?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <title>registation</title>
</head>
<body>
    
<?php 


$firstname = $lastname = $email = $phonenumber = $password= "";
$firstname_Err= $lastname_Err = $email_Err= $phonenumber_Err = $password_Err = "";


if(isset($_POST['submit'])){
    
  if      $firstname = $_POST['firstname'];


    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
    $phonenumber = $_POST['phonenumber'];
    $password = $_POST['password'];
 
    $sql = "INSERT INTO users (firstname, lastname, email, phonenumber, password ) VALUES 
    (?,?,?,?,?)"; 
    $st = $db -> prepare($sql);
    $result = $st -> execute([ $firstname, $lastname, $email, $phonenumber, $password ]);
    if($result){
   echo "";
    }else{
        echo "error";
    }
}

?>

<div class="container">
    <div class="row"> 
      <div class="col-sm-3">
        
<form action="user_registration.php" method="post">
<hr class="mb-3">
    <label for="firstname">first name</label>
    <input class="form-control" type="text" name="firstname" id="firstname" require>

    <label for="lastname">last name</label>
    <input class="form-control" type="text" name="lastname" id="lastname"require >

    <label for="email">email adress</label>
    <input class="form-control" type="email" name="email" id="email"require>

    <label for="phonenumber">phone number</label>
    <input class="form-control" type="tel" name="phonenumber" id="phonenumber"require>

    <label for="password">password</label>
    <input class="form-control" type="password" name="password" id="password"require>
<hr class="mb-3">
    <input type="submit" name="submit" value="submit"require>
    <!--
    <label for="password confirmation">password confirmation</label>
    dit kan met password samen kijken of het gelijk is met een validation of de wachtwoord overeenkomt met de wachtwoord bevestiging
    dus bijvoorbeeld    if password == password confirmation of if password && password confirmation
-->

</div>
</div>
</div>


</form>



</body>
</html>