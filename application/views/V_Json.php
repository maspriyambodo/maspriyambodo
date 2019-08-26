<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Try Crud JSON</title>
    </head>
    <body>
        <label>Nama : </label>
        <input type="text" name="nama">
        <label>Email : </label>
        <input type="email" name="mail">
        <label>Telpon : </label>
        <input type="tel" name="telp">
        <button onclick="simpan()" type="button" name="simpanbtn">Simpan</button>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script>
            function simpan() {
                var a, b, c;
                a = $("input[name=nama]").val();
                b = $("input[name=mail]").val();
                c = $("input[name=telp]").val();
                $.ajax({
                    url: "<?= base_url('Json/SimpanJson'); ?>",
                    type: 'POST',
                    data: {},
                    success: function () {
                        alert("data berhasil disimpan");
                    },
                    error: function () {
                        alert("data gagal disimpan");
                    }
                });
            }
        </script>
    </body>
</html>
