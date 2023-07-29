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
                <h2>الاعدادات</h2>
                <div class="settings-container grid-300 mt-20">
                    <div class="setting mt-20 bg-white">
                        <h3>اعدادات الموقع</h3>
                        <form action="" class="mt-20">
                            <label for="name">اسم الموقع</label>
                            <br />
                            <input type="text" name="name" id="name" value="ديكارت" />
                            <br />
                            <label for="email">الايمايل</label>
                            <br />
                            <input type="email" name="email" id="email" value="Descart@gmail.com" />
                            <br />
                            <label for="phone">رقم الهاتف</label>
                            <br />
                            <input type="number" name="phone" id="phone" value="0655408640" />
                            <br />
                            <label for="favicon">رمز الموقع</label>

                            <br />
                            <input type="file" name="favicon" id="favicon" />
                            <br />
                            <label for="logo">شعار الموقع </label>
                            <br />
                            <input type="file" name="logo" id="logo" />
                            <br />
                            <input type="submit" value="حفظ" class="btn save-btn mt-20" />
                        </form>
                    </div>
                    <div class="setting mt-20 bg-white">
                        <h3>اعدادات الملف الشخصي</h3>
                        <form class="image-profile" action="">
                            <img src="sources/avatar.png" alt="">
                        </form>


                        <form action="" class="mt-20">
                            <label for="name">الاسم</label>
                            <br />
                            <input type="text" name="name" id="name" value="يونسي محمد" />
                            <br />
                            <label for="email">الايمايل</label>
                            <br />
                            <input type="email" name="email" id="email" value="younsimoh@gmail.com" />
                            <br />
                            <div class="password">
                                <label for="password">كلمة السر</label>
                                <div class="pass-change">
                                    <input type="password" name="password" id="password" value="5445d5dd" disabled />
                                    <button class="btn bg-red" style="height: 30px">
                                        تغيير
                                    </button>
                                </div>
                            </div>
                            <input type="submit" value="حفظ" class="btn save-btn mt-20" />
                        </form>
                    </div>
                    <div class="setting mt-20 bg-white">
                        <h3>حسابات التواصل الاجتماعي</h3>
                        <form action="" class="mt-20">
                            <div class="sm">
                                <i class="fa-brands fa-facebook-f iconsm"></i>
                                <input type="text" name="facebook-id" placeholder="ادخل رابط حساب فيسبوك" />
                            </div>
                            <div class="sm">
                                <i class="fa-brands fa-instagram iconsm"></i>
                                <input type="text" name="instagram-id" placeholder="ادخل رابط حساب انستاغرام" />
                            </div>
                            <div class="sm">
                                <i class="fa-brands fa-twitter iconsm"></i>
                                <input type="text" name="twitter-id" placeholder="ادخل رابط حساب تويتر" />
                            </div>
                            <div class="sm">
                                <i class="fa-brands fa-linkedin iconsm"></i>
                                <input type="text" name="linkedin-id" placeholder="ادخل رابط حساب لينكد ان" />
                            </div>
                            <input type="submit" value="حفظ" class="btn save-btn mt-20" />
                        </form>
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