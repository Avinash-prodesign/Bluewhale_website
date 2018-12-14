<!-- Footer -->
<footer id="footer" class="page-footer unique-color-dark pt-3 text-xs-left">
    <div class="container text-md-left mt-3">
        <div class="row mt-3">   
            <div class="col-md-6">
                <div class="line-effect">
                    <h6 class="text-uppercase font-weight-bold"> <strong>SOLUTIONS</strong> </h6>
                    <hr class=" mb-2 mt-0 d-inline-block mx-auto" style="width: 85%;">
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <p> <b>BIG DATA </b></p>
                        <hr class=" mb-2 mt-0 d-inline-block mx-auto" style="width: 60px;">
                        <p><a href="datawarehousing.php">Data Warehousing</a></p>
                        <p><a href="bi.php">Business Intelligence</a></p>
                        <p><a href="iot.php">Real time (IoT)</a></p>
                            <br>
                        <p> <b>DATA SCIENCE</b> 
                            <hr class="mb-2 mt-0 d-inline-block mx-auto" style="width: 60px;">
                            <p><a href="predictiveanalytics.php">Predictive Analytics</a></p>
                            <p><a href="reinforcementlearning.php">Reinforcement Learning</a></p>
                            <p><a href="deeplearning.php">Deep Learning</a></p>
                        </p>
                        <br>
                    </div>
                    <div class="col-md-6">
                        <p><b>OTHER SERVICES</b></p>
                        <hr class="mb-2 mt-0 d-inline-block mx-auto" style="width: 60px;">
                            <p><a href="rpa.php">Robotic Process Automation</a></p>
                            <p><a href="publiccloudmigration.php">Public Cloud Migration</a></p>
                            <p><a href="devops.php">Devops</a></p>
                            <p><a href="blockchain.php">Block Chain Training</a></p>
                    </div>
                </div>
            </div>
            <div class="col-md-3  mx-auto mb-2">
            <h6 class="text-uppercase font-weight-bold" id="about"><strong>ABOUT</strong></h6>
            <hr class="mb-2 mt-0 d-inline-block mx-auto" style="width: 60px;">
                <p> <a id="" href="leadership.php">Leadership Team</a> </p>
                <!-- <p> <a id="" href="#">Newsroom</a> </p>
                <p> <a id="" href="#">Events</a> </p> -->
                <p> <a id="" href="contacts.php">Contact</a> </p>
            </div>      
            <div class="col-md-3  mx-auto mb-2">
                <h6 class="text-uppercase font-weight-bold"><strong>QUICK LINKS</strong></h6>
                <hr class="mb-2 mt-0 d-inline-block mx-auto" style="width: 60px;">
                    <p> <a id="" href="clients.php">Clients</a> </p>
                    <p> <a id="" href="blogs.php">Blog</a> </p>
                    <p> <a id="" href="careers.php">Careers</a> </p>
                    <!--<p> <a id="" href="#">Contact</a> </p>-->
                <br>
                <h6 class="text-uppercase font-weight-bold"><strong>FOLLOW US ON</strong></h6>
                <hr class="mb-2 mt-0 d-inline-block mx-auto" style="width: 60px;"> 
                    <p>
                        <a id="footer-link-team" href="javascript:void(0)"><i class="fa fa-facebook mr-3"></i></a>
                        <a id="footer-link-team" href="javascript:void(0)"><i class="fa fa-linkedin mr-3"></i></a>
                        <a id="footer-link-team" href="javascript:void(0)"><i class="fa fa-twitter mr-3"></i></a>
                        <a id="footer-link-company" href="javascript:void(0)"><i class="fa fa-google-plus mr-3"></i></a>
                    </p>
            </div>
        </div>
    </div>
    <div class="footer-copyright py-3 text-center"> © 2018 Copyright <a href="#"> <strong> BLUE WHALE</strong> </a> | Designed By <a href="http://www.prodesigntek.com" target="_blank"> <strong> Prodesign Technologies</strong> </a></div>
</footer>

<!-- Preloader -->
<div id="preloader">
    <div class="preloader">
        <span></span>
        <span></span>
        <span></span>
        <span></span>
    </div>
</div>

    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/mdb.js"></script>
    <script src="js/owl.carousel.js"></script>
    <script src="js/main.js"></script>
        <script>
        $(window).on('load', function() {
            $("#preloader").delay(100).fadeOut();
        });
    </script>
    <script src="dist/jquery.simplePagination.js"></script>
	<script type="text/javascript">
$(document).ready(function(){
$('.pagination').pagination({
        items: <?php echo $total_records;?>,
        itemsOnPage: <?php echo $limit;?>,
        cssStyle: 'light-theme',
		currentPage : <?php echo $page;?>,
		hrefTextPrefix : 'blogs.php?page='
		
		
    });
});
</script>
</body>
</html>