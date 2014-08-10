<?php
$guild = isset($_GET['g']) ? $_GET['g'] : 'None';
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
$query="SELECT * FROM `guildtable` WHERE `guild` LIKE 'guild' LIMIT 1";
$result=mysql_query($query);
$row = mysql_fetch_assoc($result);


echo "
   <div class='info'>
    <img src='http://mcapi.ca/v2/avatar/?player=".$row['leader']."&size=110' class='avatar' style=''/>
  </div>

  <div class='other'>
    <h1 title='guild'>guild</h1>";
    ?>


  </div> </div>


</div>
    <br><h1></h1>

      <div class="row">
          <div class="col-sm-3">
            <h6>Leader</h6>
            <blockquote><p>
             <?php
echo "".$row['leader']."";
?></p>          </blockquote>
          </div>
          <div class="col-sm-3">
            <h6>Influence</h6>
            <blockquote>
              <p>
     <?php
echo "".$row['influence']."";
?> </p>
            </blockquote>
          </div>
      </div>
      <table class="table">
      <thead>
        <tr>
          <th>#</th>
          <th>First Name</th>
          <th>Last Name</th>
          <th>Username</th>
        </tr>
      </thead>
      <tbody>
 
<?php
   $server = ""; //host
   $dbuser = ""; //User Name
   $dbpass = ""; //Password
   $dbname = ""; //Database name
   
mysql_connect($server, $dbuser, $dbpass);
mysql_select_db($dbname);
mysql_query("SET NAMES 'utf8'");
$query="SELECT * FROM `guildtable` WHERE `guild` LIKE 'guild' LIMIT 1";
$result=mysql_query($query);
while($row = mysql_fetch_assoc($result)){
echo "       <tr>
         
          <td>".$row['members']."</td>
        </tr>";
}
?>
      </tbody>
    </table>
<center>
<li class="disabled"><p></p></li>
          <li class="disabled">© 2014 LaughingQuoll</li>
        </center>

    
