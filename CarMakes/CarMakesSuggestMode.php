<?php

namespace Statamic\Addons\CarMakes;

use Statamic\Addons\Suggest\Modes\AbstractMode;

class CarMakesSuggestMode extends AbstractMode
{
    public function suggestions()
    {
        $car_makes = [
            // Japan
            ['value' => 'Acura', 'text' => 'Acura'],
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
            // Germany
            ['value' => 'Audi', 'text' => 'Audi'],
            ['value' => 'BMW', 'text' => 'BMW'],
            ['value' => 'Mercedes-Benz', 'text' => 'Mercedes-Benz'],
            ['value' => 'Opel', 'text' => 'Opel'],
            ['value' => 'Porsche', 'text' => 'Porsche'],
            ['value' => 'Volkswagen', 'text' => 'Volkswagen'],
            // Italy
            ['value' => 'Abarth', 'text' => 'Abarth'],
            ['value' => 'Alfa Romeo', 'text' => 'Alfa Romeo'],
            ['value' => 'DR Motor Company', 'text' => 'DR Motor Company'],
            ['value' => 'Ferrari', 'text' => 'Ferrari'],
            ['value' => 'Fiat', 'text' => 'Fiat'],
            ['value' => 'Lamborghini', 'text' => 'Lamborghini'],
            ['value' => 'Lancia', 'text' => 'Lancia'],
            ['value' => 'Maserati', 'text' => 'Maserati'],
            ['value' => 'Mazzanti', 'text' => 'Mazzanti'],
            ['value' => 'Pagani', 'text' => 'Pagani'],
            // South Korea
            ['value' => 'CT&T', 'text' => 'CT&T'],
            ['value' => 'Hyundai', 'text' => 'Hyundai'],
            ['value' => 'Kia', 'text' => 'Kia'],
            ['value' => 'Oullim', 'text' => 'Oullim'],
            ['value' => 'Renault Samsung', 'text' => 'Renault Samsung'],
            ['value' => 'Proto', 'text' => 'Proto'],
            ['value' => 'Ssangyong', 'text' => 'Ssangyong'],
            // France
            ['value' => 'Alpine', 'text' => 'Alpine'],
            ['value' => 'Bugatti', 'text' => 'Bugatti'],
            ['value' => 'Citroën', 'text' => 'Citroën'],
            ['value' => 'DS', 'text' => 'DS'],
            ['value' => 'Peugeot', 'text' => 'Peugeot'],
            ['value' => 'Renault', 'text' => 'Renault'],
            ['value' => 'Venturi', 'text' => 'Venturi'],
            // Sweden
            ['value' => 'Jösse Car', 'text' => 'Jösse Car'],
            ['value' => 'Koenigsegg', 'text' => 'Koenigsegg'],
            ['value' => 'Saab', 'text' => 'Saab'],
            ['value' => 'Volvo', 'text' => 'Volvo'],
            // United Kingdom
            ['value' => 'Ascari', 'text' => 'Ascari'],
            ['value' => 'Aston Martin', 'text' => 'Aston Martin'],
            ['value' => 'Bentley', 'text' => 'Bentley'],
            ['value' => 'Bristol', 'text' => 'Bristol'],
            ['value' => 'David Brown', 'text' => 'David Brown'],
            ['value' => 'Jaguar', 'text' => 'Jaguar'],
            ['value' => 'Land Rover', 'text' => 'Land Rover'],
            ['value' => 'Lotus', 'text' => 'Lotus'],
            ['value' => 'McLaren', 'text' => 'McLaren'],
            ['value' => 'MINI', 'text' => 'MINI'],
            ['value' => 'Range Rover', 'text' => 'Range Rover'],
            ['value' => 'Rolls Royce', 'text' => 'Rolls Royce'],
            ['value' => 'Vauxhall', 'text' => 'Vauxhall'],
            // United States
            ['value' => 'AM General', 'text' => 'AM General'],
            ['value' => 'Anteros', 'text' => 'Anteros'],
            ['value' => 'Aurica', 'text' => 'Aurica'],
            ['value' => 'Buick', 'text' => 'Buick'],
            ['value' => 'BXR', 'text' => 'BXR'],
            ['value' => 'Chrysler', 'text' => 'Chrysler'],
            ['value' => 'Chevrolet', 'text' => 'Chevrolet'],
            ['value' => 'Cadillac', 'text' => 'Cadillac'],
            ['value' => 'Dodge', 'text' => 'Dodge'],
            ['value' => 'Elio Motors', 'text' => 'Elio Motors'],
            ['value' => 'Equus Automotive', 'text' => 'Equus Automotive'],
            ['value' => 'E-Z-GO', 'text' => 'E-Z-GO'],
            ['value' => 'Falcon', 'text' => 'Falcon'],
            ['value' => 'Faraday', 'text' => 'Faraday'],
            ['value' => 'Fisker', 'text' => 'Fisker'],
            ['value' => 'Ford', 'text' => 'Ford'],
            ['value' => 'GMC', 'text' => 'GMC'],
            ['value' => 'Hennessey', 'text' => 'Hennessey'],
            ['value' => 'Jeep', 'text' => 'Jeep'],
            ['value' => 'Karma', 'text' => 'Karma'],
            ['value' => 'Lincoln', 'text' => 'Lincoln'],
            ['value' => 'Local', 'text' => 'Local'],
            ['value' => 'Lucid Motors', 'text' => 'Lucid Motors'],
            ['value' => 'Lyons', 'text' => 'Lyons'],
            ['value' => 'Mosler', 'text' => 'Mosler'],
            ['value' => 'Niama-Reisser', 'text' => 'Niama-Reisser'],
            ['value' => 'Panoz', 'text' => 'Panoz'],
            ['value' => 'Polaris', 'text' => 'Polaris'],
            ['value' => 'Racefab', 'text' => 'Racefab'],
            ['value' => 'Ram', 'text' => 'Ram'],
            ['value' => 'Rossion', 'text' => 'Rossion'],
            ['value' => 'Shelby', 'text' => 'Shelby'],
            ['value' => 'SSC', 'text' => 'SSC'],
            ['value' => 'Tesla', 'text' => 'Tesla'],
            ['value' => 'Zimmer', 'text' => 'Zimmer']
        ];

        foreach($car_makes as $key => $row) {
            $value[$key]  = $row['value'];
            $text[$key] = $row['text'];
        }

        array_multisort($text, SORT_ASC, $car_makes);

        return $car_makes;
    }
}
