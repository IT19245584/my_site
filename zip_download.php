
<?php
include "config.php";
?>

<?php



if (isset($_POST['submit'])) {
    $date = date("F j, Y");

            // Attempt insert query execution
            $sql = "INSERT INTO download(type,date) VALUES ('c-code1','$date') ";
            if (mysqli_query($conn, $sql)) {
        
               header('Content-Type: application/download');
               header('Content-Disposition: attachment; filename="answer.zip"');
               header("Content-Length: " . filesize("answer.zip"));
               $fp = fopen("answer.zip", "r");
               fpassthru($fp);
               fclose($fp);
               header('Location: index.php');
        } 
    // Close connection
    mysqli_close($conn);
}
?>