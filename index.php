<?php
$pageTitle = "หน้าแรก - MyWebsite";
include 'includes/header.php';
include 'includes/navbar.php';
?>


<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>หน้าแรก - My Website</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Sarabun:wght@300;400;600;700&display=swap" rel="stylesheet">
    <style>body { font-family: 'Sarabun', sans-serif; }</style>
</head>
<body class="bg-slate-50 text-slate-800 flex flex-col min-h-screen">
 
    <!-- Content -->
    <main class="flex-grow max-w-6xl mx-auto w-full px-4 py-8 space-y-12">
        <!-- Hero Section -->
        <div class="bg-indigo-900 text-white rounded-2xl p-8 md:p-12 text-center shadow-lg">
            <h1 class="text-4xl md:text-5xl font-extrabold mb-4">ยินดีต้อนรับสู่หน้าเว็บของฉัน</h1>
            <p class="text-indigo-200 text-lg max-w-2xl mx-auto mb-6">พื้นที่รวบรวมผลงาน ประวัติส่วนตัว และการส่งมอบภาระงานต่างๆ</p>
            <a href="assign.php" class="inline-block bg-indigo-500 hover:bg-indigo-600 text-white font-semibold px-6 py-3 rounded-lg shadow transition">ดูรายการงานทั้งหมด</a>
        </div>

    
    </main>




</body>
</html>
<?php
include 'includes/footer.php';
?>