<?php
/**
 * Created by PhpStorm.
 * User: Reskator
 * Date: 27.10.2015
 * Time: 10:21
 */

$x=0;

while ($x++<11) {

    if ($x==11) break;

    echo ' INSERT INTO `product`(`title`, `sector`, `row`, `slug`, `category_id`, `price`) VALUES (`ticket-`'.$x.'`,`Балкон`,`16 ряд`,`ticket-b-`'.$x.'`,`1`,`1700`); <br>';

}
