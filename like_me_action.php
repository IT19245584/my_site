<?php
include "config.php";
?>

<?php



if (isset($_POST['submit'])) {
    // Escape user inputs for security
    $name = $_POST["name"];
    $Comment = $_POST["Comment"];
    $date = date("F j, Y");

    $sql = "select * from likes where email='$name'";
    $result = $conn->query($sql);
    $COUNT = 0;
    if ($result->num_rows > 0) {
        // output data of each row
        while ($row = $result->fetch_assoc()
        ) {
            echo "<script>
                alert('Already You Had Liked');
                window.location = 'index.php';
            </script>";
        }
    }else{
        if ( $name == null) {
            echo "<script>
                alert('Fill All Text Boxes');
                window.location = 'like.php';
            </script>";
        } else {

            // Attempt insert query execution
            $sql = "INSERT INTO likes(email, comment, date) VALUES ('$name','$Comment','$date') ";
            if (mysqli_query($conn, $sql)) {
                
                echo "<script>
                alert('Records added successfully!!!!');
                window.location = 'Location:index.php';
            </script>";
                
            } else {
                echo "ERROR: Could not able to execute $sql.";
            }
        }
    }

    
        
    // Close connection
    mysqli_close($conn);
}

?>