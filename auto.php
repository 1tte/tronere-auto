<?php
function registerOTP(){
echo "Nomor OTP: ";
$nomor_otp = trim(fgets(STDIN));
echo "OTP: ";
$otp = trim(fgets(STDIN));
$url = "https://tronere.xyz/api/index/register?lang=en";

$curl = curl_init($url);
curl_setopt($curl, CURLOPT_URL, $url);
curl_setopt($curl, CURLOPT_POST, true);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

$headers = array(
   "Accept: application/json",
   "Content-Type: application/json",
);
curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);

$data = '{"prefix":62,"mobile":"'.$nomor_otp.'","password":"#password","cpassword":"#password","t_mobile":"652874","code":"'.$otp.'","lang":"en","token":null}';

curl_setopt($curl, CURLOPT_POSTFIELDS, $data);

//for debug only!
curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);

$resp = curl_exec($curl);
curl_close($curl);
$hasil = json_decode($resp, TRUE);
echo $hasil['info'];
}
function loginBro(){
echo "Nomermu su: ";
$nomor_otp = trim(fgets(STDIN));
$url = "https://tronere.xyz/api/index/login?lang=en";

$curl = curl_init($url);
curl_setopt($curl, CURLOPT_URL, $url);
curl_setopt($curl, CURLOPT_POST, true);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

$headers = array(
   "Accept: application/json",
   "Content-Type: application/json",
);
curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);

$data = '{"prefix":62,"username":"'.$nomor_otp.'","password":"#password","lang":"en","token":null}';

curl_setopt($curl, CURLOPT_POSTFIELDS, $data);

//for debug only!
curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);

$resp = curl_exec($curl);
curl_close($curl);
$hasil = json_decode($resp);
print_r($hasil);
}
function claimSign(){
echo "Tokenmu su: ";
$token = trim(fgets(STDIN));
$url = "https://tronere.xyz/api/user/sign?lang=en";
$curl = curl_init($url);
curl_setopt($curl, CURLOPT_URL, $url);
curl_setopt($curl, CURLOPT_POST, true);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

$headers = array(
   "Accept: application/json",
   "Content-Type: application/json",
);
curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);

$data = '{"lang":"en","token":"'.$token.'"} ';

curl_setopt($curl, CURLOPT_POSTFIELDS, $data);

//for debug only!
curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);

$resp = curl_exec($curl);
curl_close($curl);
$hasil = json_decode($resp);
print_r($hasil);
}
function submitTRW(){
echo "Tokenmu su: ";
$token = trim(fgets(STDIN));
$urldua = "https://tronere.xyz/api/user/follow_telegram_channel?lang=en";

$curldua = curl_init($urldua);
curl_setopt($curldua, CURLOPT_URL, $urldua);
curl_setopt($curldua, CURLOPT_POST, true);
curl_setopt($curldua, CURLOPT_RETURNTRANSFER, true);

$headersdua = array(
   "Accept: application/json",
   "Content-Type: application/json",
);
curl_setopt($curldua, CURLOPT_HTTPHEADER, $headersdua);

$dataduaa = '{"code":"TRWin","lang":"en","token":"'.$token.'"}';

curl_setopt($curldua, CURLOPT_POSTFIELDS, $dataduaa);

//for debug only!
curl_setopt($curldua, CURLOPT_SSL_VERIFYHOST, false);
curl_setopt($curldua, CURLOPT_SSL_VERIFYPEER, false);

$respdua = curl_exec($curldua);
curl_close($curldua);
$hasildua = json_decode($respdua);
print_r($hasildua);
}
function withdrawBlc(){
echo "Tokenmu su: ";
$token = trim(fgets(STDIN));
echo "Address walletmu su: ";
$wallet = trim(fgets(STDIN));
$url = "https://tronere.xyz/api/user/cost_apply?lang=en";

$curl = curl_init($url);
curl_setopt($curl, CURLOPT_URL, $url);
curl_setopt($curl, CURLOPT_POST, true);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

$headers = array(
   "Accept: application/json",
   "Content-Type: application/json",
);
curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);

$data = '{"money":"4","address":"'.$wallet.'","type":2,"passwd":"#password","lang":"en","token":"'.$token.'"}';

curl_setopt($curl, CURLOPT_POSTFIELDS, $data);

//for debug only!
curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);

$resp = curl_exec($curl);
curl_close($curl);
$hasil = json_decode($resp);
print_r($hasil);
}
registerOTP();
loginBro();
claimSign();
submitTRW();
withdrawBlc();
?>

