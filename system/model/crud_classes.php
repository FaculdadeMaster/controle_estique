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

        /**
         * inserção de ordem de serviço
         *
         * @return void
         * @author Guilherme Barbosa Lima
         **/
        function ordemservico($idcliente, $idfuncionario, $data, $valor, $obs){
                    $pdo=conectar();

            $insert=$pdo->prepare("insert into ordem_servico (idcliente_servico, idfuncionario, data_servico, valor_total,observacao, status_ordem) 
                values (:idcliente, :idfuncionario, :data,:valor,:obs,:status)");
            $insert->bindValue(":idcliente", $idcliente, PDO::PARAM_INT);
            $insert->bindValue(":idfuncionario", $idfuncionario, PDO::PARAM_INT);
            $insert->bindValue(":data", $data, PDO::PARAM_STR);
            $insert->bindValue(":valor", $valor);
            $insert->bindValue(":obs", $obs, PDO::PARAM_STR);
            $insert->bindValue(":status", 1, PDO::PARAM_INT);
     


            
           if ($insert->execute()){
            print "<SCRIPT>alert (\"Cadastro de ordem de servico realizado com sucesso!\")</SCRIPT>";
           
         }else{
            print "<SCRIPT>alert (\"Erro ao criar a ordem de serviço!\")</SCRIPT>";
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

        /**
         * classe de exclução
         *
         * @package model
         * @author Guilherme Barbosa Lima
         **/
        class Excluir{
            /**
             * excluir ordem de serviço
             *
             * @return void
             * @author Guilherme Barbosa Lima
             **/
            function excluirservico($idservico){
                $pdo=conectar();

                $del=$pdo->prepare("delete from ordem_servico where idordem_servico=:id");
                $del->bindValue(":id",$idservico, PDO::PARAM_INT);
                

                    if ($del->execute()){
            print "<SCRIPT>alert (\"Exclussão realizada com sucesso!\")</SCRIPT>";
           
         }else{
            print "<SCRIPT>alert (\"Erro na exclussão!\")</SCRIPT>";
            }    


            }

        } // END class 


        /**
         * classe de update em tabelas da aplicação
         *
         * @package model
         * @author Guilherme Barbosa Lima
         **/
        class Update{
            /**
             * update do status da odem de servico
             *
             * @return void
             * @author Guilherme Barbosa Lima
             **/
            function ordemfechada($idordem){

            $pdo=conectar();

            $up=$pdo->prepare("update ordem_servico set status_ordem=0 where idordem_servico=:id");
            $up->bindValue(":id",$idordem, PDO::PARAM_INT);
                           if ($up->execute()){
            print "<SCRIPT>alert (\"Ordem de Serviço fechada com sucesso!\")</SCRIPT>";
           
         }else{
            print "<SCRIPT>alert (\"Erro ao Fechar à Ordem de Serviço!\")</SCRIPT>";
            } 
            }
        } // END class 
	

?>