<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Film extends Model
{
    protected $fillable = ['youtube_id', 'film_title', 'film_publication_date', 'film_author'];

    public static function saveClip($film_link)
    {
        $youtubeData = [];
        $explodedLink = explode('v=', $film_link);
        $youtube = file_get_contents($film_link);
        // TODO: if movie existed, don't add it
        if (Film::where('youtube_id', $explodedLink[1])->first()) {
            return false;
        };
        $youtubeData['youtube_id'] = $explodedLink[1];
        $youtubeData['film_author'] = Film::extractAuthor($youtube);
        $youtubeData['film_title'] = Film::extractTitle($youtube);
        $youtubeData['film_publication_date'] = Film::extractPublicationDate($youtube);
        return $youtubeData;
    }

    public function categories()
    {
        return $this->belongsToMany(Category::class, 'categories_films');
    }

    public function users()
    {
        return $this->belongsToMany(User::class, 'films_users');
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
