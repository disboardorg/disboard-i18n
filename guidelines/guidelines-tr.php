<?php
use yii\helpers\Url;

$this->title = Yii::t('app', 'Yönergeler');
?>
<h1>
    <?= this->title ?>
</h1>
<p class="has-text-right is-italic">
    Son Değiştirilme Tarihi: 2020-04-10
</p>
<p>
    Güvenli bir topluluk sağlamak için, uymanız gereken bazı yönergeler vardır <br>
    DISBOARD'ı kullanarak aşağıdaki yönergeleri kabul etmiş olursunuz:
</p>
<ul>
    <li>
        Bir sunucunun meta (başlık, açıklama ve resim), inceleme veya DISBOARD'da diğer kullanıcılar tarafından görülebilecek diğer içeriklerde, kendi takdirimize bağlı olarak küfür, küfür veya NSFW (cinsel içerik) kullanılmasına izin verilmez. Bu, içeriğin kaldırılmasına yol açacaktır, ancak içeriği uygun bir dille yeniden gönderebileceksiniz.
    </li>
    <li>
        İkamet ettiğiniz ülkedeki herhangi bir yasa veya düzenlemeyi ihlal edemez veya bunların ihlal edilmesini teşvik edemezsiniz.
    </li>
    <li>
        <a href="https://discordapp.com/guidelines" target="_blank">Discord Topluluk Kurallarını</a> ihlal eden sunuculara izin verilmez.
    </li>
    <li>
        DISBOARD'da bir sunucuyu çarpma ("otomatik çarpma") gibi eylemleri otomatik olarak yapmak için botların veya diğer komut dosyalarının kullanılmasına izin verilmez. Bumping, inceleme oluşturma vb. manuel olarak yapılmalıdır.
    </li>
    <li>
        Yalnızca diğer sunucuları yeniden yönlendirmek veya reklamını yapmak amacıyla hizmet veren veya içeriği olmayan sunucuları listeleyemezsiniz (takdirimize bağlı olarak).
    </li>
    <li>
        DISBOARD'da kullanıcıları ödüllendiremez veya eylemde bulunmaya zorlayamazsınız. Örneğin, kullanıcılarınızı bir sunucuya güzel bir inceleme gönderdikleri için ödüllendiremez veya onları bir sunucuya çarpmaya zorlayamazsınız.
    </li>
    <li>
        Birden fazla inceleme göndermek için birden fazla Discord hesabı oluşturamazsınız. Lütfen kişi başına sadece 1 yorum gönderin.
    </li>
    <li>
        Esas olarak NSFW'ye dayanan tüm sunucular (kendi takdirimize bağlı olarak cinsel içerik), DISBOARD'da "NSFW" olarak işaretlenmelidir.
    </li>
</ul>

<p>
    Ayrıca <a href="<?= Url::to(['/site/tos']) ?>"><?= Yii::t('app', 'Hizmet Şartları'); ?></a>
</p>
