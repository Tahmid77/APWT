<!DOCTYPE html>
<html lang="en">
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<style>
    table, th, td {
  border: 1px solid;
}
table{
    margin: 0 auto;
}
</style>
</head>
<body>
    @include('inc.nav')

    @yield('contain');

    
</body>
</html>