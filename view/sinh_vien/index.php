<h1>Danh sách sinh viên</h1>
<a href="?action=create&controller=sinh_vien">Thêm sinh viên</a>
<table width="50%" border="1">
    <tr>
        <td>Mã sinh viên</td>
        <td>Tên sinh viên</td>
        <td>Tên lớp</td>
        <td>Sửa</td>
        <td>Xóa</td>
    </tr>
    <?php foreach ($arr as $each) { ?>
        <tr>
            <td><?php echo $each->getId() ?></td>
            <td><?php echo $each->getName() ?></td>
            <td><?php echo $each->getClassName() ?></td>
            <td>
                <a href="?action=edit&controller=sinh_vien&id=<?php echo $each->getId() ?>">Sửa</a>
            </td>
            <td>
                <a href="?action=delete&controller=sinh_vien&id=<?php echo $each->getId() ?>">Xóa</a>
            </td>
        </tr>
    <?php } ?>
</table>