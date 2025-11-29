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


    public function annivarsary()
    {
        $data['title'] = 'annivarsary';

        $this->load->view('annivarsary');
    }
    public function wedding()
    {
        $data['title'] = 'wedding';

        $this->load->view('wedding');
    }
    public function newborn()
    {
        $data['title'] = 'newborn';

        $this->load->view('newborn');
    }
    public function contactus()
    {
        $data['title'] = 'contactus';

        $this->load->view('contactus');
    }

    public function ordersuccess()
    {
        // --------- Get Checkout Form Data ----------
        $order['fname']   = $this->input->post('fname');
        $order['lname']   = $this->input->post('lname');
        $order['email']   = $this->input->post('email');
        $order['phone']   = $this->input->post('phone');
        $order['address'] = $this->input->post('address');
        $order['city']    = $this->input->post('city');
        $order['state']   = $this->input->post('state');
        $order['country'] = $this->input->post('country');
        $order['notes']   = $this->input->post('notes');

        // --------- Get Cart Data ----------
        $order['cart'] = json_decode($this->input->post('cartData'), true);

        // --------- EMAIL CONFIG ----------
        $this->load->library('email');

        $config = array(
            'protocol'  => 'smtp',
            'smtp_host' => 'smtp.gmail.com',
            'smtp_port' => 587,
            'smtp_user' => 'sp6979004@gmail.com',
            'smtp_pass' => 'kjro dwia tvza efik',
            'smtp_crypto' => 'tls',
            'mailtype'  => 'html',
            'charset'   => 'utf-8',
            'newline'   => "\r\n",
            'crlf'      => "\r\n",
            'wordwrap'  => TRUE
        );

        $this->email->initialize($config);

        // Make email message
        $htmlMessage = "<h2>New Order Received</h2>";
        $htmlMessage .= "<p><strong>Name:</strong> {$order['fname']} {$order['lname']}</p>";
        $htmlMessage .= "<p><strong>Email:</strong> {$order['email']}</p>";
        $htmlMessage .= "<p><strong>Phone:</strong> {$order['phone']}</p>";
        $htmlMessage .= "<p><strong>Address:</strong> {$order['address']}, {$order['city']}, {$order['state']}, {$order['country']}</p>";

        $htmlMessage .= "<h3>Order Items:</h3><ul>";

        $total = 0;
        foreach ($order['cart'] as $item) {
            $sub = $item['qty'] * $item['price'];
            $total += $sub;
            $htmlMessage .= "<li>{$item['name']} × {$item['qty']} — AED {$sub}</li>";
        }
        $htmlMessage .= "</ul>";
        $htmlMessage .= "<p><strong>Total:</strong> AED {$total}</p>";

        // SEND TO ADMIN
        $this->email->from('sp6979004@gmail.com', 'Floria Website');
        $this->email->to('sp6979004@gmail.com');
        $this->email->subject('New Order Received');
        $this->email->message($htmlMessage);

        if (!$this->email->send()) {
            echo $this->email->print_debugger();
            exit;
        }

        // SEND TO CUSTOMER
        $this->email->from('sp6979004@gmail.com', 'Floria Team');
        $this->email->to($order['email']);
        $this->email->subject('Your Order Confirmation');
        $this->email->message("
        <h2>Thank You for Your Order!</h2>
        <p>Hi {$order['fname']},</p>
        <p>Your order has been successfully placed.</p>
        <p><strong>Total:</strong> AED {$total}</p>
    ");
        $this->email->send();

        // Load success page
        $this->load->view('ordersuccess', $order);
    }
}
