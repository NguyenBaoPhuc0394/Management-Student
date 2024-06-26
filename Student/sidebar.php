
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/studentstyle.css">
    <script src="js/student.js" defer></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <link href="https://cdn.lineicons.com/4.0/lineicons.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <title><?php echo  $page_title;?></title>
</head>
<body>
    <div class="wrapper">
        <aside class="sidebar" id="sidebar">
            <div class="d-flex">
                <button onclick="" id="toggle-btn" type="button">
                    <i class="fa-solid fa-bars"></i>
                </button>
            </div>
            <ul class="sidebar-nav">
                <li <?php echo $page_title =="Thông Tin" ? "class='sidebar-item active'" : "class='sidebar-item'" ; ?>>
                    <a href="Information.php" class="sidebar-link" name='Information'>
                        <!-- <i class="bi bi-person"></i> -->
                        <i class="bi bi-person-fill"></i>
                        <span>Thông Tin Cá Nhân</span>
                        <span class="tooltip">Thông Tin Cá Nhân</span>
                    </a>
                </li>
                <li <?php echo $page_title =="Điểm số" ? "class='sidebar-item active'" : "class='sidebar-item'" ; ?>>
                    <a href="score.php" class="sidebar-link" name='Tuition'>
                        <!-- <i class="bi bi-cash"></i> -->
                        <i class="fa-solid fa-star"></i>
                        <span>Điểm số</span>
                        <span class="tooltip">Điểm số</span>
                    </a>
                </li>
                <li <?php echo $page_title =="Thông tin giáo viên" ? "class='sidebar-item active'" : "class='sidebar-item'" ; ?>>
                    <a href="teacher.php" class="sidebar-link" name='Tuition'>
                        <!-- <i class="bi bi-cash"></i> -->
                        <i class="fa-solid fa-chalkboard-user"></i>
                        <span>Thông tin giáo viên</span>
                        <span class="tooltip">Thông tin giáo viên</span>
                    </a>
                </li>
                <li <?php echo $page_title =="Thời khóa biểu" ? "class='sidebar-item active'" : "class='sidebar-item'" ; ?>>
                    <a href="TimeTable.php" class="sidebar-link" name='Schedule'>
                        <!-- <i class="bi bi-calendar3"></i> -->
                        <i class="fa-regular fa-calendar-days"></i>
                        <span>Thời Khóa Biểu</span>
                        <span class="tooltip">Thời Khóa Biểu</span>
                    </a>
                </li>
                <li <?php echo $page_title =="E-Learning" ? "class='sidebar-item active'" : "class='sidebar-item'" ; ?>>
                    <a href="Elearning.php" class="sidebar-link" name='E-Learning'>
                        <i class="bi bi-marker-tip"></i>
                        <span>E-Learning</span>
                        <span class="tooltip">E-Learning</span>
                    </a>
                </li>
                <li <?php echo $page_title =="Học phí" ? "class='sidebar-item active'" : "class='sidebar-item'" ; ?>>
                    <a href="Tuition.php" class="sidebar-link" name='Tuition'>
                        <!-- <i class="bi bi-cash"></i> -->
                        <!-- <i class="bi bi-cash-stack"></i> -->
                        <i class="fa-regular fa-money-bill-1"></i>
                        <span>Học Phí</span>
                        <span class="tooltip">Học Phí</span>
                    </a>
                </li>

            </ul>
        </aside>

