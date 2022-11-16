<?php include "../include/head.php";

include "../include/navbar.php" ?>

<div class="wrapper">

<?php 
$nameErr = $emailErr = $vraagErr = "";
$name = $email = $vraag = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if(empty($_POST['name'])){
      $nameErr = "Name is required";
    } else {
         $name = ($_POST["name"]);
}

    if(empty($_POST['email'])){
        $emailErr = "Email is required";
        } else {
             $email = ($_POST["email"]);
        }

        if(empty($_POST['vraag'])){
            $vraagErr = "Vraag is required";
            } else {
                 $vraag = ($_POST["vraag"]);
            }
        }
?>

<!-- htmlspecialchars($_SERVER["PHP_SELF"]) htmlspecialchars convert verandert <  >  naar &it en &gt
    ($_SERVER["PHP_SELF"]) stuurt plaats van de data naar een andere page naar de zelfde page  -->
<form action="contact.php" method="post"  acion="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    <h1> Wij helpen je graag veder <br> stuur ons een bericht  </h1>

    <div class="section1">
    <label for="name">Naam </label>
    <input type="text" name="name" id="name" >
    <span class="error"><?php echo $nameErr; ?> </span>
    <br><br>
    </div>
        
    <div class="section2">
    <label for="email">E-mail </label>
    <input type="email" name="email" id="email" >
    <span class="error"><?php echo $emailErr; ?> </span>
    <br><br>
    </div>

    <div class="section3">
    <textarea  name="vraag" id="vraag" cols="20" rows="3" ></textarea>
    <span class="error"><?php echo $vraagErr;?> </span>
    <br><br>
    </div>

    <div class="section4">
    <input type="submit" name="submit" id="submit">
    </div>

</form>

<?php 










echo $name;
echo "<br>";
echo $email;
echo "<br>";
echo $vraag;
echo "<br>";

?>


<!--if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $vraag = $_POST['vraag'];

    if(!empty($name) && !empty($email) && !empty($vraag)){
        $to = "" . $email . "";


    echo "$name <br> $email <br> $vraag <br>";
 } -->




</div>





<div class="visitekaartje">

<h1> contact gegevens </h1>
<p> Adres: laat123</p>
<p> 1234 AB Alkmaar</p>
<p> 072-1234567 </p>
<p> Email: info@lekkerlezen.nl</p>
<div>
<?php include "../include/footer.php" ?>