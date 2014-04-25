<?php

namespace library\models;


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

    /**
     * @param mixed $background
     */
    public function setBackground($background) {
        $this->background = $background;
    }

    /**
     * @return mixed
     */
    public function getBackground() {
        return $this->background;
    }

    /**
     * @param mixed $backgroundBrightness
     */
    public function setBackgroundBrightness($backgroundBrightness) {
        $this->backgroundBrightness = $backgroundBrightness;
    }

    /**
     * @return mixed
     */
    public function getBackgroundBrightness() {
        return $this->backgroundBrightness;
    }

    /**
     * @param mixed $backgroundColor
     */
    public function setBackgroundColor($backgroundColor) {
        $this->backgroundColor = $backgroundColor;
    }

    /**
     * @return mixed
     */
    public function getBackgroundColor() {
        return $this->backgroundColor;
    }

    /**
     * @param mixed $backgroundImage
     */
    public function setBackgroundImage($backgroundImage) {
        $this->backgroundImage = $backgroundImage;
    }

    /**
     * @return mixed
     */
    public function getBackgroundImage() {
        return $this->backgroundImage;
    }

    /**
     * @param mixed $backgroundImageScaled
     */
    public function setBackgroundImageScaled($backgroundImageScaled) {
        $this->backgroundImageScaled = $backgroundImageScaled;
    }

    /**
     * @return mixed
     */
    public function getBackgroundImageScaled() {
        return $this->backgroundImageScaled;
    }

    /**
     * @param mixed $backgroundTile
     */
    public function setBackgroundTile($backgroundTile) {
        $this->backgroundTile = $backgroundTile;
    }

    /**
     * @return mixed
     */
    public function getBackgroundTile() {
        return $this->backgroundTile;
    }

    /**
     * @param mixed $canBeOrg
     */
    public function setCanBeOrg($canBeOrg) {
        $this->canBeOrg = $canBeOrg;
    }

    /**
     * @return mixed
     */
    public function getCanBeOrg() {
        return $this->canBeOrg;
    }

    /**
     * @param mixed $canBePrivate
     */
    public function setCanBePrivate($canBePrivate) {
        $this->canBePrivate = $canBePrivate;
    }

    /**
     * @return mixed
     */
    public function getCanBePrivate() {
        return $this->canBePrivate;
    }

    /**
     * @param mixed $canBePublic
     */
    public function setCanBePublic($canBePublic) {
        $this->canBePublic = $canBePublic;
    }

    /**
     * @return mixed
     */
    public function getCanBePublic() {
        return $this->canBePublic;
    }

    /**
     * @param mixed $canInvite
     */
    public function setCanInvite($canInvite) {
        $this->canInvite = $canInvite;
    }

    /**
     * @return mixed
     */
    public function getCanInvite() {
        return $this->canInvite;
    }

    /**
     * @param mixed $cardCovers
     */
    public function setCardCovers($cardCovers) {
        $this->cardCovers = $cardCovers;
    }

    /**
     * @return mixed
     */
    public function getCardCovers() {
        return $this->cardCovers;
    }

    /**
     * @param mixed $comments
     */
    public function setComments($comments) {
        $this->comments = $comments;
    }

    /**
     * @return mixed
     */
    public function getComments() {
        return $this->comments;
    }

    /**
     * @param mixed $invitations
     */
    public function setInvitations($invitations) {
        $this->invitations = $invitations;
    }

    /**
     * @return mixed
     */
    public function getInvitations() {
        return $this->invitations;
    }

    /**
     * @param mixed $permissionLevel
     */
    public function setPermissionLevel($permissionLevel) {
        $this->permissionLevel = $permissionLevel;
    }

    /**
     * @return mixed
     */
    public function getPermissionLevel() {
        return $this->permissionLevel;
    }

    /**
     * @param mixed $selfJoin
     */
    public function setSelfJoin($selfJoin) {
        $this->selfJoin = $selfJoin;
    }

    /**
     * @return mixed
     */
    public function getSelfJoin() {
        return $this->selfJoin;
    }

    /**
     * @param mixed $voting
     */
    public function setVoting($voting) {
        $this->voting = $voting;
    }

    /**
     * @return mixed
     */
    public function getVoting() {
        return $this->voting;
    }


}