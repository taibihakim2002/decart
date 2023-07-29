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
                <h2>الطلاب</h2>

                <div class="students mt-20">
                    <div class="table-container">
                        <div class="header-row">
                            <div class="table-cell">الاسم</div>
                            <div class="table-cell">الرقم</div>
                            <div class="table-cell">الجنس</div>
                            <div class="table-cell">الفوج</div>
                            <div class="table-cell">تاريخ الانضمام</div>
                            <div class="table-cell">اجراء</div>
                        </div>
                        <div class="table-row">
                            <div class="table-cell">
                                <img src="sources/avatar.png" class="student-icon" alt="" />
                                <span>أحمد علي</span>
                            </div>
                            <div class="table-cell">2021</div>
                            <div class="table-cell">ذكر</div>
                            <div class="table-cell">M1</div>
                            <div class="table-cell">15/10/2022 13:25</div>
                            <div class="table-cell action">
                                <div class="remove">
                                    <i class="fa-solid fa-trash-can"></i>
                                </div>
                            </div>
                        </div>
                        <div class="table-row">
                            <div class="table-cell">
                                <img src="sources/avatar.png" class="student-icon" alt="" />
                                <span>فاطمة محمد</span>
                            </div>
                            <div class="table-cell">002</div>
                            <div class="table-cell">أنثى</div>
                            <div class="table-cell">Py2</div>
                            <div class="table-cell">15/11/2022 18:28</div>
                            <div class="table-cell action">
                                <div class="remove">
                                    <i class="fa-solid fa-trash-can"></i>
                                </div>
                            </div>
                        </div>
                        <div class="table-row">
                            <div class="table-cell">
                                <img src="sources/avatar.png" class="student-icon" alt="" />
                                <span>يوسف أحمد</span>
                            </div>
                            <div class="table-cell">0003</div>
                            <div class="table-cell">ذكر</div>
                            <div class="table-cell">Sc3</div>
                            <div class="table-cell">24/08/2023 12:25</div>
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
                            <div class="table-cell">0004</div>
                            <div class="table-cell">أنثى</div>
                            <div class="table-cell">Ar5</div>
                            <div class="table-cell">15/10/2022 13:25</div>
                            <div class="table-cell action">
                                <div class="remove">
                                    <i class="fa-solid fa-trash-can"></i>
                                </div>
                            </div>
                        </div>
                        <div class="table-row">
                            <div class="table-cell">
                                <img src="sources/avatar.png" class="student-icon" alt="" />
                                <span>كريم عبدالله</span>
                            </div>
                            <div class="table-cell">0005</div>
                            <div class="table-cell">ذكر</div>
                            <div class="table-cell">Fr1</div>
                            <div class="table-cell">08/02/2022 18:46</div>
                            <div class="table-cell action">
                                <div class="remove">
                                    <i class="fa-solid fa-trash-can"></i>
                                </div>
                            </div>
                        </div>
                        <div class="table-row">
                            <div class="table-cell">
                                <img src="sources/avatar.png" class="student-icon" alt="" />
                                <span>لمى أحمد</span>
                            </div>
                            <div class="table-cell">0006</div>
                            <div class="table-cell">أنثى</div>
                            <div class="table-cell">En2</div>
                            <div class="table-cell">15/06/2023 01:25</div>
                            <div class="table-cell action">
                                <div class="remove">
                                    <i class="fa-solid fa-trash-can"></i>
                                </div>
                            </div>
                        </div>
                        <div class="table-row">
                            <div class="table-cell">
                                <img src="sources/avatar.png" class="student-icon" alt="" />
                                <span>محمود خالد</span>
                            </div>
                            <div class="table-cell">0007</div>
                            <div class="table-cell">ذكر</div>
                            <div class="table-cell">Pyl5</div>
                            <div class="table-cell">15/10/2022 14:25</div>
                            <div class="table-cell action">
                                <div class="remove">
                                    <i class="fa-solid fa-trash-can"></i>
                                </div>
                            </div>
                        </div>
                        <div class="table-row">
                            <div class="table-cell">
                                <img src="sources/avatar.png" class="student-icon" alt="" />
                                <span>محمود خالد</span>
                            </div>
                            <div class="table-cell">0007</div>
                            <div class="table-cell">ذكر</div>
                            <div class="table-cell">Pyl5</div>
                            <div class="table-cell">24/07/2022 22:25</div>
                            <div class="table-cell action">
                                <div class="remove">
                                    <i class="fa-solid fa-trash-can"></i>
                                </div>
                            </div>
                        </div>
                        <div class="table-row">
                            <div class="table-cell">
                                <img src="sources/avatar.png" class="student-icon" alt="" />
                                <span>محمود خالد</span>
                            </div>
                            <div class="table-cell">0007</div>
                            <div class="table-cell">ذكر</div>
                            <div class="table-cell">Pyl5</div>
                            <div class="table-cell">15/08/2023 15:25</div>
                            <div class="table-cell action">
                                <div class="remove">
                                    <i class="fa-solid fa-trash-can"></i>
                                </div>
                            </div>
                        </div>
                    </div>

                    <button class="see-more btn">عرض المزيد</button>
                </div>
            </div>
        </div>
    </div>
    <script src="js/script.js">
    </script>
    <script src="js/all.min.js"></script>
</body>

</html>