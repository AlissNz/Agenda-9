<?php
require_once 'Pessoa.php';
class Professor extends Pessoa
{
 private $profissao;
 public function setProfissao($profissao)
 {
 $this->profissao = $profissao;
 }
 public function getProfissao()
 {
 return $this->profissao;
 }
}
?>
