<?php

namespace App\Models;

use Database\Factories\CohortFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cohort extends Model
{
    /** @use HasFactory<CohortFactory> */
    use HasFactory;
}
