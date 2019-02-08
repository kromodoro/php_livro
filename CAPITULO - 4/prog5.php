<html>
<body>
	<?php 

		/*
		* Desenvolvido por: Kromodoro
		* Data: 08/02/2019
		*/

		/*
			Você já deve ter visto em outras linguagens que para gerar um quebra de linha em algum texto devemos inserir o carctere \n. Isso não é necessário quando utilizamos as aspas simples como delimitador. Se quisermos inserir uma quebra de linha em um texto com aspas simples, basta das um ENTER no meio do texto, e você verá o resultado na sáida do programa.
		*/
		echo '<p align=center>Isto é um teste 
		Estou aprendendo a escrever textos com aspas simples!</p>';

		/*
			É importante deixar bem claro que as quebras de linha existentes no meio do texto serão apresentadas apenas se a sáida do programa for em formato texto, ou seja, no formato HTML você não verá nenhuma quebra de linha ao executar a página.

			Se você pedir para vizualizar o código-fonte da página (control + U), será possível ver a quebra de linha. 

			Se o seu objetivo é apresentar quebras de linha no formato HTML , para que sejam mostradas na tela, deve-se usar a tag <br> do HTML.  
		*/ 

			echo "<br>";
			echo "Isto é um teste";
			echo "<br>";
			echo "Coloquei uma quebra de linha";
	 ?>
</body>
</html>