<?php

namespace Theme\Models;

use Radiate\Database\Models\Term as Model;

class PostTag extends Model
{
    /**
     * The taxonomy
     *
     * @var string
     */
    protected static $taxonomy = 'post_tag';
}
