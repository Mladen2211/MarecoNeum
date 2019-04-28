<?php
session_start();


require(  __DIR__ .'/config.php');

require(  __DIR__ .'/classes/messages.php');
require(  __DIR__ .'/classes/bootstrap.php');
require(  __DIR__ .'/classes/controller.php');
require(  __DIR__ .'/classes/model.php');

require(  __DIR__ .'/controllers/home.php');
require(  __DIR__ .'/controllers/shares.php');
require(  __DIR__ .'/controllers/users.php');

require(  __DIR__ .'/models/home.php');
require(  __DIR__ .'/models/share.php');
require(  __DIR__ .'/models/user.php');
