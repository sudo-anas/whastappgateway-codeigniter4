<?php
$host 			= 'localhost' ; 
$user 			= "root";  
$password 		= ""; 
$database 		= "whatsapp_gateway";  
 
$koneksi = mysqli_connect($host, $user, $password, $database );
if (!$koneksi) { die("Koneksi Error : " . mysqli_connect_error());} 

$wagent = '???' ; $qr = '' ;
$hasil = mysqli_query($koneksi, "SELECT qr from tbl_waconfig where profil = '0'" );
while ($db = mysqli_fetch_array($hasil)) { 
$qr = $db['qr']; 
}

$hasil = mysqli_query($koneksi, "SELECT tmp_val wagent FROM tbl_tmp WHERE tmp_cd = 'wagent'" )  ;
while ($db = mysqli_fetch_array($hasil)) { $wagent = $db['wagent'] ; }

$ms = round(microtime(true) * 100);
//echo $data[0]['qr'];
if (@$qr!='') { 
	if ($qr == 'wait' ) {
		$qrimg = "../images/loaderwa2.gif";
    } 
	else 
	{  // KALO INGIN PAKE GOOGLE atau CAPTURE.. BEBAS
		//$qrimg = "https://chart.googleapis.com/chart?chs=350x350&cht=qr&chl=$qr&t=$ms" ; 
		$qrimg = "../wa-qris/qr$profil00.jpg?t=$ms" ; 	
	}
}	
  else { 
  $qrimg = "http://wa-gw.com/files/about-img.png" ; 
  }
?>
<img name="capture" src="<?php echo $qrimg; ?>" />
<?php

                foreach ($data as $wabot) {
                echo $wabot['wa_no'] ?><br />
                <?php echo $wabot['qr']; 
                }
                ?>   
                
