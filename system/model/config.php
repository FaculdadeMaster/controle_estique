<?php

function conectar(){
		try{
		 $pdo=new PDO("mysql:host=localhost;dbname=faculdade","root","leticia");
		}catch(PDOException $e){
			//var_dump($e);
			print $e->getMessage();
			//getCode();
		}
		return $pdo;

	}

?>