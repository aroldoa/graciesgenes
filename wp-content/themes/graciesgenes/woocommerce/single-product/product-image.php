<?php
/**
 * Single Product Image
 *
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     2.0.14
 */

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

global $post, $woocommerce, $product;

?>
<div class="images">

	<?php
		if ( has_post_thumbnail() ) {

			$image_title 		= esc_attr( get_the_title( get_post_thumbnail_id() ) );
			$image_link  		= wp_get_attachment_url( get_post_thumbnail_id() );
			$image       		= get_the_post_thumbnail( $post->ID, apply_filters( 'single_product_large_thumbnail_size', 'shop_single' ), array(
				'title' => $image_title,
				'id'	=> 'zoom'
				) );

			//first we need to get the url of the image
			$image_url = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'shop_single');

			//we need to remove the default size in order to replace with larger image for zoom
			$large_image = explode("338x504", $image_url[0]);
			$large_image_url = $large_image[0] . '716x1024' . $large_image[1];

			//we need to add the data attribute that the jquery plugin needs for zoom
			$image_tag = explode("<img",$image);
			$image_tag_data_attr = 'data-zoom-image="'. $large_image_url .'" ';

			//put everything back together ($image_tag[1] contains the rest of the img tag)
			$image = '<img ' . $image_tag_data_attr . $image_tag[1];

			
			$attachment_count   = count( $product->get_gallery_attachment_ids() );

			if ( $attachment_count > 0 ) {
				$gallery = '[product-gallery]';
			} else {
				$gallery = '';
			}

			echo apply_filters( 'woocommerce_single_product_image_html', sprintf( '<a href="%s" itemprop="image" class="woocommerce-main-image zoom" title="%s" data-rel="prettyPhoto' . $gallery . '">%s</a>', $image_link, $image_title, $image), $post->ID );

		} else {

			echo apply_filters( 'woocommerce_single_product_image_html', sprintf( '<img src="%s" alt="Placeholder" />', wc_placeholder_img_src() ), $post->ID );

		}
?>

	<?php do_action( 'woocommerce_product_thumbnails' ); ?>

</div>