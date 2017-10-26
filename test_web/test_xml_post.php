<?php 
//订单详情
$response_type = '1';
$account = '160381';
$terminal = '16038106';
$payment_id = '171024174104568038168'; //'171024174251167038116'   '171025111007639038139'
$order_number = '29348';//29389  29552
$order_currency = 'USD';
$order_amount = '16.54';//	  MXN  701.67 57.96
$payment_status = '1';    //该笔交易的结果状态 -1: 待处理(预授权才会有) 0: 失败 1: 成功
$payment_details = '80000:Transaction Approved';    //具体详细信息
$order_notes = 'feifei';
$card_number = '444433***1111';
$methods = 'Direct_OXXO';
$payment_country = 'MX';
$payment_authType = '0'; //是否预授权  0：正常交易  1：预授权
$payment_risk = '';
$payment_solutions = '';
$secureCode = 'pzZ0dZJB488JHlfjT0Xdl6x4p6r88d8022026n8v22VnbV6p4hl0Z4F4rdT8hdx2';
$signValue = hash("sha256",$account.$terminal.$order_number.$order_currency.$order_amount.$order_notes.$card_number.$payment_id.
		           $payment_authType.$payment_status.$payment_details.$payment_risk.$secureCode);
// $signValue = strtolower($signValue); //小写
$signValue = strtoupper($signValue); //大写

//推送xml
$data = "<?xml version='1.0' encoding='UTF-8'?>
<response>
	<response_type>$response_type</response_type>
	<account>$account</account>
	<terminal>$terminal</terminal>
	<signValue>$signValue</signValue>
	<order_number>$order_number</order_number>
	<order_currency>$order_currency</order_currency>
	<order_amount>$order_amount</order_amount>
	<order_notes>$order_notes</order_notes>
	<card_number>$card_number</card_number>
	<methods>$methods</methods>
	<payment_country>$payment_country</payment_country>
	<payment_id>$payment_id</payment_id>
	<payment_authType>$payment_authType</payment_authType>
	<payment_status>$payment_status</payment_status>
	<payment_details>$payment_details</payment_details>
	<payment_risk>$payment_risk</payment_risk>
	<payment_solutions>$payment_solutions</payment_solutions>
</response>
"; 
//推送地址：
$url="https://www.bellalike.com/index.php?route=extension/payment/oceanpay/notice_oceanpayment";//160381
//curl
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL,$url);
// curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0); // 对认证证书来源的检查
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0); // 从证书中检查SSL加密算法是否存在  0
curl_setopt($ch, CURLOPT_FAILONERROR, 1); // 启用时显示HTTP状态码，默认行为是忽略编号小于等于400的HTTP信息
//设置获取的信息以文件流的形式返回,而不是直接输出.
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
$http = curl_getinfo($ch);
// curl_getinfo($ch);
$response = curl_exec($ch);
if(curl_errno($ch))
{
	print_r(curl_error($ch));
}else{
	print_r($response);
}
// echo "<pre>";
// print_r($response);
// echo "</pre>";

curl_close($ch);