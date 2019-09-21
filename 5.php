<?php
	function buy($tgl, $uang)
	{
		if ($tgl <= 30 && $tgl >= 1) {
			if ($uang % 2500 == 0) {
				$n = $uang / 2500;
			
				if ($tgl % 2 == 1) {
					# code...
					$bonus = $n /3 ;
					$bon= ceil($bonus)-1;
					if($tgl % 5 == 0 && $bon %2 == 0){
						$bons = $bon * 10;
						$akhir = $n + $bons;

					}elseif ($tgl % 5 == 0 && $bon % 2 == 1) {
						
						$bons = $bon * 5;
						$akhir = $n + $bons;
					}else{
						$akhir = $n;
					}
				
				}else{
					$bonus = $n / 4;
					$bon = ceil($bonus);
					if($tgl % 5 == 0 && $bon %2 == 0){
						$bons = $bon * 10;
						$akhir = $n + $bons;

					}elseif ($tgl % 5 == 0 && $bon % 2 == 1) {
						
						$bons = $bon * 5;
						$akhir = $n + $bons;
					}else{
						$akhir = $n;
					}
				}
				echo "$akhir";
			}else{
				echo "uang harus kelipatan dari 2500";
			}
			}else{

				echo "masukkan tanggal antara 1- 30";
		}
	}
$tgl = 25;
$cash = 50000;
echo "tanggal beli : $tgl <br>";
echo "uang beli : $cash <br>";
echo "jumlah mie didapat : "; buy($tgl, $cash);
?>