<!--FRANCES EDITED--> 
    <!-- activator  --> 
    <?php
    session_write_close();
    session_start();
    if (isset($_SESSION["background_color"])) {
      echo "<style>body { background-color: " . $_SESSION["background_color"] . "; }</style>";
    }
    ?>

    <!-- activator  --> 
<!--FRANCES EDITED--> 
