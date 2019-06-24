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
                   Menu
                  </h1>
                  <ol class="breadcrumb">
                    <li><a href="{{route('dash')}}"><i class="fa fa-dashboard"></i> Home</a></li>
                    <li class="active"><a href="{{route('menu')}}"><i class="fa fa-facebook-square"></i> Menu</a></li>
                  </ol>
                </section>

                <section class="content container-fluid">             
            <!-- /.row -->
                  <div class="row">
                      <div class="col-xs-12">
                        <div class="box">
                          <div class="box-header">
                            <h3 class="box-title">Edit Menu</h3>

                          </div>
                         <div class="panel panel-default">
                            <div class="panel-body">
                            <div class="box box-info">
                                     {!! Form::model($menu, [
                                          'method' => 'PUT',
                                          'route' => ['menu.update', $menu->id],
                                          'class' => 'form-horizontal'
                                     ]) !!}
                                    <div class="box-body">
                                      <div class="form-group">
                                        {!! Form::label('* Menu:',null, ['class' => 'col-sm-2 control-label']) !!}
                                        <div class="col-sm-8">
                                           {!! Form::text('menu',$menu->menu,['class' => 'form-control']) !!}
                                        </div>
                                        
                                      </div>
                                      <div class="form-group">
                                           {!! Form::label('* Descricao:',null, ['class' => 'col-sm-2 control-label']) !!}
                                        <div class="col-sm-8">
                                           {!! Form::textarea('descricao',$menu->descricao,['class' => 'form-control']) !!}
                                        </div>
                                      </div>
                                       <div class="form-group">
                                          {!! Form::label('* Submenu:',null, ['class' => 'col-sm-2 control-label']) !!}
                                        <div class="col-sm-8">
                                           {!! Form::select('submenu', $selmenu,$menu->submenu,['class' => 'form-horizontal']) !!}
                                        </div>
                                      </div>
                                      <div class="form-group">
                                          {!! Form::label('* Link:',null, ['class' => 'col-sm-2 control-label']) !!}
                                        <div class="col-sm-8">
                                           {!! Form::text('link',$menu->link,['class' => 'form-control']) !!}
                                        </div>
                                       </div>
                                       <div class="form-group">
                                           {!! Form::label('* Ordem:',null, ['class' => 'col-sm-2 control-label']) !!}
                                         <div class="col-sm-8">
                                           {!! Form::text('ordem',$menu->ordem,['class' => 'form-control']) !!}
                                         </div>
                                      </div>
                                       <div class="form-group">
                                           {!! Form::label('Path:',null, ['class' => 'col-sm-2 control-label']) !!}
                                         <div class="col-sm-8">
                                           {!! Form::text('path',$menu->path,['class' => 'form-control']) !!}
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

                        <div class="panel panel-default">
                            <div class="panel-header">
                              <label>Submenu</label>
                            </div>
                            <div class="panel-body">
                              <div class="col-xs-12">
                                <div class="box box-info">
                                  {!! Form::open(['url' => 'menu','class' => 'form-horizontal']) !!}
                                        <div class="box-body">
                                          <div class="form-group">
                                           {!! Form::hidden('submenu',$menu->id,['class' => 'form-control']) !!}
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
                                 <div class=" row col-xs-12 box-body table-responsive no-padding">
                                    <table class="table table-hover">
                                      <tr>
                                        <th>Ordem</th>
                                        <th>Menu</th>
                                        <th>Pagina</th>
                                        <th>Descrição</th>
                                        <th class="text-center">Active</th>
                                        <th>#</th>
                                      </tr>
                                       @foreach($menus as $item)
                                          <td>{{ $item->ordem }}</td>
                                          <td>{{ $item->menu }}</td>
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
                              </div>
                        </div>

                      </div>
                     </div>
                  </div>

                </section>
              </div>

@stop