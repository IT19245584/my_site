<?php
include "config.php";
?>

<?php



if (isset($_POST['submit'])) {
    // Escape user inputs for security
    $sttype = $_POST["sttype"];
    $unitype = $_POST["unitype"];
    $loveaks = $_POST["loveaks"];
    $time_peroid = $_POST["time_peroid"];
    $same_group = $_POST["same_group"];
    $marrieage = $_POST["marrieage"];
    $firstlove = $_POST["firstlove"];

    
    if ($sttype == null || $unitype == null || $loveaks == null) {
        echo "<script> alert('Fill All Text Boxes')</script>";
    } else {

        // Attempt insert query execution
        $sql = "INSERT INTO love_campus (stype,camType,inPresent,timep,sameGroup,couplemarraige,firstone)
         VALUES ('$sttype', '$unitype', '$loveaks', '$time_peroid', '$same_group', '$marrieage', '$firstlove')";
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