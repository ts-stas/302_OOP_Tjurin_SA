<?php

use App\Book;
use App\BookList;

function runTest()
{
    //Создаем первую книгу и список книг
    $bl1 = new BookList(array());
    $b1 = new Book();
    $b1->setTitle("Мастер и Маргарита")
    ->setAuthors(array("М.А. Булгаков"))
    ->setPublisher("журнал <Москва>")
    ->setYear(1973);
    echo $b1 . PHP_EOL;

    //Добавляем первую книгу в список
    $bl1->add($b1);
    echo "Количество книг в списке: " . $bl1->count() . PHP_EOL;

    //Создаем вторую книгу (с несколькими авторами)
    $b2 = new Book();
    $b2->setTitle("Алгебра 7 класс")
    ->setAuthors(array("О.Г. Костров", "М.В. Мещеряков"))
    ->setPublisher("МГУ")
    ->setYear(2022);
    echo $b2 . PHP_EOL;

    //Добавляем вторую книгу в список
    $bl1->add($b2);
    echo "Количество книг в списке: " . $bl1->count() . PHP_EOL;

    //Сериализуем текущий список книг
    $bl1->store("Booklist.bin");

    //Создаем третью книгу
    $b3 = new Book();
    $b3->setTitle("Дом")
    ->setAuthors(array("А. Олегов"))
    ->setPublisher("БВГ")
    ->setYear(2022);
    echo $b3 . PHP_EOL;

    //Добавляем третью книгу в список
    $bl1->add($b3);
    echo "Количество книг в списке: " . $bl1->count() . PHP_EOL;

    //Выводим первый список книг с помощью метода get()
    for ($i = 0; $i < $bl1->count(); $i++) {
        echo "\nBookList1" . $bl1->get($i) . PHP_EOL;
    }

    //Создаем второй список книг, пока что пустой
    $bl2 = new BookList(array());
    echo "Количество книг в списке: " . $bl2->count() . PHP_EOL;

    //Загружаем в него сохраненный список и выводим его
    $bl2->load("Booklist.bin");
    echo "Количество книг в списке: " . $bl2->count() . PHP_EOL;
    for ($i = 0; $i < $bl2->count(); $i++) {
        echo "\nBooklist2" . $bl2->get($i) . PHP_EOL;
    }
}
