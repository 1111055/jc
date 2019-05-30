@extends('backend.app')

@section('content')


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
                          <div class="box-header">
                            <h3 class="box-title">Editar Página</h3>

                          </div>
                          <!-- /.box-header -->
                         <div class="panel panel-default">
                            <div class="panel-body">
                               <div class="col-xs-10">
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
                                                   {!! Form::text('descricao1',$pagina->descricao1,['class' => 'form-control']) !!}
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
                                                   {!! Form::text('descricao2',$pagina->descricao2,['class' => 'form-control']) !!}
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
                                <div class="col-xs-2">

                                      @if(session('sucess'))
                                          <div style="background-color:green;color:#FFF;padding:15px;width: 40%;float:right;">{{session('sucess')}}</div>
                                      @endif
                                       @if ($errors->any())
                                            <div style="background-color:green;color:#FFF;padding:15px;width: 40%;float: right;">
                                                <ul>
                                                    @foreach ($errors->all() as $error)
                                                        <li>{{ $error }}</li>
                                                    @endforeach
                                                </ul>
                                            </div>
                                        @endif
                              </div>
                            </div>
                          <!-- /.box-body -->
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
