<?php

namespace Imperium
{
    class soldier
    {
        private $_name;
        private $_hp;
        private $_attack;

        public function __construct($name, $hp = 50, $attack = 12)
        {
            $this->_name = $name;
            $this->_hp = $hp;
            $this->_attack = $attack;
        }

        public function getName(){return $this->_name;}
        public function getHp() {return $this->_hp;}
        public function getAttack() {return $this->_attack;}

        public function setName($name){$this->_name = $name;}
        public function setHp($hp){$this->_hp = $hp;}
        public function setAttack($attack) {$this->_attack = $attack;}

        public function doDamage ($target)
        {
            $target->setHp ($target->getHp() - $this->_attack);
        }
        public function __toString()
        {
            return $this->_name." the ".__NAMESPACE__." SpaceMarine: ".$this->_hp." HP.";
        }
    }
}

namespace Chaos
{
    class soldier
    {
        private $_name;
        private $_hp;
        private $_attack;

        public function __construct($name, $hp = 70, $attack = 12)
        {
            $this->_name = $name;
            $this->_hp = $hp;
            $this->_attack = $attack;
        }
        public function getName(){return $this->_name;}
        public function getHp() {return $this->_hp;}
        public function getAttack() {return $this->_attack;}

        public function setName($name){$this->_name = $name;}
        public function setHp($hp){$this->_hp = $hp;}
        public function setAttack($attack) {$this->_attack = $attack;}

        public function doDamage ($target)
        {
            $target->_hp = $target->_hp - $this->_attack;
        }
        public function __toString()
        {
            return $this->_name." the ".__NAMESPACE__." SpaceMarine: ".$this->_hp." HP.";
        }
    }
}