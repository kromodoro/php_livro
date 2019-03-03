<html>
<body>
	<?php 

		/*
		* Desenvolvido por: Kromodoro
		* Data: 03/03/2019
		*/

		$a = 1;
		$b = 3;
		$c = 5;
		$res1 = ++$b - $a;
		$res2 = $c- + $a;
		$res3 = -$a + $c++;
		echo "A = $a <br> B = $b <br> C = $c <br> <br>";
		echo "Res1 = $res1 <br> Res2 = $res2 <br> Res3 = $res3 <br>";

	 	/*
			A variável $res1 recebeu o valor gerado pela expressão ++$b - $a, ou seja, a variável $b foi incrementada (passou do 3 para 4) e desse novo valor de $b foi subtraido o valor da variável $a, que vale 1. O resultado foi 4-3 = 1. O 3 foi atribuido áveriável $res1.

			A variável $res2 recebeu o valor gerado pela expressão $c-- + $a. Houve um pós-decremento na variável $c, ou seja, primeiro foi feita a soma da variável $c com à variável $a, e o resultado da variável $c foi decrementado. Ao terminar a execução dessa linha a variável $res2 ficou com o valor da soma  $c + $a, que vale 5+1=6, e à variável $c, que possuía o valor 5 passou a valer 4 após o decremento.

			A variável $res3 recebeu o valor gerado pela expressão --$a + $c++. Houve um pré-decremento na variável $a, que passou de 1 para 0, e esse valor foi somado ao valor da variável $c, resultando em: 0+4=4. Esse resultado (4) foi atribuido a variável $res3, como você pode notar na figura apresentada. Após realizada essa operação foi feito o pós-incremento da variável $c, que passou de 4 para 5.
 	 	*/
	 ?>

</body>
</html>