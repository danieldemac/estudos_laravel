<?php $__env->startSection('titulo', 'Contato'); ?>
<?php $__env->startSection('conteudo'); ?>

        <div class="conteudo-pagina">
            <div class="titulo-pagina">
                <h1>Entre em contato conosco</h1>
            </div>

            <div class="informacao-pagina">
                <div class="contato-principal">
                    
                    <?php $__env->startComponent('site.layouts._components.form_contato',['classe' => 'borda-preta']); ?>
                    <p>A nossa equipe analisará a sua mensagem e retornaremos o mais brevemente possível.</p>
                    <p> Nosso tempo médio de resposta é de 48 horas.</p>
                    <?php echo $__env->renderComponent(); ?>
                        
                </div>
            </div>  
        </div>

        <div class="rodape">
            <div class="redes-sociais">
                <h2>Redes sociais</h2>
                <img src="img/facebook.png">
                <img src="img/linkedin.png">
                <img src="img/youtube.png">
            </div>
            <div class="area-contato">
                <h2>Contato</h2>
                <span>(11) 3333-4444</span>
                <br>
                <span>supergestao@dominio.com.br</span>
            </div>
            <div class="localizacao">
                <h2>Localização</h2>
                <img src="img/mapa.png">
            </div>
        </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('site.layouts.basico', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\daniel.cabral\Documents\Code\app_super_gestao\resources\views/site/contato.blade.php ENDPATH**/ ?>