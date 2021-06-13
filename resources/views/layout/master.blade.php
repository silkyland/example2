<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'เว็บไซต์ของฉัน')</title>
</head>

<body>
    <a href="/">หน้าแรก</a> | <a href="/about">เกี่ยวกับ</a> | <a href="/contact">ติดต่อฉัน</a>
    @yield('content')
    &copy; 2021 สงวนสิทธิ์ Bundit Nuntates
</body>

</html>
