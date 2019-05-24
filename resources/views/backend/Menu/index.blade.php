@extends('backend.app')

@section('content')



              <!-- Content Wrapper. Contains page content -->
              <div class="content-wrapper">
                <!-- Content Header (Page header) -->
                <section class="content-header">
                  <h1>
                   Menus List
                  </h1>
                  <ol class="breadcrumb">
                    <li><a href="{{route('dash')}}"><i class="fa fa-dashboard"></i> Home</a></li>
                    <li class="active"><a href="{{route('menu')}}"><i class="fa fa-align-justify"></i> Menus List</a></li>
                  </ol>
                </section>

                <!-- Main content -->
                <section class="content container-fluid" style="background-image: url('backend/dist/img/logo2.png');  background-repeat: no-repeat;
              background-position: 50% 50%;">             
            <!-- /.row -->
                  <div class="row">
                    <div class="col-xs-12">
                      <div class="box">
                        <div class="box-header">
                          <h3 class="box-title">Menus List</h3>

                          <!-- /.adicionar um novo -->
                         <div class="panel panel-default">
                            <div class="panel-body">
                            <!-- Horizontal Form -->
                              <div class="col-xs-10">
                                <div class="box box-info">
                                  {!! Form::open(['url' => 'menu','class' => 'form-horizontal']) !!}
                                        <div class="box-body">
                                          <div class="form-group">
                                            {!! Form::label('* Menu:',null, ['class' => 'col-sm-2 control-label']) !!}
                                            <div class="col-sm-4">
                                               {!! Form::text('menu',null,['class' => 'form-control']) !!}
                                            </div>
                                               {!! Form::label('* Ordem:',null, ['class' => 'col-sm-2 control-label']) !!}
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
                              <th>ID</th>
                              <th>Ordem</th>
                              <th>Menu</th>
                              <th>Submenu</th>
                              <th>Link</th>
                              <th>Descrição</th>
                              <th class="text-center">Active</th>
                              <th>#</th>
                            </tr>
                             @foreach($menus as $item)
                              <tr>
                                <td>{{ $item->id }}</td>
                                <td>{{ $item->ordem }}</td>
                                <td>{{ $item->menu }}</td>
                                <td>{{ $item->submenu }}</td>
                                <td>{{ $item->link }}</td>
                                <td>{{ $item->descricao }}</td>
                                @if ($item->activo === 1)
                                    <td class="text-center"><i class="fa fa-check-circle"></i></td>
                                @else                       
                                <td class="text-center"><i class="fa fa-times-circle"></i></td>
                                @endif   
                                <td><a href="{{route('menu.edit',$item->id)}}" class="btn btn-warning btn-xs"><i class="fa fa-edit"></i></a> 

                                    {{ Form::open(['route' => ['menu.destroy', $item->id], 'method' => 'delete']) }}
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