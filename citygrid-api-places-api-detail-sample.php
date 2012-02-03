<?php
include "citygrid-api-class.php";
	
$publishercode = "[your publisher code]";

$phone=null;
$customer_only=null;
$placement = null;
$all_results=null;
$review_count=null;
$i=null;
$format='json';
$callback=null;
$id_type='cg';

//Get Place Detail
$citygrid = new citygrid($publishercode);
$search = $citygrid->places_detail($id,$id_type,$phone,$customer_only,$all_results,$review_count,$placement,$format,$callback,$i);

//var_dump($search);
				
// locations
$locations = $search->locations[0];

$id = $locations->id;
$public_id = $locations->public_id;
$infousa_id = $locations->infousa_id;
$reference_id = $locations->reference_id;
$impression_id = $locations->impression_id;
$name = $locations->name;
$display_ad = $locations->display_ad;
$teaser = $locations->teaser;
$business_operation_status = $locations->business_operation_status;
$address = $locations->address;
$years_in_business = $locations->years_in_business;
$last_update_time = $locations->last_update_time;

// address
$address = $locations->address;
$street = $address->street;
$city = $address->city;
$state = $address->state;
$postal_code = $address->postal_code;
$cross_street = $address->cross_street;
$latitude = $address->latitude;
$longitude = $address->longitude;

// contact_info
$contact_info = $locations->contact_info;
$display_phone = $contact_info->display_phone;
$display_url = $contact_info->display_url;

// Neighborhoods
if(isset($search->locations[0]->neighborhoods) && count($search->locations[0]->neighborhoods) > 0) {
	
     $neighborhoods = $search->locations[0]->neighborhoods;
     foreach($neighborhoods as $neighborhood) {
		 
	     }
	}

// URLs
if(isset($search->locations[0]->urls) && count($search->locations[0]->urls) > 0) {

	 $urls = $search->locations[0]->urls;
	 
	 $profile_url = $urls->profile_url;
	 $reviews_url = $urls->reviews_url;
	 $video_url = $urls->video_url;
	 $website_url = $urls->website_url;
	 $menu_url = $urls->menu_url;
	 $reservation_url = $urls->reservation_url;
	 $map_url = $urls->map_url;
	 $send_to_friend_url = $urls->send_to_friend_url;
	 $email_link = $urls->email_link;
	 $custom_link_1 = $urls->custom_link_1;
	 $custom_link_2 = $urls->custom_link_2;
	 $web_comment_url = $urls->web_comment_url;
	 $web_article_url = $urls->web_article_url;
	 $web_profile_url = $urls->web_profile_url;
	 $web_rates_url = $urls->web_rates_url;
	 $gift_url = $urls->gift_url;
	 $request_quote_url = $urls->request_quote_url;
	 $virtual_tour_url = $urls->virtual_tour_url;
	 $book_limo_url = $urls->book_limo_url;
	 $order_url = $urls->order_url;
	 $custom_link_3 = $urls->custom_link_3;
	 $custom_link_4 = $urls->custom_link_4;
	 
	 foreach($urls as $key => $value) {
	 	if($value!='') {

	 		}
	 	}  	 	
	}

// Customer Content
if(isset($search->locations[0]->customer_content) && count($search->locations[0]->customer_content) > 0) {
	
     $customer_content = $search->locations[0]->customer_content;

	 $customer_message = $customer_content->customer_message;	 	 
	 
	 $attribution_source = $customer_message->attribution_source;
	 $attribution_text = $customer_message->attribution_text;
	 
	 $attribution_value = $customer_message->value;
	 
	
	}
	
// Bullets
if(isset($search->locations[0]->customer_content->bullets) && count($search->locations[0]->customer_content->bullets) > 0) {     	
	
	 $bullets = $search->locations[0]->customer_content->bullets;
 
	 foreach($bullets as $key => $value) {
	 	
	 	
	 	
	 	}		 
	}
 
// Offers
if(isset($search->locations[0]->offers) && count($search->locations[0]->offers) > 0) {

 $offers = $search->locations[0]->offers;
 var_dump($offers);	 
 
}

// Categories
if(isset($search->locations[0]->categories) && count($search->locations[0]->categories) > 0) {

 $categories = $search->locations[0]->categories;
 foreach($categories as $category) {
 	
 	//var_dump($category);
 	
 	$name_id = $category->name_id;
 	$name = $category->name;
 	$parent_id = $category->parent_id;
 	$parent = $category->parent;
 	$primary = $category->primary;
 	 	
 	}
}

// Attributes
if(isset($search->locations[0]->attributes) && count($search->locations[0]->attributes) > 0) {  
	
	 $attributes = $search->locations[0]->attributes;
	 foreach($attributes as $key => $value) {
	 	if($value!='') {	
			
			$attribute_id = $value->attribute_id;
			$name = $value->name;
			$value = $value->value;
 			
	 	}
	 }
}

// Tips
if(isset($search->locations[0]->tips) && count($search->locations[0]->tips) > 0) {   
	
	$tips = $search->locations[0]->tips;
	foreach($tips as $tip){

		$tip_name = $tip->tip_name;
		$tip_text = $tip->tip_text;

		} 
    }

// Images
if(isset($search->locations[0]->images) && count($search->locations[0]->images) > 0) {

 	$images = $search->locations[0]->images;
 	foreach($images as $image){
 		
 		$type = $image->type;
 		$height = $image->height;
 		$width = $image->width;
 		$image_url = $image->image_url;
 		$primary = $image->primary;
 		
 		$attribution_source = $image->attribution_source;
 		$attribution_logo = $image->attribution_logo;
 		$attribution_text = $image->attribution_text;

 		} 
}

// Editorials
if(isset($search->locations[0]->editorials) && count($search->locations[0]->editorials) > 0) {
	
     $editorials = $search->locations[0]->editorials;
    foreach($editorials as $editorial) {
     	
     	
     	$attribution_source = $editorial->attribution_source;
     	$attribution_logo = $editorial->attribution_logo;
     	$editorial_review = $editorial->editorial_review;
     	$editorial_id = $editorial->editorial_id;
     	$editorial_url = $editorial->editorial_url;
     	$editorial_title = $editorial->editorial_title;
     	$editorial_author = $editorial->editorial_author;

     	}
    }

// Reviews
if(isset($search->locations[0]->review_info) && count($search->locations[0]->review_info) > 1) {
	
    $rating = $search->locations[0]->review_info;
     
	$overall_review_rating = $rating->overall_review_rating;
	$total_user_reviews = $rating->total_user_reviews;
	$total_user_reviews_shown = $rating->total_user_reviews_shown;
	
	$reviews = $rating->reviews;    	
	  	       
    foreach($reviews as $review) {

     	$attribution_source = $review->attribution_source;
     	$attribution_logo = $review->attribution_logo;
     	$attribution_text = $review->attribution_text;
     	$review_id = $review->review_id;
     	$review_url = $review->review_url;
     	$review_title = $review->review_title;
     	$review_author = $review->review_author;
     	$review_text = $review->review_text;
     	
     	}

    }

?>