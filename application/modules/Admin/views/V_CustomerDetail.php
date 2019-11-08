<div class="row">
    <div class="col-md-4">
        <div class="form-group">
            <label class="text-uppercase">nama customer</label>
            <p><?= $value[0]->nama ?></p>
        </div>
        <div class="form-group">
            <label class="text-uppercase">email</label>
            <p><?= $value[0]->mail ?></p>
        </div>
        <div class="form-group">
            <label class="text-uppercase">register date</label>
            <p><?= $value[0]->reg_date ?></p>
        </div>
    </div>
    <div class="col-md-4">
        <div class="form-group">
            <label class="text-uppercase">nama perusahaan</label>
            <p><?= $value[0]->perusahaan ?></p>
        </div>
        <div class="form-group">
            <label class="text-uppercase">alamat perusahaan</label>
            <p>
                <?= $value[0]->alamat_perusahaan . '<br> Kel. ' . $value[0]->kelurahan . ' Kel. ' . $value[0]->kecamatan . '<br>Kab. ' . $value[0]->kabupaten . ' Prov. ' . $value[0]->provinsi . ', ' . $value[0]->kodepos; ?>
            </p>
        </div>
        <div class="form-group">
            <label class="text-uppercase">due date</label>
            <p><?= $value[0]->due_date ?></p>
        </div>
    </div>
    <div class="col-md-4">
        <div class="form-group">
            <label class="text-uppercase">telepon</label>
            <p><?= $value[0]->telepon ?></p>
        </div>
    </div>
</div>
<table class="table table-borderless table-hover table-striped" style="width:100%;">
    <thead>
        <tr>
            <th class="text-uppercase text-center">
                domain
            </th>
            <th class="text-uppercase text-center">
                server
            </th>
            <th class="text-uppercase text-center">
                ip address
            </th>
            <th class="text-uppercase text-center">
                packet
            </th>
            <th class="text-uppercase text-center">
                subtotal
            </th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($value as $value) { ?>
            <tr>
                <td>
                    <?= $value->url_domain ?>
                </td>
                <td>
                    <?= $value->server_name ?>
                </td>
                <td>
                    <?= $value->ip_address ?>
                </td>
                <td class="text-uppercase">
                    <?= $value->packet_name ?>
                </td>
                <td class="text-uppercase">
                    <?= number_format($value->price); ?>
                </td>
            </tr>
        <?php } ?>
    </tbody>
</table>
<script>
    document.onreadystatechange = () => {
        if (document.readyState === 'complete') {
            $(".right_col").removeClass("hidden");

        }
    };
</script>