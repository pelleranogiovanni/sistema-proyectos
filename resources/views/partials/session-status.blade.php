@if(session('status'))

    <div class="alert alert-success">
        <button type="button" class="close" data-dismiss="alert" aria-label="Cerrar"> <span aria-hidden="true"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">×</font></font></span> </button>
        <h3 class="text-success"><i class="fa fa-check-circle"></i><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> Éxito</font></font></h3><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">{{ session('status') }} </font>
    </div>

@endif
