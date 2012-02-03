<?php
include "citygrid-api-class.php";

$publishercode = "[your publisher code]";

$placement=null;
$has_offers=false;
$histograms=false;
$i=null;
$format='json';

//Get All Active APIs
$citygrid = new citygrid($publishercode);
$search = $citygrid->srch_places_where($what,$type,$where,$page,$rpp,$sort,$format,$placement,$has_offers,$histograms,$i);
			
foreach($search as $place) 
	{
		
    $total_hits = $place->total_hits;
    $first_hit = $place->first_hit;
    $last_hit = $place->last_hit;
    $page = $place->page;
    $maxpage = $total_hits / $rpp;
    $rpp = $place->rpp;;			        
   
	foreach($place->locations as $location) 
		{

		$featured = $location->featured;
		$public_id = $location->public_id;
		$name = $location->name;
		$address = $location->address;
		$street = $address->street;
		$city = $address->city;
		$state = $address->state;
		$postal_code = $address->postal_code;
		$neighborhood = $location->neighborhood;
		$latitude = $location->latitude;
		$longitude = $location->longitude;
		$distance = $location->distance;
		$image = $location->image;
		$phone_number = $location->phone_number;
		$fax_number = $location->fax_number;
		$rating = $location->rating;
		$tagline = $location->tagline;
		$profile = $location->profile;
		$website = $location->website;
		$has_video = $location->has_video;
		$has_offers = $location->has_offers;
		$offers = $location->offers;
		if(isset($location->user_reviews_count))
			{
			$user_reviews_count = $location->user_reviews_count;
			}
		$sample_categories = $location->sample_categories;
		$impression_id = $location->impression_id;
		$expansion  = $location->expansion;
							
		
		}
		
	 } 													

?>