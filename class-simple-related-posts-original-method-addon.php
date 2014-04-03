<?php
class Simple_Related_Posts_Addon extends Simple_Related_Posts_Base {
	
	/**
	 * Original Relate Posts function
	 * 
	 * @param integer $num display num
	 * @param integer $post_id post id
	 * @return array Related post ids
	 */
	public function get_data_original( $num, $post_id ) {
		
		/**
		 * Programing.. 
		 * etc below
		 */
		 $post_ids = array( 
		 				array( 'ID' => 1 ), 
		 				array( 'ID' => 2 ),
		 				array( 'ID' => 3 )
		 			);
		
		return $post_ids;
	}
}
