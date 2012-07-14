<?php
/**
 * @copyright  Copyright 2012 metaio GmbH. All rights reserved.
 * @link       http://www.metaio.com
 * @author     Frank Angermann
 * 
 * @abstract	This tutorial will return one simply POI (Point of Interest). This POI will have a pop up with 
 * 				description and button at a fixed location.
 * 				The AREL XML Helper is not being used, instead the XML is written to gain a basic understanding of the junaio output. 
 * 
 * 				Learnings:
 * 					- create a Point of Interest and display it in junaio
 *  			
 **/

//if issues occur with htaccess, also the path variable can be used
//htaccess rewrite enabled:
//Callback URL: http://www.callbackURL.com
//
//htacces disabled:
//Callback URL: http://www.callbackURL.com/?path=

echo "<?xml version=\"1.0\" encoding=\"UTF-8\"?>
		<results>
			<object id=\"1\">
				<title><![CDATA[Hotel Hello World]]></title>
				<thumbnail><![CDATA[http://dev.junaio.com/publisherDownload/thumb_a1.png]]></thumbnail>
				<icon><![CDATA[http://dev.junaio.com/publisherDownload/icon_a1.png]]></icon>
				<location>
					<lat>37.776685</lat>
					<lon>-122.422771</lon>
					<alt>0</alt>
				</location>
				<popup>
					<description><![CDATA[This is a beautiful, family hotel and restaurant, just around the corner.
Special Dinner and Rooms available.]]></description>
					<buttons>
						<button id=\"url\" name=\"Website\"><![CDATA[http://www.junaio.com]]></button>
					</buttons>
				</popup>
			</object>
		</results>";
exit;