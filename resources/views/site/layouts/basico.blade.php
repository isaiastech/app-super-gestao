<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title>Super Gestão - Sobre Nós</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="{{ asset('css/estilo_basico.css') }}">
    </head>
    <body>
        @include('site.layouts._partials.topo')
        @yield('conteudo')
        <script>
          document.getElementById('telefone').addEventListener('input', function(e) {
              let value = e.target.value.replace(/\D/g, '');

              if (value.length > 11) value = value.slice(0, 11);

              if (value.length > 10) {
                  value = value.replace(/^(\d{2})(\d{5})(\d{4}).*/, "($1) $2-$3");
              } else if (value.length > 6) {
                  value = value.replace(/^(\d{2})(\d{4})(\d{0,4}).*/, "($1) $2-$3");
              } else if (value.length > 2) {
                  value = value.replace(/^(\d{2})(\d{0,5})/, "($1) $2");
              }

              e.target.value = value;
          });
        </script>
    </body>
</html>

