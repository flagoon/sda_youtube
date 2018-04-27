<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Film extends Model
{
    public static function saveClip($film_link)
    {
        $youtubeData = [];
        $explodedLink = explode('v=', $film_link);
        $youtube = file_get_contents($film_link);
        $youtubeData['film_id'] = $explodedLink[1];
        $youtubeData['author'] = Film::extractAuthor($youtube);
        $youtubeData['title'] = Film::extractTitle($youtube);
        $youtubeData['date'] = Film::extractPublicationDate($youtube);
        return $youtubeData;
    }

    public function categories()
    {
        $this->belongsToMany(Category::class);
    }

    public function users()
    {
        $this->belongsToMany(User::class);
    }

    static private function extractTitle(string $youtubePage)
    {
        preg_match('/id="eow-title".*title="(.*)"/U', $youtubePage, $matches);
        return $matches[1];
    }

    static private function extractPublicationDate(string $youtubePage)
    {
        preg_match('/watch-time-text">(.*)<\/strong/U', $youtubePage, $matches);
        return $matches[1];
    }

    static private function extractAuthor(string $youtubePage)
    {
        preg_match('/a href="\/channel\/.*>(.*)<\/a>/U', $youtubePage, $matches);
        return $matches[1];
    }
}
