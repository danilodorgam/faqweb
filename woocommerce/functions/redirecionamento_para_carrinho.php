<?php
		//função para redirecionar usuário direto pro carrinho
   	add_filter ('add_to_cart_redirect', 'redirecionar_para_carrinho');
   	 
   	function redirecionar_para_carrinho() {
       //carinho
       return WC()->cart->get_cart_url();
       //página de finalização de pedido
       // return WC()->cart->get_checkout_url();
       //enviar para uma pagina da sua loja
       //return get_permalink(1213);
   	}
