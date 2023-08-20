<?php include '/../header.php'; ?>
<div class="portlet-body">
    <div class="">
        <a href="<?= base_url(); ?>Parcel" class="btn btn-default btn-sm"><i class="fa fa-arrow-left"></i> Back</a>
        <a href="" class="btn btn-default btn-sm" onclick="window.print()"><i class="fa fa-print"></i> Print</a>
        <a href="<?= base_url(); ?>Parcel/update_status/<?= $parcel_id; ?>" class="btn btn-primary btn-sm"><i
                class="fa fa-refresh"></i> Update Status</a>
                <?php if($paid == 0){?>
        <a href="<?= base_url(); ?>Parcel/pay/<?= $parcel_id; ?>" class="btn btn-primary btn-sm"><i
                class="fa fa-money"></i> Pay</a>
                <?php }?>

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
                    <th>
                        <?= $this->M_branch->get_branch($row['sbranch_id']); ?>
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

    <br><br>
    <strong>Payments</strong>
    <hr>
    <table class="table">
        <thead>
            <tr>
                <th>Charge</th>
                <th>Payment Date</th>
                <th>Added By</th>
                <!-- <th></th> -->
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($payments as $row): ?>
                <tr>
                   
                    <td>
                        <?= number_format($row['charge'], 2); ?>
                    </td>
                    <td>
                        <?= $row['payment_date']; ?>
                    </td>
                    <td><?= $this->M_user->get_name($row['added_by']); ?></td>
                    <!-- <td>
                        <a href="<?= base_url(); ?>Parcel/delete_payment/<?= $row['parcel_id']; ?>"
                            class="btn btn-danger btn-sm black"><i class="fa fa-times-circle"></i></a>
                    </td> -->
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

    <br><br>
    <strong>Events</strong>
    <hr>
    <table class="table">
        <thead>
            <tr>
                <th>Status</th>
                <th>Event Date</th>
                <th>Location</th>
                <th>Description</th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($events as $row): ?>
                <tr>
                   
                    <td><?= $this->M_status->get_status($row['status_id']); ?></td>
                    <td>
                        <?= $row['event_date']; ?>
                    </td>
                    <td>
                        <?= $row['location']; ?>
                    </td>
                    <td>
                        <?= $row['desc']; ?>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

</div>
<?php include '/../footer.php';