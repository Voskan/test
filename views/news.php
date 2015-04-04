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
                    <li><a href="/add.php">Ավելացնել նորություն</a></li>
                </ul>
            </aside>

            <article>
                <h2><?=$n['title']?></h2>
                <p><?=$n['text']?></p>
                <a href="#" class="full"><?=$n['date']?></a>
                <div class="clear"></div>
            </article>

            <div class="clear"></div>
        </section>
        <footer>
            <blockquote>
                <strong>Նորությունների ժապավեն</strong> &copy; <?=date('Y')?>
            </blockquote>
        </footer>
    </body>
</html>