<?php

class Upload {

private $Arquivo;
private $Pasta;
private $Erro;
private $Retorno;

function __construct(string $Pasta){
 $this->Pasta = $Pasta;
}

public function File(array $Image){
 $this->Arquivo = $Image;
$this->ChkArq();
}

private function ChkArq(){
switch ($this->Arquivo['type']){
case 'image/jpg':
$this->Erro = null;

break;
default:
$this->Retorno = false;
$this->Erro = "O tipo de arquivo é desconhecido ou inválido, Certifique-se de mandar somente arquivos autorizados";
break;
}
}
}
