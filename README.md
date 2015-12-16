{Track::js} Magento Extension
=============================

[{Track::js}](https://trackjs.com/) is a Javascript errors monitoring service, this Magento extension allows to enable it.

[![Build Status](https://travis-ci.org/webgriffe/trackjs-extension.svg?branch=master)](https://travis-ci.org/webgriffe/trackjs-extension)

Installation
------------

Install the extension via [Composer](https://getcomposer.org/):

	{
		"require": {
			"webgriffe/trackjs-extension": "*"
		}
    	...
	    "repositories": [
    	    {
        	    "type": "vcs",
            	"url": "the/url/of/this/repo"
        	}
	    ],
    	...
	}

Or install with [modman](https://github.com/colinmollenhour/modman):
	
	$ modman clone the/url/of/this/repo
	
As usual clear Magento cache after installation.

Usage
-----

Login into admin panel and go to `System -> Configuration -> Advanced -> Developer`. Under `{Track::js} Javascript Error Monitoring` set `Enabled` to `Yes` and set your token in the `Token` field then save the configuration.

Also you have to edit manually the `page/html/head.phtml` template file of your theme to have the Trackjs script before every script in the page. To do so put this line

	<?php echo $this->getChildHtml('webgriffe_trackjs_script'); ?>

before every script in your `<head>` block as stated in [Trackjs docs](https://my.trackjs.com/install?).

Credits
-------

Developed by [Webgriffe®](http://www.webgriffe.com).