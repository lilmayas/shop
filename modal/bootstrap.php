<?php
session_start();
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
include_once __DIR__ . '/core/functions.php';
include_once __DIR__ . '/Controllers/HomeController.php';
include_once __DIR__ . '/Controllers/ModalController.php';
include_once __DIR__ . '/core/RouterList.php';
include_once __DIR__ . '/core/modal_builder.php';