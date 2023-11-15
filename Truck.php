<?php
require_once('Car.php');

class Truck extends Car
{
    //Attributes
    private int $storageCapacity;
    private int $currentCargo = 0;
    //Methods

    public function __construct(string $color, int $nbSeats, string $energyType, $storageCapacity)
    {
        parent::__construct($color, $nbSeats, $energyType);
        $this->storageCapacity = $storageCapacity;
    }
    public function getStorageCapacity(): int
    {
        return $this->storageCapacity;
    }
    public function setStorageCapacity($storageCapacity): void
    {
        $this->storageCapacity = $storageCapacity;
    }

    public function getCurrentCargo(): int
    {
        return $this->currentCargo;
    }
    public function setCurrentCargo(int $currentCargo): void
    {
        $this->currentCargo = $currentCargo;
    }

    public function isFull()
    {
        if ($this->currentCargo < $this->storageCapacity) {
            return 'In filling';
        } else {
            return 'Full';
        }
    }
}
