<?php
//if ($_POST["hantar"]){
	$nama = $_POST["nama"];
	$dob = $_POST["dob"];
	$jantina = $_POST["jantina"];
	$hobi1 = $_POST["checkbox-v-1a"];
	$hobi2 = $_POST["checkbox-v-1b"];
	$hobi3 = $_POST["checkbox-v-1c"];
	$jp = $_POST["jp"];
	$komen = $_POST["textarea"];
	
	echo	"Nama : $nama <br/>;
			Tarikh Lahir : $dob <br/>;
			Jantina : $jantina <br/>;
			Tengok TV : $hobi1 <br/>;
			Tengok Movie : $hobi2 <br/>;
			Tengok Pokok : $hobi3 <br/>;			
			Jenis Pekerjaan : $jp <br/>;
			Komen : $komen";
//}
?>