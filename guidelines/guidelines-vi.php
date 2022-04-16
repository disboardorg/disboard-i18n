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
    Chỉnh sửa lần cuối: 2020-04-10
</p>
<p>
    Nhằm tạo ra một cộng đồng lành mạnh, chúng tôi có những điều khoản mà bạn cần chú ý thực hiện theo <br>
    Bằng việc sử dụng DISBOARD, bạn đồng ý với các điều khoản sau:
</p>
<ul>
    <li>
        Việc sử dụng từ ngữ thô tục, hoặc không lành mạnh (có tính chất khiêu dâm) trên những phần hiển thị của server (tiêu đề, mô tả và ảnh), trên nhận xét hoặc những phần khác mà có thể được nhìn thấy bởi người dùng trên DISBOARD là nghiêm cấm. Việc làm đó sẽ dẫn đến việc nội dung sẽ bị gỡ bỏ, nhưng bạn vẫn sẽ có thể đăng lại nội dung đó với từ ngữ trong sáng hơn.
    </li>
    <li>
        Bạn nên tránh việc vi phạm bất kì điều luật hay quy định nào trong quốc gia bạn đang cư trú hay cổ vũ việc vi phạm chúng.
    </li>
    <li>
        Server không được phép vi phạm <a href="https://discordapp.com/guidelines" target="_blank">Điều khoản Cộng đồng của Discord</a>.
    </li>
    <li>
        Việc sử dụng bot hoặc bất kì thương thức nào nhằm tự động hóa các hoạt động trên DISBOARD như bump server (tự động bump) đều bị cấm. Bump server, viết nhận xét, v.v. phải được thực hiện một cách thủ công.
    </li>
    <li>
        Bạn không nên liệt kê server với mục đích quảng bá cho một server khác hoặc không có nội dung rõ ràng (theo chúng tôi).
    </li>
    <li>
        Bạn không nên lạm dụng phần thưởng hoặc bắt ép thành viên làm những việc tren DISBOARD. Ví dụ, bạn không nên trao thưởng cho việc thành viên của bạn đăng tải một nhận xét tốt về server, hoặc ép họ bump cho server của bạn.
    </li>
    <li>
        Bạn không nên sử dụng nhiều tài khoản để đăng tải nhiều nhận xét. Vui lòng chỉ đăng một nhận xét cho mỗi người dùng.
    </li>
    <li>
        Những server có chủ đề về NSFW (có nội dung không phù hợp theo chúng tôi) nên có gắn mác "NSFW" trên DISBOARD.
    </li>
</ul>

<p>
    Xem qua <a href="<?= Url::to(['/site/tos']) ?>"><?= Yii::t('app', 'Điều khoản Dịch vụ'); ?></a> của chúng tôi
</p>
