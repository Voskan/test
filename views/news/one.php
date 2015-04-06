<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Նորությունների ժապավեն</title>
    <link rel="stylesheet" href="views/style.css">
</head>
<body>
<header>
    <h1>Նորությունների ժապավեն</h1>
</header>
<section>

    <aside>
        <ul>
            <li><a href="/">Գլխավոր էջ</a></li>
            <li><a href="#">Ավելացնել նորություն</a></li>
        </ul>
    </aside>

    <?foreach($items as $n):?>
        <article>
            <h2><a href="/news.php?id=<?=$n->id?>"><?=$n->title?></a></h2>
            <p><?=$n->description?></p>
            <a href="/news.php?id=<?=$n->id?>" class="full">Կարդալ ավելին</a>
            <div class="clear"></div>
        </article>
    <?endforeach;?>

    <div class="clear"></div>
</section>
<footer>
    <blockquote>
        <strong>Նորությունների ժապավեն</strong> &copy; <?=date('Y')?>
    </blockquote>
</footer>
</body>
</html>