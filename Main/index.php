<?php include "../include/head.php";

 include "../include/navbar.php";?>

<div class="column">
    <table cellspacing="10px">
<tr>
    <th><a href="../Top_10_Boeken/Boek-1.php">1. The Bible</a></th>
</tr>
<tr>
    <th><a href="../Top_10_Boeken/Boek-2.php">2. Quotations from Chairman Mao Tse-Tung</a></th>
</tr>
<tr>
    <th><a href="../Top_10_Boeken/Boek_3.php">3. The Quran</a></th>
</tr>
<tr>
    <th><a href="../Top_10_Boeken/Boek-4.php">4. The Lord Of The Rings</a></th>
</tr>
<tr>
    <th><a href="../Top_10_Boeken/Boek-5.php">5. The Little Prince</a></th>
</tr>
<tr>
    <th><a href="../Top_10_Boeken/Boek-6.php">6. Harry Potter and the Philosopher’s Stone</a></th>
</tr>
<tr>
    <th><a href="../Top_10_Boeken/Boek-7.php">7. Scouting for Boys</a></th>
</tr>
<tr>
    <th><a href="../Top_10_Boeken/Boek-8.php">8. And Then There Were None</a></th>
</tr>
<tr>
    <th><a href="../Top_10_Boeken/Boek-9.php">9. The Hobbit</a></th>
</tr>
<tr>
    <th><a href="Top_10_Boeken/Boek-10.php.php">10. The Dream Of The Red Chamber</a></th>
</tr>
    </table>
</div>

<div class="footer">
<div class="footer-text-left">footer</div>
</div>


<?php

include "../connect/connect.php";

$sql = "SELECT * FROM boek";

$st = $db->prepare($sql);

$st -> execute();

while($row = $st->fetch()) {
echo "<tr>";

Echo "<td>" . $row["titel"] . "</td>";
Echo "<td>" . $row["author"] . "</td>";
Echo "<td>" . $row["rating"] . "</td>";
Echo "<td>" . $row["afbeelding"] . "</td>";
Echo "<td> <img src=/image/" . $row["afbeelding"] . "<td>";

echo "</tr>";
}
?>
<?php include "../include/footer.php" ?>
