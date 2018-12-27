<?php
$name=$_POST['user_name'];
$phone=$_POST['user_phone'];
$token="386022962:AAEB3ks2fSrExTDhde6ZPtKLo-ZFx3B6Gnw";
$chat_id = "-1001315707594";
$arr=array(
'Ismi:'=>$name,
'Telefon:'=>$phone,
);

foreach ($arr as $key => $value) {
	$txt .=" " .$key. " " .$value. " ";
};

$sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}$parse_mode=html&text={$txt}", "r");
if ($sendToTelegram) {
	header('Location:thank_you.html');
}
else{
	echo "Error";
}

?>