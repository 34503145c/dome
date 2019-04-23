<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>首页 | 后台系统</title>
</head>
<body>
<h3>后台系统-首页</h3>


@if(Auth::guard('admin')->check())
    <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
            {{ Auth::user()->name }} <span class="caret"></span>
        </a>
    </li>

    <a href="#"
       onclick="event.preventDefault();
                document.getElementById('logout-form').submit();">
        Logout
    </a>
    <form id="logout-form" action="{{ url('/admin/logout') }}" method="POST" style="display: none;">
        {{ csrf_field() }}
    </form>
@endif
</body>
</html>