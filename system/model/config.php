<?php

function conectar(){
		try{
		 $pdo=new PDO("mysql:host=mysql.weblink.com.br;dbname=u179029833_es","u179029833_es","leticia");
		}catch(PDOException $e){
			//var_dump($e);
			print $e->getMessage();
			//getCode();
		}
		return $pdo;

	}

?>