@if ($errors->any())
<div class="alert text-center alert-danger"
    style="text-transform: uppercase; left:30%; display: block; position: fixed; top: 15%; width: 50%; z-index: 9999">
        <p style="font-weight: bold; padding:0%; padding-bottom: 5px; margin:0%; font-size:22px;">Ocorreu um erro!!</p>
    <ul style="list-style-type: none; padding:0%; margin:0%;">
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach

    </ul>

</div>

@endif

@if (session('message'))

<div class="alert text-center alert-success"
     style="text-transform: uppercase; left:30%;  display: block; position: fixed; top: 15%; width: 50%; z-index: 9999">
     <p style="font-weight: bold; padding:0%; padding-bottom: 5px; margin:0%; font-size:22px;">Sucesso!!</p>
    <p>{{ session('message') }}</p>
</div>

    
@endif

<script>
    setTimeout(function() {
        $('.alert').fadeOut('slow');
    },3000);

</script>