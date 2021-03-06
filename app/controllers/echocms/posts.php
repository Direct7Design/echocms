<?php  if (!defined('BASEPATH')) exit('No direct script access allowed');

include('echocms.php');

class Posts extends Echocms {

	function Posts(){
		parent::__construct();
		$this->tbl_name = 'posts';
		$this->field_list = "
			posts.id,
			if(posts.status = 'y','Enabled','Disabled') as Published, 
			posts.title as Title,
			date_format(created,'%b %e %Y') as Created
		";
		$this->order_field = 'created desc';
		$this->name = 'Post';
		$this->hide_top = true;
		$this->fields = array('status','created','title','body','short_body','meta_title','meta_keywords','meta_description','permalink');
		$this->top = 'Blog Posts';
		$this->noAjax = true;
#		$this->layout->setLayout('admin');
	}
	
}
?>