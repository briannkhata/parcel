<?php include '/../header.php'; ?>
<div class="portlet-body">
<a href="<?=base_url();;?>service/read" class="btn btn-primary btn-sm black"><i class="fa fa-plus"></i> Add New</a>
<hr>
    <table class="table table-striped table-bordered">
        <thead>
            <tr>
                <th style="width:3%;">#</th>
                <th>Service</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            <?php
            $count = 1;
            foreach ($services as $row): ?>
                <tr>
                    <td>
                        <?= $count++; ?>
                    </td>
                    <td>
                        <?= $row['service']; ?>
                    </td>
                    <td>
                        <a href="<?= base_url(); ?>Service/read/<?= $row['service_id']; ?>"
                            class="btn btn-primary btn-sm black"><i class="fa fa-edit"></i></a>
                        <a href="<?= base_url(); ?>Service/delete/<?= $row['service_id']; ?>"
                            class="btn btn-danger btn-sm black"><i class="fa fa-times-circle"></i></a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

</div>
<?php include '/../footer.php'; ?>