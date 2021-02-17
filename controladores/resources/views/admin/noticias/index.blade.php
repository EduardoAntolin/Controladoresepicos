@extends("layouts.admin")
@section('contenido_principal')
    
    
    

    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1>Noticias</h1>
            </div>
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Noticias</a></li>
                <li class="breadcrumb-item active">Lista de noticias</li>
              </ol>
            </div>
          </div>
        </div><!-- /.container-fluid -->
      </section>
  
      <!-- Main content -->
      <section class="content">
  
        <!-- Default box -->
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">Lista de noticias</h3>
  
            <div class="card-tools">
              <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                <i class="fas fa-minus"></i></button>
              <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
                <i class="fas fa-times"></i></button>
            </div>
          </div>
          <div class="card-body">
            @if(Session::has("exito"))
            <p style="color: #15b915">{{ Session::get("exito") }}</p>
            @endif
            @if(Session::has("error"))
                <p style="color: #bb1717">{{ Session::get("error") }}</p>
            @endif
            <a href="{{ route("admin.noticias.create") }}"><button class="btn btn-primary">Crear nueva noticia</button></a>
            <table class="table table-bordered">
                <thead>
                    <th>Titulo</th>
                    <th>Acciones</th>
                </thead>
                <tbody>
                    @foreach($noticias as $noticia)
                    <tr>
                        <td>{{$noticia->titulo}}</td> 
                        <td>
                            <a href="{{ route("admin.noticias.show", $noticia->id) }}"><button class="btn btn-xs btn-primary">ver</button></a>
                            <a href="{{ route("admin.noticias.edit", $noticia->id) }}"><button class="btn btn-xs btn-primary">Editar</button></a>
                            <a href="{{ route("admin.noticias.confirmdelete", $noticia->id) }}"><button class="btn btn-xs btn-danger">Eliminar</button></a>
                        </td> 
                    </tr>
                    @endforeach
                </tbody>
            </table>
          </div>
          <!-- /.card-body -->
          <div class="card-footer">
            Pie de la tabla de lista de noticias
          </div>
          <!-- /.card-footer-->
        </div>
        <!-- /.card -->
  
      </section>
      <!-- /.content -->
@endsection