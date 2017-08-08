<?php
require_once('Pwyc.php');
$file_path=$argv[1];
if(file_exists($file_path)){
$str = file_get_contents($file_path);//将整个文件内容读入到一个字符串中
$str = str_replace("\r\n","<br />",$str);

$weiyuanchuang=new Pwyc();
$tihuan=$weiyuanchuang->replace($str);
echo $tihuan; 

}


