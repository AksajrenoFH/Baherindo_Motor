<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Baherindo Motor')</title>
    <link rel="icon" href="https://scontent-cgk2-2.cdninstagram.com/v/t51.2885-19/171764646_121869053299488_2208545503752327140_n.jpg?stp=dst-jpg_s150x150_tt6&efg=eyJ2ZW5jb2RlX3RhZyI6InByb2ZpbGVfcGljLmRqYW5nby45NDUuYzIifQ&_nc_ht=scontent-cgk2-2.cdninstagram.com&_nc_cat=100&_nc_oc=Q6cZ2QHoxuPavdsSuL9OYUK7Nq_-9r0UjjNS4wU55bAl9KmE-ljVaBbhm-Zuml2aQ82rhQ8&_nc_ohc=BQR98cDsVcwQ7kNvwF7jyvE&_nc_gid=tUdhyavADBSvhhOVqQGXlw&edm=APs17CUBAAAA&ccb=7-5&oh=00_AfQTiiQiuiv3uJibh17boGx9alCobHAuCj8SUDhLKMs-KQ&oe=688E2768&_nc_sid=10d13b" type="image/png">
    @vite('resources\css\app.css')
</head>
<body class="bg-indigo-200">
    @include('layouts.navbar')
    <div class="div p-5 m-5">
        @yield('content')
    </div>
    @include('layouts.footer')
</body>
</html>