<div class="col-md-12">
    <div class="form-group">
        <label for="exampleInputEmail1">Phone</label>
        <input type="tel" class="form-control" name="phone" required>
    </div>
</div>

<div class="col-md-12">
    <div class="form-group">
        <label for="exampleInputEmail1">Name</label>
        <input type="text" class="form-control" name="name" required>
    </div>
</div>
<div class="col-md-4">
    <div class="form-group">
        <label for="exampleInputEmail1">Gender</label>
        <select name="gender" class="form-control" required="">
            <option selected disabled>gender</option>
            <option value="male">Male</option>
            <option value="female">Female</option>
            <option value="other">Other</option>
        </select>
    </div>
</div>


<div class="col-md-4">
    <div class="form-group">
        <label for="exampleInputEmail1">Email</label>
        <input type="email" class="form-control" name="email">
    </div>
</div>

<div class="col-md-4">
    <div class="form-group">
        <label for="exampleInputEmail1">District</label>
        <select name="district" class="form-control" required="">
            <option selected disabled>District</option>
            <?php foreach ($this->M_user->get_districts() as $row) { ?>
                <option value="<?= $row['district']; ?>">
                    <?= $row['district']; ?></option>
            <?php } ?>
        </select>
    </div>
</div>

<div class="col-md-6">
    <div class="form-group">
        <label for="exampleInputEmail1">City</label>
        <input type="text" class="form-control" name="city">
    </div>
</div>

<div class="col-md-6">
    <div class="form-group">
        <label for="exampleInputEmail1">Exact Location</label>
        <input type="text" class="form-control" name="location">
    </div>
</div>
<div class="col-md-12">
    <div class="form-group">
        <label for="exampleInputEmail1">Address</label>
        <textarea class="form-control" name="address"></textarea>
    </div>
</div>