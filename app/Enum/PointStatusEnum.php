<?php

namespace App\Enum;

// This enumeration describes the status of the Point which can be Free or Occupied
enum PointStatusEnum: string
{
    case Free = 'free';
    case Occupied = 'occupied';
}
