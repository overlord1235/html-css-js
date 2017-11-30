
<script type="text/javascript">
	
	<?php if (isset($_SESSION['message'])) : ?>
	$.Notify({
    caption: '<?=$_SESSION['message']['caption'];?>',
    content: '<?=$_SESSION['message']['content'];?>',
    type: '<?=$_SESSION['message']['type'];?>'
	});
	<?php unset($_SESSION['message']) ?>
	<?php endif; ?>

</script>
</body>

</html>