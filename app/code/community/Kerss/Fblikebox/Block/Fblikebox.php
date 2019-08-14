<?php

/**
 * Kerss Infotech
 * Kerss Facebook Fanbox Magento Extension
 *
 * @category   Kerss
 * @package    Kerss_Fblikebox
 * @copyright  Copyright © 2015-2016 Kerss Infotech (http://kersstech.com/)
 */
class Kerss_Fblikebox_Block_Fblikebox extends Mage_Core_Block_Template implements Mage_Widget_Block_Interface {

    /**
     * Produce links list rendered as html
     *
     * @return string
     */
    protected function _toHtml() {
        $this->setTemplate('fblikebox/fblikebox.phtml');
        return parent::_toHtml();
    }

}
