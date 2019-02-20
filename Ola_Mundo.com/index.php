
<?php

//Comando de saída

//echo "LALALALA";
//echo "Olá Mundo!";
//print ("LALALALA");

	//$vetor = $arrayName = array('Nao ligo' );
	//var_dump($vetor);

	//$vetor = $arrayName = array('Nao ligo' );
	//var_dump($vetor);

	//$nome = "Vivi";
	//$sobrenome = "Henrique";
	//echo "$nome, $sobrenome";
	// Dicas do professor 
	
	/* Nunca faça isso !!
	variaveis inicadas com números
	não deixe espaços nas variáveis
	não use caracteres especiais @#&*()%
	não crie variaveis com mais de 15 caracteres
	use palavras em minúsculo
	em variaveis compostas use a primeira letra da segunda palavra em maiúsculo ex: codPagto
	ou use underline ( _ ) para separar as palavras ex: cod_pagto */

	// Variaveis booleano

		//$exibir_nome = true;
		//if ($exibir_nome) {
		//	echo "Vivian Henrique";
		
		//$umidade = 91;
		
		//$vai_chover = ($umidade > 90 );

		//if ($vai_chover) {
		//	echo "Esta chovendo";
		

		//else {
		//	echo "Não esta chovendo";
		
	// Variavel do tipo numérico

		$a = 1234; // decimal
		$a = -1234; // negativo
		$a = 0123; // octagonal
		$a = 0x1a; // hexadecimal
		$a = 1.234; // ponto flutuante
		$a = 4e23; // notação cientifíca

	// Variável do tipo string

		//$variavel = 'Isto é um teste';
		//$variavel = "Isto é um teste";
		//echo "$variavel"; 

	// Variável do tipo array

		//$carros = array ("Palio", "Corsa", "Gol");
		//echo $carros[1];

	// Variável do tipo objeto

		/**
		 * 
		 */
		class Computador

		{
			var $cpu;

			function ligar()
			{
				echo "Ligando computador a {$this ->cpu}...";

			}
		}
		$obj = new Computador;
		$obj -> cpu = "500 mhz";
		$obj -> ligar();
?>
























