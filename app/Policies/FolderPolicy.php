<?php

namespace App\Policies;

use App\Models\User;
use App\Models\Folder;
use App\Policies\FolderPolicy;
use Illuminate\Auth\Access\HandlesAuthorization;

class FolderPolicy
{
    use HandlesAuthorization;

    /**
     * フォルダの閲覧権限
     * @param User $user
     * @param Folder $folder
     * @return bool
     */
    public function view(User $user, Folder $folder)
    {
        return $user->id === $folder->user_id;
    }

    protected $policies = [
        Folder::class => FolderPolicy::class,
    ];
}
