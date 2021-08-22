<?php
require_once './src/controllers/NotesController.php';
use MyNotes\NotesController;

$arr = NotesController::getNotes();
?>

<div class="note-list">
    <table>
        <tr>
            <?php
                foreach($arr as $key){
                    print '<th>' .$key. '</th>';
                }
            ?>
        </tr>
    </table>
</div>