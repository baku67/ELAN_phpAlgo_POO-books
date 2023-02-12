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
            echo "<span style='color:red;'>** &nbsp; Le livre \"" . $book->getTitle() . "\" a bien été ajouté à l'auteur " . $this->getFirstName() . " " . $this->getLastName() . "</span><br>";
        }
        public function addMultipleBooksToList(array $books) {
            $titles = [];
            foreach($books as $book) {
                $this->_bookList[] = $book;
                $titles[] = "\"" . $book->getTitle() . "\"";
            }
            echo "<span style='color:red;'>** &nbsp; " . count($books) . " livres ont été ajouté à l'auteur " . $this->getFirstName() . " " . $this->getLastName() . "(". implode(", ", $titles) .")</span><br>";
        }

        public function printBibliography() {
            echo "<br><div class='bibliographyDiv'><span style='font-weight:bold; color:blue;'>Bibliographie de " . $this->getFirstName() . " " . $this->getLastName() . ": </span><br>" . implode(" ",$this->_bookList) . "</div>";
        }






        public function __toString() {
            return "<span style='font-weight:bold; color:Blue;'>Auteur:</span> " . $this->getFirstName() . " " . $this->getLastName() . "<br>";
        }
    }
?>