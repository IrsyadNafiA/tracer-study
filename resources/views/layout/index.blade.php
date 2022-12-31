<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Kuisioner</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">

    <!--data sertifikat-->
    <script>
      function sertif(x){
        if (x == 0) document.getElementById("sertifikasi").style.display = "block";
        else document.getElementById("sertifikasi").style.display = "none";
      }
    </script>

    <!--data kerja-->
    <script>
      function kerja(y){
        if (y == 0) document.getElementById("datakerja").style.display = "block";
        else document.getElementById("datakerja").style.display = "none";
      }
    </script>

    <!--data wirausaha-->
    <script>
      function wirausaha(z){
        if (z == 0) document.getElementById("datawirausaha").style.display = "block";
        else document.getElementById("datawirausaha").style.display = "none";
      }
    </script>

    <!--data prestasi-->
    <script>
      function prestasi(i){
        if (i == 0) document.getElementById("dataprestasi").style.display = "block";
        else document.getElementById("dataprestasi").style.display = "none";
      }
    </script>

</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
      <a class="navbar-brand">Kuisioner Awal Lulusan </a>
     
      </div>
    </div>
  </nav>
      @yield('content')
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>    
</body>
</html>