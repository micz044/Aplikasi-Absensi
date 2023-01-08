<?php

namespace App\Models;


class Post 
{
    private static $about = [
        "title" => "Profil Pembuat aplikasi",
        "body" => "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Error molestias est, accusantium provident, nostrum nihil accusamus cum minima,
        aliquam ut non aut voluptatem maiores adipisci dignissimos quaerat odit! Culpa reiciendis ducimus illum ut rem sapiente,
        repudiandae laborum similique a, quisquam sequi odit non itaque est animi mollitia,
        accusamus illo eveniet! Dolorum fuga eum dignissimos placeat nesciunt mollitia officia repellendus
        recusandae, alias, eaque at tempora quia pariatur odit quas. Voluptatibus dolore molestiae exercitationem in 
        consectetur expedita itaque saepe est repellendus nisi!"
    ]; 

    public static function all()
    {
        return self::$about;
    }

}
