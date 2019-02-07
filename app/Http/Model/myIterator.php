<?php
namespace App\Http\Model;

Interface myIterator {
    public function __construct($collection);

    public function current();

    public function key();

    public function next();

    public function valid();
}
?>