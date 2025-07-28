<?php

require_once 'VehicleBase.php';
require_once 'VehicleActions.php';
require_once 'FileHandler.php';

class VehicleManager extends VehicleBase implements VehicleActions {
    use FileHandler;

    public function addVehicle($data) {
        $vehicle = $this-> readFile();
        $vehicle[] = $data;
        $this->writeFile($vehicle);
        



    }

    public function editVehicle($id, $data) {
        
    }

    public function deleteVehicle($id) {
        
    }

    public function getVehicles() {
       return $this->readFile();
    }

    // Implement abstract method
    public function getDetails() {
        
    }
}
