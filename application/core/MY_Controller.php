<?php defined('BASEPATH') OR exit('No direct script access allowed');

class MY_Controller extends CI_Controller 
{
    public function cekLogin()
    {
        if (!$this->session->userdata('username')) {
        redirect('auth/administrator/auth');
        }
    }

    public function getUserData()
    {
        // Ambil semua data session
        $userData = $this->session->userdata();
    
        // Return userdata
        return $userData;
    }
    
    public function isOperator()
    {
        // Mengambil data session
        $userData = $this->getUserData();
    
        // Jika level user tidak sesuai
        // maka redirect ke halaman 404
        if ($userData['level'] !== 'Super Admin') show_404();
    }

    public function isOpd()
    {
        // Mengambil data session
        $userData = $this->getUserData();
    
        // Jika level user tidak sesuai
        // maka redirect ke halaman 404
        if ($userData['level'] !== 'Admin Perdagangan') show_404();
    }    

    public function isOpeOrOpd()
    {
        // Mengambil data session
        $userData = $this->getUserData();
    
        // Jika level user tidak sesuai
        // maka redirect ke halaman 404
        if ($userData['level'] === 'Admin Sekretariat' || $userData['level'] === 'Admin Sekretariat')
        {

        }
        else
        {
            show_404();
        }
    }
}