<?php

    class Book {
        
        // Propriétés
        private string $_title;
        private int $_nbrOfPages;
        private string $_publicationYear;
        private float $_price;
        private string $_currency;
        private Author $_author;
        // private AUTHOR

        // Constructeur
        public function __construct(string $title, int $nbrOfPages, string $publicationYear, float $price, string $currency, Author $author) {
            $this->_title = $title;
            $this->_nbrOfPages = $nbrOfPages;
            $this->_publicationYear = $publicationYear;
            $this->_price = $price;
            $this->_currency = $currency;
            $this->_author = $author;
        }

        // Accesseurs
        public function getTitle(): string {
            return $this->_title;
        }
        public function getNbrOfPages(): int {
            return $this->_nbrOfPages;
        }
        public function getPublicationYear(): string {
            return $this->_publicationYear;
        }
        public function getPrice(): float {
            return $this->_price;
        }
        public function getCurrency(): string {
            return $this->_currency;
        }
        public function getAuthor(): Author {
            return $this->_author;
        }
        // Mutateurs
        public function setTitle($newTitle) {
            $this->_title = $newTitle;
        }
        public function setNbrOfPages($newNbrOfPages) {
            $this->_nbrOfPages = $newNbrOfPages;
        }
        public function setDateOfPublication($newDateOfPublication) {
            $this->_publicationYear = $newDateOfPublication;
        }
        public function setPrice($newPrice) {
            $this->_price = $newPrice;
        }
        public function setCurrency($newCurrency) {
            $this->_currency = $newCurrency;
        }
        public function setAuthor(Author $author) {
            $this->_author = $author;
        }

        // Méthodes
        public function printAuthor() {
            return $this->getAuthor()->getFirstName() . " " . $this->getAuthor()->getLastName();
        }











        public function __toString() {
            return "<span style='font-weight:bold; color:#00b200;'>Livre:</span> \"" . $this->getTitle() . "\"<br>" . $this->getNbrOfPages() . " pages<br>Année de publication: " . $this->getPublicationYear() . "<br>Prix: " . $this->getPrice() . " " . $this->getCurrency() . "<br>Auteur: " . $this->printAuthor() . "<br><br>";
        }

    }


?>