<?php

namespace App\Http\Controllers;

use App\Shared\PageInfo;
use Inertia\Response;
use function inertia;

class CyclingTracksController extends Controller
{
    public function index(): Response
    {
        return inertia('Tracks/Cycling', [
            'pageInfo' => new PageInfo(title: __('page-titles.cyclingTracks'), heading: __('page-headings.cyclingTracks'))
        ]);
    }
}
