
<?php

$input = "test123"; //.masukkan kata atau kalimat yang ingin dibalik
//.mulai memproses input
$count = strlen($input); //.menghitung jumlah karakter
echo "<b>input = </b>" . $input; //.menampilkan input
echo "<hr />"; //.menampilkan pembatas antara input dan output
echo "<b>output = </b>"; //.menampilkan output
for ($i = $count; $i >= 0; $i--) {
    $output = substr($input, $i, 1);
    echo $output; //.menampilkan output karakter yang sudah dibalik
}
?>
