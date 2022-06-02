<?php include "../include/head.php";

include "../include/navbar.php" ?>

<div class="wrapper">

<form action="contact.php" method="post" >
    <h1> Wij helpen je graag veder <br> stuur ons een bericht  </h1>

    <div class="section1">
    <label for="name">Naam</label>
    <input type="text" name="name" id="name"><br>
    </div>

    <div class="section2">
    <label for="email">E-mail</label>
    <input type="email" name="email" id="email"><br>
    </div>

    <div class="section3">
    <textarea  name="vraag" id="vraag" cols="20" rows="3"></textarea><br>
    </div>

    <div class="section4">
    <input type="submit" name="submit" id="submit">
    </div>

</form>


<?php

if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $vraag = $_POST['vraag'];

    echo "$name <br>, $email <br>, $vraag <br>";
 }


?>

</div>


<?php include "../include/footer.php" ?>