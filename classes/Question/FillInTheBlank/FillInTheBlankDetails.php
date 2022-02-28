<?php

namespace iSpringSolutions\Question\FillInTheBlank;

class FillInTheBlankDetails extends FillInTheBlankSurveyDetails
{
    protected function createBlank()
    {
        return new FillInTheBlankDetailsBlank();
    }
}