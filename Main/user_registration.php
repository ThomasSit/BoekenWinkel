<?php include "../connect/connect.php";?>
<?php include "../include/navbar.php";?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <title>registation</title>
</head>
<body>

<?php



?>


<?php 


$firstname = $lastname = $email = $phonenumber = $password= "";
$firstname_Err= $lastname_Err = $email_Err= $phonenumber_Err = $password_Err = "";


if(isset($_POST['submit'])){
    
  if(empty($_POST['firstname'])){
    $firstname_Err = "Firstname is required";
    }else{
        $firstname = $_POST['firstname'];
    }

        if(empty($_POST['lastname'])){
            $lastname_Err = "Lastname is required";
        }else{
            $lastname = $_POST['lastname'];

        }

            if(empty($_POST['email'])){
                $eamil_Err = "email is required";
            }else{
                $email = $_POST['email'];
    
            }
            
                if(empty($_POST['phonenumber'])<=9){
                    $phonenumber_Err = "phonenumber is required";
                }else{
                    $phonenumber = $_POST['phonenumber'];
        	
                }
                
                    if(empty($_POST['password'])<=6){
                        $password_Err = "password is required";
                    }else{
                        $password = $_POST['password'];
            
                    }

if(isset($firstname_Err) && isset($lastname_Err) && isset($email_Err) && isset($phonenumber_Err) && isset($password_Err)){
$sql = "INSERT INTO users (firstname,lastname,email,phonenumber,password) VALUES (:firstname, :lastname , :email , :phonenumber, :password)";
 $st = $db -> prepare($sql);
$st -> execute(['firstname'=>$firstname,'lastname'=>$lastname,'email'=>$email,'phonenumber'=>$phonenumber,'password'=>$password]);
 echo "boek is toegevoegd";  
    }else{      echo "er is iets missgeggaan";
   }
}
//     $sql = "INSERT INTO users (firstname, lastname, email, phonenumber, password ) VALUES //     (?,?,?,?,?)"; //     $st = $db -> prepare($sql);//     $result = $st -> execute([ $firstname, $lastname, $email, $phonenumber, $password ]); }
?>
<div class="container">
    <div class="row"> 
      <div class="col-sm-3">
        
<form action="user_registration.php" method="post">
<hr class="mb-3">
    <label for="firstname">first name</label>
    <input class="form-control" type="text" name="firstname" id="firstname"<?php echo $firstname_Err?> required>

    <label for="lastname">last name</label>
    <input class="form-control" type="text" name="lastname" id="lastname"<?php echo $lastname_Err?> required >

    <label for="email">email adress</label>
    <input class="form-control" type="email" name="email" id="email"<?php echo $email_Err?> >

    <label for="phonenumber">phone number</label>
    <input class="form-control" type="phonenumber" name="phonenumber" id="phonenumber"<?php echo $phonenumber_Err?>required >

    <label for="password">password</label>
    <input class="form-control" type="password" name="password" id="password"<?php echo $password_Err?> required>
<hr class="mb-3">
    <input type="submit" name="submit" value="submit"<?php echo $firstname_Err?> >
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