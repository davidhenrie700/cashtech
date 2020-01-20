$(document).ready (function () {
  $ ('#valor_bruto').mask ('#.##0,00', {reverse: true});
  $ ('#valor_liquido').mask ('#.##0,00', {reverse: true});
  $ ('#cep').mask ('00000-000');
  $ ('#telefone').mask ('(00) 00000-0000');
  $ ('#cpf_cnpj').mask ('00.000.000/0000-00', {reverse: true});

  $ ('#form-provider').submit (function () {
    $ ('#valor_liquido').unmask ().val ();
    $ ('#valor_bruto').unmask ().val ();
  });

  $ ('#profissionais').DataTable ({
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

  function limpa_formulário_cep () {
    // Limpa valores do formulário de cep.
    $ ('#rua').val ('');
    $ ('#bairro').val ('');
    $ ('#cidade').val ('');
    $ ('#uf').val ('');
  }

  //Quando o campo cep perde o foco.
  $ ('#cep').blur (function () {
    //Nova variável "cep" somente com dígitos.
    var cep = $ (this).val ().replace (/\D/g, '');

    //Verifica se campo cep possui valor informado.
    if (cep != '') {
      //Expressão regular para validar o CEP.
      var validacep = /^[0-9]{8}$/;

      //Valida o formato do CEP.
      if (validacep.test (cep)) {
        //Preenche os campos com "..." enquanto consulta webservice.
        $ ('#rua').val ('...');
        $ ('#bairro').val ('...');
        $ ('#cidade').val ('...');
        $ ('#uf').val ('...');

        //Consulta o webservice viacep.com.br/
        $.getJSON (
          'https://viacep.com.br/ws/' + cep + '/json/?callback=?',
          function (dados) {
            if (!('erro' in dados)) {
              //Atualiza os campos com os valores da consulta.
              $ ('#rua').val (dados.logradouro);
              $ ('#bairro').val (dados.bairro);
              $ ('#cidade').val (dados.localidade);
              $ ('#uf').val (dados.uf);
            } else {
              //end if.
              //CEP pesquisado não foi encontrado.
              limpa_formulário_cep ();
              alert ('CEP não encontrado.');
            }
          }
        );
      } else {
        //end if.
        //cep é inválido.
        limpa_formulário_cep ();
        alert ('Formato de CEP inválido.');
      }
    } else {
      //end if.
      //cep sem valor, limpa formulário.
      limpa_formulário_cep ();
    }
  });
});
