<?php
    if(isset($_GET['link']) && isset($_GET['returnto']))
    {
       // echo $_GET['link'].$_GET['returnto'];


      header('Location:/urlshortner/func/'.$_GET['link'].'/'.$_GET['returnto']);
    }
?>