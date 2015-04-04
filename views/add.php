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
        <form action="/add.php" method="post">
            <table>
                <tr>
                    <td>Վերնագիրը։ </td>
                    <td><input type="text" name="title"></td>
                </tr>
                <tr>
                    <td>Կարճ նկարագրությունը։ </td>
                    <td><textarea name="description" rows="4" cols="40"></textarea></td>
                </tr>
                <tr>
                    <td>Տեքստը։ </td>
                    <td><textarea name="text" rows="8" cols="40"></textarea></td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="submit" name="submit" value="ՈՒղարկել"></td>
                </tr>
            </table>
        </form>
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