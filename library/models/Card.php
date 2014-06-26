<?php
namespace library\models;

class Card {
    protected $id;
    protected $name;
    protected $description;
    protected $descriptionData;
    protected $isClosed;
    protected $dateLastActivity;
    protected $desc;
    protected $list_id;
    protected $short_id;
    protected $short_url;
    protected $isSubscribed;
    protected $url;

    public $board_id;

    /**
     * @param mixed $board_id
     */
    public function setBoardId($board_id) {
        $this->board_id = $board_id;
    }

    /**
     * @return mixed
     */
    public function getBoardId() {
        return $this->board_id;
    }

    /**
     * @param mixed $dateLastActivity
     */
    public function setDateLastActivity($dateLastActivity) {
        $this->dateLastActivity = $dateLastActivity;
    }

    /**
     * @return mixed
     */
    public function getDateLastActivity() {
        return $this->dateLastActivity;
    }

    /**
     * @param mixed $desc
     */
    public function setDesc($desc) {
        $this->desc = $desc;
    }

    /**
     * @return mixed
     */
    public function getDesc() {
        return $this->desc;
    }

    /**
     * @param mixed $description
     */
    public function setDescription($description) {
        $this->description = $description;
    }

    /**
     * @return mixed
     */
    public function getDescription() {
        return $this->description;
    }

    /**
     * @param mixed $descriptionData
     */
    public function setDescriptionData($descriptionData) {
        $this->descriptionData = $descriptionData;
    }

    /**
     * @return mixed
     */
    public function getDescriptionData() {
        return $this->descriptionData;
    }

    /**
     * @param mixed $id
     */
    public function setId($id) {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getId() {
        return $this->id;
    }

    /**
     * @param mixed $isClosed
     */
    public function setIsClosed($isClosed) {
        $this->isClosed = $isClosed;
    }

    /**
     * @return mixed
     */
    public function getIsClosed() {
        return $this->isClosed;
    }

    /**
     * @param mixed $isSubscribed
     */
    public function setIsSubscribed($isSubscribed) {
        $this->isSubscribed = $isSubscribed;
    }

    /**
     * @return mixed
     */
    public function getIsSubscribed() {
        return $this->isSubscribed;
    }

    /**
     * @param mixed $list_id
     */
    public function setListId($list_id) {
        $this->list_id = $list_id;
    }

    /**
     * @return mixed
     */
    public function getListId() {
        return $this->list_id;
    }

    /**
     * @param mixed $name
     */
    public function setName($name) {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getName() {
        return $this->name;
    }

    /**
     * @param mixed $short_id
     */
    public function setShortId($short_id) {
        $this->short_id = $short_id;
    }

    /**
     * @return mixed
     */
    public function getShortId() {
        return $this->short_id;
    }

    /**
     * @param mixed $short_url
     */
    public function setShortUrl($short_url) {
        $this->short_url = $short_url;
    }

    /**
     * @return mixed
     */
    public function getShortUrl() {
        return $this->short_url;
    }

    /**
     * @param mixed $url
     */
    public function setUrl($url) {
        $this->url = $url;
    }

    /**
     * @return mixed
     */
    public function getUrl() {
        return $this->url;
    }
}
