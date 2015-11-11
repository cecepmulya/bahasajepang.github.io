<?php
$page = $_GET['page'];
include '/header.php';
function bacaHTML($url){
     // inisialisasi CURL
     $data = curl_init();
     // setting CURL
     curl_setopt($data, CURLOPT_RETURNTRANSFER, 1);
     curl_setopt($data, CURLOPT_URL, $url);
     // menjalankan CURL untuk membaca isi file
     $hasil = curl_exec($data);
     curl_close($data);
     return $hasil;
}
$kodeHTML =  bacaHTML('http://www.goethe-verlag.com/book2/ID/IDJA/IDJA002.HTM');
$pecah = explode('<div class="Stil50">', $kodeHTML);
$pecahLagi = explode('<div class="row">', $pecah[1]);
$pecahLagi[0] = str_replace('<a href="', '<a target="_blank" href="http://www.ccpro.ml/jpid/get/?page=', $pecahLagi[0]);
echo $pecahLagi[0];
echo '</body></html>';
?>
