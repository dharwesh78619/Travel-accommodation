<?php
include "../libs/load.php";
include_temp('head');

$result = admin::fetch_Hotels_with_id($_GET['id']);
include "../template/_update_form.php";



