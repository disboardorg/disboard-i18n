<?php
use yii\helpers\Url;

$this->title = Yii::t('app', 'Guidelines');
?>
<h1>
    <?= $this->title ?>
</h1>
<p class="has-text-right is-italic">
    Last Modified: 2021-01-06
</p>
<p>
    In order to keep a safe community, there are some guidelines which need to be followed by you <br>
    By using DISBOARD, you agree to the following guidelines:
</p>
<ul>
    <li>
        The use of swear words, dirty words or NSFW (sexual content) to our discretion in a server's meta (title, description and picture), review or other content that may be seen by other users on the DISBOARD site is not allowed. This will lead to the removal of the content, however, you'll be able to repost the content with appropriate meta.
    </li>
    <li>
        You may not violate any laws or regulations in your country of residence or promote the violation of them.
    </li>
    <li>
        Servers in violation of the <a href="https://discordapp.com/guidelines" target="_blank">Discord Community Guidelines</a> are not allowed.
    </li>
    <li>
        The use of bots or other scripts to perform actions on our service such as bumping a server ("auto-bump") is not allowed. Bumping, creating reviews and other actions must be done manually.
    </li>
    <li>
        You may not list servers which serve for the sole purpose of redirecting or advertising other servers or have no content (To our discretion).
    </li>
    <li>
        You may not reward, harass or force users to interact with our service (e.g. bumping or reviewing a server). Provided below as a courtesy is a non-exhaustive list of examples of rewards that are not permitted:
        <ul>
            <li>XP (or other forms of virtual payment)</li>
            <li>Any form of non-virtual payment</li>
            <li>Leaderboards (or other forms of explicit tracking of users' actions on our service)</li>
            <li>Roles (or other benefits over users not interacting with our service)</li>
            <li>Gifts (e.g. Nitro)</li>
            <li>Incentives (e.g. entry into a raffle)</li>
        </ul>
    </li>
    <li>
        You may not use multiple Discord accounts to submit multiple reviews on a server.
    </li>
    <li>
        All servers which are mainly based on NSFW (sexual content to our discretion) must be marked as "NSFW" on the DISBOARD site.
    </li>
</ul>

<p>
    See also our <a href="<?= Url::to(['/site/tos']) ?>"><?= Yii::t('app', 'Term of Services'); ?></a>
</p>
