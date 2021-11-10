<!DOCTYPE <!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <title>ユーザー一覧</title>
        <link rel="stylesheet" href="css/style.css" type="text/css" />
    </head>
    <body>
        <h1>ユーザー一覧</h1>
        <?php foreach($users as $user){?>
        <ul>
            <li><?php print $user->name; ?></li>
            <li><?php print $user->age; ?>歳</li>
            <li><?php $user->drink(); ?></li>
        </ul>
            <?php }?>
    </body>
</html>