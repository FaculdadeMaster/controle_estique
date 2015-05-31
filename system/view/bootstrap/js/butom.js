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
	
	
	
})();