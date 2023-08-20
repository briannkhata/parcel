<div class="col-md-12">
    <div class="form-group">
        <label for="exampleInputEmail1">Name</label>
        <input type="text" class="form-control" name="sname" value="<?= !empty($sname) ? $sname : ""; ?>" required>
    </div>
</div>

<div class="col-md-6">
    <div class="form-group">
        <label for="exampleInputEmail1">Phone</label>
        <input type="tel" class="form-control" name="sphone" value="<?= !empty($sphone) ? $sphone : ""; ?>" required>
    </div>
</div>

<div class="col-md-6">
    <div class="form-group">
        <label for="exampleInputEmail1">Email</label>
        <input type="email" class="form-control" name="semail" value="<?= !empty($semail) ? $semail : ""; ?>">
    </div>
</div>

<div class="col-md-12">
    <div class="form-group">
        <label for="exampleInputEmail1">Address</label>
        <textarea name="saddress" class="form-control" required><?= !empty($saddress) ? $saddress : ""; ?></textarea>
    </div>
</div>