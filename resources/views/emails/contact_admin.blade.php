<!DOCTYPE html>
<html>

<head>
    <title>Gửi biểu mẫu liên hệ mới</title>
</head>

<body>
    <h1>Đã nhận được liên hệ mới</h1>
    <p>Chúng tôi đã nhận được mẫu liên hệ mới với các thông tin chi tiết sau:</p>
    <ul>
        <li><strong>Tên người gửi:</strong> {{ $data['name'] }}</li>
        <li><strong>Email:</strong> {{ $data['email'] }}</li>
        <li><strong>Nội dung liên hệ:</strong> {{ $data['message'] }}</li>
    </ul>
    <p>Tôi sẽ trả lời yêu cầu này sớm nhất có thể.
    </p>
</body>

</html>
