<?php

namespace iSpringSolutions\Question\MultipleChoiceText;

class MultipleChoiceTextDetails extends MultipleChoiceTextSurveyDetails
{
    protected function createBlank()
    {
        return new MultipleChoiceTextDetailsBlank();
    }
}