<?php

/**
* Article Model
*/

class Article extends Illuminate\Database\Eloquent\Model
{

    public $timestamps = false;

    //默认是models类的小写复数 即articles
    protected $table = 'weibo';

    // public static function first()
    // {
    //   $connection = mysqli_connect('localhost', 'root', '123456');
    //   if (!$connection) {
    //       die('Could not connect: ' . mysqli_error());
    //   }

    //   $connection->set_charset('UTF8');

    //   $connection->select_db('crawl_data');

    //   $result = $connection->query('SELECT * FROM weibo');

    //   if ($row = mysqli_fetch_array($result)) {
    //       return $row;
    //   }

    //   mysqli_close($connection);
    // }
}