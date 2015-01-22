<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Manage extends CI_Controller {

	function __construct(){
		parent::__construct();
	}

	/*=========== Page View ===========*/
	public function template_head(){
		$this->load->view('fontend/template/header.php');
	}

	public function template_footer(){
		$this->load->view('fontend/template/footer.php');
	}


	/*==================== View ======================*/

	private function homepage($data = null){
		$this->template_head();
		$this->load->view('fontend/index.php', $data);
		$this->template_footer();
	}

	private function view_company($data = null){
		$this->template_head();
		$this->load->view('fontend/company.php', $data);
		$this->template_footer();
	}

	private function view_business01($data = null){
		$this->template_head();
		$this->load->view('fontend/business01.php', $data);
		$this->template_footer();
	}

	private function view_business02($data = null){
		$this->template_head();
		$this->load->view('fontend/business02.php', $data);
		$this->template_footer();
	}

	private function view_business03($data = null){
		$this->template_head();
		$this->load->view('fontend/business03.php', $data);
		$this->template_footer();
	}

	private function view_business04($data = null){
		$this->template_head();
		$this->load->view('fontend/business04.php', $data);
		$this->template_footer();
	}

	private function view_gorperate($data = null){
		$this->template_head();
		$this->load->view('fontend/corp.php', $data);
		$this->template_footer();
	}

	private function view_news_events($data = null){
		$this->template_head();
		$this->load->view('fontend/news_events_all.php', $data);
		$this->template_footer();
	}

	private function view_career($data = null){
		$this->template_head();
		$this->load->view('fontend/career.php', $data);
		$this->template_footer();
	}

	private function view_contact($data = null){
		$this->template_head();
		$this->load->view('fontend/contact.php', $data);
		$this->template_footer();
	}

	/*================================================*/





	/*=================== Sub View ===================*/

	/*Business*/
	private function view_sub_business01($data = null){
		$this->template_head();
		$this->load->view('fontend/sbusiness01.php', $data);
		$this->template_footer();
	}

	private function view_sub_business02($data = null){
		$this->template_head();
		$this->load->view('fontend/sbusiness02.php', $data);
		$this->template_footer();
	}

	private function view_sub_business03($data = null){
		$this->template_head();
		$this->load->view('fontend/sbusiness03.php', $data);
		$this->template_footer();
	}

	private function view_sub_business04($data = null){
		$this->template_head();
		$this->load->view('fontend/sbusiness04.php', $data);
		$this->template_footer();
	}
	/*/Business*/

	/*News & Event*/
	private function view_news($data = null){
		$this->template_head();
		$this->load->view('fontend/news_events_new.php', $data);
		$this->template_footer();
	}

	private function view_news_clipping($data = null){
		$this->template_head();
		$this->load->view('fontend/news_events_new_clipping.php', $data);
		$this->template_footer();
	}

	private function view_tvc($data = null){
		$this->template_head();
		$this->load->view('fontend/news_events_tvc.php', $data);
		$this->template_footer();
	}

	private function view_promotion($data = null){
		$this->template_head();
		$this->load->view('fontend/news_events_promotion.php', $data);
		$this->template_footer();
	}

	private function view_csr($data = null){
		$this->template_head();
		$this->load->view('fontend/news_events_csr.php', $data);
		$this->template_footer();
	}

	private function view_gallery($data = null){
		$this->template_head();
		$this->load->view('fontend/news_events_gallery.php', $data);
		$this->template_footer();
	}
	/*/News & Event*/

	/*Career*/
	private function view_job_opportunity($data = null){
		$this->template_head();
		$this->load->view('fontend/career_jop.php', $data);
		$this->template_footer();
	}

	private function view_register($data = null){
		$this->template_head();
		$this->load->view('fontend/register.php', $data);
		$this->template_footer();
	}
	private function view_job_detail($data = null){
		$this->template_head();
		$this->load->view('fontend/job_detail.php', $data);
		$this->template_footer();
	}
	/*/Career*/

	/*================================================*/






	/*=================== Main Page ==================*/

	public function index()
	{
		$this->homepage();
	}

	public function company(){
		$this->view_company();
	}

	public function business_brands(){
		$where = "";

		$lang = "en";
		if($_GET != NULL){
			if($_GET['language']){
				$this->session->set_userdata('language', $_GET['language']);
				$lang = $_GET['language'];
			}
		}else{
			if($this->session->userdata('language')){
				$lang = $this->session->userdata('language');
			}
		}
		/*echo $lang;*/
		$data = array();

		if ($this->input->get('sort')) {
			$sort = $this->input->get('sort');
			$where .= " AND highlight = ".$sort;
		}else{
			$sort = "";
		}

		if ($this->input->get('search_word')) {
			$search_word = $this->input->get('search_word');
			$where .= " AND title_$lang LIKE '%$search_word%'";
		}else{
			$search_word = "";

		}


		$sql = "SELECT id as id,title_$lang as title,thumbnail as thumbnail FROM bu_brands where thumbnail != ''".$where;

		$query = $this->db->query($sql);
		$thumb_list = array();
		if($query->num_rows() > 0) {
			$thumb_list = $query->result_array();
		}



		if($where != ""){
			$sql = "SELECT id as id,title_$lang as title FROM bu_brands WHERE 1=1".$where;
		}else{
			$sql = "SELECT id as id,title_$lang as title FROM bu_brands";
		}

   		$query = $this->db->query($sql);
   		$brand_list = array();
    	if ($query->num_rows() > 0) {
    		$brand_list = $query->result_array();
    	}

    	$output['sort'] = $sort;
    	$output['lang'] = $lang;
    	$output['search_word'] = $search_word;
    	$output['thumb_list'] = $thumb_list;
    	$output['brand_list'] = $brand_list;


		$this->view_business01($output);
	}

	public function business_category(){

		$where = "";

		$lang = "en";
		if($_GET != NULL){
			if($_GET['language']){
				$this->session->set_userdata('language', $_GET['language']);
				$lang = $_GET['language'];
			}
		}else{
			if($this->session->userdata('language')){
				$lang = $this->session->userdata('language');
			}
		}


		if ($this->input->get('category_id')) {
			$category_id = $this->input->get('category_id');
		}else{
			$category_id = "1";
		}

		$sql = "SELECT id as id,title_$lang as title,thumbnail as thumbnail FROM bu_categories where thumbnail != '' AND parent_categoryid = 0";

		$query = $this->db->query($sql);
		$category_list = array();
		if($query->num_rows() > 0) {
			$category_list = $query->result_array();
		}

		$sql = "SELECT  title_$lang as title FROM bu_categories where id = $category_id";
		$query = $this->db->query($sql);
		$select_category_name = array();
		if($query->num_rows() > 0) {
			$select_category_name = $query->result_array();
		}

		$sql = "SELECT id as id,title_$lang as title,thumbnail as thumbnail FROM bu_categories where id = $category_id AND parent_categoryid = $category_id";
  		$query = $this->db->query($sql);
		$select_category_list = array();
		if($query->num_rows() > 0) {
			$select_category_list = $query->result_array();
		}

		$output['lang'] = $lang;
		$output['category_list'] = $category_list;
		$output['select_category_name'] = $select_category_name;
		$output['select_category_list'] = $select_category_list;


		$this->view_business02($output);
	}

	public function business_company(){

		$where = "";

		$lang = "en";
		if($_GET != NULL){
			if($_GET['language']){
				$this->session->set_userdata('language', $_GET['language']);
				$lang = $_GET['language'];
			}
		}else{
			if($this->session->userdata('language')){
				$lang = $this->session->userdata('language');
			}
		}

		$sql = "SELECT id as id,companyname_$lang as companyname,thumbnail as thumbnail FROM bu_companies where thumbnail != ''";

 		$query = $this->db->query($sql);
   		$thumb_list = array();
    	if ($query->num_rows() > 0) {
    		$thumb_list = $query->result_array();
    	}

    	$sql = "SELECT id as id,companyname_$lang as companyname FROM bu_companies";
    	$query = $this->db->query($sql);
   		$company_list = array();
    	if ($query->num_rows() > 0) {
    		$company_list = $query->result_array();
    	}

    	$output['lang'] = $lang;
    	$output['thumb_list'] = $thumb_list;
    	$output['company_list'] = $company_list;

		$this->view_business03($output);
	}

	public function business_supply_chain(){
		$this->view_business04();
	}

	public function corporate(){
		$this->view_gorperate();
	}

	public function investor(){
		echo "investor";
	}

	public function news_events(){
		$this->view_news_events();
	}

	public function career(){
		$this->view_career();
	}

	public function contact(){
		$this->view_contact();
	}


	/*=================================================*/


	/*==================== Sub Page ===================*/


	/*Business*/
	public function sub_business01(){
		$lang = $this->input->get('lang');
		$brand_id = $this->input->get('brand_id');

		$sql = "SELECT id as id,title_$lang as title,description_$lang as description,contact_$lang as contact , ownedbrand as ownedbrand , subsidiary as subsidiary ,banner as banner  FROM bu_brands where id = $brand_id";

		$query = $this->db->query($sql);

		if($query->num_rows() > 0){
			$result = $query->result_array();
		}

		$output['lang'] = $lang;
		$output['output'] = $result[0];

		$this->view_sub_business01($output);
	}

	public function sub_business02(){
		$this->view_sub_business02();
	}

	public function sub_business03(){
		$lang = $this->input->get('lang');
		$company_id = $this->input->get('company_id');

		$sql = "SELECT id as id,companyname_$lang as companyname,description_$lang as description,contact_$lang as contact , ownedbrand as ownedbrand , subsidiary as subsidiary ,banner as banner FROM bu_companies  where id = $company_id";

		$query = $this->db->query($sql);

		if($query->num_rows() > 0){
			$result = $query->result_array();
		}

		$output['lang'] = $lang;
		$output['output'] = $result[0];

		$this->view_sub_business03($output);
	}

	public function sub_business04(){
		$this->view_sub_business04();
	}
	/*/Business*/

	/*News & Events*/
	public function sub_news(){
		$this->view_news();
	}

	public function sub_news_clipping(){
		$this->view_news_clipping();
	}

	public function sub_tvc(){
		$this->view_tvc();
	}

	public function sub_promotion(){
		$this->view_promotion();
	}

	public function sub_csr(){
		$this->view_csr();
	}

	public function sub_gallery(){
		$this->view_gallery();
	}
	/*/News & Events*/

	/*Career*/
	public function sub_job_opportunity(){
		$this->view_job_opportunity();
	}

	public function sub_register(){
		$this->view_register();
	}

	public function sub_job_detail(){
		$this->view_job_detail();
	}
	/*/Career*/



	/*=================================================*/




	private function manage_url(){
		$path = "/manage/";
		$url = site_url()+$path;
		return $url;
	}

}

/* End of file manage.php */
/* Location: ./application/controllers/manage.php */