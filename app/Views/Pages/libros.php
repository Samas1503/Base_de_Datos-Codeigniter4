<?=$this->extend('Layouts/principal')?>

<?=$this->section('titulo')?>
    <?php echo $titulo?>
<?= $this->endSection()?>

<?=$this->section('contenido')?>
    <table>
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Descripcion</th>
        </tr>
        <?php foreach ($libros as $key):?>
            <tr>
                <td><?=$key->id_libro?></td>
                <td><?=$key->nombre?></td>
                <td><?=$key->descripcion?></td>
            </tr>
        <?php endforeach;?>
    </table>
    
<br>
<?= $this->endSection()?>
