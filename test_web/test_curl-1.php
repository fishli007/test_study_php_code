<?php
  $ch = curl_init();  


  $data = array(
  	            // 'url' => 'http://www.bellalike.com/admin/index.php?route=api/producterp/productstopsale',
  	            'spu' => 'SKU408995',
  	            'to_status' => '5',
  	            'option_user' => 'lifeifei',
                'token'=>''
            );

  //模拟钱海方面的post请求
  curl_setopt($ch, CURLOPT_URL, "https://www.bellalike.com/index.php?route=extension/payment/oceanpay/notice_oceanpayment");  
  // curl_setopt($ch, CURLOPT_HEADER, false);  
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); //如果把这行注释掉的话，就会直接输出  
  curl_setopt($ch,CURLOPT_HEADER,1);
  curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
  curl_setopt($ch,CURLOPT_POST,1);
  curl_setopt($ch,CURLOPT_POSTFIELDS,$data);

  curl_setopt($ch,CURLOPT_POST,1);


  curl_setopt($ch,CURLOPT_SSL_VERIFYPEER ,false);
  curl_setopt($ch,CURLOPT_SSL_VERIFYHOST ,false);

  $result=curl_exec($ch);  
  if (curl_errno($ch)) {
      echo 'Curl error: ' . curl_error($ch);
  }
  curl_close($ch); 


  echo $result;exit;
  var_dump($result);exit;

?>