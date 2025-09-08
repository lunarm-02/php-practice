<?php

$books = [
    ['isbn' => '978-4-7981-6364-2', 'title' => '独習Python'],
    ['isbn' => '978-4-7981-5112-0', 'title' => '独習Java 新版'],
    ['isbn' => '978-4-7981-5382-7', 'title' => '独習C# 新版'],
];

$isbn = [];
foreach($books as $book) {
    ['isbn' => $isbn[]] = $book;  // $books内の連想配列のキーから値を取り出して、isbnの末尾に格納
}

print_r($isbn);  
?>