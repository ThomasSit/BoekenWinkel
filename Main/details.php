
<?php 
include "../include/head.php";
include "../include/navbar.php";
include "../connect/connect.php";

$id = $_GET["id"];
$sql = "SELECT * FROM boek WHERE id =:id";
$st = $db->prepare($sql);
$st->execute([
    ":id" => $id
]);

$boek = $st->fetch();

echo "<h1>" . $boek['Title'] . "</h1><br>";

echo "<h1>" . $boek['Author'] . "</h1><br>";

echo "<Div class='doos'>"; 

echo $boek['rating'] . "<br>";	

echo $boek['prijs'] . "<br>";	

echo $boek['Informatie'] . "<br><br>";

echo $boek['published'] . "<br>";

echo $boek['taal'] . "<br>";

echo " </div>";

echo   "<img class='detail_boek_foto' src='../img/" . $boek['afbeelding'] . "'> <br> <br>";




?>

    
</body>
</html>