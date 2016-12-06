<?php

/**
 * Created by PhpStorm.
 * User: apprenant
 * Date: 18/11/16
 * Time: 12:10
 */
class Perso
{
    private $name;
    private $realm;
    private $achievementPoints;
    private $battlegroup;
    private $level;
    private $totalHonorableKills;
    private $petsList;
    private $thumbnail;

    /**
     * Perso constructor.
     */
    public function __construct()
    {
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getRealm()
    {
        return $this->realm;
    }

    /**
     * @param mixed $realm
     */
    public function setRealm($realm)
    {
        $this->realm = $realm;
    }

    /**
     * @return mixed
     */
    public function getAchievementPoints()
    {
        return $this->achievementPoints;
    }

    /**
     * @param mixed $achievementPoints
     */
    public function setAchievementPoints($achievementPoints)
    {
        $this->achievementPoints = $achievementPoints;
    }

    /**
     * @return mixed
     */
    public function getBattlegroup()
    {
        return $this->battlegroup;
    }

    /**
     * @param mixed $battlegroup
     */
    public function setBattlegroup($battlegroup)
    {
        $this->battlegroup = $battlegroup;
    }

    /**
     * @return mixed
     */
    public function getLevel()
    {
        return $this->level;
    }

    /**
     * @param mixed $level
     */
    public function setLevel($level)
    {
        $this->level = $level;
    }

    /**
     * @return mixed
     */
    public function getTotalHonorableKills()
    {
        return $this->totalHonorableKills;
    }

    /**
     * @param mixed $totalHonorableKills
     */
    public function setTotalHonorableKills($totalHonorableKills)
    {
        $this->totalHonorableKills = $totalHonorableKills;
    }

    /**
     * @return mixed
     */
    public function getThumbnail()
    {
        return $this->thumbnail;
    }

    /**
     * @param mixed $thumbnail
     */
    public function setThumbnail($thumbnail)
    {
        $this->thumbnail = $thumbnail;
    }




}