<?php
    $order = [
        "order_id"=>"666666",
        "date_added"=>"date_added",
        "order_id"=>"666666",
    ];

    $images = "images";

$goods_list = 
<<< EOD
<table width="650" cellspacing="0" cellpadding="0" border="0" height="30" align="center"
       style="background-color: #ffffff; padding: 25px 10px; font-family: arial; color: #000000; font-size: 14px; line-height: 20px;">
    <tbody>

    <tr style="padding:10px 0;height: 40px;">
        <td colspan="3"><strong>Order NO.</strong>: {$order['order_id']} <strong>Date: </strong>{$order['date_added']}</td>
        <td colspan="3">{$images}</td>
    </tr>

    </tbody>
</table>
EOD;

echo $goods_list;

//////////////////////////////////////////////////////
$url = 
<<<SAMESTRING
the content str;
SAMESTRING;
echo $url;
//////////////////////////////////////////////////////

?>