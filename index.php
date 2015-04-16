<?php

require_once __DIR__.'/models/news.php';

$items = News_getAll();

include_once __DIR__.'/views/index.php';