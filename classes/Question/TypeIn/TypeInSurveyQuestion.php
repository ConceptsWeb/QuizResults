<?php

namespace iSpringSolutions\Question\TypeIn;

use DOMElement;
use iSpringSolutions\Question\Question;

class TypeInSurveyQuestion extends Question
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
            $this->userAnswer = trim($node->getAttribute('userAnswer'));
        }
    }
}