<?php
namespace App\Transformers;

use App\User;
use League\Fractal\TransformerAbstract;

class UserTransformer extends TransformerAbstract{
    public function transform(User $user){
        return[
            'nama'          => $user->nama,
            'email'         => $user->email,
            'registered'    => $user->created_at->diffForHumans(),

        ];
    }
}
