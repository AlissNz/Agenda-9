<?php
include_once 'Professor.php';
$p = new Professor();
$p->setNome(random_name(Array("João", "Maria", "José", "Ana", "Carlos")));
function random_name($array) {
    return $array[array_rand($array)];
}
$p->setCpf("222.222.222.22");
$p->setEndereço("Rua das Flores, 421");
$p->setRg(random_int(10000000, 99999999));
$p->setProfissao(random_proffession(Array("Professor", "Engenheiro", "Médico", "Arquiteto", "Advogado")));
function random_proffession($array) {
    return $array[array_rand($array)];
}
echo 'Nome: ' . $p->getNome() . '<br>';
echo 'RG: ' . $p->getRg() . '<br>';
echo 'CPF: ' . $p->getCpf() . '<br>';
echo 'Endereço: ' . $p->getEndereço() . '<br>';
echo 'Profissao: ' . $p->getProfissao() . '<br>';
echo '<br>';
?>