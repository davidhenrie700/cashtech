<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
    <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript"
        src="https://cdn.datatables.net/v/bs4/jszip-2.5.0/dt-1.10.20/af-2.3.4/b-1.6.1/b-flash-1.6.1/b-html5-1.6.1/r-2.2.3/datatables.min.js">
    </script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Alata&display=swap" rel="stylesheet">

    <title>Cash-Tech</title>

    <link rel="stylesheet" href="{{ url(mix('css/style.css')) }}">

</head>

<body>
    
    <div class="sidenav">
        <a href="#home" class="pt-0"><img src="https://s3.sanar.online/images/layout/logo-editora-sanar.png"></a>
        <hr>
        <a href="#home"><i class="fa fa-fw fa-home"></i> Home</a>
        <button class="dropdown-btn"><i class="fa fa-pencil-square-o"></i> Cadastrar
            <i class="fa fa-caret-down"></i>
        </button>
        <div class="dropdown-container">
            <a href="{{ route('provider.show') }}"><i class="fa fa-user-plus"></i> Profissionais</a>
            <a href="{{ route('service.index') }}"><i class="fa fa-coffee"></i> Serviços</a>
            <a href="{{ route('user.index') }}"><i class="fa fa-id-card"></i> Usuários</a>
        </div>
    </div>

    <div class="container-fluid gt">
        <div class="main">

            <section>
                <div class="title">
                    <h3>@yield('title')</h3>
                    <hr>
                </div>
                @yield('content')
            </section>

        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.js"></script>
    <script src="{{ url(mix('js/script.js')) }}"></script>
</body>

</html>