<form action="?action=update&controller=sinh_vien" method="post">
    <input type="hidden" name="id" value="<?php echo $arr_sinh_vien->getId(); ?>" />
    Tên sinh viên
    <br>
    <input type="text" name="name" id="" value="<?php echo $arr_sinh_vien->getName(); ?>" />
    <br>
    Tên lớp
    <br>
    <select name="classId" id="">
        <?php foreach($arr_lop as $each) { ?>
            <option value="<?php echo $each-> getId() ?>" <?php if ($each-> getId() == $arr_sinh_vien->getClassId()) echo "selected"?>>
                <?php echo $each->getName(); ?>
            </option>
        <?php } ?>
    </select>
    <br>
    <button type="submit">Sửa</button>
</form>