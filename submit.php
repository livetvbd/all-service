<?php
date_default_timezone_set("Asia/Dhaka");
$telegram = $_POST['telegram'];
$account = $_POST['account'];
$date = date("Y-m-d");

$dir = "uploads";
if (!is_dir($dir)) {
    mkdir($dir, 0777, true);
}

$file = "$dir/$date.csv";

// যদি ফাইল না থাকে তাহলে হেডারসহ তৈরি করো
if (!file_exists($file)) {
    file_put_contents($file, "Telegram Username,Account Number\n", FILE_APPEND);
}

// ডাটা যোগ করো
file_put_contents($file, "$telegram,$account\n", FILE_APPEND);

// সাবমিটের পর রিডাইরেক্ট বা মেসেজ
echo "<script>alert('✅ Submitted Successfully!');window.location.href='index.html';</script>";
?>
