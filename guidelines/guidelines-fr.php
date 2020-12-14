<?php
use yii\helpers\Url;

$this->title = Yii::t('app', 'Guidelines');
?>
<h1>
    <?= $this->title ?>
</h1>
<p class="has-text-right is-italic">
    Dernière modification: 10 avril 2020
</p>
<p>
    Afin de garder une communauté saine, vous devrez suivre quelques règles <br>
    En utilisant DISBOARD, vous acceptez les règles suivantes:
</p>
<ul>
    <li>
        L'utilisation d'insultes ou de contenus NSFW (contenu sexuel) discrètement dans une méta-donnée (titre, description ou image), une critique ou tout autre contenu visible par les utilisateurs de DISBOARD est interdit. En cas de non-respect, le contenu pourra être retiré jusqu'à ce que celui-ci soit en accord avec la charte d'utilisation    
    </li>
    <li>
        Vous ne devez pas enfreindre les lois de votre pays ou inciter à leurs violations
    </li>
    <li>
        Les serveurs violents les<a href="https://discordapp.com/guidelines" target="_blank">règles communautaires de Discord</a> sont interdits.
    </li>
    <li>
        L'utilisation d'automates (bots, scripts etc..) pour automatiser une action sur DISBOARD ("bump" un serveur, mettre un avis) est interdit. Les dites actions doivent être faites manuellement
    </li>
    <li>
        Vous ne devez pas ajouter/faire apparaître de serveurs ayant pour seul but de faire la publicité, pour rediriger vers un autre serveur ou n'ayant aucun contenue (à notre appréciation)
    </li>
    <li>
        Vous ne devez pas forcer un utilisateur à faire une action sur DISBOARD (un avis positif, un bump)      
    </li>
    <li>
       Vous ne devez pas créer/vous servir de plusieurs comptes discord pour mettre plusieurs avis. La limite est de 1 avis par personne
    </li>
    <li>
        Tous les serveurs NSFW (contenus sexuels, à notre appréciation) doivent se déclarent comme tel dans DISBOARD (cocher la case NSFW dans le serveur sur DISBOARD)  
    </li>
</ul>

<p>
    Consulter aussi nos <a href="<?= Url::to(['/site/tos']) ?>"><?= Yii::t('app', 'Term of Services'); ?></a>
</p>
