<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="shortcut icon" href="img/icons/icon-48x48.png" />

    <title>Employee Update</title>

    <link href="css/app.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">
</head>

<body>
    <main class="d-flex w-100">
        <div class="container d-flex flex-column">
            <div class="row vh-100">
                <div class="col-sm-10 col-md-8 col-lg-6 mx-auto d-table h-100">
                    <div class="d-table-cell align-middle">

                        <div class="text-center mt-4">
                            <h1 class="h2">Update Employee</h1>
                            <p class="lead">
                                let's create a better future.
                            </p>
                        </div>

                        <div class="card">
                            <div class="card-body">
                                <div class="m-sm-4">
                                    <?php

                                    $id = $_GET['id'];

                                    // 1. Connecting Project to Database
                                    $conn = mysqli_connect("localhost", "root", "", "employee");

                                    // 2. Checking Connectiong working or not
                                    if (!$conn) {
                                        die("Error in Connecting DB" . mysqli_connect_error());
                                    } else {

                                        $selectUser = "SELECT * FROM `employee` WHERE `user_id`='$id'";

                                        $result = mysqli_query($conn, $selectUser);

                                        while ($row = mysqli_fetch_assoc($result)) {
                                    ?>
                                            <form action="updatequeryuser.php" method="POST">
                                                <div class="mb-3">
                                                    <label class="form-label">Name</label>
                                                    <input class="form-control form-control-lg" type="text" name="name" placeholder="Enter your name" readonly value="<?php echo $row['name']; ?>" />
                                                </div>
                                                <div class="mb-3">
                                                    <label class="form-label">Age</label>
                                                    <input class="form-control form-control-lg" type="text" name="age" placeholder="Enter your Age" value="<?php echo $row['age']; ?>"/>
                                                </div>
                                                <div class="mb-3">
                                                    <label class="form-label">Email</label>
                                                    <input class="form-control form-control-lg" type="email" name="email" placeholder="Enter your email" readonly value="<?php echo $row['employee_email']; ?>"/>
                                                </div>
                                                <div class="mb-3">
                                                    <label class="form-label">Password</label>
                                                    <input class="form-control form-control-lg" type="password" name="password" placeholder="Enter password" value="<?php echo $row['password']; ?>"/>
                                                </div>
                                                <div class="mb-3">
                                                    <label class="form-label">Contact No.</label>
                                                    <input class="form-control form-control-lg" type="text" name="contact" placeholder="Enter Contact No." value="<?php echo $row['contact']; ?>"/>
                                                </div>
                                                <div class="mb-3">
                                                    <label class="form-label">Task</label>
                                                    <input class="form-control form-control-lg" type="text" name="task" placeholder="Enter taskID" value="<?php echo $row['task_id']; ?>"/>
                                                </div>
                                                <div class="text-center mt-3">
                                                    <!-- <a  class="btn btn-lg btn-primary" name="register">Register</a> -->
                                                    <button name="update" type="submit" class="btn btn-lg btn-primary">Update</button>
                                                </div>
                                            </form>
                                    <?php
                                        }
                                    }

                                    ?>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </main>

    <script src="js/app.js"></script>

</body>

</html>