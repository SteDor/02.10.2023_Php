<?php 
class MultipleChoiceQuestion extends Question {

    public $NumberOfRightAnswers;
    public $Answers  = array('protected', 'private', 'public', 'abstract');
    public $RightAnswers = array(true, true,true, false);

    function __construct($Answers, $QuestionCategory, $QuestionText, $DiscriptionQuestion, $RightAnswers) {
        $this->Answers = $Answers;
        $this->QuestionCategory = $QuestionCategory;
        $this->QuestionText = $QuestionText;
        $this->DiscriptionQuestion = $DiscriptionQuestion;
        $this->RightAnswers =$RightAnswers;
        echo 'MultiQuestion created<br>';

        }

    public function CountRightAnswers($RightAnswers) {
        $NumberOfRightAnswers = 0; 
        for ($i=0; $i<sizeof($RightAnswers);$i++){
            if($RightAnswers[$i] == true){
                $NumberOfRightAnswers++;
            }
        }
        echo ('Count= '. $NumberOfRightAnswers);
        return $NumberOfRightAnswers;
    }



    function GetQuestion(){}
     
    function CheckAnswer(){}
    
    function GetAnswer(){}

    function get_NumberOfRightAnswers($NumberOfRightAnswers) {
        return $this->NumberOfRightAnswers;
      }
    
    public function set_NumberOfRightAnswers($NumberOfRIghtAnswers): self {
		$this->NumberOfRightAnswers = $NumberOfRIghtAnswers;
		return $this;
	}
    function get_AnswersArray($Answers ) {
        return $this->Answers ;
      }
    
    public function set_AnswersArray ($Answers ): self {
		$this->Answers  = $Answers ;
		return $this;
	}
    function get_RightAnswers($RightAnswers ) {
        return $this->RightAnswers;
      }
    
    public function set_RightAnswers ($RightAnswers): self {
		$this->RightAnswers  = $RightAnswers ;
		return $this;
	}
}
?>