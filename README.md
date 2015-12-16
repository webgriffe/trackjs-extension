{Track::js} Magento Extension
=============================

[{Track::js}](https://trackjs.com/) is a Javascript errors monitoring service, this Magento extension allows to enable it.

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

Login into admin panel and go to `System -> Configuration -> Advanced -> Developer`. Under `{Track::js} Javascript Error Monitoring` set `Enabled` to `Yes` and set your token in the `Token` field than save the configuration.

Credits
-------

Developed by [Webgriffe®](http://www.webgriffe.com).