<!--A Design by W3layouts 
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<?php
global $BASE_URL;
include $DOC_ROOT . 'includes/header.php';   // include header code 
?>         
<!--//-->
<div class="header-right">
    <div class="banner">
        <div class="slider">
            <div class="callbacks_container">
                <ul class="rslides" id="slider">




<?php
for ($i = 0; $i < sizeof($args[0]); $i++) {
    ?>



                        <li >
                            <div class="banner1" style="background-image:url('<?php echo $BASE_URL . "css/images/" . $args[0][$i][1]; ?>');">
                                <div class="caption">
                                    <h3><span>vivam</span>us site</h3>
                                    <p>Nunc dignissim risus idi</p>
                                </div>			          
                            </div>
                        </li>


    <?php
}
?>	
                </ul>
            </div>
        </div>
    </div>
</div>

<!--header-bottom-->
<div class="banner-bottom-top">
    <div class="container">
        <div class="bottom-header">
            <div class="header-bottom">
                <div class=" bottom-head">
                    <a href="<?php echo $BASE_URL.'public/buysingle'; ?>">
                        <div class="buy-media">
                            <i class="buy"> </i>
                            <h6>Buy</h6>
                        </div>
                    </a>
                </div>
                <div class=" bottom-head">
                    <a href="<?php echo $BASE_URL.'public/buy'; ?>">
                        <div class="buy-media">
                            <i class="rent"> </i>
                            <h6>Rent</h6>
                        </div>
                    </a>
                </div>
                <div class=" bottom-head">
                    <a href="<?php echo $BASE_URL.'public/buy'; ?>">
                        <div class="buy-media">
                            <i class="pg"> </i>
                            <h6>Hostels</h6>
                        </div>
                    </a>
                </div>
                <div class=" bottom-head">
                    <a href="<?php echo $BASE_URL.'public/buy'; ?>">
                        <div class="buy-media">
                            <i class="sell"> </i>
                            <h6>Resale</h6>
                        </div>
                    </a>
                </div>
                <div class=" bottom-head">
                    <a href="loan.html">
                        <div class="buy-media">
                            <i class="loan"> </i>
                            <h6>Home Loans</h6>
                        </div>
                    </a>
                </div>
                <div class=" bottom-head">
                    <a href="<?php echo $BASE_URL.'public/buy'; ?>">
                        <div class="buy-media">
                            <i class="apart"> </i>
                            <h6>Projects</h6>
                        </div>
                    </a>
                </div>
                <div class=" bottom-head">
                    <a href="dealers.html">
                        <div class="buy-media">
                            <i class="deal"> </i>
                            <h6>Dealers</h6>
                        </div>
                    </a>
                </div>
                <div class="clearfix"> </div>
            </div>
        </div>
    </div>
</div>
<!--//-->

<!--//header-bottom-->


