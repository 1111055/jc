  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

      <!-- Sidebar user panel (optional) -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="https://fakeimg.pl/160x160/" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>Marco Mendes</p>
          <!-- Status -->
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>

      <!-- search form (Optional) -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
          <span class="input-group-btn">
              <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
              </button>
            </span>
        </div>
      </form>
      <!-- /.search form -->

      <!-- Sidebar Menu -->
      <ul class="sidebar-menu" data-widget="tree">

        <li class="header">HEADER</li>

        <li class="active"><a href="{{route('dash')}}"><i class="fa fa-home"></i> <span>Home</span></a></li>

        <!-- Optionally, you can add icons to the links -->
        <li><a href="{{route('setting')}}"><i class="fa fa-wrench"></i> <span>Configurações</span></a></li>


        <li class="treeview">
          <a href="#"><i class="fa fa-image"></i> <span>Multimédia</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="#">Imagens</a></li>
            <li><a href="#">Banners</a></li>
            <li><a href="#">Videos</a></li>
          </ul>
        </li>

        <li><a href="#"><i class="fa fa-shopping-cart"></i> <span>Produtos</span></a></li>
        <li><a href="{{route('menu')}}"><i class="fa fa-align-justify"></i> <span>Menus</span></a></li>
        <li class="treeview">
          <a href="#"><i class="fa fa-align-justify"></i> <span>Páginas</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{route('pagina')}}"><i class="fa fa-plus-circle"></i> Nova Página</a></li>

            @if(count($paginas) > 0)
               @foreach($paginas as $item)
                <li><a href="{{ route('pagina.edit', ['id' => $item->id])}}">{{ $item->nome}}</a></li>
               @endforeach 
            @endif

          </ul>
        </li>
         <li><a href="{{route('social')}}"><i class="fa fa-facebook"></i> <span>Redes Sociais</span></a></li>
         <li><a href="{{route('prazo')}}"><i class="fa fa-truck"></i> <span>Prazos Transporte</span></a></li>
       
      </ul>
      <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
  </aside>
