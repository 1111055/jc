@extends('backend.app')

@section('content')


<style>
/* USER PROFILE PAGE */
 .card {
    margin-top: 20px;
    padding: 30px;
    background-color: rgba(214, 224, 226, 0.2);
    -webkit-border-top-left-radius:5px;
    -moz-border-top-left-radius:5px;
    border-top-left-radius:5px;
    -webkit-border-top-right-radius:5px;
    -moz-border-top-right-radius:5px;
    border-top-right-radius:5px;
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box;
}
.card.hovercard {
    position: relative;
    padding-top: 0;
    overflow: hidden;
    text-align: center;
    background-color: #fff;
    background-color: rgba(255, 255, 255, 1);
}
.card.hovercard .card-background {
    height: 130px;
}
.card-background img {
    -webkit-filter: blur(25px);
    -moz-filter: blur(25px);
    -o-filter: blur(25px);
    -ms-filter: blur(25px);
    filter: blur(25px);
    margin-left: -100px;
    margin-top: -200px;
    min-width: 130%;
}
.card.hovercard .useravatar {
    position: absolute;
    top: 15px;
    left: 0;
    right: 0;
}
.card.hovercard .useravatar img {
    width: 100px;
    height: 100px;
    max-width: 100px;
    max-height: 100px;
    -webkit-border-radius: 50%;
    -moz-border-radius: 50%;
    border-radius: 50%;
    border: 5px solid rgba(255, 255, 255, 0.5);
}
.card.hovercard .card-info {
    position: absolute;
    bottom: 14px;
    left: 0;
    right: 0;
}
.card.hovercard .card-info .card-title {
    padding:0 5px;
    font-size: 20px;
    line-height: 1;
    color: #262626;
    background-color: rgba(255, 255, 255, 0.1);
    -webkit-border-radius: 4px;
    -moz-border-radius: 4px;
    border-radius: 4px;
}
.card.hovercard .card-info {
    overflow: hidden;
    font-size: 12px;
    line-height: 20px;
    color: #737373;
    text-overflow: ellipsis;
}
.card.hovercard .bottom {
    padding: 0 20px;
    margin-bottom: 17px;
}
.btn-pref .btn {
    -webkit-border-radius:0 !important;
}


