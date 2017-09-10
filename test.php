<!DOCTYPE html>
<html>
<head>
  <title></title>
</head>
<body>
  <?php

  include("GrabzItClient.class.php");

  $grabzIt = new GrabzItClient("NzBhODBjZDkzZjNhNDkxOGJkNjAzMTdkZDhiYjVmYmY=", "Pz9jUzZHPx4/Pz8JPxQrdE06Pz8/ID1KPz8/Tz91PwU=");
  $grabzIt->HTMLToPDF("<html><body><h1>Hello World!</h1></body></html>"); 
  $grabzIt->SaveTo("documents/result.pdf");

  ?>
</body>
</html>