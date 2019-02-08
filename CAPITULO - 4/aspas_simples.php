<?php 

	/*
	* Desenvolvido por: Kromodoro
	* Data: 08/02/2019
	*/

	echo '<p align=center> texto utilizando aspas simples</p>';

	/*
		Porém devemos tomar cuidado com textos que possuem o caractere (') em sua sequência de caracteres,c omo, por exemplo, o seguinte:

		'Welcome the jhon's page'

		Como existe um aspa semplies no meio da sequência de caracteres, o PHP vai interpretá-la como delimitador de finalização do texto, e isso causará um erro de execução. Essa problema pode ser facilmente resolvido, inserindo antes da aspa o carctere de controle \ (barra invertida), que indica ao PHP que aquela aspa deve ser tratada como um texto comum, e não como um delimitador.
	*/
 ?>