<?php
require_once('api/api.php');
require_once('servConf.php');
/**
 * Common API gateway
 */
$action = $match[1];
$regUser= new userAPI($webRoot);

echo json_encode($regUser->regUser($_POST['name'],$_POST['role']=0,$_POST['uAlias'],$_POST['pswd']));
 
// echo "plain text";
?>