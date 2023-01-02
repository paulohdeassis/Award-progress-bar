<?php


if( !defined('ABSPATH') ) {
      die('You cannot be here');
}

use Carbon_Fields\Container;
use Carbon_Fields\Field;

add_action('after_setup_theme', 'load_carbon_fields');
add_action('carbon_fields_register_fields', 'create_options_page');

function load_carbon_fields() {
      \Carbon_Fields\Carbon_Fields::boot();
}

function crb_values_are_avail() {
    
      //get all data free shipping options
      $isFreeShippingActive = get_plugin_options('free_shipping_toggle');
      $freeShippingIcentiveMessage = get_plugin_options('free_shipping_incentive_message');
      $freeShippingPurchaseMessage = get_plugin_options('free_shipping_purchase_message');
      $freeShippingSuccessMessage = get_plugin_options('free_shipping_success_message');
 

      // // get all data from award options 
      $isAwardActive = get_plugin_options('award_toggle');
      $awardProductSku = get_plugin_options('award_product_sku');
      $awardMInPurchaseAmount = get_plugin_options('award_min_purchase');
      $awardIncentiveMessage= get_plugin_options('award_incentive_message');
      $awardPurchaseMessage = get_plugin_options('award_purchase_message');
      $awardSucessMessage = get_plugin_options('award_success_message');
}

add_action('after_setup_theme', 'load_carbon_fields');
add_action('carbon_fields_register_fields', 'create_options_page');
add_action( 'carbon_fields_fields_registered', 'crb_values_are_avail' );


function get_min_amount() {
      $min_amount = get_option( 'woocommerce_free_shipping_amount' );
     echo $min_amount;
};

function create_options_page() {     
     
      Container::make('theme_options', __('Award Progress Bar'))

            ->set_page_menu_position(30)

            ->set_icon('dashicons-awards')

            ->add_tab( __( 'Frete Grátis' ), array(
                  Field::make( 'html', 'crb_html', __( 'information' ) )
	                  ->set_html('<h4> Essa opção só funcionará corretamente se houver um valor mínimo para frete grátis configurado na sua loja.
                              <br> Caso tenha dúvida sobre como fazer isso, siga <a href="https://woocommerce.com/document/frete-gratis/" target="blank"> esse tutorial </a> </h4>'),
                  Field::make( 'checkbox', 'free_shipping_toggle', __( 'Ativado ? ' ) )
                  ->set_option_value( 'true' ),  
                  Field::make('textarea', 'free_shipping_incentive_message', __('Mensagem de incentivo'))
                        ->set_attribute('placeholder', 'frete grátis em compras acima de R$600,00. ')
                              ->set_help_text('Uma mensagem que incentive o seu usuário a aproveitar o frete grátis.'),
                  Field::make('textarea', 'free_shipping_purchase_message', __('Mensagem de valor restante'))
                        ->set_attribute('placeholder', 'Faltam R$100,00 para você garantir o seu frete grátis.')
                              ->set_help_text('Uma mensagem que incentive o seu usuário a continuar comprando'),
                  Field::make('textarea', 'free_shipping_success_message', __('Mensagem de sucesso'))
                        ->set_attribute('placeholder', 'Parabéns! Você obteve frete grátis!')
                              ->set_help_text('Uma mensagem para parabenizar o seu usuário por ter alcançado o frete grátis.'),
       
       
    ) )
    ->add_tab( __( 'Brinde' ), array(
      Field::make( 'checkbox', 'award_toggle', __( 'Ativado ? ' ) )
      ->set_option_value( 'true' ), 
      Field::make('text', 'award_min_purchase', __('Valor mínimo para  ganhar o prêmio'))
      ->set_attribute('placeholder', 'ex: R$600,00 '), 
      Field::make('text', 'award_product_sku', __('SKU do produto de brinde'))
            ->set_attribute('placeholder', '0000001'),
      Field::make('textarea', 'award_incentive_message', __('Mensagem de incentivo'))
            ->set_attribute('placeholder', 'Prêmios especiais para compras acima de R$600,00 ')
                  ->set_help_text('Uma mensagem que incentive o seu usuário a aproveitar o brinde.'),
      Field::make('textarea', 'award_purchase_message', __('Mensagem de valor restante'))
            ->set_attribute('placeholder', 'Faltam R$100,00 para você garantir o seu brinde.')
                  ->set_help_text('Uma mensagem que incentive o seu usuário a continuar comprando'),
      Field::make('textarea', 'award_success_message', __('Mensagem de sucesso'))
            ->set_attribute('placeholder', 'Parabéns! Você obteve brinde!')
                  ->set_help_text('Uma mensagem para parabenizar o seu usuário por ter alcançado o brinde.'),

    ) );

    crb_values_are_avail();
    
} 

// add_action( 'carbon_fields_fields_registered', 'crb_values_are_avail' );
// function crb_values_are_avail() {
//     echo carbon_get_theme_option( 'award_toggle' );
// }

