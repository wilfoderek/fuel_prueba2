<ul class="nav nav-pills">
    <li class='<?php echo Arr::get($subnav, "index"); ?>'><?php echo Html::anchor('personas/index', 'Index'); ?></li>
    <li class='<?php echo Arr::get($subnav, "create"); ?>'><?php echo Html::anchor('personas/create', 'Create'); ?></li>
    <li class='<?php echo Arr::get($subnav, "edit"); ?>'><?php echo Html::anchor('personas/edit', 'Edit'); ?></li>
    <li class='<?php echo Arr::get($subnav, "view"); ?>'><?php echo Html::anchor('personas/view', 'View'); ?></li>

</ul>

<?php echo Form::open(); ?>
<p>
    <?php echo Form::label('Nombre', 'nombre'); ?>
    <?php echo Form::input('nombre', Input::post('nombre', isset($post) ? $post->nombre : '')); ?>
</p>
<p>
    <?php echo Form::label('apellido', 'apellido'); ?>
    <?php echo Form::input('apellido', Input::post('apellido', isset($post) ? $post->apellido : '')); ?>
</p>


<div class="actions">
    <?php echo Form::submit(); ?>
</div>

<?php echo Form::close(); ?>