<?php
//$version = apache_get_version();
//echo "$version\n";

//$version =  $_SERVER['SERVER_SOFTWARE'];
//echo $version;

//$version =  $_SERVER['SERVER_SOFTWARE'].'&nbsp;('.php_uname('s').')&nbsp;PHP/'.PHP_VERSION;
//echo $version;

/*function checkIdCard($idcard){  
  
    // ֻ����18λ  
    if(strlen($idcard)!=18){  
        return false;  
    }  
  
    // ȡ��������  
    $idcard_base = substr($idcard, 0, 17);  
  
    // ȡ��У����  
    $verify_code = substr($idcard, 17, 1);  
  
    // ��Ȩ����  
    $factor = array(7, 9, 10, 5, 8, 4, 2, 1, 6, 3, 7, 9, 10, 5, 8, 4, 2);  
  
    // У�����Ӧֵ  
    $verify_code_list = array('1', '0', 'X', '9', '8', '7', '6', '5', '4', '3', '2');  
  
    // ����ǰ17λ����У����  
    $total = 0;  
    for($i=0; $i<17; $i++){  
        $total += substr($idcard_base, $i, 1)*$factor[$i];  
    }  
  
    // ȡģ  
    $mod = $total % 11;  
  
    // �Ƚ�У����  
    if($verify_code == $verify_code_list[$mod]){  
        return true;  
    }else{  
        return false;  
    }  
  
}  
  
  
$idcard = '131182199304174239';  
var_dump(checkIdCard($idcard));  */
function is_idcard( $id ) 
{ 
  $id = strtoupper($id); 
  $regx = "/(^\d{15}$)|(^\d{17}([0-9]|X)$)/"; 
  $arr_split = array(); 
  if(!preg_match($regx, $id)) 
  { 
    return FALSE; 
  } 
  if(15==strlen($id)) //���15λ 
  { 
    $regx = "/^(\d{6})+(\d{2})+(\d{2})+(\d{2})+(\d{3})$/"; 
 
    @preg_match($regx, $id, $arr_split); 
    //������������Ƿ���ȷ 
    $dtm_birth = "19".$arr_split[2] . '/' . $arr_split[3]. '/' .$arr_split[4]; 
    if(!strtotime($dtm_birth)) 
    { 
      return FALSE; 
    } else { 
      return TRUE; 
    } 
  } 
  else      //���18λ 
  { 
    $regx = "/^(\d{6})+(\d{4})+(\d{2})+(\d{2})+(\d{3})([0-9]|X)$/"; 
    @preg_match($regx, $id, $arr_split); 
    $dtm_birth = $arr_split[2] . '/' . $arr_split[3]. '/' .$arr_split[4]; 
    if(!strtotime($dtm_birth)) //������������Ƿ���ȷ 
    { 
      return FALSE; 
    } 
    else 
    { 
      //����18λ���֤��У�����Ƿ���ȷ�� 
      //У��λ����ISO 7064:1983.MOD 11-2�Ĺ涨���ɣ�X������Ϊ������10�� 
      $arr_int = array(7, 9, 10, 5, 8, 4, 2, 1, 6, 3, 7, 9, 10, 5, 8, 4, 2); 
      $arr_ch = array('1', '0', 'X', '9', '8', '7', '6', '5', '4', '3', '2'); 
      $sign = 0; 
      for ( $i = 0; $i < 17; $i++ ) 
      { 
        $b = (int) $id{$i}; 
        $w = $arr_int[$i]; 
        $sign += $b * $w; 
      } 
      $n = $sign % 11; 
      $val_num = $arr_ch[$n]; 
      if ($val_num != substr($id,17, 1)) 
      { 
        return FALSE; 
      } //phpfensi.com 
      else 
      { 
        return TRUE; 
      } 
    } 
  } 
 
} 

$idc=is_idcard("131182199304174289"); 
if($idc){echo "��ȷ";}else{echo "����";}
?>  