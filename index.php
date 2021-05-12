<?php 
class Product {
    public $name;
    public $brand;
    public $price;
    public $description;
    public $available;
    public $packages;
    public $gift;

    public function __construct($name, $brand, $price, $available, $gift)
    {
        $this->name = $name;
        $this->brand = $brand;
        $this->price = $price;
        $this->available = $available;
        $this->gift = $gift;
    }

    public function IsAGift($gift)
    {
        if ($gift == true) {
            $this->packages = 'special';
        } else {
            $this->packages = 'regular';
        }
    }
}

class Toys extends Product {
    public $age;
    public $gender;
    public $number_player;
    public $languages;
    public $batteries_included;

    public function __construct($name, $brand, $price, $available, $gift, $age, $gender, $number_player, $languages)
    {
        parent::__construct($name, $brand, $price, $available, $gift);
        $this->age = $age;
        $this->gender = $gender;
        $this->number_player = $number_player;
        $this->languages = $languages;
    }

    public function IsAGift($gender)
    {
        if ($gender == 'male') {
            $this->packages = 'blue';
        } elseif ($gender == 'female') {
            $this->packages = 'pink';
        } else {
            $this->packages = 'regular';
        }
    }
}

$chromecast = new Product('Chromecast', 'Google', 39.00, true, false);
$chromecast->IsAGift(false);
echo "Package required for ". "$chromecast->name is: ". "$chromecast->packages". "<br>";


$barbie = new Toys('Barbie', 'Mattel', 26.99, true, true, '3 years -', 'female', 1, 'ita');
$barbie->IsAGift('female');
echo "Package required for ". "$barbie->name is: ". "$barbie->packages";
?>

