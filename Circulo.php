<?php
class Circulo {

    private $x;
    private $y;
    private $raio;

    public function Circulo($raio,$x = 0, $y = 0 ) {
        $this->x = $x;
        $this->y = $y;
        $this->setRaio($raio);
    }
 
    public function area() { return pi() * ($this->raio * 2); }

    public function mexer($point) {
        $this->x = $point->getX();
        $this->y = $point->getY();
    }

    public function increase($value) { $this->setRaio($this->raio + $value); }

    public function decrease($value) { $this->setRaio($this->raio - $value); }

    public function getX() { return $this->x; }

    public function setX($x) { $this->x = $x; }

    public function getY() { return $this->y; }

    public function setY($x) { $this->y = $y; }

    public function getRaio() { return $this->raio; }

    public function setRaio($raio) { $this->raio = $raio < 0 ? 0 : $raio; }
}
?>