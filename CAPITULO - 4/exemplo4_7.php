<?php 

	/*
	* Desenvolvido por: Kromodoro
	* Data: 12/02/2019
	*/

	/*
		Se tivermos uma STRING contendo somente números o PHP somará normalmente esse valor com outra variável do tipo numérico. Se houver textos e números em uma STRING, o PHP utilizará somente a parte em que estão os números para efetuar operações aritméticas. Exemplo:

		$string = "5";
		$numero = 3;
		$texto = "3 vezes campeão";

		Se somarmos $numero + $string, o resultado será 8. Se somarmos, por exemplo, 3.45+$string o resultado será 8.45. Se somarmos $numero+$texto, o resultado será 6, pois somente a parte numérica da STRING será considerada.

		CONVERSOR				| DESCRIÇÃO
		(INT),(INTEGER)			| Converte para inteiro
		(REAL),(FLOAT),(DOUBLE) | Converte para ponto flutuante
		(STRING) 				| Converte para STRING
		(ARRAY)					| Converte em array (vetor)
		(OBJECT)				| Converte em objeto

		O conversor terá o tipo daquela variável que aparece imediatamente após ele, conforme mostra o exemplo a seguir:
	*/

		$x = 50;
		$y = 2.35;
		$soma = (int) $y+$x;
		echo $soma;

	/*
		Nesse exemplo a variável $y, que é do tipo FLOAT, é convertida para inteiro por meio do conversor INT. Se quiséssemos converter o resultado de toda uma expressão para inteiro, bastaria colocar os parenteses para delimitar a expressão cujo resultado deve ser convertido.

		$soma = (int) ($y+$x);
	*/
 ?>


