<?php include '/../header.php'; ?>
<div class="portlet-body">
<div class="">
        <a href="<?= base_url(); ?>parcel" class="btn btn-default btn-sm"><i class="fa fa-arrow-left"></i> Back</a>
        <a href="" class="btn btn-default btn-sm"><i class="fa fa-print"></i> Print</a>
        <a href="<?= base_url(); ?>parcel/update_status" class="btn btn-primary btn-sm"><i class="fa fa-refresh"></i> Update Status</a>

    </div>
    <hr>
    <table class="table">
        <thead>
            <?php
            foreach ($parcel as $row): ?>
                <tr>
                    <th>Sender Details</th>
                    <th>
                        <?= $row['sname']; ?><br>
                        <?= $row['semail']; ?><br>
                        <?= $row['sphone']; ?> <br>
                        <?= $row['saddress']; ?>
                    </th>
                </tr>
                <tr>
                    <th>Receiver Details</th>
                    <th>
                        <?= $row['rname']; ?><br>
                        <?= $row['remail']; ?> <br>
                        <?= $row['rphone']; ?><br>
                        <?= $row['rlocation']; ?> <br>
                        <?= $row['raddress']; ?>
                    </th>
                </tr>
                <tr>
                    <th>Sending Office</th>
                   <th> <?= $this->M_branch->get_branch($row['sbranch_id']); ?>
                    </th>
                </tr>
                <tr>
                    <th>Destination Office</th>
                    <th>
                        <?= $this->M_branch->get_branch($row['rbranch_id']); ?>
                    </th>
                </tr>
                <tr>
                    <th>Package Type</th>
                    <th>
                        <?= $this->M_package_type->get_package_type($row['package_type_id']); ?>
                    </th>
                </tr>
                <tr>
                    <th>Service Type</th>

                    <th>
                        <?= $this->M_service->get_service($row['service_id']); ?>
                    </th>
                </tr>
                <tr>
                    <th>Weight</th>
                    <th>
                        <?= $row['weight']; ?>
                    </th>
                </tr>
                <tr>
                    <th>Charge</th>
                    <th>
                        <?= number_format($row['charge'], 2); ?>
                    </th>
                </tr>
                <tr>
                    <th>Estimated <br>Delivery Date</th>
                    <th>
                        <?= $row['edd']; ?>
                    </th>
                </tr>
                <tr>
                    <th>Parcel <br>Description</th>
                    <th>
                        <?= $row['parcel_desc']; ?>
                    </th>
                </tr>
                <tr>
                    <th>Status</th>
                    <th>
                        <?= $this->M_status->get_status($row['status_id']); ?>
                    </th>
                </tr>
                <tr>
                    <th>Tracking Code</th>
                    <th>
                        <?= $row['tracking_code']; ?>
                    </th>
                </tr>
            </thead>

        <?php endforeach; ?>
        </tbody>
    </table>

</div>
<?php include '/../footer.php';