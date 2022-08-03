<?php 


// Check Submit Button click or not
if (isset($_POST['register'])) {


    // Get all Post data in to variables
    $name = $_POST['name'];
    $age = $_POST['age'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $contact = $_POST['contact'];
    $task = $_POST['task'];

    // Checking data empty or not
    if ($name != "" && $age != "" && $email != "" && $password != "" && $contact != "" && $task != "") {

        // Start performing query using db [INSERT]

        // 1. Connecting Project to Database
        $conn = mysqli_connect("localhost", "root", "", "employee");

        // Checking Connectiong working or not
        if (!$conn) {
            die("Error in Connecting DB" . mysqli_connect_error());
        }

        // Prepare INSERT Query
        $insertQuery = "INSERT INTO `employee`(`name`, `age` , `employee_email`, `password`, `contact`, `task_id`) VALUES ('$name','$age','$email','$password','$contact','$task')";

        // Execute INSERT Query
        $result = mysqli_query($conn, $insertQuery);

        if ($result) {

?>

            <script>
                alert("Data Inserted");
                window.location.href = "addemployee.php";
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

    header("Location: addemployee.php");
}




?>