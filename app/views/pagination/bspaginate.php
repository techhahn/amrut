
<?php
    $presenter = new Illuminate\Pagination\BootstrapPresenter($paginator);
    $trans = $environment->getTranslator();
?>
<?php if ($paginator->getLastPage() > 1): ?>
	<div>
		<ul class="pagination">
			<?php echo $presenter->render(); ?>
		</ul>
	</div>
<?php endif; ?>