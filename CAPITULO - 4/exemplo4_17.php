<html>
<body>
	<?php 
		/*
		* Desenvolvido por: Kromodoro
		* Data: 08/03/2019
		*/

		if (empty($nome) OR empty($email) OR empty($cpf)){
			echo "Você deve preencher os campos NOME, E-MAIL e CPF!";
			exit;

		/*
			Nesse exemplo temos uma expressão sendo avaliada. A função EMPTY(), que significa vazio em português, retorna verdadeiro se a variável estiver vazia, e retorna falso se houver algo na variável. Então estamos testando se a variável $nome está vazia ou a variável $email está vazia ou a variável $cpf está vazia. Se pelo menos uma das três estiver vazia o resultado será verdadeiro, e isso fará com que seja impressa a mensagem "Você deve preencher os campos NOME, E-MAIL e CPG!", e logo após o programa será encerrado por meio do comando EXIT.
		*/
		}
	 ?>
</body>
</html>