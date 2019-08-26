<div class="x_panel">
    <div class="content">
        <div class="x_title">
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <h2 class="text-uppercase">profile priyambodo</h2>
                    </div>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>

    <div class="profile_left" style="background-image:url(<?= base_url('assets/images/Slider/3.jpg'); ?>);background-position-x:center;background-position-y:center;background-size:cover;background-repeat:no-repeat;">
        <div class="row">
            <div class="col-md-4">

            </div>
            <div class="col-md-4">
                <div class="form-group text-center" style="padding:100px 0px;">
                    <img class="img-responsive img-circle img-thumbnail animated zoomInDown" src="<?= base_url($Users[0]->pict); ?>" style="width:88px;height:88px;">
                    <h1 class="text-uppercase"style="color:white;">priyambodo</h1>
                </div>
            </div>
            <div class="col-md-4">
            </div>
        </div>
    </div>

    <div role="tabpanel" data-example-id="togglable-tabs">
        <ul id="myTab" class="nav nav-tabs bar_tabs" role="tablist">
            <li role="presentation" class="active"><a href="#tab_content1" id="home-tab" role="tab" data-toggle="tab" aria-expanded="true" class="text-uppercase">About Me</a>
            </li>
            <li role="presentation" class=""><a href="#tab_content2" role="tab" id="profile-tab" data-toggle="tab" aria-expanded="false" class="text-uppercase">projects</a>
            </li>
            <?php
            if($this->session->userdata('nama') == ""){
                
            }
            ?>
            <li role="presentation" class=""><a href="#tab_content3" role="tab" id="profile-tab2" data-toggle="tab" aria-expanded="false" class="text-uppercase">settings</a>
            </li>
        </ul>
        <div id="myTabContent" class="tab-content">
            <div role="tabpanel" class="tab-pane fade active in" id="tab_content1" aria-labelledby="home-tab">
                <p>
                    Priyambodo. Lahir di Jakarta, 13 Maret 1994. Menyelesaikan pendidikan dasar dan menengah di SDN 08 Pulogebang, dan SMPN 138 Jakarta Timur.<br>
                    lalu lanjut sekolah kejuruan di SMK Dinamika Pembangunan 1 Jakarta dengan jurusan teknik mesin lulus pada tahun 2011, setelah lulus sekolah tidak lanjut kuliah melainkan bekerja, karena ingin mencoba hal baru dan mengaplikasikan ilmu dari sekolah kejuruan saya, pertama kali saya bekerja di PT. SUZUKI INDOMOBIL, Penggilingan Jakarta Timur. Saya di tempatkan pada bagian assembling atau perakitan mesin mobil, selama 2 tahun PKWT (2012-2014).<br>
                    <br>
                    Setelah selesai PKWT lalu saya memutuskan untuk melanjutkan studi saya untuk menunjang jenjang karir saya.<br>
                    saya memutuskan untuk kuliah dengan fakultas Teknik, jurusan Teknik Informatika yang memang sudah menjadi hobi saya sejak SMP yaitu di dunia komputer, dan akhirnya saya memutuskan untuk kuliah di STIKOM CKI, Duren Sawit Jakarta Timur hingga saat ini(2018 / SMT VII).
                </p>
            </div>
            <div role="tabpanel" class="tab-pane fade" id="tab_content2" aria-labelledby="profile-tab">
                <div class="table-responsive">
                    <table id="datatable-buttons" class="table table-hover table-striped" style="width:100%;">
                        <thead>
                            <tr style="background-color:#00BFA5;">
                                <th class="text-uppercase text-center" style="border-bottom:3px solid #008e76;color:white;">
                                    #
                                </th>
                                <th class="text-uppercase text-center" style="border-bottom:3px solid #008e76;color:white;">
                                    project name
                                </th>
                                <th class="text-uppercase text-center" style="border-bottom:3px solid #008e76;color:white;">
                                    type
                                </th>
                                <th class="text-uppercase text-center" style="border-bottom:3px solid #008e76;color:white;">
                                    status
                                </th>
                                <th class="text-uppercase text-center" style="border-bottom:3px solid #008e76;color:white;">
                                    client's
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($Portfolio as $Portfolio) { ?>
                            <div style="clear:both;margin:5px 0px;"></div>
                            <tr>
                                <td style="border-bottom:1px solid #CFD8DC;">
                                    <?= $Portfolio->id ?>
                                </td>
                                <td class="text-center text-uppercase" style="border-bottom:1px solid #CFD8DC;">
                                    <?= $Portfolio->project_name ?>
                                </td>
                                <td class="text-center text-uppercase" style="border-bottom:1px solid #CFD8DC;">
                                    <p>
                                        <?php
                                        if ($Portfolio->project_skill == 1) {
                                            echo 'backend / system';
                                        } else {
                                            echo 'frontend / company profile';
                                        }
                                        ?>
                                    </p>
                                </td>
                                <td class="text-center" style="border-bottom:1px solid #CFD8DC;">
                                    <?php
                                    if ($Portfolio->project_status == 1) {
                                        echo '<p class="label label-success">DONE</p>';
                                    } elseif ($Portfolio->project_status == 2) {
                                        echo '<p class="label label-warning">PENDING</p>';
                                    } else {
                                        echo '<p class="label label-info">ON PROGRESS</p>';
                                    }
                                    ?>
                                </td>
                                <td class="text-center text-uppercase" style="border-bottom:1px solid #CFD8DC;">
                                    <a href="<?= $Portfolio->project_link ?>" target="_blank"><?= $Portfolio->project_client ?></a>
                                </td>
                            </tr>
                        <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
            <div role="tabpanel" class="tab-pane fade" id="tab_content3">
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label class="text-uppercase">username</label>
                            <input type="text" name="unametxt" class="form-control" value="<?= $Users[0]->uname ?>">
                        </div>
                        <div class="form-group">
                            <label class="text-uppercase">password</label>
                            <input type="password" name="pwdtxt" class="form-control" value="<?= $Users[0]->pwd ?>">
                        </div>
                        <div class="form-group">
                            <label class="text-uppercase">email</label>
                            <input type="email" name="mailtxt" class="form-control" value="<?= $Users[0]->usr_mail ?>">
                        </div>
                    </div>
                    <div class="col-md-4">

                    </div>
                    <div class="col-md-4">
                        <div class="form-group">

                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <button type="button" name="svbtn" onclick="simpan()" class="btn btn-success text-uppercase">save</button>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    function simpan() {
        var a, b, c;
        a = $('input[name=unametxt]').val();
        b = $('input[name=pwdtxt]').val();
        c = $('input[name=mailtxt]').val();
        $.ajax({
            url: "<?= base_url('Profiles/Simpan/' . $Users[0]->id . ''); ?>",
            type: 'POST',
            data: {uname: a, pwd: b, usr_mail: c},
            success: function (data) {
                alert(data.status + ", " + data.msg);
            },
            error: function (data) {
                alert(data.status + ", " + data.msg);
            }
        });
    }
</script>