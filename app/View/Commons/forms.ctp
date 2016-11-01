<div class="container outsidemain">
    <div class="row">
        <div class="col-md-12"><h2>Cadastrar <strong><?php echo $this->fetch('title'); ?></strong></h2></div>
    </div>
	<div class="row">
        <div class="col-md-12">
		    <?php echo $this->Session->flash().$this->fetch('page-content'); ?>
        </div>
	</div>    
</div>
