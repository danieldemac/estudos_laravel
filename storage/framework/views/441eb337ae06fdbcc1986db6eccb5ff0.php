<?php echo e($slot); ?>


<form action=<?php echo e(route('site.contato')); ?> method='post'>
    <?php echo csrf_field(); ?>
    <input name='nome' type="text" placeholder="Nome" class="<?php echo e($classe); ?>">
    <br>
    <input name='telefone' type="text" placeholder="Telefone" class="<?php echo e($classe); ?>">
    <br>
    <input name='email' type="text" placeholder="E-mail" class="<?php echo e($classe); ?>">
    <br>
    <select name='motivo_contato' class="<?php echo e($classe); ?>">
        <option value="">Qual o motivo do contato?</option>
        <option value="1">Dúvida</option>
        <option value="2">Elogio</option>
        <option value="3">Reclamação</option>
    </select>
    <br>
    <textarea name='mensagem' class="<?php echo e($classe); ?>">Preencha aqui a sua mensagem</textarea>
    <br>
    <button type="submit" class="<?php echo e($classe); ?>">ENVIAR</button>
</form><?php /**PATH C:\Users\daniel.cabral\Documents\Code\app_super_gestao\resources\views/site/layouts/_components/form_contato.blade.php ENDPATH**/ ?>