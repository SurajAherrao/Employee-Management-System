<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="shortcut icon" href="img/icons/icon-48x48.png" />


    <title>Task</title>

    <link href="css/app.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">
</head>

<body>
    <div class="wrapper">
        <nav id="sidebar" class="sidebar js-sidebar">
            <div class="sidebar-content js-simplebar">
                <a class="sidebar-brand" href="index.html">
                    <span class="align-middle">SA-TECH</span>
                </a>

                <ul class="sidebar-nav">
                    <li class="sidebar-header">
                        Pages
                    </li>

                    <li class="sidebar-item">
                        <a class="sidebar-link" href="dashboard.php">
                            <i class="align-middle" data-feather="sliders"></i> <span class="align-middle">Dashboard</span>
                        </a>
                    </li>

                    <li class="sidebar-item">
                        <a class="sidebar-link" href="addemployee.php">
                            <i class="align-middle" data-feather="user-plus"></i> <span class="align-middle">Add Employee</span>
                        </a>
                    </li>



                    <li class="sidebar-item active">
                        <a class="sidebar-link" href="task.php">
                            <i class="align-middle" data-feather="check-square"></i> <span class="align-middle">Tasks</span>
                        </a>
                    </li>






                </ul>


            </div>
        </nav>

        <div class="main">
            <!-- navbar -->
            <?php include("include/navbar.php") ?>

            <main class="content">
                <div class="container-fluid p-0">

                    <h1 class="h3 mb-3"><strong>Tasks</strong> Dashboard</h1>

                    <div class="row">
                        <div class="col-12  d-flex">
                            <div class="card flex-fill">
                                <div class="card-header">

                                    <h5 class="card-title mb-0">Tasks</h5>
                                </div>
                                <table class="table table-hover my-0">
                                    <thead>
                                        <tr>
                                            <th>Task_id</th>
                                            <th>Task</th>
                                            <th class="d-none d-xl-table-cell">Description</th>
                                            <th class="d-none d-xl-table-cell">Time limit</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php

                                        // 1. Connecting Project to Database
                                        $conn = mysqli_connect("localhost", "root", "", "employee");

                                        // 2. Checking Connectiong working or not
                                        if (!$conn) {
                                            die("Error in Connecting DB" . mysqli_connect_error());
                                        } else {


                                            // 3. SELECT query for user  
                                            $userSelect = "SELECT * FROM `task`";

                                            // 4. Execute query ( select query ) and store result in result    
                                            $result = mysqli_query($conn, $userSelect);

                                            if (mysqli_num_rows($result) > 0) {

                                                while ($row = mysqli_fetch_assoc($result)) {
                                        ?>
                                                    <tr>
                                                        <td><?php echo $row['task_id']; ?></td>
                                                        <td class="d-none d-xl-table-cell"><?php echo $row['task']; ?></td>
                                                        <td class="d-none d-xl-table-cell"><?php echo $row['description']; ?></td>
                                                        <td class="d-none d-md-table-cell"><?php echo $row['time_limit']; ?></td>
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
                    <div class="row justify-content-center">
                        <div class="col-3  d-flex ">
                            <div class="card flex-fill">
                                <!-- <button name="add" type="submit" class="btn btn-lg btn-primary">Add Task</button> -->
                                <a href="addTask.php" name="sbmt" class="btn btn-lg btn-primary">Add Task</a>
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