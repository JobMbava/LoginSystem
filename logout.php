<?php     
    session_start();
    session_destroy();
      
    header("Location: http://localhost:8888/loginsystem/index.php")
;?>