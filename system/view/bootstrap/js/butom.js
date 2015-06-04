// JavaScript Document
(function(){
	
	
	document.getElementById("button1").onclick=function(){
		var mainContent = document.getElementById("mainContent");
		mainContent.innerHTML="<object type='text/html' data='home.php' width='1170' height='1000''></object>";
		
	};

	document.getElementById("button2").onclick=function(){
		var mainContent = document.getElementById("mainContent");
		var width = screen.width;  
		mainContent.innerHTML="<object type='text/html' data='cads_cliente.php' width='1170' height='1000'></object>";
		
	};

	document.getElementById("button3").onclick=function(){
	var mainContent = document.getElementById("mainContent");
	var width = screen.width;  
	mainContent.innerHTML="<object type='text/html' data='cads_funcionario.php' width='1170' height='1000'></object>";
		
	};

	document.getElementById("button4").onclick=function(){
	var mainContent = document.getElementById("mainContent");
	var width = screen.width;  
	mainContent.innerHTML="<object type='text/html' data='cads_ordem.php' width='1170' height='1000'></object>";
		
	};


	document.getElementById("button5").onclick=function(){
	var mainContent = document.getElementById("mainContent");
	var width = screen.width;  
	mainContent.innerHTML="<object type='text/html' data='ordem_aberta.php' width='1170' height='1000'></object>";
		
	};

	document.getElementById("button6").onclick=function(){
	var mainContent = document.getElementById("mainContent");
	var width = screen.width;  
	mainContent.innerHTML="<object type='text/html' data='ordem_fechadas.php' width='1170' height='1000'></object>";
		
	};
	
	document.getElementById("button7").onclick=function(){
	var mainContent = document.getElementById("mainContent");
	var width = screen.width;  
	mainContent.innerHTML="<object type='text/html' data='client_cads.php' width='1170' height='1000'></object>";
		
	};

	document.getElementById("button8").onclick=function(){
	var mainContent = document.getElementById("mainContent");
	var width = screen.width;  
	mainContent.innerHTML="<object type='text/html' data='funci_cads.php' width='1170' height='1000'></object>";
		
	};
	
	
})();