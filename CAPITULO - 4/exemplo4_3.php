<html>
<body>
	<?php 

		/*
		* Desenvolvido por: Kromodoro
		* Data: 09/02/2019
		*/

		/*
			CONSTANTES são valores que são predefinidos no início do programa, e que não mudam ao longo de sua execução.
		*/

		// bool define (string nome, misto valor [,bool case_insensitive])

		define("meunome","kromodoro");
		define("peso", 96);
		echo "O meu nome é ". meunome;
		echo "<br>";
		echo "O meu peso é ".peso." quilos";

		/*
			Note que no exemplo que acabamos de ver, referenciamos as constantes diretamente pelo nome que escolhemos, e não utilizamos na frente delos o símbolo $, pois esse símbolo é utilizado apenas para representar varáveis.
		
			CONSTANTE 	 | DESCRIÇÃO
			  TRUE 		 | Valor verdadeiro (utilizado para comparação).
			  FALSE 	 | Valor falso.
			__FILE__ 	 | Contém o nome do script que está sendo executado.
			__LINE__ 	 | Contém o número da linha do script que está sendo executado.
			PHP_VERSION  | Contém a versão corrente do PHP.
			PHP_OS 		 | Nome do sistema operacional no qual o PHP está rodando.
			E_ERROR 	 | Exibe um ero ocorrido em um script. A execução é interrompida.
			E_WARNING 	 | Exibe uma mensagem de aviso do PHP. A execução não pára.
			E_PARSE 	 | Exibe um erro de sintaxe. A execução é interrompida.
			E_NOTICE 	 | Mostra que ocorreu algo, mas não necessariamente um erro. A execução não pára.

		*/


	 ?>
</body>
</html>