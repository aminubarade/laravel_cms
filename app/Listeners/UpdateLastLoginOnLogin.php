<?php
namespace App\Listeners;

use App\Events\SomeEvent;
use Carbon\Carbon;

class UpdateLastLoginOnLogin
{

    public function handle($user $remember)
    {
        $user->last_login_at = Carbon::now();

        $user->save();
    }
}
