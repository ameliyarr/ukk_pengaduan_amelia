<?php 
namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\Masyarakat;
class MasyarakatController extends Controller{
    protected $masyarakats;

    function __construct()
    {
        $this->masyarakats = new Masyarakat();
    }
    public function index()
    {
        $data['masyarakat']=$this->masyarakats->findAll();
        return view('masyarakat_view',$data);
    }
    public function create()
    {
        return view('fmasyarakat_view');
    }
    public function simpan()
    {
        $data= array(
            'nik' =>$this->request->getPost('nik'),
            'nama' =>$this->request->getPost('nama'),
            'username' =>$this->request->getPost('username'),
            'password' =>password_hash($this->request->getPost('password'),PASSWORD_DEFAULT),
            'telp' =>$this->request->getPost('telp'),
        );
        $this->masyarakats->insert($data);
        session()->setFlashdata("message","Data Berhasil Disimpan");
        return $this->response->redirect('/masyarakat');
    }
    public function edit($id)
    {
        $data = array(
            'nik' =>$this->request->getPost('nik'),
            'nama' =>$this->request->getPost('nama'),
            'username' =>$this->request->getPost('username'),
            'password' =>password_hash($this->request->getPost('password'),PASSWORD_DEFAULT),
            'telp' =>$this->request->getPost('telp'),
        );
        
        $this->masyarakats->update($id, $data);
        session()->setFlashdata("message","Data Berhasil Diedit");
        return $this->response->redirect('/masyarakat');
    }
    public function delete($id)
    {
        $this->masyarakats->delete($id);
        session()->setFlashdata("message","Data Berhasil Dihapus");
        return redirect('masyarakat');
    }
}