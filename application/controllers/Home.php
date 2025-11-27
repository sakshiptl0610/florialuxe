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
}
