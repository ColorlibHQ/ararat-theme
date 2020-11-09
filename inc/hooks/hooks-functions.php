<?php 
// Block direct access
if( !defined( 'ABSPATH' ) ){
	exit( 'Direct script access denied.' );
}
/**
 * @Packge 	   : Ararat
 * @Version    : 1.0
 * @Author 	   : Colorlib
 * @Author URI : http://colorlib.com/wp/
 *
 */
 
	// Before wrapper Preloader
	if( !function_exists('ararat_site_preloader') ){
		function ararat_site_preloader(){
			if( ararat_opt('ararat-preloader-toggle-settings') ):
			?>
		    <div id="preloader">
		        <div class="ararat-preloader"></div>
		    </div>
			<?php
			endif;
		}
	}

	// Header menu hook function
	if( !function_exists( 'ararat_header_cb' ) ){
		function ararat_header_cb(){
			get_template_part( 'templates/header', 'top' );

			if( !is_page_template( 'template-builder.php' ) ){
				get_template_part( 'templates/header', 'bottom' );
			}
		}
	}

	// Footer area hook function
	if( !function_exists( 'ararat_footer_area' ) ){
		function ararat_footer_area(){
			$footer_class  = ararat_opt( 'ararat_footer_widget_toggle' ) == 1 ? 'footer' : 'footer no-widget';
			$bg_img = '';
			$footer_bg_opt = ararat_meta( 'footer-background' );
			if( $footer_bg_opt ) {
				$bg_img = $footer_bg_opt['image'];
				$footer_class .= $bg_img == '' ? ' footer_bg' : '';
				echo '<footer class="'.esc_attr( $footer_class ).'" style="'.ararat_get_styles_from_meta( $footer_bg_opt ).'">';
			} else {
				$footer_class .= $bg_img == '' ? ' footer_bg' : '';
				echo '<footer class="'.esc_attr( $footer_class ).'">';
			}

			// Footer top
			if( ararat_opt( 'ararat_footer_widget_toggle' ) ){
				get_template_part( 'templates/footer', 'top' );
			}
			
			// Footer bottom
			get_template_part( 'templates/footer', 'bottom' );	
			echo '</footer>';
		}
	}


	// Blog, single, page, search, archive pages wrapper start hook function.
	if( !function_exists('ararat_wrp_start_cb') ){
		function ararat_wrp_start_cb(){
			$ararat_wrp_start_class = is_home() ? ' blog_area' : ' search-page';
			echo '<section class="section-padding'.esc_attr($ararat_wrp_start_class).'"><div class="container"><div class="row">';
		}
	}
	// Blog, single, page, search, archive pages wrapper end hook function.
	if( !function_exists('ararat_wrp_end_cb') ){
		function ararat_wrp_end_cb(){
			echo '</div></div></section>';
		}
	}
	// Blog, single, search, archive pages column start hook function.
	if( !function_exists('ararat_blog_col_start_cb') ){
		function ararat_blog_col_start_cb(){
			
			$sidebarOpt = ararat_sidebar_opt();
								
			//
			if( !is_page() ){
				$pullRight  = ararat_pull_right( $sidebarOpt , '3' );

				if( $sidebarOpt != '1' ){
					$col = '8'.$pullRight;
				}else{

					if( !is_single() ){
						$col = '12';
					}else{
						$col = '10 offset-lg-1';
					}

				}
			}else{
				$col = '8';
				
			}

			// single page should be p-b-80
			echo '<div class="col-lg-8 mb-5 mb-lg-0"><div class="blog_left_sidebar">';
		}
	}
	// Blog, single, search, archive pages column end hook function.
	if( !function_exists('ararat_blog_col_end_cb') ){
		function ararat_blog_col_end_cb(){
			echo '</div></div>';
		}
	}

	// Blog post thumbnail hook function.
	if( !function_exists('ararat_blog_posts_thumb_cb') ){
		function ararat_blog_posts_thumb_cb(){
			// Thumbnail Show
			if( has_post_thumbnail() ){
						
				if( !is_single() ){
				
					$html = '';
					$html .= '<div class="blog_item_img">';
					$html .= '<a href="'.esc_url( get_the_permalink() ).'" class="item-blog-img pos-relative dis-block hov-img-zoom">';
					$html .= ararat_img_tag(
						array(
							'url' => esc_url( get_the_post_thumbnail_url() ),
							'class' => 'card-img rounded-0 wp-post-image'
						)
					);
					$html .= '</a>';
					$html .= '<a href="'. esc_url( ararat_blog_date_permalink() ) .'" class="blog_item_date"><h3>'.  get_the_time( 'd' ) .'</h3><p>'. get_the_time('M') .'</p></a>';
					$html .= '</div>';
				
				}else{
					
					$html = '';
					$html .= '<div class="blog-post-thumb">';
					$html .= ararat_img_tag(
						array(
							'url' => esc_url( get_the_post_thumbnail_url() ),
							'class' => 'card-img rounded-0 wp-post-image'
						)
					);
					$html .= '</div>';

				}
				echo wp_kses_post( $html );
				

			}
			// Thumbnail check and video and audio thumb show
			if( !is_single() && !has_post_thumbnail() ){
				$html = '';
				if( has_post_format( array( 'video' ) ) ){
					
					$html .= '<div class="blog-post-thumb">';
					$html .= ararat_embedded_media( array( 'video', 'iframe' ) );
					$html .= '</div>';

				}else{

					if( has_post_format( array( 'audio' ) ) ){
						
						$html .= '<div class="blog-post-thumb">';
						$html .= ararat_embedded_media( array( 'audio', 'iframe' ) );
						$html .= '</div>';
					}
				}
				
				echo apply_filters( 'ararat_audio_embedded_media', $html );

			}
		}
	}

	// Blog details wrapper start hook function.
	if( !function_exists('ararat_blog_details_wrap_start_cb') ){
		function ararat_blog_details_wrap_start_cb(){

			echo '<div class="blog_details">';
		}
	}
	// Blog details wrapper end hook function.
	if( !function_exists('ararat_blog_details_wrap_end_cb') ){
		function ararat_blog_details_wrap_end_cb(){
			echo '</div>';
		}
	}

	// Blog post title hook function.
	if( !function_exists('ararat_blog_posts_title_cb') ){
		function ararat_blog_posts_title_cb(){
			if( get_the_title() ){

				$html = '';
				if( !is_single() ){
					$html .= '<a class="d-inline-block" href="'.esc_url( get_the_permalink() ).'"><h2 class="p_title">'.esc_html( get_the_title() ).'</h2></a>';
				}else{
					$html .= '<h2 class="p_title">'.esc_html( get_the_title() ).'</h2>';
				}
				
				echo wp_kses_post( $html );

			}
		}
	}

	// Blog posts meta hook function.
	if( !function_exists('ararat_blog_posts_meta_cb') ){
		function ararat_blog_posts_meta_cb(){

			echo '<div class="post-meta"><h6>';
			// Author
			if( get_the_author() ){
				echo esc_html__( 'By ', 'ararat' ).'<a href="'.esc_url( get_author_posts_url( get_the_author_meta('ID') ) ).'">'.esc_html( get_the_author() ).',</a>';
			}
			// Date
			if( get_the_date() ){
				$postData = '<a href="'.esc_url( ararat_blog_date_permalink() ).'">'.esc_html( get_the_date() ).',</a>';
				echo wp_kses_post( $postData );
			}
			
			// Post category
			$cats = get_the_category();
			$categories = '';
			if( is_array( $cats ) && count( $cats ) > 0 ){
				
				foreach( $cats as $cat ){
				   $categories .= '<a href="'.esc_url( get_category_link( $cat->term_id ) ).'" class="category-link">'.esc_html( $cat->name ).',</a>';
				}
			}
							
			echo wp_kses_post( $categories );

			comments_popup_link( esc_html__( '0 Comment', 'ararat' ), esc_html__( '1 Comment','ararat' ), esc_html__('% Comments','ararat'));
			
			$featured = '';
			if( is_sticky() ){
				$featured = '<span class="featured">'.esc_html__( 'Featured', 'ararat' ).'</span>';
			}

			echo '</h6>'.wp_kses_post( $featured ).'</div>';

		
			
		}
	}

	// Blog posts excerpt hook function.
	if( !function_exists('ararat_blog_posts_excerpt_cb') ){
		function ararat_blog_posts_excerpt_cb(){
			?>
			<div class="blog-postexcerpt">
				<?php 
				// Post excerpt
				echo ararat_excerpt_length( esc_html( ararat_opt('ararat_excerpt_length') ) );

				// Link Pages
				ararat_link_pages();
				?>
			</div>			
			<?php
		}
	}

	// Blog read more hook function.
	if( !function_exists('ararat_blog_read_more_cb') ){
		function ararat_blog_read_more_cb(){
			?>
			<a href="<?php the_permalink(); ?>">
				<?php esc_html_e( 'Read More', 'ararat' ); ?>
			</a>			
			<?php
		}
	}

	// Blog posts info links hook function.
	if( !function_exists('ararat_blog_posts_info_link_cb') ){
		function ararat_blog_posts_info_link_cb(){
			if( ararat_opt( 'ararat_blog_meta' ) == 1 ) {
				$ararat_blog_info_link_class = is_single() ? 'blog-info-link mt-3 mb-4' : 'blog-info-link';
				?>
				<ul class="<?php echo esc_attr( $ararat_blog_info_link_class )?>">
					<li><i class="fa fa-tags"></i> <?php echo ararat_featured_post_cat(); ?></li>
					<li><i class="ti-comments"></i> <?php echo ararat_posted_comments(); ?></li>
				</ul>
				<?php
			}
		}
	}

	// Blog posts content hook function.
	if( !function_exists('ararat_blog_posts_content_cb') ){
		function ararat_blog_posts_content_cb(){

				the_content();
				// Link Pages
				ararat_link_pages();


		}
	}

	// Page content hook function.
	if( !function_exists('ararat_page_content_cb') ){
		function ararat_page_content_cb(){
			?>
			<div class="page--content single-blog">
				<?php 
				the_content();

				// Link Pages
				ararat_link_pages();
				?>

			</div>
			<?php
			// comment template.
			if ( comments_open() || get_comments_number() ) {
				comments_template();
			}
		}
	}

	// Blog page sidebar hook function.
	if( !function_exists('ararat_blog_sidebar_cb') ){
		function ararat_blog_sidebar_cb(){
			
			// $sidebarOpt = ararat_sidebar_opt();
					
			// if( $sidebarOpt != '1'  || is_page()  ){
				get_sidebar();
			// }
			
				
		}
	}


	// Blog single post  social share hook function.
	if( !function_exists('ararat_blog_posts_share_cb') ){
		function ararat_blog_posts_share_cb(){
			?>
			<div class="navigation-top">
				<?php
				if( ararat_opt('ararat_like_btn') == 1 || ararat_opt('ararat_blog_share') == 1 ) {
					?>
					<div class="d-sm-flex justify-content-between text-center">
						<?php
						if ( ararat_opt( 'ararat_like_btn' ) == 1 ) {
							echo get_simple_likes_button( get_the_ID() );
						}

						if ( ararat_opt( 'ararat_blog_share' ) == 1 ) {
							echo ararat_social_sharing_buttons( 'social-icons' );
						}
						?>
					</div>

					<?php
				}

				// Post Navigation
				ararat_blog_single_post_navigation(); ?>
			</div>	
			<?php	
		}
	}


	/**
	 * Blog single post meta category, tag, next-previous link, comments form and biography hook function.
	 */
	if( !function_exists('ararat_blog_single_meta_cb') ){
		function ararat_blog_single_meta_cb(){
						
			$tags = ararat_post_tags();
	
			if( $tags ){
				echo '<div class="wrap-tags">';
					echo '<span class="tag-title">'.esc_html__( 'Post Tags:', 'ararat' ).'</span>';
					echo '<div class="tags-items">';
					// single post tag
					echo wp_kses_post( $tags );
					
					echo '</div>';
				echo '</div>';
			}

			// Author biography
			if( '' !== get_the_author_meta('description') ){
				get_template_part( 'templates/biography' );
			}
	
		}
	}

	// Blog 404 page hook function.
	if( !function_exists('ararat_fof_cb') ){
		function ararat_fof_cb(){
			get_template_part( 'templates/404' );			
		}
	}



?>