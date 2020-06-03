<?php 
session_start();
include '../../../api/setting.php';

// ログインしている、かつ管理者であるかチェック
// 一般ユーザ用ログインページにリダイレクト
$sql =$db->prepare('SELECT * FROM users WHERE id=?');
$sql->execute(array($_SESSION['id']));
$result = $sql->fetch();
if (!isset($_SESSION['id']) || !$result['is_admin']) {
    header('Location: ../login.php');
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>ユーザー削除確認</title>
        <link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="deleteUser.css">
    </head>

    <body>

        <!--サイドバー-->
        <div id="sidebar">
            <div id="sidebar-title">管理者<span class="br">アカウント</span></div>
                <ul id="sidebar-body">
                    <li><button class="sidebutton" onclick="location.href='getUsers.php'">ユーザー<span class="br">一覧</span></button></li>
                    <li><button class="sidebutton" onclick="location.href='createUser.php'">新規登録</button></li>
                    <li>
                        <button class="logout" type="submit" onclick="location.href='../../../api/logout(admin).php'">
                            <i class="fas fa-sign-out-alt fa-2x"></i>
                        </button>
                    </li>
                </ul>
        </div>

        <!--コンテンツ-->
        <div id="getContents">
            <p>ユーザー名　：　"ここにGET"</p>
            <p>所属部署　：　"ここにGET"</p>
            
            <div id="editButton">
                <p>このユーザーを本当に削除してよろしいですか？<span class="br">削除しても投稿やコメントは残ります。</span></p>
                <input id="button" type="submit" value="はい、削除します" />
            </div>
        </div>
