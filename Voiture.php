<?php

declare(strict_types=1);

class Voiture implements Stringable
{
    public static array $voitures = [];

    public function __construct(
        public string $marque,
        public string $modele
    ) {
        self::$voitures[] = $this;
    }

    public function charger(): void
    {
        echo "La {$this} charge<br>";
    }


    public function __toString(): string
    {
        return "{$this->marque} {$this->modele}";
    }

    public static function chargerTout(): void
    {
        foreach(self::$voitures as $voiture)
        {
         $voiture->charger();
        }
    }
}
