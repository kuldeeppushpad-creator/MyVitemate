<?php

$curl = curl_init();

curl_setopt_array($curl, [
	CURLOPT_URL => "https://all-in-one-media-downloader-api.p.rapidapi.com/download?url=https%3A%2F%2Fwww.tiktok.com%2F%40espnfc%2Fvideo%2F7218224837217635626",
	CURLOPT_RETURNTRANSFER => true,
	CURLOPT_ENCODING => "",
	CURLOPT_MAXREDIRS => 10,
	CURLOPT_TIMEOUT => 30,
	CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
	CURLOPT_CUSTOMREQUEST => "GET",
	CURLOPT_HTTPHEADER => [
		"Content-Type: application/json",
		"x-rapidapi-host: all-in-one-media-downloader-api.p.rapidapi.com",
		"x-rapidapi-key: b6289b3147mshd82ee8207033608p11ee1ajsn0f51cf5cc37f"
	],
]);

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
	echo "cURL Error #:" . $err;
} else {
	echo $response;
}