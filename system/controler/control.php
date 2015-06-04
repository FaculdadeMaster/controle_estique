<?php
	include "../model/crud_classes.php";

	$cds=new Cadastro();
	$ex=new Excluir();
	$upd=new Update();
	
	if (!empty($_POST['cadsCliente'])){

		$cds->clientes($_POST['formNome'], $_POST['formEndereco'], $_POST['formBairro'], $_POST['formCidade'], $_POST['formTele1'], $_POST['formTele2'],
			          $_POST['formEmail'], $_POST['formCep'], $_POST['formUf'], $_POST['formFax'], $_POST['formCnpjCpf'], $_POST['formTipoPessoa'] );

		//$pl->insert($_POST['dataForm'], $_POST['textForm'], $_POST['timeForm']);

	 
		header( "refresh:1;url=../view/cads_cliente.php" );

	}
	

		if (!empty($_POST['cadsFuncionario'])){

		$cds->funcionario($_POST['formNome'], $_POST['formCpf'], $_POST['formRg'], $_POST['formCidade'], $_POST['formBairro'], $_POST['formTelefone1'],
		$_POST['formTelefone2'], $_POST['formCelular'], $_POST['formEmail'], $_POST['formCargo'],  $_POST['formDepartemento'], $_POST['formDataNascimento'],
		$_POST['formCartTrab'], $_POST['formUf'], $_POST['formCep']);

		//$pl->insert($_POST['dataForm'], $_POST['textForm'], $_POST['timeForm']);

	 
		header( "refresh:1;url=../view/cads_funcionario.php" );

	}



		if (!empty($_POST['cadsOrdem'])){

		$cds->ordemservico($_POST['formIdCliente'], $_POST['formIdFuncionario'], $_POST['formData'],$_POST['formValor'],$_POST['formObs']);

		//$pl->insert($_POST['dataForm'], $_POST['textForm'], $_POST['timeForm']);

	 
		header( "refresh:1;url=../view/cads_ordem.php" );

	}



		if (!empty($_POST['excluir'])){

		$ex->excluirservico($_POST['excluir']);

		//$pl->insert($_POST['dataForm'], $_POST['textForm'], $_POST['timeForm']);

	 
		header( "refresh:1;url=../view/cads_ordem.php" );

	}


	    if (!empty($_POST['fechar'])){

		$upd->ordemfechada($_POST['fechar']);

		//$pl->insert($_POST['dataForm'], $_POST['textForm'], $_POST['timeForm']);

	 
		header( "refresh:1;url=../view/cads_ordem.php" );

	}
?>