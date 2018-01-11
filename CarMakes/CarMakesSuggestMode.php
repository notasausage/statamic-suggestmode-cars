<?php

namespace Statamic\Addons\CarMakes;

use Statamic\Addons\Suggest\Modes\AbstractMode;

class CarMakesSuggestMode extends AbstractMode
{
    public function suggestions()
    {
        $car_makes = [
            ['value' => 'Acura', 'text' => 'Acura'],
            ['value' => 'Alfa Romeo', 'text' => 'Alfa Romeo'],
            ['value' => 'Datsun', 'text' => 'Datsun'],
            ['value' => 'Honda', 'text' => 'Honda'],
            ['value' => 'Infiniti', 'text' => 'Infiniti'],
            ['value' => 'Isuzu', 'text' => 'Isuzu'],
            ['value' => 'Lexus', 'text' => 'Lexus'],
            ['value' => 'Mazda', 'text' => 'Mazda'],
            ['value' => 'Mitsubishi', 'text' => 'Mitsubishi'],
            ['value' => 'Nissan', 'text' => 'Nissan'],
            ['value' => 'Scion', 'text' => 'Scion'],
            ['value' => 'Suzuki', 'text' => 'Suzuki'],
            ['value' => 'Toyota', 'text' => 'Toyota'],
            ['value' => 'Subaru', 'text' => 'Subaru'],
            ['value' => 'Audi', 'text' => 'Audi'],
            ['value' => 'BMW', 'text' => 'BMW'],
            ['value' => 'Mercedes-Benz', 'text' => 'Mercedes-Benz'],
            ['value' => 'Opel', 'text' => 'Opel'],
            ['value' => 'Porsche', 'text' => 'Porsche'],
            ['value' => 'Volkswagen', 'text' => 'Volkswagen'],
            ['value' => 'Abarth', 'text' => 'Abarth'],
            ['value' => 'DR Motor Company', 'text' => 'DR Motor Company'],
            ['value' => 'Ferrari', 'text' => 'Ferrari'],
            ['value' => 'Fiat', 'text' => 'Fiat'],
            ['value' => 'Lamborghini', 'text' => 'Lamborghini'],
            ['value' => 'Lancia', 'text' => 'Lancia'],
            ['value' => 'Maserati', 'text' => 'Maserati'],
            ['value' => 'Mazzanti', 'text' => 'Mazzanti'],
            ['value' => 'Pagani', 'text' => 'Pagani'],
            ['value' => 'CT&T', 'text' => 'CT&T'],
            ['value' => 'Hyundai', 'text' => 'Hyundai'],
            ['value' => 'Kia', 'text' => 'Kia'],
            ['value' => 'Oullim', 'text' => 'Oullim'],
            ['value' => 'Renault Samsung', 'text' => 'Renault Samsung'],
            ['value' => 'Proto', 'text' => 'Proto'],
            ['value' => 'Ssangyong', 'text' => 'Ssangyong'],
            ['value' => 'Alpine', 'text' => 'Alpine'],
            ['value' => 'Bugatti', 'text' => 'Bugatti'],
            ['value' => 'Citroën', 'text' => 'Citroën'],
            ['value' => 'DS', 'text' => 'DS'],
            ['value' => 'Peugeot', 'text' => 'Peugeot'],
            ['value' => 'Renault', 'text' => 'Renault'],
            ['value' => 'Venturi', 'text' => 'Venturi'],
            ['value' => 'Koenigsegg', 'text' => 'Koenigsegg'],
            ['value' => 'Saab', 'text' => 'Saab'],
            ['value' => 'Volvo', 'text' => 'Volvo']
        ];

        return $car_makes;
    }
}
