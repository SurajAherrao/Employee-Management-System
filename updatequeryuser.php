<?php

if(isset($_POST['update'])){

    echo $name = $_POST['name'];
    echo $age = $_POST['age'];
    echo $email = $_POST['email'];
    echo $password = $_POST['password'];
    echo $mobile = $_POST['contact'];
    echo $task = $_POST['task'];


    // Checking data empty or not
    if ($name != "" && $email != "" && $password != "" && $mobile != "" && $age != "" && $task != "") {

        // Start performing query using db [INSERT]

        // 1. Connecting Project to Database
        $conn = mysqli_connect("localhost", "root", "", "employee");

        // 2. Checking Connectiong working or not
        if (!$conn) {
            die("Error in Connecting DB" . mysqli_connect_error());
        }else{

            // 3. prepare query
            $updateUser = "UPDATE `employee` SET `name`='$name',`age`='$age',`password`='$password',`contact`='$mobile', `task_id`='$task' WHERE `employee_email`='$email'";

            if(mysqli_query($conn,$updateUser)){

                ?>
                    <script>
                        alert("Data Updated successfully");
                        window.location.href="dashboard.php";
                    </script>
                <?php

            }else{
                echo "Error in update data : ".mysqli_error($conn);
            }

        }
        
    }


}