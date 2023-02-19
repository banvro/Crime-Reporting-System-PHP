<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Crime Reporting System- Report A Crime</title>
    <!--		<link rel="stylesheet" href="style.css">		-->
	<style>
		*{
			margin: 0px;
			padding:0px;
			box-sizing: border-box;
			font-family: sans-serif;
			
		}
		
		
		.image{
			width: 100%;
			position: absolute;
			z-index: -1;
			opacity:0.7;
		}
		.heading{
			color: blue;
			background-color: white;
			font-weight: 600;
			font-size: 1.5em;
			margin-bottom: 20px;
			border-bottom: 4px solid black;
			display: inline-block;
			letter-spacing: 1px;
			
		}
		
		/* CONTAINER */
		.container{
			max-width: 80%;
			/*background-color: rgb(198, 152, 241);*/
			padding: 34px;
			margin: auto;
		}
		.container h1, p{
			text-align: center;
		}
		p{
			font-size: 17px;
		}

		input, textarea{
			border: 2px solid black;
			border-radius: 6px;
			outline: none;
			width: 80%;
			margin: 11px 0px;
			padding: 7px;
			font-size: 16px;
		}

		form{
			display: flex;
			align-items: center;
			justify-content: center;
			flex-direction: column;
		}
		
		.submitmsg{
			font-size: 25px;
			color: rgb(25, 102, 25);
		}
		
		
		
	</style>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">



  </head>
  <body>
    
  <?php include 'partials/_header.php';?>





  <?php

	$server= "localhost";
	$username= "root";
	$password= "";
	$dbname= "test";
	
	
	$conn = mysqli_connect($server, $username, $password, $dbname);
	
	if(isset($_POST['name'])){
		
		if(!empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['age']) && !empty($_POST['gender']) && !empty($_POST['phone']) && !empty($_POST['aadhaar']) && !empty($_POST['place']) && !empty($_POST['desc'])){
			
			$name = $_POST['name'];
			$email = $_POST['email'];
			$age = $_POST['age'];
			$gender = $_POST['gender'];
			$phone = $_POST['phone'];
			$aadhaar = $_POST['aadhaar'];
			$place = $_POST['place'];
			$desc = $_POST['desc'];
			
			$query = "INSERT INTO `test`.`crime_reports`( `Name`, `Email`, `Age`, `Gender`, `Phone No.`, `Aadhaar No.`, `Crime Location`, `Description`, `Complaint Filing Date`) VALUES ('$name','$email','$age','$gender','$phone','$aadhaar','$place','$desc', current_timestamp())" ;
			
			$run = mysqli_query($conn, $query) or die(mysqli_error($conn));
			
			if($run){
				$last_id = mysqli_insert_id($conn);
				
               echo '
			   <div class="alert alert-success" role="alert">
			   <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
				  <h4 class="alert-heading">Well done!</h4>
				  <p><div class="wrapper"> The details provided by you have been succesfully recorded!!</div>.</p>
				  <hr>
				  <p class="mb-0"><br>This complaint made by you has <b> COMPLAINT NO.- $last_id.</b><br><a href="index.php"> Click here </a> to return to the home page!! .</p>
				</div>  
			   ';
			}
			else{
				echo "Unable to File your Complaint!!!<br> Please TRY AGAIN!!!" ;
			}
		}
		else{
			
			echo "All Fields are Required";
		}
	}
?>


  <img src="https://source.unsplash.com/random/900×700/?Crime police" class="image" alt="background image" style="   width: 100%;
    height: 100%;
    margin: 0px;
    margin-top: -20px;
    padding: 0;
    position: fixed;"> 


  <div class="page-wrapper">
	
		
		<div class="container">
			<span > <h1 style="text-align: center;
    background-color: #b3b5f5;">Report A Crime </h1> </span>
    
			<br>

		

			<form action="complaint.php" method="POST">
			
				<input type="text" name="name" id="name" placeholder="Enter Your Name" required style="    padding: 10px;
    margin: 10px;">
				<input type="email" name="email" id="email" placeholder="Enter Your Email ID" required style="    padding: 10px;
    margin: 10px;">
				<input type="text" name="age" id="age" placeholder="Enter Your Age" required style="    padding: 10px;
    margin: 10px;">
				<input type="text" name="gender" id="gender" placeholder="Enter Your Gender (M/F)" required style="    padding: 10px;
    margin: 10px;">
				<input type="phone" name="phone" id="phone" placeholder="Enter Your Phone Number (max. 10 characters)" required style="    padding: 10px;
    margin: 10px;">
				<input type="aadhaar" name="aadhaar" id="aadhaar" placeholder="Enter Your AADHAAR Enrollment Number (max. 16 characters)" required style="    padding: 10px;
    margin: 10px;">
				<input type="place" name="place" id="place" placeholder="Enter the Location of the Crime" required style="    padding: 10px;
    margin: 10px;">
				<textarea name="desc" id="desc" cols="30" rows="10" placeholder="Enter the details of the crime, i.e., how did the attack take place, the details of the victims, any information about the criminals, and the details of the eyewitnesses, if present at the location. " required style="    padding: 10px;
    margin: 10px;"></textarea>
				<button class='btn' style="color:white;
			background:purple;
			padding: 10px;
			font-size: 16px;
			border: 2px solid white;
			border-radius: 14px;
			cursor: pointer;">Submit </button>
				<!-- <button class="btn">Reset </button>  -->
			</form>

		
		
		</div>
		
		
	</div>








	<section>
	<style>
		*{
			box-sizing: border-box;
			font-family: sans-serif;
		}
		
		.wrapper{
			letter-spacing: 1px;
			font-size: 25px;
			float: left;
			color: green;
			text-align: center;
			margin-left: 25%;
		}
		.image{
			width:25%;
			height:25%;
			display: flex;
			justify-content: center;
			align-items: center;
			margin-left: 35%;
		}
	</style>

		<img src="image/checkmark.jpg" class="image" alt="checkmark">




	</section>







    <?php include 'partials/_footer.php';?>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js" integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2" crossorigin="anonymous"></script>
    -->
  </body>
</html>