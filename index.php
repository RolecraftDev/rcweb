<?php
guild  = isset($_GET['g']) ? $_GET['g'] : 'None';
?>

<div class='container'>

<?php



echo "
<div class='content'>


 <div class='cover-art' style='background-image: url(https://cdn.webcraftdev.com/img/coverart/volcano.jpg)'>

      ";
        // change these things

   $server = ""; //host
   $dbuser = ""; //User Name
   $dbpass = ""; //Password
   $dbname = ""; //Database name
   
mysql_connect($server, $dbuser, $dbpass);
mysql_select_db($dbname);
mysql_query("SET NAMES 'utf8'");
$query="SELECT * FROM `guilds` WHERE `guild` LIKE 'guild' LIMIT 1";
$result=mysql_query($query);
$row = mysql_fetch_assoc($result);


echo "
  

  <div class='other'>
    <h1 title='guild'>guild</h1>";
    ?>


  </div> </div>


</div>
    <br><h1></h1>

<center>
<li class="disabled"><p></p></li>
          <li class="disabled">© 2014 QuollCraft</li>
        </center>

    
