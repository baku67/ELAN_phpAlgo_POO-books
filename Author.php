<?php

    class Author {

        // Propriétés
        private string $_firstName;
        private string $_lastName;
        private array $_bookList;

        // Constructeur
        public function __construct(string $firstName, string $lastName) {
            $this->_firstName = $firstName;
            $this->_lastName = $lastName;
            $this->_bookList = [];
        }

        // Accesseurs/Mutateurs
        public function getFirstName(): string {
            return $this->_firstName;
        }
        public function getLastName(): string {
            return $this->_lastName; 
        }

        public function setFirstName(string $firstName) {
            $this->_firstName = $firstName;
        }
        public function setLastName(string $lastName) {
            $this->_lastName = $lastName;
        }

        // Méthodes
        public function addBookToList(Book $book) {
            $this->_bookList[] = $book;
        }
        public function afficherBibliographie(): array {
            return $this->$_bookList;
        }

        public function __toString() {
            return "Auteur: " . $this->getFirstName() . " " . $this->getLastName() . "<br>";
        }
    }
?>