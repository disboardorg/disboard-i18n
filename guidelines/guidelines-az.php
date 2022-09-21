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
    Son Dəyişiklik: 2020-04-10
</p>
<p>
    Təhlükəsiz bir cəmiyyəti qorumaq üçün sizin riayət etməli olduğunuz bəzi qaydalar var  <br>
    DISBOARD-dan istifadə etməklə siz aşağıdakı təlimatlarla razılaşırsınız: 
</p>
<ul>
    <li>
        DISBOARD-da digər istifadəçilər tərəfindən görülə bilən serverin metasında (başlıq, təsvir və şəkil), rəydə və ya digər məzmunda söyüş, çirkin sözlər və ya NSFW (seksual məzmun) bizim mülahizəmizə uyğun olaraq istifadə edilməsinə icazə verilmir. Bu, məzmunun silinməsinə gətirib çıxaracaq, lakin siz məzmunu düzgün dillə yenidən yerləşdirə biləcəksiniz. 
    </li>
    <li>
        Siz yaşadığınız ölkədə heç bir qanun və ya qaydaları poza və ya onların pozulmasını təşviq edə bilməzsiniz. 
    </li>
    <li>
        Serverlər pozur  <a href="https://discordapp.com/guidelines" target="_blank">Discord İcma Qaydaları </a> icazə verilmir .
    </li>
    <li>
        DISBOARD-da serverə bump vurmaq ("avtomatik bump") kimi hərəkətləri avtomatik etmək üçün botların və ya digər skriptlərin istifadəsinə icazə verilmir. Bump istifadə etmək üçün  rəy yaratmaq və s. əl ilə edilməlidir. 
    </li>
    <li>
        Siz başqa serverləri yönləndirmək və ya reklam etmək məqsədi ilə xidmət edən və ya məzmunu olmayan serverləri siyahıya sala bilməzsiniz (Bizim ixtiyarımıza görə). 
    </li>
    <li>
        Siz DISBOARD-da istifadəçiləri mükafatlandıra və ya hərəkətləri etməyə məcbur edə bilməzsiniz. Məsələn, istifadəçilərinizi serverdə gözəl rəy yazdıqlarına görə mükafatlandıra və ya onları serverə zərbə vurmağa məcbur edə bilməzsiniz. 
    </li>
    <li>
        Birdən çox rəy təqdim etmək üçün birdən çox Discord hesabı yarada bilməzsiniz. Zəhmət olmasa hər hesaba 1 rəy göndərin. 
    </li>
    <li>
        Əsasən NSFW (bizim mülahizəmizə görə cinsi məzmun) əsasında olan bütün serverlər DISBOARD-da "NSFW" kimi qeyd edilməlidir. 
    </li>
</ul>

<p>
    Bizimkilərə də baxın  <a href="<?= Url::to(['/site/tos']) ?>"><?= Yii::t('app', 'Term of Services'); ?></a>
</p>
