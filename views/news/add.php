<!DOCTYPE html>
<html>
<head lang="ru">
    <meta charset="UTF-8">
    <title>Add news</title>
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
        <?if(!empty($_SESSION['error'])):?>
            <div class="error">
                <p><?=$_SESSION['error']?></p>
            </div>
            <? unset($_SESSION['error'])?>
        <?endif?>
        <form action="#" method="post">
            <table>
                <tr>
                    <td>Վերնագիրը</td>
                    <td><input type="text" name="title"></td>
                </tr>
                <tr>
                    <td>Կարճ նկարագրությունը</td>
                    <td><textarea name="description"></textarea></td>
                </tr>
                <tr>
                    <td>Ամբողջական տեքստը</td>
                    <td><textarea name="text"></textarea></td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="submit" value="Պահպանել"></td>
                </tr>
            </table>
        </form>
    </section>
    <div class="clear"></div>
</section>
<footer>
    <blockquote>&copy; 2015 | Բոլոր իրավունքները պաշտպանված են:</blockquote>
</footer>
</body>
</html>