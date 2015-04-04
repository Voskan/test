<?php

require_once __DIR__ . '/models/news.php';

$news = News_getAll();

require_once __DIR__ . '/views/index.php';