<?php 
include ('C:\xampp\htdocs\02.10.2023_Php\Question');
$question1 = new Question(['dasjk', 5 , 'nb'], 'Mathe', 'Wie lautet die Frage', 'XxXxXxXxXx', false);

echo ( $question1->getQuestionCategory() . ', '. $question1->getQuestionText() . ', ' . $question1->getDiscriptionQuestion(). ', '. $question1->getCheckedAnswerUser() . '. ')

?>