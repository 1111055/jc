@extends('backend.app')

@section('content')

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

              <!-- Content Wrapper. Contains page content -->
              <div class="content-wrapper">
                <!-- Content Header (Page header) -->
                <section class="content-header">
                  <h1>
                  Prazos Transportes
                  </h1>
                  <ol class="breadcrumb">
                    <li><a href="{{route('dash')}}"><i class="fa fa-dashboard"></i> Home</a></li>
                    <li class="active"><a href="{{route('social')}}"><i class="fa fa-facebook-square"></i> Prazos</a></li>
                  </ol>
                </section>

                <!-- Main content -->
                <section class="content container-fluid">             
            <!-- /.row -->
                  <div class="row">
                      <div class="col-xs-12">
                        <div class="box">
                          <div class="box-header">
                            <h3 class="box-title">Edit Prazo Transporte</h3>

                          </div>
                          <!-- /.box-header -->
                         <div class="panel panel-default">
                            <div class="panel-body">
                            <!-- Horizontal Form -->
                            <!-- Horizontal Form -->
                            <div class="box box-info">
                                     {!! Form::model($prazos, [
                                          'method' => 'PUT',
                                          'route' => ['prazo.update', $prazos->id],
                                          'class' => 'form-horizontal'
                                     ]) !!}
                                    <div class="box-body">
                                      <div class="form-group">
                                        {!! Form::label('* Titulo:',null, ['class' => 'col-sm-2 control-label']) !!}
                                        <div class="col-sm-8">
                                           {!! Form::text('titulo',$prazos->titulo,['class' => 'form-control']) !!}
                                        </div>
                                        
                                      </div>
                                      <div class="form-group">
                                           {!! Form::label('Descrição:',null, ['class' => 'col-sm-2 control-label']) !!}
                                        <div class="col-sm-8">
                                           {!! Form::textarea('descricao',$prazos->descricao,['class' => 'form-control']) !!}
                                        </div>
                                      </div>
                                       <div class="form-group">
                                          {!! Form::label('Dias:',null, ['class' => 'col-sm-2 control-label']) !!}
                                        <div class="col-sm-8">
                                           {!! Form::text('dias',$prazos->dias,['class' => 'form-control']) !!}
                                        </div>
                                      </div>
                                      <div class="form-group">
                                          {!! Form::label('Ordem:',null, ['class' => 'col-sm-2 control-label']) !!}
                                        <div class="col-sm-8">
                                           {!! Form::text('ordem',$prazos->ordem,['class' => 'form-control']) !!}
                                        </div>
                                      </div>
                                    </div>
                                    <div class="box-footer">
                                        {!! Form::submit('Guardar',['class' => 'btn btn-info pull-right']) !!}
                                    </div>
                                  {!! Form::close() !!}
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