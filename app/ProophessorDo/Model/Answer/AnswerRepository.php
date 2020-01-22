<?php


namespace Prooph\ProophessorDo\Model\Answer;


interface AnswerRepository
{
    public function add(Answer $answer);
    public function get(AnswerId $answerId): Answer;
}