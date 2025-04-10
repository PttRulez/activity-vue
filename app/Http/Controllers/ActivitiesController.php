<?php

namespace App\Http\Controllers;

use App\Shared\PageInfo;
use Inertia\Response;
use function inertia;

class ActivitiesController extends Controller
{
    public function index(): Response
    {
        return inertia('Activities', [
            'pageInfo' => new PageInfo(title: __('page-titles.activities'))
        ]);
    }
}
