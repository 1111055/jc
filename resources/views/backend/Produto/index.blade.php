@extends('backend.app')

@section('content')


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
                  Categoria
                  </h1>
                  <ol class="breadcrumb">
                    <li><a href="{{route('dash')}}"><i class="fa fa-dashboard"></i> Home</a></li>
                    <li class="active"><a href="{{route('size')}}"><i class="fa fa-circle-o"></i> Categoria</a></li>
                  </ol>
                </section>

                <!-- Main content -->
                <section class="content container-fluid">             
            <!-- /.row -->
                  <div class="row">
                    <div class="col-xs-12">
                      <div class="box">
                        <div class="box-header">

                          <!-- /.adicionar um novo -->
                         <div class="panel panel-default">
                            <div class="panel-body">
                            <!-- Horizontal Form -->
                              <div class="col-xs-12">
                                <div class="box box-info">
                                  {!! Form::open(['url' => 'produto','class' => 'form-horizontal']) !!}
                                        <div class="box-body">
                                          <div class="form-group">
                                            {!! Form::label('* Titulo:',null, ['class' => 'col-sm-2 control-label']) !!}
                                            <div class="col-sm-4">
                                               {!! Form::text('titulo',null,['class' => 'form-control']) !!}
                                            </div>
                                              {!! Form::label('Ordem:',null, ['class' => 'col-sm-2 control-label']) !!}
                                            <div class="col-sm-4">
                                               {!! Form::text('ordem',null,['class' => 'form-control']) !!}
                                            </div>
                                          </div>
                                        </div>
                                        <div class="box-footer">
                                            {!! Form::submit('Guardar',['class' => 'btn btn-info pull-right']) !!}
                                        </div>
                                {!! Form::close() !!}
                                  </div>
                                </div>
                              </div>
                          <!-- /.box-body -->
                        </div>
                        <!-- /.box -->
                          <div class="box-tools">
                            <div class="input-group input-group-sm" style="width: 150px;">
                              <input type="text" name="table_search" class="form-control pull-right" placeholder="Search">

                              <div class="input-group-btn">
                                <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                              </div>
                            </div>
                          </div>
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body table-responsive no-padding">
                          <table class="table table-hover">
                            <tr>
                              <th class="col-xs-1">#</th>
                              <th>Titulo</th>
                              <th>Subtitulo</th>
                              <th>Ordem</th>
                              <th class="text-center">Active</th>
                              <th>#</th>
                            </tr>
                            @foreach($produto as $item)
                              <tr>
                                  <td class="col-xs-1"><img src="{{ $item->path }}" class="img-thumbnail"></td>
                                  <td>{{ $item->titulo }}</td>
                                  <td>{{ $item->subtitulo }}</td>
                                  <td>{{ $item->ordem }}</td>
                                  @if ($item->activo === 1)
                                      <td class="text-center"><i class="fa fa-check-circle"></i></td>
                                  @else                       
                                  <td class="text-center"><i class="fa fa-times-circle"></i></td>
                                  @endif   
                                  <td><a href="{{route('produto.edit',$item->id)}}" class="btn btn-warning btn-xs"><i class="fa fa-edit"></i></a> 

                                      {{ Form::open(['route' => ['produto.destroy', $item->id], 'method' => 'delete']) }}
                                         <button type="submit" class="btn btn-danger btn-xs"><i class="fa fa-trash"></i></button>
                                      {{ Form::close() }}

                                  </td>
                              </tr>
                             @endforeach
                          </table>
                        </div>
                        <!-- /.box-body -->
                      </div>
                      <!-- /.box -->
                    </div>
                  </div>

                </section>
                <!-- /.content -->
              </div>
              <!-- /.content-wrapper -->

@stop