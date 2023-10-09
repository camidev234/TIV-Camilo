<?php

class Student{

    public string $doc_type;
    public string $document;
    public string $name;
    public string $last_name;
    public string $email;
    public int $age;
    public bool $is_active;
    public string $weight;

    public function __construct(string $doc_type, string $document, string $name, string $last_name, string $email, int $age, bool $is_active, string $weight) {
        $this->doc_type = $doc_type;
        $this->document = $document;
        $this->name = $name;
        $this->last_name = $last_name;
        $this->email = $email;
        $this->age = $age;
        $this->is_active = $is_active;
        $this->weight = $weight;
    }

    
}

$student_one = new Student("cc", "101310", "Camilo", "Acevedo", "Camilo22acevedo@gmail.com", 17, true, '67,5');

echo $student_one->doc_type;
echo '</br>';
echo $student_one->document;
echo '</br>';
echo $student_one->name;
echo '</br>';
echo $student_one->last_name;
echo '</br>';
echo $student_one->email;
echo '</br>';
echo $student_one->age;
echo '</br>';
echo $student_one->is_active;
echo '</br>';
echo $student_one->weight;

?>