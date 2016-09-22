<?php
require_once('triangle1.php');
$triangle = new triangle($_POST['A'], $_POST['B'], $_POST['C']);
$triangle->runTriangle();
