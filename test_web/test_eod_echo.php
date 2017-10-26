<?php
                $goods_list = <<< EOD
<table width="650" cellspacing="0" cellpadding="0" border="0" height="30" align="center"
       style="background-color: #ffffff; padding: 25px 10px; font-family: arial; color: #000000; font-size: 14px; line-height: 20px;">
    <tbody>
    <tr>
        <td colspan="3"><p>Thank you for shopping with our website(www.luvyle.com) and it's my great pleasure to be at service for you.
            Recently, Our Website have great discount for unique you, I believe that you must be very beautiful to dress in that dress.</p>
            <p>Please contact us here for any problem, thanks.</p></td>
    </tr>
    <tr>
        <td colspan="3">We noticed you left an unpaid order. Any help we can offer? <a target="_blank" href="{$pay_url}" >Click here</a>  to complete your purchase now.</td>
    </tr>
    <tr style="padding:10px 0;height: 40px;">
        <td colspan="3"><strong>Order NO.</strong>: {$order['order_id']} <strong>Date: </strong>{$order['date_added']}</td>
    </tr>
    <tr style="text-align: center;">
        <td colspan="3">{$images}</td>
    </tr>
    <tr style="text-align: center;">
        <td colspan="3" style="font-size:24px;font-weight:bold;color:#000;line-height:60px;text-align:center;width:400px;padding-left:40px;padding-right:40px">Total: USD\$ {$total}</td>
    </tr>
    <tr>
        <td colspan="3" style="text-align: center;">
            <a target="_blank" href="{$pay_url}" style="font-size: 14px;font-weight: bold;color: #fff;background-color: #d10000;display: block;line-height: 48px;text-align: center;text-decoration: none;width: 420px;margin-left: 104px;margin-top: 10px;">Checkout Now</a>
        </td>
    </tr>
    </tbody>
</table>
EOD;

echo $goods_list;
?>