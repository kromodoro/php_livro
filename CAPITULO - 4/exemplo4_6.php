<?php 
	
	/*
	* Desenvolvido por: Kromodoro
	* Data: 12/02/2019
	*/

	$num = 5000;
	function testa_escopo1(){
		echo $GLOBALS["num"]."<br>";
		$GLOBALS["num"]++;
	}

	testa_escopo1();
	echo $num;

	/*
		Ao executar esse exemplo os valores mostrados na tela serão 5000 e 5001, pois no início da função testa_escopo1 imprimimos na tela o valor da variável global $num, que era de 5000. Logo após o valor da variável $num foi alterado devido ao incremento utilizando o array $GLOBALS com a chave associativa em um (1), passando o valor 5001.
	*/
 ?>