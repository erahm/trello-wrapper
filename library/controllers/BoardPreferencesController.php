<?php

namespace library\controllers;
use library\models\Board;

class BoardPreferencesController {
    protected $permissionLevel;
    protected $voting;
    protected $comments;
    protected $invitations;
    protected $selfJoin;
    protected $cardCovers;
    protected $background;
    protected $backgroundColor;
    protected $backgroundImage;
    protected $backgroundImageScaled;
    protected $backgroundTile;
    protected $backgroundBrightness;
    protected $canBePublic;
    protected $canBeOrg;
    protected $canBePrivate;
    protected $canInvite;

    public function populate(array $prefs, Board $board) {
    $boolArray = array('canBePublic', 'canBeOrg', 'canBePrivate', 'canInvite');

      foreach ($prefs as $key => $value) {
        if (in_array($key, $boolArray)) {
          $this->setBoolean($key, $value);
        }
        else {
          $this->$key = $value;
        }
      }
    }

    protected function setBoolean($key, $value) {
      switch(strtolower($value)) {
        case 'true':
          $this->$key = true;
          break;
        case 'false':
          $this->$key = false;
          break;
        default:
          break;
      }
    }

}
