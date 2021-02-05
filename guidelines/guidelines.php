<?php
use yii\helpers\Url;

$this->title = Yii::t('app', 'Guidelines');
?>
<h1>
    <?= $this->title ?>
</h1>
<p class="has-text-right is-italic">
    Last Modified: 2020-04-10
</p>
<p>
    In order to maintain a safe community on DISBOARD, we have defined a set of guidelines which you must follow.<br>
    By using DISBOARD, you agree to the following guidelines:
</p>

<p>
    See also our <a href="<?= Url::to(['/site/tos']) ?>"><?= Yii::t('app', 'Term of Services'); ?></a>
</p>
