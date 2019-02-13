<?php 
	
	/*
	* Desenvolvido por: Kromodoro
	* Data: 13/02/2019
	*/

	/*
		Em diversas ocasiões é muito útil criarmos variáveis dinamicamente, ou seja, durante a execução do programa. Essa técnica funciona da seguinte maneira: utiliza-se o valor  de uma variável para servir como identificador para outra variável. Para isso utilizamos duas vezes o símbolo $, ou seja, devemos usar $$.
	*/

	$texto = "Porto Alegre";
	$futuro_identificador = "cidade";
	$$futuro_identificador = "$texto";

	echo "<h2 align='center'>";
	echo "Minha cidade é $cidade";
	echo "</h2>";

	/*
		Veja que a variável $cidade foi criada dinamicamente. Primeiro o valor "CIDADE" foi atribuído a variável $futuro_identificador, e depois com o uso de $$ o valor "CIDADE" tornou-se o identificador da variável recém-criada. A variável criada $cidade recebeu o valor da variável $texto, e logo após essa valor foi mostrado na tela após a frase minha cidade é Porto Alegre.
	*/
 ?>