<?=$this->extend('Layouts/principal')?>

<?=$this->section('titulo')?>
    <?php echo $titulo?>
<?= $this->endSection()?>

<?=$this->section('contenido')?>
    
<a href="<?=base_url().route_to('contacto');?>/">contacto</a>
<br>
<a href="<?=base_url().route_to('contacto');?>/">contacto</a>
<br>
<a href="<?=base_url().route_to('contacto');?>/">contacto</a>
<br>
<a href="<?=base_url().route_to('contacto');?>/">contacto</a>
<br>
<?= $this->endSection()?>
