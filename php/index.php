<?php
  session_start();
include('../functions.php');

  if (!isset($_SESSION['username'])) {
      $_SESSION['msg'] = "You must log in first";
      header('location: login.php');
  }
  if (isset($_GET['logout'])) {
      session_destroy();
      unset($_SESSION['username']);
      header("location: login.php");
  }
?>
<!DOCTYPE html>
<html>
<head>
<?php get_styles();?>




</head>

  	<!-- notification message -->
  	<?php if (isset($_SESSION['success'])) : ?>
      <div class="error success" >
      	<h3>
          <?php
              echo $_SESSION['success'];
              unset($_SESSION['success']);
          ?>
      	</h3>
      </div>
  	<?php endif ?>

    <!-- logged in user information -->
    <?php  if (isset($_SESSION['username'])) : ?>

	<title>Roto Help</title>

</head>


<?php include('server3.php'); ?>

	 <?php get_header_logged(); ?>

	<body>

<div class="wrapper_home">


     <div id="trending"><h1>Trending Players</h1></div>
     <div class="player-container">
	 <div class="player-row player-row-core">
	 <div class="player">

		<img src="../image/aaron.jpg" alt="judgeswing" class="action img-rounded" id="judge" usemap="#playerMap">
					<map name="playerMap">
  <area shape="poly" coords="0,0, 1019,5, 1019,679, 2,679" alt="judge" href="id_search.php?playerID=judgeaa01">
</map>
					 <img class="head" src="../image/judge.png" alt="aaron" />
					 <div class="player-name">
						 <?php  while ($results2 = mysqli_fetch_assoc($result2)) {
              echo '<a href="id_search.php?playerID='.$results2["playerID"].'">';
              echo		 'Aaron Judge</a>';
          }$db2->close();?></div>
			 </div>

		 <div class="player">

    <img src="../image/mike-trout-angels.jpg" alt="troutswing" class="action img-rounded" usemap="#playerMap2">
					<map name="playerMap2">
	<area shape="poly" coords="0,0, 1200,4, 1200,673, 0,673" alt="trout" href="id_search.php?playerID=troutmi01">
</map>
		<img class="head" src="../image/trout_head.jpg" alt="trout_head" />

        <div class="player-name">
		<?php  while ($results = mysqli_fetch_assoc($result)) {
              echo '<a href="id_search.php?playerID='.$results["playerID"].'">';

              echo  'Mike Trout</a>';
          }$db->close();?>
				 </div>
		 </div>

		 <div class="player">
		 <img src="../image/mookie_swing.jpg" alt="mookie_swing" class="action img-rounded img" usemap="#playerMap3">
					<map name="playerMap3">
	<area shape="poly" coords="0,0, 400,0, 400,220, 0,224" alt="mookie" href="id_search.php?playerID=bettsmo01">
</map>
		<img class="head" src="../image/mookie_head.jpg" alt="mookie_head" />
			 <div class="player-name">
         <?php  while ($results3 = mysqli_fetch_assoc($result3)) {
              echo '<a href="id_search.php?playerID='.$results3["playerID"].'">';

              echo  'Mookie Betts</a>';
          }$db3->close();?></div>
		 </div>

		 <div class="player">
		 <img src="../image/kershaw_throw.jpg" alt="kershaw_throw" class="action img-rounded img"
					usemap="#playerMap4">
					<map name="playerMap4">
	<area shape="poly" coords="0,0, 400,0, 400,225, 0,225" alt="kersh" href="id_search-pitcher.php?playerID=kershcl01">
</map>
		<img class="head" src="../image/kershaw_head.jpg" alt="kershaw_head" />
			 <div class="player-name">
         <?php  while ($results4 = mysqli_fetch_assoc($result4)) {
              echo '<a href="id_search-pitcher.php?playerID='.$results4["playerID"].'">';

              echo  'Clayton Kershaw</a>';
          }$db4->close();?></div>
       </div>



		 <div class="player ">
			<img src="../image/cole.jpg" alt="cole_throw" class="action img-rounded img"
					usemap="#playerMap5">
					<map name="playerMap5">
	<area shape="poly" coords="0,0, 1200,0, 1200,800, 0,800" alt="cole" href="id_search-pitcher.php?playerID=colege01">
