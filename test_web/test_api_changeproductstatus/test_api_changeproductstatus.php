<?php
  $ch = curl_init();  


  $data = array(
  	            'spu' => 'SKU408995',  //要下架产品的spu
  	            'to_status' => '5',    //需要将产品状态改变的目标状态
  	            'option_user' => 'lifeifei',  //操作人
                'token'=>''  //token
            );

  //按约定算法生成token
  $api_key = '#$@%!^*';
  $token = md5 ($data['spu'].$data['to_status'].$data['option_user'].$api_key); 
  $data['token'] = $token;
  // echo $token."<br>";

  //模拟erp方面的请求
  curl_setopt($ch, CURLOPT_URL, "http://www.bellalike.com/admin/index.php?route=api/producterp/productstopsale");  
  // curl_setopt($ch, CURLOPT_HEADER, false);  
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); //如果把这行注释掉的话，就会直接输出  
  curl_setopt($ch,CURLOPT_HEADER,1);
  curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
  curl_setopt($ch,CURLOPT_POST,1);
  curl_setopt($ch,CURLOPT_POSTFIELDS,$data);

  $result=curl_exec($ch);  
  curl_close($ch); 


  echo $result;exit;
  var_dump($result);exit;

?>