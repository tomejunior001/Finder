<?php
		require 'vendor/autoload.php'; //Possibilita carregar as classes necessárias

		use Symfony\Component\Finder\Finder; //Carregar o finder

	if($_POST){
    	if(isset($_POST['caminho'])){
        	caminho(); //Define que a função caminho() será passada, para não ter que usar ajax
    	}elseif(isset($_POST['nome'])){
        	nome(); //Define que a função nome() será passada, para não ter que usar ajax
    }
}

	function caminho(){

		echo "Projeto Finder ~ Francisco Tomé ~ Caminho Completo";

		$finder = new Finder(); //instanciando o finder

		$files = $finder->files()->in('files'); //Pegar arquivos do diretório proposto

		foreach($files as $file){ //Realizar tal operação para cada arquivo encontrado
			var_dump($file->getRealPath()); //Pegar caminho completo dos arquivos
		}
		
	}

	function nome(){


		echo "Projeto Finder ~ Francisco Tomé ~ Nome dos arquivos";

		$finder = new Finder(); //instanciando o finder

		$files = $finder->files()->in('files'); //Pegar arquivos do diretório proposto


		foreach($files as $file){ //Realizar tal operação para cada arquivo encontrado

			var_dump($file->getFileName()); //Pegar somente o nome dos arquivos
		}
		
	}

?>