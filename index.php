
<!DOCTYPE html>
<head>
  <meta charset="utf-8" />
  <meta name="description" content="jQuery-Mask-Plugin - Um plugin de jQuery para fazer máscaras de campo / A jQuery plugin to make field masks" />
  <meta name="author" content="Rendesson Santos" />
  <title>jQuery Mask Plugin - Um Plugin jQuery para fazer máscaras em campos de formulário e elementos html. / A jQuery Plugin to make masks in form fields and html elements.</title>

  <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css" media="screen">
  <link rel="stylesheet" href="https://yandex.st/highlightjs/7.3/styles/default.min.css">

  <link href='https://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>
  <!-- <link href='https://fonts.googleapis.com/css?family=Droid+Sans' rel='stylesheet' type='text/css'> -->
  <!-- <link href='https://fonts.googleapis.com/css?family=Cabin+Condensed' rel='stylesheet' type='text/css'> -->
  <style type="text/css">
    * {font-family: 'Lato', sans-serif;}
    .container {width:773px;}
    h1 {margin-bottom:10px}
    h1 .jq-label {font-size: 35px; color: #CFCFCF; display:block;margin:21px 2px 40px 13px;}
    h1 .plugin-name {font-size:140px; color: #6BBEC7;}
    span.subtitle {margin-bottom:20px;}
    div#examples div.col {width:246px;float:left;}

    div#examples div.col.center {text-align:center;}
    div#examples div.col.center.banner {border: 1px solid #ccc; padding:15px; margin-top:24px;}

    pre {overflow-x: auto; white-space:pre; word-wrap:normal; font-size:12px;}
  </style>
</head>
<body>
  <div class="container">
  <h1><span class="jq-label">jQuery</span> <span class="plugin-name">Mask Plugin</span></h1>
  <span class="subtitle">Um Plugin jQuery para fazer máscaras em campos de formulário e elementos html.</span> <br />
  <span class="subtitle">A jQuery Plugin to make masks in form fields and html elements.</span> <br /> <br />

  <!-- Place this tag where you want the button to render. -->
  <a class="github-button" href="https://github.com/rendessonsantos/jQuery-Mask-Plugin" data-icon="octicon-star" data-style="mega" data-count-href="/rendessonsantos/jQuery-Mask-Plugin/stargazers" data-count-api="/repos/rendessonsantos/jQuery-Mask-Plugin#stargazers_count" data-count-aria-label="# stargazers on GitHub" aria-label="Star rendessonsantos/jQuery-Mask-Plugin on GitHub">Star</a>&nbsp;

  <!-- Place this tag where you want the button to render. -->
  <a class="github-button" href="https://github.com/rendessonsantos/jQuery-Mask-Plugin/archive/master.zip" data-icon="octicon-cloud-download" data-style="mega" aria-label="Download rendessonsantos/jQuery-Mask-Plugin on GitHub">Download</a>&nbsp;

  <!-- Place this tag where you want the button to render. -->
  <a class="github-button" href="https://github.com/rendessonsantos" data-style="mega" data-count-href="/rendessonsantos/followers" data-count-api="/users/rendessonsantos#followers" data-count-aria-label="# followers on GitHub" aria-label="Follow @rendessonsantos on GitHub">Siga @rendessonsantos</a>&nbsp;

  <h2>Demonstrações / Demonstrations</h2>
  <div id="examples">
    <div class="col">
      <label>Data / Date</label>
      <input type="text" class="date"/>
      <label>Hora / Hour</label>
      <input type="text" class="time"/>
      <label>Data & Hora / Date & Hour</label>
      <input type="text" class="date_time"/>
      <label>CEP / Zip-Code</label>
      <input type="text" class="cep"/>
      <label>Máscara com placeholder / Mask placeholder option</label>
      <input type="text" class="placeholder"/>
      <label>Telefone com código de área / Telephone with Code Area</label>
      <input type="text" class="phone_with_ddd"/>
      <label>Misto (Telefone/Celular) / Mixed (Telephone/Celphone)</label>
      <input type="text" class="sp_celphones"/>
      <label>Telefone EUA / USA Telephone</label>
      <input type="text" class="phone_us"/>
      <label>Máscara em elemento Div / Masks on div elements!</label>
      <div class="mask-on-div">12345678909</div> <input type="button" class="bt-mask-it" value="Mask it!"/>
    </div>
    <div class="col">
      <label>CPF</label>
      <input type="text" class="cpf"/>
      <label>CNPJ</label>
      <input type="text" class="cnpj"/>
      <label>Misto (CPF/CNPJ) / Mixed (CPF/CNPJ)</label>
      <input type="text" class="cpfcnpj"/>
      <label>Endereço IP / IP Address</label>
      <input type="text" class="ip_address"/>
      <label>Dinheiro / Money</label>
      <input type="text" class="money"/>
      <label>Máscara com opção de ClearIfNotMatch / Mask with ClearIfNotMatch Option</label>
      <input type="text" class="clear-if-not-match"/>
      <label>Máscara com um dígito de Fallback / Mask with a Fallback Digit</label>
      <input type="text" class="fallback"/>
      <label>Máscara com selectOnFocus / Mask with selectOnFocus</label>
      <input type="text" class="selectonfocus"/>
    </div>
    <div class="col center banner">
    <h4>jQuery Mask Plugin</h4>
      <p>O <a href="https://rendessonsantos.github.com/jQuery-Mask-Plugin/">jQuery Mask Plugin</a> foi adaptado por <a href="http://www.rendessonsantos.rvcompany.com.br/" rel="author" target="_blank">Rendesson Santos</a> e o código fonte está disponível no <a href="https://github.com/rendessonsantos/jQuery-Mask-Plugin" target="_blank">GitHub</a>.</p>
      <p>The <a href="https://rendessonsantos.github.com/jQuery-Mask-Plugin/">jQuery Mask Plugin</a> was adapted by <a href="http://www.rendessonsantos.rvcompany.com.br/" rel="author" target="_blank">Rendesson Santos</a> and the source-code's available in <a href="https://github.com/rendessonsantos/jQuery-Mask-Plugin" target="_blank">GitHub</a>.</p>
      <br>
      <p>Acesse a versão anterior clicando <a href="https://jsfiddle.net/rvpsantos/n26f8dwz/15/" target="_black">aqui</a>. <br>
      Access to previous version by clicking <a href="https://jsfiddle.net/rvpsantos/n26f8dwz/15/" target="_black">here</a>.</p>
      <br>
      <p>
        <h4>Documentação / Documentation</h4>
        Escolha o idioma. / Choose the language. <br/>
        <form action="" method="post">
          <select name="idioma" id="">
            <option value="">Selecione / Select</option>
            <option value="pt">Português / Portuguese</option>
            <option value="en">Inglês / English</option>
          </select><br>
          <input type="submit" name="acessar" value="Acessar / Access">
        </form>
      </p>
    </div>
  </div>
  <br clear="all"/><br clear="all"/><br clear="all"/>
      <br>

<script src="https://yandex.st/highlightjs/7.3/highlight.min.js"></script>
<script type="text/javascript" src="https://code.jquery.com/jquery-latest.min.js"></script>
<script async defer src="https://buttons.github.io/buttons.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/jquery.mask.min.js"></script>

<script type="text/javascript">
  $(function() {
    $('.date').mask('00/00/0000');
    $('.time').mask('00:00:00');
    $('.date_time').mask('00/00/0000 00:00:00');
    $('.cep').mask('00000-000');
    $('.phone').mask('0000-0000');
    $('.phone_with_ddd').mask('(00) 0000-0000');
    $('.phone_us').mask('(000) 000-0000');
    $('.mixed').mask('AAA 000-S0S');
    $('.ip_address').mask('099.099.099.099');
    $('.percent').mask('##0,00%', {reverse: true});
    $('.clear-if-not-match').mask("00/00/0000", {clearIfNotMatch: true});
    $('.placeholder').mask("00/00/0000", {placeholder: "__/__/____"});

    $('.fallback').mask("00r00r0000", {
      translation: {
        'r': {
          pattern: /[\/]/,
          fallback: '/'
        },
        placeholder: "__/__/____"
      }
    });

    $('.selectonfocus').mask("00/00/0000", {selectOnFocus: true});

    $('.cep_with_callback').mask('00000-000', {onComplete: function(cep) {
        console.log('Mask is done!:', cep);
      },
       onKeyPress: function(cep, event, currentField, options){
        console.log('An key was pressed!:', cep, ' event: ', event, 'currentField: ', currentField.attr('class'), ' options: ', options);
      },
      onInvalid: function(val, e, field, invalid, options){
        var error = invalid[0];
        console.log ("Digit: ", error.v, " is invalid for the position: ", error.p, ". We expect something like: ", error.e);
      }
    });

    $('.crazy_cep').mask('00000-000', {onKeyPress: function(cep, e, field, options){
      var masks = ['00000-000', '0-00-00-00'];
        mask = (cep.length>7) ? masks[1] : masks[0];
      $('.crazy_cep').mask(mask, options);
    }});

    $('.cnpj').mask('00.000.000/0000-00', {reverse: true});
    $('.cpf').mask('000.000.000-00', {reverse: true});
    $('.money').mask('#.##0,00', {reverse: true});

    //Inicio misto telefone/celular
    var SPMaskBehavior = function (val) {
      return val.replace(/\D/g, '').length === 11 ? '(00) 00000-0000' : '(00) 0000-00009';
    },
    spOptions = {
      onKeyPress: function(val, e, field, options) {
          field.mask(SPMaskBehavior.apply({}, arguments), options);
        }
    };

    $('.sp_celphones').mask(SPMaskBehavior, spOptions);
    //Fim misto telefone/celular

    //Inicio misto cpf/cnpj
    var CPFCNPJMaskBehavior = function (val) {
      return val.replace(/\D/g, '').length > 11 ? '00.000.000/0000-00' : '000.000.000-009999';
    },
    CPFCNPJOptions = {
      onKeyPress: function(val, e, field, options) {
          field.mask(CPFCNPJMaskBehavior.apply({}, arguments), options);
        }
    };

    $('.cpfcnpj').mask(CPFCNPJMaskBehavior, CPFCNPJOptions);
    //Fim misto cpf/cnpj

    $(".bt-mask-it").click(function(){
      $(".mask-on-div").mask("000.000.000-00");
      $(".mask-on-div").fadeOut(500).fadeIn(500)
    })

    $('pre').each(function(i, e) {hljs.highlightBlock(e)});
  });
</script>
<?php
  if (isset($_POST['acessar'])) {
    if ($_POST['idioma'] == 'pt') {
      echo "<meta HTTP-EQUIV='refresh' CONTENT='0;URL=docs/documentacao_pt.html'>";
    }elseif ($_POST['idioma'] == 'en') {
      echo "<meta HTTP-EQUIV='refresh' CONTENT='0;URL=docs/documentation_en.html'>";
    }
  }
?>
</body>
</html>
