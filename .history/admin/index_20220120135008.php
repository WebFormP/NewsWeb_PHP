<?php

include "./header.php";
include "./" . (isset($_GET["p"]) && !empty($_GET["p"]) ? $_GET["p"] : "lireTousArticles") . ".php";
include "./footer.php";
