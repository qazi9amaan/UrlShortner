<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
     <link rel="stylesheet" href="fonts/pe-icon-7-stroke/css/pe-icon-7-stroke.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
   <link href="http://netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Grand+Hotel' rel='stylesheet' type='text/css'>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>

     <link href="css/ct-navbar.css" rel="stylesheet" /> 
      <link href="css/main.css" rel="stylesheet" /> 

    <title>Kirangle|Url Shortner</title>
  </head>
  <style>

  </style>
  <body>

   

<!-- Modal -->



  <div class='tile' id='b'>
<p id = "info" align = "light" class="lead"> <a href="index.php" style="margin-left: 12px;">&#9783;</a></p>
    <div class="container">
    <div class="row">
        <div class="col-md-12">
            <header>
     <h1 class="display-4" style="margin-top: -56px;"> Kirangle Url Shortner </h1>
      <p class = "lead">Check our api service </p>
   <div class="circle"><a href="#a" class="round-button"><i class="  fa fa-angle-down"></i></a></div>

    </header>
        </div>
    </div>
</div>

  
</div>
<div class='tile' id='a'>

  <header>
      <h1 class = "display-5"> Redirect your url to  </h1>
      <input disabled class = "lead" type="text" name="" id="url"  value="short.kirangle.com/apiservice?link=''&returnto=''"><br>
      <input type="submit" onclick="myFunction()" class = "create" value="Copy">

   
    </header>
</div>

   





    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
      
      <script>
function myFunction() {
  var copyText = document.getElementById("url");
  copyText.select();
  copyText.setSelectionRange(0, 99999);
  document.execCommand("copy");
  alert("The link has been copied!");
  }   


</script>


    

  </body>
</html>