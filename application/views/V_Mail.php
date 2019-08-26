<link href="<?= base_url('assets/css/prettify.min.css'); ?>" rel="stylesheet" type="text/css"/>
<div class="content">
    <div class="row">
        <div class="col-md-4">
            <div class="form-group">
                <label class="text-uppercase">from</label>
                <input type="email" name="fromtxt" class="form-control" autocomplete="off">
            </div>
            <div class="form-group">
                <label class="text-uppercase">password email</label>
                <input type="password" name="passtxt" class="form-control" autocomplete="off">
            </div>
            <div class="form-group">
                <label class="text-uppercase">To</label>
                <input type="text" name="totxt" class="form-control" autocomplete="off"/>
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group">
                <label class="text-uppercase">cc</label>
                <input type="text" name="cctxt" class="form-control" autocomplete="off"/>    
            </div>
            <div class="form-group">
                <label class="text-uppercase">bcc</label>
                <input type="text" name="bcctxt" class="form-control" autocomplete="off"/>
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group">

            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-8">
            <div class="form-group">
                <label class="text-uppercase">Subject</label>
                <input type="text" name="subtxt" class="form-control" autocomplete="off"/>
            </div>
        </div>
        <div class="col-md-2">

        </div>
        <div class="col-md-2">

        </div>
    </div>
    <div class="form-group">
        <label class="text-uppercase">Message</label>
        <div class="btn-toolbar editor" data-role="editor-toolbar" data-target="#editor-one">
            <div class="btn-group">
                <a class="btn dropdown-toggle" data-toggle="dropdown" title="Font"><i class="fa fa-font"></i><b class="caret"></b></a>
                <ul class="dropdown-menu">
                </ul>
            </div>

            <div class="btn-group">
                <a class="btn dropdown-toggle" data-toggle="dropdown" title="Font Size"><i class="fa fa-text-height"></i>&nbsp;<b class="caret"></b></a>
                <ul class="dropdown-menu">
                    <li>
                        <a data-edit="fontSize 5">
                            <p style="font-size:17px">Huge</p>
                        </a>
                    </li>
                    <li>
                        <a data-edit="fontSize 3">
                            <p style="font-size:14px">Normal</p>
                        </a>
                    </li>
                    <li>
                        <a data-edit="fontSize 1">
                            <p style="font-size:11px">Small</p>
                        </a>
                    </li>
                </ul>
            </div>

            <div class="btn-group">
                <a class="btn" data-edit="bold" title="Bold (Ctrl/Cmd+B)"><i class="fa fa-bold"></i></a>
                <a class="btn" data-edit="italic" title="Italic (Ctrl/Cmd+I)"><i class="fa fa-italic"></i></a>
                <a class="btn" data-edit="strikethrough" title="Strikethrough"><i class="fa fa-strikethrough"></i></a>
                <a class="btn" data-edit="underline" title="Underline (Ctrl/Cmd+U)"><i class="fa fa-underline"></i></a>
            </div>

            <div class="btn-group">
                <a class="btn" data-edit="insertunorderedlist" title="Bullet list"><i class="fa fa-list-ul"></i></a>
                <a class="btn" data-edit="insertorderedlist" title="Number list"><i class="fa fa-list-ol"></i></a>
                <a class="btn" data-edit="outdent" title="Reduce indent (Shift+Tab)"><i class="fa fa-dedent"></i></a>
                <a class="btn" data-edit="indent" title="Indent (Tab)"><i class="fa fa-indent"></i></a>
            </div>

            <div class="btn-group">
                <a class="btn" data-edit="justifyleft" title="Align Left (Ctrl/Cmd+L)"><i class="fa fa-align-left"></i></a>
                <a class="btn" data-edit="justifycenter" title="Center (Ctrl/Cmd+E)"><i class="fa fa-align-center"></i></a>
                <a class="btn" data-edit="justifyright" title="Align Right (Ctrl/Cmd+R)"><i class="fa fa-align-right"></i></a>
                <a class="btn" data-edit="justifyfull" title="Justify (Ctrl/Cmd+J)"><i class="fa fa-align-justify"></i></a>
            </div>

            <div class="btn-group">
                <a class="btn dropdown-toggle" data-toggle="dropdown" title="Hyperlink"><i class="fa fa-link"></i></a>
                <div class="dropdown-menu input-append">
                    <input class="span2" placeholder="URL" data-edit="createLink" type="text">
                    <button class="btn" type="button">Add</button>
                </div>
                <a class="btn" data-edit="unlink" title="Remove Hyperlink"><i class="fa fa-cut"></i></a>
            </div>

            <div class="btn-group">
                <a class="btn" title="Insert picture (or just drag &amp; drop)" id="pictureBtn"><i class="fa fa-picture-o"></i></a>
                <input data-role="magic-overlay" data-target="#pictureBtn" data-edit="insertImage" type="file">
            </div>

            <div class="btn-group">
                <a class="btn" data-edit="undo" title="Undo (Ctrl/Cmd+Z)"><i class="fa fa-undo"></i></a>
                <a class="btn" data-edit="redo" title="Redo (Ctrl/Cmd+Y)"><i class="fa fa-repeat"></i></a>
            </div>
        </div>
        <div id="editor-one" class="editor-wrapper placeholderText" contenteditable="true"></div>
    </div>

    <div class="btn-group" role="group">
        <button type="reset" class="btn btn-danger">Batal</button>
        <button onclick="kirim()" type="button" name="svbtn" class="btn btn-success">Kirim</button>
    </div>
</div>
<script>
    function kirim() {
        document.body.style.cursor = "wait";
        $('button[name=svbtn]').prop('disabled', true);
        var a, b, c, d, e, f, g;
        a = $('input[name=fromtxt]').val();
        b = $('input[name=cctxt]').val();
        c = $('input[name=subtxt]').val();
        d = $('input[name=totxt]').val();
        e = $('input[name=bcctxt]').val();
        f = document.getElementById('editor-one').innerHTML;
        g = $('input[name=bcctxt]').val();
        $.ajax({
            url: "<?= base_url('Mail/Sending'); ?>",
            type: 'POST',
            dataType: 'JSON',
            data: {"from": a, "cctxt": b, "subtxt": c, "totxt": d, "bcctxt": e, "msgtxt": f, "smtp_pass": g},
            success: function () {
                alert('Pesan berhasil terkirim');
                window.location.href = "<?= base_url('Mail/Sending'); ?>";
            },
            error: function (data) {
                alert(data.status + " " + data.msg);
                document.body.style.cursor = "default";
                $('button[name=svbtn]').prop('disabled', false);
            }
        });
    }
</script>