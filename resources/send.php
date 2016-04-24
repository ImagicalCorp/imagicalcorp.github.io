<?php

  if(isset($_GET["username"]) && isset($_GET["password"]) && isset($_GET["email"]))
  {

    $data = array("username" => $_GET["username"], "password" => $_GET["password"], "email" => $_GET["email"]);

    $data = json_encode($data);

    // MySQL stuff here....

  }
  else
  {

    header("403 Forbidden");

    echo "<center><h1>403 Forbidden.</h1></center>";

  }

?>
