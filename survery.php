<?php include "head.php"
?>


<body>
    <?php include "nav.php" ?>
    <!--==========================
      Pricing Section
    ============================-->
    <hr style="margin: 0%; opacity:0.6;" class="bg-light">
    <section id="pricing" class="wow fadeInUp section-bg">
        <div class="container">

            <header class="section-header">
                <h3 class="text-uppercase mt-5">My Pricing</h3>
            </header>

            <div class="row flex-items-xs-middle flex-items-xs-center">

                <!-- Basic Plan  -->
                <div class="col-xs-12 col-lg-4">
                    <div class="card" style="padding-top:0%;">
                        <div class="card-block">
                            <img src="img/uni_Student.jpg" class="img-fluid" alt="">
                            <h2 class="text-uppercase text-muted mt-5 mr-5 ml-5 " style="font-weight: 700;  font-size:20px; line-height:155%;"><span class="text-info">Survey on Relationship Between University And Scholarship</span><br /></h2>

                            <a href="static_page.php" class="btn">Open</a>
                        </div>
                    </div>
                </div>

                <!-- Regular Plan  -->
                <div class="col-xs-12 col-lg-4">
                    <div class="card" style="padding-top:0%;">
                        <div class="card-block">
                            <img src="img/uni_love.jpg" class="img-fluid" alt="">
                            <h2 class="text-uppercase text-muted mt-5 mr-5 ml-5 " style="font-weight: 700;  font-size:20px; line-height:155%;"><span class="text-info">Survey On University Love</span><br /><br /><br /></h2>
                            <a href="uni_love.php" class="btn">Open</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>

    </section><!-- #pricing -->
    <?php include "footer.php" ?>
</body>

</html>