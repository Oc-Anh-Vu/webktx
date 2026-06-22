<?php
if (!isset($room) || empty($room)) {
    echo '<div class="alert alert-error">Bạn chưa có thông tin phòng.</div>';
    return;
}
$pageTitle = 'Thông tin Phòng Của Tôi';
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
                <label>Mã Phòng</label>
                <input type="text" value="<?= htmlspecialchars($room['maphong'] ?? '') ?>" readonly>
            </div>
            <div class="form-group">
                <label>Số Phòng</label>
                <input type="text" value="<?= htmlspecialchars($room['sophong'] ?? '') ?>" readonly>
            </div>
        </div>

        <div class="form-row">
            <div class="form-group">
                <label>Tòa</label>
                <input type="text" value="<?= htmlspecialchars($room['toa'] ?? '') ?>" readonly>
            </div>
            <div class="form-group">
                <label>Trạng Thái</label>
                <input type="text" value="<?= htmlspecialchars($room['trangthai'] ?? '') ?>" readonly>
            </div>
        </div>

        <div class="form-row">
            <div class="form-group">
                <label>Hiện Tại / Sức Chứa</label>
                <input type="text" value="<?= ($room['phonghientai'] ?? 0) . ' / ' . ($room['succhua'] ?? 8) ?> người" readonly>
            </div>
            <div class="form-group">
                <label>Giá Phòng (VND)</label>
                <input type="text" value="<?= number_format($room['gia'] ?? 0) ?> VNĐ" readonly>
            </div>
        </div>
    </div>
</body>
</html>