<?php

namespace iSpringSolutions\Question\MultipleChoiceText;

use DOMElement;

class MultipleChoiceTextSurveyDetails
{
    /**
     * @var MultipleChoiceTextDetailsBlank[]
     */
    public $items;

    public function initFromXmlNode(DOMElement $node)
    {
        $childNodes = $node->getElementsByTagName('blank');
        foreach ($childNodes as $childNode)
        {
            $blank = $this->createBlank();
            $blank->initFromXmlNode($childNode);
            $this->items[] = $blank;
        }
    }

    protected function createBlank()
    {
        return new MultipleChoiceTextSurveyDetailsBlank();
    }
}