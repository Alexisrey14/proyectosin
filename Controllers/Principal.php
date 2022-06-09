<?php
class Principal extends Controller
{
    public function __construct() {
        parent::__construct();
        session_start();
    }
    public function index()
    {

    }
    public function about()
    {
        $data['title'] = 'Nuestro Equipo';
        $this->Views->getView('principal', "about", $data);
    }
    public function shop()
    {
        $data['title'] = 'Nuestro Producto';
        $this->views->getView('principal', "shop", $data);
    }
    public function detail($id_producto)
    {
        $data['title'] = 'Producto ';
        $this->views->getView('principal', "detail", $data);
    }
    public function contacto()
    {
        $data['title'] = 'Contactos';
        $this->views->getView('principal', "contact", $data);
    }
}