<?php
class Car {
    function Car() {
        $this->model = "Tesla";
    }
}

// create an object
$Lightning = new Car();

// show object properties
echo $Lightning->model;
?>

//Version3 code adding
<?php
    // Switch Statement Example
    switch ($i) {
        case "free":
            echo "i is free";
            break;
        case "code":
            echo "i is code";
            break;
        case "camp":
            echo "i is camp";
            break;
        default:
            echo "i is freecodecamp";
            break;
    }
