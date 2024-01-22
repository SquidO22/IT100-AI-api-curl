<pre><?php

class Vehicle {
  private $hp;
  private $torque;
  public $color;
  private $miles;
  private $make;
  private $model;
  private $year;
  private $doors;
  private $fuel;
  private $transmission;
  public $category;
  private $mileageLog = [[0, "Initial Mileage"]];
  public $options = [
                    "Power Windows",
                    "Power Doors",
                    "Power Steering",
                    "Floor Mats",
                    "12 Volt Outlet"
                    ];

  public function __construct($make, $model, $year, $color, $doors=4, $miles=0) {
    $this->make = $make;
    $this->model = $model;
    $this->year = $year;
    $this->color = $color;
    $this->doors = $doors;
    $this->addMileageEntry($miles,"Initial Miles Entry");
  }

  public function getHP() {
      return $this->hp;
  }

  public function getTorque() {
      return $this->torque;
  }

  public function getColor() {
      return $this->color;
  }

  public function getMiles() {
      return $this->miles;
  }

  public function getMake() {
      return $this->make;
  }

  public function getModel() {
      return $this->model;
  }

  public function getYear() {
      return $this->year;
  }

  public function getDoors() {
      return $this->doors;
  }

  public function getFuel() {
      return $this->fuel;
  }

  public function getTransmission() {
      return $this->transmission;
  }

  public function getCategory() {
      return $this->category;
  }

  public function getMileageLog() {
      return $this->mileageLog;
  }

  public function addMileageEntry($miles, $description) {
      $this->mileageLog[] = [$miles, $description];
  }

  public function getOptions() {
      return $this->options;
  }
  
  public function setHP($hp) {
      $this->hp = $hp;
  }

  public function setTorque($torque) {
      $this->torque = $torque;
  }

  public function addMiles($miles) {
      $this->miles += $miles;
  }

  public function setDoors($doors) {
      $this->doors = $doors;
  }

  public function setFuel($fuel) {
      $this->fuel = $fuel;
  }

  public function setTransmission($transmission) {
      $this->transmission = $transmission;
  }

  public function setCategory($category) {
      $this->$category = $category;
  }
  
  public function addOption($option) {
      $this->options[] = $option;
  }

  public function delOption($option) {
      $key = array_search($option, $this->options);
      if ($key !== false) {
          unset($this->options[$key]);
          // Re-index the array to maintain a consistent structure
          $this->options = array_values($this->options);
      }
  }

  public function createFlyer() {
      // More to Come 
  }

//END CLASS
}


$BOB_Vehicle = new Vehicle("Jeep","Gladiator", "2021", "Snazzleberry", 4, 35500);

$BOB_Vehicle->setHP(320);
$BOB_Vehicle->setTorque(410);
$BOB_Vehicle->setHP(320);
$BOB_Vehicle->setTransmission("Automatic");
$BOB_Vehicle->setFuel("Diesel");

echo $BOB_Vehicle->getHP()."\n";
echo $BOB_Vehicle->getTorque()."\n";
echo $BOB_Vehicle->getTransmission()."\n";
echo $BOB_Vehicle->getFuel()."\n";

$BOB_Vehicle->addOption("Diesel");
$BOB_Vehicle->addOption("Android Auto");

$BOB_Vehicle->delOption("Floor Mats");

var_dump($BOB_Vehicle);

?></pre>