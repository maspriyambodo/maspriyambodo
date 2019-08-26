<div class="x_panel">
    <div class="content">
        <div class="x_title">
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <h2 class="text-uppercase">customer list</h2>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <div class="text-right">
                            <button type="button" name="addbtn" class="btn btn-success" onclick="addbtn()"><i class="fa fa-plus"></i> Add</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
        <div class="row addcustomer" style="display:none;">
            <div class="col-md-4">
                <div class="form-group">
                    <label class="text-uppercase">domain :</label>
                    <input type="text" name="txtdomain" class="form-control">
                </div>
                <div class="form-group">
                    <label class="text-uppercase">server domain :</label>
                    <input type="text" name="txtserver" class="form-control">
                </div>
                <div class="form-group">
                    <label class="text-uppercase">ip address :</label>
                    <input type="text" name="txtip" class="form-control">
                </div>
                <div class="form-group">
                    <label class="text-uppercase">storage capacity :</label>
                    <input type="text" name="str_capacity" class="form-control">
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label class="text-uppercase">addon domain :</label>
                    <input type="text" name="addon_domain" class="form-control">
                </div>
                <div class="form-group">
                    <label class="text-uppercase">sub domain :</label>
                    <input type="text" name="sub_domain" class="form-control">
                </div>
                <div class="form-group">
                    <label class="text-uppercase">email limit :</label>
                    <input type="text" name="email_limit" class="form-control">
                </div>
                <div class="form-group">
                    <label class="text-uppercase">db limit :</label>
                    <input type="text" name="db_limit" class="form-control">
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label class="text-uppercase">renewal fee :</label>
                    <input type="text" name="renewal_fee" class="form-control">
                </div>
                <div class="form-group">
                    <label class="text-uppercase">register date :</label>
                    <input type="text" name="register_date" class="form-control">
                </div>
                <div class="form-group">
                    <label class="text-uppercase">due date :</label>
                    <input type="text" name="due_date" class="form-control">
                </div>
                <div class="form-group">
                    <label class="text-uppercase">owner :</label>
                    <input type="text" name="own" class="form-control">
                </div>
            </div>
            <div class="text-center" style="clear:both;margin:20px 0px;">
                <button type="button" onclick="svbtn()" id="svbtn" class="btn btn-success text-uppercase"><i class="glyphicon glyphicon-floppy-disk"></i> save</button>
                <button type="reset" onclick="cancelbtn()" class="btn btn-danger text-uppercase"><i class="glyphicon glyphicon-floppy-remove"></i> cancel</button>
            </div>
        </div>
        <div style="clear:both;margin:20px 0px;"></div>
        <div class="table-responsive">
            <table class="table table-bordered table-hover table-striped" style="width:100%;">
                <thead>
                    <tr>
                        <th class="text-uppercase text-center">
                            pemilik
                        </th>
                        <th class="text-uppercase text-center">
                            regdate
                        </th>
                        <th class="text-uppercase text-center">
                            duedate
                        </th>
                        <th class="text-uppercase text-center">
                            domain
                        </th>
                        <th class="text-uppercase text-center">
                            action
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($Customer as $value) { ?>
                        <tr>
                            <td>
                                <?= $value->own ?>
                            </td>
                            <td>
                                <?= $value->register_date ?>
                            </td>
                            <td>
                                <?= $value->due_date ?>
                            </td>
                            <td>
                                <?= $value->url_domain ?>
                            </td>
                            <td class="text-center">
                                <button class="btn btn-xs btn-warning text-uppercase" title="edit" onclick="editbtn(<?= $value->id ?>)"><i class="glyphicon glyphicon-pencil"></i> </button>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<script>
    function svbtn() {
        var a, b, c, d, e, f, g, h, i, j, k;
        a = $('input[name=txtdomain]').val();
        b = $('input[name=txtserver]').val();
        c = $('input[name=txtip]').val();
        d = $('input[name=str_capacity]').val();
        e = $('input[name=addon_domain]').val();
        f = $('input[name=sub_domain]').val();
        g = $('input[name=email_limit]').val();
        h = $('input[name=db_limit]').val();
        i = $('input[name=renewal_fee]').val();
        j = $('input[name=register_date]').val();
        k = $('input[name=due_date]').val();
        l = $('input[name=own]').val();
        if (a === "" || b === "" || c === "" || d === "" || e === "" || f === "" || g === "" || h === "" || i === "" || j === "" || k === "" || l === "") {
            alert('please complete all fields !');
        } else {
            switch (document.getElementById('svbtn').innerHTML) {
                case "SAVE":
                    $.ajax({
                        url: "<?= base_url('Customerlist/Simpan'); ?>",
                        type: 'POST',
                        data: {url_domain: a, server_name: b, ip_addres: c, str_capacity: d, addon_domain: e, sub_domain: f, email_limit: g,
                            db_limit: h, renewal_fee: i, register_date: j, due_date: k, own: l},
                        success: function (data) {
                            alert(data.msg);
                        }
                    });
                    break;
                case "UPDATE":
                    $.ajax({
                        url: "<?= base_url('Customerlist/Ubah'); ?>",
                        type: 'POST',
                        data: {url_domain: a, server_name: b, ip_addres: c, str_capacity: d, addon_domain: e, sub_domain: f, email_limit: g,
                            db_limit: h, renewal_fee: i, register_date: j, due_date: k, own: l},
                        success: function (data) {
                            alert(data.msg);
                        }
                    });
                    break;
            }
        }

    }
    function addbtn() {
        if ($(".addcustomer").is(":visible")) {

        } else {
            $('.addcustomer').show('slow');
        }
    }
    function cancelbtn() {
        if ($(".addcustomer").is(":visible")) {
            $('.addcustomer').hide('slow');
        } else {
            $('.addcustomer').show('slow');
        }
    }
    window.onload = function () {
        $('.table').DataTable({

        });
    };
    function editbtn(obj) {
        document.getElementById('svbtn').innerHTML = "UPDATE";
        if ($(".addcustomer").is(":visible")) {

        } else {
            $('.addcustomer').show('slow');
            $.ajax({
                url: "<?= base_url('Customerlist/Ubah/'); ?>" + obj,
                dataType: 'JSON',
                success: function (data) {
                    if (data.status === "OK") {
                        $('input[name=txtdomain]').val(data[0][0].url_domain);
                        $('input[name=txtserver]').val(data[0][0].server_name);
                        $('input[name=txtip]').val(data[0][0].ip_addres);
                        $('input[name=str_capacity]').val(data[0][0].str_capacity);
                        $('input[name=addon_domain]').val(data[0][0].addon_domain);
                        $('input[name=sub_domain]').val(data[0][0].sub_domain);
                        $('input[name=email_limit]').val(data[0][0].email_limit);
                        $('input[name=db_limit]').val(data[0][0].db_limit);
                        $('input[name=renewal_fee]').val(data[0][0].renewal_fee);
                        $('input[name=register_date]').val(data[0][0].register_date);
                        $('input[name=due_date]').val(data[0][0].due_date);
                        $('input[name=own]').val(data[0][0].own);
                    } else {
                        alert(data.status + data.msg);
                    }
                }
            });
        }
    }
</script>