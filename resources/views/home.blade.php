@extends('layouts.app')
<link rel="stylesheet" href="complementos/css/estilos.css">
@section('content')

<div id="header">
   
			<ul class="nav">
				<li><a href="">Transporte Público</a>
                    <ul>
						<li><a href="crearRuta">Registrar Ruta</a></li>
                        <li><a href="admin/transporte">Listar Rutas</a></li>
                        
					</ul>
				</li>
				
				<li><a href="">Empresas de Transporte</a>
					<ul>
						<li><a href="crearEmpresa">Registar Empresa</a></li>
						<li><a href="admin/empresa">Listar Empresas</a></li>
                        
					</ul>
				</li>
                
                <li><a href="">Conductor</a>
                <ul>  
                    <li><a href="crear">Registrar Conductor</a>
                    <li><a href="/admin/conductor">Listar Conductores</a>
                    
                </ul>
                    </li>
			</ul>
            
		</div>
  
<div><center><img  src="/complementos/images/administrador.png"> </center></div>
@endsection