<?php
  require "config.php";

  $helper = $fb->getRedirectLoginHelper();

  $permissions = ['user_posts']; // Optional permissions
  //$loginUrl = $helper->getLoginUrl('file:///C:/Users/Erichris/Desktop/Amnistia/index.html/fb-callback.php', $permissions);
  $loginUrl = $helper->getLoginUrl('http://localhost/Amnistia/fb-callback.php', $permissions);
  header("location:" . $loginUrl);
?>
