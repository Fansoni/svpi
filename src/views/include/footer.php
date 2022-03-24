
<!-- jQuery Plugins -->
<script src="<?= URLROOT; ?>/public/js/jquery.min.js"></script>
    <script src="<?= URLROOT; ?>/public/js/bootstrap.min.js"></script>
    <script src="<?= URLROOT; ?>/public/js/slick.min.js"></script>
    <script src="<?= URLROOT; ?>/public/js/nouislider.min.js"></script>
    <script src="<?= URLROOT; ?>/public/js/jquery.zoom.min.js"></script>
    <script src="<?= URLROOT; ?>/public/js/main.js"></script>

    <?php if(isset($scripts)){
		foreach ($scripts as $script) {
			?>
            <script src="<?= URLROOT; ?>/js/<?= $script ?>"></script>
		<?php }
	} ?>
</body>

</html>