<?php

namespace iSpringSolutions\Question\Matching;

use DOMElement;

class Match
{
    public $premiseIndex;
    public $responseIndex;

    public function initFromXmlNode(DOMElement $node)
    {
        $this->premiseIndex = $node->getAttribute('premiseIndex');
        $this->responseIndex = $node->getAttribute('responseIndex');
    }
}