<? if ($row): ?> 
<? foreach ($row as $key) : ?>
    <div>
        <span><?= $key['id'] ?>.</span>
        <span><?= $key['task'] ?></span>
        <span><?= $key['dataTime'] ?></span>
    </div>
<?php endforeach; ?>
<? else : ?>
    <div>
        <span>Задач пока что нет</span>
    </div>
<? endif; ?>