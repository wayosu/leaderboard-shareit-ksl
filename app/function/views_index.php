<?php
include '../conn.php';

views_index($mysqli);

function views_index($mysqli) {
    $result = $mysqli->query("SELECT *, hcb.point1 + hcb.point2 + hcb.point3 + hcb.point4 + ph.point1 + ph.point2 + ms.point1 + ms.point2 + cr.point1 + cr.point2 AS total FROM peserta p JOIN htmlcssbootstrap hcb ON p.id = hcb.id_peserta JOIN php ph ON p.id = ph.id_peserta JOIN mysql ms ON p.id = ms.id_peserta JOIN crud cr ON p.id = cr.id_peserta ORDER BY total DESC");
    $no = 1;
    while ($row = $result->fetch_object()) {
        // $result_1 = $mysqli->query("SELECT * FROM htmlcssbootstrap WHERE id_peserta='$row->id'");
        // $row_1 = $result_1->fetch_object();
        // $point1 = $row_1->point1;
        // $point2 = $row_1->point2;
        // $point3 = $row_1->point3;
        // $total_row_1 = $point1 + $point2 + $point3;
    
        echo "
                    <tr>
                        <td align='center'>$no</td>
                        <td><a href='detail_point.php?id=$row->id_peserta'>$row->nama</a></td>
                        <td>$row->total</td>
                    </tr>
                ";
        $no++;
    }
}
