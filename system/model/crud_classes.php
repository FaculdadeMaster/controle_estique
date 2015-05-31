<?php

	include "config.php";
    /**
    * Classe de inserção dos cadastros no banco
   	* @package model
 	* @author Guilherme Barbosa Lima
 	*/
    class Cadastro {
    	/**
    	 * Cadastro de clientes
    	 *
    	 * @return void
    	 * @author Guilherme Barbosa Lima
    	 **/
    	function clientes($nome, $endereco, $bairro, $cidade, $telefone1, $telefone2, $email, $cep, $uf, $fax, $cpfCnpj, $tipoPessoa){
    		$pdo=conectar();

    	    $insert=$pdo->prepare("insert into clientes (nome, endereco, bairro, cidade, telefone1, telefone2, email, cep, uf, fax, cpf_cnpj, tipo_pessoa)
			values (:nome, :endereco, :bairro, :cidade, :telefone1, :telefone2, :email,  :cep, :uf, :fax, :cpfcnpj, :tipoPessoa)");
            $insert->bindValue(":nome", $nome, PDO::PARAM_STR);
            $insert->bindValue(":endereco", $endereco, PDO::PARAM_STR);
            $insert->bindValue(":bairro", $bairro, PDO::PARAM_STR);
            $insert->bindValue(":cidade", $cidade, PDO::PARAM_STR);
            $insert->bindValue(":telefone1", $telefone1, PDO::PARAM_STR);
            $insert->bindValue(":telefone2", $telefone2, PDO::PARAM_STR);
            $insert->bindValue(":email", $email, PDO::PARAM_STR);
            $insert->bindValue(":cep", $cep, PDO::PARAM_STR);
            $insert->bindValue(":uf", $uf, PDO::PARAM_STR);
            $insert->bindValue(":fax", $fax, PDO::PARAM_STR);
            $insert->bindValue(":cpfcnpj", $cpfCnpj, PDO::PARAM_STR);
            $insert->bindValue(":tipoPessoa", $tipoPessoa, PDO::PARAM_STR);


            
           if ($insert->execute()){
            print "<SCRIPT>alert (\"Cadastro realizado com sucesso!\")</SCRIPT>";
           
       	 }else{
       	 	print "<SCRIPT>alert (\"Erro na realização do cadastro!\")</SCRIPT>";
       	 	}
       	

    	}



    	  /**
    	 * Cadastro de clientes
    	 *
    	 * @return void
    	 * @author Guilherme Barbosa Lima
    	 **/
    	function funcionario($nome, $cpf, $rg, $cidade, $bairro, $telefone1, $telefone2, $celular, $email, $cargo, $departa, $dataNascimento, $numCarteira, $uf, $cep){
    		$pdo=conectar();

    	    $insert=$pdo->prepare("insert into funcionarios (nome, cpf, rg, cidade, bairro, telefone1, telefone2, celular, email, cargo, departamento, data_nascimento, num_carteira, uf, cep)
			values (:nome, :cpf, :rg, :cidade, :bairro, :telefone1, :telefone2, :celular, :email, :cargo, :departa, :dataNascimento, :numCarteira, :uf, :cep)");
            $insert->bindValue(":nome", $nome, PDO::PARAM_STR);
            
            $insert->bindValue(":cpf", $cpf, PDO::PARAM_STR);
            $insert->bindValue(":rg", $rg, PDO::PARAM_STR);
            
            $insert->bindValue(":cidade", $cidade, PDO::PARAM_STR);
            $insert->bindValue(":bairro", $bairro, PDO::PARAM_STR);
            
            $insert->bindValue(":telefone1", $telefone1, PDO::PARAM_STR);
            $insert->bindValue(":telefone2", $telefone2, PDO::PARAM_STR);
           
            $insert->bindValue(":celular", $celular, PDO::PARAM_STR);
            $insert->bindValue(":email", $email, PDO::PARAM_STR);
            $insert->bindValue(":cargo", $cargo, PDO::PARAM_STR);
            $insert->bindValue(":departa", $departa, PDO::PARAM_STR);
            $insert->bindValue(":dataNascimento", $dataNascimento, PDO::PARAM_STR);
            $insert->bindValue(":numCarteira", $numCarteira, PDO::PARAM_STR);
            $insert->bindValue(":uf", $uf, PDO::PARAM_STR);
            $insert->bindValue(":cep", $cep, PDO::PARAM_STR);
                 
           if ($insert->execute()){
            print "<SCRIPT>alert (\"Cadastro realizado com sucesso!\")</SCRIPT>";
           
       	 }else{
       	 	print "<SCRIPT>alert (\"Erro na realização do cadastro!\")</SCRIPT>";
       	 	}
       	

    	}
	}



	/**
		 * Select geral das tabelas
		 *
		 * @package Model
		 * @author Guilherme Barbosa Lima
		 **/
		class Vizualiza{
			/**
			 * undocumente
			 *
			 * @return string
			 * @author Guilherme Barbosa Lima
			 **/
			function select($tabela){
				$pdo=conectar();
				$selGeral=$pdo->prepare('select * from '.$tabela);
				return $selGeral;
			}
		} // END class 	
	

?>