<?php
include "config.php";
?>

<?php



if (isset($_POST['submit'])) {
    // Escape user inputs for security
    $syear = $_POST["syear"];
    $smarks = $_POST["smarks"];
    $sstatus = $_POST["sstatus"];
    $oyear = $_POST["oyear"];
    $ostatus = $_POST["ostatus"];
    $otry = $_POST["otry"];
    $ayear = $_POST["ayear"];
    $astatus = $_POST["astatus"];
    $atry = $_POST["atry"];
    $unistatus = $_POST["unistatus"];
    $Comment = $_POST["Comment"];

    if ($syear == null || $smarks == null || $sstatus == null || $unistatus == null) {
        echo "<script> alert('Fill All Text Boxes')</script>";
    } else {

        // Attempt insert query execution
        $sql = "INSERT INTO scholarship(syear,spass,smarks,oyear,opass,otry,ayear,atry,apss,comments,unistatus)
         VALUES('$syear','$sstatus','$smarks','$oyear','$ostatus','$otry','$ayear','$atry','$astatus','$Comment','$unistatus') ";
        if (mysqli_query($conn, $sql)) {
            echo "<script>
                alert('Thank You For Support');
                window.location = 'index.php';
                 </script>";
        } else {
            echo "ERROR: Could not able to execute $sql.";
        }
    }

    // Close connection
    mysqli_close($conn);
}

?>