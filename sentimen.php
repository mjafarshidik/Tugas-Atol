<!doctype html>
<head><title>Analisis Sentimen</title></title>
<body>
<form method="post">
Teks (Bahasa Inggris) :<br> 
<textarea name="teks" cols="60" rows="5"></textarea><br>
<input type="submit" value="Analisis" >
</form>
<?php
if(isset($_POST["teks"])){
	$teks=urlencode($_POST["teks"]);
	$API_KEY="h1jSnnJMUJOo";
	$request="https://api.uclassify.com/v1/uclassify/sentiment/classify?readkey=$API_KEY&text=$teks";
	$json=file_get_contents($request);
	if($json){
		$response=json_decode($json,true);
		echo "<h1>Hasil Analisa</h1><br>";
		echo "Teks : ".urldecode($teks)."<br>";
		echo "Positif : ".number_format($response["positive"]*100,0)."%<br>";
		echo "Negatif : ".number_format($response["negative"]*100,0)."%"; 
	}
	else	
		echo "Error Request";
}
else
	echo "Isi dulu teks-nya.";
?>

</body>
</html>
