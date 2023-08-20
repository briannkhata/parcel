<div class="col-md-12">
    <div class="form-group">
        <label for="exampleInputEmail1">Parcel Description</label>
        <textarea class="form-control" name="parcel_desc"
            required><?= !empty($parcel_desc) ? $parcel_desc : ""; ?></textarea>
    </div>
</div>



<div class="col-md-4">
    <div class="form-group">
        <label for="exampleInputEmail1">Estimated Arrival Date</label>
        <input type="date" class="form-control" name="edd" value="<?= !empty($edd) ? $edd : ""; ?>" required>
    </div>
</div>


<div class="col-md-4">
    <div class="form-group">
        <label for="exampleInputEmail1">Weight</label>
        <input type="text" class="form-control" name="weight" value="<?= !empty($weight) ? $weight : ""; ?>" required>
    </div>
</div>

<div class="col-md-4">
    <div class="form-group">
        <label for="exampleInputEmail1">Package Type</label>
        <select name="package_type_id" class="form-control" required="">
            <option selected disabled>package type</option>
            <?php foreach ($this->M_package_type->get_package_types() as $row) { ?>
                <option <?= !empty($package_type_id) ? "selected" : ""; ?> value="<?= $row['package_type_id']; ?>">
                    <?= $row['package_type']; ?></option>
            <?php } ?>
        </select>
    </div>
</div>

<div class="col-md-4">
    <div class="form-group">
        <label for="exampleInputEmail1">Service Type</label>
        <select name="service_id" class="form-control" required="">
            <option selected disabled>Service type</option>
            <?php foreach ($this->M_service->get_services() as $row) { ?>
                <option <?= !empty($service_id) ? "selected" : ""; ?> value="<?= $row['service_id']; ?>">
                    <?= $row['service']; ?></option>
            <?php } ?>
        </select>
    </div>
</div>

<div class="col-md-4">
    <div class="form-group">
        <label for="exampleInputEmail1">Destination Branch</label>
        <select name="rbranch_id" class="form-control" required="">
            <option selected disabled>Destination branch</option>
            <?php foreach ($this->M_branch->get_branches() as $row) { ?>
                <option <?= !empty($rbranch_id) ? "selected" : ""; ?> value="<?= $row['branch_id']; ?>">
                    <?= $row['branch']; ?></option>
            <?php } ?>
        </select>
    </div>
</div>

<div class="col-md-4">
    <div class="form-group">
        <label for="exampleInputEmail1">Status</label>
        <select name="status_id" class="form-control" required="">
            <option selected disabled>Status</option>
            <?php foreach ($this->M_status->get_statuses() as $row) { ?>
                <option <?= !empty($status_id) ? "selected" : ""; ?> value="<?= $row['status_id']; ?>">
                    <?= $row['status_name']; ?></option>
            <?php } ?>
        </select>
    </div>
</div>

<div class="col-md-12">
    <div class="form-group">
        <label for="exampleInputEmail1">Charge</label>
        <input type="text" class="form-control" name="charge" value="<?= !empty($charge) ? $charge : ""; ?>" required>
    </div>
</div>
<div class="col-md-12">
    <div class="form-group">
        <label for="exampleInputEmail1">Tracking Code</label>
        <input type="text" name="tracking_code" class="form-control"
            value=" <?= !empty($tracking_code) ? $tracking_code : $this->M_parcel->generateRandomString(); ?>" readonly>
    </div>
</div>