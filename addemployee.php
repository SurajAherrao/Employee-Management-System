<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link rel="shortcut icon" href="img/icons/icon-48x48.png" />

	<title>ADD employee</title>

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
							<h1 class="h2">Register Employee</h1>
							<p class="lead">
								let's create a better future.
							</p>
						</div>

						<div class="card">
							<div class="card-body">
								<div class="m-sm-4">
									<form action="addUser.php" method="POST">
										<div class="mb-3">
											<label class="form-label">Name</label>
											<input class="form-control form-control-lg" type="text" name="name" placeholder="Enter your name" />
										</div>
										<div class="mb-3">
											<label class="form-label">Age</label>
											<input class="form-control form-control-lg" type="text" name="age" placeholder="Enter your Age" />
										</div>
										<div class="mb-3">
											<label class="form-label">Email</label>
											<input class="form-control form-control-lg" type="email" name="email" placeholder="Enter your email" />
										</div>
										<div class="mb-3">
											<label class="form-label">Password</label>
											<input class="form-control form-control-lg" type="password" name="password" placeholder="Enter password" />
										</div>
										<div class="mb-3">
											<label class="form-label">Contact No.</label>
											<input class="form-control form-control-lg" type="text" name="contact" placeholder="Enter Contact No." />
										</div>
										<div class="mb-3">
											<label class="form-label">Task</label>
											<input class="form-control form-control-lg" type="text" name="task" placeholder="Enter taskID" />
										</div>
										<div class="text-center mt-3">
											<!-- <a  class="btn btn-lg btn-primary" name="register">Register</a> -->
											<button name="register"type="submit" class="btn btn-lg btn-primary">Sign up</button>
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