<?php
namespace App\Http\Controllers;

use App\Episode;

class EpisodesController extends BaseController
{
    public function __construct()
    {
        $this->class = Episode::class;
    }

    public function getBySerie(int $serieId) {
        $episodes = Episode::query()->where('serie_id', $serieId)->paginate();
        return $episodes;
    }
}
