<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="{{ $site_description }}">
    <meta name="author" content="sky31">

    <title>{{ $site_title }}</title>

    <link href="{{ elixir("css/main.css") }}" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
        <script src="http://cdn.bootcss.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="http://cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>
    <nav class="navbar navbar-default" role="navigation">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#wenku-navbar-collapse"><span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span></button>
                <a class="navbar-brand" href="#">{{ $site_name }}</a>
            </div>
            <div class="navbar-collapse collapse" id="wenku-navbar-collapse">
                <ul class="nav navbar-nav">
                    <li><a href="/">首页</a></li>
                    <li><a href="/docs">文库</a></li>
                    <li><a href="/home">个人中心</a></li>
                </ul>

                <form class="navbar-form navbar-right">
                    <input class="form-control col-md-4" placeholder="学号/工号" type="text">
                    <input class="form-control col-md-4" placeholder="密码/教管密码" type="password">
                    <button type="button" class="btn btn-normal">登录</button>
                </form>
            </div>
        </div>
    </nav>

    <div class="container">
         @yield('content')
    </div>

    <script src="{{ elixir("js/main.js") }}"></script>
</body>
