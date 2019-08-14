<?php

/**
 * Kerss Infotech
 * Kerss Facebook Fanbox Magento Extension
 *
 * @category   Kerss
 * @package    Kerss_Fblikebox
 * @copyright  Copyright © 2015-2016 Kerss Infotech (http://kersstech.com/)
 */
class Kerss_Fblikebox_Model_System_Config_Source_Tabs {

    /**
     * Options getter
     *
     * @return array
     */
    public function toOptionArray() {
        return array(
            array('value' => 'timeline', 'label' => Mage::helper('adminhtml')->__('Timeline')),
            array('value' => 'events', 'label' => Mage::helper('adminhtml')->__('Events')),
            array('value' => 'messages', 'label' => Mage::helper('adminhtml')->__('Message')),
        );
    }

    /**
     * Get options in "key-value" format
     *
     * @return array
     */
    public function toArray() {
        return array(
            'timeline' => Mage::helper('adminhtml')->__('Timeline'),
            'events' => Mage::helper('adminhtml')->__('Events'),
            'messages' => Mage::helper('adminhtml')->__('Message'),
        );
    }

}
