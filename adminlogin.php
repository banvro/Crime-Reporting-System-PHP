<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">

    <title>Administrator</title>
  </head>
  <body>
   

<style>
	/* SECTION- LOGIN FORM */
	section{
		position: relative;
		width: 100%;
		height: 100%;
		display: flex;
	}
	section .imgBx{
		position: relative;
		width: 50%;
		height: 750px;
	}
	section .imgBx:before{
		content: '';
		position: absolute;
		top: 0;
		left: 0;
		width: 100%;
		height: 750px;
		z-index: 1;
	}
	section .imgBx img{
		position: absolute;
		top: 0;
		left: 0;
		width: 100%;
		height: 750px;
		object-fit: cover;
	}
	
	section .contentBx{
		display: flex;
		justify-content: center;
		align-items: center;
		width: 50%;
		heigth: 100%;
	}
	section .contentBx .formBx{
		width: 50%;
	}
	section .contentBx .formBx h2{
		color: white;
		background-color: black;
		font-weight: 600;
		font-size: 1.5em;
		text-transform: uppercase;
		margin-bottom: 20px;
		border-bottom: 4px solid green;
		display: inline-block;
		letter-spacing: 1px;
	}
	section .contentBx .formBx .inputBx{
		margin-bottom: 20px;
	}
	section .contentBx .formBx .inputBx span{
		font-size: 16px;
		margin-bottom: 5px;
		display: inline-block;
		color: black;
		font-weight: 300;
		letter-spacing: 1px;
	}
	section .contentBx .formBx .inputBx input{
		width: 100%;
		padding: 10px 20px;
		outline: none;
		font-weight: 400;
		border: 1px solid green;
		font-size: 16px;
		letter-spacing: 1px;
		color: black;
		background: transparent;
		border-radius: 30px;
	}
	section .contentBx .formBx .inputBx input[type="submit"]{
		background: green;
		color: #fff;
		outline: none;
		border: none;
		font-weight: 500;
		cursor: pointer;
	}
	section .contentBx .formBx .inputBx input[type="submit"]:hover{
		background: #33ff33;
	}
	
	@media (max-width: 768px){
		section .imgBx {
			position: absolute;
			width:100%;
			height:100%;
			top:0;
			left: 0;
		}
		section .contentBx{
			display: flex;
			justify-content: center;
			align-items: center;
			width: 100%;
			heigth: 100%;
			z-index: 1;
		}
		section .contentBx .formBx{
			width: 100%;
			padding: 40px;
			background: rgb(255 255 255 / 0.9);
			margin: 50px;
		}
	}
	
	
	</style>



    <?php include 'partials/_header.php';?>
	
	
	<section>
		<div class="imgBx" style="z-index: -1;">
			<img src="https://source.unsplash.com/random/900×700/?police">
		</div>
		
		<div class="contentBx">
			<div class="formBx" style="    width: 85%; min-width: 85%;">
				<h2 style="text-align: center;">Administrator Login</h2>
				<form action="login.php" method="POST">
					<div class="inputBx">
						<span>Username</span>
						<input type="text" name="username" required>
					</div>
					<div class="inputBx">
						<span>Password</span>
						<input type="password" name="password" required>
					</div>
					<div class="inputBx">
						<input type="submit" value="Login/ Sign In" >
					</div>
					
				</form>
			</div>
		</div>
		
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