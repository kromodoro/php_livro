<?php 
	/*
	* Desenvolvido por: Kromodoro
	* Data: 08/03/2019
	*/

	$num = 7;
	$resultado = 8 * ($num%2);
	echo $resultado;

	/*
		Agora o resultado mostrado não será 0, e sim 8. Isso porque determinamos por meio dos parênteses que primeiro deveria ser realizada a operação do resto da divisão de 7 por 2, que resultou  em 1. Depois disso foi feita a multiplicação desse valor por 8, resultando em 8 * 1.
	*/
 ?>