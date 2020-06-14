<?php  //php I think =)

namespace App\Traits;  //declaring the namespace 'App\Traits'

trait getRating  //Trait for Key model for getting rating and returning it
{
    public function ratingCount($array, string $rating_type)  //Count values from an array. Function for getRatings (top_keys template)
    {
        $rating_sum = 0;
        $rating_count = 0;

        foreach ($array as $object) {
            $rating_sum += $object->$rating_type;
            $rating_count += 1;
        }

        return [
            'rating_sum' => $rating_sum,
            'rating_count' => $rating_count,
        ];
    }

    public function getRatings(string $hash)  //Getting ratings from the database and give it to ratingCount function (top_keys template)
    {   
        $quality_ratings = \DB::table('reviews')->where('key', '=', $hash)->select('quality_rating')->get();
        $timing_ratings = \DB::table('reviews')->where('key', '=', $hash)->select('timings_rating')->get();
        $sociability_ratings = \DB::table('reviews')->where('key', '=', $hash)->select('sociability_rating')->get();

        $quality_rating = $this->ratingCount($quality_ratings, 'quality_rating');
        $timings_rating = $this->ratingCount($timing_ratings, 'timings_rating');
        $sociability_rating = $this->ratingCount($sociability_ratings, 'sociability_rating');

        $rating_sum = $quality_rating['rating_sum'] + $timings_rating['rating_sum'] + $sociability_rating['rating_sum'];
        $rating_count = $quality_rating['rating_count'] + $timings_rating['rating_count'] + $sociability_rating['rating_count'];

        if ($rating_count == 0)
        {
            $rating = 0;
        } else {
            $rating = $rating_sum / $rating_count;
        }

        return substr($rating, 0, 3);
    }

    public static function getRating(string $hash)  //Getting rating from the database for specific person (profile template)
    {   
        $quality_ratings = \DB::table('reviews')->where('key', '=', $hash)->select('quality_rating')->get();
        $timing_ratings = \DB::table('reviews')->where('key', '=', $hash)->select('timings_rating')->get();
        $sociability_ratings = \DB::table('reviews')->where('key', '=', $hash)->select('sociability_rating')->get();

        function ratingsCount($array, string $rating_type)  //Count values from an array. Function for getRating (profile template)
        {
            $rating_sum = 0;
            $rating_count = 0;
    
            foreach ($array as $object) {
                $rating_sum += $object->$rating_type;
                $rating_count += 1;
            }
    
            return [
                'rating_sum' => $rating_sum,
                'rating_count' => $rating_count,
            ];
        }

        $quality_rating = ratingsCount($quality_ratings, 'quality_rating');
        $timings_rating = ratingsCount($timing_ratings, 'timings_rating');
        $sociability_rating = ratingsCount($sociability_ratings, 'sociability_rating');

        $rating_sum = $quality_rating['rating_sum'] + $timings_rating['rating_sum'] + $sociability_rating['rating_sum'];
        $rating_count = $quality_rating['rating_count'] + $timings_rating['rating_count'] + $sociability_rating['rating_count'];

        if ($rating_count == 0)
        {
            $rating = 0;
        } else {
            $rating = $rating_sum / $rating_count;
        }

        return substr($rating, 0, 3);
    }
}  //Maybe this is closes bracket?
