<?php include "head.php"
?>
<?php
include 'config.php';
$sql = "select * from love_campus";
$result = $conn->query($sql);
$COUNT = 0;
if ($result->num_rows > 0) {
    // output data of each row
    while ($row = $result->fetch_assoc()) {
        $COUNT = $COUNT + 1;
    }
}
?>

<?php
include 'config.php';
$sql = "select * from love_campus where camType='Government' && inPresent	='Yes'";
$result = $conn->query($sql);
$uni_pass_sch_pass = 0;
if ($result->num_rows > 0) {
    // output data of each row
    while ($row = $result->fetch_assoc()) {
        $uni_pass_sch_pass = $uni_pass_sch_pass + 1;
    }
}


?>

<?php
include 'config.php';
$sql = "select * from love_campus where  camType='Private' && inPresent	='Yes'";
$result = $conn->query($sql);
$uni_Yes_sch_fail = 0;
if ($result->num_rows > 0) {
    // output data of each row
    while ($row = $result->fetch_assoc()) {
        $uni_Yes_sch_fail = $uni_Yes_sch_fail + 1;
    }
}

?>

<?php
include 'config.php';
$sql = "select * from love_campus where couplemarraige='Yes'";
$result = $conn->query($sql);
$uni_NO_sch_PASS = 0;
if ($result->num_rows > 0) {
    // output data of each row
    while ($row = $result->fetch_assoc()) {
        $uni_NO_sch_PASS = $uni_NO_sch_PASS + 1;
    }
}

?>

<body>
    <?php include "nav.php" ?>
    <section id="features">
        <center>
            <h2 class="text-uppercase text-muted mt-5 mr-5 ml-5 " style="font-weight: 700;  font-size:20px; line-height:155%;"> විශ්ව විද්‍යාල ආදරය පිළිබඳ සමීක්ෂණය<br /> <span class="text-info">Survey On University Love</span><br /><span class="text-success"> பல்கலைக்கழக காதல் பற்றிய ஆய்வு </span></h2>
        </center>
        <div class="container mt-5">

            <div class="row feature-item ">
                <div class="col-lg-6 wow fadeInUp" style="padding:10% 10%  0% 0%;">
                    <img src="img/1.webp" class="img-fluid" alt="">
                </div>
                <div class="col-lg-6 wow fadeInUp pt-5 pt-lg-0">
                    <form class="bg-light" style="padding: 5%;" action="uni_love_Action.php" method="POST">
                        <div class="row">
                            <div class="col">
                                <div class="form-group">
                                    <label for="exampleFormControlInput1" class="text-danger text-capitalize">You Are,</label>
                                    <select class="form-control" name="sttype">
                                        <option>Select</option>
                                        <option value="Undergraduate" onclick="undergraduate()">Undergraduate</option>
                                        <option value="Postgraduate" onclick="Postgraduate()">Postgraduate</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <!--<button type="button">Disable Text field</button>-->
                        <div class="row">
                            <div class="col">
                                <div class="form-group">
                                    <label for="exampleFormControlInput1" class="text-danger text-capitalize">University Type</label>
                                    <select class="form-control" name="unitype">
                                        <option value="Government">Government</option>
                                        <option value="Private">Private</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="form-group">
                                    <label for="exampleFormControlInput1" class="text-danger text-capitalize">In Present, Do You Have university Love</label>
                                    <select class="form-control" name="loveaks">
                                        <option value="No">No</option>
                                        <option value="Yes">Yes</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <center> <span class="text-muted text-center" style='font-weight:600; font-size:20px;'>If You Have Love</span></center>
                        <div class="row" id="undergraduateDIV2">
                            <div class="col">
                                <div class="col">
                                    <div class="form-group">
                                        <label for="exampleFormControlInput1" class="text-info text-capitalize">It IS,<br /></label>
                                        <select class="form-control" name="time_peroid">
                                            <option value="No">Select</option>
                                            <option value="1">less than Months love</option>
                                            <option value="2">1-5 Months love</option>
                                            <option value="3">5-12 Months love</option>
                                            <option value="4">2 Years love</option>
                                            <option value="5">3 Years love</option>
                                            <option value="6">4 Years love</option>
                                            <option value="7">More Than 4 Years love</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group">
                                        <label for="exampleFormControlInput1" class="text-info text-capitalize">Do you both study in the same group?<br /></label>
                                        <select class="form-control" name="same_group">
                                            <option value="No">No</option>
                                            <option value="Yes">Yes</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="row" id="PostgraduateDIV1">
                            <div class="col">
                                <div class="col">
                                    <div class="form-group">
                                        <label for="exampleFormControlInput1" class="text-success text-capitalize">Do you married your university love?<br /></label>
                                        <select class="form-control" name="marrieage">
                                            <option value="No">No</option>
                                            <option value="Yes">Yes</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group">
                                        <label for="exampleFormControlInput1" class="text-success text-capitalize">Is It You First university Love?<br /></label>
                                        <select class="form-control" name="firstlove">
                                            <option value="No">No</option>
                                            <option value="Yes">Yes</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <button type="submit" name="submit" class="btn btn-info">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <section id="why-us" class="wow fadeIn bg-light">
        <div class="container">
            <div class="row counters">
                <div class="col-lg-3 col-6 text-center">
                    <span data-toggle="counter-up"><?php echo $COUNT ?></span>
                    <p>Total Survey Filled Student Count</p>
                </div>
                <div class="col-lg-3 col-6 text-center">
                    <span data-toggle="counter-up"><?php echo $uni_pass_sch_pass ?></span>
                    <p>Government University Couples</p>
                </div>

                <div class="col-lg-3 col-6 text-center">
                    <span data-toggle="counter-up"><?php echo $uni_Yes_sch_fail ?></span>
                    <p>Private University Couples</p>
                </div>

                <div class="col-lg-3 col-6 text-center">
                    <span data-toggle="counter-up"><?php echo $uni_NO_sch_PASS ?></span>
                    <p>University Marrieage</p>
                </div>
            </div>
        </div>
    </section>

    <?php include "footer.php" ?>

    <script>
        function undergraduate() {
            var x = document.getElementById("PostgraduateDIV1");

            if (x.style.display === "none") {
                x.style.display = "block";
            } else {
                x.style.display = "none";
            }

            var xy = document.getElementById("PostgraduateDIV2");
            if (xy.style.display === "block") {
                xy.style.display = "none";
            } else {
                xy.style.display = "block";
            }

        }
    </script>

    <script>
        function Postgraduate() {
            var xx = document.getElementById("undergraduateDIV2");

            if (xx.style.display === "none") {
                xx.style.display = "block";
            } else {
                xx.style.display = "none";
            }

            var xy = document.getElementById("PostgraduateDIV1");
            if (xy.style.display === "block") {
                xy.style.display = "none";
            } else {
                xy.style.display = "block";
            }
        }
    </script>
</body>

</html>