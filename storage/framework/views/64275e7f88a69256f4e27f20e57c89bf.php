     
     <?php $__env->startSection('titulo', 'Sobre Nós'); ?>
     <?php $__env->startSection('conteudo'); ?>
        
        <div class="conteudo-pagina">
            <div class="titulo-pagina">
                <h1>Olá, eu sou o Super Gestão</h1>
            </div>

            <div class="informacao-pagina">
                <p>O Super Gestão é o sistema online de controle administrativo que pode transformar e potencializar os negócios da sua empresa.</p>
                <p>Desenvolvido com a mais alta tecnologia para você cuidar do que é mais importante, seus negócios!</p>
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
<?php echo $__env->make('site.layouts.basico', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\daniel.cabral\Documents\Code\app_super_gestao\resources\views/site/sobre-nos.blade.php ENDPATH**/ ?>