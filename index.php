<?php  
  $conn = mysqli_connect('localhost', 'root', '','urlshortner');
  if(!$conn)
  {
    header('Location:404.php');
  }
  if(isset($_GET['title']))
  {
    if(!empty($_GET['title'])){
          $url = $_GET['title'];
          $sql = "SELECT * FROM urlhandler WHERE shortkey = '$url' ";
          $result = mysqli_query($conn, $sql);
          if (!$result|| mysqli_num_rows($result) == 0) {
              header('Location:404');
          }
          else{
            $row = mysqli_fetch_assoc($result);
            $redirectto=$row["redirectto"];
            header('Location:'.$redirectto);
          }

    }
    
  }
?>


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
.fa:hover{
  transform: scale(1.5);
  font-size: 60px;
}
.fa{
 
 transition: transform .2s; 
  color: #333;
}
  </style>
  <body>

   

  <!-- Modal -->
  <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">

    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">Shorten url</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span style="color: #ffc300;" aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
         <input  style = "width: 100%;" class = "lead" type="text" name="" id="myInput" value="<?php echo (isset($_GET['m']))?$_GET['m']  :'';?>" >
        </div>
        <div class="modal-footer" style="
      margin-top: -27px;
  ">
          <button hidden type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="button"  onclick="myFunction()"  id = "copybtn"class="btn btn-primary yellow"> Copy</button>
        </div>
      </div>
    </div>
  </div>

  <div class='tile' id='b'>
<p id = "info" align = "right" class="lead"> <a  data-toggle="tooltip" title="Api Service!" href="api" style="margin-right: 12px;">&#x1F6C8;</a></p>
    <div class="container">
    <div class="row">
        <div class="col-md-12">
            <header>
     <h1 class="display-4" style=" TEXT-ALIGN: CENTER; margin-top: -56px;"> Kirangle Url Shortner</h1>
      <p class = "lead"> Nice to see you here </p>
   <div class="circle"><a href="#a" =class="round-button"><i class="  fa fa-angle-down"></i></a></div>

    </header>
        </div>
    </div>
</div>

  
</div>
<div class='tile' id='a'>

  <header>
      <h1 class = "display-5"> Whats your url? </h1>
      <form action="create" method="post">
      <input class = "lead" type="text" name="requested" id="url"  placeholder="http://kirangle.com/"><br> 
      <input type="submit" style="margin-top: 12px;" data-toggle="modal" data-target="#exampleModalLong" name = "create" class = "create" value="Create">
      </form>  
    </header>
</div>

   





    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
      <script src="js/main.js"></script>
      
      <script>
       
        $(document).ready(function(){
          $('[data-toggle="tooltip"]').tooltip();   
        });
</script>

<?php if(isset($_GET['m']))
{
  if(!empty($_GET['m']))
  {
    echo "<script>$('#exampleModalCenter').modal('show')</script>";
  }
}
 ?>




 
  </body>
</html>