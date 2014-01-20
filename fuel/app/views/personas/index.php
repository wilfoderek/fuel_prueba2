<ul class="nav nav-pills">
    <li class='<?php echo Arr::get($subnav, "index"); ?>'><?php echo Html::anchor('personas/index', 'Index'); ?></li>
    <li class='<?php echo Arr::get($subnav, "create"); ?>'><?php echo Html::anchor('personas/create', 'Create'); ?></li>
    <li class='<?php echo Arr::get($subnav, "edit"); ?>'><?php echo Html::anchor('personas/edit', 'Edit'); ?></li>
    <li class='<?php echo Arr::get($subnav, "view"); ?>'><?php echo Html::anchor('personas/view', 'View'); ?></li>

</ul>



<!--   print_R($personas);
//foreach ($personas as $persona) {
//    echo $persona['nombre'] . ' ' . $persona['apellido'] . '</br>';
//}-->




<div class="post">

    <table>    
        <thead>
            <tr>
                <th><small><h5>Nombre</h5></small></th>
                <th><small><h5>Apellido</h5></small></th>
            <th><small><h5>Editar</h5></small></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($personas as $persona) : ?>
                <tr>
                    <td><?php echo $persona['nombre']; ?></td>
                    <td><?php echo $persona['apellido']; ?></td>
                    <td><h4> <small><?php echo \Html::anchor('personas/edit/' . $persona['id'], '[Edit]'); ?> </small></h4></td>
                </tr>
                <?php
            endforeach;
            ?>  
        </tbody>
    </table>

   
    <p></p>

</div>

