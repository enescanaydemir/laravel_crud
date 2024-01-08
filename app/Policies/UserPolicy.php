<?php

namespace App\Policies;

use App\Models\Books;
use App\Models\User;

class UserPolicy
{
    /**
     * Create a new policy instance.
     */
    public function create(){
        return true;
    }

    public function update(User $user, Books $book){
        return $user->name === $book->author;
    }

    public function delete(User $user, Books $book){
        return $user === $book->author;
    }
}
