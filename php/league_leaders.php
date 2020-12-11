<!doctype html>
<html>
<?php session_start();
include('../functions.php');
?>

<head>
<?php get_styles(); ?>

<title>Leaderboard</title>



</head>
<?php  if (isset($_SESSION['username'])){ get_header_logged();
}else{ get_header();} ?>
<body>
<div class="wrapper" class="container table_lead">

  <div id="leader_name"><h1>2020 League Leaders</h1></div>


	<?php


  $db = mysqli_connect('212.1.211.213', 'fanta474', 'giftbag1', 'fanta474_chri');



$sql = "SELECT @Rank := @Rank +1 AS '#',m.playerID,m.Name, m.Team, m.G, m.PA,
m.HR,m.R,m.RBI,m.SB,m.ISO,m.OBP,m.wOBA,m.wRC,m.WAR
  FROM mytable m, (SELECT @Rank := 0) r
 ORDER BY m.WAR desc";
$result = mysqli_query($db, $sql);



echo "<table id='leaders'>";


echo "<tr id='header'>";
echo "<th>#</th><th>Name</th><th>Team</th><th>Games</th><th>PA</th>";
echo "<th>HR</th><th>R</th><th>RBI</th>";
echo "<th>SB</th><th>ISO</th><th>OBP</th><th>wOBA</th>";
  echo "<th>wRC+</th><th>WAR</th>";
  "</tr>";



		 while($results = mysqli_fetch_assoc($result)) {

   	echo "<tbody>";
	echo "<tr>";
    echo "<td>".$results["#"]."</td>";
  echo "<td>".'<a href="id_search.php?playerID='.$results["playerID"].'">'.$results["Name"]."</a></td>";
  echo "<td>".$results["Team"]."</td>";


echo "<td>".$results["G"]."</td>";
echo "<td>".$results["PA"]."</td>";
echo "<td>".$results["HR"]."</td>";
echo "<td>".$results["R"]."</td>";
echo "<td>".$results["RBI"]."</td>";
echo "<td>".$results["SB"]."</td>";
echo "<td>".$results["ISO"]."</td>";
echo "<td>".$results["OBP"]."</td>";
echo "<td>".$results["wOBA"]."</td>";
echo "<td>".$results["wRC"]."</td>";
echo "<td>".$results["WAR"]."</td>";
		echo "</tr></tbody>";
		 }

echo "</table>";



	?>

</div>

	<?php get_footer(); ?>
			</div>
	<script src="../scripts/leader.js"  type="text/javascript"></script>
	</body>




</html>
