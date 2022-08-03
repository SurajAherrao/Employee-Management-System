<?php 


// Check Submit Button click or not
if (isset($_POST['sbmt'])) {


    // Get all Post data in to variables
    $task = $_POST['task'];
    $description = $_POST['description'];
    $time_limit = $_POST['time_limit'];
    

    // Checking data empty or not
    if ($task != "" && $description != "" && $time_limit != "" ) {

        // Start performing query using db [INSERT]

        // 1. Connecting Project to Database
        $conn = mysqli_connect("localhost", "root", "", "employee");

        // Checking Connectiong working or not
        if (!$conn) {
            die("Error in Connecting DB" . mysqli_connect_error());
        }

        // Prepare INSERT Query
        $insertQuery = "INSERT INTO `task`(`task`, `description` , `task_id`) VALUES ('$task','$description','$time_limit')";

        // Execute INSERT Query
        $result = mysqli_query($conn, $insertQuery);

        if ($result) {

?>

            <script>
                alert("Data Inserted");
                window.location.href = "task.php";
            </script>
    <?php
        } else {
            echo "Error" . mysqli_error($conn);
        }
    } else {
        echo "All field are empty....!!";
        // header("Location: adduser.php");
    }
} else {

    header("Location: addTask.php");
}




?>