<?php

use yii\helpers\Url;

$this->title = Yii::t('app', 'Guidelines');
?>
<h1>
    <?= $this->title ?>
</h1>
<p class="has-text-right is-italic">
    Last Modified: 5th of February, 2021
</p>
<p>
    In order to maintain a safe community on DISBOARD, we have defined a set of guidelines which you must follow.<br>
    By using DISBOARD, you agree to the following guidelines:
</p>
<div>
    <h2>General Guidelines</h2>
    <p>Below are a set of guidelines that applies to the entirity of our service.</p>
    <ul>
        <li>You may not violate any laws or regulations in your country of residence or promote the violation of them.</li>
        <li>You may not automate any form of actions on our service</li>
        <li>You may not use foul and/or sexual language on our service (to our discretion), in meta (content posted by users)</li>
        <li>
            You may not reward, harass or force users to interact with our service (e.g. bumping or reviewing a server), including but not limited to:
            <ul>
                <li>Any form of virtual or non-virtual payment.</li>
                <li>Leaderboards (or other forms of explicit tracking of users' actions on our service)</li>
                <li>Roles (or other benefits over users not interacting with our service)</li>
                <li>Incentives (promises for a future event)</li>
            </ul>
        </li>
    </ul>
</div>
<div>
    <h2>For Servers</h2>
    <p>Below are a set of guidelines that applies to servers listed on our service.</p>
    <ul>
        <li>You may not list servers which serve the sole purpose of redirecting or advertising other servers, or that have no content within them (to our discretion).</li>
        <li>You may not violate the <a href="https://discord.com/guidelines" target="_blank">Discord Community Guidelines</a>.</li>
        <li>You may not list servers which are designed to mislead users, or that do not contain content relevant to the listing.</li>
        <li>All servers which are mainly based on NSFW content (to our discretion) must be marked as "NSFW" on the DISBOARD site.</li>
    </ul>
</div>
<div>
    <h2>For Reviews</h2>
    <p>Below are a set of guidelines that applies to reviews posted of listings on our service.</p>
    <ul>
        <li>You may not utilise multiple Discord accounts to submit multiple reviews on a listing.</li>
        <li>You may not post reviews that are harmful or defame a user or server's reputation.</li>
    </ul>
</div>

<p>
    See also our <a href="<?= Url::to(['/site/tos']) ?>"><?= Yii::t('app', 'Term of Services'); ?></a>
</p>