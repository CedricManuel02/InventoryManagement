<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body style="background-color: red;">
    <?php
    /*
    This is a multiline comment
    */

    class Person {
        public $firstName;
        public $lastName;

        public function __construct($firstName, $lastName){
            $this->firstName = $firstName;
            $this->lastName = $lastName;
        }

        public function displayName(){
            echo "My name is " . $this->firstName . " " . $this->lastName;
        }
    }

    $myObject = new Person("Cedric", "Manuel");

    $myObject->displayName();


    $string = "Hi my name is Cedric Gio Manuel";
    echo $string;
    $int = 22;
    echo $int;
    $double = 42.9;
    echo $double;
    $bool = true;
    echo $bool;
    $arr = array("firstName" => "Cedric", "lastName" => "Manuel" , "age" => 22, "gender" => "male");
    echo $arr["firstName"];

    $prog = array("JAVA", "C#", "Javascript", "React JS", "Node JS", "MySQL", "MongoDB");

    echo "<h1> Hi my name is ".$arr["firstName"] . " " . $arr["lastName"]."</h1>";
    echo "<h2>This is my tech stack progress</h2>";

    for($i = 0; $i < count($prog); $i++){
        print ($i + 1 . " ". $prog[$i] . "<br/>");
    }

    ?>
</body>
</html> 