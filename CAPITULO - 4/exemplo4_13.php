<?php 
	
	/*
	* Desenvolvido por: Kromodoro
	* Data: 03/03/2019
	*/

	/*
		OBJETOS

		Dentro das classes temos funções definidas. Criamos uma variável para instanciar uma classe, e essa variável é chamada de objeto. Um objeto pode acessar funções definidas dentro de uma classe.
	*/

		class Teste{
			function Saudacao(){
				echo "Oi pessoal!";
			}
		}

		$objeto = new Teste; //$objeto se torne uma instância da classe Teste
		$objeto->Saudacao();

	/*
		Ao criar uma intância da classe Teste na variável $objeto, podemos acessar as funções definidas dentro da classe.
	*/
 ?>