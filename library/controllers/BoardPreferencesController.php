<?php

namespace library\controllers;

use library\models\BoardPreferences;

class BoardPreferencesController {
    protected $boardPreferences;

    public function __construct() {
        $this->boardPreferences = new BoardPreferences();
    }

    public function populate(array $prefs) {
        foreach ($prefs as $key => $value) {
            $this->setValues($key, $value);
        }

        return $this->boardPreferences;
    }

    protected function setValues($key, $value) {
        switch ($key) {
            case 'permissionLevel':
                $this->boardPreferences->setPermissionLevel($value);
                break;
            case 'voting':
                $this->boardPreferences->setVoting($value);
                break;
            case 'comments':
                $this->boardPreferences->setComments($value);
                break;
            case 'invitations':
                $this->boardPreferences->setComments($value);
                break;
            case 'selfJoin':
                $this->boardPreferences->setSelfJoin($value);
                break;
            case 'cardCovers':
                $this->boardPreferences->setCardCovers($value);
                break;
            case 'background':
                $this->boardPreferences->setBackground($value);
                break;
            case 'backgroundColor':
                $this->boardPreferences->setBackgroundColor($value);
                break;
            case 'backgroundImage':
                $this->boardPreferences->setBackgroundImage($value);
                break;
            case 'backgroundImageScaled':
                $this->boardPreferences->setBackgroundImageScaled($value);
                break;
            case 'backgroundTile':
                $this->boardPreferences->setBackgroundTile($value);
                break;
            case 'backgroundBrightness':
                $this->boardPreferences->setBackgroundBrightness($value);
                break;
            case 'canBePublic':
                $this->boardPreferences->setCanBePublic($this->setBoolean($value));
                break;
            case 'canBeOrg':
                $this->boardPreferences->setCanBeOrg($this->setBoolean($value));
                break;
            case 'canBePrivate':
                $this->boardPreferences->setCanBePrivate($this->setBoolean($value));
                break;
            case 'canInvite':
                $this->boardPreferences->setCanInvite($this->setBoolean($value));
                break;
            default:
                break;
        }
    }

    protected function setBoolean($value) {
        $retVal = null;
        switch (strtolower($value)) {
            case 'true':
                $retVal = true;
                break;
            case 'false':
                $retVal = false;
                break;
            default:
                break;
        }

        return $retVal;
    }

}
