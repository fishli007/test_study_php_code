<?php
// $url = "http://baidu.com";
// echo "<script type='text/javascript'>";
// echo "window.open('".$url."');";
// echo "</script>";

$string_anyting = 
<<<SAMESTRING
the content str;
SAMESTRING;
echo $string_anyting;

$url = "http://www.baidu.com";
$string_anyting = 
<<<SAMESTRING
<script>
// window.open('"$url"');
alert('hello');
</script>
SAMESTRING;
echo $string_anyting;
