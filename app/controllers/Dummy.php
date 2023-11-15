<?php

class Dummy extends Controller
{
    public function index()
    {
        $data['judul'] = 'Database';
        $data['datas'] = $this->model('DB_model')->getAllDatas();

        $this->view('templates/header', $data);
        $this->view('database/index', $data);
        $this->view('templates/footer');
    }

    public function detail($id)
    {
        $data['judul'] = 'Detail';
        $data['datas'] = $this->model('DB_model')->getById($id);

        $this->view('templates/header', $data);
        $this->view('database/detail', $data);
        $this->view('templates/footer');
    }
    public function delete($id)
    {
        if ($this->model('DB_model')->delById($id) > 0) {
            Flasher::setFlash('Your data has been deleted', 'Successed |', 'success');
            header("Location:" . BASEURL . "/dummy");
            exit;
        } else {
            Flasher::setFlash('Ooops... something gone wrong', 'Failed |', 'danger');
            header("Location:" . BASEURL . "/dummy");
            exit;
        }
    }

    public function insert()
    {
        if ($this->model('DB_model')->insertData($_POST) > 0) {
            Flasher::setFlash('Your data has been inserted', 'Successed |', 'success');
            header("Location:" . BASEURL . "/dummy");
            exit;
        } else {
            Flasher::setFlash('Ooops... something gone wrong', 'Failed |', 'danger');
            header("Location:" . BASEURL . "/dummy");
            exit;
        }
    }

    public function update($id)
    {
        if ($this->model('DB_model')->updateData($id, $_POST) > 0) {
            Flasher::setFlash('Your data has been updated', 'Successed |', 'success');
            header("Location:" . BASEURL . "/dummy");
            exit;
        } else {
            Flasher::setFlash('Ooops... something gone wrong', 'Failed |', 'danger');
            header("Location:" . BASEURL . "/dummy");
            exit;
        }
    }

    public function search()
    {
        $data['judul'] = 'Database';
        $data['datas'] = $this->model('DB_model')->searchData();

        $this->view('templates/header', $data);
        $this->view('database/index', $data);
        $this->view('templates/footer');

    }

}