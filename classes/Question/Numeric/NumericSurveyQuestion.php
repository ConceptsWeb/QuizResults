<?php

namespace iSpringSolutions\Question\Numeric;

use DOMElement;
use iSpringSolutions\Question\Question;

class NumericSurveyQuestion extends Question
{
    public function isGradedByDefault()
    {
        return false;
    }

    public function initFromXmlNode(DOMElement $node)
    {
        parent::initFromXmlNode($node);

        if ($node->hasAttribute('userAnswer'))
        {
            $this->userAnswer = $node->getAttribute('userAnswer');
        }
    }
}