<!--//header-->
<!--content-->
<div class="content">
    <div class="content-grid">
        <div class="container">
            <h3>Most Popular</h3>
            <div class="col-md-4 box_2">
                <a href="single.php" class="mask">
                    <img class="img-responsive zoom-img" src="http://localhost/new/css/images/pc4.jpg" alt="">
                    <span class="four">40,000$</span>
                </a>
                <div class="most-1">
                    <h5><a href="single.php">Contrary to popular</a></h5>
                    <p>Lorem ipsum</p>
                </div>
            </div>
            <div class="col-md-4 box_2">
                <a href="single.php" class="mask">
                    <img class="img-responsive zoom-img" src="http://localhost/new/css/images/pc5.jpg" alt="">
                    <span class="four">40,000$</span>
                </a>
                <div class="most-1">
                    <h5><a href="single.php">Contrary to popular</a></h5>
                    <p>Lorem ipsum</p>
                </div>

            </div>
            <div class="col-md-4 box_2">
                <a href="single.php" class="mask">
                    <img class="img-responsive zoom-img" src="http://localhost/new/css/images/pc3.jpg" alt="" >
                    <span class="four">40,000$</span>
                </a>
                <div class="most-1">
                    <h5><a href="single.php">Contrary to popular</a></h5>
                    <p>Lorem ipsum</p>
                </div>

            </div>
            <div class="clearfix"> </div>
        </div>
    </div>
    <!--//service-->
    <div class="services">
        <div class="container">
            <div class="service-top">
                <h3>Services</h3>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
            </div>
            <div class="services-grid">
                <div class="col-md-6 service-top1">
                    <div class=" ser-grid">	
                        <a href="#" class="hi-icon hi-icon-archive glyphicon glyphicon-user"> </a>
                    </div>
                    <div  class="ser-top">
                        <h4>Ut wisi enim ad</h4>
                        <p>Contrary to popular belief, Lorem Ipsum is not simply random text. 
                            It has roots in a piece of classical.Contrary to popular belief, Lorem Ipsum </p>
                    </div>
                    <div class="clearfix"> </div>
                </div>
                <div class="col-md-6 service-top1">
                    <div class=" ser-grid">	
                        <a href="#" class="hi-icon hi-icon-archive glyphicon glyphicon-leaf"> </a>
                    </div>
                    <div  class="ser-top">
                        <h4>Ut wisi enim ad</h4>
                        <p>Contrary to popular belief, Lorem Ipsum is not simply random text. 
                            It has roots in a piece of classical.Contrary to popular belief, Lorem Ipsum </p>
                    </div>
                    <div class="clearfix"> </div>
                </div>
                <div class="clearfix"> </div>
            </div>
            <div class="services-grid">
                <div class="col-md-6 service-top1">
                    <div class=" ser-grid">	
                        <a href="#" class="hi-icon hi-icon-archive glyphicon glyphicon-cog"> </a>
                    </div>
                    <div  class="ser-top">
                        <h4>Ut wisi enim ad</h4>
                        <p>Contrary to popular belief, Lorem Ipsum is not simply random text. 
                            It has roots in a piece of classical.Contrary to popular belief, Lorem Ipsum </p>
                    </div>
                    <div class="clearfix"> </div>
                </div>
                <div class="col-md-6 service-top1">
                    <div class=" ser-grid">	
                        <a href="#" class="hi-icon hi-icon-archive glyphicon glyphicon-file"> </a>
                    </div>
                    <div  class="ser-top">
                        <h4>Ut wisi enim ad</h4>
                        <p>Contrary to popular belief, Lorem Ipsum is not simply random text. 
                            It has roots in a piece of classical .Contrary to popular belief, Lorem Ipsum</p>
                    </div>
                    <div class="clearfix"> </div>
                </div>
                <div class="clearfix"> </div>
            </div>
        </div>
    </div>
    <!--//services-->
    <!--features-->
    <div class="content-middle">
        <div class="container">
            <div class="mid-content">
                <h3>the best features</h3>
                <p>Contrary to popular belief
                    , Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old.</p>
                <a class="hvr-sweep-to-right more-in" href="single.php">Read More</a>
            </div>
        </div>
    </div>
    <!--//features-->
    <!--phone-->
    <div class="phone">
        <div class="container">
            <div class="col-md-6">
                <img src="http://localhost/new/css/images/ph1.png" class="img-responsive" alt=""/>
            </div>
            <div class="col-md-6 phone-text">
                <h4>Search Homes Everywhere</h4>
                <div class="text-1">
                    <h5>Custom Location Tracker</h5>
                    <p>There are many variations of passages of Lorem Ipsum available, but the majorit</p>
                </div>
                <div class="text-1">
                    <h5>Map Search</h5>
                    <p>There are many variations of passages of Lorem Ipsum available, but the majorit</p>
                </div>
                <div class="text-1">
                    <h5>Quick Details</h5>
                    <p>There are many variations of passages of Lorem Ipsum available, but the majorit</p>
                </div>
                <a href="mobile_app.html" class="hvr-sweep-to-right more">Download the App</a>
            </div>
        </div>
    </div>
    <!--//phone-->
    <!--project-->
    <div class="project">
        <div class="container">
            <h3>Project Gallery</h3>
            <div class="project-top">
                <div class="col-md-3 project-grid">
                    <div class="project-grid-top">
                        <a href="single.php" class="mask"><img src="http://localhost/new/css/images/ga.jpg" class="img-responsive zoom-img" alt=""/></a>
                        <div class="col-md1">
                            <div class="col-md2">
                                <div class="col-md3">
                                    <span class="star"> 4.5</span>
                                </div>
                                <div class="col-md4">
                                    <strong>Venice</strong>
                                    <small>50 Reviews</small>
                                </div>
                                <div class="clearfix"> </div>
                            </div>
                            <p>2, 3, 4 BHK Flats</p>
                            <p class="cost">$65,000</p>
                            <a href="single.php" class="hvr-sweep-to-right more">See Details</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 project-grid">
                    <div class="project-grid-top">
                        <a href="single.php" class="mask"><img src="http://localhost/new/css/images/ga1.jpg" class="img-responsive zoom-img" alt=""/></a>
                        <div class="col-md1">
                            <div class="col-md2">
                                <div class="col-md3">
                                    <span class="star"> 4.5</span>
                                </div>
                                <div class="col-md4">
                                    <strong>Venice</strong>
                                    <small>50 Reviews</small>
                                </div>
                                <div class="clearfix"> </div>
                            </div>
                            <p>2, 3, 4 BHK Flats</p>
                            <p class="cost">$65,000</p>
                            <a href="single.php" class="hvr-sweep-to-right more">See Details</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 project-grid">
                    <div class="project-grid-top">
                        <a href="single.php" class="mask"><img src="http://localhost/new/css/images/ga2.jpg" class="img-responsive zoom-img" alt=""/></a>
                        <div class="col-md1">
                            <div class="col-md2">
                                <div class="col-md3">
                                    <span class="star"> 4.5</span>
                                </div>
                                <div class="col-md4">
                                    <strong>Venice</strong>
                                    <small>50 Reviews</small>
                                </div>
                                <div class="clearfix"> </div>
                            </div>
                            <p>2, 3, 4 BHK Flats</p>
                            <p class="cost">$65,000</p>
                            <a href="single.php" class="hvr-sweep-to-right more">See Details</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 project-grid">
                    <div class="project-grid-top">
                        <a href="single.php" class="mask"><img src="http://localhost/new/css/images/ga3.jpg" class="img-responsive zoom-img" alt=""/></a>
                        <div class="col-md1">
                            <div class="col-md2">
                                <div class="col-md3">
                                    <span class="star"> 4.5</span>
                                </div>
                                <div class="col-md4">
                                    <strong>Venice</strong>
                                    <small>50 Reviews</small>
                                </div>
                                <div class="clearfix"> </div>
                            </div>
                            <p>2, 3, 4 BHK Flats</p>
                            <p class="cost">$65,000</p>
                            <a href="single.php" class="hvr-sweep-to-right more">See Details</a>
                        </div>
                    </div>
                </div>
                <div class="clearfix"> </div>
            </div>				
        </div>
    </div>
    <!--//project-->
    <!--test-->








    <div class="content-bottom">
        <div class="container">
            <h3>Testimonials</h3>
            <div class="col-md-6 name-in">

