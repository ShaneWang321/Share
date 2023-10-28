<?php
if (isset($_POST['submit'])) {
    $targetDirectory = "uploads/";  // 上傳目錄的路徑
    $targetFile = $targetDirectory . basename($_FILES['file']['name']);  // 上傳的文件路徑

    // 檢查文件是否已經存在
    if (file_exists($targetFile)) {
        echo "該文件已存在。";
    } else {
        // 嘗試上傳文件
        if (move_uploaded_file($_FILES['file']['tmp_name'], $targetFile)) {
            echo "文件已成功上傳。";
        } else {
            echo "上傳文件時發生錯誤。";
        }
    }
}
?>
