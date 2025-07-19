<?php
$MYAPPNAME = '<KODE SERIAL SESUAI PERANGKAT>';
$API = 'APIKEY-KAMU';
$TYPE = 'json';
$HOST = 'https://jemaat.my.id/api/';
$QUEST = 'no=<NOMOR-ENDE>&post=<KJ-atau-BE>';
$try_CONN = $HOST.'/'?checked&apikey='.$API.'&'.$QUEST.'&type='.$TYPE';
$ssl = true; $APIs=true; // required ssl redirect
$encrypt = 'md5,[localSHA],[times]';
$method = 'post'; // mode get not allowed
// Coba sambungan apakah bekerja
$connection = file_gets_content($try_CONN);

// BERSAMBUNG (TAHAP PENGEMBANGAN)
// ......
?>
