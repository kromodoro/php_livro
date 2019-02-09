<?php 
	
	/*
	* Desenvolvido por: Kromodoro
	* Data: 09/02/2019
	*/

	/*
		ESCOPO DAS VARIÁVEIS Funções geralmente são trechos de código que utilizamos com frequência, e para que não tenhamos de repetir o código a toda hora, cria-se uma rotina com aquele código, e quando necessário ativa-se essa rotina.
			Quando uma variável ´utilizada dentro de uma função, pode haver uma outra variável com o mesmo nome que é utilizada em outra função, ou no código do programa principal. São espaços de memória diferentes, e cada uma funciona dentro do seu contexto, ou seja, a variável usada dentro da função funciona só ali dentro. Fora dali seu valor não é acessível em nenhuma outra parte do programa.

		No entenado, se quisermos, podemos usar dentro de uma função o valor de uma variável existente também no programa principal, e para isso há duas formas:

		1) dinifi-la como global no início da função

		2) utilizar o array predefinidio $GLOBALS, que utiliza os nomes das variáveis como chave associativa.

	*/
		$num = 5000;
		function testa_escopo(){
			$num += 5;
			echo $num."<br>";
		}
		echo $num."<br>";
		testa_escopo();

		/*
			Após a execução do exemplo serão mostrados na tela os valores 5000 e na linha de baixo 5. Dependendo da configuração do seu PHP, ele poderá mostrar até uma mensagem de aviso, informando que existe uma variável não definida (Undefined Variable). Isso ocorre porque a variável $num existente dentro da função testa_escopo é válida somente dentro da função, e quando somamos seu conteúdo (que dentro da função é nulo) com 5, temos como resultado o 5. O comando echo executado fora da função mostrará o valor da variável $num atribuído no início (5000), pois as alterações feitas dentro da função não alteram o valor da variável global.
		*/
 ?>