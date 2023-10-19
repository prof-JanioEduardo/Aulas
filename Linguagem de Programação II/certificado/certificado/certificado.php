<?php
$objeto = new Certificado($_REQUEST);
$objeto->exibirCertificado();
class Certificado {
    public $nome;
    public $curso;
    public function __construct($arDados){
        $this->nome = $arDados["nome"]; 
        $this->curso = $arDados["curso"]; 
      
    }

    public function exibirCertificado(){
        $texto  = "Certificamos que o(a) aluno(a) <b>".$this->nome ."</b>"; 
        $texto .=" realizou a formação no curso de ";
        $texto .= "<b>".$this->curso."<b>";
        echo $texto;
    }


}
?>