<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://kit.fontawesome.com/f300a501c9.js" crossorigin="anonymous"></script>
    <script src="preventmain.js"></script>
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
        integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
        integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI"
        crossorigin="anonymous"></script>
    <link rel="stylesheet" href="menu.css">
        <link rel="stylesheet" href="homestyle.css">

    <title>Document</title>
</head>
<body>

      <div class="navbar">
      <div id="nav-icon1" onclick="myFunction()">
    <span></span>
    <span></span>
    <span></span></div>

      <ul id="mea">
          
                <li><a  href="home.php">World wide</a></li>
                <li><a  href="symptoms.php">Symptoms</a></li>
                <li><a  href="prevent.php">prevention</a></li>
                <li><a  href="about.php">About us</a></li>
                <li> 
                    <form autocomplete="off" action="/action_page.php">
  <div class="autocomplete" style="width:300px;">
    <input id="myInput" type="text" name="myCountry" placeholder="Country">
  </div>
                                <i class="fas fa-search" onclick="heh()"></i>
</form></li>
            <!--   <li class="log">login</li>
               <li class="join">join</li>-->
            </ul>
</div>

    <script src="menu.js"></script>

</body>
</html>