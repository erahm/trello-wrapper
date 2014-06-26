<?php
namespace library\models;

class Card {
    protected 	$id;
    protected 	$name;
    protected 	$description;
    protected 	$descriptionData;
    protected 	$isClosed;
    protected 	$dateLastActivity;
    protected 	$desc;
    protected 	$list_id;
    protected 	$short_id;
    protected 	$short_url;
    protected 	$isSubscribed;
    protected 	$url;

    public 		$board_id;

    public function __construct($card) {
    	$this->setCardData($card);
    }

    /**
    * Fill up the object data
    * Array is the type
    */
    public function setCardData($card)
    {
	    $this->id 				= $card['id'];
	    $this->name 			= $card['name']; 
	    $this->description 		= $card['desc'];
	    $this->descriptionData 	= $card['descData']; 
	    $this->isClosed			= $card['closed'];
	    $this->dateLastActivity = $card['dateLastActivity'];
	    $this->board_id			= $card['idBoard'];
	    $this->list_id 			= $card['idList'];
	    $this->short_id			= $card['idShort'];
	    $this->short_url 		= $card['shortUrl'];
	    $this->isSubscribed 	= $card['subscribed'];
	    $this->url 				= $card['url'];
    }
}
