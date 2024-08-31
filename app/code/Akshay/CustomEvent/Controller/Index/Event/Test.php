<?php

namespace Akshay\CustomEvent\Controller\Index\Event;

use Magento\Framework\App\Action\Action;

class Test extends Action
{
    public function execute ()
    {
        $textDisplay = new \Magento\Framework\DataObject(array('text' => 'Hello World'));
		$this->_eventManager->dispatch('custom_event_display_text', ['ce_text' => $textDisplay]);
        echo $textDisplay->getText();
    }
}