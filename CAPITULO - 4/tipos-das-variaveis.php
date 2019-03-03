<?php 
	
	/*
	* Desenvolvido por: Kromodoro
	* Data: 19/02/2019
	*/

	/*
		No PHP existem variáveis dos tipos numéricas, alfanuméricas(STRINGS), arrays e objetos.

		#NUMÉRICAS
			As variáveis numéricas podem possuir valores inteiros ou reais (ponto flutuante). Uma variável é definida como numérica no momento em que atribuimos um valor numérico a ela.

		$numero =10;
		$x = 5;
		$numero_hexa = 0x0b; //Valor em hezadecimal
		$y = 15.002;
		$a = 200.3.

		#ALFANUMÉRICOS
			São cadeias de caracteres que, podem ser delimitadas por aspas simples (') ou aspas duplas (").Quando utilizamos aspas duplas, podemos incluir caracteres de controle no meio da STRING.

			$nome ='Claudiomar';
			$profissao = "Pedreiro";
			$texto = "Boa tarde!\nSeja bem vindo ao meu site.";

		#ARRAYS
			As variáveis comuns (também chamadas de variáveis escalares) podem armazenar apenas um valor por vez. Um array (vetor) pode armazenar vários valores ao mesmo tempo, pois se trata de uma estrutura de armazenamento que, assim como as variáveis, possui um identificador, mas além disso há um índice associado (que pode ser um número ou um texto), que cada índice indica uma posição de memória em que fica armazenado um elemento do array. O índice deve aparecer entre colchetes ([]) logo após o identificador do array.
			
				$vetor[0] = 30;
				$vetor[1] = 40;
				$vetor[5] = 50;
				$vetor[15] = 60;

			Se não colocarmos o índice do vetor entre colchetes, o PHP procurará o último índice utilizado e o incrementará, armazenando assim o valor na posição seguinte do array.
			
				$vet[] = "Grêmio";
				$vet[] = "Campeão";

			Nesse exemplo teremos o valor "GRÊMIO" armazenado em $vet[0] e o valor "CAMPEÃO" armazenado em $vet[1].

			Até agora só vimos exemplos em que o índice do array é um valor numérico, mas o índice também pode ser um texto, e nesse caso o texto é chamado de chave associativa.

				$vetor["time"] = "Grêmio";
				$vetor["titulo"] = "Campeão da América";
				$vetor["ano"] = 1995;

			Repare que cada posição do array pode ser de um tipo diferente. Os valores das posições referenciadas por TIME e TITULO são do tipo STRING, mas o valor da posição referenciada por ANO é numérico. Outra coisa que pode acontecer é o array possuir índices numéricos e STRINGS ao mesmo tempo. Não há problema nenhum em usar os dois tipos de índices no mesmo array.
			
			Existem também as matrizes, que são arrays multidimensionais. Essas estruturas de amazenamento também possuem um único identificador, mas possuem dois ou mais índices para referenciar um posição de memória. Imagine que queremos armazenar na memória os nomes dos melhores clubes de futebol brasileiro, separando po Estado e cidades. podemos fazer iss utilizando um array bidimensional. 

			$clube["RS"]["PortoAlegre"] = "Grêmio";
			$clube["RS"]["Caxias"] = "Juventude";
			$clube["RS"]["BentoGonçalves"] = "Esportivo";
			$clube["MG"]["BeloHorizonte"] = "Atlético";
			$clube["MG"]["NovaLima"] = "Vila Nova";
			$clube["MG"]["Ipatinga"] = "Ipatinga";
			$clube["SP"]["SaoPauli"] = "Corinthians";
			$clube["SP"]["Americana"] = "Rio Branco";



	*/






 ?>