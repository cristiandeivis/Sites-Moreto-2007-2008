<?php
class imagens{
	var $nome, $img_original, $largura, $altura, $dir, $nome_final, $tipo, $nova_im;
	var $img_marca, $largura_marca, $altura_marca;
	function sem_acento($nome){
		$nome					=	strtolower($nome);
		$nome					= 	str_replace("á", "a", $nome);
		$nome					= 	str_replace("é", "e", $nome);
		$nome					= 	str_replace("í", "i", $nome);
		$nome					= 	str_replace("ó", "o", $nome);
		$nome					= 	str_replace("ú", "u", $nome);
		$nome					= 	str_replace("ç", "c", $nome);
		$nome					= 	str_replace("ü", "u", $nome);
		$nome					= 	str_replace("â", "a", $nome);
		$nome					= 	str_replace("ê", "e", $nome);
		$nome					= 	str_replace("ô", "o", $nome);
		$nome					= 	str_replace("ã", "a", $nome);
		$nome					= 	str_replace("õ", "o", $nome);
		$nome					= 	str_replace(" ", "", $nome);
		$this->nome 			=	$nome;
		return $nome;
	}
	function sem_acento1($nome){
		$nome					=	strtolower($nome);
		$nome					= 	str_replace("á", "a", $nome);
		$nome					= 	str_replace("é", "e", $nome);
		$nome					= 	str_replace("í", "i", $nome);
		$nome					= 	str_replace("ó", "o", $nome);
		$nome					= 	str_replace("ú", "u", $nome);
		$nome					= 	str_replace("ç", "c", $nome);
		$nome					= 	str_replace("ü", "u", $nome);
		$nome					= 	str_replace("â", "a", $nome);
		$nome					= 	str_replace("ê", "e", $nome);
		$nome					= 	str_replace("ô", "o", $nome);
		$nome					= 	str_replace("ã", "a", $nome);
		$nome					= 	str_replace("õ", "o", $nome);
		$nome					= 	str_replace("  ", " ", $nome);
		$nome					= 	str_replace("   ", " ", $nome);
		$this->nome 			=	$nome;
		return $nome;
	}
	//############################################
	//                upload
	//############################################
	
	//o nome do campo 'file' deve sempre ter o nome de 'imagem'.
	//Sao passados tres parametros, os dois primeiros dizem respeito
	//ao tamanho em pixels da imagem (tw = width, th = height) e o diretorio onde sera gravada a imagem.

