<?php
use yii\helpers\Url;

$this->title = Yii::t('app', 'Diretrizes');
?>
<h1>
    <?= $this->title ?>
</h1>
<p class="has-text-right is-italic">
    Última atualização: 2020-04-10
</p>
<p>
    A fim de manter uma comunidade segura, existem algumas diretrizes que devem ser seguidas por si <br>
    Por usar o DISBOARD, você concorda com as seguintes diretrizes:
</p>
<ul>
    <li>
        O uso de palavrões, palavras porcas ou NSFW (conteúdo sexual) a nosso critério nos meta dados de um servidor (título, descrição e imagem), avaliações ou outros conteúdos que possam ser vistos por outros utilizadores no DISBOARD não é permitido. Isto levará à remoção do conteúdo. Contudo, poderá postar novamente o conteúdo com uma linguagem adequada.
    </li>
    <li>
        Você não pode violar nenhuma lei ou regulamento no seu país de residência ou promover a sua violação.
    </li>
    <li>
        Servidores que violem as <a href="https://discordapp.com/guidelines" target="_blank">Diretrizes da comunidade do Discord/a> não são permitidos.
    </li>
    <li>
        O uso de bots ou outras scrips para automar ações no DISBOARD tais como fazer bump a um servidor ("auto-bump") não é permitido. Fazer bump, criar reviews e etc. deve ser feito manualmente.
    </li>
    <li>
        Vcê não pode listar servidores que servem como único propósito redireccionar ou promover outros servidores ou que não tenham conteúdo (A nosso critério).
    </li>
    <li>
        Você não pode recompensar nem forçar utilizadores a realizar ações no DISBOARD. Por exemplo, não pode recompensar os seus utilizadores por postar uma boa avaliação num servidor ou forçá-los a fazer bump a um servidor.
    </li>
    <li>
        Você não pode criar múltiplas contas do Discord para submeter múltiplas avaliações. Por favor apenas poste 1 avaliação por pessoa.
    </li>
    <li>
        Todos os servidores que são maioritariamente baseados em (conteúdo sexual a nosso critério) devem ser marcados como "NSFW" no DISBOARD.
    </li>
</ul>

<p>
    Veja também os nossos <a href="<?= Url::to(['/site/tos']) ?>"><?= Yii::t('app', 'Termos de Serviço'); ?></a>
</p>
