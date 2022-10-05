<?php
class Car {
    private float $tank;

    public function setTank(float $tank): self
    {
        $this->tank = $tank;
        return $this;
    }

    public function getTank(): float {
        return $this->tank;
    }

    public function ride(int $km): self {
        $this->tank = ($this->tank - ($km/20));
        return $this;
    }
}
