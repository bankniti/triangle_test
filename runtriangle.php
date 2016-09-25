<?php
require_once('Triangle.php');
$triangle = new triangle($_POST['A'], $_POST['B'], $_POST['C']);
$return = $triangle->runTriangle();
echo json_encode($return);
