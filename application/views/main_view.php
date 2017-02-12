<div class="col-md-12">
	<h1><?=	$data['name'] ?></h1>
	<?php
		// Перебираем все элементы массива (разделы ответа на запрос)
		foreach($data as $key => $row) {?>
			<?php
				// В зависимоти от ключа (названия раздела) выводим различные значения
				switch ($key) {
				case 'main':?>
					<div>
						<label>Температура</label>
						<?= $row["temp"]." <sup>o</sup>C" ?>
					</div>
					<div>
						<label>Давление</label>
						<?= $row["pressure"].' гПа' ?>
					</div>
					<div>
						<label>Влажность</label>
						<?= $row["humidity"].' %' ?>
					</div>
				<?php break;
				case 'wind':?>
					<div>
						<label>Ветер</label>
						<?= $row["speed"]." м/с" ?>
					</div>
				<?php break;
			}
		}?>
</div>
