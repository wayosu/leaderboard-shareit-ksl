<?php
include '../conn.php';

views_index($mysqli);

function views_index($mysqli) {
    $result = $mysqli->query("SELECT * FROM peserta");
    $no = 1;
    while ($row = $result->fetch_object()) {
        $result_1 = $mysqli->query("SELECT * FROM htmlcssbootstrap WHERE id_peserta='$row->id'");
        $row_1 = $result_1->fetch_object();
        $point1 = $row_1->point1;
        $point2 = $row_1->point2;
        $point3 = $row_1->point3;
        $total_row_1 = $point1 + $point2 + $point3;
    
        echo "
                    <tr>
                        <td align='center'>$no</td>
                        <td>$row->nama</td>
                        <td>$total_row_1</td>
                    </tr>
                ";
        $no++;
    }
}
