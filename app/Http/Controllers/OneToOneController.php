<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Country;
use App\Models\Location;

class OneToOneController extends Controller
{
    public function oneToOne(){
        //$country = Country::find(1);

        $country = Country::where('name','Brasil')->get()->first();

        echo $country->name;

        $location = $country->location;
        
        echo "<hr>{{$location->latitude}}<br/>";
        echo "<hr>{{$location->longitude}}<br/>";
    }

    public function oneToOneInverse(){
        $latitude = 123;
        $longitude = 321;

        $location = Location::where('latitude', $latitude)->where('longitude', $longitude)
            ->get()->first();

        $country = $location->country;    

        echo $country->name;
    }

    public function oneToOneInsert(){
        $dataForm = [
            'name' => 'Belgica',
            'latitude' => '1',
            'longitude' => '2'
        ];

        $country = Country::create($dataForm);

        //1
        // $dataForm['country_id'] = $country->id;
        // $location = Location::create($dataForm);

        //2
        // $location = new Location;
        // $location->latitude = $dataForm['latitude'];
        // $location->longitude = $dataForm['longitude'];
        // $location->country_id = $country->id;]
    

        //3
        $location = $country->location()->create($dataForm);



        $location->save();
    }
}
