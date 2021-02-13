<?php
session_start();    // Hacerlo en cada pagina en que lo queramos usar;


echo $_SESSION['variable_persistente'];
