<?php

namespace iSpringSolutions\Question\FillInTheBlank;

use DOMElement;
use iSpringSolutions\Question\AnswersCollection;

class FillInTheBlankSurveyDetailsBlank extends AnswersCollection
{
    public $userAnswer;

    public function initFromXmlNode(DOMElement $node)
    {
        parent::initFromXmlNode($node);

        $this->userAnswer = trim($node->getAttribute('userAnswer'));
    }
}