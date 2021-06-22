<html>
<?php session_start();
include('../functions.php');
?>

<head>
    <?php get_styles();?>


    <title>News</title>

</head>



<?php  if (isset($_SESSION['username'])){ get_header_logged();
                       }else{ get_header();} ?>

<body>




    <div class="wrapper_home">

        <div id="news">
            <h1>Trending News</h1>
            <div class="container">

                <div id="myCarousel" class="carousel slide col-md-12" data-ride="carousel">
                    <!-- Indicators -->
                    <ol class="carousel-indicators">
                        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                        <li data-target="#myCarousel" data-slide-to="1"></li>

                    </ol>

                    <!-- Wrapper for slides -->
                    <div class="carousel-inner">
                        <div class="item active">
                            <a href="#"> <img src="../image/trout-mi.min.jpg" id="mike"></a>
                            <div class="carousel-caption">

                                <h2>Mike Trout Looks To Get Angels Back To Playoffs?</h3>
                            </div>
                        </div>

                        <div class="item">
                            <a href="#"><img src="../image/yankees.min.png" id="yankees"></a>
                            <div class="carousel-caption">

                                <h2>Yankees Eye 2021 World Series</h3>
                            </div>
                        </div>


                    </div>


                    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                        <span class="glyphicon glyphicon-chevron-left"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="right carousel-control" href="#myCarousel" data-slide="next">
                        <span class="glyphicon glyphicon-chevron-right"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>


            </div>

            <div class="container">
                <!-- ASIDE -->
                <aside class="col-md-4">


                    <div class="player-news">
                        <div class="homepage-headlines">
                            <div class="span15 hl-heading">
                                <div class="span8 hl-heading-text playernews-head">Top News</div>

                            </div>

                            <br />
                            <div class="span12 hlinestory"><a href="#" class="player-links">Mike Trout: Looks To Keep
                                    Dominating</a></div>
                            <br />
                            <div class="span12 hlinestory"><a href="#" class="player-links">Tony LaRussa: Will He Be
                                    Managing in 2021?</a></div>
                            <br />
                            <div class="span12 hlinestory"><a href="#" class="player-links">Fernando Tatis Looking To
                                    Capture NL MVP</a></div>
                            <div class="span2 hlinesport"><b></b></div>

                        </div>

                    </div>
                </aside>
                <div id="articles" class="col-md-8">
                    <div class="article">
                        <a href="#" class="article_image">
                            <img class="article_img" src="../image/trout_swing.min.jpg">
                        </a>
                        <div class="article_main">
                            <a class="article_link" href="#">
                                <div>Trout 2021 MVP?</div>
                            </a>
                            <div class="article_desc">With the 2021 season closing in, Mike Trout looks to continue
                                domination.</div>
                        </div>
                    </div>

                    <div class="article">
                        <a href="#" class="article_image">
                            <img class="article_img" src="../image/kershaw_throw.min.jpg">
                        </a>
                        <div class="article_main">
                            <a class="article_link" href="#">
                                <div>Kershaw Finally Healthy</div>
                            </a>
                            <div class="article_desc">Clayton looks to get back to Cy Young form with no lingering back
                                injuries.</div>
                        </div>
                    </div>


                    <div class="article">
                        <a href="#" class="article_image">
                            <img class="article_img" src="../image/nolan.min.jpg">
                        </a>
                        <div class="article_main">
                            <a class="article_link" href="#">
                                <div>Arenado On The Move?</div>
                            </a>
                            <div class="article_desc">With the 2021 season almost here, will the Colorado Rockies try
                                and move star thirdbaseman?</div>
                        </div>
                    </div>

                    <div class="article">
                        <a href="#" class="article_image">
                            <img class="article_img" src="../image/bonds.min.jpg">
                        </a>
                        <div class="article_main">
                            <a class="article_link" href="#">
                                <div>Barry Bonds Hired</div>
                            </a>
                            <div class="article_desc">The San Francisco Giants hire former MLB great Barry Bonds for the
                                2021 season.</div>
                        </div>
                    </div>

                </div>

            </div>



            <hr>
            <footer class="footer">
                @chrisbenzola
            </footer>
        </div>

        <script src="scripts/subScript.js"></script>







</body>

</html>