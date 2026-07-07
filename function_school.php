<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Function and Class</title>
</head>
<body>

<?php

class School
{
    public $name;
    public $yearStablish;
    public $location;
    public $courses;
    public $population;

    // Constructor
    public function __construct($name, $yearStablish, $location, $courses, $population)
    {
        $this->name = $name;
        $this->yearStablish = $yearStablish;
        $this->location = $location;
        $this->courses = $courses;
        $this->population = $population;
    }

    // Method to display school information
    public function displayingInfo()
    {
        echo "<h2>School Information</h2>";
        echo "Name: " . $this->name . "<br>";
        echo "Year Established: " . $this->yearStablish . "<br>";
        echo "Location: " . $this->location . "<br>";
        echo "Courses: " . $this->courses . "<br>";
        echo "Population: " . $this->population . "<br>";
    }
}

// Create an object
$school1 = new School(
    "Central Philippine Nazarene College",
    "1964",
    "St. Mary's Drive, Apas, Cebu 6000 Cebu",
    "Theology and Education",
    "150"
);

// Call the method
$school1->displayingInfo();

?>

</body>
</html>