<!DOCTYPE html>
<html>
    <head>
        <title>
            Làm việc với form - file
        </title>
    </head>
    <body>
        <form method="post" action="process_insert.php" >
            Tên:
            <input type="text" name="ten">
            <br>
            Giới tính
            <input type="radio" name="gioi_tinh" value="Nam">Nam
            <input type="radio" name="gioi_tinh" value="Nữ">Nữ
            <br>
            Email:
            <input type="email" name="email">
            <br>
            Mật khẩu:
            <input type="password" name="mat_khau">
            <br>
            Ngày sinh:
            <input type="date" name="ngay_sinh">
            <br>
            Sở thích:
            <select name="so_thich" id="so_thich">
                <option value="1">Nghe nhạc</option>
                <option value="2">Đọc sách</option>
                <option value="3">Xem phim</option>
            </select>
            <br>
            Link ảnh:
            <input type="text" name="chon_anh">
            <br>
            Chia sẻ cá nhân:
            <input type="textarea" name="share_feeling">
            <br>
            <button>Lưu thông tin</button>
        </form>
    </body>
</html>