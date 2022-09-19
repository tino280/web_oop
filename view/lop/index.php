<h1>Danh sách lớp</h1>
<a href="?action=create&controller=lop">Thêm lớp</a>
<table width="50%" border="1">
    <tr>
        <td>Mã lớp</td>
        <td>tên lớp</td>
        <td>Sửa</td>
        <td>Xóa</td>
    </tr>
    <?php foreach ($arr as $each) { ?>
        <tr>
            <td><?php echo $each->getId() ?></td>
            <td><?php echo $each->getName() ?></td>
            <td>
                <a href="?action=edit&controller=lop&id=<?php echo $each->getId() ?>">Sửa</a>
            </td>
            <td>
                <a href="?action=delete&controller=lop&id=<?php echo $each->getId() ?>">Xóa</a>
            </td>
        </tr>
    <?php } ?>
</table>