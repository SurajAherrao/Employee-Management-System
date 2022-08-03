<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link rel="shortcut icon" href="img/icons/icon-48x48.png" />

	<title>ADD Task</title>

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
							<h1 class="h2">Add Task</h1>
							<p class="lead">
								Get better with innovation.
							</p>
						</div>

						<div class="card">
							<div class="card-body">
								<div class="m-sm-4">
									<form action="taskadd.php" method="POST">
										<div class="mb-3">
											<label class="form-label">Task</label>
											<input class="form-control form-control-lg" type="text" name="task" placeholder="Enter the task" />
										</div>
										<div class="mb-3">
											<label class="form-label">Description</label>
											<input class="form-control form-control-lg" type="text" name="description" placeholder="Enter the description" />
										</div>
										<div class="mb-3">
											<label class="form-label">Time limit</label>
											<input class="form-control form-control-lg" type="text" name="time_limit" placeholder="Enter the time limit" />
										</div>
										<div class="text-center mt-3">
											<!-- <a  class="btn btn-lg btn-primary" name="sbmt">Add Task</a> -->
											<button name="sbmt"type="submit" class="btn btn-lg btn-primary">Add Task</button>
										</div>
									</form>
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
