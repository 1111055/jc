@extends('backend.app')

@section('content')

              <div class="content-wrapper">
                <section class="content-header">
                  <h1>
                   Páginas
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
                          <h3 class="box-title">Páginas</h3>

                          <!-- /.adicionar um novo -->
                         <div class="panel panel-default">
                            <div class="panel-body">
                            <!-- Horizontal Form -->
                              <div class="col-xs-8">
                                <div class="box box-info">
                                  {!! Form::open(['url' => 'pagina','class' => 'form-horizontal']) !!}
                                        <div class="box-body">
                                         <div class="form-group">
                                                 {!! Form::label('* Nome ') !!}
                                                 {!! Form::text('nome',null,['class' => 'form-control']) !!}
                                              </div>
                                              <div class="form-group">
                                                {!! Form::label('Titulo:')!!}
                                                {!! Form::text('titulo',null,['class' => 'form-control']) !!}
                                              </div>

                                        </div>
                                        <div class="box-footer">
                                            {!! Form::submit('Guardar',['class' => 'btn btn-info pull-right']) !!}
                                        </div>
                                      {!! Form::close() !!}
                                  </div>
                                </div>
                                <div class="col-sm-4">

                                       @if(session('sucess'))
                                            <div class="alert alert-success" style="width: 100%;float: right;">{{session('sucess')}}</div>
                                        @endif
                                       @if ($errors->any())
                                            <div class="alert alert-danger" style="width: 100%;float: right;">
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
                              <th>#</th>
                              <th>Nome</th>
                              <th>Titulo</th>
                              <th>Subtitulo</th>
                              <th class="text-center">Active</th>
                              <th>#</th>
                            </tr>
                             @foreach($pagina as $item)
                              <tr>
                                <td><i class="{{ $item->class }}"></i></td>
                                <td>{{ $item->nome }}</td>
                                <td>{{ $item->titulo }}</td>
                                <td>{{ $item->subtitulo }}</td>
                                <td>{{ $item->menomonica }}</td>
                                @if ($item->activo === 1)
                                    <td class="text-center"><i class="fa fa-check-circle"></i></td>
                                @else                       
                                <td class="text-center"><i class="fa fa-times-circle"></i></td>
                                @endif   
                                <td><a href="{{route('pagina.edit',$item->id)}}" class="btn btn-warning btn-xs"><i class="fa fa-edit"></i></a> 

                                {{ Form::open(['route' => ['pagina.destroy', $item->id], 'method' => 'delete']) }}
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