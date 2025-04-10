<?php

namespace App\Http\Controllers;

use App\Shared\PageInfo;
use Inertia\Response;
use function inertia;

class SettingsController extends Controller
{
    public function index(): Response
    {
        return inertia('Settings', [
            'pageInfo' => new PageInfo(title: __('page-titles.settings')),
        ]);
    }
}
