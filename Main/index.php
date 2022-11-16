<?php 
    include "../include/head.php";
    include "../include/navbar.php";
 ?>
<!--<div class="column"><table cellspacing="10px"><tr><th><a href="../Top_10_Boeken/Boek-1.php">1. The Bible</a></th></tr><tr><th><a href="../Top_10_Boeken/Boek-2.php">2. Quotations from Chairman Mao Tse-Tung</a></th></tr><tr><th><a href="../Top_10_Boeken/Boek_3.php">3. The Quran</a></th></tr><tr><th><a href="../Top_10_Boeken/Boek-4.php">4. The Lord Of The Rings</a></th></tr><tr><th><a href="../Top_10_Boeken/Boek-5.php">5. The Little Prince</a></th></tr><tr><th><a href="../Top_10_Boeken/Boek-6.php">6. Harry Potter and the Philosopher’s Stone</a></th></tr><tr><th><a href="../Top_10_Boeken/Boek-7.php">7. Scouting for Boys</a></th></tr><tr><th><a href="../Top_10_Boeken/Boek-8.php">8. And Then There Were None</a></th></tr><tr><th><a href="../Top_10_Boeken/Boek-9.php">9. The Hobbit</a></th></tr><tr> <th><a href="Top_10_Boeken/Boek-10.php.php">10. The Dream Of The Red Chamber</a></th></tr> </table> !-->

<h1 style="font-size:50px"> The top 10 books of the world </h1>

<?php include "../connect/connect.php";

    $sql = "SELECT * FROM boek ORDER BY rating DESC LIMIT 10";

    $sth = $db->prepare($sql);

    $sth -> execute();

    $nummer = 1;

while($row = $sth->fetch()) {
    echo "<tr> <div class= 'box'>";

    Echo "<td> <a href='details.php?id={$row['id']}'> <div class='ruimte'> De title {$row['Title']}</div></a></td>" ;	  
    /* DE ?ID=$row['id'] komt er boven aan de display id=1 Door de get function bij de details.php word de id gehaald en daardoor kan ie de specifieke
    data uit de database halen van die id | de schijding maak je met?*/
    Echo "<td>" . "<div class='ruimte'>"  .$row["rating"] . "</div> " . "</td>";
    Echo "<td>" . "<div class='ruimte'>" . "De Prijs" .$row["prijs"] . "</div> " . "</td>" ;
    Echo "<td> <figure class='right'>" . "<img  class='boek_foto' src='../img/" . $row["afbeelding"] . "'> </figure<td>" ;
    /*Echo '<a href="details.php?id=" . $row['id'] ."> Details </a>';*/
    Echo "<a href='verlanglijst.php'> <input type='button' name='toevoegen' value='toevoegen'></a>";
    echo "</tr>  </div>";
    $nummer++;
}
?>



<!--<div class="footer">
<div class="footer-text-left">footer</div>
</div>  !-->
<!--   SELECt *FROM boek ORDER BY rating  DESC LIMIT 10; 
Echo "<td> . $nummer . </td>"
Echo "<td>" . $row['titel'] . "</td>"
-->
<?php include "../include/footer.php" ?>



