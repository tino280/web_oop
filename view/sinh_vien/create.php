<form action="?action=store&controller=sinh_vien" method="post">
    Tên sinh viên
    <br>
    <input type="text" name="name" id="">
    <br>
    Tên lớp
    <select name="classId" id="">
        <?php foreach($arr as $each) { ?>
            <option value="<?php echo $each->getId(); ?>">
                <?php echo $each->getName() ?>
            </option>
        <?php } ?>
    </select>
    <br>
    <button type="submit">Thêm</button>
</form>