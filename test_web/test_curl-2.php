<?php
/**
 * 字符串截取
 *
 * @param $L string
 *        	开始唯一标记
 * @param $R string
 *        	结束唯一标记
 * @param $str string
 *        	源字符串
 */
function get_mid_str($L, $R, $str) {
	$int_l = strpos ( $str, $L );
	$int_r = strpos ( $str, $R );
	if ($int_l > - 1 && $int_l > - 1) {
		$str_put = substr ( $str, $int_l + strlen ( $L ), ($int_r - $int_l - strlen ( $L )) );
		return $str_put;
	} else {
		return false;
	}
}


  $ch = curl_init();  


  //模拟erp方面的请求
  curl_setopt($ch, CURLOPT_URL, "https://print.ebanx.com/print/oxxo/?hash=59e9c758795663bc7bd8c86ec4d04bcd4e470fb652ab9737");  
  // curl_setopt($ch, CURLOPT_HEADER, false);  
  // curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); //如果把这行注释掉的话，就会直接输出  
  curl_setopt($ch,CURLOPT_HEADER,1);
  curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
  // curl_setopt($ch,CURLOPT_POST,1);

  //下边这两句访问https必须加上
  curl_setopt($ch,CURLOPT_SSL_VERIFYPEER ,false);
  curl_setopt($ch,CURLOPT_SSL_VERIFYHOST ,false);

  // curl_setopt($ch,CURLOPT_POSTFIELDS,$data);

  $result=curl_exec($ch);  
  curl_close($ch); 

  $pay_num = get_mid_str('<div class="oxxo-barcode-text">','<hr class="oxxo-divider">',$result);
  $pay_num = str_replace("</div>","",$pay_num);
  $pay_num = str_replace(" ","",$pay_num);
  $pay_num = str_replace("\r","",$pay_num);

  echo $pay_num;
  // exit;

  $pay_img = get_mid_str('<div class="oxxo-barcode-img">','<div class="oxxo-barcode-text">',$result);
  $pay_img = str_replace("</div>","",$pay_img);

  echo $pay_img;
  // var_dump($pay_img);
  exit;


  echo $result;exit;
  // var_dump($result);exit;

?>