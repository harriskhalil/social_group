<?php

namespace App\Enums;

enum UserRoleEnum:string {
    case President = 'president';
    case VicePresident = 'vice_president';
    case SuperAdmin='super_admin';
}
