<?php
//将数据中一些特殊字符进行转换html标识符，避免麻烦
function unhtml($content){
	$content = htmlspecialchars($content, ENT_NOQUOTES);
	$content = str_replace("@", "", $content);
	return trim($content);
	}
function msubstr($str,$start,$len)
{
	$strlen = $start+$len;
	$tmpstr = "";
	for ($i = 0; $i < $strlen; $i++) {
	 	  if(ord(substr($str,$i,1))>0xa0){
	 	  	$tmpstr.=substr($str, $i,2);
	 	  	$i++;
	 	  	}else {
	 	  	 	$tmpstr.=substr($str, $i,1);
	 	  	}
	 	  	return $tmpstr;
	}
	}