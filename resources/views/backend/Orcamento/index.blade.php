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
                    Pedidos Orçamentos
                  </h1>
                  <ol class="breadcrumb">
                    <li><a href="{{route('dash')}}"><i class="fa fa-dashboard"></i> Home</a></li>
                    <li class="active"><a href="{{route('orcamento')}}"><i class="fa fa-newspaper-o"></i> Pedidos Orçamentos</a></li>
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
            <!-- /.row -->
                  <div class="row">
                    <div class="col-xs-12">
                      <div class="box">
                        <div class="box-body table-responsive no-padding">
                          <table class="table table-hover">
                            <tr>
                              <th>Numero Orçamento</th>
                              <th>Nome</th>
                              <th>Email</th>
                              <th>Telefone</th>
                              <th>Empresa</th>
                              <th>Data</th>
                              <th>Ficheiro</th>
                              <th>Obs</th>
                            </tr>
                            @foreach($orcamento as $item)
                              <tr>
                                <td> <a href="{{ route('orcamento.show', $item->id)}}">{{ $item->id }}</a></td>
                                <td>{{ $item->nome }}</td>
                                <td>{{ $item->email }}</td>
                                <td>{{ $item->telemovel }}</td>
                                <td>{{ $item->empresa }}</td>
                                <td>{{ $item->created_at }}</td>
                                <td> 
                                    
                                    @if(file_exists(public_path().'/logotipo/orcamento/'.$item->pathfile) &&  !empty($item->pathfile))

                                      <a href="{{ (route('orcamento.download',[$item->pathfile,$item->id])) }}" target="_blank"> Link </a>
                                    @endif
                                </td>
                                <td>{{ $item->obs }}</td>
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