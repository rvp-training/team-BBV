<?php 
session_start();

// ログインしていなければ一般ユーザー用ログインページにリダイレクト
if (!isset($_SESSION['id'])) {
    header('Location: login.php');
}

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>システム関連投稿一覧</title>
    <link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="posts_system.css">
</head>
<body>
    
    <!--一般ユーザーサイドバー-->
<div id="sidebar">
    <div id="sidebar-title">
        <!-- パラメータにログイン中ユーザーIDをわたす -->
        <a href="myposts.php?id=<?php print($_SESSION['id']) ?>"><img src="ユーザーのプロフィール画像"></a>
        <p>ログイン中のユーザー名</p>
    </div>
    <div id="sidebar-body">
        <p class="workspace">ワークスペース</p>
        <p><button class="side-botton" style="background: #f9f1b5;" onclick="ここに遷移先の画面のURLいれる">システム<span class="br">関連</span></button></p> 
        <p><input class="side-botton"  type="submit" name="botton" value="日常"></p> 
        <p class="logout">
            <button type="submit" onclick="location.href='../../api/logout.php'">
             <i class="fas fa-sign-out-alt fa-2x"></i>
            </button>
        </p>
        <p class="createpost">
            <button type="submit" onclick="lication.href=ここにURL">
                <i class="fas fa-camera fa-4x"></i>
            </button>
        </p>
    </div>
