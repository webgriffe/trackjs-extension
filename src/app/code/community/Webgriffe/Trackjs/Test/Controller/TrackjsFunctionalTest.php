<?php


class Webgriffe_Trackjs_Test_Controller_TrackjsFunctionalTest extends EcomDev_PHPUnit_Test_Case_Controller
{
    /**
     * @loadFixture
     */
    public function testTrackScriptIsEmptyWhenTrackingIsDisabled()
    {
        $this->dispatch('');
        $this->assertLayoutBlockCreated('webgriffe_trackjs_script');
        $layout = $this->getLayout();
        $blockHtml = $layout->getBlock('webgriffe_trackjs_script')->toHtml();
        $this->assertEmpty($blockHtml);
    }

    /**
     * @loadFixture
     */
    public function testTrackScriptIsRenderedWhenTrackingIsEnabled()
    {
        $this->dispatch('');
        $this->assertLayoutBlockCreated('webgriffe_trackjs_script');
        $layout = $this->getLayout();
        $blockHtml = $layout->getBlock('webgriffe_trackjs_script')->toHtml();
        $this->assertNotEmpty($blockHtml);
        $this->assertContains('<!-- BEGIN {Track::js} -->', $blockHtml);
        $this->assertContains('window._trackJs = { token: \'1234567890qwertyuiop\' };', $blockHtml);
    }
}
