<html>
    <head>
    <title>Lista tavoli</title>
    <link rel="stylesheet" href="style1.css">
    </head>
    <body bgcolor="darkolivegreen">
            <?php

            $con= new mysqli("localhost","root","","ristorante");
            if(mysqli_connect_errno()){
                echo("errore");
                exit();
            }
           
            
            $stringa_query="SELECT * FROM tavoli";
            $ris=$con->query($stringa_query);
            if($ris->num_rows>0){
                echo "<table border='1' bordercolor='yellow' bgcolor='grey'>";
                echo "<tr><td>";
                    echo "ID";
                    echo "</td>";
                    echo "<td>";
                    echo "N° Tavolo";
                    echo "</td>";
                    echo "<td>";
                    echo "Data Ordine";
                    echo "</td>";
                    echo "<td>";
                    echo "Ordini";
                    echo "</td></tr>";  
                foreach($ris as $riga){
                    echo "<tr><td>";
                    echo $riga['ID'];
                    echo "</td>";
                    echo "<td>";
                    echo $riga['Numero'];
                    echo "</td>";
                    echo "<td>";
                    echo $riga['Data'];
                    echo "</td>";
                    echo "<td>";
                    echo "<a href='ordini.php?idtavolo=$riga[ID]'><input type='submit' name='ordini' value='submit'></a>";
                    echo "</td></tr>";  
                }
                echo "</table>";
            }
            
            ?>
            </body>
            </html>
             