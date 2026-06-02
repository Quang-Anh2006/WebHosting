<?
$trangchu = "index";

switch ($trangchu) {
  case "index":
    include("index.php");
    break;
  case "sanpham":
    include("sanpham.php");
    break;
  case "video":
    include("video.php");
    break;
  default:
    echo "Your favorite color is neither red, blue, nor green!";
}
?>