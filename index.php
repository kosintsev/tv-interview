<?php
#2
/**
# Это cron-задание запускает скрипт каждую миинуту
* * * * *  php banner.php
# Ждёт 30 сек и снова запускает его
* * * * *  sleep 30; php banner.php
*/


#3
$sql = <<<SQL
SELECT b.title, count(ba.book_id) AS authors FROM books b
JOIN book_author ba ON ba.book_id = b.id
JOIN authors a ON a.id = ba.author_id
GROUP BY ba.book_id
HAVING authors = 3
SQL;
