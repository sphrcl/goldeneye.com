<?php
//ABRE O ARQUIVO TXT
include "turn.php";

if (file_exists("emails".$turn.".txt")){

	
	$ponteiro = fopen ("emails".$turn.".txt", "r");

	$turn++;
	$filename = "turn.php";
	$update = "<?php \$turn = ".$turn."; ?>";
	if ($f = fopen($filename,"w+"))
	{
		fwrite($f, $update,strlen($update));
		fclose($f); 
	}


	//L� O ARQUIVO AT� CHEGAR AO FIM
	while (!feof ($ponteiro)) {
	  //L� UMA LINHA DO ARQUIVO
	   $linha = fgets($ponteiro, 4096);
	  //IMPRIME NA TELA O RESULTADO

	  $header = "From: Contato teste <no-reply@goldeneye.com>\r\n"; //optional headerfields
	  $header .= "Content-type: text/html; charset=iso-8859-1rn";
	  
		$html = 'fhjdsaghfj kdsaghfjk gashjk fgdsaj kfgdhsajk fghsadjk gfhjaks gh';
		
		mail("$linha","gondeneye", $html, $header);
		//mail("clientes@cappen.com","Concurso Click Nagem 2012", $html, $header);
	    //break;
	  
		echo $linha."<br>";
	}//FECHA WHILE
	//FECHA O PONTEIRO DO ARQUIVO
	fclose ($ponteiro);
}
?>