<?php 

class Employee{
    public $name;
    public $age;
    public $salary;
    public function show()
    {
        $result = [
            "Name" => $this->name,
            "Age" => $this->age,
            "Salary" => $this->salary
        ];
        return $result;
    }
    public function showStr($str)
    {
        echo $str." Вывод";
    }
}

$Employee1 = new Employee;

$Employee1->name = "Artem";
$Employee1->age = 21;
$Employee1->salary = 50000;

print_r($Employee1->show());

$Employee2 = new Employee;

$Employee2->name = "Eric";
$Employee2->age = 26;
$Employee2->salary = 2000;

print_r($Employee2->showStr("Капец"));

echo $Employee1->salary + $Employee2->salary."<br>";
echo $Employee1->age + $Employee2->age;
?>