<?php
for ($i = 0; $i < sizeof($args[1]) / 2; $i++) {
    ?>



                    <div class=" bottom-in">
                        <p class="para-in">
    <?php
    echo $args[1][$i][3];
    ?>
                        </p>
                        <i class="dolor"> </i>
                        <div class="men-grid">
                            <a href="#" class="men-top"><img class="img-responsive men-top" src='<?php echo $BASE_URL . "css/images/" . $args[1][$i][2]; ?>' alt=""></a>
                            <div class="men">
                                <span><?php
                        echo $args[1][$i][0];
                        ;
                        ?></span>
                                <p><?php
                                    echo $args[1][$i][1];
                                    ?></p>
                            </div>
                            <div class="clearfix"> </div>
                        </div>
                    </div>

    <?php
}

for ($i = (sizeof($args[1]) / 2) + 1; $i < sizeof($args[1]); $i++) {
    ?>
                </div>
                <div class="col-md-6  name-on">
                    <?php
                    $b = 1;
                    ?>
                    <div class="bottom-in ">
                        <p class="para-in">
                    <?php
                    echo $args[1][$i][3];
                    ?>
                        </p>
                        <i class="dolor"> </i>
                        <div class="men-grid">
                            <a href="#" class="men-top"><img class="img-responsive men-top" src="<?php echo $BASE_URL . "css/images/" . $args[1][$i][2]; ?>" alt=""></a>
                            <div class="men">
                                <span><?php
                        echo $args[1][$i][0];
                        ;
                        ?></span>
                                <p><?php
                                    echo $args[1][$i][1];
                                    ?></p>
                            </div>
                            <div class="clearfix"> </div>
                        </div>
                    </div>

    <?php
}
?>

            </div>
            <div class="clearfix"> </div>
        </div>

    </div>	





    <!--//test-->	
    <!--partners-->


    <div class="content-bottom1">
        <h3>Our Partners</h3>
        <div class="container">
            <ul>
<?php
$count = 0;
for ($i = 0; $i < sizeof($args[2]); $i++) {
    $count++;
    ?>


                    <li><a href="#"><img class="img-responsive" src="<?php echo $BASE_URL . "css/images/" . $args[2][$i][1]; ?>" alt=""></a></li>
                    <?php
                    if ($count % 5 == 0) {
                        ?>
                        <div class="clearfix"> </div>
                    </ul>
                    <ul>
                        <?php
                    }
                }
                ?>
                <div class="clearfix"> </div>
            </ul>
        </div>
    </div>

    <!--//partners-->	
</div>
<!--footer-->
                <?php
                include $DOC_ROOT . 'includes/footer.php'    // include footer
                ?>