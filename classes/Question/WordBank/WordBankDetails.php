<?php

namespace iSpringSolutions\Question\WordBank;

class WordBankDetails extends WordBankSurveyDetails
{
    protected function getWordTagName()
    {
        return 'word';
    }

    protected function createWord()
    {
        return new WordBankDetailsWord();
    }
}