<?php
/**
 * travel
 * @authors Your Name (you@example.org)
 * @date    2017-11-22 15:04:33
 * @version $Id$
 */

class Travel extends CI_Controller {

    function get_list() {

    	
    	$this->json([
                    'code' => 0,
                    'data' => [
				          	[
					          	  'travel_id' => 1, 
						          'travel_name' => '意大利古典之旅',
						          'travel_cover' => '', 
						          'travel_type' => '自由行'
						    ]
			        ]
                ]);
    }
}