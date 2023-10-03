<?php 

include ('.\..\02.10.2023_Php\MathQuestion');

$question1 = new MathQuestion(['dasjk', 5 , 'nb'], 'Mathe', 'Wie lautet die Frage', 'XxXxXxXxXx', false);

echo ( $question1->getQuestionCategory() . ', '. $question1->getQuestionText() . ', ' . $question1->getDiscriptionQuestion(). ', '. $question1->getCheckedAnswerUser() . '. ')

?>