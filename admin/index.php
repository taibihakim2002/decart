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
                <h2>لوحة التحكم</h2>
                <div class="info grid-250">
                    <div class="box">
                        <div class="icon">
                            <i class="fa-solid fa-book-open-reader"></i>
                        </div>
                        <div class="left-box">
                            <p>الطلاب</p>
                            <h3>302</h3>
                        </div>
                    </div>
                    <div class="box">
                        <div class="icon">
                            <i class="fa-solid fa-person-chalkboard"></i>
                        </div>
                        <div class="left-box">
                            <p>المعلمين</p>
                            <h3>25</h3>
                        </div>
                    </div>
                    <div class="box">
                        <div class="icon">
                            <i class="fa-solid fa-chalkboard-user"></i>
                        </div>
                        <div class="left-box">
                            <p>الدورات</p>
                            <h3>25</h3>
                        </div>
                    </div>
                    <div class="box">
                        <div class="icon">
                            <i class="fa-solid fa-person-cane"></i>
                        </div>
                        <div class="left-box">
                            <p>الافواج</p>
                            <h3>12</h3>
                        </div>
                    </div>
                </div>
                <div class="cards">
                    <div class="students mt-20">
                        <div class="top-card">
                            <h3>اخر الطلاب</h3>
                            <a href="#" class="view-more btn">عرض المزيد</a>
                        </div>
                        <div class="table-container">
                            <div class="header-row">
                                <div class="table-cell">الاسم</div>
                                <div class="table-cell">رقم الطالب</div>
                                <div class="table-cell">تاريخ الميلاد</div>
                                <div class="table-cell">اجراء</div>
                            </div>
                            <div class="table-row">
                                <div class="table-cell">
                                    <img src="sources/avatar.png" class="student-icon" alt="" />
                                    <span>احمد علي</span>
                                </div>
                                <div class="table-cell">20210001</div>
                                <div class="table-cell">1998-08-15</div>
                                <div class="table-cell action">
                                    <div class="remove">
                                        <i class="fa-solid fa-trash-can"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="table-row">
                                <div class="table-cell">
                                    <img src="sources/avatar.png" class="student-icon" alt="" />
                                    <span>طيبي احمد</span>
                                </div>
                                <div class="table-cell">20210002</div>
                                <div class="table-cell">1999-02-25</div>
                                <div class="table-cell action">
                                    <div class="remove">
                                        <i class="fa-solid fa-trash-can"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="table-row">
                                <div class="table-cell">
                                    <img src="sources/avatar.png" class="student-icon" alt="" />
                                    <span>يوسف احمد</span>
                                </div>
                                <div class="table-cell">20210003</div>
                                <div class="table-cell">1997-11-03</div>
                                <div class="table-cell action">
                                    <div class="remove">
                                        <i class="fa-solid fa-trash-can"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="table-row">
                                <div class="table-cell">
                                    <img src="sources/avatar.png" class="student-icon" alt="" />
                                    <span>نورهان محمد</span>
                                </div>
                                <div class="table-cell">20210004</div>
                                <div class="table-cell">2000-04-11</div>
                                <div class="table-cell action">
                                    <div class="remove">
                                        <i class="fa-solid fa-trash-can"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="table-row">
                                <div class="table-cell">
                                    <img src="sources/avatar.png" class="student-icon" alt="" />
                                    <span>كريم عبد الله</span>
                                </div>
                                <div class="table-cell">20210005</div>
                                <div class="table-cell">1999-12-28</div>
                                <div class="table-cell action">
                                    <div class="remove">
                                        <i class="fa-solid fa-trash-can"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="table-row">
                                <div class="table-cell">
                                    <img src="sources/avatar.png" class="student-icon" alt="" />
                                    <span>محمدي ياسين</span>
                                </div>
                                <div class="table-cell">20210006</div>
                                <div class="table-cell">2001-05-19</div>
                                <div class="table-cell action">
                                    <div class="remove">
                                        <i class="fa-solid fa-trash-can"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="cources mt-20">
                        <div class="top-card">
                            <h3>اخر الدورات</h3>
                            <a href="" class="btn">عرض المزيد</a>
                        </div>
                        <div class="cources-container">
                            <div class="course">
                                <div class="course-info">
                                    <h4>دورة الرياضيات للادبيين</h4>
                                    <p>الاستاذ يونسي محمد</p>
                                </div>
                                <div class="state bg-green">نشطة</div>
                            </div>
                            <div class="course">
                                <div class="course-info">
                                    <h4>دورة اللغة الإنجليزية للصف العاشر</h4>
                                    <p>الأستاذة فاطمة علي</p>
                                </div>
                                <div class="state bg-green">نشطة</div>
                            </div>
                            <div class="course">
                                <div class="course-info">
                                    <h4>دورة الفيزياء للصف الحادي عشر</h4>
                                    <p>الأستاذ أحمد مصطفى</p>
                                </div>
                                <div class="state bg-orange">مؤجلة</div>
                            </div>
                            <div class="course">
                                <div class="course-info">
                                    <h4>دورة اللغة العربية للصف العاشر</h4>
                                    <p>الأستاذ محمد الخطيب</p>
                                </div>
                                <div class="state bg-red">منتهية</div>
                            </div>
                        </div>
                    </div>
                </div>
                <a href="#" class="logout bg-red">تسجيل الخروج</a>
            </div>
        </div>
    </div>
    <script src="js/script.js">
    </script>
    <script src="js/all.min.js"></script>
</body>

</html>