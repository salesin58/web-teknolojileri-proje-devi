<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@300&display=swap" rel="stylesheet">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
    <link rel="stylesheet" href="cssdosyaları/style.css">
    <title>Git-Login · Ahmet Hakan Arı</title>
</head>

<body>
    <!-- menu başlangıç-->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.html">Ahmet Hakan Arı</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
                aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link"  href="index.html">Hakkımızda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="özgeçmiş.html">Özgeçmiş</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="sivas.html">Şehrim</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="mirasımız.html">Mirasımız</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="ilgialanlarım.html">İlgi alanlarım</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="iletişim.html">İletişim</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="login.php">Login</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <main class="p-2">
        <div class="container" >
        <?php 

include("kullanicilar.php");


if (($_POST["email"] == $user) and ($_POST["password"] == $pass))
{
   $_SESSION["login"] = "true";
   $_SESSION["user"] = $user;
   $_SESSION["pass"] = $pass;

   echo("SİTEYE GİRİŞ YAPTINIZ HOŞGELDİNİZ !!");

}

else 
{
        echo "Kullancı Adı veya Şifre Yanlış.<br>";
        echo "!!!TEKRAR DENEYİN!!!";
        header("Refresh: 1; url=login.php");
}

?>
        
        </div>
    </main>




    <footer class="text-center text-white " style="background-color: #25693c;">
        <!-- Grid container -->
        <div class="container p-4">
            <!-- Grid container -->

            <!-- Copyright -->
            <div class="text-center p-3" style="background-color: #25693c;">
                Web Teknolojileri Ödevi ©:
                <a class="text-white" href="index.html">Ahmet Hakan Arı</a>
            </div>
        </div>
        <!-- Copyright -->
    </footer>
    <!-- Footer -->
    <!-- hakkımzıda bitiş-->




    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8" crossorigin="anonymous">
    </script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.min.js" integrity="sha384-lpyLfhYuitXl2zRZ5Bn2fqnhNAKOAaM/0Kr9laMspuaMiZfGmfwRNFh8HlMy49eQ" crossorigin="anonymous"></script>
    -->
</body>

</html>