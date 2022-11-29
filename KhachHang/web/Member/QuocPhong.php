<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="resume.css">
</head>

<body>
    <div class="full">
        <div class="left">
            <div class="image">
                <img src="./img_Member/QuocPhong.jpg" alt="gfg-logo" style="width:100px;height:100px;">
            </div>
            <div class="Contact">
                <h2>Thông tin cá nhân</h2>
                <p><b>Email:</b>phong.dq.61cntt@gmail.com</p>
                <p><b>Số điện thoại:</b>0333032511</p>
            </div>
            <div class="Skills">
                <h2>KỸ NĂNG</h2>
                <ul>
                    <li>
                        <p>Ngôn ngữ:
                            C++,PHP,C#</p>
                    </li>
                    <li>
                        <p>Frontend : HTML5, CSS3,
                            JavaScript</p>
                    </li>

                </ul>
            </div>
            <div class="Language">
                <h2>NGÔN NGỮ</h2>
                <ul>
                    <li>
                        <p>Tiếng Anh
                        <p>
                    </li>

                </ul>
            </div>
            <div class="Hobbies">
                <h2>SỞ THÍCH</h2>
                <ul>
                    <li>
                        <p>Nghe nhạc, xem phim, câu cá, đi bộ</p>
                    </li>
                    <li>
                        <p>Chơi game</P>
                    </li>
                </ul>
            </div>
        </div>
        <div class="right">
            <div class="name">
                <h1>Dương Quốc Phong</h1>
            </div>
            <div class="title">
                <p>Lập trình viên</p>
            </div>
            <div class="Summary">
                <h2>Mục tiêu</h2>
                <p>
                    Ra trường đúng hạn.
                </p>
            </div>
            <div class="Experience">
                <h2>KINH NGHIỆM</h2>
                <h3>Thực tập nghành tại công ty SWEETSOFT</h3>
                <p>Từ ngày 22/11/2022 đến 07/01/2023</p>

            </div>
            <div class="Education">
                <h2>TRÌNH ĐỘ HỌC VẤN</h2>
                <p class="nghieng">Đại Học Nha Trang (2019 - Hiện tại)<br></p>
                <p class="nghieng">Chuyên nghành công nghệ thông tin<br></p>

            </div>

        </div>
    </div>
</body>

</html>
<style>
    /* Write CSS Here */
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    .full {
        width: 50%;
        max-width: 1000px;
        min-height: 100px;
        background-color: rgb(245, 239, 231);
        margin: 0px;
        display: grid;
        grid-template-columns: 2fr 4fr;
        margin: 0 auto;
        margin-top: 20px;
    }

    .left {
        position: initial;
        background-color: rgb(126, 219, 231);
        padding: 20px;

    }

    .right {
        position: initial;
        background-color: rgb(162, 202, 206);
        padding: 20px;

    }

    li {
        list-style: none;
    }

    .full .image,
    .Contact,
    .Skills,
    .Language,
    .Hobbies,
    .title,
    .Summary,
    .Experience,
    .Education,
    .project {
        margin-bottom: 30px;
    }

    .full h2 {
        background-color: rgb(4, 96, 150);

    }

    .nghieng {
        font-style: italic;
    }

    p {
        font-size: small;
    }
</style>