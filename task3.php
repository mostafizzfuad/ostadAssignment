<!doctype html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

	<title>Assignment 5</title>
</head>

<body>
	<h1 class="text-center mb-3 mt-3" style="color:green">Assignment for Module-5</h1>

	<?php
	class Person
	{
		public $name;
		public $email;

		public function setName($name)
		{
			$this->name = $name;
		}

		public function setEmail($email)
		{
			$this->email = $email;
		}

		public function getName()
		{
			return $this->name;
		}

		public function getEmail()
		{
			return $this->email;
		}
	}


	if (isset($_POST['submit'])) {
		$name = $_POST["name"];
		$email = $_POST["email"];

		$person = new Person();
		$person->setName($name);
		$person->setEmail($email);
	}

	?>

	<div class="container">
		<div class="row">
			<div class="col-lg-5 mb-4">
				<div class="card">

					<div class="card-body">
						<h5 class="card-title text-center" style="color:blue">User Form</h5>
						<form action="" method="POST">
							<label for="name" class="mb-2">Name</label>
							<input type="text" class="form-control" name="name" id="name" placeholder="Name" required>
							<label for="email" class="mb-2">Email</label>
							<input type="email" class="form-control" name="email" id="email" placeholder="Email" required>
							<label for="submit"></label>
							<input type="submit" value="Submit" name="submit" class="btn btn-success btn-block form-control">
						</form>
					</div>
				</div>
			</div>

			<div class="col-lg-7 mb-4">
				<div class="card">
					<div class="card-body">
						<h5 class="card-title text-center" style="color:blue">User info</h5>
						<table class="table table-striped text-center">
							<thead>
								<tr>
									<th>Name</th>
									<th>Email</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<?php
									if (isset($_POST['submit']) && !empty($_POST['submit'])) { ?>
										<td><?php echo $person->getName(); ?></td>
										<td><?php echo $person->getEmail(); ?></td>
									<?php  }
									?>
								</tr>
							</tbody>
						</table>


					</div>
				</div>
			</div>
		</div>
	</div>
</body>

</html>