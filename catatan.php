<?php
if(isset($_POST['ok'])){//jika memiliki nilai lanjut
    if(empty($_POST['caption']) || empty($_POST['catatan'])){ //jika caption atau catatan kosong
        header("location: pesan.html"); //refresh di pesan.html
    }else{
        $caption=$_POST['caption']; //var berisi caption
        $catatan=$_POST['catatan']; //var berisi catatan
        $buka=fopen("hasil.html",'a'); //membuat penyimpanan dengan file berupa html
        fwrite($buka,"Caption : ${caption} <br> "); //isi dari caption
        fwrite($buka,"Catatan : ${catatan} <br> "); // isi dari catatan
        fwrite($buka,"<hr>"); //pembatas
        fclose($buka); //menutup
        $buka=fopen("hasil.txt",'a'); //membuat penyimpanan di txt
        fwrite($buka,"Caption : ${caption} ");
        fclose($buka);
        $buka=fopen("hasil.txt",'a');
        fwrite($buka,"Catatan : ${catatan} ");
        fclose($buka);
        header("location: pesan.html"); //masuk ke pesan.html

    }
}