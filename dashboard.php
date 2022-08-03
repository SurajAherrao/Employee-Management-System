<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="shortcut icon" href="img/icons/icon-48x48.png" />

    <title>SA-TECH</title>

    <link href="css/app.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">
</head>

<body>
    <div class="wrapper">

        <!-- sidebar -->
        <?php include("include/sidebar.php") ?>


        <div class="main">
            <!-- navbar -->
            <?php include("include/navbar.php") ?>

            <main class="content">
                <div class="container-fluid p-0">

                    <h1 class="h3 mb-3"><strong>Employee</strong> Dashboard</h1>



                    <div class="row">
                        <div class="col-12  d-flex">
                            <div class="card flex-fill">
                                <div class="card-header">

                                    <h5 class="card-title mb-0">Employees</h5>
                                </div>
                                <table class="table table-hover my-0">
                                    <thead>
                                        <tr>
                                            <th>User_id</th>
                                            <th>Name</th>
                                            <th class="d-none d-xl-table-cell">Age</th>
                                            <th class="d-none d-xl-table-cell">Employee_email</th>
                                            <th class="d-none d-xl-table-cell">Password</th>
                                            <th class="d-none d-xl-table-cell">Contact</th>
                                            <th class="d-none d-md-table-cell">Task_id</th>
                                            <th class="d-none d-md-table-cell">Update</th>
                                            <th class="d-none d-md-table-cell">Delete</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php

                                        // 1. Connecting Project to Database
                                        $conn = mysqli_connect("localhost", "root","","employee");

                                        // 2. Checking Connectiong working or not
                                        if (!$conn) {
                                            die("Error in Connecting DB" . mysqli_connect_error());
                                        } else {


                                            // 3. SELECT query for user  
                                            $userSelect = "SELECT * FROM `employee`";

                                            // 4. Execute query ( select query ) and store result in result    
                                            $result = mysqli_query($conn, $userSelect);

                                            if (mysqli_num_rows($result) > 0) {

                                                while ($row = mysqli_fetch_assoc($result)) {
                                        ?>
                                                    <!--  execute loop with html -->
                                                    <tr>
                                                        <td><?php echo $row['user_id']; ?></td>
                                                        <td class="d-none d-xl-table-cell"><?php echo $row['name']; ?></td>
                                                        <td class="d-none d-xl-table-cell"><?php echo $row['age']; ?></td>
                                                        <td class="d-none d-md-table-cell"><?php echo $row['employee_email']; ?></td>
                                                        <td class="d-none d-md-table-cell"><?php echo $row['password']; ?></td>
                                                        <td class="d-none d-md-table-cell"><?php echo $row['contact']; ?></td>
                                                        <td class="d-none d-md-table-cell"><?php echo $row['task_id']; ?></td>
                                                        <td class="d-none d-md-table-cell"><a href="updateuser.php?id=<?php echo $row['user_id']; ?>" class="btn btn-warning">Update</a></td>
                                                        <td class="d-none d-md-table-cell"><a href="deleteuser.php?id=<?php echo $row['user_id']; ?>" class="btn btn-danger">Delete</a></td>
                                                    </tr>

                                        <?php
                                                }
                                            } else {

                                                echo "No Data Found";
                                            }
                                        }


                                        ?>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
            </main>

            <!-- footerbar -->
            <?php include("include/footer.php") ?>

        </div>
    </div>

    <script src="js/app.js"></script>

</body>

</html>