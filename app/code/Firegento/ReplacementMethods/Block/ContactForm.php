<?php

namespace Firegento\ReplacementMethods\Block;

class ContactForm extends \Magento\Contact\Block\ContactForm
{


    /**
     * Returns action url for contact form
     *
     * @return string
     */
    public function getFormAction()
    {
        return $this->getUrl('contact/index/post', ['_secure' => true, 'firegento' => 'munich']);
    }
}