<?php

if(!isset($_POST['url'])){
echo json_encode(["success"=>false]);
exit;
}

$videoUrl=$_POST['url'];

$curl=curl_init();

curl_setopt_array($curl, [
CURLOPT_URL => "https://fast-video-dowloander.p.rapidapi.com/all",
CURLOPT_RETURNTRANSFER => true,
CURLOPT_CUSTOMREQUEST => "POST",
CURLOPT_POSTFIELDS => http_build_query([
"url"=>$videoUrl
]),
CURLOPT_HTTPHEADER => [
"x-rapidapi-host: fast-video-dowloander.p.rapidapi.com",
"x-rapidapi-key: b6289b3147mshd82ee8207033608p11ee1ajsn0f51cf5cc37f",
"Content-Type: application/x-www-form-urlencoded"
],
]);

$response=curl_exec($curl);

curl_close($curl);

$data=json_decode($response,true);

if(isset($data["download"])){

echo json_encode([
"success"=>true,
"title"=>$data["title"] ?? "Video",
"thumbnail"=>$data["thumbnail"] ?? "",
"download"=>$data["download"]
]);

}else{

echo json_encode(["success"=>false]);

}

?>