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
    <title>ประวัติส่วนตัว - My Website</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Sarabun:wght@300;400;600;700&display=swap" rel="stylesheet">
    <style>body { font-family: 'Sarabun', sans-serif; }</style>
</head>
<body class="bg-slate-50 text-slate-800 flex flex-col min-h-screen">


    <!-- Content -->
    <main class="flex-grow max-w-6xl mx-auto w-full px-4 py-8">
        <div class="bg-white p-8 rounded-2xl shadow-sm border border-slate-100 grid md:grid-cols-3 gap-8">
            <!-- Profile Image & Contact -->
            <div class="text-center md:border-r border-slate-100 md:pr-8">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSRTobHgS1H6ZrTLPGLtD4l5v-apDFi4ZZAOwE_g3OnfA&s=10">
                <h2 class="text-2xl font-bold">ภูสิทธิ์ สืบอินทร์</h2>
                <p class="text-indigo-600 font-medium mb-4"> it / Student</p>
                <div class="text-sm text-slate-500 space-y-2 text-left">
                    <p><strong>Email:</strong> example@email.com</p>
                    <p><strong>Phone:</strong> 08X-XXX-XXXX</p>
                    <p><strong>Location:</strong> กรุงเทพมหานคร, ไทย</p>
                </div>
            </div>

            <!-- Bio Details & Skills -->
            <div class="md:col-span-2 space-y-6">
                <div>
                    <h3 class="text-xl font-bold mb-3 border-b pb-2">เกี่ยวกับฉัน</h3>
                    <p class="text-slate-600 leading-relaxed">
                        สนใจการพัฒนาเว็บไซต์และการออกแบบ UI/UX มีความมุ่งมั่นในการเรียนรู้เทคโนโลยีใหม่ๆ และชื่นชอบการแก้ปัญหาด้วยโซลูชันด้านดิจิทัล
                    </p>
                </div>

                <div>
                    <h3 class="text-xl font-bold mb-3 border-b pb-2">ทักษะความสามารถ (Skills)</h3>
                    <div class="flex flex-wrap gap-2">
                        <span class="bg-slate-100 text-slate-700 px-3 py-1 rounded-full text-sm font-medium">HTML5 / CSS3</span>
                        <span class="bg-indigo-100 text-indigo-700 px-3 py-1 rounded-full text-sm font-medium">Tailwind CSS</span>
                        <span class="bg-slate-100 text-slate-700 px-3 py-1 rounded-full text-sm font-medium">JavaScript</span>
                        <span class="bg-slate-100 text-slate-700 px-3 py-1 rounded-full text-sm font-medium">PHP</span>
                    </div>
                </div>

                <div>
                    <h3 class="text-xl font-bold mb-3 border-b pb-2">ประวัติการศึกษา</h3>
                    <ul class="space-y-3 text-slate-600">
                        <li class="flex justify-between">
                            <span><strong>ปริญญาตรี สาขาวิทยาการคอมพิวเตอร์</strong> — มหาวิทยาลัย...</span>
                            <span class="text-sm text-slate-400">2025 - ปัจจุบัน</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </main>

    <!-- Footer -->
    <footer class="bg-white border-t border-slate-200 mt-auto">
        <div class="max-w-6xl mx-auto px-4 py-6 text-center text-sm text-slate-500">
            &copy; 2026 My Portfolio. Built with Tailwind CSS & PHP.
        </div>
    </footer>

</body>
</html>
<?php
include 'includes/footer.php';
?>

