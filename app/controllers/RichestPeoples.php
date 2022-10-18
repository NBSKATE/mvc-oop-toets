<?php

class RichestPeoples extends Controller
{
    // properties
    private $richModel;

    // Dit is de constructor van de cotnroller
    public function __construct()
    {
        $this->richModel = $this->model('RichestPeople');
    }


    public function index($name = 'Elon Musk', $age = '50')
    {
        $records = $this->richModel->getPeople();
        // var_dump($records);

        $rows = '';

        foreach ($records as $items) {
            $rows .= "<tr>
                            <td>$items->id</td>
                            <td>$items->Name</td>
                            <td>$items->Networth</td>
                            <td>$items->MyAge</td>
                            <td>$items->Company</td>
                            <td>
                            <a href='" . URLROOT . "/RichestPeoples/update/$items->id'>update</a>
                            </td>
                            <td>
                            <a href='" . URLROOT . "/RichestPeoples/delete/$items->id'>delete</a>
                            </td>
                            
                            </tr>";
        }

        $data = [
            'title' => "Overzicht rijke mensen",
            'rows' => $rows
        ];

        $this->view('RichestPeoples/index', $data);
    }

    public function  update($id = null)
    {
        /**
         * Controller of er gepost wordt vanuit de view update.php
         */
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            /**
             * Maak het $_POST array schoon
             */
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_FULL_SPECIAL_CHARS);

            $this->richModel->updatePeople($_POST);

            header("Location: " . URLROOT . "/RichestPeople/index");
        }
        $record = $this->richModel->getPeople($id);
        var_dump($record);
        $data = [
            'title' => 'Update Landen',
            'id' => $record->id,
            'Name' => $record->Name,
            'Networth' => $record->Networth,
            'MyAge' => $record->MyAge,
            'Company' => $record->Company
        ];
        $this->view('RichestPeoples/update', $data);
    }

    public function delete($id)
    {
        $result = $this->richModel->deletePeople($id);
        var_dump($result);
        if ($result) {
            echo "Het record is verwijderd uit de database";
            header("Refresh: 3; URL=" . URLROOT . "/RichestPeoples/index");
        } else {
            echo "Internal server-error, het record is niet verwijderd.";
        }
    }

    public function create()
    {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // $_POST array schoonmaken
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_FULL_SPECIAL_CHARS);

            $result = $this->richModel->createPeople($_POST);

            if ($result) {
                echo "Het invoeren is gelukt!";
                header("Refresh:3; URL=" . URLROOT . "/RichestPeoples/index");
            } else {
                echo "Het invoeren is niet gelukt";
                header("Refresh:3; URL=" . URLROOT . "/RichestPeoples/index");
            }
        }
        $data = [
            'title' => 'Voeg een nieuw persoon toe'
        ];
        $this->view('RichestPeoples/create', $data);
    }
}
