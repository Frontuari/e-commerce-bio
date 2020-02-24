<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\API\BaseController;
use Illuminate\Http\Request;
use App\States;
use App\Regions;
use App\Cities;

class LocationController extends BaseController
{
    public function getStates() {
        $States = States::all();
        return $this->sendResponse($States);
    }

    public function getRegions() {
        $Regions = Regions::all();
        return $this->sendResponse($Regions);
    }

    public function getCities() {
        $Cities = Cities::all();
        return $this->sendResponse($Cities);
    }
}
