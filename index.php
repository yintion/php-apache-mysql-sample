<?php


?>

<html>
<head>
    <title>PHP-Apache-Mysql-Sample 示例 - DaoCloud</title>

    <link href="//cdn.bootcss.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            margin: 0;
            padding: 0;
            width: 100%;
            height: 100%;
            color: #666;
            display: table;
        }

        .container {
            display: table-cell;
            text-align: center;
        }

        .content {
            text-align: center;
            display: inline-block;
        }


    </style>
</head>
<body>
<div class="container">
    <div class="content">
        <h1>
            PHP-Apache-Mysql-Sample 示例
        </h1>
        <table class="table">
            <caption>通讯录</caption>
            <thead>
            <tr>
                <th>#</th>
                <th>姓名</th>
                <th>电话</th>
                <th>操作</th>
            </tr>
            </thead>
            <tbody>
            
            </tbody>
        </table>

        <div class="text-left">
            <form method="post">
                <div class="form-group">
                    <label for="name">姓名</label>
                    <input type="text" name="name" class="form-control" id="name" placeholder="姓名">
                </div>
                <div class="form-group">
                    <label for="phone">号码</label>
                    <input type="text" name="phone" class="form-control" id="phone" placeholder="号码">
                </div>
                <button type="submit" class="btn btn-success">新增</button>
            </form>
        </div>
    </div>
</div>
</body>
</html>
