<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // 送信された身長と体重を取得
    $height = $_POST["height"];
    $weight = $_POST["weight"];

    // 身長：メートル単位に変換
    $heightInMeters = $height / 100;

    // 理想の体重：(身長の2乗 * 22）
    $idealWeight = $heightInMeters * $heightInMeters * 22;

    // 理想の体重と現在の体重との差分を計算
    $weightDifference = $weight - $idealWeight;

    // BMIを計算
    $bmi = $weight / ($heightInMeters * $heightInMeters);
    echo "体重:" . $weight . "kg<br>";
    echo "理想の体重: " . htmlspecialchars(number_format($idealWeight, 2)) . "kg<br>";
    echo "あと、" . htmlspecialchars(number_format($weightDifference, 2)) . "kgで適正体重です<br>";
    echo "BMI: " . htmlspecialchars(number_format($bmi, 2));
}
?>