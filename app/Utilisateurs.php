<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Utilisateurs extends Model
{
    const GENDER_MALE = 1;
    const GENDER_FEMALE = 2;
    const GENDER_OTHER = 3;

    const MOOD_SAD = 1;
    const MOOD_HAPPY = 2;

    const NEWS_NO = 0;
    const NEWS_YES = 1;


    protected $casts = [
        'gender' => 'integer',
        'newsletter' => 'boolean',
        'mood' => 'integer',
    ];


    public static function moodFormatter($number)
    {

        if ($number == self::MOOD_SAD) {
            $text = 'Sad';
        } elseif ($number == 2) {
            $text = 'Happy';
        }

        return $text;
    }

    public static function genderFormatter($number)
    {
        if ($number == 1) {
            $text = 'men';
        } elseif ($number == 2) {
            $text = 'women';
        } elseif ($number == 3) {
            $text = 'other';
        }
        return $text;
    }

    public static function newsletterFotmatter($number)
    {

        if ($number == 0) {
            $text = 'no';
        } elseif ($number == 1) {
            $text = 'yes';
        }
        return $text;
    }


    public function insert(array $data)
    {
        $this->setAttribute('firstname', $data['firstname']);
        $this->setAttribute('lastname', $data['lastname']);
        $this->setAttribute('gender', $data['gender']);
        $this->setAttribute('newsletter', $data['newsletter']);
        $this->setAttribute('mood', $data['mood']);

        $this->save();
        return true;
    }


}
