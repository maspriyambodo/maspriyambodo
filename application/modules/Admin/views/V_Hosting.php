<form action="<?= base_url('Admin/Hosting/Save/'); ?>" method="POST">
    <table class="table table-bordered table-hover table-striped" style="width:100%;">
        <thead>
            <tr>
                <th class="text-center text-uppercase">
                    packet<br>name
                </th>
                <th class="text-center text-uppercase">
                    storage
                </th>
                <th class="text-center text-uppercase">
                    bandwidth
                </th>
                <th class="text-center text-uppercase">
                    panel
                </th>
                <th class="text-center text-uppercase">
                    price
                </th>
                <th class="text-center text-uppercase">
                    action
                </th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td class="text-center">
                    <div class="form-group">
                        <input type="text" name="pktname" class="form-control" autocomplete="off" required="" placeholder="Packet Name" style="width:100%;">
                    </div>
                </td>
                <td>
                    <div class="form-group">
                        <div class="input-group">
                            <input type="text" name="strspc" class="form-control" required="" placeholder="Storage" autocomplete="off" onkeypress="return isNumber(event)" style="width:100%;">
                            <div class="input-group-btn">
                                <select class="form-control" name="untstr" required="">
                                    <option value="">pilih unit</option>
                                    <option value="1">Giga Byte</option>
                                    <option value="2">Mega Byte</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </td>
                <td>
                    <select class="form-control" name="bandwidth" required="">
                        <option value="">pilih bandwidth</option>
                        <option value="1">un-metered</option>
                        <option value="2">metered</option>
                    </select>
                </td>
                <td>
                    <select class="form-control" name="panel" required="">
                        <option value="">pilih panel</option>
                        <option value="1">Cpanel</option>
                        <option value="2">Plesk</option>
                    </select>
                </td>
                <td>
                    <input type="text" name="price" class="form-control text-right" required="" placeholder="price per month" onkeypress="return isNumber(event)" autocomplete="off" style="width:100%;">
                </td>
                <td class="text-center">
                    <button type="submit" class="btn btn-default btn-success btn-xs"><i class="glyphicon glyphicon-save"></i> Save</button>
                </td>
            </tr>
            <?php foreach ($value as $value) { ?>
                <tr>
                    <td class="text-uppercase">
                        <?= $value->packet_name ?>
                    </td>
                    <td class="text-center">
                        <?php
                        if ($value->storage_space == 0) {
                            echo 'unlimited';
                        } else {
                            echo $value->storage_space;
                            if ($value->unit == 1) {
                                echo 'GB';
                            } else {
                                echo 'MB';
                            }
                        }
                        ?>
                    </td>
                    <td>
                        <?php
                        if ($value->bandwidth == 1) {
                            echo 'un-metered';
                        } else {
                            echo 'metered';
                        }
                        ?>
                    </td>
                    <td>
                        <?php
                        if ($value->panel == 1) {
                            echo 'Cpanel';
                        } else {
                            echo 'plesk';
                        }
                        ?>
                    </td>
                    <td>
                        <?= number_format($value->price) ?> / month
                    </td>
                    <td class="text-center">
                        <div class="btn-group">
                            <button type="button" data-toggle="modal" data-target="#editmodal" onclick="edit(<?= $value->id ?>)" class="btn btn-default btn-xs"><i class="glyphicon glyphicon-pencil"></i></button>
                            <button type="button" data-toggle="modal" data-target="#hapusmodal" onclick="hapus(<?= $value->id ?>)" class="btn btn-default btn-xs btn-danger"><i class="glyphicon glyphicon-trash"></i></button>
                        </div>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
    <input type="hidden" name="idtxt" class="form-control" readonly="readonly" style="width:15%;">
</form>
<div class="modal fade" id="editmodal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title text-uppercase" id="myModalLabel">edit data hosting</h4>
            </div>
            <form action="<?= base_url('Admin/Hosting/Simpan/'); ?>" method="POST">
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="text-uppercase">packet name :</label>
                                <input type="text" name="editpaket" class="form-control text-uppercase" required="" autocomplete="off">
                            </div>
                            <div class="form-group">
                                <label class="text-uppercase">bandwidth :</label>
                                <select class="form-control" name="editbandwidth" required="">
                                    <option value="">pilih bandwidth</option>
                                    <option value="1">un-metered</option>
                                    <option value="2">metered</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="text-uppercase">storage :</label>
                                <input type="text" name="editstorage" class="form-control" required="" autocomplete="off" onkeypress="return isNumber(event)" style="width:100%;">
                            </div>
                            <div class="form-group">
                                <label class="text-uppercase">panel :</label>
                                <select class="form-control" name="editpanel" required="">
                                    <option value="">pilih panel</option>
                                    <option value="1">Cpanel</option>
                                    <option value="2">Plesk</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="text-uppercase">unit :</label>
                                <select class="form-control" name="editunit" required="required">
                                    <option value="">pilih unit</option>
                                    <option value="1">Giga Byte</option>
                                    <option value="2">Mega Byte</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label class="text-uppercase">price :</label>
                                <input type="text" name="editprice" class="form-control text-right" required="" placeholder="price per month" onkeypress="return isNumber(event)" autocomplete="off" style="width:100%;">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <div class="btn-group">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<div class="modal fade" id="hapusmodal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Modal title</h4>
            </div>
            <div class="modal-body">
                <p id="delmsg"></p>
            </div>
            <div class="modal-footer">
                <div class="btn-group">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="button" onclick="hapusact()" class="btn btn-danger" data-dismiss="modal">Delete</button>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    function edit(obj) {
        $('input[name=idtxt]').val(obj);
        var a = $('input[name=idtxt]').val();
        $.ajax({
            url: "<?= base_url('Admin/Hosting/Getedit/'); ?>" + a,
            method: "GET",
            dataType: "JSON",
            success: function (data) {
                $('input[name=editpaket]').val(data[0].packet_name);
                $('input[name=editstorage]').val(data[0].storage_space);
                $('select[name=editpanel]').val(data[0].panel);
                $('select[name=editunit]').val(data[0].unit);
                $('select[name=editbandwidth]').val(data[0].bandwidth);
                $('input[name=editprice]').val(data[0].price);
            }
        });
    }
    function hapus(obj) {
        $('input[name=idtxt]').val(obj);
        var a = $('input[name=idtxt]').val();
        $.ajax({
            url: "<?= base_url('Admin/Hosting/Getedit/'); ?>" + a,
            method: "GET",
            dataType: "JSON",
            success: function (data) {
                document.getElementById('delmsg').innerHTML = 'anda yakin ingin hapus data paket <b class="text-uppercase">' + data[0].packet_name + '</b> ?';
            }
        });
    }
    function hapusact() {
        window.location.href = '<?= base_url('Admin/Hosting/Delete/'); ?>' + $('input[name=idtxt]').val();
    }
    window.onload = function () {
        $(".right_col").removeClass("hidden");
        $('table').DataTable({

        });
    };
    function isNumber(evt) {
        evt = (evt) ? evt : window.event;
        var charCode = (evt.which) ? evt.which : evt.keyCode;
        if (charCode > 31 && (charCode < 48 || charCode > 57)) {
            return false;
        }
        return true;
    }
</script>