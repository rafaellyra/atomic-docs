<?php
function getConfig() {
  $config = array();
  $config['dir'] = dirname(__FILE__);

  //user defined varibales
  $config['cssDir'] = 'css'; //CSS proprocessed dir name
  $config['cssExt'] = 'less'; //prerocessed file ext. E.G. scss
  $config['compExt'] = 'php'; //markup file ext. E.G. .html
  
  return $config;
}