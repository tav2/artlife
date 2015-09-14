<?php
class Api_tovar extends MY_Model {
    protected $_table = 'tovar';
    protected $_table_content = 'tovar_content';

    //функции вфводящие виевы
    function get_all_kat()
    {
        // для меню
        // $name_sub_category = $this->get_name_sub_category_tovar($tovar_id);

        return $this->load->view('component/tovar/api/menu_katalog_api', array(
                    'category' => $this->get_all_category(),
                    // 'name_sub_category' => $name_sub_category
                ), true);
    }

    function get_all_category_tovar()
    {
        return $this->load->view('component/tovar/api/category_api', array(
                    'category_tovar' => $this->get_all_category(),
                    // 'name_sub_category' => $name_sub_category
                ), true);
    }

    function get_sub_category_tovar($category_id)
    {
        return $this->load->view('component/tovar/api/sub_category_api', array(
                    'category_tovar' => $this->get_all_sub_category($category_id),
                    'menu_category' => $this->get_category_menu($category_id)
                ), true);
    }

    function get_tovar($sub_category_id)
    {
        return $this->load->view('component/tovar/api/tovar_api', array(
                    'category_tovar' => $this->get_tovar_subcat($sub_category_id),
                    'menu_sub_category' => $this->get_tovar_menu($sub_category_id)
                ), true);
    }

    function get_tovar_single($tovar_id)
    {
        return $this->load->view('component/tovar/api/tovar_single_api', array(
                    'tovar_single' => $this->get_tovar_text($tovar_id),
                    'menu_sub_category' => $this->get_tovar_menu_single($tovar_id)
                ), true);
    }

    function get_new_tovar()
    {
        return $this->load->view('component/tovar/api/new_tovar_api', array(
                    'tovar_new_1' => $this->get_tovar_new(4, 0),
                    'tovar_new_2' => $this->get_tovar_new(4, 4)
                ), true);
    }

    function get_random_tovar()
    {
        $max = $this->db->count_all('tovar') - 4;
        $ofset = rand(0, $max);
        
        return $this->load->view('component/tovar/api/index_tovar_api', array(

                    'tovar_random' => $this->get_tovar_new(4, $ofset),
                ), true);
    }

    function get_popular_tovar()
    {
        $max = $this->db->count_all('tovar') - 4;
        $ofset = rand(0, $max);
        
        return $this->load->view('component/tovar/api/popular_tovar_api', array(

                    'tovar_random' => $this->get_tovar_new(4, $ofset),
                ), true);
    }

    // вспомогательныые функции ----------------------------------------------------
    function get_all_category()
    {
        return $this->db->get('tovar_category')->result_array();
    }

    function get_all_sub_category($tovar_category_id)
    {
        $this->db->where('tovar_category_id', $tovar_category_id);
        return $this->db->get('tovar_sub_category')->result_array();
    }

    function get_tovar_subcat($sub_category_id)
    {
        $this->db->where('tovar_sub_category_id', $sub_category_id);
        return $this->db->get('tovar')->result_array();
    }

    function get_tovar_menu($sub_category_id)
    {
        $this->db->where('tovar_sub_category_id', $sub_category_id);
        return $this->db->get('tovar_sub_category')->result_array();
    }

    function get_tovar_menu_single($tovar_id)
    {
        $this->db->where('tovar_id', $tovar_id);
        $rez = $this->db->get('tovar');
        foreach ($rez->result_array() as $item) {$rez2 = $item['tovar_sub_category_id']; }

        $this->db->where('tovar_sub_category_id', $rez2);
        return $this->db->get('tovar_sub_category')->result_array();
    }

    function get_category_menu($category_id)
    {
        $this->db->where('tovar_category_id', $category_id);
        $rez = $this->db->get('tovar_category');
        foreach ($rez->result_array() as $item) {$rez2 = $item['tovar_category_name']; }
        return $rez2;
    }

    function get_tovar_text($tovar_id)
    {
        $this->db->where('tovar_id', $tovar_id);
        return  $this->db->get('tovar')->result_array();
    }

    function get_tovar_img($tovar_id)
    {
        $this->db->where('tovar_id', $tovar_id);
        $this->db->where('tovar_img_type', 0);
        $rez = $this->db->get('tovar_img');
        foreach ($rez->result_array() as $item) {$rez2 = $item['tovar_img_adres']; }
        if (isset($rez2)) 
        {
            return $rez2;
        }
        else
        {
            //берем изображение из подкатегории
            $this->db->where('tovar_id', $tovar_id);
            $rez = $this->db->get('tovar');
            foreach ($rez->result_array() as $item) {$rez3 = $item['tovar_sub_category_id']; }

            $this->db->where('tovar_sub_category_id', $rez3);
            $rez = $this->db->get('tovar_sub_category');
            foreach ($rez->result_array() as $item) {$rez4 = $item['tovar_img_adres']; }
            return $rez4;
        }
        
    }

    function get_tovar_sert($tovar_id)
    {
        $this->db->where('tovar_id', $tovar_id);
        $this->db->where('tovar_img_type', 1);
        // $rez = $this->db->get('tovar_img');
        return  $this->db->get('tovar_img')->result_array();
    }

    function get_tovar_new($num, $ofset)
    {
        $this->db->order_by('tovar_id DESC');
        return  $this->db->get('tovar',$num, $ofset)->result_array();
    }

    //была тут----------------------------------------------
    public function api_get_content($id, $lang)
    {
        $query = $this->db->get_where($this->_table_users, array(
            'news_id' => $id,
            'news_lang' => $lang
        ));
        return $this->load->view('component/news/api/page', array(
            'page' => $query->row_array()
        ), true);
    }
}