<?php
/**
 * Created by PhpStorm.
 * User: smirnoff
 * Date: 02.02.19
 * Time: 3:33
 */

namespace App;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    public function hide(array $fields)
    {
        $this->withoutFields = $fields;
        return $this;
    }
}
