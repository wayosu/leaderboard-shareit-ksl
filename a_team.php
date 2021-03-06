<?php
session_start();
if (!isset($_SESSION['loggedin'])) {
    header('Location: login.php');
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- font -->
    <link href="https://fonts.googleapis.com/css?family=Press+Start+2P" rel="stylesheet">

    <!-- bootstrap -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.3/css/bootstrap-grid.min.css" integrity="sha512-q0LpKnEKG/pAf1qi1SAyX0lCNnrlJDjAvsyaygu07x8OF4CEOpQhBnYiFW6YDUnOOcyAEiEYlV4S9vEc6akTEw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.3/css/bootstrap-utilities.min.css" integrity="sha512-kRvJclW5GazdbAJPE9vvs560XNBwTBGLg4RVHZALXHFnAWQeRbQ/jGcGDHcQXiiqRld4wEFs6Kpoa6Tm/wCrtg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- nes css -->
    <link href="https://unpkg.com/nes.css@latest/css/nes.min.css" rel="stylesheet" />

    <!-- costum css -->
    <link rel="stylesheet" href="style.css">

    <link rel="shortcut icon" href="public/img/star.png" type="image/x-icon">

    <title>Assesment Team</title>
</head>

<body>
    <nav class="my-navbar">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <div class="mt-3">
                        <a href="#">
                            <h1>Assesment Team</h1>
                        </a>
                        <p>SHARE IT PROGRAMMING.</p>
                    </div>
                </div>
                <div class="col-md-6">
                    <h3 class="float-end mt-2"><span class="nes-text is-warning">K</span>elompok <span class="nes-text is-warning">S</span>tudi <span class="nes-text is-warning">L</span>inux</h3>
                </div>
            </div>
        </div>
    </nav>

    <section class="mt-3">
        <div class="container">
            <div class="row">
                <div class="col-md-7">
                    <div class="float-start">
                        <a href="a_htmlcssbootstrap.php" class="nes-btn">HTML, CSS & Bootstrap</a>
                        <a href="a_php.php" class="nes-btn">PHP</a>
                        <a href="a_mysql.php" class="nes-btn">MySQL</a>
                        <a href="a_crud.php" class="nes-btn">CRUD</a>
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="float-end">
                        <span><?= $_SESSION['nama']; ?></span>
                        <a href="app/post/logout.php" class="nes-btn is-dark" onclick="return confirm('Anda yakin keluar dari halaman ini?')">Logout</a>
                    </div>
                </div>
            </div>

            <section class="mt-3">
                <div class="row justify-content-center">
                    <h2 id="usage"><i class="nes-icon trophy"></i> Total Points</h2>
                    <div class="col">
                        <div class="nes-table-responsive">
                            <table class="nes-table is-bordered" id="myTable" width="99%">
                                <thead>
                                    <tr align="center">
                                        <th width="5%">#</th>
                                        <th>Nama</th>
                                        <th>Points</th>
                                    </tr>
                                </thead>
                                <tbody id="data">

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </section>

    <footer class="mt-5">
        <div class="container">
            <p class="text-center">
                <span>&copy;2021</span>
                <a href="#" target="_blank" class="nes-text is-warning">KSL</a>
            </p>
        </div>
    </footer>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
        (function show_data() {
            $.ajax({
                url: "app/function/views_index.php",
                type: "GET",
                dataType: "html",
                success: function(data) {
                    //    alert(data);
                    $('#data').html(data);
                },
                complete: function() {
                    setTimeout(show_data, 3000);
                }
            });
        })();
    </script>

</body>

</html>