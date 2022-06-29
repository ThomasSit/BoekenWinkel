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
        if(!preg_match("/^[a-zA-Z]*$/",$firstname)){
            $firstname_Err = "Only letters and white space allowed";
        }
    }

        if(empty($_POST['lastname'])){
            $lastname_Err = "Lastname is required";
        }else{
            $lastname = $_POST['lastname'];
            if(!preg_match("/^[a-zA-Z]*$/",$lastname)){
                $lastname_Err = "Only letters and white space allowed";
            }
        }

            if(empty($_POST['email'])){
                $eamil_Err = "email is required";
            }else{
                $email = $_POST['email'];
                if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
                    $email_Err = "Invalid email format";
                }
            }
            
                if(empty($_POST['phonenumber'])<=9){
                    $phonenumber_Err = "phonenumber is required";
                }else{
                    $phonenumber = $_POST['phonenumber'];
                    if(!preg_match("/^[0-9]*$/",$phonenumber)){
                        $phonenumber_Err = "Only numbers allowed";
                    }
                }
                
                    if(empty($_POST['password'])<=6){
                        $password_Err = "password is required";
                    }else{
                        $password = $_POST['password'];
                        if(!preg_match("/^[a-zA-Z0-9]*$/",$password)){
                            $password_Err = "Only letters and numbers allowed";
                        }
                    }

                        if(empty($firstname_Err) && empty($lastname_Err) && empty($email_Err) && empty($phonenumber_Err) && empty($password_Err)){
                            $sql = "INSERT INTO users (firstname,lastname,email,phonenumber,password) VALUES ('$firstname','$lastname','$email','$phonenumber','$password')";
                            $result = mysqli_query($conn,$sql);
                            if($result){
                                echo "Successfully registered";
                            }else{
                                echo "There was an error ";
                            }
                        }	
}

//     $sql = "INSERT INTO users (firstname, lastname, email, phonenumber, password ) VALUES 
//     (?,?,?,?,?)"; 
//     $st = $db -> prepare($sql);
//     $result = $st -> execute([ $firstname, $lastname, $email, $phonenumber, $password ]);
   
// }

?>

<div class="container">
    <div class="row"> 
      <div class="col-sm-3">
        
<form action="user_registration.php" method="post">
<hr class="mb-3">
    <label for="firstname">first name</label>
    <input class="form-control" type="text" name="firstname" id="firstname"<?php echo $firstname_Err?> >

    <label for="lastname">last name</label>
    <input class="form-control" type="text" name="lastname" id="lastname"<?php echo $lastname_Err?>  >

    <label for="email">email adress</label>
    <input class="form-control" type="email" name="email" id="email"<?php echo $email_Err?> >

    <label for="phonenumber">phone number</label>
    <input class="form-control" type="phonenumber" name="phonenumber" id="phonenumber"<?php echo $phonenumber_Err?> >

    <label for="password">password</label>
    <input class="form-control" type="password" name="password" id="password"<?php echo $password_Err?> >
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