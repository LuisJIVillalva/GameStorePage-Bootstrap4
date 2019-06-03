<body id=body-Principal>
    <main id="main">
<?php if (!$productos) { ?>

	<div class="container">
		<div class="well">
			<h1>No hay Eliminados</h1>
		</div>
	</div>

<?php } else { ?>

	<div id="cuadro" class="container">
		<div class="well">
			<h1>Todos los Eliminados</h1>
		</div>

		<table class="table table-bordered">
			<thead>
				<tr>
					<th>ID</th>
					<th>Descripcion</th>
					<th>Categoria</th>
					<th>Precio Venta</th>
					<th>Stock</th>
					<th>Eliminado</th>
					<th>Modificar</th>
				</tr>
			</thead>
			<tbody>
				<?php foreach($productos->result() as $row){ ?>
				<tr>
					<td><?php echo $row->id;  ?></td>
					<td><?php echo $row->descripcion;  ?></td>
					<td><?php echo $row->id_categoria;  ?></td>
					<td><?php echo $row->precio_venta;  ?></td>
					<td><?php echo $row->stock;  ?></td>
					<td><?php echo $row->eliminado;  ?></td>
					<td><a href="<?php echo base_url("productos_modifica/$row->id");?>">Modificar</a>|<a href="<?php echo base_url("productos_activa/$row->id");?>">Activar</a></td>
				</tr>
				<?php } ?>
			</tbody>
		</table>
	</div>

<?php } ?>
</main>
