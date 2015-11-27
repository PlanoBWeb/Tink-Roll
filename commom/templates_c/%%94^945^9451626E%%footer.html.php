<?php /* Smarty version 2.6.12, created on 2015-11-27 10:14:34
         compiled from ../inc/footer.html */ ?>
<footer>
    <article class="bloco-footer">
        <div class="col-xs-12 col-sm-4 col-md-4 bloco-conteudo-footer hidden-xs">
            <a href="<?php echo $this->_tpl_vars['URL']; ?>
home" class="logo-footer" alt="Tink Roll"><img src="<?php echo $this->_tpl_vars['URL']; ?>
commom/img/logo.png" alt="Tink Roll" title="Tink Roll"></a>
            <!-- <p class="txt-desta-default">Nossos produtos:</p> -->
            <ul>
                <li class="linha-menu-rodape"><a href="<?php echo $this->_tpl_vars['URL']; ?>
institucional" class="link-menu-rodape">Institucional</a></li>
                <li class="linha-menu-rodape"><span href="<?php echo $this->_tpl_vars['URL']; ?>
" class="link-menu-rodape"> | </span></li>
                <li class="linha-menu-rodape"><a href="<?php echo $this->_tpl_vars['URL']; ?>
produtos" class="link-menu-rodape">Produtos</a></li>
                <li class="linha-menu-rodape"><span href="<?php echo $this->_tpl_vars['URL']; ?>
" class="link-menu-rodape"> | </span></li>
                <li class="linha-menu-rodape"><a href="<?php echo $this->_tpl_vars['URL']; ?>
marcas" class="link-menu-rodape">Marcas</a></li>
                <li class="linha-menu-rodape"><span href="<?php echo $this->_tpl_vars['URL']; ?>
" class="link-menu-rodape"> | </span></li>
                <li class="linha-menu-rodape"><a href="<?php echo $this->_tpl_vars['URL']; ?>
noticias" class="link-menu-rodape">Notícias</a></li>
                <li class="linha-menu-rodape"><span href="<?php echo $this->_tpl_vars['URL']; ?>
" class="link-menu-rodape"> | </span></li>
                <li class="linha-menu-rodape"><a href="<?php echo $this->_tpl_vars['URL']; ?>
localizacao" class="link-menu-rodape">Localização</a></li>
                <li class="linha-menu-rodape"><span href="<?php echo $this->_tpl_vars['URL']; ?>
" class="link-menu-rodape"> | </span></li>
                <li class="linha-menu-rodape"><a href="<?php echo $this->_tpl_vars['URL']; ?>
fale-conosco" class="link-menu-rodape">Contato</a></li>
                <!-- <li class="linha-menu-rodape"><a href="<?php echo $this->_tpl_vars['URL']; ?>
" class="link-menu-rodape"></a></li> -->
            </ul>
        </div>
        <div class="col-xs-12 col-sm-4 col-md-4 bloco-conteudo-footer">
            <p class="titulo-sobre"><img src="<?php echo $this->_tpl_vars['URL']; ?>
commom/img/icon-msg.png" class="icone-rodape" alt="contato" title="contato">contato</p>
            <div class="encapsula-txt-contato">
                <a href="tel:01134290600" class="link-contato-footer">(11) 3429-0600</a>
                <a href="tel:01129461300" class="link-contato-footer">/ 2946-1300 </a><br>
                <a href="mailto:tinkroll@tinkroll.com.br" class="link-contato-footer">tinkroll@tinkroll.com.br</a>
            </div>
            <p class="titulo-sobre"><img src="<?php echo $this->_tpl_vars['URL']; ?>
commom/img/icon-local.png" class="icone-rodape" alt="LOcalização" title="LOcalização">LOcalização</p>
            <div class="encapsula-txt-contato">
                <p class="link-contato-footer">Rua Bertolina Maria, 54</p>
                <p class="link-contato-footer">Vila Vermelha - São Paulo</p>
                <p class="link-contato-footer">CEP: 04298-090</p>
            </div>
        </div>
        <div class="col-xs-12 col-sm-4 col-md-4 bloco-conteudo-footer">
            <p class="titulo-sobre"><img src="<?php echo $this->_tpl_vars['URL']; ?>
