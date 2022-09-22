<?php

namespace App\Controllers;

use CodeIgniter\RESTful\ResourceController;
use CodeIgniter\API\ResponseTrait;
use App\Models\MakamModel;

class Makam extends ResourceController
{
    protected $format = 'json';
    public function __construct()
    {
        $this->Makam = new MakamModel();
    }
    /**
     * Return an array of resource objects, themselves in array format
     *
     * @return mixed
     */
    use ResponseTrait;
    public function index()
    {
        $dataMakam = $this->Makam->findAll();
        if (!$dataMakam) return $this->failNotFound('Data not found');
        return $this->respond($dataMakam);
    }


    /**
     * Return the properties of a resource object
     *
     * @return mixed
     */
    public function show($id = null)
    {
        $dataMakam = $this->Makam->find(['id' => $id]);
        if (!$dataMakam) return $this->failNotFound('Data not found');
        return $this->respond($dataMakam[0]);
    }


    /**
     * Create a new resource object, from "posted" parameters
     *
     * @return mixed
     */
    public function create()
    {
        if (!$this->validate([
            'nama' => 'required',
            'jk' => 'required',
            'tgl_lhr' => 'required',
            'tgl_wafat' => 'required',
            'latitude' => 'required',
            'longitude' => 'required',
        ])) {
            return $this->fail($this->validator->getErrors());
        }

        $data = [
            'nama' => $this->request->getVar('nama'),
            'jk' => $this->request->getVar('jk'),
            'tgl_lhr' => $this->request->getVar('tgl_lhr'),
            'tgl_wafat' => $this->request->getVar('tgl_wafat'),
            'latitude' => $this->request->getVar('latitude'),
            'longitude' => $this->request->getVar('longitude'),
        ];
        $makam = $this->Makam->insert($data);
        if (!$makam) return $this->fail('Failed to save data.', 400);
        return $this->respondCreated($makam);
    }



    /**
     * Add or update a model resource, from "posted" properties
     *
     * @return mixed
     */
    public function update($id = null)
    {

        if (!$this->validate([
            'nama' => 'required',
            'jk' => 'required',
            'tgl_lhr' => 'required',
            'tgl_wafat' => 'required',
            'latitude' => 'required',
            'longitude' => 'required',
        ])) {
            return $this->fail($this->validator->getErrors());
        }

        $checkID = $this->Makam->find(['id' => $id]);
        if (!$checkID) return $this->fail('Data not found.', 404);

        $input = $this->request->getRawInput();
        $data = [
            'id' => $id,
            'nama' => $input['nama'],
            'jk' => $input['jk'],
            'tgl_lhr' => $input['tgl_lhr'],
            'tgl_wafat' => $input['tgl_wafat'],
            'latitude' => $input['latitude'],
            'longitude' => $input['longitude'],
        ];
        $makam = $this->Makam->save($data);
        if (!$makam) return $this->fail('Failed to updated data.', 400);
        return $this->respond($makam);
    }

    /**
     * Delete the designated resource object from the model
     *
     * @return mixed
     */
    public function delete($id = null)
    {
        $checkID = $this->Makam->find(['id' => $id]);
        if (!$checkID) return $this->fail('Data not found.', 404);
        $makam = $this->Makam->delete($id);
        if (!$makam) return $this->fail('Failed to delete data.', 400);
        return $this->respondDeleted($makam);
    }
}
