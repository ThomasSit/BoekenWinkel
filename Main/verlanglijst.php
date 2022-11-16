<?php


$Toevoegen = ['toevoegen'];

if(empty('toevoegen')){
    echo "er is iets missgegaan";
}else{
    echo " boek is toegevoegd";
}





/*$sql = "SELECT * FROM users.firstname, boek.titel FROM users join verlanglijst ON users.id = verlanglijst.klantid JOIN boek on verlanglijst.boekid=boekid WHERE users.id=:users.id"; 
*/

?>