commom/img/icon-aceita.png" class="icone-rodape" alt="Aceitamos todos os cartões de crédito" title="Aceitamos todos os cartões de crédito">Aceitamos todos os cartões de crédito</p>
            <img class="cartoes" src="<?php echo $this->_tpl_vars['URL']; ?>
commom/img/cartoes.png" alt="Aceitamos todos os cartões de crédito" title="Aceitamos todos os cartões de crédito">
        </div>
    </article>
</footer>
<div class="direitos">
    <div class="encapsula-direitos">
        <div class="col-xs-12 col-sm-6 col-md-6">
            <br>
            <p class="txt-direitos">© Tink Roll - 2015 - Todos os direitos reservados</p>
        </div>        
        <div class="col-xs-12 col-sm-6 col-md-6">
            <a href="http://www.planobweb.com.br/" target="_blank"><img class="img-planob pull-right" src="<?php echo $this->_tpl_vars['URL']; ?>
commom/img/planob.png" title="PlanoBWeb" alt="PlanoBWeb"></a>
            <p class="txt-direitos txt-dev pull-right">Desenvolvimento:</p>
        </div>        
    </div>
</div>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="<?php echo $this->_tpl_vars['URL']; ?>
commom/js/bootstrap.min.js"></script>
<script src="<?php echo $this->_tpl_vars['URL']; ?>
commom/js/funcoes.js"></script>
<!-- vitrine -->
<script src="<?php echo $this->_tpl_vars['URL']; ?>
commom/js/vitrine/owl.carousel.js"></script>
<script src="<?php echo $this->_tpl_vars['URL']; ?>
commom/js/lightbox.js"></script>
<!-- vitrine -->
<?php echo '
    <script>
        $(document).ready(function() {
         $("#owl-demo").owlCarousel({
            navigation : true,
            slideSpeed : 300,
            paginationSpeed : 400,
            singleItem : true
         });
        });
        
        $(\'.busca-mobile\').click(function(){
            if($(\'.search-mobile\').is(":visible")){
                // $(\'.search-mobile\').animate({ width: "toggle" });
                $(\'.search-mobile\').toggle();
            }else{
                $(\'.search-mobile\').toggle();
           }
        });
        $(\'.close-search-mobile\').click(function(){
            $(\'.search-mobile\').toggle();
        });

        function enviarNews()
        {
            d = document.news;

            if(trim(d.nome.value)=="")
            {
                alert("O campo NOME deve ser preenchido!");
                d.nome.focus();
                return false;
            }
            
            if(trim(d.email.value)=="")
            {
                alert("O campo E-MAIL deve ser preenchido!");
                d.email.focus();
                return false;
            }
            
            if(!email(d.email,\'\')) return false;
            
            d.submit();
        }
        

        function enviardados()
        {
            d = document.contato;

            if(trim(d.nome.value)=="")
            {
                alert("O campo NOME deve ser preenchido!");
                d.nome.focus();
                return false;
            }
            
            if(trim(d.email.value)=="")
            {
                alert("O campo E-MAIL deve ser preenchido!");
                d.email.focus();
                return false;
            }
            
            if(!email(d.email,\'\')) return false;

            if(trim(d.telefone.value)=="")
            {
                alert("O campo TELEFONE deve ser preenchido!");
                d.telefone.focus();
                return false;
            }
            
            if(trim(d.msg.value)=="")
            {
                alert("O campo MENSAGEM deve ser preenchido!");
                d.msg.focus();
                return false;
            }

            if(trim(d.onde.value)=="" || trim(d.onde.value)== "Selecione")
            {
                alert("O campo ONDE NOS ENCONTROU deve ser preenchido!");
                d.onde.focus();
                return false;
            }
            
            d.submit();
        }

        $(\'.menuLateralMarca\').change(function(){
            var menuLat = $(\'.menuLateralMarca\').val();
            window.location.href = menuLat;
        });

        $(\'.menuLateralNot\').change(function(){
            var menuLat = $(\'.menuLateralNot\').val();
            window.location.href = menuLat;
        });

        $(\'.menuLatateralProd\').change(function(){
            var menuLat = $(\'.menuLatateralProd\').val();
            window.location.href = menuLat;
        });


    // Vitrine Slides
    $(document).ready(function() {

        //Pega o valor da largura e calcular o valor da posição da esquerda
        var item_width = $(\'.produto-vitrine\').outerWidth();
        var left_value = item_width * (-1);
 
        //Coloca o último item antes do primeiro item, caso o usuário clique no botão de ANTERIOR
        $(\'.produto-vitrine:first\').before($(\'.produto-vitrine:last\'));
         
        //Coloca o item atual na posição correta
        $(\'.encapsula-produto-vitrine\').css({\'left\' : left_value});
         
        //Se o usuário clica no botão ANTERIOR
        $(\'#prev\').click(function() {
            //Pega a posição da direita
            var left_indent = parseInt($(\'.encapsula-produto-vitrine\').css(\'left\')) + item_width;
             
            //Move o item
            $(\'.encapsula-produto-vitrine\').animate({\'left\' : left_indent}, 200,function(){
             
                //Move o último item e o coloca como o primeiro
                $(\'.produto-vitrine:first\').before($(\'.produto-vitrine:last\'));
                 
                //Coloca o item atual na posição correta
                $(\'.encapsula-produto-vitrine\').css({\'left\' : left_value});
            });
         
        //Cancela o comportamento do click
        return false;
        });

            //Se o usuário clica no botão PROXIMO
        $(\'#next\').click(function() {
                
            //Pega a posição da direita
            var left_indent = parseInt($(\'.encapsula-produto-vitrine\').css(\'left\')) - item_width;
             
            //Move o item
            $(\'.encapsula-produto-vitrine\').animate({\'left\' : left_indent}, 200, function () {
             
                //Move o último item e o coloca como o primeiro
                $(\'.produto-vitrine:last\').after($(\'.produto-vitrine:first\'));
                 
                //Coloca o item atual na posição correta
                $(\'.encapsula-produto-vitrine\').css({\'left\' : left_value});
                 
            });
             
            //Cancela o comportamento do click
            return false;
         
        });
 
    });

    $(\'.ano-menu-lateral\').click(function(){
        menu = $(this).next(\'.encapsula-mes-ano\');
        if($(\'.submenu-produto-lateral\').is(\':visible\')){
            $(\'.submenu-produto-lateral\').hide();   
        }else{
            $(menu).toggle();       
        }
    });

    // Ajax Busca Desktop
    $(document).ready(function(){
        $("#buscaValor").keyup(function(){
            var valorBusca = $(\'#buscaValor\').val();
            var min_length = 0;
            var contaValor = $(\'#buscaValor\').val().length;

            if (contaValor != min_length) {

                $.ajax({
                type: "POST",
                url: "http://tinkroll.com.br/Homologacao/produtos/",
                // data:\'busca=\'+$(this).val(),
                data: {search: valorBusca, buscaAjax: "buscaAjax"},
          
                    success: function(data){
                        $("#carrega-busca").show();
                        $("#carrega-busca").html(data);
                        $("#buscaValor").css("background","#FFF");
                    }
                });
            }else{
                  $(\'#carrega-busca\').hide();
            }
        });
    });

    $(\'#carrega-busca\').on(\'click\',\'.selectProduto\', function(){
        var valorTxtBusca = $(this).text();

        $("#buscaValor").val(valorTxtBusca);
        $("#carrega-busca").hide();
        
    });


    // Ajax Busca Mobile
    //url: "http://tinkroll.com.br/Homologacao/produtos/",
    $(document).ready(function(){
        $("#buscaValorMobile").keyup(function(){
            var valorBusca = $(\'#buscaValorMobile\').val();
            var min_length = 0;
            var contaValor = $(\'#buscaValorMobile\').val().length;

            if (contaValor != min_length) {

                $.ajax({
                type: "POST",
                url: "http://tinkroll.com.br/Homologacao/produtos/",
                // data:\'busca=\'+$(this).val(),
                data: {search: valorBusca, buscaAjax: "buscaAjax"},
          
                    success: function(data){
                        $("#carrega-busca-Mobile").show();
                        $("#carrega-busca-Mobile").html(data);
                        $("#buscaValorMobile").css("background","#FFF");
                    }
                });
            }else{
                  $(\'#carrega-busca-Mobile\').hide();
            }
        });
    });

    $(\'#carrega-busca-Mobile\').on(\'click\',\'.selectProduto\', function(){
        var valorTxtBusca = $(this).text();

        $("#buscaValorMobile").val(valorTxtBusca);
        $("#carrega-busca-Mobile").hide();
        
    });

    </script>
'; ?>