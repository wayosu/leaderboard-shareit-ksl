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

    <title>HTML, CSS & Bootstrap Assesment</title>
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
            <a href="a_team.php" class="nes-btn">Back</a>
            <div class="row justify-content-center mt-3">
                <h2 id="usage"><i class="nes-icon trophy"></i> HTML, CSS & Bootstrap Assesment</h2>
                <div class="col">
                    <div class="nes-table-responsive">
                        <table class="nes-table is-bordered" width="99%">
                            <thead>
                                <tr align="center">
                                    <th width="5%">#</th>
                                    <th>Nama</th>
                                    <th>Points</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td align="center">1</td>
                                    <td>Wahyu Setiawan Usman</td>
                                    <td align="center">
                                        <input type="number" name="" class="nes-input w-25">
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
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
</body>

</html>