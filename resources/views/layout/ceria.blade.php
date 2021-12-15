<!DOCTYPE html>
<html>
<head>
	<title>@yield('title')</title>
    <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="http://cdn.rawgit.com/Eonasdan/bootstrap-datetimepicker/e8bddc60e73c1ec2475f827be36e1957af72e2ea/build/css/bootstrap-datetimepicker.css" rel="stylesheet">
	<script type="text/javascript" src="http://code.jquery.com/jquery-2.1.1.min.js"></script>
	<script type="text/javascript" src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/moment.js/2.9.0/moment-with-locales.js"></script>
	<script src="http://cdn.rawgit.com/Eonasdan/bootstrap-datetimepicker/e8bddc60e73c1ec2475f827be36e1957af72e2ea/src/js/bootstrap-datetimepicker.js"></script>

    <style>
    body {
    font-family:-apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
    }

    .sidenav {
    height: 100%;
    width: 160px;
    position: fixed;
    z-index: 1;
    top: 0;
    left: 0;
    background-color: #0277bd;
    overflow-x: hidden;
    padding-top: 20px;
    }

    .sidenav a {
    padding: 6px 8px 6px 16px;
    text-decoration: none;
    font-size: 20px;
    color: #e0e0e0;
    display: block;
    }

    .sidenav a:hover {
    color: #f1f1f1;
    }

    .main {
    margin-left: 160px;
    font-size: 16px;
    padding: 0px 10px;
    }

    @media screen and (max-height: 450px) {
    .sidenav {padding-top: 15px;}
    .sidenav a {font-size: 18px;}
    }

    .navbar{
        margin-top: 20px;
    }

    .footer {
    position: fixed;
    left: 0;
    bottom: 0;
    width: 100%;
    color: gray;
    text-align: center;
    }

    img {
    border-radius: 50%;
    width: 100px;
    }

    h4{
        font-size: 15px;
        color: #e0e0e0;
    }

    </style>
</head>
<body class="container m-4">
    <div class="sidenav">
        <div class="img bg-wrap text-center py-10">
            <div class="user-logo">
                <img src="https://i.ibb.co/VC3wWKv/132501.jpg" alt="Avatar">
                <h4>Aina Divany</h4>
                <h4>5026201114</h4>
            </div>
        </div>
        <a href="/pegawai">Pegawai</a>
        <a href="/absen">Absen</a>
        <a href="/mutasi">Mutasi</a>
        <a href="/buku">Buku</a>
        <a href="/karyawan1">Karyawan1</a>
    </div>

    <div class="main">

        <h3>@yield('judulhalaman')</h3>

        @section('isikonten')
        @show
    </div>

    <br/>

    <div class="footer">
        <p>© 2021 Copyright: Aina Divany - 5026201114</p>
    </div>

</body>
</html>
