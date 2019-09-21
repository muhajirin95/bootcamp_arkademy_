<?php
	function hand($orang)
	{
		if($orang == 0){
			return 0;
		}else{

		 return ($orang-1) + hand($orang-1);
		}
	}
$org = 6;
echo "jumlah orang = $org <br>";


echo "jumlah jabat = ".hand($org);
?>