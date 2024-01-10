<?php

echo"Nama Lengkap : Mohammad Agung Hidayat <br />";
  echo"Kelas : X RPL 1 <br />";

  $harian = (95*30/100);
  echo "Nilai Harian : ";
   echo $harian;
   echo "<br />";


$uts = (80*30/100);
  echo "Nilai UTS :";
   echo $uts;
   echo "<br />";


$uas = (89*40/100);
  echo "Nilai UAS : ";
   echo $uas;
   echo "<br />";


$Akhir = $harian + $uts + $uas;
  echo "Nilai AKHIR : ";
   echo $Akhir;
   echo "<br />";

if($Akhir >= 90 && $Akhir <= 100){
      echo"Predikat nilai = A+";
}else if ($Akhir >= 85 && $Akhir <= 89){
 echo"Predikat nilai = A";
}else if ($Akhir >= 80 && $Akhir <= 84){
 echo"Predikat nilai = B+";
}else if ($Akhir >= 76 && $Akhir <= 79){
 echo"Predikat nilai = B";
}else if ($Akhir >= 60 && $Akhir <= 75){
 echo"Predikat nilai = C";
}else if ($Akhir >= 40 && $Akhir <= 59){
 echo"Predikat nilai = D";
}else if ($Akhir >= 0 && $Akhir <= 39){
 echo"Predikat nilai = E";
} else {
 echo "Anda Tidak Mendapatkan Predikat";
}
















?>