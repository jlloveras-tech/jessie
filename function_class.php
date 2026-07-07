<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Function and Class</title>
</head>
<body>

<?php

class Student
{
    public $name;
    public $course;
    public $yearLevel;
    public $grade;

    // Constructor
    public function __construct($name, $course, $yearLevel, $grade)
    {
        $this->name = $name;
        $this->course = $course;
        $this->yearLevel = $yearLevel;
        $this->grade = $grade;
    }

    // Method to display student information
    public function displayingInfo()
    {
        echo "<h2>Student Information</h2>";
        echo "Name: " . $this->name . "<br>";
        echo "Course: " . $this->course . "<br>";
        echo "Year Level: " . $this->yearLevel . "<br>";
        echo "Grade: " . $this->grade . "<br>";
    }
}

// Create an object
$student1 = new Student("Jessie", "BSN", "4th Year", 98);

// Call the method
$student1->displayingInfo();

?>

</body>
</html>