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

              <div class="content-wrapper">
                <section class="content-header">
                  <ol class="breadcrumb">
                    <li><a href="{{route('dash')}}"><i class="fa fa-dashboard"></i> Home</a></li>
                    <li><a href="{{route('pagina')}}"><i class="fa fa-align-justify"></i> Banners</a></li>
                  </ol>
                </section>

                <!-- Main content -->
                <section class="content container-fluid">             
            <!-- /.row -->
                  <div class="row">
                    <div class="col-xs-12">
                      <div class="box">
                        <div class="box-header">
                          <h3 class="box-title">Banners</h3>
                        </div>
                         <div class="panel panel-default">
                            <div class="panel-body">
                            <!-- Horizontal Form -->
                              <div class="col-xs-12">
                                <div class="box box-info">
                                     {!! Form::open(['url' => 'banner','class' => 'form-horizontal']) !!}
                                        <div class="box-body">
                                              <div class="col-xs-8">
                                                 <div class="form-group col-xs-10">
                                                   {!! Form::label('* Titulo ') !!}
                                                   {!! Form::hidden('produto',1,['class' => 'form-control']) !!}
                                                   {!! Form::text('titulo',null,['class' => 'form-control']) !!}
                                                 </div>
                                              </div>
                                             <div class="col-xs-4">
                                                <div class="form-group col-xs-6">
                                                  {!! Form::label('Ordem:')!!}
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
                              <th>#</th>
                              <th>Titulo</th>
                              <th>Ordem</th>
                              <th class="text-center">Active</th>
                            </tr>
                             @foreach($banner as $item)
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
                                <td><a href="{{route('banner.edit',$item->id)}}" class="btn btn-warning btn-xs"><i class="fa fa-edit"></i></a> 

                                {{ Form::open(['route' => ['banner.destroy', $item->id], 'method' => 'delete']) }}
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