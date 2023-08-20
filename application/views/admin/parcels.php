<?php $this->load->view('header.php');?>
<div class="portlet-body">
    <a href="<?= base_url();
    ; ?>parcel/read" class="btn btn-primary btn-sm black"><i class="fa fa-plus"></i> Add New</a>
    <hr>
    <table class="table table-striped table-bordered">
        <thead>
            <tr>
                <th style="width:3%;">#</th>
                <th>Sender Details</th>
                <th>Receiver Details</th>
                <th>Sending Office</th>
                <th>Destination Office</th>
                <th>Package Type</th>
                <th>Service Type</th>
                <th>Weight</th>
                <th>Charge</th>
                <th>Estimated <br>Delivery Date</th>
                <th>Parcel <br>Description</th>
                <th>Status</th>
                <th>Tracking Code</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            <?php
            $count = 1;
            foreach ($parcels as $row): ?>
                <tr>
                    <td>
                        <?= $count++; ?>
                    </td>
                    <td>
                        <?= $row['sname']; ?><br>
                        <?= $row['semail']; ?><br> <?= $row['sphone']; ?>                    <br>
                        <?= $row['saddress']; ?>
                    </td>
                    <td>
                        <?= $row['rname']; ?><br>
                        <?= $row['remail']; ?> <br> <?= $row['rphone']; ?><br>
                        <?= $row['rlocation']; ?> <br> <?= $row['raddress']; ?>
                    </td>
                    <td>
                        <?=$this->M_branch->get_branch($row['sbranch_id']); ?>
                    </td>
                    <td>
                    <?=$this->M_branch->get_branch($row['rbranch_id']); ?>
                    </td>
                    <td>
                        <?= $this->M_package_type->get_package_type($row['package_type_id']); ?>
                    </td>
                    <td>
                        <?= $this->M_service->get_service($row['service_id']); ?>
                    </td>
                    <td>
                        <?= $row['weight']; ?>
                    </td>
                    <td>
                        <?= number_format($row['charge'],2); ?>
                    </td>
                    <td>
                        <?= $row['edd']; ?>
                    </td>
                    <td>
                        <?= $row['parcel_desc']; ?>
                    </td>
                    <td>
                        <?= $this->M_status->get_status($row['status_id']); ?>
                    </td>
                    <td>
                        <?= $row['tracking_code']; ?>
                    </td>
                    <td>
                        <a href="<?= base_url(); ?>Parcel/read/<?= $row['parcel_id']; ?>"
                            class="btn btn-primary btn-sm"><i class="fa fa-edit"></i> Edit</a>

                            <a href="<?= base_url(); ?>Parcel/view/<?= $row['parcel_id']; ?>"
                            class="btn btn-success btn-sm"><i class="fa fa-info-circle"></i> View Details</a>
                        <a href="<?= base_url(); ?>Parcel/delete/<?= $row['parcel_id']; ?>"
                            class="btn btn-danger btn-sm"><i class="fa fa-times-circle"></i> remove</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

</div>
<?php $this->load->view('footer.php');?>
