<?php
class Invoice {

    private $numero;
    private $descricao;
    private $quantidade;
    private $preco;

    public function Invoice($numero, $preco, $quantidade, $descricao = "SEM DESCRIÇÃO") {
        $this->setnumero($numero);
        $this->setdescricao($descricao);
        $this->setquantidade($quantidade);
        $this->setpreco($preco);
    }

    public function getInvoiceAmount() { return $this->getquantidade() * $this->getpreco(); }

    public function getnumero() { return $this->numero; }

    public function setnumero($numero) { $this->numero = $numero; }

    public function getdescricao() { return $this->descricao; }

    public function setdescricao($descricao) { $this->descricao = $descricao; }

    public function getquantidade() { return $this->quantidade; }

    public function setquantidade($quantidade) { $this->quantidade = $quantidade < 0 ? 0 : $quantidade; }

    public function getpreco() { return $this->preco; }

    public function setpreco($preco) { $this->preco = $preco < 0 ? 0 : $preco; }
}

?>