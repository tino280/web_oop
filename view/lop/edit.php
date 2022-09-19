<form action="?action=update&controller=lop" method="post">
    <input type="hidden" name="id" value="<?php echo $arr->getId(); ?>" />
    Tên lớp
    <br>
    <input type="text" name="name" id="" value="<?php echo $arr->getName() ?>">
    <br>
    <button type="submit">Sửa</button>
</form>