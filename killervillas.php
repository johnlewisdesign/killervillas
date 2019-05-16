function  killer_villas () {
			$bedrooms = ($_GET["beds"]);
			echo '</div></div>';
			echo '<div class="tags" style="clear:both">';
			echo '<div class="liverefresh">';
			echo '<div class="row">';
			echo '<div class="full" style="clear:both;">';

			// Modify get_posts args for your needs 
			$count = 1;
if ($countryName == 'ES') {
				echo '<a href="?beds=3">3 bedroom</a> | <a href="?beds=4">4 bedroom</a> | <a href="?beds=5">5 bedroom</a> | <a href="?beds=6">6 bedroom</a></div></div>';
			$villas = get_posts( array ( 'post_type' => 'accommodation','meta_key' => 'ct_Bedrooms_selectbox_0d0d','meta_value'=> array(3,4,5,6) , 'compare' => '=' , 'type' => 'NUMERIC'));
} else {
			if (strlen ($bedrooms) == 1) {$bedcode = $bedrooms;} else {$bedcode = 'array(' . $bedrooms . ')';}
			if (strlen ($bedrooms) == 1) {$comparecode = '=';} else {$comparecode = 'BETWEEN';}
			echo '<a href="?beds=2">2 bedroom</a> | <a href="?beds=3">3 bedroom</a> | <a href="?beds=4">4 bedroom</a> | <a href="?beds=5">5 bedroom</a> | <a href="?beds=6">6 bedroom</a> | <a href="?beds=7">7 bedroom</a> | <a href="?beds=8">8 bedroom</a> | <a href="?beds=9">9 bedroom</a> | <a href="?beds=10">10 bedroom</a> | <a href="?beds=11">11 bedroom</a> | <a href="?beds=12">12 bedroom</a></div></div>';
			$villas = get_posts( array ( 'post_type' => 'accommodation','meta_key' => 'ct_Bedrooms_selectbox_0d0d','meta_value_num'=> $bedcode , 'compare' => $comparecode , 'type' => 'NUMERIC'));
}			

			if ( $villas ) {
				echo '</li></ul><div class="wrap clearfix">
			<div class="content clearfix">
			<section class="killer_villas clearfix full">';
				foreach ( $villas as $villa ) {
			echo ('<a href="' . get_permalink( $villa ) . '" title="' . get_the_title( $villa->ID ) . '"><article class="one-fourth">
			<figure>');
			$postid =  get_post_meta( $villa->ID, 'post_id', true);
			$sleeps = get_post_meta( $villa->ID, 'ct_Sleeps_amo_selectbox_ed8d', true );
			$price = get_post_meta( $villa->ID, '_ct_text_554d85ea7691f', true );
			$postlink =  get_post_meta( $villa->ID, 'guid', true );

			if ( has_post_thumbnail() ) {
				$large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id( $villa->ID ), 'large' );
				if ( ! empty( $large_image_url[0] ) ) {
					// echo '<a href="' . get_permalink( $villa ) . '" title="' . get_the_title( $villa->ID ) . '">';
					echo '<a class="overlay" href="' . get_permalink( $villa ) . '" title="' . get_the_title( $villa->ID ) . '">';
					echo get_the_post_thumbnail( $villa->ID, 'thumbnail' ); 
					echo '</a>';
				}
			}
			echo ('</figure><a href="' . get_permalink( $villa ) . '" title="' . get_the_title( $villa->ID ) . '"><div class="details"><h1>' . get_the_title( $villa->ID ) . '</h1>');
					$no_beds = get_post_meta( $villa->ID, 'ct_Bedrooms_selectbox_0d0d', true );
			 echo ('<div class="sleeps"><div class="price" style="float:right;width: 50%;"><h2 style="text-align: right;line-height:80%; font-size: 2.05em!important;">
			 <small style="line-height: 100%;font-size: 0.5em; float:right">Per week from</small><br />&#8364;'. $price.'</h2></div>
			 Sleeps: <span style="font-size:130%;">' . $sleeps. '</span></div>');
			echo ('<div class="nobeds"> Beds: <span style="font-size:130%;">');
					echo ($no_beds . '</span></div></a></article>');
			$lastclass='not';
			if ($count = 3) {
			$lastclass = 'last';}
			else  {$lastclass='not';}
			$count=($count+1);
				}
			echo ('</section>');
			echo ('</div>');
			}
}
