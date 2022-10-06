<?php
interface PoolTempsInterface {
    public function getActualTemp(): float;
    public function getLastDaysTemps(): array;
    public function setHeater(bool $switch);
}

class PoolTemps implements PoolTempsInterface {
    public bool $isActive = false;
    private int $temperature;
    private array $averageTemperature;

    public function __construct(int $temperature, array $averageTemperature) {
        $this->temperature = $temperature;
        $this->averageTemperature = $averageTemperature;
    }

    public function getActualTemp(): float
    {
        return $this->temperature;
    }

   public function getLastDaysTemps(): array
   {
       return $this->averageTemperature;
   }

   public function setHeater(bool $switch)
   {
       if ($switch) {
           $this->activateHeater();
       }
   }

   public function activateHeater() {
        $stock = 0;
        foreach ($this->averageTemperature as $val => $item) {
            $stock = $stock + $item;
            echo $stock;
        }

        if ($stock / count($this->averageTemperature) > 20 && $this->temperature >= 25) {
            $this->isActive = true;
        }
   }
}

$poolTemps = new PoolTemps(25, [19, 20, 21, 16, 19, 23, 20]);
$poolTemps->activateHeater();

var_dump($poolTemps->isActive); // false

$poolTemps2 = new PoolTemps(26, [24, 26, 27, 25, 27, 23, 20]);
$poolTemps2->activateHeater();

var_dump($poolTemps2->isActive); // true