<?php

namespace library\controllers;

use config\ApiKeys;
use library\models;

class BoardController {
    protected $board;
    protected $preferencesController;


    public function __construct() {
        $this->board = new models\Board();
        $this->preferencesController = new BoardPreferencesController();
    }

    public function retrieveBoard($id) {
        try {
            $response = http_get('https://api.trello.com/1/board/' . $id . '?key=' . ApiKeys::getApiKey());
            $this->parseResponse($response);
        }
        catch (exception $error) {
            //TODO: handle this
        }
    }

    private function parseResponse($response) {
        $this->board->setId($response['id']);
        $this->board->setName($response['name']);
        $this->board->setDescription($response['desc']);
        $this->board->setDescriptionData($response['descData']);
        $this->board->setIsClosed(($response['closed'] == 'true') ? true : false);
        $this->board->setOrganizationId($response['idOrganization']);
        $this->board->setPinned($response['pinned']);
        $this->board->setUrl($response['url']);
        $this->board->setShortUrl($response['shortUrl']);

        $this->board->setPreferences($this->preferencesController->populate(($response['prefs'])));
    }

    public function getBoard() {
        return $this->board;
    }

    public function setBoard($board) {
        $this->board = $board;
    }

}
