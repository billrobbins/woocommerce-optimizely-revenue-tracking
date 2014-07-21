	// Add optimizely revenue tracking 
		function optimizely_revenue_tracking( $order_id ) {
		 
			$order = new WC_Order( $order_id );
			 
			echo ('
			
			<!-- Optimizely Tracking -->
			
			<script>
			
				var price='.$order->get_order_total().';
			
				window.optimizely = window.optimizely || [];
				window.optimizely.push(["trackEvent", "eventName", {"revenue": price * 100}]);
			
			</script>
			
			
			');
		 
		}
		add_action( 'woocommerce_thankyou', 'optimizely_revenue_tracking' );
