@extends('backend.app')

@section('content')


              <!-- Content Wrapper. Contains page content -->
              <div class="content-wrapper">
                <!-- Content Header (Page header) -->
                <section class="content-header">
                  <h1>
                   Social NetWork
                  </h1>
                  <ol class="breadcrumb">
                    <li><a href="{{route('dash')}}"><i class="fa fa-dashboard"></i> Home</a></li>
                    <li><a href="{{route('dash')}}"><i class="fa fa-align-justify"></i> Paginas</a></li>
                    <li class="active"><a href="{{route('social')}}"><i class="fa fa-facebook-square"></i> Social Network</a></li>
                  </ol>
                </section>

                <!-- Main content -->
                <section class="content container-fluid">             
            <!-- /.row -->
                  <div class="row">
                    <div class="col-xs-12">
                      <div class="box">
                        <div class="box-header">
                          <h3 class="box-title">Social NetWork</h3>

                          <!-- /.adicionar um novo -->
                         <div class="panel panel-default">
                            <div class="panel-body">
                            <!-- Horizontal Form -->
                              <div class="col-xs-8">
                                <div class="box box-info">
                                  {!! Form::open(['url' => 'social','class' => 'form-horizontal']) !!}
                                        <div class="box-body">
                                          <div class="form-group">
                                            {!! Form::label('* Nome:',null, ['class' => 'col-sm-2 control-label']) !!}
                                            <div class="col-sm-2">
                                               {!! Form::text('nome',null,['class' => 'form-control']) !!}
                                            </div>
                                               {!! Form::label('* Menomonica:',null, ['class' => 'col-sm-2 control-label']) !!}
                                            <div class="col-sm-2">
                                               {!! Form::text('menomonica',null,['class' => 'form-control']) !!}
                                            </div>
                                              {!! Form::label('* Ordem:',null, ['class' => 'col-sm-2 control-label']) !!}
                                            <div class="col-sm-2">
                                               {!! Form::text('ordem',null,['class' => 'form-control']) !!}
                                            </div>
                                          </div>
                                          <div class="form-group">
                                              {!! Form::label('* Link:',null, ['class' => 'col-sm-2 control-label']) !!}
                                            <div class="col-sm-4">
                                               {!! Form::text('link',null,['class' => 'form-control']) !!}
                                            </div>
                                               {!! Form::label('* Class:',null, ['class' => 'col-sm-2 control-label']) !!}
                                            <div class="col-sm-4">
                                               {!! Form::text('class',null,['class' => 'form-control']) !!}
                                            </div>
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
                              <th>Ordem</th>
                              <th>Social</th>
                              <th>Class</th>
                              <th>Link</th>
                              <th>Menomonica</th>
                              <th class="text-center">Active</th>
                              <th>#</th>
                            </tr>
                             @foreach($social as $item)
                              <tr>
                                <td><i class="{{ $item->class }}"></i></td>
                                <td>{{ $item->ordem }}</td>
                                <td>{{ $item->nome }}</td>
                                <td>{{ $item->class }}</td>
                                <td>{{ $item->link }}</td>
                                <td>{{ $item->menomonica }}</td>
                                @if ($item->activo === 1)
                                    <td class="text-center"><i class="fa fa-check-circle"></i></td>
                                @else                       
                                <td class="text-center"><i class="fa fa-times-circle"></i></td>
                                @endif   
                                <td><a href="{{route('social.edit',$item->id)}}" class="btn btn-warning btn-xs"><i class="fa fa-edit"></i></a> 

                                    {{ Form::open(['route' => ['social.destroy', $item->id], 'method' => 'delete']) }}
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