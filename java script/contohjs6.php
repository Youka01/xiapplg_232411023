<!--Fungsi dengan argumen-->
<html>
<head>
    <script type="text/javascript">
    function myfunction(txt)
    {
        alert(txt)
    }
    </script>
</head>
<body>
<form>
    <input type="button"
    onclick="myfunction('Good Morning!')"
    value="Selamat Pagi">
    <input type="button"
    onclick="myfunction('Good Evening!')"
    value="Selamat Malam">
</form>
<p>
ketika di tekan salah satu tombol maka fungsi akan di panggil dan pesan akan di
tampilkan
</p>
</body>
</html>