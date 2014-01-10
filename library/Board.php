<?php

namespace library;

use config\ApiKeys;

class Board {
    protected $name;
    protected $id;
    protected $description;
    protected $descriptionData;
    protected $isClosed;
    protected $organizationId;
    protected $pinned;
    protected $url;
    protected $shortUrl;
    protected $preferences;
    protected $keys;


    public function __construct() {
        $this->preferences = new BoardPreferences();
        $this->keys = new ApiKeys();
    }

    public function retrieveBoard($id) {
        try {
            $response = http_get('https://api.trello.com/1/board/' . $id . '?' . $this->keys->getApiKey());
        }
        catch(exception $error) {
            //TODO: handle this
        }
    }

    private function parseResponse($response) {
        $this->id               = $response['id'];
        $this->name             = $response['name'];
        $this->description      = $response['desc'];
        $this->descriptionData  = $response['descData'];
        $this->isClosed         = (bool) $response['closed'];
        $this->organizationId   = $response['idOrganization'];
        $this->pinned           = $response['pinned'];
        $this->url              = $response['url'];
        $this->shortUrl         = $response['shortUrl'];

        $this->preferences->populate($response['prefs']);
    }

    //region getters/setters

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $url
     */
    public function setUrl($url)
    {
        $this->url = $url;
    }

    /**
     * @return mixed
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * @return mixed
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @return mixed
     */
    public function getIsClosed()
    {
        return $this->isClosed;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return mixed
     */
    public function getOrganizationId()
    {
        return $this->organizationId;
    }

    /**
     * @return array
     */
    public function getPreferences()
    {
        return $this->preferences;
    }

    /**
     * @return mixed
     */
    public function getShortUrl()
    {
        return $this->shortUrl;
    }

    /**
     * @param mixed $short_url
     */
    public function setShortUrl($short_url)
    {
        $this->shortUrl = $short_url;
    }

    //endregion
} 