<html>
<body>
	<?php 

		/*
		* Desenvolvido por: Kromodoro
		* Data: 03/03/2019
		*/

		$num = 15;
		$resultado1 = $num >> 1; //Desloca 1 bit para a direita
		$resultado2 = $num << 2; //Desloca 2 bits para a esquerda
		echo $resultado1;
		echo "<br>";
		echo $resultado2;  

		/*
			Após a execução desse programa, serã mostrados na tela os valores 7 e 60, que foram os valores armazenados respectivamente em $resultado1 e $resultado2. 
			Primeiro a variável $resultado1 recebeu o número 15 (1111 em binário) deslocado 1 bit para a direita, que resulta em 7 (0111 em binário). Na linha seguinte à variável $resultado2 recebeu o número 15 deslocado 2 bits para a esquerda, o que equivale a multiplicá-lo 2 vezes por 3, resultando e 15*2*2 = 60 (111100 em binário).
		*/
	 ?>
</body>
</html>