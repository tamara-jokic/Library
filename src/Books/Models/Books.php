<?php

namespace Library\Books\Models;

class Books
{
    public $book_code;
    public $title;
    public $edition;
    public $date_of_issuing;
    public $availability;

    public function __construct($book_code, $title, $edition, $date_of_issuing, $availability)
    {
        $this->book_code = $book_code;
        $this->title = $title;
        $this->edition = $edition;
        $this->date_of_issuing = $date_of_issuing;
        $this->availability = $availability;
    }

    public function __toString()
    {
        return $this->title;
    }

    public function __toArray()
    {
        return [
            'book_code' => $this->book_code,
            'title' => $this->title,
            'edition' => $this->edition,
            'date_of_issuing' => $this->date_of_issuing,
            'availability' => $this->availability,
        ];
    }
}