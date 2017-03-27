<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;


use App\Note;

class NoteTest extends TestCase
{

    use WithoutMiddleware;

    public function test_notes_list()
    {
		// Having
    	Note::create(['note' => 'My first note']);
    	Note::create(['note' => 'Second note']);

    	// When
    	$this->visit('notes')
    		// Then
    		->see('My first note')
    		->see('Second note'); 
    }

    public function test_create_note(){
        // When
        $this->post('notes')
            // Then
            ->see('Creating a note');
    }
}
