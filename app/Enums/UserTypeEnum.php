<?php
namespace App\Enums;

enum UserTypeEnum:string {
//admin','editor','guest'
    case Admin = 'admin';
    case Editor = 'editor';
    case Guest='guest';
}
