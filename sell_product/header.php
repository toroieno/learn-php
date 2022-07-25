<style>
    .right, .left {
        float:left;
    }
    .right{
        width:50%;
        text-align:center;
    }
    .left{
        width:50%;
    }
</style>

<div class="header">
    <?php
        session_start();
        if (isset($_GET['signin'])){
            $signin = $_GET['signin'];
            echo $signin;
        }
        if (isset($_COOKIE['user'])){
            $signin = 'display:none;';
            $signout = 'display:block;';
        }else{
            $signin = 'display:block;';
            $signout = 'display:none;';
        }
    ?>
    <div class="left">
    <ul>
        <li>
            <a href="index.php">
                Trang chủ
            </a>
        </li>
        <li id='signin' style="<?php echo $signin; ?>">
            <a href="signin.php">
                Đăng nhập
            </a>
        </li>
        <li id='signout' style="<?php echo $signout; ?>">
            <a href="signout.php">
                Đăng xuất
            </a>
        </li>
        <li>
            <a href="signup.php">
                Đăng ký
            </a>
        </li>
        
    </ul>
    </div>
    <div class="right">
        <a href="view_cart.php">
            Giỏ hàng
        </a>
    </div>
</div>