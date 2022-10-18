<?php

/**
 * Dit is de model voor de controller RichestPeoples
 */

class RichestPeople
{
    // Dit is de constructor van de RichestPeople model class
    public function __construct()
    {
        $this->db = new Database();
    }

    public function getPeople()
    {
        $this->db->query('SELECT * FROM richestpeople');
        return $this->db->resultSet();
    }

    public function getPeople($id)
    {
        $this->db->query("SELECT * FROM richestpeople WHERE id = :id");
        $this->db->bind(':id', $id, PDO::PARAM_INT);
        return $this->db->single();
    }

    public function updatePeople($data)
    {
        var_dump($data);
        $this->db->query("UPDATE RichestPeople
                          Set Name = :Name,
                          Networth = :Networth,
                          MyAge = :MyAge,
                          Company = :Company
                        WHERE id = :id");

        $this->db->bind(':Name', $data['name'], PDO::PARAM_STR);
        $this->db->bind(':Networth', $data['networth'], PDO::PARAM_STR);
        $this->db->bind(':MyAge', $data['myage'], PDO::PARAM_STR);
        $this->db->bind(':Company', $data['company'], PDO::PARAM_STR);
        $this->db->bind(':id', $data['id'], PDO::PARAM_INT);

        return $this->db->execute();
    }

    public function deletePeople($id)
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
