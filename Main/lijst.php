<?php 
include "../include/head.php";
include "../include/navbar.php"; 

?>

<?php 
    include "../connect/connect.php";
        $sql = "SELECT * FROM boek ORDER BY rating DESC";

        $sth = $db->prepare($sql);

        $sth -> execute();

        $nummer = 1;

    while($row = $sth->fetch()){
        echo "<tr> <div class= 'box'>";
        echo "<td> <a href='details.php?id={$row['id']}'> <div class='ruimte'> De title {$row['Title']}</div></a></td>" ;
        /* DE ?ID=$row['id'] komt er boven aan de display id=1 Door de get function bij de details.php word de id gehaald en daardoor kan ie de specifieke
        data uit de database halen van die id | de schijding maak je met?*/
        echo "<td>" . "<div class='ruimte'>"  .$row["rating"] . "</div> " . "</td>";
        echo "<td>" . "<div class='ruimte'>" . "De Prijs" .$row["prijs"] . "</div> " . "</td>" ;
        echo "<td> <figure class='right'>" . "<img  class='boek_foto' src='../img/" . $row["afbeelding"] . "'> </figure<td>" ;	
        
        echo "</tr>  </div>";	
        $nummer++;
    }
   
?>


<?php include "../include/footer.php"; ?>







<?php 

include "../include/head.php"; ?>