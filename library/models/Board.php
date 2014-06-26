<?PHP

namespace library\models;

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
    protected $cards;

    public function __construct() {
        $this->preferences = new BoardPreferences();
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
     * @param mixed $organizationId
     */
    public function setOrganizationId($organizationId) {
        $this->organizationId = $organizationId;
    }

    /**
     * @return mixed
     */
    public function getOrganizationId() {
        return $this->organizationId;
    }

    /**
     * @param mixed $pinned
     */
    public function setPinned($pinned) {
        $this->pinned = $pinned;
    }

    /**
     * @return mixed
     */
    public function getPinned() {
        return $this->pinned;
    }

    /**
     * @param mixed $preferences
     */
    public function setPreferences($preferences) {
        $this->preferences = $preferences;
    }

    /**
     * @return mixed
     */
    public function getPreferences() {
        return $this->preferences;
    }

    /**
     * @param mixed $shortUrl
     */
    public function setShortUrl($shortUrl) {
        $this->shortUrl = $shortUrl;
    }

    /**
     * @return mixed
     */
    public function getShortUrl() {
        return $this->shortUrl;
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

    public function getCards()
    {
        return $this->cards;
    }

    public function setCards($cards)
    {
        $this->cards = $cards;
    }
}


?>
