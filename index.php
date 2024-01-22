<?php 

session_start();
if(@$_SESSION["num_visits"]>1){
    echo "Data ostatniej wizyty: ";
    echo date("j F Y, H:i:s",$_SESSION["last_visit"]);
    echo "<br>";
    echo "liczba wizyt: ", $_SESSION["num_visits"];
}
else
{
    echo "To jest twoja pierwsza wizyta";
    $_SESSION["num_visits"]=1;
}
$_SESSION["last_visit"]= time();
$_SESSION["num_visits"]++;
?>
