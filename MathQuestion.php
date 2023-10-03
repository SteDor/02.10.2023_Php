<?php 
require_once ('.\..\02.10.2023_Php\Question');
class MathQuestion extends Question {
    
    private $UserInput;
    private $Solution;


    function CreateRandomArithmeticTask() {
        echo 'Task created!';
    }
    function GetQuestion(){}
     
    function CheckAnswer(){}
     
    function GetAnswer(){}


	public function getSolution() {
		return $this->Solution;
	}

	public function setSolution($Solution): self {
		$this->Solution = $Solution;
		return $this;
	}


	public function getUserInput() {
		return $this->UserInput;
	}
	
	
	public function setUserInput($UserInput): self {
		$this->UserInput = $UserInput;
		return $this;
	}

}
?>