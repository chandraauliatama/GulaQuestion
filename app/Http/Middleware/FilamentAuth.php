<?php

namespace App\Http\Middleware;

use Filament\Models\Contracts\FilamentUser;
use Illuminate\Auth\Middleware\Authenticate as Middleware;

class FilamentAuth extends Middleware
{
    protected function authenticate($request, array $guards): void
    {
        $guardName = config('filament.auth.guard');
        $guard = $this->auth->guard($guardName);

        if (! $guard->check()) {
            $this->unauthenticated($request, $guards);

            return;
        }

        $this->auth->shouldUse($guardName);

        $user = $guard->user();

        if ($user instanceof FilamentUser) {
            abort_if(! $user->canAccessFilament(), 404);

            return;
        }

        abort_if(config('app.env') !== 'local', 404);
    }

    protected function redirectTo($request): string
    {
        return route('login');
    }
}
