<?php
    
    class Person{
        public $name;public $surname; public $dateOfBirth; public $email; public $age;
        public function __Person(){
            $name = "";
            $surname = "";
            $dateOfBirth = "";
            $email = "";
            $age = "";
        }
        public function __construct($name,$surname,$dateOfBirth,$email,$age){
            $this->name = $name;
            $this->surname = $surname;
            $this->dateOfBirth = $dateOfBirth;
            $this->email = $email;
            $this->age = $age;
        }

        public function createPerson(){

        }

        public function loadPerson(){
            
        }

        public function savePerson(){

        }

        public function deletePerson(){

        }

        public function loadAllPeople(){

        }

        public function deleteAllPeople(){

        }
    }
    $servcerName = "localhost";
    $serverUser = "root";
    $conn = new mysqli($servcerName,$serverUser,"","person");
    if($conn->connect_error)
        die("Connection Failed: " . $conn->connect_error);
    echo "Connection Successfully";

    $sql_String = "SELECT * FROM personinfo WHERE 'Age' < 19";
    $sql_Command = mysqli_query($conn,$sql_String);


    while ($result  = mysqli_fetch_array($sql_Command)) {
        for ($i=0; $i < count($result); $i++) { 
            echo $result[$i];
        }
    }
    $conn -> close();
    $obj = new Person("Ivan","Bekker","18 April","asd@gmail.com","18");
?>