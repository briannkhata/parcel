<?php $this->load->view('header.php');?>
<div class="portlet-body">
<a href="<?=base_url();;?>Charge/read" class="btn btn-primary btn-sm black"><i class="fa fa-plus"></i> Add New</a>
<hr>
    <table class="table table-striped table-bordered">
        <thead>
            <tr>
                <th style="width:3%;">#</th>
                <th>Charge</th>
                <th>Weight From</th>
                <th>Weight To</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            <?php
				$count = 1;  
				foreach($charges as $row):?>
            <tr>
                <td><?=$count++;?></td>
                <td><?=number_format($row['charge'],2);?></td>
                <td><?=$row['weight_from'];?></td>
                <td><?=$row['weight_to'];?></td>
                <td>
                    <a href="<?=base_url();?>User/read/<?=$row['charge_id'];?>" class="btn btn-primary btn-sm black"><i
                            class="fa fa-edit"></i></a>
                    <a href="<?=base_url();?>User/delete/<?=$row['charge_id'];?>" class="btn btn-danger btn-sm black"><i
                            class="fa fa-times-circle"></i></a>
                </td>
            </tr>
            <?php endforeach;?>
        </tbody>
    </table>

</div>
<?php $this->load->view('footer.php');?>
