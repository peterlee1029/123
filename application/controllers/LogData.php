<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
require APPPATH . '/third_party/UserAgentParser.php';
class LogData extends CI_Controller {
	public function __construct()
	{
		
		parent::__construct();
		$this->load->helper('url');
		if(!function_exists("array_column"))
		{
			function array_column($array,$column_name)
			{
				return array_map(function($element) use($column_name){return $element[$column_name];}, $array);
			}
		}		
	}

	public function getDayOfWeek()
	{
		$response = new stdClass();
	
		$SQL = "SELECT DAYOFWEEK(`log_date`) AS dayofweek, count(`log_date`) AS daycount" .
			" FROM `system_log` " .
			" WHERE `log_message` = 'Final output sent to browser' " .
			" GROUP BY DAYOFWEEK(`log_date`) " .
			" ORDER BY DAYOFWEEK(`log_date`) ";
		$result = $this->db->query($SQL);

		$response->result = $result->result_array();
		echo json_encode($response);
		flush();
		exit(0);
	}

	public function getPlatform()
	{
		$response = new stdClass();
	
		$SQL = "SELECT platform,count(c) as use_count " .
			" FROM (SELECT distinct `log_platform` as platform, `log_date` as c " . 
			" FROM `system_log` " .
			" WHERE  `log_platform` is not NULL AND `log_message` = 'Final output sent to browser' " .
			" GROUP BY log_date, log_platform " .
			" ) AS Subset " .
			" GROUP BY platform";
		$result = $this->db->query($SQL);
		$row_num = $result->num_rows();

		$platform = array_column($result->result_array(), 'platform');
		$use_count = array_column($result->result_array(), 'use_count');
		$response->platform = $platform;
		$response->use_count = $use_count;
		echo json_encode($response);
		flush();
		exit(0);
	}

	public function index()
	{
		$update = 1;
		$log_id=$_GET['log_id'];
		$response = new stdClass();
	
		for ($i = 0, $timeout = 180; $i<$timeout; $i++ ) {

			$SQL = "SELECT * FROM system_log WHERE log_id > $log_id ORDER by log_id limit 100";
			$result = $this->db->query($SQL) or die("Couldn't execute query.".mysql_error());
			$row_num = $result->num_rows();
			if($row_num == 0){
				$update=0;
			} else {
				//$row_num = $row_num1 ;
				$j=0;
				$ua_info = array();
				foreach ($result->result_array() as $row)
				{
					$ua_info = parse_user_agent($row['log_user_agent']);
					$row['platform'] = $ua_info['platform'];
					$data[$j++] = $row;
					
					$log_id = $row['log_id']; 
				}
/*
				while($row = mysql_fetch_array($result,MYSQL_ASSOC)){
					$data[$j++] = $row;
					$log_id = $row['log_id']; 
				}
*/				
				$update=1;
				$response->update = $update;
				$response->log_id = $log_id;
				$response->data = $data;
				echo json_encode($response);
				flush();
				exit(0);
			}
			usleep(1000000);
		}
	}
}
?>