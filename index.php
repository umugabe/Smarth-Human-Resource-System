<?php

$page=isset($_GET['page']) && $_GET['page']!=null ? $_GET['page'] : 'dashboard';

include $page.".php";



?>