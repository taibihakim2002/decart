<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Home Page</title>
    <link rel="stylesheet" href="css/all.min.css" />
    <link rel="stylesheet" href="css/bootstrap-grid.min.css" />
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="css/framwork.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@400;700&display=swap" rel="stylesheet" />
</head>

<body>
    <div class="page">
        <!-- Include Admin Sidebar -->
        <?php include 'components/admin_sidebar.php'; ?>
        <div class="content">
            <?php include 'components/admin_header.php'; ?>
            <div class="main">
                <h2>الدورات</h2>
                <div class="courses mt-20">
                    <div class="course">
                        <div class="image">
                            <img src="sources/avatar.png" alt="" />
                        </div>
                        <p class="teacher-name">الاستاذ يونسي محمد</p>
                        <h5>دورة المراجعة الشاملة في الرياضيات للشعب العلمية</h5>

                        <div class="date">
                            <i class="fa-solid fa-calendar-days"></i>
                            <p>الثلاثاء 6 جوان من 09:00 الى 12:00</p>
                        </div>
                        <div class="more-info">
                            <div class="place">
                                <i class="fa-solid fa-location-dot"></i>
                                <p>فرع باب الشارف</p>
                            </div>
                            <div class="price">
                                <span>25دج</span>
                            </div>
                        </div>
                        <div class="state">
                            <p>الحالة: <span class="c-green">نشطة</span></p>
                        </div>
                        <div class="buttons">
                            <button class="btn">تعديل</button>
                            <button class="btn bg-orange">عرض</button>
                            <button class="btn bg-red">حذف</button>
                        </div>
                    </div>
                    <div class="course">
                        <div class="image">
                            <img src="sources/avatar.png" alt="" />
                        </div>
                        <p class="teacher-name">الاستاذ يونسي محمد</p>
                        <h5>دورة المراجعة الشاملة في الرياضيات للشعب العلمية</h5>

                        <div class="date">
                            <i class="fa-solid fa-calendar-days"></i>
                            <p>الثلاثاء 6 جوان من 09:00 الى 12:00</p>
                        </div>
                        <div class="more-info">
                            <div class="place">
                                <i class="fa-solid fa-location-dot"></i>
                                <p>فرع باب الشارف</p>
                            </div>
                            <div class="price">
                                <span>25دج</span>
                            </div>
                        </div>
                        <div class="state">
                            <p>الحالة: <span class="c-green">نشطة</span></p>
                        </div>
                        <div class="buttons">
                            <button class="btn">تعديل</button>
                            <button class="btn bg-orange">عرض</button>
                            <button class="btn bg-red">حذف</button>
                        </div>
                    </div>
                    <div class="course">
                        <div class="image">
                            <img src="sources/avatar.png" alt="" />
                        </div>
                        <p class="teacher-name">الاستاذ يونسي محمد</p>
                        <h5>دورة المراجعة الشاملة في الرياضيات للشعب العلمية</h5>

                        <div class="date">
                            <i class="fa-solid fa-calendar-days"></i>
                            <p>الثلاثاء 6 جوان من 09:00 الى 12:00</p>
                        </div>
                        <div class="more-info">
                            <div class="place">
                                <i class="fa-solid fa-location-dot"></i>
                                <p>فرع باب الشارف</p>
                            </div>
                            <div class="price">
                                <span>25دج</span>
                            </div>
                        </div>
                        <div class="state">
                            <p>الحالة: <span class="c-green">نشطة</span></p>
                        </div>
                        <div class="buttons">
                            <button class="btn">تعديل</button>
                            <button class="btn bg-orange">عرض</button>
                            <button class="btn bg-red">حذف</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="js/script.js">
    </script>
    <script src="js/all.min.js"></script>
</body>

</html>