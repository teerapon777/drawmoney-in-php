<?
  $content = $_GET["content"];
  $content=trim($content);
  if(empty($content))
  {
    $content = 'Home.php';
  }
  else $content=$content.".php";
  include "$content";
?>
