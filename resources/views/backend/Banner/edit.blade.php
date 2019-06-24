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
    
img {
    max-width: 100%;
  }

  #fileDisplayArea {
    margin-top: 2em;
    width: 100%;
    overflow-x: auto;
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
                   Editar Banner
                  </h1>
                  <ol class="breadcrumb">
                    <li><a href="{{route('dash')}}"><i class="fa fa-dashboard"></i> Home</a></li>
                    <li><a href="{{route('pagina')}}"><i class="fa fa-align-justify"></i> Banner</a></li>
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
                                      <button type="button" id="following" class="btn btn-default" href="#tab3" data-toggle="tab"><span class="fa fa-image" aria-hidden="true"></span>
                                          <div class="hidden-xs">Imagens</div>
                                      </button>
                                  </div>
                              </div>

                             <div class="well">
                                <div class="tab-content">
                                  <div class="tab-pane fade in active" id="tab1">
                                      <div class="box box-info">
                                             {!! Form::model($banner, [
                                                  'method' => 'PUT',
                                                  'route' => ['banner.update', $banner->id],
                                                  'class' => 'form-horizontal'
                                             ]) !!}
                                            <div class="box-body">
                                              <div class="form-group">
                                                {!! Form::label('* Titulo:',null, ['class' => 'col-sm-2 control-label']) !!}
                                                <div class="col-sm-8">
                                                   {!! Form::text('titulo',$banner->titulo,['class' => 'form-control']) !!}
                                                </div>
                                                
                                              </div>
                                              <div class="form-group">
                                                   {!! Form::label('Descricao:',null, ['class' => 'col-sm-2 control-label']) !!}
                                                <div class="col-sm-8">
                                                   {!! Form::textarea('descricao',$banner->descricao,['class' => 'form-control', 'id' => 'descricao']) !!}
                                                </div>
                                              </div>
                                              <div class="form-group">
                                                   {!! Form::label('Width:',null, ['class' => 'col-sm-2 control-label']) !!}
                                                <div class="col-sm-8">
                                                   {!! Form::text('width',$banner->width,['class' => 'form-control']) !!}
                                                </div>
                                              </div>
                                              <div class="form-group">
                                                  {!! Form::label('Height:',null, ['class' => 'col-sm-2 control-label']) !!}
                                                <div class="col-sm-8">
                                                   {!! Form::text('height',$banner->height,['class' => 'form-control']) !!}
                                                </div>
                                              </div>
                                               <div class="form-group">
                                                  {!! Form::label('Ordem:',null, ['class' => 'col-sm-2 control-label']) !!}
                                                <div class="col-sm-8">
                                                   {!! Form::text('ordem',$banner->ordem,['class' => 'form-control']) !!}
                                                </div>
                                              </div>
                                              <div class="form-group">
                                                  {!! Form::label('Activo:',null, ['class' => 'col-sm-2 control-label']) !!}
                                                <div class="col-sm-8">
                                                   {!! Form::checkbox('activo',1,$banner->activo) !!}
                                                </div>
                                              </div>
                                            </div>
                                            <div class="box-footer">
                                                {!! Form::submit('Guardar',['class' => 'btn btn-info pull-right']) !!}
                                            </div>
                                          {!! Form::close() !!}
                                      </div>
                                  </div>
                                  <div class="tab-pane fade in" id="tab3">
                                     <div class="panel-body">
                                        <div class="box box-info">
                                          {!! Form::open(['url' => 'bannerlines','class' => 'form-horizontal',  'files' => true]) !!}
                                                <div class="box-body">
                                                  <div class="form-group">
                                                    {!! Form::hidden('idbannner',$banner->id) !!}
                                                    {!! Form::label('* Titulo:',null, ['class' => 'col-sm-1 control-label']) !!}
                                                    <div class="col-sm-3">
                                                       {!! Form::text('titulo',null,['class' => 'form-control']) !!}
                                                    </div>
                                                       {!! Form::label('Ordem:',null, ['class' => 'col-sm-1 control-label']) !!}
                                                    <div class="col-sm-2">
                                                       {!! Form::text('ordem',null,['class' => 'form-control']) !!}
                                                    </div>
                                                    <div class="form-group col-sm-4">
                                                    <label>Imagem ({{$banner->width}}x{{$banner->height}})</label>
                                                     <input type="file" name="banerimg" id="exampleInputImage" class="image"> 
                                                    </div>
                                                    <div class="col-xs-12">
                                                       <p><div id="fileDisplayArea"></div></p>
                                                   </div> 
                                                  </div>

                                                </div>
                                                <div class="box-footer">
                                                    {!! Form::submit('Guardar',['class' => 'btn btn-info pull-right']) !!}
                                                </div>
                                              {!! Form::close() !!}
                                          </div>
                                        <div class="box-body table-responsive no-padding">
                                              <table class="table table-hover">
                                                <tr>
                                                  <th>#</th>
                                                  <th class="col-xs-2">Imagem</th>
                                                  <th>Titulo</th>
                                                  <th>Descricao</th>
                                                  <th>Ordem</th>
                                                  <th>Link</th>
                                                  <th class="text-center">Active</th>
                                                </tr>
                                                
                                                  @foreach($bannerLine as $item)
                                                  <tr>
                                                    <td>#</td>
                                                    <td class="col-xs-2"><img src="{{ $item->path }}" class="img-thumbnail"></td>
                                                    <td>{{ $item->titulo }}</td>
                                                    <td>{{ $item->descricao }}</td>
                                                    <td>{{ $item->ordem }}</td>
                                                    <td>{{ $item->link }}</td>
                                                    @if ($item->activo === 1)
                                                        <td class="text-center"><i class="fa fa-check-circle"></i></td>
                                                    @else                       
                                                    <td class="text-center"><i class="fa fa-times-circle"></i></td>
                                                    @endif   
                                                    <td><a href="{{route('bannerlines.edit',$item->id)}}" class="btn btn-warning btn-xs"><i class="fa fa-edit"></i></a> 

                                                    {{ Form::open(['route' => ['bannerlines.destroy', $item->id], 'method' => 'delete']) }}
                                                    <button type="submit" class="btn btn-danger btn-xs"><i class="fa fa-trash"></i></button>
                                                    {{ Form::close() }}

                                                    </td>
                                                    </tr>
                                                  @endforeach
                                                
                                              </table>
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
