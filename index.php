<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
  <?php include 'partials/_header.php';?>


  <style>
	html,body{
  padding: 0px;
  margin: 0px;
  height: 100%;
  
  background: black;
  font-family: 'Gayathri', sans-serif;
}


h1{
  text-align: center;
  margin-top: 130px;
  font-size: 42px;
  position: relative;
  color: white;
}

#options{
  text-align: center;
  margin-top: 50px;
  position: relative;
  z-index: 2;
}

#options button{
  padding: 20px;
  font-size: 22px;
  margin-left: 20px;
  margin-right: 20px;
  border-radius: 5px;
  cursor: pointer;
  background: white;
  border: 1px solid #95a5a6;
}

@media only screen and (max-width: 600px) {
  .raindrop:nth-child(3) {
    display: none;
  }
}
</style>


<img src="https://source.unsplash.com/random/900×700/?police" class="image" alt="background image" style="    width: 100%;
    height: 100%;
    margin: 0px;
    margin-top: -20px;
    padding: 0;
    position: fixed;
    z-index: -1;"> 


 
<div id="container"  style="margin-bottom: 49%;">
  <h1>Crime Report</h1>
  <div id="options">
    <a href="about.php"><button class="raindrop">About us</button></a>
    <a href="complaint.php"><button class="raindrop">Write Your Report</button></a>
    <a href="#yourid"><button class="raindrop">Contact</button></a>
  </div>
</div>

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
