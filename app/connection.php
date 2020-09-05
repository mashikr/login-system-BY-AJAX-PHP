<?php
session_start();
ob_start();
$db = new PDO("mysql:host=localhost;dbname=login_ajax", 'root', '');
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);