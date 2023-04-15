<?php

namespace App;

class Book
{
    private static $id_num = 1;
    private $id;
    private $title;
    private $authors;
    private $publisher;
    private $year;

    public function __construct()
    {
        $this->id = self::$id_num++;
    }

    public function __get($temp)
    {
        return $this->$temp;
    }

    public function __toString()
    {
        $s = "\nId: " . $this->id . "\nНазвание: " . $this->title;
        foreach ($this->authors as $index => $author) {
            $s = $s . "\nАвтор №" . ($index + 1) . ": " . $author;
        }
        return $s . "\nИздательство: " . $this->publisher . "\nГод: " . $this->year;
    }

    public function getId()
    {
        return $this->id;
    }
    public function setTitle($title)
    {
        $this->title = $title;
        return $this;
    }

    public function setAuthors($authors)
    {
        $this->authors = $authors;
        return $this;
    }

    public function setPublisher($publisher)
    {
        $this->publisher = $publisher;
        return $this;
    }

    public function setYear($year)
    {
        $this->year = $year;
        return $this;
    }
}