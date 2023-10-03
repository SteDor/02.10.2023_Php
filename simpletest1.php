<?php 

include ('.\..\02.10.2023_Php\MathQuestion');
include ('.\..\02.10.2023_Php\MultipleChoiceQuestion.php');

$MultiQuestion = new MultipleChoiceQuestion(['protected', 'private', 'public', 'abstract'], 'Coding', 'Welche dieser Begriffe sind "access modifiers" in PHP? ','Choose the right answers: ', [true, true,true, false]);
//for ($i=0;$i<sizeof($MultiQuestion->Answers);$i++){
//    echo ($MultiQuestion->Answers[$i] . ', <br>');
//};
//'<br>';
//$MultiQuestion->CountRightAnswers($MultiQuestion->RightAnswers);
//echo '<br>';
//echo (var_dump($MultiQuestion->RightAnswers[0]) . '<br>');
echo ('<h3>'.$MultiQuestion->get_QuestionText(). '</h3>');
echo ($MultiQuestion->getDiscriptionQuestion(). '<br><br>');
?>

<input type="checkbox" id="answer1" name="answer1" value="<? var_dump($MultiQuestion->RightAnswers[0])?>"> 
<label for="answer1"> <?= $MultiQuestion->Answers[0]?></label><br>
<input type="checkbox" id="answer2" name="answer2" value="<? var_dump($MultiQuestion->RightAnswers[1])?>">
<label for="answer2"> <?= $MultiQuestion->Answers[1]?></label><br>
<input type="checkbox" id="answer3" name="answer3" value="<? var_dump($MultiQuestion->RightAnswers[2])?>">
<label for="answer3"> <?= $MultiQuestion->Answers[2]?></label><br> 
<input type="checkbox" id="answer4" name="answer4" value="<? var_dump($MultiQuestion->RightAnswers[3])?>">
<label for="answer4"> <?= $MultiQuestion->Answers[3]?></label><br>
<br>
<button type="submit" >Submit Answer</button>

<?php 
// echo ($MultiQuestion::Get_NumberOfRightAnswers() . '<br>');
// echo ( $MultiQuestion->getQuestionCategory() . ', '. $MultiQuestion->getQuestionText() . ', ' . $MultiQuestion->getDiscriptionQuestion(). ', '. $MultiQuestion->getCheckedAnswerUser() . '. ');


//$question1 = new MathQuestion(['dasjk', 5 , 'nb'], 'Mathe', 'Wie lautet die Frage', 'XxXxXxXxXx', false);
//
//echo ( $question1->getQuestionCategory() . ', '. $question1->getQuestionText() . ', ' . $question1->getDiscriptionQuestion(). ', '. $question1->getCheckedAnswerUser() . '. ')

?>