<?php

namespace library;

class BoardPreferences {
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

    public function populate(array $prefs) {
      foreach ($prefs as $key => $value) {
          $this->$key = $value;
      }
    }

} 