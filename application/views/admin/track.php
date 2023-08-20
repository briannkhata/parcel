<?php include '/../header.php'; ?>
<div class="portlet-body">
    <div class="">
        <a href="<?= base_url(); ?>Parcel" class="btn btn-default btn-sm"><i class="fa fa-arrow-left"></i> Back</a>
    </div>
    <br><br>
    <table class="table">
        <tdead>
            <?php
            foreach ($parcel as $row): ?>

                <tr>
                    <td>Package Type</td>
                    <td>
                        <?= $this->M_package_type->get_package_type($row['package_type_id']); ?>
                    </td>
                </tr>
                <tr>
                    <td>Service Type</td>

                    <td>
                        <?= $this->M_service->get_service($row['service_id']); ?>
                    </td>
                </tr>

                <tr>
                    <td>Estimated <br>Delivery Date</td>
                    <td>
                        <?= $row['edd']; ?>
                    </td>
                </tr>
                <tr>
                    <td>Parcel <br>Description</td>
                    <td>
                        <?= $row['parcel_desc']; ?>
                    </td>
                </tr>
                <tr>
                    <th>Current Status</th>
                    <th>
                        <?= $this->M_status->get_status($row['status_id']); ?>
                    </th>
                </tr>

            </tdead>
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
            foreach ($this->M_parcel->get_parcel_events($row['parcel_id']) as $rowo): ?>
                <tr>
                   
                    <td><?= $this->M_status->get_status($rowo['status_id']); ?></td>
                    <td>
                        <?= $rowo['event_date']; ?>
                    </td>
                    <td>
                        <?= $rowo['location']; ?>
                    </td>
                    <td>
                        <?= $rowo['desc']; ?>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>

        <?php endforeach; ?>
    </table>

    
    </table>
</div>
<?php include '/../footer.php';