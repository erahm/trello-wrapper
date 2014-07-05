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
                $this->parseResponse($response);
            }
            else {
                $content = CallController::fetch($url);
                if($content['code'] == 200){
                    $response = json_decode($content['result'], 'array');
                    $this->parseResponse($response);
                } else {
                    // other than 200, show returning string
                    echo json_encode(array('error' => $content['result']));
                }
            }
        }
        catch (Exception $error) {
            echo $error->getMessage();
            Exit();
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
