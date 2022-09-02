<?php
class Empregado {

    private $nome;
    private $sobrenome;
    private $salario;

    public function Empregado($salario, $nome = "SEM NOME", $sobrenome = "SEM SOBRENOME") {
        $this->setnome($nome);
        $this->setsobrenome($sobrenome);
        $this->setsalario($salario);
    }

    public function Aumentosalario() { $this->salario += $this->salario * 10 / 100; }

    public function getnome() { return $this->nome; }

    public function setnome($nome) { $this->nome = $nome; }

    public function getsobrenome() { return $this->sobrenome; }

    public function setsobrenome($sobrenome) { $this->sobrenome = $sobrenome; }

    public function getsalario() { return $salario; }

    public function setsalario($salario) { $this->salario = $salario < 0 ? 0 : $salario; }
}

?>