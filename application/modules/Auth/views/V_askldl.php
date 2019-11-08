<form action="<?= base_url('Auth/kljnd'); ?>" method="POST">
    <div class="row">
        <div class="col-md-4">
            <div class="form-group">
                <label class="text-uppercase">username :</label>
                <input type="text" name="uname" class="form-control" required="required" readonly="true" value="<?= $this->session->userdata('nama') ?>">
            </div>
            <div class="form-group">
                <label class="text-uppercase">old password :</label>
                <input type="password" name="oldpwd" class="form-control" required="required">
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group">
                <label class="text-uppercase">email :</label>
                <input type="text" name="mail" class="form-control" required="required" readonly="true" value="<?= $this->session->userdata('mail') ?>">
            </div>
            <div class="form-group">
                <label class="text-uppercase">new password :</label>
                <input type="password" name="newpwd" class="form-control" required="required">
            </div>
            <div class="form-group">
                <label class="text-uppercase">confirm password :</label>
                <input type="password" name="cnfpwd" class="form-control" required="required" onchange="confirm()">
                <p class="text-danger cnfpwd" id="cnfpwd" style="display:none;">enter password correctly</p>
            </div>
        </div>
        <div class="col-md-4">
            <img class="img-thumbnail img-rounded" src="<?= base_url($this->session->userdata('gambar')); ?>">
        </div>
    </div>
    <div class="form-group text-left">
        <button type="submit" class="btn btn-default btn-success"><i class="glyphicon glyphicon-save"></i> Save</button>
    </div>
</form>
<script>
    function confirm() {
        var a, b;
        a = $('input[name=newpwd]').val();
        b = $('input[name=cnfpwd]').val();
        if (b !== a) {
            $('#cnfpwd').delay(10).show('slow');
            $('#cnfpwd').delay(3000).hide('slow');
            $('input[name=cnfpwd]').val('');
        }
    }
</script>