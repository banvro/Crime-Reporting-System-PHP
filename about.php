<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">

    <title>About Us</title>
  </head>
  <body>

  <?php include 'partials/_header.php';?>

  <style>

	
@import url('https://fonts.googleapis.com/css?family=Roboto');
body{
   margin:0;
   padding:0;
   font-family: 'Roboto', sans-serif;
   position:relative;
}

.header{
   width:100%;
   height:500px;
   opacity:.8;
   background-color:rgb(30, 173, 255);
   background-image:url('https://source.unsplash.com/random/900×700/?crime invastigation police');
   background-position:bottom;
   margin-top: -19px;
}
.container{
   width:100%;
}
.container h1{
   font-size:50px
}
.about{
   padding:5% 0;
   width:100%;
   height:auto;
   background-color:#fff;
}
.about .left{
   padding:2% 0;
   float:left;
   width:50%;
   display:inline-block;
}
.about .right{
   width:50%;
   display:inline-block;
}
.about .right img{
   width:100%
}
.about .left h1{
   text-align:center;
   color:#1EADFF;
   margin:0 0 10px 0;
}
.about .left hr{
   width:20%;
   border-top:2px solid #000;
   border-bottom:none;
}
.about .left p{
   font-size:1rem;
   margin:40px auto;
   width:80%
}

.mission{
   padding:5% 0;
   width:100%;
   height:auto;
   background-color:#fff;
}
.mission .right{
   padding:2% 0;
   width:50%;

   display:inline-block;
}
.mission .left{
   float:left;
   width:50%;

   display:inline-block;
}
.mission .left img{
   width:100%;
}
.mission .right h1{
   text-align:center;
   color:#1EADFF;
   margin:0 0 20px 0;
}
.mission .right hr{
   width:35%;
   border-top:2px solid #000;
   border-bottom:none;
}
.mission .right p{
   font-size:1rem;
   margin:40px auto;
   width:80%
}


.team{
   width:90%;
   margin:auto;
   padding:5% 5%;
   over-flow:hidden;
}
.team h1{
   text-align:center;
   color:#1EADFF;
   
}
.team h1 hr{
   width:15%;
   border-top:2px solid #000;
   background-color:transperant;
   border-bottom:none;
   margin-bottom:50px;
}
.team .card{
   padding-bottom:20px;
   padding-top:20px;
   position:relative;
   min-width:20%;
   height:500px !important;
   height:auto;
   background-color:#fff;
   display:inline-block;
   margin:40px 6.5%;
   box-shadow: 0 0 20px 2px rgba(0,0,0,0.5);
   text-align:center;
}
.card .circle-container{
   position:relative;
   background-color:#579f79;
   width:250px;
   height:250px;
   border:none;
   border-radius:50%;
   margin:auto;
   color:#fff;
}
.circle-container h1{
   position:absolute;
   top:50%;
   left:50%;
   transform:translate(-50%,-50%);
   margin:0;
   font-size:60px;
}

.team .card h2{
   text-align:center;
   margin:30px 0 0 0;
}
.team .card h4{
   text-align:center;
   margin:10px 0 0 0;
}
.team .card p{
   width:250px;
   margin:30px auto;
   text-align:center;

}
.clear{
    clear: both;			
}





1
/* media */
@media(max-width:1200px){
   .mission .right p{
      font-size:.8rem;
      margin:20px auto;
   }
   .about .left p{
      font-size:.8rem;
      margin:20px auto;
   }
}






@media(max-width:992px){
   .about .left{
   width:100%; 
}
   .about .right{
   width:100%; 
}
      .mission .left{
   width:100%; 
}
   .mission .right{
   width:100%; 
}
   .team .card{ 
   width:40%;
}   
}

@media(max-width:768px){
      .team .card{ 
   width:100%;
} 
   
}


</style>
   

<div class="header">

</div>

<div class="container">
   
   <div class="about">
      <div class="left">
         <h1>About us</h1>
         <hr>
         <p>Report writing is very important in the police field. An officer must be able to accurately record information regarding those activities and present it to those who were not there while also doing their job well. A person 's guilt or innocence may rest on information present or absent in these records (Server). 

All officers need to write police reports. Police Officers are evaluated based on their written reports. Good police work is maintained completely by an officer 's ability to present accurate, detailed and informative information in a police report. Many people pass judgment on others based on much of the information presented in these police reports. Officers should not only indicate what they did in their reports, but should also record what they did not do, and the reasons why. </p>

                  <p>Offense reports are usually one of the more detailed, if not the most detailed of police reports. These reports generally contain considerably “more information about the particular methods a crime has been carried out, the specific injuries or property damages sustained by a victim and all the different directions an officer took to investigate the crime” (Redwine).  </p>

      </div>
      <div class="right">
         <img src="https://source.unsplash.com/random/900×700/?invastigation police">
      </div>
      <div class="clear"></div>
   </div>
   
   
   
   <div class="mission">
     
      <div class="left">
         <img src="https://source.unsplash.com/random/900×700/?stop crime police">
      </div>
        <div class="right">
         <h1>Home Safity</h1>
         <hr>
         <p>Home Safety
<br>Close and lock all doors even when leaving for a short period of time. This includes garages and connecting doors.
<br>Use automatic timers to cut lights on and off if you are gone for an extended time.
<br>Illuminate the yard, especially doorways and the rear of the house.
<br>Trim trees and shrubs around the house. These provide concealment for burglars.
<br>Install good locks on doors and windows and USE THEM. Don’t hide keys in mailboxes and planters or under doormats. Instead, leave an extra set of keys with a trusted neighbor or friend.
<br>Use deadbolt locks that require a key from either side (double cylinder).
<br>Be sure your street address number is large, in clear view and well lit so police and other emergency personnel can find your home quickly.
<br>Keep ladders, tools, and lawn furniture locked up. Burglars commonly use these to gain entry to houses.
<br>Install a peephole or wide angle viewer in all entry doors so you can see who is outside without opening the door. Door chains break easily and don’t keep out intruders.

    </div>
      <div class="clear"></div>
      
   </div>
   
   
  
       
          
          
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