<html>
<?php session_start();
include('../functions.php');
?>

<head>
<?php get_styles();?>



	<title>About Us</title>

</head>


<?php  if (isset($_SESSION['username'])){ get_header_logged();
                       }else{ get_header();} ?>
<body>




	<div class="wrapper_home ">

		<div class="about-section">

		  <h1>Welcome to FantasyRoto.com </h1>
		  <p>Our mission is to help fantasy baseball users research player's statistics
				and help them make informed descions on who to start in their lineup. Please leave comments below for questions or feedback.
Thank you, and hope you enjoy exploring the site.
			 </p>
		</div>


<div class="col-md-8 comment2">
	<div id="respond">

	  <h3>Leave a Comment</h3>

	  <form action="post_comment.php" method="post" id="commentform">

	    <label for="comment_author" class="required">Name</label>
	    <input type="text" name="comment_author" id="comment_author" value="" tabindex="1" required="required">

	    <label for="email" class="required">Email</label>
	    <input type="email" name="email" id="email" value="" tabindex="2" required="required">

	    <label for="comment" class="required">Comment</label>
	    <textarea name="comment" id="comment" rows="10" tabindex="4"  required="required"></textarea>


	    <input type="hidden" name="comment_post_ID" value="1" id="comment_post_ID" />
	    <input name="submit" class="comment" type="submit" value="Submit" />

	  </form>

	</div>
</div>




		<footer class="footer">
			@chrisbenzola
		</footer>

</div>

	<script src="../scripts/subScript.js"></script>
</body>

</html>
