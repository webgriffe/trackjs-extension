<?php

class Webgriffe_TrackJs_Block_Script extends Mage_Core_Block_Template
{
    protected function _toHtml()
    {
        $helper = Mage::helper('webgriffe_trackjs');
        if (!$helper->isEnabled()) {
            return '';
        }

        $token = $helper->getToken();
        return <<<HTML
<!-- BEGIN {Track::js} -->
<script type="text/javascript">window._trackJs = { token: '$token' };</script>
<script type="text/javascript" src="https://d2zah9y47r7bi2.cloudfront.net/releases/current/tracker.js"></script>
<!-- END {Track::js} -->
HTML;
    }
}
