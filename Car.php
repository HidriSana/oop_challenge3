<?php
require_once('Vehicle.php');
class Car extends Vehicle
{
    //Attributes

    private string $energyType;
    private int $energyLevel;
    //Methods
    public function __construct(string $color, int $nbSeats, string $energyType)
    {
        parent::__construct($color, $nbSeats);
        $this->setEnergyType($energyType);
    }

    public const ALLOWED_ENERGIES = [
        'fuel',
        'electric'
    ];
    public function getEnergyType(): string
    {
        return $this->energyType;
    }
    public function setEnergyType(string $energyType)
    {
        if (in_array($energyType, self::ALLOWED_ENERGIES)) {
            $this->energyType = $energyType;
        }
        return $this;
    }
    public function getEnergyLevel(): int
    {
        return $this->energyLevel;
    }
    public function setEnergyLevel(int $energyLevel): void
    {
        $this->energyLevel = $energyLevel;
    }
}
