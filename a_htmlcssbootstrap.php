<?php
session_start();
if (!isset($_SESSION['loggedin'])) {
    header('Location: login.php');
    exit;
}
include 'app/conn.php';

if (isset($_POST['id_peserta']) && isset($_POST['hcb'])) {
    $id_peserta = $_POST['id_peserta'];
    $point1 = $_POST['point1'];
    $point2 = $_POST['point2'];
    $point3 = $_POST['point3'];
    $point4 = $_POST['point4'];

    $sql = $mysqli->query("UPDATE htmlcssbootstrap SET point1='$point1',point2='$point2',point3='$point3',point4='$point4' WHERE id_peserta='$id_peserta'");

    header('Location: a_htmlcssbootstrap.php');
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
                <h4 class="nes-text is-error">*Read first</h4>
                <p>1. <span class="nes-text">Point kuning</span> = Wireframe (layout)</p>
                <p>2. <span class="nes-text">Point hijau</span> = Responsive</p>
                <p>3. <span class="nes-text">Point merah</span> = Content Precision</p>
                <p>4. <span class="nes-text">Point hitam</span> = Layout To Do List</p>
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
                                <?php
                                $result = $mysqli->query("SELECT *, hcb.point1 + hcb.point2 + hcb.point3 + hcb.point4 AS total FROM peserta p JOIN htmlcssbootstrap hcb ON p.id = hcb.id_peserta ORDER BY total DESC");
                                $no = 1;
                                while ($row = $result->fetch_object()) {
                                    echo "
                                            <tr>
                                                <td align='center'>$no</td>
                                                <td>$row->nama</td>
                                                <td>
                                        ";
                                ?>
                                    <form action="" method="POST">
                                        <div class="text-center">
                                            <input type="hidden" name="id_peserta" value="<?= $row->id_peserta; ?>">
                                            <input type="hidden" name="hcb" value="htmlcssbootstrap">
                                            <input type="number" name="point1" class="nes-input is-warning" style="width: 20%;" value="<?= $row->point1; ?>">
                                            <input type="number" name="point2" class="nes-input is-success" style="width: 20%;" value="<?= $row->point2; ?>">
                                            <input type="number" name="point3" class="nes-input is-error" style="width: 20%;" value="<?= $row->point3; ?>">
                                            <input type="number" name="point4" class="nes-input" style="width: 20%;" value="<?= $row->point4; ?>">
                                            <input type="submit" style="display: none;">
                                        </div>
                                    </form>
                                <?php
                                    echo "
                                                </td>
                                            </tr>
                                        ";
                                    $no++;
                                }
                                ?>
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