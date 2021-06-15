<?php
use yii\helpers\Url;

$this->title = Yii::t('app', 'Pokyny');
?>
<h1>
    <?= $this->title ?>
</h1>
<p class="has-text-right is-italic">
    Poslední změna: 2020-04-10
</p>
<p>
    Pro udržení bezpečné komunity zde máme pokyny, které je třeba dodržovat. <br>
    Používáním DISBOARDU souhlasíš s níže uvedenými:
</p>
<ul>
    <li>

        Použití nadávek, nevhodných slov nebo NSFW (sexuální obsah) podle našeho uvážení v názvu, popisku, obrázku serveru, recenze nebo jiný obsah, který mohou vidět ostatní uživatelé na DISBOARDU, není povoleno. To povede k odebrání obsahu, budete však moci obsah znovu zveřejnit ve slušnější verzi.
    </li>
    <li>
        Nesmíte porušovat žádné zákony nebo předpisy ve své zemi pobytu ani podporovat jejich porušování.
    </li>
    <li>
        Servery porušující <a href="https://discordapp.com/guidelines" target="_blank"> Pokyny Discord Komunity</a> nejsou povoleny.
    </li>
    <li>
        Použití botů nebo jiných skriptů k automatickému provádění akcí na DISBOARDU, jako je bumpnutí serveru („auto-bump“), není povoleno. Bumpnutí, vytváření recenzí atd. musí být provedeno ručně.
    </li>
    <li>
        Nesmíte propagovat servery, které slouží výhradně k přesměrování nebo inzerci jiných serverů nebo nemají žádný obsah (podle našeho uvážení).
    </li>
    <li>
        V DISBOARDU nesmíte odměňovat ani nutit uživatele k provádění akcí. Například nesmíte odměňovat své uživatele za zveřejnění pěkné recenze o serveru nebo je nutit, aby server bumpnuli.
    </li>
    <li>
        Není povoleno vytváření více Discord účtů za účelem zveřejnění vícero recenzí. Zveřejňujte prosím jen jednu recenzi na osobu.
    </li>
    <li>
        Všechny servery, které jsou založeny hlavně na NSFW (sexuální obsah podle našeho uvážení), musí být v DISBOARDU označeny jako „NSFW“.
    </li>
</ul>

<p>
    Koukni také na naše <a href="<?= Url::to(['/site/tos']) ?>"><?= Yii::t('app', 'Podmínky používání služeb'); ?></a>
</p>
