<?php
include '../includes/index_header.php';
$query = "SELECT product.*,category.cat_name FROM product"
        . " INNER JOIN category ON product.cat_id = category.cat_id "
        . "where category.cat_id = {$_GET['cat_id']}";
$result = mysqli_query($conn, $query);
$row = array();
while ($rowSet = mysqli_fetch_assoc($result)) {
    $row[] = $rowSet;
}
?>


<section class="hero-wrap hero-wrap-2 ftco-degree-bg js-fullheight" style="background-image: url('images/bg_1.jpg');" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="overlay-2"></div>
    <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-center">
            <div class="col-md-9 ftco-animate pb-5 mb-5 text-center">
                <h1 class="mb-3 bread"><?php echo "{$row[0]['cat_name']}"; ?></h1>
                <p class="breadcrumbs"><span class="mr-2"><a href="index.php">Home <i class="ion-ios-arrow-forward"></i></a></span>  <span><a href="category.php"><?php echo "{$row[0]['cat_name']}"; ?><i class="ion-ios-arrow-forward"></i></span></p>
            </div>
        </div>
    </div>
</section>

<section class="ftco-section goto-here">
    <div class="container">
        <div class="row">
            <?php
            if (is_array($row)) {
                foreach ($row as $row1) {

                    echo "<div class='col-md-4'>
                <div class='property-wrap ftco-animate'>
                    <div class='img d-flex align-items-center justify-content-center' style='background-image: url(../product_img/{$row1['pro_img']});'>

                </div>
                <div class='text'>

                    <h3 class='mb-0'><a href='#'>{$row1['pro_name']}</a></h3>
                    <span>{$row1['pro_desc']}</span>

                </div>
            </div>
        </div>

        ";
                }
            }
            ?>

        </div>
        <div class="row mt-5">
            <div class="col text-center">
                <div class="block-27">
                    <ul>
                        <li><a href="#">&lt;</a></li>
                        <li class="active"><span>1</span></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#">4</a></li>
                        <li><a href="#">5</a></li>
                        <li><a href="#">&gt;</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>


<footer class="ftco-footer ftco-section">
    <div class="container">
        <div class="row mb-5">
            <div class="col-md">
                <div class="ftco-footer-widget mb-4">
                    <h2 class="ftco-heading-2">Findstate</h2>
                    <p>Far far away, behind the word mountains, far from the countries.</p>
                    <ul class="ftco-footer-social list-unstyled mt-5">
                        <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                        <li class="ftco-animate"><a href="https://web.facebook.com/JordanianMutamayizahDistributionCo/"><span class="icon-facebook"></span></a></li>
                        <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md">
                <div class="ftco-footer-widget mb-4 ml-md-4">
                    <h2 class="ftco-heading-2">Get to Know Us</h2>
                    <ul class="list-unstyled">
                        <li><a href="#"><span class="icon-long-arrow-right mr-2"></span>careers</a></li>
                        <li><a href="#"><span class="icon-long-arrow-right mr-2"></span>blog</a></li>
                        <li><a href="about.html"><span class="icon-long-arrow-right mr-2"></span>about vita</a></li>
                        <li><a href="#"><span class="icon-long-arrow-right mr-2"></span>investor</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md">
                <div class="ftco-footer-widget mb-4 ml-md-4">
                    <h2 class="ftco-heading-2">Vita Payment Products</h2>
                    <ul class="list-unstyled">
                        <li><a href="#"><span class="icon-long-arrow-right mr-2"></span>Vita Businees Products</a></li>
                        <li><a href="#"><span class="icon-long-arrow-right mr-2"></span>Shop with Points </a></li>
                        <li><a href="#"><span class="icon-long-arrow-right mr-2"></span>Reload Your Balance</a></li>
                        <li><a href="#"><span class="icon-long-arrow-right mr-2"></span>Vita Currency Convency</a></li>
                    </ul>
                </div>
            </div>

            <div class="col-md">
                <div class="ftco-footer-widget mb-4">
                    <h2 class="ftco-heading-2">Have a Questions?</h2>
                    <div class="block-23 mb-3">
                        <ul>
                            <li><span class="icon icon-map-marker"></span><span class="text">188 Zahran Street‎‏ ‏ Amman</span></li>
                            <li><a href="#"><span class="icon icon-phone"></span><span class="text"> (06) 200 0274</span></a></li>
                            <li><a href="#"><span class="icon icon-envelope pr-4"></span><span class="text">info@ddcjo.com</span></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 text-center">


            </div>
        </div>
    </div>
</footer>




<!-- loader -->
<div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


<script src="js/jquery.min.js"></script>
<script src="js/jquery-migrate-3.0.1.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.easing.1.3.js"></script>
<script src="js/jquery.waypoints.min.js"></script>
<script src="js/jquery.stellar.min.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/jquery.magnific-popup.min.js"></script>
<script src="js/aos.js"></script>
<script src="js/jquery.animateNumber.min.js"></script>
<script src="js/bootstrap-datepicker.js"></script>
<script src="js/jquery.timepicker.min.js"></script>
<script src="js/scrollax.min.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
<script src="js/google-map.js"></script>
<script src="js/main.js"></script>

</body>
</html>