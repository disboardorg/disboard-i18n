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
    Zuletzt geändert: 2020-04-10
</p>
<p>
    Um eine sichere Gemeinschaft zu gewährleisten, gibt es einige Richtlinien, die von dir befolgt werden müssen <br>
    Durch die Verwendung von DISBOARD erklärst du dich mit folgenden Richtlinien einverstanden:
</p>
<ul>
    <li>
        Die Verwendung von Schimpfwörtern, Flüchen oder NSFW (sexueller Inhalt) nach unserem Ermessen in der Meta (Titel, Beschreibung und Bild), Rezension oder anderen Inhalten eines Servers, welche von anderen Benutzern auf DISBOARD gesehen werden können, ist nicht erlaubt. Dies führt zur Entfernung des Inhalts, jedoch hast du die Möglichkeit, den Inhalt in einer angemessenen Sprache neu zu veröffentlichen.
    </li>
    <li>
        Du darfst keine Gesetze oder Vorschriften in deinem Aufenthaltsland verletzen oder deren Verletzung fördern.
    </li>
    <li>
        Server, die gegen die <a href="https://discord.com/guidelines" target="_blank">Discord Community Richtlinien</a> verletzen, sind nicht erlaubt.
    </li>
    <li>
        Die Verwendung von Bots oder anderen Skripten zur automatischen Ausführung von Aktionen auf DISBOARD, wie z.B. das Bumpen eines Servers ("auto-bump") ist nicht erlaubt. Bumpen, das Schreiben von Rezensionen usw. muss manuell getan werden.
    </li>
    <li>
        Du darfst keine Server hinzufügen, die nur der Umleitung oder Werbung eines anderen Servers dienen oder keinen Inhalt haben (nach unserem Ermessen).
    </li>
    <li>
        Du darfst Nutzer nicht belohnen oder zwingen, Aktionen auf DISBOARD durchzuführen. Beispielsweise darfst du Nutzer nicht dafür belohnen, eine positive Rezension auf einem Server zu schreiben, oder sie zwingen, einen Server zu bumpen.
    </li>
    <li>
        Du darfst nicht mehrere Discord-Konten erstellen, um mehrere Rezensionen zu schreiben. Bitte schreibe nur eine Rezension pro Person.
    </li>
    <li>
        Alle Server, die hauptsächlich auf NSFW (sexuelle Inhalte nach unserem Ermessen) basieren, müssen auf DISBOARD als "NSFW" markiert werden.
    </li>
</ul>

<p>
    Siehe auch unsere <a href="<?= Url::to(['/site/tos']) ?>"><?= Yii::t('app', 'Term of Services'); ?></a>
</p>