</map>
		<img class="head" src="../image/cole_head.png" alt="cole_head" />
			 <div class="player-name">
         <?php  while ($results5 = mysqli_fetch_assoc($result5)) {
              echo '<a href="id_search-pitcher.php?playerID='.$results5["playerID"].'">';

              echo  'Gerrit Cole</a>';
          }$db5->close();?></div>
       </div>


		  <div class="player">
		 	<img src="../image/degrom.jpg" alt="degrom_throw" class="action img-rounded img"
					usemap="#playerMap6">
					<map name="playerMap6">
	<area shape="poly" coords="0,0, 1279,0, 1279,852, 0,852" alt="grom" href="id_search-pitcher.php?playerID=degroja01">
</map>
		<img class="head" src="../image/degrom_head.png" alt="degrom_head" />
			 <div class="player-name">
         <?php  while ($results6 = mysqli_fetch_assoc($result6)) {
              echo '<a href="id_search-pitcher.php?playerID='.$results6["playerID"].'">';

              echo  'Jacob deGrom</a>';
          }$db6->close();?></div>
       </div>



		 </div>
	 </div>

<aside class="aside-news">



				<div class="player-news2">
						<div class="homepage-headlines">
							<div class="span15 hl-heading">
								<div class="span8 hl-heading-text playernews-head">Top News</div>

							</div>

							<br>
							<div class="span12 hlinestory"><a href="#" class="player-links">Mike Trout: Looks To Keep Dominating</a></div>
							<br>
							<div class="span12 hlinestory"><a href="#" class="player-links">Tony LaRussa: Will He Be Managing in 2021?</a></div>
							<br>
							<div class="span12 hlinestory"><a href="#" class="player-links">Fernando Tatis Looking To Capture NL MVP</a></div>
							<div class="span2 hlinesport"><b></b></div>

						</div>

					</div>
					<div class="player-news2">
					      <div class="performance-box">
					        <div class="performance-title">Pitching - xSLG</div>
					        <div class="performance-grid">
					          <div>
					            <img class="table-team-logo" src="https://www.mlbstatic.com/team-logos/158.svg">
					          </div>
					          <div>
					            <img class="player-mug" onerror="this.onerror=null;this.src='https://content.mlb.com/images/headshots/current/60x60/generic.png';" src="https://content.mlb.com/images/headshots/current/60x60/642207.png">
					            <span><a href="#">Williams, Devin</a></span>
					          </div>
					          <div class="performance-stat">
					            .184
					          </div>
					          <div>
					            <img class="table-team-logo" src="https://www.mlbstatic.com/team-logos/114.svg">
					          </div>
					          <div>
					            <img class="player-mug" onerror="this.onerror=null;this.src='https://content.mlb.com/images/headshots/current/60x60/generic.png';" src="https://content.mlb.com/images/headshots/current/60x60/675916.png">
					            <span><a href="#">Karinchak, James</a></span>
					          </div>
					          <div class="performance-stat">
					            .196
					          </div>
					          <div>
					            <img class="table-team-logo" src="https://www.mlbstatic.com/team-logos/113.svg">
					          </div>
					          <div>
					            <img class="player-mug" onerror="this.onerror=null;this.src='https://content.mlb.com/images/headshots/current/60x60/generic.png';" src="https://content.mlb.com/images/headshots/current/60x60/608371.png">
					            <span><a href="#">Sims, Lucas</a></span>
					          </div>
					          <div class="performance-stat">
					            .211
					          </div>
					          <div>
					            <img class="table-team-logo" src="https://www.mlbstatic.com/team-logos/119.svg">
					          </div>
					          <div>
					            <img class="player-mug" onerror="this.onerror=null;this.src='https://content.mlb.com/images/headshots/current/60x60/generic.png';" src="https://content.mlb.com/images/headshots/current/60x60/624647.png">
					            <span><a href="#">Gonzalez, Victor</a></span>
					          </div>
					          <div class="performance-stat">
					            .229
					          </div>
					          <div>
					            <img class="table-team-logo" src="https://www.mlbstatic.com/team-logos/121.svg">
					          </div>
					          <div>
					            <img class="player-mug" onerror="this.onerror=null;this.src='https://content.mlb.com/images/headshots/current/60x60/generic.png';" src="https://content.mlb.com/images/headshots/current/60x60/621242.png">
					            <span><a href="#">Diaz, Edwin</a></span>
					          </div>
					          <div class="performance-stat">
					            .233
					          </div>
					        </div>

					    </div>
					    </div>
              <div class="player-news2">
                <div class="performance-box">
                  <div class="performance-title"><h4 id="stand">Standings</h4></div>
                  <div class="standing">
                    <table class="standing_table">
                      <colgroup>
                        <col />
                        <col />
                        <col />
                        <col />
                        <col>
                      </colgroup>
                      <thead>
                        <tr>
                          <th scope="col">
                            East
                          </th>
                          <th scope="col">
                            W
                          </th>
                          <th scope="col">
                            L
                          </th>
                          <th scope="col">
                            GB
                          </th>
                        </tr>
                      </thead>
                      <tbody>

                      <tr>
                        <td>
                          <span>
                            <span>
                        <img class="p-logo p-logo--sm" src="https://www.mlbstatic.com/team-logos/139.svg"
                        title="Tampa Bay">
                        <span>TB</span>
                      </span>
                          </span>
                        </td>
                        <td>
                          40
                        </td>
                        <td>
                          20
                        </td>
                        <td>
                          --
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <span>
                            <span>
                        <img class="p-logo p-logo--sm" src="https://www.mlbstatic.com/team-logos/147.svg" title="NY Yankees">
                        <span>NYY</span>
                      </span>
                          </span>
                        </td>
                        <td>
                          33
                        </td>
                        <td>
                          27
                        </td>
                        <td>
                          7.0
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <span>
                            <span>
                        <img class="p-logo p-logo--sm" src="https://www.mlbstatic.com/team-logos/141.svg" title="Toronto">
                        <span>TOR</span>
                      </span>
                          </span>
                        </td>
                        <td>
                          32
                        </td>
                        <td>
                          28
                        </td>
                        <td>
                          8.0
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <span>
                            <span>
                        <img class="p-logo p-logo--sm" src="https://www.mlbstatic.com/team-logos/110.svg" title="Baltimore">
                        <span>BAL</span>
                      </span>
                          </span>
                        </td>
                        <td>
                          25
                        </td>
                        <td>
                          35
                        </td>
                        <td>
                          15.0
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <span>
                            <span>
                        <img class="p-logo p-logo--sm" src="https://www.mlbstatic.com/team-logos/111.svg" title="Boston">
                        <span>BOS</span>
                      </span>
                          </span>
                        </td>
                        <td>
                          24
                        </td>
                        <td>
                          36
                        </td>
                        <td>
                          16.0
                        </td>
                      </tr>
                      </tbody>
                    </table>

                    <table class="standing_table">
                      <colgroup>
                        <col />
                        <col />
                        <col />
                        <col />
                      </colgroup>
                      <thead>
                        <tr>
                          <th scope="col">
                            Central
                          </th>
                          <th scope="col">
                            W
                          </th>
                          <th scope="col">
                            L
                          </th>
                          <th scope="col">
                            GB
                          </th>
                        </tr>
                      </thead>
                      <tbody>

                      <tr>
                        <td>
                          <span>
                            <span>
                        <img class="p-logo p-logo--sm" src="https://www.mlbstatic.com/team-logos/142.svg" title="Minnesota">
                        <span>MIN</span>
                      </span>
                          </span>
                        </td>
                        <td>
                          36
                        </td>
                        <td>
                          24
                        </td>
                        <td>
                          --
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <span>
                            <span>
                        <img class="p-logo p-logo--sm" src="https://www.mlbstatic.com/team-logos/114.svg" title="Cleveland">
                        <span>CLE</span>
                      </span>
                          </span>
                        </td>
                        <td>
                          35
                        </td>
                        <td>
                          25
                        </td>
                        <td>
                          1.0
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <span>
                            <span>
                        <img class="p-logo p-logo--sm" src="https://www.mlbstatic.com/team-logos/145.svg" title="Chi White Sox">
                        <span>CHW</span>
                      </span>
                          </span>
                        </td>
                        <td>
                          35
                        </td>
                        <td>
                          25
                        </td>
                        <td>
                          1.0
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <span>
                            <span>
                        <img class="p-logo p-logo--sm" src="https://www.mlbstatic.com/team-logos/118.svg" title="Kansas City">
                        <span>KCR</span>
                      </span>
                          </span>
                        </td>
                        <td>
                          26
                        </td>
                        <td>
                          34
                        </td>
                        <td>
                          10.0
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <span>
                            <span>
                        <img class="p-logo p-logo--sm" src="https://www.mlbstatic.com/team-logos/116.svg" title="Detroit">
                        <span>DET</span>
                      </span>
                          </span>
                        </td>
                        <td>
                          23
                        </td>
                        <td>
                          35
                        </td>
                        <td>
                          12.0
                        </td>
                      </tr>
                      </tbody>
                    </table>
                    <table class="standing_table">
                      <colgroup>
                        <col />
                        <col />
                        <col />
                        <col />
                      </colgroup>
                      <thead>
                        <tr>
                          <th scope="col">
                            West
                          </th>
                          <th scope="col">
                            W
                          </th>
                          <th scope="col">
                            L
                          </th>
                          <th scope="col">
                            GB
                          </th>
                        </tr>
                      </thead>
                      <tbody>

                      <tr>
                        <td>
                          <span>
                            <span>
                        <img class="p-logo p-logo--sm" src="https://www.mlbstatic.com/team-logos/133.svg" title="Oakland">
                        <span>OAK</span>
                      </span>
                          </span>
                        </td>
                        <td>
                          36
                        </td>
                        <td>
                          24
                        </td>
                        <td>
                          --
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <span>
                            <span>
                      <img class="p-logo p-logo--sm" src="https://www.mlbstatic.com/team-logos/117.svg" title="Houston">
                        <span>HOU</span>
                      </span>
                          </span>
                        </td>
                        <td>
                          29
                        </td>
                        <td>
                          31
                        </td>
                        <td>
                          7.0
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <span>
                            <span>
                        <img class="p-logo p-logo--sm" src="https://www.mlbstatic.com/team-logos/136.svg" title="Seattle">
                        <span>SEA</span>
                      </span>
                          </span>
                        </td>
                        <td>
                          27
                        </td>
                        <td>
                          33
                        </td>
                        <td>
                          9.0
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <span>
                            <span>
                        <img class="p-logo p-logo--sm" src="https://www.mlbstatic.com/team-logos/108.svg" title="LA Angels">
                        <span>LAA</span>
                      </span>
                          </span>
                        </td>
                        <td>
                          26
                        </td>
                        <td>
                          34
                        </td>
                        <td>
                          10.0
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <span>
                            <span>
                        <img class="p-logo p-logo--sm" src="https://www.mlbstatic.com/team-logos/140.svg" title="Texas">
                        <span>TEX</span>
                      </span>
                          </span>
                        </td>
                        <td>
                          22
                        </td>
                        <td>
                          38
                        </td>
                        <td>
                          14.0
                        </td>
                      </tr>
                      </tbody>
                    </table>
                  </div>
</div>
              </div>
				</aside>



	<?php get_footer(); ?>
	</div>
	<script src="../scripts/subScript.js"></script>
	</body>

    <?php endif ?>
</div>


</html>