</div>

    <h1>-システム関連投稿-</h1>
    <div id="pictures">
        <div class="poster-pic">
            <div class="post-head">
             <div id="hover">
            <img class="img" src="https://wired.jp/wp-content/uploads/2018/01/GettyImages-522585140.jpg" loading="lazy">
            <p class="fukidashi">所属部署："投稿者の所属部署をGET"<br>"ひとこと自己紹介をGET"</p>
             </div> 
            <div class="poster">
                    <p class="poster1">投稿者名arfarvgaervbgaerb</p>
                    <p class="poster2">投稿タイトル</p>
                </div>
                 <i class="far fa-clone fa-3x"></i>
            </div>
            <div class="top-position"><a href="遷移先の画面のURL"><img class="top" src="https://wired.jp/wp-content/uploads/2018/01/GettyImages-522585140.jpg" loading="lazy"></a></div>
        </div>
        <div class="poster-pic">
            <div class="post-head">
             <div id="hover">
            <img class="img" src="https://wired.jp/wp-content/uploads/2018/01/GettyImages-522585140.jpg" loading="lazy">
            <p class="fukidashi">所属部署："投稿者の所属部署をGET"<br>"ひとこと自己紹介をGET"</p>
             </div> 
            <div class="poster">
                    <p class="poster1">投稿者名arfarvgaervbgaerb</p>
                    <p class="poster2">投稿タイトル</p>
                </div>
                 <i class="far fa-clone fa-3x"></i>
            </div>
            <div class="top-position"><a href="遷移先の画面のURL"><img class="top" src="https://wired.jp/wp-content/uploads/2018/01/GettyImages-522585140.jpg" loading="lazy"></a></div>
        </div>
        <div class="poster-pic">
            <div class="post-head">
             <div id="hover">
            <img class="img" src="https://wired.jp/wp-content/uploads/2018/01/GettyImages-522585140.jpg" loading="lazy">
            <p class="fukidashi">所属部署："投稿者の所属部署をGET"<br>"ひとこと自己紹介をGET"</p>
             </div> 
            <div class="poster">
                    <p class="poster1">投稿者名arfarvgaervbgaerb</p>
                    <p class="poster2">投稿タイトル</p>
                </div>
                 <i class="far fa-clone fa-3x"></i>
            </div>
            <div class="top-position"><a href="遷移先の画面のURL"><img class="top" src="https://wired.jp/wp-content/uploads/2018/01/GettyImages-522585140.jpg" loading="lazy"></a></div>
        </div>
        <div class="poster-pic">
            <div class="post-head">
             <div id="hover">
            <img class="img" src="https://wired.jp/wp-content/uploads/2018/01/GettyImages-522585140.jpg" loading="lazy">
            <p class="fukidashi">所属部署："投稿者の所属部署をGET"<br>"ひとこと自己紹介をGET"</p>
             </div> 
            <div class="poster">
                    <p class="poster1">投稿者名arfarvgaervbgaerb</p>
                    <p class="poster2">投稿タイトル</p>
                </div>
                 <i class="far fa-clone fa-3x"></i>
            </div>
            <div class="top-position"><a href="遷移先の画面のURL"><img class="top" src="https://wired.jp/wp-content/uploads/2018/01/GettyImages-522585140.jpg" loading="lazy"></a></div>
        </div>
        <div class="poster-pic">
            <div class="post-head">
             <div id="hover">
            <img class="img" src="https://wired.jp/wp-content/uploads/2018/01/GettyImages-522585140.jpg" loading="lazy">
            <p class="fukidashi">所属部署："投稿者の所属部署をGET"<br>"ひとこと自己紹介をGET"</p>
             </div> 
            <div class="poster">
                    <p class="poster1">投稿者名arfarvgaervbgaerb</p>
                    <p class="poster2">投稿タイトル</p>
                </div>
                 <i class="far fa-clone fa-3x"></i>
            </div>
            <div class="top-position"><a href="遷移先の画面のURL"><img class="top" src="https://wired.jp/wp-content/uploads/2018/01/GettyImages-522585140.jpg" loading="lazy"></a></div>
        </div>
        <div class="poster-pic">
            <div class="post-head">
             <div id="hover">
            <img class="img" src="https://wired.jp/wp-content/uploads/2018/01/GettyImages-522585140.jpg" loading="lazy">
            <p class="fukidashi">所属部署："投稿者の所属部署をGET"<br>"ひとこと自己紹介をGET"</p>
             </div> 
            <div class="poster">
                    <p class="poster1">投稿者名arfarvgaervbgaerb</p>
                    <p class="poster2">投稿タイトル</p>
                </div>
                 <i class="far fa-clone fa-3x"></i>
            </div>
            <div class="top-position"><a href="遷移先の画面のURL"><img class="top" src="https://wired.jp/wp-content/uploads/2018/01/GettyImages-522585140.jpg" loading="lazy"></a></div>
        </div><div class="poster-pic">
            <div class="post-head">
             <div id="hover">
            <img class="img" src="https://wired.jp/wp-content/uploads/2018/01/GettyImages-522585140.jpg" loading="lazy">
            <p class="fukidashi">所属部署："投稿者の所属部署をGET"<br>"ひとこと自己紹介をGET"</p>
             </div> 
            <div class="poster">
                    <p class="poster1">投稿者名arfarvgaervbgaerb</p>
                    <p class="poster2">投稿タイトル</p>
                </div>
                 <i class="far fa-clone fa-3x"></i>
            </div>
            <div class="top-position"><a href="遷移先の画面のURL"><img class="top" src="https://wired.jp/wp-content/uploads/2018/01/GettyImages-522585140.jpg" loading="lazy"></a></div>
        </div>
        <div class="poster-pic">
            <div class="post-head">
             <div id="hover">
            <img class="img" src="https://wired.jp/wp-content/uploads/2018/01/GettyImages-522585140.jpg" loading="lazy">
            <p class="fukidashi">所属部署："投稿者の所属部署をGET"<br>"ひとこと自己紹介をGET"</p>
             </div> 
            <div class="poster">
                    <p class="poster1">投稿者名arfarvgaervbgaerb</p>
                    <p class="poster2">投稿タイトル</p>
                </div>
                 <i class="far fa-clone fa-3x"></i>
            </div>
            <div class="top-position"><a href="遷移先の画面のURL"><img class="top" src="https://wired.jp/wp-content/uploads/2018/01/GettyImages-522585140.jpg" loading="lazy"></a></div>
        </div>
        <div class="poster-pic">
            <div class="post-head">
             <div id="hover">
            <img class="img" src="https://wired.jp/wp-content/uploads/2018/01/GettyImages-522585140.jpg" loading="lazy">
            <p class="fukidashi">所属部署："投稿者の所属部署をGET"<br>"ひとこと自己紹介をGET"</p>
             </div> 
            <div class="poster">
                    <p class="poster1">投稿者名arfarvgaervbgaerb</p>
                    <p class="poster2">投稿タイトル</p>
                </div>
                 <i class="far fa-clone fa-3x"></i>
            </div>
            <div class="top-position"><a href="遷移先の画面のURL"><img class="top" src="https://wired.jp/wp-content/uploads/2018/01/GettyImages-522585140.jpg" loading="lazy"></a></div>
        </div>
        <div class="poster-pic">
            <div class="post-head">
             <div id="hover">
            <img class="img" src="https://wired.jp/wp-content/uploads/2018/01/GettyImages-522585140.jpg" loading="lazy">
            <p class="fukidashi">所属部署："投稿者の所属部署をGET"<br>"ひとこと自己紹介をGET"</p>
             </div> 
            <div class="poster">
                    <p class="poster1">投稿者名arfarvgaervbgaerb</p>
                    <p class="poster2">投稿タイトル</p>
                </div>
                 <i class="far fa-clone fa-3x"></i>
            </div>
            <div class="top-position"><a href="遷移先の画面のURL"><img class="top" src="https://wired.jp/wp-content/uploads/2018/01/GettyImages-522585140.jpg" loading="lazy"></a></div>
        </div>
        <div class="poster-pic">
            <div class="post-head">
             <div id="hover">
            <img class="img" src="https://wired.jp/wp-content/uploads/2018/01/GettyImages-522585140.jpg" loading="lazy">
            <p class="fukidashi">所属部署："投稿者の所属部署をGET"<br>"ひとこと自己紹介をGET"</p>
             </div> 
            <div class="poster">
                    <p class="poster1">投稿者名arfarvgaervbgaerb</p>
                    <p class="poster2">投稿タイトル</p>
                </div>
                 <i class="far fa-clone fa-3x"></i>
            </div>
            <div class="top-position"><a href="遷移先の画面のURL"><img class="top" src="https://wired.jp/wp-content/uploads/2018/01/GettyImages-522585140.jpg" loading="lazy"></a></div>
        </div>
        
 </div>
</body>
</html>