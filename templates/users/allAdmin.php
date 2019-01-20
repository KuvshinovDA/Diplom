<!doctype html>
<html lang="ru">
<head>
<meta charset="UTF-8">
<title>Все администраторы</title>
<style>
    thead {
        background: lightgrey;
    }
    table { 
        border-collapse: collapse;
    }
</style>
</head>
<body>
<p><h3>Все администраторы</h3></p>
<a href="?c=users&a=add_admin">Создать нового администратора</a>

</br></br>
<a href="?c=users&a=mainAdmin">Вернуться на главную страницу</a>

</br></br>
<table border="1">
<thead>
    <tr>
        <td><h3><center>Логин</center></h3></td>
        <td><h3><center>Пароль</center></h3></td>
        <td><h3><center>Действие</center></h3></td>
    </tr>
</thead>
<tbody>

<?php 

foreach ($show_admin as $adm) { ?>
<tr>
    <td><center><?=$adm['login'] ?></center></td>
    <td><center><?=$adm['password'] ?></center></td>
    <td><center>
    
    <a href="?c=users&a=change_password&login=<?=$adm['login'] ?>">Изменить пароль</a>
    <a href="?c=users&a=delAdmin&login=<?=$adm['login'] ?>">Удалить администратора</a>

    </center></td>
    </tr>
<?php } ?>
  </tbody>
  </body>
  </html>