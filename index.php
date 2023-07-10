<?php

$telegramToken = 'GANTI DENGAN TOKEN ANDA';
$channelUsername = '@NAMA_CHANNEL_ANDA';

$message = 'Pesan yang akan anda kirimkan ke channel';

$telegramAPI = 'https://api.telegram.org/bot' . $telegramToken . '/sendMessage';

$data = [
    'chat_id' => $channelUsername, // @ simbol digunakan sebelum nama channel
    'text' => $message
];

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $telegramAPI);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$result = curl_exec($ch);

var_dump($result);

if ($result === false) {
    // Gagal mengirim pesan
    echo 'Gagal mengirim pesan ke Telegram.';
} else {
    // Berhasil mengirim pesan
    echo 'Pesan berhasil dikirim ke Telegram.';
}

curl_close($ch);

?>
