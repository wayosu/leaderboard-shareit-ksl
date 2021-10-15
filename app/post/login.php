<?php
session_start();

include 'app/conn.php';

if (isset($_POST['login'])) {
    if (!isset($_POST['username'], $_POST['password'])) {
        exit('Please fill both the username and password fields!');
    }

    if ($stmt = $mysqli->prepare('SELECT id, nama, password FROM user WHERE username = ?')) {
        $stmt->bind_param('s', $_POST['username']);
        $stmt->execute();
        $stmt->store_result();


        if ($stmt->num_rows > 0) {
            $stmt->bind_result($id, $nama, $password);
            $stmt->fetch();
            $pstpss = md5($_POST['password']);
            if ($pstpss === $password) {
                session_regenerate_id();
                $_SESSION['loggedin'] = TRUE;
                $_SESSION['uname'] = $_POST['username'];
                $_SESSION['nama'] = $nama;
                $_SESSION['id'] = $id;

?>
                <script>
                    document.location = 'a_team.php';
                </script>
            <?php
            } else {
            ?>
                <script>
                    alert('Incorrect password!');
                </script>
            <?php
            }
        } else {
            ?>
            <script>
                alert('Incorrect username!');
            </script>
<?php
        }

        $stmt->close();
    }
}
