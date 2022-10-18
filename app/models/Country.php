<?php

/**
 * Dit is de model voor de controller Countries
 */

class Country
{
    // Dit is de constructor van de Country model class
    public function __construct()
    {
        $this->db = new Database();
    }

    public function getCountries()
    {
        $this->db->query('SELECT * FROM Country');
        return $this->db->resultSet();
    }

    public function getCountry($id)
    {
        $this->db->query("SELECT * FROM country WHERE id = :id");
        $this->db->bind(':id', $id, PDO::PARAM_INT);
        return $this->db->single();
    }

    public function updateCountry($data)
    {
        var_dump($data);
        $this->db->query("UPDATE Country
                          Set Name = :Name,
                          CapitalCity = :CapitalCity,
                          Continent = :Continent,
                          Population = :Population
                        WHERE id = :id");

        $this->db->bind(':Name', $data['name'], PDO::PARAM_STR);
        $this->db->bind(':CapitalCity', $data['capitalCity'], PDO::PARAM_STR);
        $this->db->bind(':Continent', $data['continent'], PDO::PARAM_STR);
        $this->db->bind(':Population', $data['population'], PDO::PARAM_STR);
        $this->db->bind(':id', $data['id'], PDO::PARAM_INT);

        return $this->db->execute();
    }

    public function deleteCountry($id)
    {
        $this->db->query("DELETE FROM country WHERE id = :id");
        $this->db->bind(':id', $id, PDO::PARAM_INT);
        return $this->db->execute();
    }

    public function createCountry($post)
    {
        $this->db->query("INSERT INTO country (id, 
                                               Name, 
                                               CapitalCity, 
                                               Continent, 
                                               Population)
                          VALUES               (:id,
                                                :name,
                                                :capitalCity,
                                                :continent,
                                                :population)");
        $this->db->bind(':id', NULL, PDO::PARAM_NULL);
        $this->db->bind(':name', $post['name'], PDO::PARAM_STR);
        $this->db->bind(':capitalCity', $post['capitalCity'], PDO::PARAM_STR);
        $this->db->bind(':continent', $post['continent'], PDO::PARAM_STR);
        $this->db->bind(':population', $post['population'], PDO::PARAM_STR);
        return $this->db->execute();
    }
}
