<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title>Super Gestão - <?php echo $__env->yieldContent('titulo'); ?></title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="<?php echo e(asset('css/estilo_basico.css')); ?>">

    </head>

    <body>
    <?php echo $__env->make('site.layouts._partials.topo', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->yieldContent('conteudo'); ?>
    </body>
</html><?php /**PATH C:\Users\daniel.cabral\Documents\Code\app_super_gestao\resources\views/site/layouts/basico.blade.php ENDPATH**/ ?>