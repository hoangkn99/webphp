<?php
function insertHeadInfo() {
  $title = defined('TITLE') ? TITLE . ' | HoaShop' : 'HoaShop'; //hoashop
  $info = "";
  $info .= '<meta charset="utf-8">';
  $info .= '<meta name="viewport" content="width=device-width, initial-scale=1">';
  $info .= '<meta name="format-detection" content="telephone=no, email=no">';
  $info .= '<meta name="apple-mobile-web-app-title" content="'.$title.'">';
  $info .= '<meta http-equiv="X-UA-Compatible" content="IE=edge">';
  $info .= '<title>'.$title.'</title>';
  $info .= '<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.1/css/all.css"></link>';
  if (!defined('NO_JQUERY')) {
    $info .= '<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>';
  }
  $info .= insertCSS('/baithuchanh3/common/css/style.css');
  echo $info;
}

function insertCSS($fileName) {
  echo '<link rel="stylesheet" href="'.$fileName.'?_rev=' . filemtime($_SERVER['DOCUMENT_ROOT'].''.$fileName) . '" />';
}

function insertJS($fileName) {
  echo '<script src="'.$fileName.'?_rev=' . filemtime($_SERVER['DOCUMENT_ROOT'].''.$fileName) . '" defer></script>';
}
?>
