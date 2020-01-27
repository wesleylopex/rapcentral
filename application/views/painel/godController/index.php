<!DOCTYPE html>
<html lang="en">

<head>
	<?php include_once("application/views/painel/utils/start.php") ?>
</head>

<body data-background-color="bg3">
	<div class="wrapper">
		<?php include_once("application/views/painel/utils/header.php") ?>
		<div class="main-panel">
			<div class="content">
				<div class="container-fluid">
					<div class="page-header">
						<h4 class="page-title"><?= $nomes["plural"] ?></h4>
						<ul class="breadcrumbs">
							<li class="nav-home">
								<a href="<?= site_url("painel") ?>">
									Home
								</a>
							</li>
							<li class="separator">
								<i class="flaticon-right-arrow"></i>
							</li>
							<li class="nav-item">
								<?= $nomes["plural"] ?>
							</li>
						</ul>
					</div>
					<div class="row">
						<div class="col-md-12">
							<div class="card">
								<?php if ($permissoes["cadastrar"] || $permissoes["excluir"]) : ?>
									<div class="card-header">
										<?php if ($permissoes["excluir"]) : ?>
											<a class="btn-excluir" style="display: none" data-toggle="tooltip" data-placement="bottom" title="Excluir">
												<i class="la la-trash"></i>
											</a>
										<?php endif ?>
										<?php if ($permissoes["cadastrar"]) : ?>
											<a href="<?= base_url("painel/" . $nomes["link"] . "/cadastrar"); ?>" class="btn btn-black float-right">
												<span>
													Adicionar <?= $nomes["singular"] ?>
												</span>
											</a>
										<?php endif ?>
									</div>
								<?php endif ?>
								<div class="card-body">
									<div class="table-responsive">
										<table class="display table table-striped table-hover datatable">
											<thead>
												<tr>
													<?php if ($permissoes["excluir"]) : ?>
														<th>
															<div class="custom-control custom-checkbox">
																<input type="checkbox" class="custom-control-input" id="select-all">
																<label class="custom-control-label" for="select-all"></label>
															</div>
														</th>
													<?php endif; ?>
													<?php foreach ($campos as $campo) : ?>
														<?php if (isset($campo["visivelTabela"]) && $campo["visivelTabela"]) : ?>
															<th><?= $campo["nome"] ?></th>
														<?php endif ?>
													<?php endforeach ?>
												</tr>
											</thead>
											<tbody>
												<?php foreach ($registros as $registro) : ?>
													<tr id="<?= $registro->id ?>">
														<?php if ($permissoes["excluir"]) : ?>
															<td width="48" class="not-clickable">
																<?php if ($permissoes["excluir"]) : ?>
																	<div class="custom-control custom-checkbox">
																		<input type="checkbox" class="custom-control-input" id="check<?= $registro->id ?>">
																		<label class="custom-control-label" for="check<?= $registro->id ?>"></label>
																	</div>
																<?php endif ?>
															</td>
														<?php endif ?>
														<?php foreach ($campos as $key => $campo) : ?>
															<?php if (isset($campo["visivelTabela"]) && $campo["visivelTabela"]) : ?>
																<?php if (isset($campo["fromDataBase"]) && $campo["fromDataBase"]) : ?>
																	<td><?= $registro->{$key}; ?></td>
																<?php elseif ($campo["type"] == "select") : ?>
																	<td><?= $campo["options"][$registro->{$key}] ?></td>
																<?php elseif ($campo["type"] == "date") : ?>
																	<td><?= date("d/m/Y", strtotime($registro->{$key})) ?></td>
																<?php elseif ($campo["type"] == "image") : ?>
																	<td><img class="img-upload-preview" width="150" src="<?= base_url("assets/uploads/images/" . $registro->{$key}) ?>" alt=""></td>
																<?php else : ?>
																	<td><?= $registro->{$key}; ?></td>
																<?php endif ?>
															<?php endif ?>
														<?php endforeach ?>
													</tr>
												<?php endforeach ?>
											</tbody>
										</table>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--   Core JS Files   -->
	<?php include_once("application/views/painel/utils/end.php") ?>

	<script>
		function showAlert(type = "default", message = null, icon = "la la-trash", title = null) {
			$.notify({
				icon: icon,
				title: title,
				message: message,
			}, {
				type: type,
				placement: {
					from: "bottom",
					align: "right"
				},
				time: 1000,
			});
		}

		function initDatataTable() {
			$('.datatable').dataTable({
				"oLanguage": {
					"sLengthMenu": "Mostrar _MENU_ registros por página",
					"sZeroRecords": "Nenhum registro encontrado",
					"sInfo": "Mostrando _START_ / _END_ de _TOTAL_ registro(s)",
					"sInfoEmpty": "Mostrando 0 / 0 de 0 registros",
					"sInfoFiltered": "(filtrado de _MAX_ registros)",
					"sSearch": "",
					"oPaginate": {
						"sPrevious": "Anterior",
						"sNext": "Próximo",
					},
					"sSearchPlaceholder": "Pesquisar"
				},
				"aaSorting": [
					[0, 'desc']
				],
				"columnDefs": [{
					"orderable": false,
					"targets": 0
				}]
			})
		}

		function editRegister() {
			$(".datatable tbody tr td").not(".not-clickable").on("click", function() {
				let id = $(this).closest("tr").attr("id")
				nomes = {
					plural: "<?= $nomes["plural"]; ?>",
					singular: "<?= $nomes["singular"]; ?>",
					link: "<?= $nomes["link"]; ?>",
				}

				permissoes = {
					editar: "<?= $permissoes["editar"] ?>",
					cadastrar: "<?= $permissoes["cadastrar"] ?>",
					excluir: "<?= $permissoes["excluir"] ?>",
				}

				if (permissoes.editar) window.location.href = `${base_url}painel/${nomes.link}/editar/${id}`
			})
		}

		function removeRegister() {
			$(".btn-excluir").click(function() {

				let checkboxes = $(".datatable tbody input[type=checkbox]").toArray()
				let id = []
				let trs = []

				$(checkboxes).each(function() {
					if ($(this).prop("checked")) {
						id.push($(this).closest("tr").attr("id"))
						trs.push($(this).closest("tr"))
					}
				})

				if (id.length == 0)
					showAlert("default", "Nenhum registro selecionado", "la la-trash")
				else {
					$.ajax({
						method: "POST",
						url: "<?= site_url("painel/" . $nomes["link"] . "/excluir"); ?>",
						data: {
							id: id
						},
						success(result) {
							fadeOutRows(trs)
							$("#select-all").prop("checked", false)

							showAlert("default", `${id.length} registro(s) excluído(s).`, "la la-trash")
						}
					})
				}

				$(this).fadeOut("fast")

			})
		}

		function fadeOutRows(trs) {

			const table = $(".datatable").DataTable()

			$(trs).each(function() {
				$(this).fadeOut("slow", function() {
					table.row($(this)).remove().draw();
				})
			})
		}

		function selectAll() {

			var btnExcluir = $(".btn-excluir")

			$("#select-all").click(function() {

				var checkboxes = $(".datatable tr td input[type=checkbox]")

				if ($(this).prop("checked") == true) {
					checkboxes.prop("checked", true)
					btnExcluir.fadeIn("fast")
				} else {
					checkboxes.prop("checked", false)
					btnExcluir.fadeOut("fast")
				}
			})

			$(".datatable tr td input[type=checkbox]").click(function() {
				if ($(".datatable tr td input[type=checkbox]:checked").length == 0)
					btnExcluir.fadeOut("fast")
				else
					btnExcluir.fadeIn("fast")

				if ($(this).prop("checked") == false) {
					$("#select-all").prop("checked", false)
				}
			})

		}

		function removeFirstArrowsFromThead() {
			$("thead th").first().removeClass("sorting_desc")
		}

		$(document).ready(function() {
			initDatataTable()
			removeFirstArrowsFromThead()
			selectAll()

			editRegister()
			removeRegister()

		});
	</script>
</body>

</html>