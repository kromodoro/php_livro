<?php 
	/*
	* Desenvolvido por: Kromodoro
	* Data: 08/03/2019
	*/

	/*
		OPERADORE TERNÁRIO
		É uma forma abreviada de usar o comando condicional IF, que veremos mais adiante. Uma condição é avaliada, e, se ela for verdadeira, atribui-se um valor à variável, e se a condição for falsa atribui-se um outro valor. A sintaxe é a seguinte:

		COND ? EXP1 : EXP2

		Vamos ver um exemplo de uso desse operador, embora seja mais recomendado utilizar o comando condicional IF, por ser mais simples de usar.

		$nota = ($frequencia >= 0.75) ? ($nota + 2) : ($nota - 2);

		Quando o PHP executar a linha de uso desse operador, se a variável $frequencia possuir um valor maior ou igual a 0,75, a variável $nota será aumentada de duas unidades caso o contrário haverá a diminuição de duas unidades. Escrevendo essa mesma operação por meio do comando IF, temos o seguinte código:

		if ($frequencia >= 0.75){
			$nota = $nota + 2;
		}else{
			$nota = $nota - 2;
		}
	*/
 ?>