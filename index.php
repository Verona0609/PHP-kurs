<?php 
$title="Home PHP";
require "BLOCKS/heder.php";
    ?>
    <h1>HOME PAGE</h1>
    <?php
    date_default_timezone_set('Europe/Warsaw');
   echo date('j F o час:H:i:s ').'<br>';
   echo time().'<br>';
   echo date('j F o час:H:i:s', strtotime('now')).'<br>';
require "BLOCKS/footer.php";
    ?>
    






