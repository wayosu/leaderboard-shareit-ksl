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
    <link rel="stylesheet" href="public/css/style.css">

    <link rel="shortcut icon" href="public/img/star.png" type="image/x-icon">

    <title>Login</title>
</head>

<body>
    <nav class="my-navbar">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <div class="mt-3">
                        <a href="https://nostalgic-css.github.io/NES.css/">
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

    <section class="mt-3">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="nes-container with-title">
                        <h3 class="title">Login</h3>
                        <div class="nes-field mb-3">
                            <label for="name_field">Username</label>
                            <input type="text" name="username" id="name_field" class="nes-input">
                        </div>
                        <div class="nes-field mb-3">
                            <label for="name_field">Password</label>
                            <input type="text" name="password" id="name_field" class="nes-input">
                        </div>
                        <a href="./" class="nes-btn">Kembali</a>
                        <button type="submit" name="login" class="nes-btn is-success">Login</button>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>

</html>