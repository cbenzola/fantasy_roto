
<?php


$db =mysqli_connect("212.1.211.213", "fanta474", "giftbag1", "fanta474_chri");

$sql=$db->query("update save_table2 set TeamID='cbenzola'");

$db->close();


 ?>




<?php /***************************** */
$db =mysqli_connect("212.1.211.213", "fanta474", "giftbag1", "fanta474_chri");


      $postVariablesToExtract = array("calc", "userName","player");

            foreach ($postVariablesToExtract as $postVariableToExtract) {
                if (isset($_POST[$postVariableToExtract])) {
                    $$postVariableToExtract = $_POST[$postVariableToExtract];
                } else {
                    $$postVariableToExtract = null;
                }

            }
            var_dump($calc);
            var_dump($userName);


$stmt =$db->stmt_init();

$stmt=$db->prepare("CALL pleaseWork4 (?, ?,@ReturnPlayerName,
@ReturnCap,
@StartingPoints,
@EndingPoints)");


if($player=9){

$stmt->bind_param("ss",$calc,$userName);
$stmt ->store_result();
$stmt->execute();
}



$stmt->close();
?>




<?php
    $host = "212.1.211.213";
    $user = "fanta474";
    $password = "giftbag1";
    $database_name = "fanta474_chri";

    $pdo = new PDO("mysql:host=$host;dbname=$database_name", $user, $password, array(
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
    ));


    $sql=$pdo->query(
    "SELECT p.Position AS 'Pos',s.Player,ROUND(p.FPPG,2) AS 'FPPG',
            p.Salary AS 'Salary',p.Game AS 'Game',s.Optimized AS Optimized

            FROM `save_table2` s join `playerList` p

            WHERE s.Player = p.Nickname

            order by Pos= 'OF',Pos='SS',Pos='3B',Pos='2B',Pos='1B',Pos='C',Pos='P'"
);



                if (!$sql->rowCount() == 0) {
                    while ($results = $sql->fetch()) {


                        echo "<tr id='tbody2'class='connectedSortable'>";
                        echo"<td>".$results["Pos"]."</td>";

                        echo "<td>".$results["Player"]."</td>";
                        echo "<td>".$results["FPPG"]."</td>";
                        echo "<td>".$results["Salary"]."</td>";
                        echo "<td>".$results["Game"]."</td>";
                        echo "<td>".$results["Optimized"]."</td>";
                        echo"</tr>";

                    }

                }else{
                    echo "Nothing Found";
                }



$pdo=null;

          ?>

  
