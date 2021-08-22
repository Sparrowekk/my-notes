<?php

declare(strict_types=1);

namespace MyNotes;
require_once ('src/db/Database.php');

use MyNotes\Database;
use http\Env\Request;



class NotesController {

    private object $model;


    public function __construct($model) {
        $this->model = $model;


    }

    public static function getNotes(): array {
        $tmp = [];
        $query = "SELECT * FROM notes_list";
        $statement = Database::$dbObject->query($query);
        if ($statement->num_rows > 0) {
            foreach ($statement->fetch_assoc() as $key => $value) {
                array_push($tmp, $key);
            }
        }
        return $tmp;
    }

    public function getNote(int $id) {
        $query = "SELECT * FROM notes_list where 'id == $id'";
        $db->checkConnect();
    }

    public function createNote(object $model, Request $request) {
        $model = new Note($request['id'], $request['title'], $request['content'], $request['slug'], $request['published']);

    }


}


