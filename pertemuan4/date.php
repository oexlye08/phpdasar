<?php 
	//date menampilkan tanggal dengan format tertentu
	// echo date("l, d-M-Y");

	//Time
	//Unix Timestamp
		// echo time();
 
// echo date("d-M-Y", time()+60*60*24*100);

//mktime
//membuat sendiri detik
//mktime(jam, meint, detik, bulan, tanggal, tahun)

// echo date("l", mktime(0,0,0,10,8,1997))

//strtotime
echo date("l", strtotime("08 oct 1997"));

 ?>