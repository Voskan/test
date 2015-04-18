<?php
require_once __DIR__.'/models/News.php';

$items = News::getAll();

include_once __DIR__.'/views/index.php';