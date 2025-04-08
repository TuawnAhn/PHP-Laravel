<!DOCTYPE html>
<html>

<head>
    <title>Cảm ơn bạn đã liên hệ với chúng tôi</title>
</head>

<body>
    <h1>Cảm ơn, {{ $data['name'] }}!</h1>
    <p>Chúng tôi đã nhận được tin nhắn của bạn và rất cảm kích vì bạn đã liên hệ với chúng tôi. Sau đây là những gì bạn
        đã gửi:</p>
    <ul>
        <li><strong>Tên người gửi:</strong> {{ $data['name'] }}</li>
        <li><strong>Email:</strong> {{ $data['email'] }}</li>
        <li><strong>Nội dung liên hệ:</strong> {{ $data['message'] }}</li>
    </ul>
    <p>Nhóm của chúng tôi sẽ sớm phản hồi bạn. Nếu bạn có bất kỳ câu hỏi khẩn cấp nào, vui lòng liên hệ với chúng tôi
        theo địa chỉ <a href="mailto:anhntph51526@gmail.com">anhntph51526@gmail.com</a>.</p>
    <p>Trân trọng,<br>Nhóm hỗ trợ Vineta</p>
</body>

</html>
