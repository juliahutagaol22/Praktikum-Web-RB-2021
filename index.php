<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Belanja</title>
</head>
<body>
    <section>
    </section>
    <section>
        <div>
            <h1>Daftar Belanja</h1>
            <form action="belanja.php" method="POST" id="belanja" name="belanja" enctype="multipart/form">
                <label for="">1.Mangga Rp 15.000/Kg </label><br>
                <p>Mau berapa kilo?</p><input type="number" id="mangga" onchange="Harga()" name="mangga"> <br><br>
                <label for="">2.Jambu Rp 13.000/Kg  </label><br>
                <p>Mau berapa kilo?</p><input type="number" id="jambu" onchange="Harga()" name="jambu"> <br><br>
                <label for="">3.Salak Rp 10.000/Kg  </label><br>
                <p>Mau berapa kilo?</p><input type="number" id="salak" onchange="Harga()" name="salak"> <br><br>
                <label for="">Total Belanjaan : </label>
                <input type="text" id="total" name="total" readonly> <br>
                <button type="submit" name="">Submit</button>
            </form>
        </div>
    </section>
</body>
<script>

    function Harga(){
        var total = document.getElementById("total");
        var mangga = document.getElementById("mangga").value*15000;
        var jambu = document.getElementById("jambu").value*13000;
        var salak = document.getElementById("salak").value*10000;
        console.log(mangga + jambu + salak);
        var hasil = mangga + jambu + salak;
        total.value = hasil;
    }
    
</script>
</html>