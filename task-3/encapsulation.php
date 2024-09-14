<?php
class Employee
{
    private $name;
    private $position;
    private $salary;

    public function __construct($name, $position, $salary)
    {
        $this->name = $name;
        $this->position = $position;
        $this->setSalary($salary);
    }

    // Getter for name

    public function getName()
    {
        return $this->name;
    }

    // Setter for name

    public function setName($name)
    {
        $this->name = $name;
    }

    // Getter for position

    public function getPosition()
    {
        return $this->position;
    }

    // Setter for position

    public function setPosition($position)
    {
        $this->position = $position;
    }

    // Getter for salary

    public function getSalary()
    {
        return $this->salary;
    }

    // Setter for salary with validation

    public function setSalary($salary)
    {
        if ($salary < 0) {
            throw new Exception("Salary cannot be negative.");
        }
        $this->salary = $salary;
    }
    //Display employee details

    public function displayEmployeeInfo()
    {
        echo "Name :" . $this->getName() . "</br>";
        echo "Position :" . $this->getPosition() . "</br>";
        echo "Salary :" . $this->getSalary() . "</br>";
    }
}
// Example usage
try {
    $employee = new Employee("Hira Babu", "PHP Developer", 50000);
    $employee->displayEmployeeInfo();
} catch (Exception $e) {
    echo "Error" . $e->getMessage();
}
