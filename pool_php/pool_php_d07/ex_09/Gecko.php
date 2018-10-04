<?php
class Gecko
{
    private $_friends;
    private $_skill;

    public function __construct(array $friends = null, Skill $skill)
    {
            $this->_friends = $friends;
            $this->_skill = $skill;
    }
}