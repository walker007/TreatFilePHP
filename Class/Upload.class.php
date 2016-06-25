<?php

class Upload {

private $Arquivo;
private $UniType
private $Pasta;
private $Erro;
private $Retorno;

function __construct(string $Pasta, $Type = null){
 $this->Pasta = $Pasta;
 $this->UniType = (isset($Type) ? $Type : false);
}

public function File(array $Arquivo){
 $this->Arquivo = $Arquivo;
$this->ChkArq();
}

private function ChkArq(){
switch ($this->Arquivo['type']){
case 'image/jpg':
$this->Erro = null;
$this->Retorno = "Image";
$this->UpImg();
break;

case 'video/mpeg':
$this->Erro = "Tipo Ainda não Suportado";
$this->Retorno = false;
break;

default:
$this->Retorno = false;
$this->Erro = "O tipo de arquivo é desconhecido ou inválido, Certifique-se de mandar somente arquivos autorizados";
break;
}

}

private function UpImg(){
if($this->UniType != false){
 if($this->UniType = $this->Retorno){
}else{
$this->Erro = "O Tipo enviado não é permitido";
$this->Retorno = null;
}

}else{
 //Exec
}

}

}
