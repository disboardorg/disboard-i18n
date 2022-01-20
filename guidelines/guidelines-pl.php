<?php
/*
 * DO NOT EDIT ANY CODE WITHIN <?php ?> <?= ?> TAGS
 * YOU CAN TRANSLATE THEM IN MESSAGE FILES
 */
use yii\helpers\Url;

$this->context->layout = 'focus';

$this->title = Yii::t('app', 'Guidelines');
?>
<h1>
    <?= $this->title ?>
</h1>
<p class="has-text-right is-italic">
    Ostatnia modyfikacja: 10.04.2020
</p>
<p>
    Aby zapewnić bezpieczną społeczność, musisz przestrzegać kilku wytycznych.<br>
    Korzystając z DISBOARD, zgadzasz się na następujące wytyczne:
</p>
<ul>
    <li>
        Używanie przekleństw, wulgaryzmów lub NSFW (treści seksualnych) w meta serwera (tytuł, opis i zdjęcie), recenzji lub innych treści, które mogą być widoczne dla innych użytkowników w DISBOARD, jest niedozwolone. Doprowadzi to do usunięcia treści, jednak będziesz mógł ponownie opublikować treść we właściwym języku.
    </li>
    <li>
        Nie możesz łamać prawa w kraju w którym mieszkasz, ani zachęcać innych do jego nieprzestrzegania.
    </li>
    <li>
        Serwery naruszające <a href="https://discord.com/guidelines" target="_blank">Wytyczne dla Społeczności Discord</a> są niedozwolone.
    </li>
    <li>
        Używanie botów lub innych skryptów do automatycznego wykonywania działań na platformie DISBOARD, takich jak podbijanie serwera („auto-bump”) jest niedozwolone. Podbijanie serwera, tworzenie recenzji itp. musi być wykonywane ręcznie.
    </li>
    <li>
        Nie możesz dodawać serwerów, które służą wyłącznie do przekierowywania, reklamowania innych serwerów lub nie zawierają treści.
    </li>
    <li>
        Nie możesz nagradzać ani zmuszać użytkowników do wykonywania działań na platformie DISBOARD. Np. nie możesz nagradzać użytkowników za zamieszczenie ładnej recenzji serwera lub zmuszać ich do podbijania serwera.
    </li>
    <li>
        Nie możesz tworzyć multikont Discord w celu przesyłania wielu recenzji. Jedna osoba może zamieścić 1 recenzję.
    </li>
    <li>
        Wszystkie serwery oparte głównie na NSFW (treści seksualne - według naszego uznania) muszą być oznaczone jako „NSFW” w DISBOARD.
    </li>
</ul>

<p>
    Zobacz także nasze <a href="<?= Url::to(['/site/tos']) ?>"><?= Yii::t('app', 'Term of Services'); ?></a>
</p>
