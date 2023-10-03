<?php 

include ('.\..\02.10.2023_Php\MathQuestion.php');


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
<form action="" method="post">   
     <!-- Eine checkbox mit mehreren Auswahlmöglichkeiten -->
     <input type="checkbox" name="answer[]" value= <?= $MultiQuestion->Answers[0]?> > <?= $MultiQuestion->Answers[0]?><br>
     <input type="checkbox" name="answer[]" value= <?= $MultiQuestion->Answers[1]?> > <?= $MultiQuestion->Answers[1]?><br>
     <input type="checkbox" name="answer[]" value= <?= $MultiQuestion->Answers[2]?> > <?= $MultiQuestion->Answers[2]?><br>
     <input type="checkbox" name="answer[]" value= <?= $MultiQuestion->Answers[3]?> > <?= $MultiQuestion->Answers[3]?><br>
     <input type="submit" onclick="">
</form>
<?php 

$answer = $_POST["answer"];
if ($answer[3] == 'abstract'){
    echo 'Falsche Antwort';
}

if ($answer[0] == true && $answer[1] == true && $answer[2] == true) {
    echo 'Die Antwort ist richtig! ';
}
else {
    echo 'Falsche Antwort';
}

// if (isset($_POST['Submit'])){
// 
//          if (isset($_POST['isChecked'])){
//              foreach ($_POST['isChecked'] as $value) {
//                 array_push($userInputs);
//                  echo $value."<br>";
//              }            
// 
// }
// print_r($userInputs);
// var_dump($userInputs);
//for ($i=0;$i<sizeof($userInputs);$i++){
//    print_r ($userInputs[$i] . ', <br>');
//
//}
// }





// echo ($MultiQuestion::Get_NumberOfRightAnswers() . '<br>');
// echo ( $MultiQuestion->getQuestionCategory() . ', '. $MultiQuestion->getQuestionText() . ', ' . $MultiQuestion->getDiscriptionQuestion(). ', '. $MultiQuestion->getCheckedAnswerUser() . '. ');


//$question1 = new MathQuestion(['dasjk', 5 , 'nb'], 'Mathe', 'Wie lautet die Frage', 'XxXxXxXxXx', false);
//
//echo ( $question1->getQuestionCategory() . ', '. $question1->getQuestionText() . ', ' . $question1->getDiscriptionQuestion(). ', '. $question1->getCheckedAnswerUser() . '. ')

?>