<?php

use yii\helpers\Url;

?>
<ol id="">
    <? foreach ($data as $id) { ?>
      <li><a class="link_country" href="<?= Url::to(['country/view', 'id' => $id['cont_name']]) ?>" data-id="<?= $id['cont_name'] ?>"><?= $id['browser_name'] ?></a></li>
    <? } ?>
</ol>

