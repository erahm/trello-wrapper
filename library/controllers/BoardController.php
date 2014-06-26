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

    public function retrieveBoard($id, $cards = true) {
        $params = array();
        $params['key'] = ApiKeys::getApiKey();

        if ($cards) {
            $params['cards'] = 'all';
        }

        $query = http_build_query($params);
        $url = 'https://api.trello.com/1/board/' . $id . '?' . $query;

        try {
            if (function_exists('http_get')) {
                $response = http_get($url);
            }
            else {
                $response = json_decode(file_get_contents($url), 'array');
            }

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

        if (!empty($response['cards'])) {
            $cardController = new CardController();
            $cards = $cardController->populateCards($response['cards']);

            $this->board->setCards($cards);
        }
    }

    public function getBoard() {
        return $this->board;
    }

    public function setBoard($board) {
        $this->board = $board;
    }
}
