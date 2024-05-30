<?php

class MyModel extends CI_Model
{
    protected $table;
    protected $primaryKey;

    protected function __construct($tableName, $primaryKey = 'id', $viewFields = [])
    {
        $this->table = $tableName;
        $this->primaryKey = $primaryKey;
        $this->viewField = $viewFields;
    }

    public function getAll($offset = 0, $limit = 10)
    {
        return $this->db->select($this->viewField)->limit($limit, $offset)->get($this->table)->result();
        // $data = $this->db->get('courses', $skip, $limit)->result_array();
    }

    public function getById($id)
    {
        return $this->db->get_where($this->table, array($this->primaryKey => $id))->row();
    }

    public function create($data)
    {
        return $this->db->insert($this->table, $data);
    }

    public function update($id, $data)
    {
        $this->db->where($this->primaryKey, $id);
        $this->db->update($this->table, $data);
        return $this->db->affected_rows();
    }

    public function delete($id)
    {
        $this->db->where($this->primaryKey, $id);
        return $this->db->delete($this->table);
    }
}