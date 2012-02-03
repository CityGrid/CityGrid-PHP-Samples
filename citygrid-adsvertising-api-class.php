<?php 	
class citygridads {
	
	private $publishercode;
	private $dbserver;
	private $dbname;
	private $dbuser;
	private $dbpassword;

	public function __construct($publishercode) {
		
	  	$this->publishercode = $publishercode;
		
	}

	public function __destruct() {
		 
	}   		
   		
   	public function display_web_ad_300_250($adid,$publisher,$what,$where)
   		{
   		
		$returnAd = '<div id="sidebar_ad_slot_' . $adid . '"></div>';
		$returnAd .= '<script type="text/javascript">';
		$returnAd .= "new CityGrid.Ads('sidebar_ad_slot_" . $adid . "', {";
		$returnAd .= "    collection_id: 'web-002-300x250',";
		$returnAd .= "    publisher: '" . $publisher . "',";
		$returnAd .= "    what:'" . $what . "',";
		$returnAd .= "    where: '" . $where . "',";
		$returnAd .= "    width: 300,";
		$returnAd .= "    height: 250";
		$returnAd .= "  });";
		$returnAd .= "</script>";
   		
   		return $returnAd;
   		
		}
		
   	public function display_web_ad_630_100($adid,$publisher,$what,$where)
   		{		
		
		$returnAd = '<script type="text/javascript">';
		$returnAd .= "new CityGrid.Ads('" . $adid . "', {";
		$returnAd .= "    collection_id: 'web-001-630x100',";
		$returnAd .= "    publisher: '" . $publisher . "',";
		$returnAd .= "    what:'" . $what . "',";
		$returnAd .= "    where: '" . $where . "',";
		$returnAd .= "    width: 630,";
		$returnAd .= "    height: 100";
		$returnAd .= "  });";
		$returnAd .= "</script>";
   		
   		return $returnAd;		
   		
   		}
	}
?>