<?php
/*
 * DO NOT EDIT ANY CODE WITHIN <?php ?> <?= ?> TAGS
 * YOU CAN TRANSLATE THEM IN MESSAGE FILES
 */
use yii\helpers\Url;

$this->context->layout = 'focus';

$this->title = Yii::t('app', 'Directrices');
?>
<h1>
    <?= $this->title ?>
</h1>
<p class="has-text-right is-italic">
    Última vez modificado: 2020-04-10
</p>
<p>
    Para garantizar mantener una comunidad segura, estas son directrices las cuales necesitan ser acatados por usted. <br>
    Por usar DISBOARD, estas de acuerdo con las siguientes directrices:
</p>
<ul>
    <li>
        El uso de malas palabras, insultos o NSFW (contenido sexual) a nuestra discresión en el meta de un servidor (título, descripción e imagén), 
        The use of swear words, dirty words or NSFW (sexual content) to our discretion in a server's meta (title, description and picture), reseñas u otro contenido que puede ser visto por otros usuarios en DISBOARD no está permitido. Esto conducirá a la eliminación del contenido, sin embargo, podrá volver a publicar el contenido con un idioma adecuado.
    </li>
    <li>
        No puede infringir ninguna ley o normativa de su país de residencia ni promover su infracción.
    </li>
    <li>
        Servidores que violen las <a href="https://discordapp.com/guidelines" target="_blank">directrices de comunidad de Discord</a> no esta permitido.
    </li>
    <li>
        No se permite el uso de bots u otros scripts para realizar acciones automáticamente en DISBOARD, como activar un servidor ("auto-bump") no esta permitido. Bumpear, creación de reseñas, etc. deben realizarse manualmente.
    </li>
    <li>
        No puede enlistar servidores que sirven con el único propósito de redirigir o publicitar otros servidores o que no tienen contenido (a nuestra discreción).
    </li>
    <li>
        No puede recompensar ni obligar a los usuarios a realizar acciones en DISBOARD. Por ejemplo, no puede recompensar a sus usuarios por publicar una buena reseña en un servidor ni obligarlos a bumpear un servidor.
    </li>
    <li>
        No puede crear varias cuentas de Discord para enviar varias reseñas. Por favor, solo publique 1 reseña por persona.
    </li>
    <li>
        Todos los servidores que se basan principalmente en NSFW (contenido sexual a nuestra discreción) deben estar marcados como "NSFW" en DISBOARD.
    </li>
</ul>

<p>
    Vea también nuestros <a href="<?= Url::to(['/site/tos']) ?>"><?= Yii::t('app', 'Términos de servicio'); ?></a>
</p>
