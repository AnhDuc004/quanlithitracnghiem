<?php
require_once "../models/chuyende.php";
require_once "../controllers/controller_chuyende.php";

$act = $_GET['act'] ?? "";

switch ($act) {
    case "":
        echo "<h1>HOME</h1>";
        break;
    case "lien-he":
        echo "<h1>LIÊN HỆ</h1>";
        break;
    case "chuyen-de":
        $title = "Danh sách chuyên đề";
        $id = $_GET['id'] ?? 0;
        if ($id !== 0) {
            delete_chuyende($id);
        }
        $chuyende = load_all_chuyende();
        $VIEW = "chuyende/list.php";

        chuyende_danhsach();
        break;
    case "themcd":
        $title = "Thêm chuyên đề";

        //Thêm chuyên đề
        if ($_SERVER['REQUEST_METHOD'] === "POST") {
            $tenchuyende = $_POST['tenchuyende'];
            insert_chuyende($tenchuyende);
            $thongbao = "Thêm dữ liệu thành công";
        }

        $VIEW = "chuyende/add.php";
        break;
    default:
        $VIEW = "404.php";
}
