<?
namespace App\Models\Enums;
enum Roles: int {
    case Admin = 1;
    case Patient = 2;
    case Doctor = 3;
}