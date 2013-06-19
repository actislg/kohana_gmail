
<?php defined('SYSPATH') OR die('No direct access allowed.');

class gmail {
   	public $inbox;
	public $emails;
	public static function factory(){
		return new gmail;

	}
	
	
	public function connect(){
		$conf = Kohana::config('gmail');
		FB::log($conf,"conf");
		//{server.example.com:143/novalidate-cert}INBOX
		$this->inbox = imap_open($conf['connection']['hostname'],$conf['connection']['username'],$conf['connection']['password']) or die('Cannot connect to Gmail: ' . imap_last_error());
		FB::log($this->inbox);
		return $this;
	}
	
	
	public function search($scope){
		$this->emails = imap_search($this->inbox,$scope);
		return $this->emails;
		
	}
	/**
	 *  @sequence :A message sequence description. You can enumerate desired messages with the X,Y syntax, or retrieve all messages within an interval with the X:Y syntax
	 *  i.e. "1:10"
	 */
	public function header($sequence){
		return  imap_fetch_overview($this->inbox,$sequence,0);
		
		
	}
	
	public function message($email_number){
		return imap_fetchbody($this->inbox,$email_number,2);
	} 
	
	
	
	
	
	
}