<?php
   $template['body'] = "hello {good_list}"; 
   // $goods_list = "lifeifei";
   // $goods_list = '$$';
   // $p_price = "\\$25.35";
   $p_price = "$25.35";
   // $p_price = '\$25.35';
   // $p_price = "\44 44.35";
   // $p_price = addslashes($p_price);
   // $b = \"test\".$a;
   // $p_price = '$p_price';
   // echo str_replace("world","Shanghai","Hello world!");

   $p_price = str_replace("$","\\$",$p_price);
   // $p_price = str_replace("$","\$",$p_price);
$goods_list = <<< EOD
<tr><td colspan="3">{$p_price}</td></tr>
EOD;



   $match = "{good_list}";

   echo $goods_list;

   if($match == '{good_list}'){
       $template['body'] = preg_replace("/".$match."/", $goods_list, $template['body']);
       // var_dump($template);
       echo "<br>";
       echo $template['body'];
   }

?>