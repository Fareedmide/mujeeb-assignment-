<?php

class Author {
    private $name;

    public function __construct($name) {
        $this->name = $name;
    }

    public function getName() {
        return $this->name;
    }
}

class Book {
    private $title;
    private $author;
    private $isAvailable;

    public function __construct($title, Author $author) {
        $this->title = $title;
        $this->author = $author;
        $this->isAvailable = true;
    }

    
    class Author{

        private $name
    
        public function __construct( $name){
            $this->name = $name;
        } 
    
        public function getname(){
            return $this->name;
        }
    }
    
    
    class books {
      
     public function __construct(protected $book_title,protected $author , protected int $avialble_copies)
    
     public function display_book_info(){
        echo "Book Name : {$this->book_title}.\n"
        echo "Author : {$this->author->$this->name}.\n"
        echo "Avialable copies: {$this->avialble_copies}"
     }
    
      public function borrow_book(){
        if($this->available_copies > 0){
            $this->available_copies--;
            echo "Book borrowed Succesfully.\n"
        }else{
            echo"Book not available"
        }-
      }
    
      public function return_book(){
            $this->available_copies ++;
            echo "Book returned succesfully"
      }
    
    }
    
    class fiction extends books {
        public function __construct(public $genre){
        parent::__construct(protected $book_title,protected $author , protected int $avialble_copies)
        
        public function display_info(){
            parent::display_book_info();
            echo "genre : Ficitonal({$this->genre}) ";
        }
    
    }
    }
    
    class non_fiction extends books {
        public function __construct(public $subject){
        parent::__construct(protected $book_title,protected $author , protected int $avialble_copies)
        
        public function display_info(){
            parent::display_book_info();
            echo "genre : Ficitonal({$this->subject}) ";
        }
    
    }
    }
    
    
    class User {
        public $username;
    
        public function __construct($username) {
            $this->username = $username;
        }
    }