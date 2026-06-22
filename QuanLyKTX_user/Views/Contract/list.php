<?php
if (!isset($hopdong) || !$hopdong) {
    echo '<div class="alert alert-error">Bạn chưa có hợp đồng.</div>';
    return;
}
$pageTitle = 'Thông tin Hợp Đồng';
?>
<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= htmlspecialchars($pageTitle) ?> - Cổng Sinh Viên</title>
    <link rel="stylesheet" href="<?= BASE_URL ?>Public/css/list.css?v=<?= time() ?>">
</head>
<body>
    <div class="container">
        <div class="header">
            <a href="<?= BASE_URL ?>dashboard" class="back-link">← Quay lại trang chủ</a>
            <h1><?= htmlspecialchars($pageTitle) ?></h1>
        </div>

        <div class="form-row">
            <div class="form-group">
                <label>Mã Hợp Đồng</label>
                <input type="text" value="<?= htmlspecialchars($hopdong['mahopdong'] ?? '') ?>" readonly>
            </div>
            <div class="form-group">
                <label>Mã Sinh Viên</label>
                <input type="text" value="<?= htmlspecialchars($hopdong['masv'] ?? '') ?>" readonly>
            </div>
        </div>

        <div class="form-row">
            <div class="form-group">
                <label>Mã Phòng</label>
                <input type="text" value="<?= htmlspecialchars($hopdong['maphong'] ?? '') ?>" readonly>
            </div>
            <div class="form-group">
                <label>Trạng Thái</label>
                <input type="text" value="<?= htmlspecialchars($hopdong['trangthai'] ?? '') ?>" readonly>
            </div>
        </div>

        <div class="form-row">
            <div class="form-group">
                <label>Ngày Bắt Đầu</label>
                <input type="text" value="<?= htmlspecialchars($hopdong['batdau'] ?? '') ?>" readonly>
            </div>
            <div class="form-group">
                <label>Ngày Hết Hạn</label>
                <input type="text" value="<?= htmlspecialchars($hopdong['hethan'] ?? '') ?>" readonly>
            </div>
        </div>
    </div>
</body>
</html>