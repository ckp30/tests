<?php

class Bio_model extends CI_Model 
{
    public function config() {
        return $this->db->query("CREATE DATABASE crud");
    }
    public function mk_admin()
    {
        // return $this->db->query("DROP TABLE admin");
        return $this->db->query("CREATE TABLE admin (id INT(10) PRIMARY KEY AUTO_INCREMENT, nama VARCHAR(20) NOT NULL, username VARCHAR(8) NOT NULL, password VARCHAR(50) NOT NULL)");   

    }
    public function mk_bio() {
        return $this->db->query("CREATE TABLE bio (id INT(10) PRIMARY KEY AUTO_INCREMENT, nama VARCHAR(20) NOT NULL, jenis_kelamin VARCHAR(9) NOT NULL, tanggal_lahir DATE NOT NULL, umur INT(2) NOT NULL)");      
    }

    public function input_data($table, $data)
    {
        return $this->db->insert($table,$data);  
    }

    public function tampil_data($table) 
    {
        return $this->db->get($table);
    }

    public function gets_data($table, $id)
    {
        return $this->db->get_where($table, ['id' => $id])->row();
    }
    public function update_data($table, $id, $data)
    {
        return $this->db->update($table, $data,['id' => $id]);
    }
    public function drop_data($table, $id)
    {
        return $this->db->delete($table, ['id' => $id]);
    }
}