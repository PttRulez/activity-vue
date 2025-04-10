<?php

namespace App\Http\Controllers;

use App\Shared\PageInfo;
use Inertia\Response;
use function inertia;

class HomeController extends Controller
{
    public function __invoke(): Response
    {
        return inertia('Home', ['pageInfo' => new PageInfo(title: __('page-titles.home'))]);
    }
}