</style>
 @if(session('sucess'))
                                     <!--Alerta de sucess-->
    <div class="alert alert-success" id="showsucess" style="border-radius: 0; float: right; margin-top: 2%; position: fixed; right: 0; top: 0; width: 600px; z-index: 9999;">
      {{session('sucess')}}
  </div>
  @endif
   @if ($errors->any())
        <div style="border-radius: 0; float: right; margin-top: 2%; position: fixed; right: 0; top: 0; width: 600px; z-index: 9999;">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif



              <!-- Content Wrapper. Contains page content -->
              <div class="content-wrapper">
                <!-- Content Header (Page header) -->
                <section class="content-header">
                  <h1>
                   Editar Página
                  </h1>
                  <ol class="breadcrumb">
                    <li><a href="{{route('dash')}}"><i class="fa fa-dashboard"></i> Home</a></li>
                    <li><a href="{{route('pagina')}}"><i class="fa fa-align-justify"></i> Paginas</a></li>
                  </ol>
                </section>

                <!-- Main content -->
                <section class="content container-fluid">             
            <!-- /.row -->
                  <div class="row">
                      <div class="col-xs-12">
                        <div class="box">
                        
                          <div class="col-lg-12 col-sm-12">
                              <div class="btn-pref btn-group btn-group-justified btn-group-lg" role="group" aria-label="...">
                                  <div class="btn-group" role="group">
                                      <button type="button" id="stars" class="btn btn-warning" href="#tab1" data-toggle="tab"><span class="fa fa-edit" aria-hidden="true"></span>
                                          <div class="hidden-xs">Editar Página</div>
                                      </button>
                                  </div>
                                  <div class="btn-group" role="group">
                                      <button type="button" id="favorites" class="btn btn-default" href="#tab2" data-toggle="tab"><span class="fa fa-bullseye" aria-hidden="true"></span>
                                          <div class="hidden-xs">Listas Dados</div>
                                      </button>
                                  </div>
                                  <div class="btn-group" role="group">
                                      <button type="button" id="following" class="btn btn-default" href="#tab3" data-toggle="tab"><span class="fa fa-image" aria-hidden="true"></span>
                                          <div class="hidden-xs">Imagens</div>
                                      </button>
                                  </div>
                                  <div class="btn-group" role="group">
                                      <button type="button" id="following" class="btn btn-default" href="#tab4" data-toggle="tab"><span class="fa fa-plus-square" aria-hidden="true"></span>
                                          <div class="hidden-xs">Plugins</div>
                                      </button>
                                  </div>
                              </div>

                             <div class="well">
                                <div class="tab-content">
                                  <div class="tab-pane fade in active" id="tab1">
                                      <div class="box box-info">
                                             {!! Form::model($pagina, [
                                                  'method' => 'PUT',
                                                  'route' => ['pagina.update', $pagina->id],
                                                  'class' => 'form-horizontal'
                                             ]) !!}
                                            <div class="box-body">
                                              <div class="form-group">
                                                {!! Form::label('* Nome:',null, ['class' => 'col-sm-2 control-label']) !!}
                                                <div class="col-sm-8">
                                                   {!! Form::text('nome',$pagina->nome,['class' => 'form-control']) !!}
                                                </div>
                                                
                                              </div>
                                              <div class="form-group">
                                                   {!! Form::label('Titulo:',null, ['class' => 'col-sm-2 control-label']) !!}
                                                <div class="col-sm-8">
                                                   {!! Form::text('titulo',$pagina->titulo,['class' => 'form-control']) !!}
                                                </div>
                                              </div>
                                               <div class="form-group">
                                                  {!! Form::label('Subtitulo:',null, ['class' => 'col-sm-2 control-label']) !!}
                                                <div class="col-sm-8">
                                                   {!! Form::text('subtitulo',$pagina->subtitulo,['class' => 'form-control']) !!}
                                                </div>
                                              </div>
                                              <div class="form-group">
                                                  {!! Form::label('Descrição:',null, ['class' => 'col-sm-2 control-label']) !!}
                                                <div class="col-sm-8">
                                                   {!! Form::textarea('descricao',$pagina->descricao,['class' => 'form-control', 'id' => 'descricao']) !!}
                                                </div>
                                               </div>
                                               <div class="form-group">
                                                   {!! Form::label('Novo Titulo:',null, ['class' => 'col-sm-2 control-label']) !!}
                                                 <div class="col-sm-8">
                                                   {!! Form::text('titulo1',$pagina->titulo1,['class' => 'form-control']) !!}
                                                 </div>
                                              </div>
                                              <div class="form-group">
                                                   {!! Form::label('Nova Descrição:',null, ['class' => 'col-sm-2 control-label']) !!}
                                                 <div class="col-sm-8">
                                                   {!! Form::textarea('descricao1',$pagina->descricao1,['class' => 'form-control']) !!}
                                                 </div>
                                              </div>
                                              <div class="form-group">
                                                   {!! Form::label('Novo Titulo:',null, ['class' => 'col-sm-2 control-label']) !!}
                                                 <div class="col-sm-8">
                                                   {!! Form::text('titulo2',$pagina->titulo2,['class' => 'form-control']) !!}
                                                 </div>
                                               </div>
                                               <div class="form-group">
                                                   {!! Form::label('Nova Descrição:',null, ['class' => 'col-sm-2 control-label']) !!}
                                                 <div class="col-sm-8">
                                                   {!! Form::textarea('descricao2',$pagina->descricao2,['class' => 'form-control']) !!}
                                                 </div>
                                               </div>
                                              <div class="form-group">
                                                   {!! Form::label('Link:',null, ['class' => 'col-sm-2 control-label']) !!}
                                                 <div class="col-sm-8">
                                                   {!! Form::text('link',$pagina->link,['class' => 'form-control']) !!}
                                                 </div>
                                               </div>

                                              <div class="form-group">
                                                   {!! Form::label('Novo Link:',null, ['class' => 'col-sm-2 control-label']) !!}
                                                 <div class="col-sm-8">
                                                   {!! Form::text('link1',$pagina->link1,['class' => 'form-control']) !!}
                                                 </div>
                                               </div>
                                            </div>
                                            <div class="box-footer">
                                                {!! Form::submit('Guardar',['class' => 'btn btn-info pull-right']) !!}
                                            </div>
                                          {!! Form::close() !!}
                                      </div>
                                  </div>
                                  <div class="tab-pane fade in" id="tab2">
                                     <div class="panel-body">


                                              <div class="box box-info">
                                                {!! Form::open(['url' => 'desc','class' => 'form-horizontal']) !!}
                                                      <div class="box-body">
                                                           {!! Form::hidden('idpage',$pagina->id,['class' => 'form-control']) !!}
                                                        <div class="form-group">
                                                          {!! Form::label('Titulo:',null, ['class' => 'col-sm-2 control-label']) !!}
                                                          <div class="col-sm-2">
                                                             {!! Form::text('titulo',null,['class' => 'form-control']) !!}
                                                          </div>
                                                             {!! Form::label('Descricao:',null, ['class' => 'col-sm-2 control-label']) !!}
                                                          <div class="col-sm-2">
                                                             {!! Form::text('descricaodesc',null,['class' => 'form-control']) !!}
                                                          </div>
                                                             {!! Form::label('Ordem:',null, ['class' => 'col-sm-2 control-label']) !!}
                                                          <div class="col-sm-2">
                                                             {!! Form::text('ordem',null,['class' => 'form-control']) !!}
                                                          </div>

                                                        </div>

                                                      </div>
                                                      <div class="box-footer">
                                                          {!! Form::submit('Guardar',['class' => 'btn btn-info pull-right']) !!}
                                                      </div>
                                              {!! Form::close() !!}
                                                </div>
                                               @if(count($desc) > 0)
                                                 <div class="box">
                                                  <div class="box-body table-responsive no-padding">
                                                    <table class="table table-hover">
                                                      <tr>
                                                        <th>#</th>
                                                        <th>Titulo</th>
                                                        <th>Decrição</th>
                                                        <th>Ordem</th>
                                                        <th>Ativo</th>
                                                         <th>#</th>
                                                      </tr>
                                                      @foreach ($desc as $item)   
                                                        <tr>
                                                          <td>#</td>
                                                          <td>{{ $item->titulo }}</td>
                                                          <td>{{ $item->descricao }}</td>
                                                          <td>{{ $item->ordem }}</td>
                                                           @if ($item->activo === 1)
                                                                <td class="text-center"><i class="fa fa-check-circle"></i></td>
                                                           @else                       
                                                                <td class="text-center"><i class="fa fa-times-circle"></i></td>
                                                           @endif   
                                                           <td><a href="{{route('desc.edit',[$item->id,$pagina->id])}}" class="btn btn-warning btn-xs"><i class="fa fa-edit"></i></a>  

                                  
                                                       {{ Form::open(['route' => ['desc.destroy', $item->id,$pagina->id ], 'method' => 'delete']) }}
                                                           <button type="submit" class="btn btn-danger btn-xs"><i class="fa fa-trash"></i></button>
                                                        {{ Form::close() }}
                                
                                                          </td>
                                                        </tr>
                                                      @endforeach
                                                    </table>
                                                  </div>
                                                </div>
                                                @endif

                                      </div>
                                 </div>
                                  <div class="tab-pane fade in" id="tab3">
                                     <div class="box box-info">
                                      <div class="box-body">
                                      </div>
                                    </div>
                                  </div>
                                  <div class="tab-pane fade in" id="tab4">
                                     <div class="box box-info">
                                      <div class="box-body">
                                          <div class="row col-xs-12">
                                            <h3>Banners</h3>
                                                {!! Form::open(['url' => 'pagebanner','class' => 'form-horizontal']) !!}

                                                <div class="form-group">
                                                {!! Form::hidden('idpage',$pagina->id,null) !!}
                                                {!! Form::label('Banner Home Top:',null, ['class' => 'col-sm-2 control-label']) !!}
                                                  
                                                  <div class="col-sm-8">
                                                     {!! Form::select('idbanner', $banners,1,['class' => 'form-horizontal']) !!}
                                                  </div>
                                                </div>
                                                
                                                 <div class="form-group">
                                                    {!! Form::label('Banner Home Meio:',null, ['class' => 'col-sm-2 control-label']) !!}
                                                  <div class="col-sm-8">
                                                     {!! Form::select('bannermidle', $banners,11,['class' => 'form-horizontal']) !!}
                                                  </div>
                                                </div>
                                                 <div class="form-group">
                                                    {!! Form::label('Banner Home Fundo:',null, ['class' => 'col-sm-2 control-label']) !!}
                                                  <div class="col-sm-8">
                                                     {!! Form::select('bannerdown', $banners,21,['class' => 'form-horizontal']) !!}
                                                  </div>
                                                </div>

                                                 {!! Form::submit('Guardar',['class' => 'btn btn-info pull-right']) !!}
                                                {!! Form::close() !!}
                                          </div>
                                          <hr>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                         </div>
                        </div>
                        <!-- /.box -->
                      </div>
                     </div>
                  </div>

                </section>
                <!-- /.content -->
              </div>
              <!-- /.content-wrapper -->

@stop
