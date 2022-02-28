<?php

namespace iSpringSolutions\Question\MultipleChoiceText;

use DOMElement;
use iSpringSolutions\Question\AnswersCollection;

class MultipleChoiceTextSurveyDetailsBlank extends AnswersCollection
{
    /**
     * @var int default = -1
     */
    public $userAnswerIndex = -1;

    public function initFromXmlNode(DOMElement $node)
    {
        parent::initFromXmlNode($node);

        $this->userAnswerIndex = $node->hasAttribute('userAnswerIndex') ? $node->getAttribute('userAnswerIndex') : -1;
    }
}