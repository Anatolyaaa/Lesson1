<?php
$userName = "Митрошин Анатолий" ;
$userAge = "23";
$userCountry = "Russia";
$userCity = "Kazan";
if ($userName) {
    ?>
    <div>
        <h2>Информация о человеке</h2>
        <p> Имя <?= $userName ?> </p>
        <p> Возраст <?= $userAge ?></p>
        <p> Страна <?= $userCountry ?></p>
        <p> Город <?= $userCity ?></p>
    </div>
<?php } else { ?>
    <div><h2>Пользователь не изветен</h2></div>
<?php }
