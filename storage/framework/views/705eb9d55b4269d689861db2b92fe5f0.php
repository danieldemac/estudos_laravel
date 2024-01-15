<?php $__env->startSection('titulo', 'Principal'); ?>
<?php $__env->startSection('conteudo'); ?>

        <div class="conteudo-destaque">
        
            <div class="esquerda">
                <div class="informacoes">
                    <h1>Sistema Super Gestão</h1>
                    <p>Software para gestão empresarial ideal para sua empresa.<p>
                    <div class="chamada">
                        <img src="/img/check.png">
                        <span class="texto-branco">Gestão completa e descomplicada</span>
                    </div>
                    <div class="chamada">
                        <img src="img/check.png">
                        <span class="texto-branco">Sua empresa na nuvem</span>
                    </div>
                </div>

                <div class="video">
                    <img src="img/player_video.jpg">
                </div>
            </div>

            <div class="direita">
                <div class="contato">
                    <h1>Contato</h1>
                    <p>Caso tenha qualquer dúvida por favor entre em contato com nossa equipe pelo formulário abaixo.<p>
                        <?php $__env->startComponent('site.layouts._components.form_contato',['classe' => 'borda-branca']); ?>
                        <?php echo $__env->renderComponent(); ?>
                </div>
            </div>
        </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('site.layouts.basico', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\daniel.cabral\Documents\Code\app_super_gestao\resources\views/site/principal.blade.php ENDPATH**/ ?>