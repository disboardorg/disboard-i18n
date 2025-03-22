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
    Son Güncelleme: 2020-04-10
</p>
<p>
    Güvenli bir topluluk sağlamak için, uymanız gereken bazı yönergeler bulunmaktadır <br>
    DISBOARD'u kullanarak, aşağıdaki yönergeleri kabul etmiş olursunuz:
</p>
<ul>
    <li>
        Sunucunun meta bilgilerinde (başlık, açıklama ve resim), değerlendirmelerde veya DISBOARD'da diğer kullanıcılar tarafından görülebilecek içeriklerde küfür, uygunsuz kelimeler veya NSFW (cinsel içerik) kullanımına izin verilmez. Bu, içeriğin kaldırılmasına yol açacaktır; ancak, uygun bir dil kullanarak içeriği yeniden paylaşabilirsiniz.
    </li>
    <li>
        İkamet ettiğiniz ülkedeki herhangi bir yasa veya düzenlemeyi ihlal edemez veya ihlal edilmesini teşvik edemezsiniz.
    </li>
    <li>
        <a href="https://discordapp.com/guidelines" target="_blank">Discord Topluluk Kurallarını</a> ihlal eden sunuculara izin verilmez.
    </li>
    <li>
        Sunucuyu öne çıkarma ("otomatik öne çıkarma") gibi DISBOARD'da otomatik işlemleri gerçekleştirmek için bot veya başka komut dosyaları kullanımına izin verilmez. Öne çıkarma, değerlendirme oluşturma vb. işlemler manuel olarak yapılmalıdır.
    </li>
    <li>
        Sadece diğer sunuculara yönlendirme veya reklam amacıyla hizmet veren ya da içeriği olmayan (bizim takdirimize bağlı olarak) sunucuları listeleyemezsiniz.
    </li>
    <li>
        Kullanıcıları DISBOARD'da belirli işlemleri yapmaları için ödüllendiremez veya zorlayamazsınız. Örneğin, kullanıcılarınızı bir sunucu hakkında olumlu değerlendirme yazmaları veya bir sunucuyu öne çıkarmaları için ödüllendiremez veya zorlayamazsınız.
    </li>
    <li>
        Birden fazla değerlendirme yapmak için birden fazla Discord hesabı oluşturamazsınız. Lütfen kişi başına yalnızca 1 değerlendirme yapın.
    </li>
    <li>
        Ağırlıklı olarak NSFW (bizim takdirimize bağlı olarak cinsel içerik) içeren tüm sunucular DISBOARD'da "NSFW" olarak işaretlenmelidir.
    </li>
</ul>

<p>
    Ayrıca <a href="<?= Url::to(['/site/tos']) ?>"><?= Yii::t('app', 'Term of Services'); ?></a> sayfamıza da göz atın. 