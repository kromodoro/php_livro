<?php 
	
	/*
	* Desenvolvido por: Kromodoro
	* Data: 08/02/2019
	*/

	/*
		As aspas duples são muito parecidas com as aspas simples. Uma diferença importante entre esses dois tipos de aspas é que, utilizando aspas duplas, podemos fazer uma interpolação de váriaveis .
	*/

		$palavra = "teste";
		$frase = "Isto é um $palavra";
		echo $frase;

	/*
		Outra diferença entre as aspas simples e duplas é que, utilizando aspas duplas como delimitadores, podemos incluir sequências de caracteres de controle nos dados alfanuméricos. A tabela a seguir mostra alguma sequências de controle que podem ser inseridas quando utilizamos aspas duplas:

	* CONTROLE   | SIGNIFICADO
	*	 \"		 | Insere no texto o caractere "
	*    \n 	 | Nova linha
	*	 \r 	 | Retorno de carro (carriage return)
	* 	 \t 	 | Tabulação
	*	 \$ 	 | Insere no texto o sÍimbolo $
	* 	 \\ 	 | Insere no texto o caractere \
	* 	 \0nnn   | Caractere ASCII octal
	* 	 \xnn 	 | Caractere ASCII hexadecimal
	*/

	/*
		Além disso, dentro de um dados alfanumérico delimitado por aspas duplas podemos inserir normalmente o caractere ' (aspas simples).

		"Welcome to the John's page"

		Para resolver o problem com as aspas duplas segue:

		"Estou colocando \"aspas duplas\" dentro de um texto"
	*/

 ?>