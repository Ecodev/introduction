<?php
/***************************************************************
*  Copyright notice
*
*  (c) 2009 Peter Beernink <p.beernink@drecomm.nl>
*  All rights reserved
*
*  This script is part of the TYPO3 project. The TYPO3 project is
*  free software; you can redistribute it and/or modify
*  it under the terms of the GNU General Public License as published by
*  the Free Software Foundation; either version 2 of the License, or
*  (at your option) any later version.
*
*  The GNU General Public License can be found at
*  http://www.gnu.org/copyleft/gpl.html.
*  A copy is found in the textfile GPL.txt and important notices to the license
*  from the author is found in LICENSE.txt distributed with these scripts.
*
*
*  This script is distributed in the hope that it will be useful,
*  but WITHOUT ANY WARRANTY; without even the implied warranty of
*  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
*  GNU General Public License for more details.
*
*  This copyright notice MUST APPEAR in all copies of the script!
***************************************************************/

/**
 * Configuration which will be included to the localconf.php during the installation
 */

return array(
	'EXT/extConf/info' => 'a:0:{}',
	'EXT/extConf/indexed_search' => 'a:17:{s:8:"pdftools";s:9:"/usr/bin/";s:8:"pdf_mode";s:2:"20";s:5:"unzip";s:9:"/usr/bin/";s:6:"catdoc";s:9:"/usr/bin/";s:6:"xlhtml";s:9:"/usr/bin/";s:7:"ppthtml";s:9:"/usr/bin/";s:5:"unrtf";s:9:"/usr/bin/";s:9:"debugMode";s:1:"0";s:18:"fullTextDataLength";s:1:"0";s:23:"disableFrontendIndexing";s:1:"0";s:6:"minAge";s:2:"24";s:6:"maxAge";s:1:"0";s:16:"maxExternalFiles";s:1:"5";s:26:"useCrawlerForExternalFiles";s:1:"0";s:11:"flagBitMask";s:3:"192";s:16:"ignoreExtensions";s:0:"";s:17:"indexExternalURLs";s:1:"0";}',
	'EXT/extConf/news' => 'a:10:{s:29:"removeListActionFromFlexforms";s:1:"0";s:20:"pageModuleFieldsNews";s:313:"LLL:EXT:news/Resources/Private/Language/locallang_be.xml:pagemodule_simple=title,datetime;LLL:EXT:news/Resources/Private/Language/locallang_be.xml:pagemodule_advanced=title,datetime,teaser,category;LLL:EXT:news/Resources/Private/Language/locallang_be.xml:pagemodule_complex=title,datetime,teaser,category,archive;";s:24:"pageModuleFieldsCategory";s:17:"title,description";s:6:"tagPid";s:1:"1";s:13:"prependAtCopy";s:1:"1";s:19:"categoryRestriction";s:4:"none";s:22:"contentElementRelation";s:1:"0";s:13:"manualSorting";s:1:"0";s:11:"archiveDate";s:4:"date";s:12:"showImporter";s:1:"0";}',
	'EXT/extConf/wt_spamshield' => 'a:10:{s:12:"useNameCheck";s:1:"0";s:12:"usehttpCheck";s:1:"3";s:9:"notUnique";s:0:"";s:13:"honeypodCheck";s:1:"1";s:15:"useSessionCheck";s:1:"1";s:16:"SessionStartTime";s:2:"10";s:14:"SessionEndTime";s:3:"600";s:10:"AkismetKey";s:0:"";s:12:"email_notify";s:0:"";s:3:"pid";s:2:"-1";}',
	'EXT/extConf/rtehtmlarea' => 'a:13:{s:21:"noSpellCheckLanguages";s:23:"ja,km,ko,lo,th,zh,b5,gb";s:15:"AspellDirectory";s:15:"/usr/bin/aspell";s:17:"defaultDictionary";s:2:"en";s:14:"dictionaryList";s:2:"en";s:20:"defaultConfiguration";s:105:"Typical (Most commonly used features are enabled. Select this option if you are unsure which one to use.)";s:12:"enableImages";s:1:"1";s:20:"enableInlineElements";s:1:"0";s:19:"allowStyleAttribute";s:1:"1";s:24:"enableAccessibilityIcons";s:1:"0";s:16:"enableDAMBrowser";s:1:"0";s:16:"forceCommandMode";s:1:"0";s:15:"enableDebugMode";s:1:"0";s:23:"enableCompressedScripts";s:1:"1";}',
	'FE/pageNotFound_handling' => t3lib_div::getIndpEnv('TYPO3_SITE_URL').'index.php?id=16',

	// Added by the Bootstrap package
	'EXT/extConf/scheduler' => 'a:4:{s:11:"maxLifetime";s:4:"1440";s:11:"enableBELog";s:1:"1";s:15:"showSampleTasks";s:1:"1";s:11:"useAtdaemon";s:1:"0";}',
	'EXT/extConf/seo_basics' => 'a:2:{s:10:"xmlSitemap";s:1:"1";s:16:"sourceFormatting";s:1:"1";}',
	'EXT/extConf/flux' => 'a:2:{s:9:"debugMode";s:1:"0";s:7:"compact";s:1:"0";}',
	'EXT/extConf/realurl' => 'a:5:{s:10:"configFile";s:21:"typo3conf/RealUrl.php";s:14:"enableAutoConf";s:1:"1";s:14:"autoConfFormat";s:1:"0";s:12:"enableDevLog";s:1:"0";s:19:"enableChashUrlDebug";s:1:"0";}',
	'BE/RTE_imageStorageDir' => '1:variants',
	'EXT/extConf/nc_staticfilecache' => 'a:8:{s:23:"clearCacheForAllDomains";s:1:"1";s:22:"sendCacheControlHeader";s:1:"0";s:27:"enableStaticFileCompression";s:1:"1";s:23:"showGenerationSignature";s:1:"1";s:8:"strftime";s:36:"cached statically on: %d-%m-%y %H:%M";s:5:"debug";s:1:"0";s:11:"recreateURI";s:1:"0";s:26:"markDirtyInsteadOfDeletion";s:1:"0";}',
	'EXT/extConf/media' => 'a:24:{s:13:"updateMessage";s:1:"0";s:7:"storage";s:1:"1";s:13:"media_folders";s:2:"99";s:16:"category_folders";s:0:"";s:18:"default_categories";s:1:"3";s:24:"mount_point_for_variants";s:1:"4";s:27:"mount_point_for_file_type_1";s:1:"0";s:27:"mount_point_for_file_type_2";s:1:"2";s:27:"mount_point_for_file_type_3";s:1:"0";s:27:"mount_point_for_file_type_4";s:1:"0";s:27:"mount_point_for_file_type_5";s:1:"3";s:15:"image_thumbnail";s:7:"100x100";s:10:"image_mini";s:7:"120x120";s:11:"image_small";s:7:"320x320";s:12:"image_medium";s:7:"760x760";s:11:"image_large";s:9:"1200x1200";s:14:"image_original";s:9:"1920x1920";s:10:"permission";s:1:"0";s:29:"extension_allowed_file_type_1";s:9:"txt, html";s:29:"extension_allowed_file_type_2";s:40:"jpg, jpeg, bmp, png, tiff, tif, gif, eps";s:29:"extension_allowed_file_type_3";s:23:"mp3, mp4, m4a, wma, f4a";s:29:"extension_allowed_file_type_4";s:60:"mov, avi, mpeg, mpg, mp4, m4v, flv, f4v, webm, wmv, ogv, 3gp";s:29:"extension_allowed_file_type_5";s:79:"doc, docx, dotx, ppt, pptx, pps, ppsx, odt, xls, xlsx, xltx, pdf, zip, rtf, xlt";s:17:"mime_type_allowed";s:58:"image/*,audio/*,video/*,application/*,text/plain,text/html";}',
	'EXT/extConf/infinite_scroll_gallery' => 'a:0:{}',
);
?>