<?php
require("../util/dataProvider.php");
$dp = new DataProvider();
switch ($_SERVER["REQUEST_METHOD"]) {
    case 'GET':
        switch ($_GET['action']) {
            case 'getSalesByYear':
                $year = $_GET['year'];
                $sql = "SELECT DATE_FORMAT(thoiGianDat, '%m') AS mon, SUM(tongTien) AS total
                        FROM hoadon WHERE trangThai = 'Delivered' and DATE_FORMAT(thoiGianDat, '%Y') = $year
                        GROUP BY DATE_FORMAT(thoiGianDat, '%Y-%m')
                        ORDER BY mon ASC;";
                $result = $dp->excuteQuery($sql);
                $data = array();
                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        array_push($data, $row);
                    }
                }
                echo json_encode($data);
                break;
            case 'getNumberOfProductsSold':
                $year = $_GET['year'];
                $month = $_GET['month'];
                $sql = "SELECT tl.tenLoai, IFNULL(SUM(cthd.SoLuong), 0) AS soLuong
                        FROM theLoai tl
                        LEFT JOIN (
                            SELECT a.theLoai, SUM(cthd.SoLuong) AS SoLuong
                            FROM album a
                            LEFT JOIN chitiethoadon cthd ON cthd.album = a.maAlbum
                            LEFT JOIN hoadon hd ON hd.maHoaDon=cthd.hoaDon
                            WHERE hd.trangThai = 'Delivered'
                            GROUP BY a.theLoai
                        ) AS cthd ON tl.maLoai = cthd.theLoai
                        GROUP BY tl.maLoai";
                $result = $dp->excuteQuery($sql);
                $data = array();
                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        array_push($data, $row);
                    }
                }
                echo json_encode($data);
                break;
        }
        break;
}