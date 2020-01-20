$ (document).ready (function () {
  $ ('#valor').mask ('#.##0,00', {reverse: true});

  $ ('#form-service').submit (function () {
    $ ('#valor').unmask ();
  });

  $ ('#example').DataTable ({
    paging: false,
    searching: false,
    columnDefs: [
      {
        targets: [1],
        visible: true,
        searchable: false,
        render: function (data, type, row) {
          var v = data.replace (/\D/g, '');
          v = (v / 100).toFixed (2) + '';
          v = v.replace ('.', ',');
          v = v.replace (/(\d)(\d{3})(\d{3}),/g, '$1.$2.$3,');
          v = v.replace (/(\d)(\d{3}),/g, '$1.$2,');
          data = v;

          return data;
        },
      },
    ],
    language: {
      sEmptyTable: 'Nenhum registro encontrado',
      sInfo: 'Mostrando de _START_ até _END_ de _TOTAL_ registros',
      sInfoEmpty: 'Mostrando 0 até 0 de 0 registros',
      sInfoFiltered: '(Filtrados de _MAX_ registros)',
      sInfoPostFix: '',
      sInfoThousands: '.',
      sLengthMenu: '_MENU_ resultados por página',
      sLoadingRecords: 'Carregando...',
      sProcessing: 'Processando...',
      sZeroRecords: 'Nenhum registro encontrado',
      sSearch: 'Pesquisar',
      oPaginate: {
        sNext: 'Próximo',
        sPrevious: 'Anterior',
        sFirst: 'Primeiro',
        sLast: 'Último',
      },
      oAria: {
        sSortAscending: ': Ordenar colunas de forma ascendente',
        sSortDescending: ': Ordenar colunas de forma descendente',
      },
      select: {
        rows: {
          _: 'Selecionado %d linhas',
          '0': 'Nenhuma linha selecionada',
          '1': 'Selecionado 1 linha',
        },
      },
    },
  });
});
