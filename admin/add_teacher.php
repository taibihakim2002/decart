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
                <h2>إضافة أستاذ</h2>
                <form action="" class="add-teacher mt-20">
                    <div class="photo">
                        <img src="sources/photo.jpg" alt="">
                        <label for="photo" class="custom-file-upload"><i class="fa-solid fa-cloud-upload"></i></label>
                    </div>

                    <input type="file" name="photo" id="photo" />
                    <label for="name">الاسم الكامل</label>
                    <br />
                    <input type="text" name="name" id="name" />
                    <br />
                    <label for="email">الايمايل او رقم الهاتف</label>
                    <br />
                    <input type="email" name="email" id="email" />
                    <br />
                    <label for="pass">كلمة المرور</label>
                    <br />
                    <input type="password" name="pass" id="pass" />
                    <br />

                    <label for="state">الحالة</label>
                    <br />
                    <select name="state" id="state">
                        <option value="active">نشط</option>
                        <option value="inactive">غير نشط</option>
                    </select>
                    <br />
                    <div class="save-teacher">
                        <input type="submit" value="حفظ" class="btn save-teacher-btn mt-20" />
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script src="js/script.js">
    </script>
    <script src="js/all.min.js"></script>
</body>

</html>