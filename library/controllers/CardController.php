<?PHP

namespace library\controllers;

use \library\models;

class CardController {

    public function populateCards(array $cards) {
        $cardArray = array();

        foreach ($cards as $card) {
            $cardArray = $this->populateCardData($card);
        }

        return $cardArray;
    }

    protected function populateCardData(array $cardData) {
        $card = new models\Card();

        $card->setId($cardData['id']);
        $card->setName($cardData['name']);
        $card->setDescription($cardData['desc']);
        $card->setDescriptionData($cardData['descData']);
        $card->setIsClosed($cardData['closed']);
        $card->setDataLastActivity($cardData['dateLastActivity']);
        $card->setBoardId($cardData['idBoard']);
        $card->setListId($cardData['idList']);
        $card->setShortId($cardData['idShort']);
        $card->setShortUrl($cardData['shortUrl']);
        $card->setIsSubscribed($cardData['subscribed']);
        $card->setUrl($cardData['url']);

        return $card;
    }
}
