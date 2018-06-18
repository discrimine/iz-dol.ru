<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
	<title>Документов по домам МЖК «Изумрудная долина», бухгалтерская отчётность</title>
	<meta name="keywords" content="изумрудная долина документы">
	<meta name="description" content="Комплекты документов по домам МЖК «Изумрудная долина», бухгалтерская отчётность">
	
    
	<?php 
	include_once 'backend/ajax_docs.php';
	include_once 'backend/docs.php';
	 ?>
	<meta charset="UTF-8">
	<title>Документы</title>
	<?php require_once 'frontend/head.php'; ?>
</head>
<body>
	<?php require_once 'frontend/header.php'; ?>
	
	<div class="content">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-xl-12">
					<p style="font-size: 34px;" class="title letter_lower">
						ДОКУМЕНТЫ
					</p>
				</div>
			</div>
			<div class="row">
				<div class="col-12">
					<p style="font-size: 18px; letter-spacing: .3px;" align="center">Комплекты документов по домам МЖК «Изумрудная долина», бухгалтерская отчётность представлены ниже.</p>
				</div>
			</div>
			<div style="margin-bottom: 120px;" class="row">
				<div class="col-12">
					<div class="filter_docs">
						<div class="choosing_house">
							<select class="select" name="" id="choosing_house_num">
								<option value="" disabled="disabled" selected="selected">Выберите дом</option>
								<?php
								foreach($nums as $nums_el){
									echo('<option value="'.$nums_el.'">Дом '.$nums_el.'</option>');
								}
								?>
							</select>
							<div class="scrollbar" id="style-5">
						    	<div class="force-overflow"></div>
						    </div>
						</div>
						<div class="result_docs" id="result_docs"></div>
					</div>
				</div>
			</div>
			<div style="display: none;" class="row justify-content-center">
				<div class="col-xl-12 col-12">
					<p class="title letter_lower">
						ОБЪЕКТЫ ИНЖЕНЕРНОЙ ИНФРАСТРУКТУРЫ
					</p>
				</div>
				<div class="col-12">
					<div style="margin-bottom: 120px;" class="result_docs" id="result_docs">
						<table>
							<tr><td>01</td><td><a href="backend/num_pdf/1.pdf" target="_blank"><img class="pdf_ico" src="img/service/pdf_ico.png">ВЗУ</a></td></tr>
							<tr><td>02</td><td><a href="backend/num_pdf/1.pdf" target="_blank"><img class="pdf_ico" src="img/service/pdf_ico.png">Головные очистные сооружения</a></td></tr>
							<tr><td>03</td><td><a href="backend/num_pdf/1.pdf" target="_blank"><img class="pdf_ico" src="img/service/pdf_ico.png">СЕТЬ НАПОРНОЙ КАНАЛИЗАЦИИ (напорный коллектор)</a></td></tr>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
	<?php require_once 'frontend/footer.php'; ?>
</body>
</html>