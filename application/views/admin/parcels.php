<?php include '/../header.php'; ?>
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
                <th>Branch From</th>
                <th>Branch To</th>
                <th>package_type_id</th>
                <th>service_id</th>
                <th>weight</th>
                <th>charge</th>
                <th>edd</th>
                <th>parcel_desc</th>
                <th>status_id</th>
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
                        <?= $row['sname']; ?><hr>
                        <?= $row['semail']; ?> | <?= $row['sphone']; ?>
                    <br>
                        <?= $row['saddress']; ?>
                    </td>
                    <td>
                        <?= $row['rname']; ?><hr>
                        <?= $row['remail']; ?> | <?= $row['rphone']; ?>
                   <hr>
                        <?= $row['raddress']; ?> | <?= $row['rlocation']; ?>
                    </td>
                    <td>
                        <?=$this->M_branch->get_branch($row['sbranch_id']); ?>
                    </td>
                    <td>
                    <?=$this->M_branch->get_branch($row['rbranch_id']); ?>
                    </td>
                    <td>
                        <?= $row['package_type_id']; ?>
                    </td>
                    <td>
                        <?= $row['service_id']; ?>
                    </td>
                    <td>
                        <?= $row['weight']; ?>
                    </td>
                    <td>
                        <?= $row['charge']; ?>
                    </td>
                    <td>
                        <?= $row['edd']; ?>
                    </td>
                    <td>
                        <?= $row['parcel_desc']; ?>
                    </td>
                    <td>
                        <?= $row['status_id']; ?>
                    </td>
                    <td>
                        <a href="<?= base_url(); ?>parcel/read/<?= $row['parcel_id']; ?>"
                            class="btn btn-primary btn-sm black"><i class="fa fa-edit"></i></a>
                        <a href="<?= base_url(); ?>parcel/delete/<?= $row['parcel_id']; ?>"
                            class="btn btn-danger btn-sm black"><i class="fa fa-times-circle"></i></a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

</div>
<?php include '/../footer.php'; ?>