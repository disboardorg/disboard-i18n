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
<div id="general-guidelines">
    <h2>General Guidelines</h2>
    <p>Below are a set of guidelines that apply to the entirety of our service.</p>
    <ul>
        <li>You may not violate any laws or regulations in your country of residence, or promote the violation of them.</li>
        <li>You may not automate any form of actions on our service.</li>
        <li>You may not use foul and/or sexual language on our service (to our discretion), in user generated content (content posted by users).</li>
        <li>
            You may not reward, harass, or force users to interact with our service (e.g. bumping or reviewing a server), including but not limited to:
            <ul>
                <li>Any form of virtual or non-virtual payment.</li>
                <li>Leaderboards.</li>
                <li>Counters.</li>
                <li>Roles (or other benefits over users not interacting with our service).</li>
                <li>Incentives (promises for a future event).</li>
            </ul>
        </li>
    </ul>
</div>
<div id="server-guidelines">
    <h2>For Servers</h2>
    <p>Below are a set of guidelines that apply to servers listed on our service and serve as an extension of the <a href="#general-guidelines">General Guidelines</a>.</p>
    <ul>
        <li>You may not list servers which serve the sole purpose of redirecting or advertising other servers, or which have no content within them (to our discretion).</li>
        <li>You may not violate the <a href="https://discord.com/guidelines" target="_blank">Discord Community Guidelines</a>.</li>
        <li>You may not list servers which are designed to mislead users, or which contains user generated content (title, description, icon, tags, or other content on your listing) which is irrelevant to the server itself.</li>
        <li>All servers which are mainly based on NSFW content (to our discretion) must be marked as "NSFW" on the DISBOARD site.</li>
    </ul>
</div>
<div id="review-guidelines">
    <h2>For Reviews</h2>
    <p>Below are a set of guidelines that apply to reviews posted of listings on our service and serve as an extension of the <a href="#general-guidelines">General Guidelines</a>.</p>
    <ul>
        <li>You may not utilise multiple Discord accounts to submit multiple reviews on a listing.</li>
        <li>
            You may not review servers that you have been banned from, including but not limited to:
            <ul>
                <li>Using alternate accounts to bypass bans.</li>
                <li>Requesting users to review on your behalf.</li>
            </ul>
        </li>
        <li>
            You may not post reviews that are harmful, or defame a user or server's reputation (to our discretion), including but not limited to:
            <ul>
                <li>Accusations of violations of any Terms of Service, or similar legal agreements.</li>
                <li>Accusations of violations of the law, or other regulations.</li>
            </ul>
        </li>
    </ul>
</div>

<p>
    See also our <a href="<?= Url::to(['/site/tos']) ?>"><?= Yii::t('app', 'Terms of Service'); ?></a>
</p>