	function upload($diretorio = "", $post = "imagem", $lugar = "", $tw = 3000, $th = 3000, $kb = 5000){
		$this->dir				=	$diretorio;
		$erro					=	"";
		if(empty($_FILES["$post"]["name"])){
			$erro = "Nenhuma imagem foi listada.<br>\n";

		} else {//senao faz outros testes

			//atribuindo outras variáveis à imagem
			$temp = $_FILES["$post"]["tmp_name"];
			if(!empty($lugar)){
				$nomeimg = strtolower(time().$lugar.substr($_FILES["$post"]["name"], -4));
			}else{
				$nomeimg = str_replace("á", "a", $_FILES["$post"]["name"]);
				//instanciando para fazer referencia a uma função desta classe
				$nomeimg = $this->sem_acento($nomeimg);
				$nomeimg = strtolower(time().$nomeimg);
			}

			//verificando se o arquivo enviado foi do tipo imagem
			if(!strstr($_FILES["$post"]["type"], "image/")){
				$erro = "Este upload não dá suporte a arquivos com esta extensão, ele aceita apenas arquivos gif, jpg e png<br>";


				//verificando se o tamanho em bytes é maior do que 70kb
			}

			//pegando o tamanho em pixels da imagem
			$px = GetImageSize($temp);
			if($_FILES["$post"]["size"]>$kb*1000) {
				$erro = "O arquivo enviado para o site não pode ter mais que ${kb}kb.<br>";

				//verificando o tamanho da imagem (parametros definidos na funcao)
			}

			if($px[0]>$tw OR $px[1]>$th) {
				$erro = "A imagem não pode ter mais de $th pixels de altura e/ou $tw pixels de largura<br>";

				//se passar por todos os testes ali em cima, envia a imagem para o diretório passado na funcao
			}
		
			$img = $diretorio.$nomeimg;
			if($erro == ""){
				if(!copy($temp, $img))
					$erro = "Algum erro ocorreu durante o envio da imagem para o nosso arquivo.<br>";
			}
			//pegando o tipo de arquivo do upload
			switch($_FILES["$post"]["type"]){
				case "image/png":
					$this->tipo		=	1;
					break;
				case "image/gif":
					$this->tipo		=	2;
					break;
				case "image/pjpeg":
					$this->tipo		=	3;
					break;
				case "image/jpeg":
					$this->tipo		=	3;
					break;
				case "image/jpg":
					$this->tipo		=	3;
					break;
			}
			//retornando
			$this->nome = $nomeimg;
			return $erro;
			}
	}
	//############################################
	//    abre e pega as dimensoes da img
	//############################################
	function inicia(){
		switch($this->tipo){
			case 1:
				$this->img_original 	=	imageCreateFromPNG($this->dir.$this->nome);
				break;
			case 2:
				$this->img_original 	=	imageCreateFromGIF($this->dir.$this->nome);
				break;
			case 3:
				$this->img_original 	=	imageCreateFromJPEG($this->dir.$this->nome);
				break;
		}

		$this->largura 			= 	ImageSX($this->img_original); 
		$this->altura 			= 	ImageSY($this->img_original);
	}
	//############################################
	//    redimensiona imagem
	//############################################
	function redimensiona($largura,$altura,$dir="", $m=0){//largura final, altura final, diretorio de destino (se tiver) e marca d'agua (se tiver)
		//calcula o novo tamanho da imagem 
		$lPC				=	$largura/$this->largura;  
		$aPC				=	$altura/$this->altura;
		($lPC>$aPC)?$PC=$aPC:$PC=$lPC;

		$nova_largura = ceil($this->largura*$PC);
		$nova_altura = ceil($this->altura*$PC);


		// redimensiona 
		$this->nova_im = imagecreatetruecolor((int)$nova_largura,(int)$nova_altura);          
		ImageCopyResampled($this->nova_im,$this->img_original,0,0,0,0,(int)$nova_largura,(int)$nova_altura,$this->largura,$this->altura);  
		//marca d'agua
		if($m==1){
			$this->marca_dagua();
		}
		//salva no disco 
		$nome = ereg_replace(".*/", "\\0pequena", $this->nome);
		$this->nome_final = $nome;
		ImageJPEG($this->nova_im, $dir.$nome); 
                           
		return array($dir,$nome);
	}
	//############################################
	//    corta
	//############################################
	function crop($largura,$altura,$dir="", $m=0){//largura final, algura final, diretorio de destino (se tiver) e marca d'agua (se tiver)
    	$lPC				=	$largura/$this->largura;  
		$aPC				=	$altura/$this->altura;
		($lPC>$aPC)?$PC=$lPC:$PC=$aPC;

		$nova_largura = ceil($this->largura*$PC);
		$nova_altura = ceil($this->altura*$PC);
		//posicionando o crop no centro
		//x
		$x	=	ceil(($nova_largura-$largura)/2);
		//y
		$y	=	ceil(($nova_altura-$altura)/2);
		// crop
		$this->nova_im = imagecreatetruecolor($largura,$altura);          
		ImageCopyResampled($this->nova_im,$this->img_original,-$x,-$y,0,0,(int)$nova_largura,(int)$nova_altura,$this->largura,$this->altura);  

		//marca d'agua
		if($m==1){
			$this->marca_dagua();
		}
		//salva no disco 
		$nome = ereg_replace(".*/", "\\0pequena", $this->nome);
		$this->nome_final = $nome;
		ImageJPEG($this->nova_im, $dir.$nome); 
                           
    	return array($dir,$nome);
	}
	//############################################
	//   inicializa os valores da marca dagua
	//############################################
	function marca_inicia($img, $x=0, $y=0){//x e y sao valores relativos a onde a img deve ser salva no bitmap e img é o arquivo da marca d'agua
		$this->x_marca		=	$x;
		$this->y_marca		=	$y;
		$this->img_marca	=	ImageCreateFromPNG($img);
		$this->largura_marca	= 	ImageSX($this->img_marca); 
		$this->altura_marca	= 	ImageSY($this->img_marca);
	}	
	//############################################
	//   adiciona marca d'agua
	//############################################
	function marca_dagua(){//Alvo é a imagem onde vai a marca
		if(($this->x_marca+$this->largura_marca)>$this->largura) $this->x_marca = ceil(($this->largura-$this->largura_marca)-10);
		if(($this->y_marca+$this->altura_marca)>$this->altura) $this->y_marca = ceil(($this->altura-$this->altura_marca)-10);
		ImageCopy($this->nova_im, $this->img_marca, $this->x_marca, $this->y_marca, 0, 0, $this->largura_marca, $this->altura_marca);
	}	
	//############################################
	//   deleta a img uploadeada
	//############################################
	function deleta(){
		ImageDestroy($this->img_original); //tira a img da memoria
		unlink($this->dir.$this->nome);// deleta a imagem upada
	}
}
?>