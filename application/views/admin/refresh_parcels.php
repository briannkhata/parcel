<?php $this->load->view('header.php');?>
<div class="portlet-body">
<div class="">
        <a href="<?= base_url();?>Report/by_status" class="btn btn-default btn-sm"><i class="fa fa-arrow-left"></i> Back</a>
        <a href="" class="btn btn-default btn-sm" onclick="window.print()"><i class="fa fa-print"></i> Print</a>
       

    </div>
    <hr>
    <table class="table table-striped">
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
                        <?= $row['semail']; ?><br>
                        <?= $row['sphone']; ?> <br>
                        <?= $row['saddress']; ?>
                    </td>
                    <td>
                        <?= $row['rname']; ?><br>
                        <?= $row['remail']; ?> <br>
                        <?= $row['rphone']; ?><br>
                        <?= $row['rlocation']; ?> <br>
                        <?= $row['raddress']; ?>
                    </td>
                    <td>
                        <?= $this->M_branch->get_branch($row['sbranch_id']); ?>
                    </td>
                    <td>
                        <?= $this->M_branch->get_branch($row['rbranch_id']); ?>
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
                        <?= number_format($row['charge'], 2); ?>
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

                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

</div>
<?php $this->load->view('footer.php');?>
