<?php
  $keyword = $_GET['keyword'];
  $limit = $_GET['limit'];

  $json = file_get_contents("http://119.75.226.181/rest/search_public.json?keyword=" . urlencode($keyword) . "&copyright=all&limit=" . intval($limit) ,true);
  echo $json;
?>
