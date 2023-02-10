<?php

    class Author {

        // Propriétés
        private string $_firstName;
        private string $_lastName;

        // Constructeur
        public function __construct(string $firstName, string $lastName) {
            $this->_firstName = $firstName;
            $this->_lastName = $lastName;
        }

        // Accesseurs/Mutateurs
        public function getFirstName() {
            return $this->_firstName;
        }
        public function getLastName() {
            return $this->_lastName; 
        }

        public function setFirstName(string $firstName) {
            $this->_firstName = $firstName;
        }
        public function setLastName(string $lastName) {
            $this->_lastName = $lastName;
        }


        // Méthodes
        public function __toString() {
            return "Auteur: " . $this->getFirstName() . " " . $this->getLastName() . "<br>";
        }

    }


?>