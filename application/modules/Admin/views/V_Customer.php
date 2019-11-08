<div class="form-group text-right">
    <button type="button" name="addbtn" class="btn btn-default btn-primary" data-toggle="modal" data-target="#addmodal"><i class="glyphicon glyphicon-plus"></i> Add</button>
</div>
<table class="table table-bordered table-hover table-striped" style="width: 100%;">
    <thead>
        <tr>
            <th class="text-center text-uppercase">
                nama
            </th>
            <th class="text-center text-uppercase">
                perusahaan
            </th>
            <th class="text-center text-uppercase">
                telepon
            </th>
            <th class="text-center text-uppercase">
                email
            </th>
            <th class="text-center text-uppercase">
                action
            </th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($value as $value) { ?>
            <tr>
                <td>
                    <?= $value->nama; ?>
                </td>
                <td>
                    <?= $value->perusahaan; ?>
                </td>
                <td>
                    <?= $value->telepon; ?>
                </td>
                <td>
                    <?= $value->mail; ?>
                </td>
                <td class="text-center">
                    <div class="btn-group">
                        <a href="<?= base_url('Admin/Customer/Detail/' . $value->id_customer . ''); ?>" class="btn btn-default btn-xs"><i class="glyphicon glyphicon-eye-open"></i></a>
                    </div>
                </td>
            </tr>
        <?php } ?>
    </tbody>
</table>
<div class="modal fade" id="addmodal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Add Customer</h4>
            </div>
            <div class="modal-body">
                <form action="" method="POST">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="text-uppercase">nama customer</label>
                                <input type="text" name="namatxt" class="form-control" autocomplete="off" required="">
                            </div>
                            <div class="form-group">
                                <label class="text-uppercase">email</label>
                                <input type="email" name="emailtxt" class="form-control" autocomplete="off" required="">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="text-uppercase">nama perusahaan</label>
                                <input type="text" name="perusahaantxt" class="form-control" autocomplete="off" required="">
                            </div>
                            <div class="form-group">
                                <label class="text-uppercase">telepon</label>
                                <input type="text" name="telepontxt" class="form-control" autocomplete="off" required="">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="text-uppercase">alamat</label>
                                <textarea name="alamat" class="form-control" required="" minlength="15"></textarea>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <div class="btn-group">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save</button>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    document.onreadystatechange = () => {
        if (document.readyState === 'complete') {
            $(".right_col").removeClass("hidden");
        }
    };
    window.onload = function () {
        $('table').DataTable({

        });
    };
</script>