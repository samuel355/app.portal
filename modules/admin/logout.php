<?php
session_start();
session_destroy();
unset($_SESSION['email'] );
unset( $_SESSION['username']);
unset( $_SESSION['admin_id']);
unset( $_SESSION['firstname']);
unset( $_SESSION['login']);

header('location: login');
