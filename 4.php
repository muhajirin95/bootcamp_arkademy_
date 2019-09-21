<?php
	function fibo($kolom, $baris)
	{
		$n = $kolom * $baris;
		$array = array(0,1);
		$sebelum = 0;
		$sekarang = 1;

		for ($i =0; $i<$n-2; $i++){
			$fibo = $sebelum + $sekarang;
			$array[] = $fibo;

			$sebelum = $sekarang;
			$sekarang = $fibo;

		}
			for ($i=0; $i < count($array); $i++) { 
				echo "$array[$i]";
				if (($i+1) % $kolom == 0) {
					echo "<br>";
				}else{
					echo ", ";
				}
			}
	}

	fibo(4, 3);
?>