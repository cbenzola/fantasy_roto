<?php
session_start();
include '../functions.php';
$conn = new mysqli("212.1.211.213", "fanta474", "giftbag1", "fanta474_chri");?>
<!doctype html>
<html>

<head>
    <?php get_styles();?>






    <title>The Diamond</title>
</head>

<?php if (isset($_SESSION['username'])) {
    get_header_logged();
} else {
    get_header();
}?>

<body>


    <?php
$query = "SELECT * FROM drag_player3";
$result = mysqli_query($conn, $query);
if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_array($result)) {
        ?>

    <div id="drag" style=background-color:#fff;>

        <div class="col-md-4" id="player_column"> <br />
            <div style="border:1px solid #333; background-color:#fff; width:200px; border-radius:5px; padding:10px; cursor:move"
                align="center">

                <img src="<?php echo $row["image"]; ?>" data-id="<?php echo $row['id']; ?>" ,
                    data-year="<?php echo $row['year']; ?>" , data-name="<?php echo $row['name']; ?>" ,
                    data-team="<?php echo $row['team']; ?>" , data-hits="<?php echo $row['hits']; ?>" ,
                    data-doubles="<?php echo $row['doubles']; ?>" , data-triples="<?php echo $row['triples']; ?>" ,
                    data-homeruns="<?php echo $row['homeruns']; ?>"
                    data-spray_chart="<?php echo $row["spray_chart"]; ?>"
                    data-field_chart="<?php echo $row["field_chart"]; ?>" class="img-responsive player_drag" />


                <h4 class="text-info"><?php echo $row["name"]; ?></h4>

            </div>
        </div>
        <?php
}
}
mysqli_close($conn);
?>

        <div style="clear:both"></div>
        <br />
        <div align="center">
            <div class="drag_area">Drop Player Here</div>
        </div>
        <div id="dragable_player">


            <br /> <br>
        </div>
    </div>

</body>
<?php get_footer();?>
<script src="../scripts/drop.js"></script>

</html>