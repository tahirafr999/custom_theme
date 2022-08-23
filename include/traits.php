<?php 
trait student{
    public function sum(){
        echo "im doing sum";
    }
}

class principal{
    public function office(){
        echo "Principal is in Office";
    }
}

class teacher extends principal {
    use student;

    public function __construct(){
        echo 'Hi im construct function';
        
    }
}

$teacher = new teacher();   
$teacher->sum();
$teacher->office();
?>