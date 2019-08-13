@extends('backend.app')

@section('content')


         @if(session('sucess'))
         <!--Alerta de sucess-->
            <div class="alert alert-success" id="showsucess" style="border-radius: 0; float: right; margin-top: 2%; position: fixed; right: 0; top: 0; width: 600px; z-index: 9999;">
              {{session('sucess')}}
          </div>
          @endif
           @if ($errors->any())
                <div class="alert alert-danger" id="showsucess" style="border-radius: 0; float: right; margin-top: 2%; position: fixed; right: 0; top: 0; width: 600px; z-index: 9999;">
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
                  SubFamilia
                  </h1>
                  <ol class="breadcrumb">
                    <li><a href="{{route('dash')}}"><i class="fa fa-dashboard"></i> Home</a></li>
                    <li class="active"><a href="{{route('subfamilia')}}"><i class="fa fa-circle-o"></i> SubFamilia</a></li>
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
                                  {!! Form::open(['url' => 'subfamilia','class' => 'form-horizontal']) !!}
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
                        <div class="box-body table-responsive no-padding">
                          <table class="table table-hover">
                            <tr>
                              <th>#</th>
                              <th>Titulo</th>
                              <th>Subtitulo</th>
                              <th>Familia</th>
                              <th>Ordem</th>
                              <th class="text-center">Active</th>
                              <th>#</th>
                            </tr>
                            @foreach($subfamilia as $item)
                              <tr>
                                <td>#</td>
                                <td>{{ $item->titulo }}</td>
                                <td>{{ $item->subtitulo }}</td>
                                <td>@if($item->familia){{ $item->familia->titulo }}@endif</td>
                                <td>{{ $item->ordem }}</td>
                                @if ($item->activo === 1)
                                    <td class="text-center"><i class="fa fa-check-circle"></i></td>
                                @else                       
                                <td class="text-center"><i class="fa fa-times-circle"></i></td>
                                @endif   
                                <td><a href="{{route('subfamilia.edit',$item->id)}}" class="btn btn-warning btn-xs"><i class="fa fa-edit"></i></a> 

                                    {{ Form::open(['route' => ['subfamilia.destroy', $item->id], 'method' => 'delete']) }}
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