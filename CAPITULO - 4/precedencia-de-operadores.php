<?php 
	/*
	* Desenvolvido por: Kromodoro
	* Data: 08/03/2019
	*/

	/*
		PRECEDÊNCIA DE OPERADORES
		Para evitar erros de lógica em seus programas é fundamental que você conheça a ordem utilizada pelo PHP para tratar os operadores.

		OPERADOR 	     | DESCRIÇÃO
		- ! ~ ++ -- 	 | Negativo, não-lógico, inversão de bits, incremento e decremento.
		* / % 			 | Multiplicação, divisão e resto da divisão
		+ - .			 | Adição, subtração e concatenação
		<< >> 			 | Deslocamento binário
		> < >= <=        | maior, menor, maior ou igual, menor ou igual.
		== != <> 		 | Igual e diferente
		&				 | AND binário
		^				 | XOR binário
		| 				 | OR binário
		&& 				 | AND lógico
		|| 				 | OR lógico
		?: 				 | Operador ternário
		=, +=, -=, *=, 	 | Operadores de atribuição 
		/=, %=, &=, ~=, 
		<<= ,>>= ,^= 	
		AND 			 | AND lógico (de menor prioridade)
		XOR 			 | XOR lógico (de menor prioridade)
		OR 				 | OR lógico (de menor prioridade)

		É importante lembrar que primeiro o PHP executará todas as operações que estiverem entre parênteses. Se dentro dos parênteses houver diversas operações, a precedência de operadores será utilizada para definir a ordem. Depois de resolver todas as operações que aparecem entre parênteses, o PHP resolverá o resto da expressão baseando-se na tabela anterior para determinar a ordem de avaliação dos operadores.
		
		Quando houver operadores da mesmo prioridade em uma expressão, e não existirem parênteses o PHP resolverá a expressão da esquerda para a direita.
	*/
 ?>