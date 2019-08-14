<?php
class Pricemetry_Mqment_Block_Mqment
    extends Mage_Core_Block_Abstract
    implements Mage_Widget_Block_Interface
{

    /**
     * Produces digg link html
     *
     * @return string
     */
    protected function _toHtml()
    {

        return '<div id="pm-widget-container" data-label="'.Mage::getStoreConfig('mQment_options/general/label_button').'" style="'.Mage::getStoreConfig('mQment_options/general/style').'"></div>
                ';
    }
}