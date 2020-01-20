<div id="DeleteModal" class="modal fade " role="dialog">
  <div class="modal-dialog ">
    <!-- Modal content-->
    <form action="" id="deleteForm" method="post">
      <div class="modal-content">
        <div class="modal-header bg-danger">
          <h5 class="modal-title"><i class="fa fa-wu fa-warning"></i> CONFIRMAÇÃO</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          {{ csrf_field() }} 
          {{ method_field('DELETE') }}
          <p class="">Tem certeza que deseja excluir esse serviço?</p>
        </div>
        <div class="modal-footer">

          <div>
            <button type="button" class="btn btn-primary" data-dismiss="modal">Cancelar</button>
            <button type="submit" name="" class="btn btn-primary" data-dismiss="modal" onclick="formSubmit()">Sim</button>
          </div>
        </div>
      </div>
    </form>
  </div>
</div>

<script type="text/javascript">
  function deleteData(id)
  {
      var id = id;
      var url = '{{ route("service.destroy", ":id") }}';
      url = url.replace(':id', id);
      $("#deleteForm").attr('action', url);
  }

  function formSubmit()
  {
      $("#deleteForm").submit();
  }
</script>