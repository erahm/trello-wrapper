<?PHP

namespace library\models;

class Board {
    protected $boardPreferences;

    public function __construct() {
        $boardPreferences = new BoardPreferences();
    }
}


?>
