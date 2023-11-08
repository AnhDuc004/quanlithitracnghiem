<div class="row2">
    <div class="row2 font_title">
        <h1>DANH SÁCH LOẠI HÀNG HÓA</h1>
    </div>
    <div class="row2 form_content ">
        <form action="#" method="POST">
            <div class="row2 mb10 formds_loai">
                <table>
                    <tr>
                        <th></th>
                        <th>MÃ LOẠI</th>
                        <th>TÊN LOẠI</th>
                        <th></th>
                    </tr>
                    <?php foreach ($chuyende as $cd) : ?>
                        <?php extract($cd) ?>
                        <tr>
                            <td><input type="checkbox" name="" id=""></td>
                            <td><?php echo $id ?></td>
                            <td><?php echo $tenchuyende ?></td>
                            <td>
                                <input type="button" value="Sửa">
                                <a href="?act=chuyen-de&id=<?= $id ?>"><input type="button" value="Xóa"></a>
                            </td>
                        </tr>
                    <?php endforeach ?>
                </table>
            </div>
            <div class="row mb10 ">
                <input class="mr20" type="button" value="CHỌN TẤT CẢ">
                <input class="mr20" type="button" value="BỎ CHỌN TẤT CẢ">
                <a href="?act=themcd"> <input class="mr20" type="button" value="NHẬP THÊM"></a>
            </div>
        </form>
    </div>
</div>