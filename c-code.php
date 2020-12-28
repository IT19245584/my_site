<?php include "head.php"
?>
<?php
include 'config.php';
$sql = "select * from download";
$result = $conn->query($sql);
$COUNT = 0;
if ($result->num_rows > 0) {
    // output data of each row
    while ($row = $result->fetch_assoc()) {
        $COUNT = $COUNT + 1;
    }
}
?>

<body>
    <?php include "nav.php" ?>
    <section id="features" style="margin: 2% 5% 2% 5% ;">
        <img class="img-fluid" src="https://www.open.edu/openlearn/sites/www.open.edu.openlearn/files/styles/ole_ng_content_style_1000/public/ole_images/1000x240.jpg?itok=ITCfuLh_" width="100%" height="5%">
        <form action="zip_download.php" method="post">
            <div class="jumbotron">
                <h1 class="display-4">Download C Code</h1>
                <hr class="my-4">
                <p class="lead" style="line-height:120%;">Question One - Code is base on Repetition and Selection Control Structure</br>
                    Question Two - Code is base on Function And Assert Control Structure</br>
                    Question Tree - Download Sample C Code. Code is base on Arrays, Repetition and Selection Control Structure</p>
                <p class="lead">
                    <input type="submit" class="btn btn-primary btn-lg" name="submit" value="Download File"><input type="submit" class="btn btn-success btn-lg ml-2" value="Total File Downloads <?php echo $COUNT; ?>" />
                </p>
            </div>
        </form>
    </section>
    <?php include "footer.php" ?>
</body>

</html>