<?php

  if(isset($_GET["username"]))
  {

    // MySQL stuff here...

  }
  else
  {

    header("403 Forbidden");

    echo "<center><h1>403 Forbidden.</h1></center>";

  }

?>
