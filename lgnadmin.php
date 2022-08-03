<?php
session_start();

if (isset($_POST['sbmt'])) {

    $name=$_POST['name'];    
    $email = $_POST['email'];
    $password = $_POST['password'];

    if ($email != "" and $password != "") {

        // 1. Connecting Project to Database
        $conn = mysqli_connect("localhost", "root", "", "employee");

        // 2. Checking Connectiong working or not
        if (!$conn) {
            die("Error in Connecting DB" . mysqli_connect_error());
        } else {


            $selectAdmin = "SELECT * FROM `employee` WHERE  `employee_email`='$email' AND `password`='$password'";

            $rows = mysqli_query($conn, $selectAdmin);

            if (mysqli_num_rows($rows) === 1) {

                $data = mysqli_fetch_assoc($rows);
                if ($data['employee_email'] === $email && $data['password'] === $password) {

                    $_SESSION['employee_email'] = $data['email'];

?>

                    <script>
                        alert("Login Successfully");
                        window.location.href = "dashboard.php";
                    </script>
                <?php

                } else {
                ?>

                    <script>
                        alert("Email id or password incorrect... Try Again...!!");
                        window.location.href ="index.php";
                    </script>
                <?php
                }
            } else {

                ?>
                <script>
                    alert("Email id or password incorrect... Try Again...!!");
                    window.location.href = "index.php";
                </script>

<?php

            }
        }
    }else{
        header("Location: index.php");    
    }
} else {
    header("Location: index.php");
}
?>