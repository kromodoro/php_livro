<?php 
	
	/*
	* Desenvolvido por: Kromodoro
	* Data: 12/02/2019
	*/

	/*
		É possível até que seja exibida uma mensagem de aviso, informando que existe uma variável não defininca (UNDEFINIED VARIABLE). Isso ocorre porque o PHP procurará pelo valor de uma variável chamada $xcolor, que na verdade não existe, e por isso nada será mostrado nesse local. Para resolver esse problema existem duas maneiras. A primeira é a seguinte:
	*/

	$x = "tri";
	echo "Eusou ${x}color";
	/*
		Uma maneira é colocar a variável entre chaves para que o PHP saiba onde termina o identificador.
	*/
 ?>