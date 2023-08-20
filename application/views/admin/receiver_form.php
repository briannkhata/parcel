<div class="col-md-12">
    <div class="form-group">
        <label for="exampleInputEmail1">Name</label>
        <input type="text" class="form-control" name="rname" value="<?= !empty($rname) ? $rname : ""; ?>" required>
    </div>
</div>

<div class="col-md-6">
    <div class="form-group">
        <label for="exampleInputEmail1">Phone</label>
        <input type="tel" class="form-control" name="rphone" value="<?= !empty($rphone) ? $rphone : ""; ?>" required>
    </div>
</div>

<div class="col-md-6">
    <div class="form-group">
        <label for="exampleInputEmail1">Email</label>
        <input type="email" class="form-control" name="remail" value="<?= !empty($remail) ? $remail : ""; ?>">
    </div>
</div>

<div class="col-md-6">
    <div class="form-group">
        <label for="exampleInputEmail1">Exact Location</label>
        <textarea name="rlocation" class="form-control" required><?= !empty($rlocation) ? $rlocation : ""; ?></textarea>
    </div>
</div>

<div class="col-md-6">
    <div class="form-group">
        <label for="exampleInputEmail1">Address</label>
        <textarea name="raddress" class="form-control" required><?= !empty($raddress) ? $raddress : ""; ?></textarea>
    </div>
</div>