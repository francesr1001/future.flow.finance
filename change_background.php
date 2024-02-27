<?php
session_write_close();
session_start();
if (isset($_GET["color"])) {
  $color = $_GET["color"];
  echo "<style>body { background-color: $color; }</style>";
  $_SESSION["background_color"] = $color;
} elseif (isset($_SESSION["background_color"])) {
  $color = $_SESSION["background_color"];
  echo "<style>body { background-color: $color; }</style>";
}
?>
