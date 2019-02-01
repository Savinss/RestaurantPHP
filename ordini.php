<!DOCTYPE html>
<html lang="en">
<head>
    <title>Recupero ordinazioni</title>
    <link rel="stylesheet" href="style1.css">
</head>
<body>
<?php

$idtavolo=$_GET["idtavolo"];

$con= new mysqli("localhost","root","","ristorante");
if(mysqli_connect_errno()){
    echo("errore");
    exit();
}


$stringa_query="SELECT * FROM ordini o, tavoli t WHERE o.ID_T=t.ID and o.ID_T=$idtavolo";
$ris=$con->query($stringa_query);
if($ris->num_rows>0){
    echo "<table border='1'>";
    echo "<tr><td>";
        echo "ID Tavolo";
        echo "</td>";
        echo "<td>";
        echo "QTA Ordine";
        echo "</td></tr>";
    foreach($ris as $riga){
        echo "<tr><td>";
        echo $riga['ID_T'];
        echo "</td>";
        echo "<td>";
        echo $riga['QTA'];
        echo "</td></tr>";
    }
    echo "</table>";
}
    ?>
</body>
</html>