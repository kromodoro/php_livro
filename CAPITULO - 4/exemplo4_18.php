<?php 
	/*
	* Desenvolvido por: Kromodoro
	* Data: 08/03/2019
	*/

	$num = 5;
	$resultado = 8 + 3 * 2 + ++$num;
	echo "$num<br>";
	echo $resultado;

	/*
		Observer que o operador (++) tem prioridade mais alta que os oepradores + e *, por isso a primeira operação realizada pelo PHP foi o incremento do valor da variável $num. O segundo operador de maior prioridade no exemplo apresentado foi 3*2. Após esses duas operações, ficamos com a soma 8+6+6. Note que temos dois operadores iguais (de adição), portanto, como têm a mesma prioridade, a expressão é avaliada da esquerda para a direita: 8+6 = 14. E depois 14+6 = 20.

		Como vimos na tabela anterior os operadores de multiplicação (*) e o resto da divisão (%) têm a mesma precedência. Nesses casos é muito importante a utilização deparênteses para evitar resultados não desejados. 
	*/
 ?>