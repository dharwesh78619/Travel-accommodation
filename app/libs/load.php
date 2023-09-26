<?php 

include_once 'includes/database.class.php';
include_once 'includes/user.class.php';
include_once 'includes/session.class.php';
include_once 'includes/admin.class.php';


Session::start();
function include_temp($name,$variables = array()) {
    extract($variables);
    include $_SERVER['DOCUMENT_ROOT']. '/html/app/template/_'.$name.'.php';
}
