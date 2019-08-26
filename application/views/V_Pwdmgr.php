<div class="x_panel">
    <div class="content">
        <div class="x_title">
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <h2 class="text-uppercase">password manager</h2>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <div class="text-right">
                            <button type="button" name="addbtn" class="btn btn-success" data-toggle="modal" data-target="#myModal"><i class="fa fa-plus"></i> Add</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
    <div class="x_content table-responsive">
        <table class="table table-striped table-bordered table-hover" style="width:100%;">
            <thead>
                <tr role="row">
                    <th class="text-uppercase text-center">link</th>
                    <th class="text-uppercase text-center">Username</th>
                    <th class="text-uppercase text-center">Create</th>
                    <th class="text-uppercase text-center">Update</th>
                    <th class="text-uppercase text-center">status</th>
                    <th class="text-uppercase text-center">action</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($Pwdmgr as $Pwdmgr) { ?>
                    <tr>
                        <td>
                            <?= $Pwdmgr->link ?>
                        </td>
                        <td>
                            <?= $Pwdmgr->uname ?>
                        </td>
                        <td>
                            <?= $Pwdmgr->syscreatedate ?>
                        </td>
                        <td>
                            <?= $Pwdmgr->lastcheck ?>
                        </td>
                        <td class="text-center">
                            <?php
                            if ($Pwdmgr->status == 1) {
                                echo '<button type="button" class="btn btn-default btn-success btn-xs" data-toggle="tooltip" data-placement="top" title="Set Non Active"><i class="glyphicon glyphicon-ok-sign"></i></button>';
                                echo '';
                            } else {
                                echo '<button type="button" class="btn btn-default btn-danger btn-xs" data-toggle="tooltip" data-placement="top" title="Set Active"><i class="glyphicon glyphicon-remove-sign"></i></button>';
                            }
                            ?>
                        </td>
                        <td>
                            <div class="text-center">
                                <button onclick="editbtn(<?= $Pwdmgr->id; ?>)" type="button" name="editbtn" class="btn btn-warning btn-xs" data-toggle="modal" data-target="#editmodal"><i class="glyphicon glyphicon-pencil"></i></button>
                                <button onclick="detailbtn(<?= $Pwdmgr->id; ?>)" type="button" class="btn btn-default btn-xs" data-toggle="modal" data-target="#detailmodal"><i class="glyphicon glyphicon-eye-open"></i></button>
                                <button onclick="deletebtn(<?= $Pwdmgr->id; ?>)" type="button" class="btn btn-danger btn-xs" data-toggle="modal" data-target="#deletemodal"><i class="glyphicon glyphicon-remove"></i></button>
                            </div>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</div>
<div class="modal" id="editmodal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title text-center text-uppercase">edit akun</h4>
            </div>
            <div class="modal-body">
                <form method="post" action="#">
                    <div class="form-group">
                        <label class="text-uppercase">link</label>
                        <input type="number" name="idtxt" class="hide" required="" autocomplete="off"/>
                        <input type="url" name="linktxt1" class="form-control" required="" autocomplete="off"/>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="text-uppercase">username</label>
                                <input type="text" name="unametxt1" class="form-control" required="" autocomplete="off"/>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="text-uppercase">password</label>
                                <div class="input-group">
                                    <input type="password" name="pwdtxt1" class="form-control" required="" autocomplete="off"/>
                                    <span class="input-group-addon">
                                        <i class="glyphicon glyphicon-eye-open" onclick="showpwd()"></i>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="text-uppercase">note</label>
                        <textarea name="notetxt1" class="form-control" required=""></textarea>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <div class="text-center">
                    <button type="button" class="btn btn-danger text-uppercase" data-dismiss="modal">Close</button>
                    <button type="submit" name="updbtn" onclick="update()" class="btn btn-success text-uppercase">update</button>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="modal" id="detailmodal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title text-center text-uppercase">detail data</h4>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="text-uppercase text-danger">link :</label>
                            <input id="linkp" type="text" class="form-control" readonly="readonly">
                        </div>
                        <div class="form-group">
                            <label class="text-uppercase text-danger">password :</label>
                            <input id="pwdp" type="text" class="form-control" readonly="readonly">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="text-uppercase text-danger">username :</label>
                            <input id="unamep" type="text" class="form-control" readonly="readonly">
                        </div>
                        <div class="form-group">
                            <label class="text-uppercase text-danger">last check :</label>
                            <input id="lastp" type="text" class="form-control" readonly="readonly">
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label class="text-uppercase text-danger">note :</label>
                    <textarea class="form-control" id="notep" readonly="readonly"></textarea>
                </div>
            </div>
            <div class="modal-footer">
                <div class="text-center">
                    <button type="button" class="btn btn-danger text-uppercase" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal" id="deletemodal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title text-center text-uppercase">delete data</h4>
            </div>
            <div class="modal-body">
                <h2 class="text-center">Anda ingin hapus data ini?</h2>
                <input type="text" name="hapusid" readonly="" class="hide"/>
            </div>
            <div class="modal-footer">
                <div class="text-center">
                    <button type="button" class="btn btn-danger text-uppercase" data-dismiss="modal">No</button>
                    <button type="button" class="btn btn-success text-uppercase" onclick="hapus()">Yes</button>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal" id="myModal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title text-center text-uppercase">tambah akun</h4>
            </div>
            <div class="modal-body">
                <form method="post" id="simpan" action="#">
                    <div class="form-group">
                        <label class="text-uppercase">link</label>
                        <input type="url" name="linktxt" class="form-control" required="" autocomplete="off"/>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="text-uppercase">username</label>
                                <input type="text" name="unametxt" class="form-control" required="" autocomplete="off"/>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="text-uppercase">password</label>
                                <input type="password" name="pwdtxt" class="form-control" required="" autocomplete="off"/>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="text-uppercase">note</label>
                        <textarea name="notetxt" class="form-control" required=""></textarea>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <div class="text-center">
                    <button type="button" class="btn btn-danger text-uppercase" data-dismiss="modal">Close</button>
                    <button type="submit" name="savebtn" onclick="simpan()" class="btn btn-success text-uppercase">simpan</button>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    window.onload = function () {
        $('.table').DataTable({
            responsive: true,
            fixedHeader: true,
            "lengthMenu": [[10, 25, 50, 100, -1], [10, 25, 50, 100, "All"]],
            dom: 'Blfrtip'
        });
    };
    function hapus() {
        $id = $("input[name=hapusid]").val();
        $.ajax({
            url: "<?= base_url('Pwdmgr/Delete/'); ?>" + $id,
            dataType: 'JSON',
            success: function (data) {
                alert(data.status + ', ' + data.msg);
                window.location.reload(true);
            },
            error: function (data) {
                alert(data.status + ', ' + data.msg);
                window.location.reload(true);
            }
        });
    }
    function deletebtn(obj) {
        $("input[name=hapusid]").val(obj);
    }
    function detailbtn(obj) {
        $.ajax({
            url: "<?= base_url('Pwdmgr/Detailakun/'); ?>" + obj,
            dataType: 'JSON',
            success: function (data) {
                $("input[id=linkp]").val(data[0].link);
                $("input[id=unamep]").val(data[0].uname);
                $("input[id=pwdp]").val(data[0].pwd);
                $("input[id=lastp]").val(data[0].lastcheck);
                $("textarea[id=notep]").val(data[0].note);
            },
            error: function () {
                alert('Fatal Error !');
                location.reload();
            }
        });
    }
    function showpwd() {
        var type = $("input[name=pwdtxt1]").attr('type');
        if (type === "password") {
            $("input[name=pwdtxt1]").attr('type', 'text');
            document.getElementsByClassName("glyphicon-eye-open").className = $(".glyphicon-eye-open").attr('class', 'glyphicon glyphicon-eye-close');
        } else {
            $("input[name=pwdtxt1]").attr('type', 'password');
            document.getElementsByClassName("glyphicon-eye-close").className = $(".glyphicon-eye-close").attr('class', 'glyphicon glyphicon-eye-open');
        }

    }
    function editbtn(obj) {
        $.ajax({
            url: "<?= base_url('Pwdmgr/EditPwd/'); ?>" + obj,
            dataType: 'JSON',
            success: function (data) {
                $('input[name=idtxt]').val(data[0].id);
                $('input[name=linktxt1]').val(data[0].link);
                $('input[name=unametxt1]').val(data[0].uname);
                $('input[name=pwdtxt1]').val(data[0].pwd);
                $('textarea[name=notetxt1]').val(data[0].note);
            },
            error: function () {
                alert('Fatal Error !');
                location.reload();
            }
        });
    }

    function update() {
        var a, b, c, d, e;
        a = $('input[name=linktxt1]').val();
        b = $('input[name=unametxt1]').val();
        c = $('input[name=pwdtxt1]').val();
        d = $('textarea[name=notetxt1]').val();
        e = $('input[name=idtxt]').val();
        $.ajax({
            url: "<?= base_url('Pwdmgr/Updateakun/'); ?>",
            type: 'POST',
            dataType: 'json',
            data: {link: a, uname: b, pwd: c, note: d, id: e},
            success: function () {
                alert("data berhasil disimpan");
                window.location.reload(true);
            }, error: function () {
                alert("data gagal disimpan");
            }
        });
    }
    function simpan() {
        if ($('input[name=linktxt]').val() === "") {
            alert('link tidak boleh kosong !');
        } else if ($('input[name=unametxt]').val() === "") {
            alert('username tidak boleh kosong !');
        } else if ($('input[name=pwdtxt]').val() === "") {
            alert('password tidak boleh kosong !');
        } else if ($('textarea[name=notetxt]').val() === "") {
            alert('catatan tidak boleh kosong !');
        } else {
            var a, b, c, d;
            a = $('input[name=linktxt]').val();
            b = $('input[name=unametxt]').val();
            c = $('input[name=pwdtxt]').val();
            d = $('textarea[name=notetxt]').val();
            $.ajax({
                url: "<?= base_url('Pwdmgr/Simpanakun'); ?>",
                type: 'POST',
                data: {link: a, uname: b, pwd: c, note: d},
                dataType: 'json',
                success: function () {
                    alert("data berhasil disimpan");
                    location.reload();
                }, error: function () {
                    alert("data gagal disimpan");
                }
            });
        }
    }
</script>