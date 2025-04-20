<?php
class Pessoa
{
 private $nome;
 private $cpf;
    private $rg;
    private $endereco;

 public function setNome($nome)
 {
 $this->nome = $nome;
 }
 public function getNome()
 {
 return $this->nome;
 }
    public function setRg($rg)
    {
        $this->rg = $rg;
    }
    public function getRg()
    {
        return $this->rg;
    }

    public function setEndereço($endereco)
    {
        $this->endereco = $endereco;
    }
    public function getEndereço()
    {
        return $this->endereco;
    } 

 public function setCpf($cpf)
 {
 $this->cpf = $cpf;
 }
 public function getCpf()
 {
 return $this->cpf;
 }
}


?>
