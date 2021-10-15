<?php
include 'app/conn.php';
if (!isset($_GET['id'])) {
    header('Location: ./');
    exit;
}
$result = $mysqli->query("SELECT *, hcb.point1 + hcb.point2 + hcb.point3 + hcb.point4 + ph.point1 + ph.point2 + ms.point1 + ms.point2 + cr.point1 + cr.point2 AS total FROM peserta p JOIN htmlcssbootstrap hcb ON p.id = hcb.id_peserta JOIN php ph ON p.id = ph.id_peserta JOIN mysql ms ON p.id = ms.id_peserta JOIN crud cr ON p.id = cr.id_peserta WHERE p.id='$_GET[id]'");
$row = $result->fetch_object();

$result_hcb = $mysqli->query("SELECT * FROM htmlcssbootstrap WHERE id_peserta='$row->id_peserta'");
$row_hcb = $result_hcb->fetch_object();
$row_total_hcb = $row_hcb->point1 + $row_hcb->point2 + $row_hcb->point3 + $row_hcb->point4;

$result_php = $mysqli->query("SELECT * FROM php WHERE id_peserta='$row->id_peserta'");
$row_php = $result_php->fetch_object();
$row_total_php = $row_php->point1 + $row_php->point2;

$result_mysql = $mysqli->query("SELECT * FROM mysql WHERE id_peserta='$row->id_peserta'");
$row_mysql = $result_mysql->fetch_object();
$row_total_mysql = $row_mysql->point1 + $row_mysql->point2;

$result_crud = $mysqli->query("SELECT * FROM crud WHERE id_peserta='$row->id_peserta'");
$row_crud = $result_crud->fetch_object();
$row_total_crud = $row_crud->point1 + $row_crud->point2;
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

    <title>Leaderboard SHARE IT</title>
</head>

<body>

    <nav class="my-navbar">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <div class="mt-3">
                        <a href="#">
                            <h1>Leaderboard</h1>
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

    <section class="my-3">
        <div class="container">
            <a href="./" class="nes-btn">Back</a>
            <div class="row justify-content-center mt-3">
                <h2 id="usage"><i class="nes-icon trophy"></i> Detail Points</h2>
                <div class="col">
                    <div class="nes-container with-title">
                        <h3 class="title">Detail</h3>
                        <h2 class="mb-3"><?= $row->nama; ?> - <span class="nes-text is-warning"><?= $row->total; ?> Point</span></h2>
                        <h3>> HTML, CSS, & Bootstrap</h3>
                        <div class="nes-badge">
                            <span class="is-warning">Total : <?= $row_total_hcb; ?></span>
                        </div>
                        <table class="nes-table is-bordered mb-5">
                            <tr>
                                <td>Wireframe (layout)</td>
                                <td>:</td>
                                <td><?= $row_hcb->point1; ?></td>
                            </tr>
                            <tr>
                                <td>Responsive</td>
                                <td>:</td>
                                <td><?= $row_hcb->point2; ?></td>
                            </tr>
                            <tr>
                                <td>Content Precision</td>
                                <td>:</td>
                                <td><?= $row_hcb->point3; ?></td>
                            </tr>
                            <tr>
                                <td>Layout To Do List</td>
                                <td>:</td>
                                <td><?= $row_hcb->point4; ?></td>
                            </tr>
                        </table>

                        <h3>> PHP Fundamental</h3>
                        <div class="nes-badge">
                            <span class="is-warning">Total : <?= $row_total_php; ?></span>
                        </div>
                        <table class="nes-table is-bordered mb-5">
                            <tr>
                                <td>Data Type</td>
                                <td>:</td>
                                <td><?= $row_php->point1; ?></td>
                            </tr>
                            <tr>
                                <td>Success Process</td>
                                <td>:</td>
                                <td><?= $row_php->point2; ?></td>
                            </tr>
                        </table>

                        <h3>> MySQL</h3>
                        <div class="nes-badge">
                            <span class="is-warning">Total : <?= $row_total_mysql; ?></span>
                        </div>
                        <table class="nes-table is-bordered mb-5">
                            <tr>
                                <td>Database</td>
                                <td>:</td>
                                <td><?= $row_mysql->point1; ?></td>
                            </tr>
                            <tr>
                                <td>Table and Field</td>
                                <td>:</td>
                                <td><?= $row_mysql->point2; ?></td>
                            </tr>
                        </table>

                        <h3>> PHP & MySQL CRUD</h3>
                        <div class="nes-badge">
                            <span class="is-warning">Total : <?= $row_total_crud; ?></span>
                        </div>
                        <table class="nes-table is-bordered mb-5">
                            <tr>
                                <td>CRUD Process</td>
                                <td>:</td>
                                <td><?= $row_crud->point1; ?></td>
                            </tr>
                            <tr>
                                <td>To Do List</td>
                                <td>:</td>
                                <td><?= $row_crud->point2; ?></td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <footer>
        <div class="container">
            <p class="text-center">
                <span>&copy;2021</span>
                <a href="#" target="_blank" class="nes-text is-warning">KSL</a>
            </p>
        </div>
    </footer>

</body>

</html>