<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Medicine Center</title>
<title>Medicine Center</title>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />  

<script type="text/javascript">  
//This is done to make the following JavaScript code compatible to XHTML. <![CDATA[ 
function findstring(med) 
{
var check = window.find(med);
if(check == false)
{
    alert("Medicine not found");
}
//window.location.reload();  
}//]]>  
</script> 

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap 101 Template</title>

    <!-- Bootstrap -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="bootstrap/js/bootstrap.min.js"></script>
    
<h1>Medicine Helper<h1>

    <div class="navbar navbar-default">
     <div class="navbar-collapse collapse navbar-responsive-collapse">
    <ul class="nav navbar-nav">
    </ul>
    <form class="navbar-form navbar-left">
        <button onclick="showFunction()" type="button" href="file_list.php" class="btn btn-success">Browse</button>
        <button onclick="myFunction()" type="button" href="file_list.php" class="btn btn-success">Search</button>
        <button onclick="window.location.reload()" type="button" href="file_list.php" class="btn btn-success">Reload</button>
    </form>
    <ul class="nav navbar-nav navbar-right">
    </ul>
  </div>
</div>


<h3>Welcome to the Medicine Center<h3>

Please select medicines from the list below-</br>


<script>
    function myFunction() {
    var x;
    var person = prompt("Please enter Medicine name you are looking for");
    if (person != null) {
        javascript:findstring(person);
    } else
    {
        alert('No input given');
    }
}
</script>
</br>
<div class="list-group">
    <div class="panel panel-success">
  <div class="panel-heading">
    <h3 class="panel-title" style="font-size:20px;">Medicine List</h3>
  </div>
</div>
</div>
<p id="demo"></p>


<?php 

$dirname = "medicines/";
$dir = opendir($dirname);

while(false != ($file = readdir($dir)))
{
if(($file != ".") and ($file != "..") and ($file != "index.php"))
{
  $list[] = $file;
}
}

sort($list);

foreach($list as $item) {
echo "<a style='font-size:17px;' class='list-group-item' href='medicines/$item'>".substr($item, 0,-4)."</a>"."</br>";
}


    ?>
</div>



</body>
</html>