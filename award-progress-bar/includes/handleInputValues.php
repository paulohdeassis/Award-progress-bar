<?php



// Isso aqui pega os dados para checar se a função  está ativa
// ( get_plugin_options('contact_plugin_active') );

// isso aqui mostra como criar os shortcodes,
// basicamente chama essa função de add shortcode e passa como parâmetros 
// // o nome do shortcode que você quer é a função que vai ser responsável por gerar o retorno dele 
// add_shortcode('min_compra', 'show_contact_form');

// faz o enqueue do css
// add_action('wp_enqueue_scripts', 'enqueue_custom_scripts');

// function enqueue_custom_scripts() {
//       // Enqueue custom css for plugin
//       wp_enqueue_style('contact-form-plugin', MY_PLUGIN_URL . 'assets/css/contact-plugin.css');
// }

if(isset($_POST['publish'])) {
      handle_enquiry();
}

// // no plugin do tutorial isso aqui era chamado como callback ao acessar o endpoint customizado que 
// // foi criado. Aqui a ideia é chamar essa função quando o botão de salvar for clicado. 

function handle_enquiry() {
      // echo get_plugin_options('free_shipping_toggle');

      

      //get all data free shipping options
      // $isFreeShippingActive = get_plugin_options('free_shipping_toggle');
      // $freeShippingIcentiveMessage = get_plugin_options('free_shipping_incentive_message');
      // $freeShippingPurchaseMessage = get_plugin_options('free_shipping_purchase_message');
      // $freeShippingSuccessMessage = get_plugin_options('free_shipping_success_message');

      // // get all data from award options 
      // $IsAwardActive = get_plugin_options('award_toggle');
      // $awardProductSku = get_plugin_options('award_product_sku');
      // $awardMInPurchaseAmount = get_plugin_options('award_min_purchase');
      // $awardIncentiveMessage= get_plugin_options('award_incentive_message');
      // $awardPurchaseMessage = get_plugin_options('award_purchase_message');
      // $awardSucessMessage = get_plugin_options('award_success_message');

      // isso aqui é resquício do plugin anterior, basicamente lida com 
      // a mensagem de sucesso, checkando de uma mensagem de sucesso foi 
      // criada na página de opções e coloca uma mensagem padrão caso ela
      // não exista. Eu preciso fazer uma coisa parecida pra o meu caso de uso.
      // $confirmation_message = "The message was sent successfully!!";

      // // if (get_plugin_options('contact_plugin_message')) {

      // //       $confirmation_message = get_plugin_options('contact_plugin_message');

      // //       $confirmation_message = str_replace('{name}', $field_name, $confirmation_message);
      // }
     
}


