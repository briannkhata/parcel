<div class="col-md-12">
    <div class="form-group">
        <label for="exampleInputEmail1">Parcel Description</label>
        <textarea class="form-control" name="parcel_desc" required></textarea>
    </div>
</div>



<div class="col-md-4">
    <div class="form-group">
        <label for="exampleInputEmail1">Estimated Arrival Date</label>
        <input type="date" class="form-control" name="edd" required>
    </div>
</div>


<div class="col-md-4">
    <div class="form-group">
        <label for="exampleInputEmail1">Weight</label>
        <input type="text" class="form-control" name="weight" required>
    </div>
</div>

<div class="col-md-4">
    <div class="form-group">
        <label for="exampleInputEmail1">Status</label>
        <select name="status_id" class="form-control" required="">
            <option selected disabled>Status</option>
            <?php foreach ($this->M_status->get_statuses() as $row) { ?>
                <option value="<?= $row['status_id']; ?>">
                    <?= $row['status_name']; ?></option>
            <?php } ?>
        </select>
    </div>
</div>

<div class="col-md-12">
    <div class="form-group">
        <label for="exampleInputEmail1">Charge</label>
        <input type="text" class="form-control" name="charge" required>
    </div>
</div>