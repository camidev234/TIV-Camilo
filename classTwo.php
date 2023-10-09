<?php

// Define a class named Teacher
class Teacher {
    // Declare private properties to store document type and document number
    private string $doc_type;
    private string $document;

    // Constructor method to initialize the object with doc_type and document values
    public function __construct(string $doc_type, string $document) {
        $this->doc_type = $doc_type;
        $this->document = $document;
    }

    // Getter method for retrieving the document type
    public function getDocType() {
        return $this->doc_type;
    }

    // Setter method for updating the document type
    public function setDocType(string $doc_type) {
        $this->doc_type = $doc_type;
    }

    // Getter method for retrieving the document number
    public function getDocument() {
        return $this->document;
    }
    
    // Setter method for updating the document number
    public function setDocument(string $document) {
        $this->document = $document;
    }
}

// Create a new Teacher object with "cc" as the doc_type and "101310" as the document number
$teacher_one = new Teacher("cc", "101310");

// Display the document type of the teacher using the getDocType method
echo $teacher_one->getDocType();
echo $teacher_one->getDocument();
$teacher_one->setDocType('TI');
$teacher_one->setDocument('101102');

$teacher_two = new Teacher("TI", "930778");
echo $teacher_two->getDocType();
echo '</br>';
echo $teacher_two->getDocument();
echo '</br>';
$teacher_three = new Teacher("TI", "417310");

echo $teacher_three->getDocType();
echo '</br>';
echo $teacher_three->getDocument();
echo '</br>';
$teacher_fourth = new Teacher("CE", "102459");

echo $teacher_fourth->getDocType();

echo '</br>';
$teacher_fourth->getDocument();
echo '</br>';
$teacher_five = new Teacher("cc", "300313");

echo $teacher_five->getDocType();

echo '</br>';

$teacher_five->getDocument();
?>
