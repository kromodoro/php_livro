<?php 
	
	/*
	* Desenvolvido por: Kromodoro
	* Data: 09/02/2019
	*/

	$num = 5000;
	function testa_escopo1(){
		global $num;
		$num +=5;
		echo $num."<br>";
	}
	echo $num."<br>";
	testa_escopo1();

	/*
		Ao executa o exemplo anterior, os valores mostrados na tela serão 5000 e 5005, pois no início da função testa_escopo1 foi indicado que a variável era a mesma utilizada globalmente. Desse modo todas as alterações feitas na variável $num dentro da função alteraram o valor que existia nessa variável global.
	*/

 ?>