<?php include "head.php"
?>


<body>
    <?php include "nav.php" ?>

    <section id="portfolio" style="padding-top:10%;">
        <div class="container">
            <header class="section-header">
                <h3 class="section-title">OUR PORTFOLIO</h3>
            </header>
            <span class="text-center text-muted text-uppercase" style='font-weight:600; margin-bottom:4%; font-size:25px;'>IT Field - sololearn</span>
            <h1></h1>
            <div class="row portfolio-container">
                <?php
                $sololearn = array(
                    array("HTML", 0),
                    array("CSS", 0),
                    array("C++", 0),
                    array("JAVA", 0),
                    array("SQL", 0)
                );

                for ($x = 0; $x < count($sololearn); $x++) {

                    echo "<div class='col-lg-4 col-md-6 portfolio-item filter-app'>";
                    echo "<div class='portfolio-wrap'>";
                    echo "<img src='img/portfolio/" . $sololearn[$x][0] . ".jpg' class='img-fluid' alt=''>";
                    echo "<div class='portfolio-info'>";
                    echo "<h4><a href='#'>" . $sololearn[$x][0] . "</a></h4>";
                    echo "<p>" . $sololearn[$x][0] . "</p>";
                    echo "<div>";
                    echo " <a href='img/portfolio/" . $sololearn[$x][0] . ".jpg' data-lightbox='portfolio' data-title='" . $sololearn[$x][0] . "' class='link-preview' title='Preview'><i class='ion ion-eye'></i></a>";
                    echo "</div>";
                    echo " </div>";
                    echo " </div>";
                    echo " </div>";
                } ?>
            </div>
        </div>
    </section>
    <section id="portfolio " style="padding-top:10%;">
        <div class="container">
            <span class="text-center text-muted text-uppercase" style='font-weight:600; margin-bottom:4%; font-size:25px;'>IT Field - sololearn</span>
            <h1></h1>
            <div class="row portfolio-container">
                <?php
                $sololearn = array(
                    array("HTML", 0),
                    array("CSS", 0),
                    array("C++", 0),
                    array("JAVA", 0),
                    array("SQL", 0)
                );

                for ($x = 0; $x < count($sololearn); $x++) {

                    echo "<div class='col-lg-4 col-md-6 portfolio-item filter-app'>";
                    echo "<div class='portfolio-wrap'>";
                    echo "<img src='img/portfolio/" . $sololearn[$x][0] . ".jpg' class='img-fluid' alt=''>";
                    echo "<div class='portfolio-info'>";
                    echo "<h4><a href='#'>" . $sololearn[$x][0] . "</a></h4>";
                    echo "<p>" . $sololearn[$x][0] . "</p>";
                    echo "<div>";
                    echo " <a href='img/portfolio/" . $sololearn[$x][0] . ".jpg' data-lightbox='portfolio' data-title='" . $sololearn[$x][0] . "' class='link-preview' title='Preview'><i class='ion ion-eye'></i></a>";
                    echo "</div>";
                    echo " </div>";
                    echo " </div>";
                    echo " </div>";
                } ?>
            </div>
        </div>
    </section>
    <?php include "footer.php" ?>
</body>

</html>