<?php
  $Barang = 3;
  $Harga = 150000;
  $Total = $Harga * $Barang;
  $Status = "Prosses";

  if($Total > 100000){
     $Total = $Harga * $Barang - 50000;
 }else{
    $Total = $Harga / $Barang;
 }
 
 echo"<h1> --- Program Menghitung Pembelian Produk --- <br /></h1>";
 echo"Nama Barang : Printer LaserJet 1001 <br />";
 echo"Kode Barang : P001 <br />";
 echo"Kategori : Elektronik <br >";
 echo"Harga Barang : Rp $Harga <br />";
 echo"Jumlah Barang : $Barang <br />";
 echo"Total Harga : $Total <br />";
 
 
   
   if($Status == "Prosses"){
    echo"Status : <span style='color: orange;'>$Status</span>";
   }else if($Status == "Sudah Bayar"){
    echo"Status : <span style='color: green;'>$Status</span>";
   }else{
    echo"Anda Tidak Memiliki Transaksi.";
   }
 
?>