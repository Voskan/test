<!DOCTYPE html>
<html>
<head lang="ru">
    <meta charset="UTF-8">
    <title>All news</title>
    <link rel="stylesheet" href="/views/news/css/style.css">
</head>
<body>
    <header>
        <h2>Նորություններ</h2>
    </header>
    <section id="main">
        <nav>
            <ul>
                <li><a href="/">Բոլոր նորությունները</a></li>
                <li><a href="/?ctrl=admin&act=add">Ավելացնել նորություն</a></li>
            </ul>
        </nav>
        <section id="main-content">
            <?foreach($items as $item):?>
                <article>
                    <h3><a href="/?ctrl=news&act=one&id=<?=$item->id?>"><?=$item->title?></a></h3>
                    <p><?=$item->description?></p>
                    <div>
                        <span><?=$item->date?></span>
                        <a href="/?ctrl=news&act=one&id=<?=$item->id?>">Մանրամասն</a>
                    </div>
                </article>
            <?endforeach?>
        </section>
        <div class="clear"></div>
    </section>
    <footer>
        <blockquote>&copy; 2015 | Բոլոր իրավունքները պաշտպանված են:</blockquote>
    </footer>
</body>
</html>