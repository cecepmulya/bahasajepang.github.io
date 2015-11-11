<?php
$page = $_GET['page'];
include '../header.php';
function bacaHTML($url){
     $data = curl_init();
     curl_setopt($data, CURLOPT_RETURNTRANSFER, 1);
     curl_setopt($data, CURLOPT_URL, $url);
     $hasil = curl_exec($data);
     curl_close($data);
     return $hasil;
}
$kodeHTML =  bacaHTML('http://www.goethe-verlag.com/book2/ID/IDJA/'.$page.'');
$pecah = explode('<div class="bg-warning">', $kodeHTML);
$pecahLagi = explode('<div class="flagcontainer">', $pecah[1]);
$pecahLagi[0] = str_replace('<hr style="background:#F87431; height:3px" />', '', $pecahLagi[0]);
$pecahLagi[0] = str_replace('<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>', '', $pecahLagi[0]);
$pecahLagi[0] = str_replace('<ins class="adsbygoogle"', '', $pecahLagi[0]);
$pecahLagi[0] = str_replace('style="display:inline-block;width:336px;height:280px"', '', $pecahLagi[0]);
$pecahLagi[0] = str_replace('data-ad-client="ca-pub-9240635761824238"', '', $pecahLagi[0]);
$pecahLagi[0] = str_replace('data-ad-slot="7178610086"></ins>', '', $pecahLagi[0]);
$pecahLagi[0] = str_replace('<script>', '', $pecahLagi[0]);
$pecahLagi[0] = str_replace('(adsbygoogle = window.adsbygoogle || []).push({});', '', $pecahLagi[0]);
$pecahLagi[0] = str_replace('</script>', '', $pecahLagi[0]);
$pecahLagi[0] = str_replace('&nbsp;|&nbsp;', '', $pecahLagi[0]);
$pecahLagi[0] = str_replace('Free Android app', '', $pecahLagi[0]);
$pecahLagi[0] = str_replace('<a href="http://www.goethe-verlag.com/book2/_ios_app/IDJA.HTM" target="_blank">', '', $pecahLagi[0]);
$pecahLagi[0] = str_replace('Free iPhone app</a>', '', $pecahLagi[0]);
$pecahLagi[0] = str_replace('<img src="../../', '<img src="http://www.goethe-verlag.com/book2/', $pecahLagi[0]);
$pecahLagi[0] = str_replace('<a href="', '<a target="_blank" href="http://www.ccpro.ml/jpid/get/?page=', $pecahLagi[0]);
$pecahLagi[0] = str_replace('/jpid/get/?page=IDJA002.HTM', '/', $pecahLagi[0]);
$pecahLagi[0] = str_replace('http://www.goethe-verlag.com/book2/_an_app/IDJA.HTM" target="_blank">', '', $pecahLagi[0]);
$pecahLagi[0] = str_replace('</a><a target="_blank" href="http://www.ccpro.ml/jpid/get/?page=', '', $pecahLagi[0]);
$pecahLagi[0] = str_replace('<a target="_blank" href="http://www.ccpro.ml/jpid/get/?page=http://', '<a target="_blank" href="http://', $pecahLagi[0]);
$pecahLagi[0] = str_replace('" target="_blank">', '">', $pecahLagi[0]);
$pecahLagi[0] = str_replace('target="_blank" class="Stil40"', 'class="Stil40"', $pecahLagi[0]);
$pecahLagi[0] = str_replace('www.goethe-verlag.com/tests/JY/JY.HTM', 'id.wikipedia.org/wiki/Bahasa_Jepang', $pecahLagi[0]);
$pecahLagi[0] = str_replace('www.goethe-verlag.com/poster/indexeng.htm', 'id.wikipedia.org/wiki/Bahasa_Jepang', $pecahLagi[0]);
echo $pecahLagi[0];
include '../footer.php';
?>
