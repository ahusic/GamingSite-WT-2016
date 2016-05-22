<?php
require_once 'getSession.php';
session_destroy();
header('Location: index.php');
exit();