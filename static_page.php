<?php include "head.php"
?>
<?php
include 'config.php';
$sql = "select * from scholarship";
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
$sql = "select * from scholarship where spass='pass' && unistatus='Yes'";
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
$sql = "select * from scholarship where spass='fail' && unistatus='Yes'";
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
$sql = "select * from scholarship where spass='pass' && unistatus='No'";
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
            <h2 class="text-uppercase text-muted mt-5 mr-5 ml-5 " style="font-weight: 700;  font-size:20px; line-height:155%;"> ශිෂ්‍යත්ව සමත් සිසුන් කී දෙනෙකු පෞද්ගලික ‌හෝ රජයේ විශ්ව විද්‍යාලවල ඇතුලත් වී ඇත්ද යන්න පිළිබඳ සමීක්ෂණය <br /> <span class="text-info">Survey on how many students who have passed the scholarship are admitted to the universities </span><br /><span class="text-success"> புலமைப்பரிசில் தேர்ச்சி பெற்ற எத்தனை மாணவர்கள் தனியார் மற்றும் அரசு பல்கலைக்கழகங்களில் அனுமதிக்கப்பட்டுள்ளனர் என்பது குறித்த ஆய்வு</span></h2>
        </center>
        <div class="container mt-5">
            <div class="row feature-item ">
                <div class="col-lg-6 wow fadeInUp" style="padding:10% 10%  0% 0%;">
                    <img src="img/1.webp" class="img-fluid" alt="">
                </div>
                <div class="col-lg-6 wow fadeInUp pt-5 pt-lg-0">
                    <form class="bg-light" style="padding: 5%;" action="satatic_page_action.php" method="POST">
                        <center> <span class="text-muted text-center" style='font-weight:600; font-size:20px;'>Scholarship</span></center>
                        <h1></h1>
                        <div class="row">
                            <div class="col">
                                <div class="form-group">
                                    <label for="exampleFormControlInput1" class="text-danger">Year</label>
                                    <select class="form-control" name="syear">
                                        <?php include "exam_year.php"; ?>
                                    </select>
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group">
                                    <label for="exampleFormControlInput1" class="text-danger">Marks </label>
                                    <input class="form-control" name="smarks" type="text" placeholder=""> </div>
                            </div>
                            <div class="col">
                                <div class="form-group">
                                    <label for="exampleFormControlInput1" class="text-danger">Pass Or Fail</label>
                                    <select class="form-control" name="sstatus">
                                        <option value="pass">pass</option>
                                        <option value="Fail">Fail</option>
                                    </select></div>
                            </div>
                        </div>
                        <hr />
                        <center><span class="text-muted text-center" style='font-weight:600; font-size:20px;padding-bottom:5%;'>Ordinary Exam - OL</span></center>
                        <h1></h1>
                        <div class="row">
                            <div class="col">
                                <div class="form-group">
                                    <label for="exampleFormControlInput1" class="text-success">First Try Year</label>
                                    <select class="form-control" name="oyear">
                                        <?php include "exam_year.php"; ?>
                                    </select>
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group">
                                    <label for="exampleFormControlInput1" class="text-success">Last Try Pass / Fail</label>
                                    <select class="form-control" name="ostatus">
                                        <option value="pass">pass</option>
                                        <option value="Fail">Fail</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group">
                                    <label for="exampleFormControlInput1" class="text-success">Frequency Of O/L </label>
                                    <select class="form-control" name="otry">
                                        <option value="1">First</option>
                                        <option value="2">Second</option>
                                        <option value="3">Third</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <hr />
                        <center><span class="text-muted text-center" style='font-weight:600; font-size:20px;'>Advanced Exam</span></center>
                        <h1></h1>
                        <div class="row">
                            <div class="col">
                                <div class="form-group">
                                    <label for="exampleFormControlInput1" class="text-success">First Try Year</label>
                                    <select class="form-control" name="ayear">
                                        <?php include "exam_year.php"; ?>
                                    </select>
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group">
                                    <label for="exampleFormControlInput1" class="text-success">Last Try Pass / Fail</label>
                                    <select class="form-control" name="astatus">
                                        <option value="pass">pass</option>
                                        <option value="Fail">Fail</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group">
                                    <label for="exampleFormControlInput1" class="text-success">Frequency Of A/L </label>
                                    <select class="form-control" name="atry">
                                        <option value="1">First</option>
                                        <option value="2">Second</option>
                                        <option value="3">Third</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <hr />
                        <center><span class="text-muted text-center" style='font-weight:600; font-size:20px;'>University Entrance</span></center>
                        <h1></h1>
                        <div class="row">
                            <div class="col">
                                <div class="form-group">
                                    <label for="exampleFormControlInput1" class="text-success">Are You University Student</label>
                                    <select class="form-control" name="unistatus">
                                        <option value="Yes">Yes</option>
                                        <option value="No">No</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">Your Comment <span style="color:red;">(*Optional)</span></label>
                            <textarea class="form-control" name="Comment" id="exampleFormControlTextarea1" rows="4"></textarea>
                        </div>
                        <button type="submit" name="submit" class="btn btn-info">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <hr>
    <section id="why-us" class="wow fadeIn bg-light">
        <div class="container">
            <div class="row counters">
                <div class="col-lg-3 col-6 text-center">
                    <span data-toggle="counter-up"><?php echo $COUNT ?></span>
                    <p>Total Survey Filled Student Count</p>
                </div>
                <div class="col-lg-3 col-6 text-center">
                    <span data-toggle="counter-up"><?php echo $uni_pass_sch_pass ?></span>
                    <p>Scholarship Passed University Student</p>
                </div>

                <div class="col-lg-3 col-6 text-center">
                    <span data-toggle="counter-up"><?php echo $uni_Yes_sch_fail ?></span>
                    <p>Scholarship Failed University Student</p>
                </div>

                <div class="col-lg-3 col-6 text-center">
                    <span data-toggle="counter-up"><?php echo $uni_NO_sch_PASS ?></span>
                    <p>Scholarship Passed But Not University Student</p>
                </div>
            </div>
        </div>
    </section>
    <?php include "footer.php" ?>
</body>

</html>