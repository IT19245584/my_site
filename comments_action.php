<?php
include "config.php";
?>

<?php



if (isset($_POST['submit'])) {
    // Escape user inputs for security
    $name = $_POST["name"];
    $role = $_POST["role"];
    $type = $_POST["type"];
    $Comment = $_POST["Comment"];
    $date = date("F j, Y");

    if ($Comment == null || $type == null || $role == null || $name == null) {
        echo "<script> alert('Fill All Text Boxes')</script>";
    } else {

        // Attempt insert query execution
        $sql = "INSERT INTO comments(date, name, type, role, comment) VALUES ('$date','$name','$type','$role','$Comment') ";
        if (mysqli_query($conn, $sql)) {
            echo "<script>
                alert('Thank You For Your Comment');
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