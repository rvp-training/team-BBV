<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>ユーザー一覧</title>
        <link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="getUsers.css">
    </head>

    <body>

        <!--サイドバー-->
        <div id="sidebar">
            <div id="sidebar-title">管理者<span class="br">アカウント</span></div>
                <ul id="sidebar-body">
                    <li><button class="sidebutton" onclick="ここにURLいれる！！">ユーザー<span class="br">一覧</span></button></li>
                    <li><button class="sidebutton" onclick="ここにURLいれる！！">新規登録</button></li>
                    <li>
                        <button class="logout" type="submit" onclick="location.href='../../../api/logout(admin).php'">
                            <i class="fas fa-sign-out-alt fa-2x"></i>
                        </button>
                    </li>
                </ul>
        </div>

        <!--コンテンツ-->
        <div id="userTable">
            <h1>- ユーザー一覧 -</h1>
            <table border="1">
                <tr>
                    <th>ID</th><th>ユーザー名</th><th>所属部署</th><th>Email</th><th>パスワード</th> <th></th>
                </tr>
                <tr>
                    <td>"IDなどGETしたものを入れていく！かつ、人数分だけｔｒをつくるようにコード"</td><td></td><td></td><td></td><td></td><td><a href="">編集・削除</a></td>
                </tr>
            </table>

