<!DOCTYPE>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title> <ion-icon name="{{ asset ('log-in-outline')}}"></ion-icon> Log in </title>
	<!-- <link href="css/bootstrap.css" type="text/css"> -->
	<link href="{{ asset('css/bootstrap.css')}}" type="text/css" rel="stylesheet">
	<link href="{{ asset('css/app.css')}}" type="text/css" rel="stylesheet">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sofia">

</head>

<body>
	<div class="container-fluid">
		<div class=" d-flex justify-content-center min-vh-100 align-items-center log_div  ">
			<form class="login_form col-sm-4 shadow-lg p-4 mb-4 bg-white pt-5"> <br /> 
				<!-- <div class="img ">
				<img src="{{ asset('images/logo_4.png')}}">
				</div> -->
				 <div class="align-items-center">
					<label class="headings text-color">Log in</label> <br>
				</div>
			<label class="text-color">Name</label> <br />
			<input type="text"  class="form-control" placeholder="Enter username, student number" name="user_name" required> <br />
			<label class="text-color">Password</label> <br />
			<input type="password" class="form-control" id="inputPassword" placeholder="Enter Password" required>
			 <button type="button" class="btn btn-primary button btn btn-success next text" name="log_in">Log in </button>
			 <label class="text-color">Dont have an account? <a href="{{ url('signin')}}" class="text-color">Create Account</a></label>
			</form>
			
		</div>
	</div>
	<!-- <form>
  <div class="form-group">
    <label>Example file input</label>
    <input type="file" class="form-control-file" id="exampleFormControlFile1">
  </div>
</form> -->

	    <script type="module" src="https:/m/unpkg.co/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>
</html>