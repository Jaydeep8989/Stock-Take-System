<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  font-family: "Arial", sans-serif;
}

.sidenav {
  height: 100%;
  width: 200px;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color:black;
  overflow-x: hidden;
  padding-top: 100px;
}

.sidenav a {
  padding: 6px 8px 6px 16px;
  text-decoration: none;
  font-size: 25px;
  color:#FFD6C2;
  display: block;
}

.sidenav a:hover {
 /* background-color:ff8b6a;*/
  color: blue;
}


</style>
</head>
<body>
<form action="" method="POST">
  <div class="sidenav">
    <center>
    <a href="record.php"><img style="height: 45px; width: 130px;" src="image/home1.png"></a>
    <a href="insert.php">Insert</a>
    <a href="delete.php">Delete <!--  <img style="height: 35px; width: 130px;" src="delete1.jpg">--></a>
    <a href="update.php">Update <!--<img style="height: 35px; width: 130px;" src="update.jpg">--></a>
    <a href="stock.php">Stock</a> 
    <a href="search.php">Search</a>
   <!-- <a href="bill.php">Buy</a>-->
    <a href="login.php"><img style="height: 45px; width: 135px;" src="image/logout.png"></a>
    </center>
  </div>
</form>
</body>
</html> 