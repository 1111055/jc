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
                    Acessos
                  </h1>
                  <ol class="breadcrumb">
                    <li><a href="{{route('dash')}}"><i class="fa fa-dashboard"></i> Home</a></li>
                    <li class="active"><a href="{{route('orcamento')}}"><i class="fa fa-paint-brush"></i> Acessos</a></li>
                  </ol>
                </section>

                <!-- Main content -->
                <section class="content container-fluid">     

                   <div class="container">
                       <div class="panel panel-default">
                          <div class="panel-heading">Filtros</div>
                           <div class="panel-body">
                            <div class="box-header">

                              <div class="box-tools">
                                <div class="input-group input-group-sm" style="width: 150px;">
                                  <input type="text" name="table_search" class="form-control pull-right" placeholder="Search">

                                  <div class="input-group-btn">
                                    <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                  </div>        
                  <div class="row">
                    <div class="col-xs-12">
                      <div class="box">
                        <div class="box-body table-responsive no-padding">

                            @if(Auth::user()->isinrule(['supermaster']))
                                <!-- /.adicionar um novo -->
                               <div class="panel panel-default">
                                  <div class="panel-body">
                                  <!-- Horizontal Form -->
                                    <div class="col-xs-4">
                                      <div class="box box-info">
                                        {!! Form::open(['url' => 'role','class' => 'form-horizontal']) !!}
                                              <div class="box-body">
                                               <div class="form-group">
                                                       {!! Form::label('* Nome ') !!}
                                                       {!! Form::text('name',null,['class' => 'form-control']) !!}
                                                    </div>
                                                    <div class="form-group">
                                                      {!! Form::label('Descrição:')!!}
                                                      {!! Form::text('description',null,['class' => 'form-control']) !!}
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
                              @endif

                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-xs-12">
                      <div class="box">
                        <div class="box-body table-responsive no-padding">
                          <table class="table table-hover">
                            <tr>
                              <th>#</th>
                              <th>Nome</th>
                              <th>Descrição</th>
                              <th>#</th>
                            </tr>
                            @foreach($roles as $item)
                              <tr>
                                <td> <a href="{{ route('role.show', $item->id)}}">{{ $item->id }}</a></td>
                                <td>{{ $item->name }}</td>
                                <td>{{ $item->description }}</td>
                                <td><a href="{{route('role.edit',$item->id)}}" class="btn btn-warning btn-xs"><i class="fa fa-edit"></i></a> 

                                    {{ Form::open(['route' => ['role.destroy', $item->id], 'method' => 'delete']) }}
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

                </section>
                <!-- /.content -->
              </div>
              <!-- /.content-wrapper -->

@stop