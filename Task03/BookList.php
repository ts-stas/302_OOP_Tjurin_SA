<?php

namespace App;

class BookList
{
    private $books;

    public function __construct($books)
    {
        $this->books = $books;
    }

    public function add(Book $book)
    {
        $this->books[] = $book;
    }

    public function count()
    {
        return count($this->books);
    }

    public function get($n)
    {
        if ($n < $this->count()) {
            return $this->books[$n];
        } else {
            echo "Такого элемента не существует";
        }
    }

    public function store($fileName)
    {
        file_put_contents($fileName, serialize($this->books));
    }

    public function load($fileName)
    {
        if (!file_exists($fileName)) {
            return "Такого файла не существует";
        }
        $this->books = unserialize(file_get_contents($fileName));
    }
}
