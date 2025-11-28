<?php
class Home extends CI_Controller

{
    public function index()
    {
        $data['title'] = '';

        $this->load->view('home');
    }
    public function products()
    {
        $data['title'] = '';

        $this->load->view('products');
    }
    public function checkout()
    {
        $data['title'] = '';

        $this->load->view('checkout');
    }
    public function productdetails()
    {
        $data['title'] = 'productdetails';

        $this->load->view('productdetails');
    }

    public function cart()
    {
        $data['title'] = 'cart';

        $this->load->view('cart');
    }

    public function occasionalproduct()
    {
        $data['title'] = 'occasionalproduct';

        $this->load->view('occasionalproduct');
    }
    public function roses()
    {
        $data['title'] = 'roses';

        $this->load->view('roses');
    }
    public function orchids()
    {
        $data['title'] = 'orchids';

        $this->load->view('orchids');
    }
    public function peonies()
    {
        $data['title'] = 'peonies';

        $this->load->view('peonies');
    }
    public function anthurium()
    {
        $data['title'] = 'anthurium';

        $this->load->view('anthurium');
    }
    public function Paradish()
    {
        $data['title'] = 'paradish';

        $this->load->view('paradish');
    }
    public function leucospermum()
    {
        $data['title'] = 'leucospermum';

        $this->load->view('leucospermum');
    }
    public function valentinesday()
    {
        $data['title'] = 'valentinesday';

        $this->load->view('valentinesday');
    }
    public function mothersday()
    {
        $data['title'] = 'mothersday';

        $this->load->view('mothersday');
    }
    public function birthday()
    {
        $data['title'] = 'birthday';

        $this->load->view('birthday');
    }
}
