<!doctype html>
<html>
<?php session_start();
include('../functions.php');
?>

<head>
<?php get_styles();?>





<title>Hall Of Fame</title>



</head>


                       <?php  if (isset($_SESSION['username'])){ get_header_logged();
                       }else{ get_header();} ?>
<body>
<div class="wrapper">

	<div id="leader_name"><h1>MLB Hall Of Fame Inductees</h1></div>
	<?php echo "<table id='hall'>";


	echo "<tr id='header'>";
 echo "<th>Name</th><th>Year</th><th>Votes</th><th>Ballots</th><th>Vote %</th>";
		"</tr>";



	class TableRows2 extends RecursiveIteratorIterator {
    function __construct($it) {
        parent::__construct($it, self::LEAVES_ONLY);
    }

    function current() {
        return "<td style='width: 150px; border: 1px solid black;'>" . parent::current(). "</td>";
    }

    function beginChildren() {
        echo "<tr>";
    }

    function endChildren() {
        echo "</tr>" . "\n";
    }
}
$servername= "212.1.211.213";
    $username = "fanta474";
    $password = "giftbag1";
    $dbname = "fanta474_chri";


try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $stmt = $conn->prepare("select CONCAT(m.nameFirst, ' ', m.nameLast), h.yearID,h.votes,h.ballots,
    ROUND((h.votes)/(h.ballots)*(100),1)

from HallOfFame h inner join Master m on h.playerID = m.playerID
WHERE h.inducted = 'Y'
order by h.yearID desc" );
    $stmt->execute();

    // set the resulting array to associative
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);

    foreach(new TableRows2(new RecursiveArrayIterator($stmt->fetchAll())) as $k=>$v) {
        echo $v;
    }
}
catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}
$conn = null;

echo "</table>";



	?>



	<?php get_footer(); ?>
</div>
	<script src="../scripts/leader.js"  type="text/javascript"></script>
	</body>




</html>
