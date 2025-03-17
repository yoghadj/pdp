<?php

namespace Database\Seeders;

use App\Models\Permission;
use Illuminate\Database\Seeder;

class PermissionsTableSeeder extends Seeder
{
    public function run()
    {
        $permissions = [
            [
                //'id'    => 1,
                'title' => 'user_management_access',
            ],
            [
                //'id'    => 2,
                'title' => 'permission_create',
            ],
            [
                //'id'    => 3,
                'title' => 'permission_edit',
            ],
            [
                //'id'    => 4,
                'title' => 'permission_show',
            ],
            [
                //'id'    => 5,
                'title' => 'permission_delete',
            ],
            [
                //'id'    => 6,
                'title' => 'permission_access',
            ],
            [
                //'id'    => 7,
                'title' => 'role_create',
            ],
            [
                //'id'    => 8,
                'title' => 'role_edit',
            ],
            [
                //'id'    => 9,
                'title' => 'role_show',
            ],
            [
                //'id'    => 10,
                'title' => 'role_delete',
            ],
            [
                //'id'    => 11,
                'title' => 'role_access',
            ],
            [
                //'id'    => 12,
                'title' => 'user_create',
            ],
            [
                //'id'    => 13,
                'title' => 'user_edit',
            ],
            [
                //'id'    => 14,
                'title' => 'user_show',
            ],
            [
                //'id'    => 15,
                'title' => 'user_delete',
            ],
            [
                //'id'    => 16,
                'title' => 'user_access',
            ],
            [
                //'id'    => 17,
                'title' => 'ropa_create',
            ],
            [
                //'id'    => 18,
                'title' => 'ropa_edit',
            ],
            [
                //'id'    => 19,
                'title' => 'ropa_show',
            ],
            [
                //'id'    => 20,
                'title' => 'ropa_delete',
            ],
            [
                //'id'    => 21,
                'title' => 'ropa_access',
            ],
            [
                //'id'    => 22,
                'title' => 'audit_log_show',
            ],
            [
                //'id'    => 23,
                'title' => 'audit_log_access',
            ],
            [
                //'id'    => 24,
                'title' => 'reference_access',
            ],
            [
                //'id'    => 25,
                'title' => 'organization_create',
            ],
            [
                //'id'    => 26,
                'title' => 'organization_edit',
            ],
            [
                //'id'    => 27,
                'title' => 'organization_show',
            ],
            [
                //'id'    => 28,
                'title' => 'organization_delete',
            ],
            [
                //'id'    => 29,
                'title' => 'organization_access',
            ],
            [
                //'id'    => 30,
                'title' => 'cenderung_create',
            ],
            [
                //'id'    => 31,
                'title' => 'cenderung_edit',
            ],
            [
                //'id'    => 32,
                'title' => 'cenderung_show',
            ],
            [
                //'id'    => 33,
                'title' => 'cenderung_delete',
            ],
            [
                //'id'    => 34,
                'title' => 'cenderung_access',
            ],
            [
                //'id'    => 35,
                'title' => 'dampak_create',
            ],
            [
                //'id'    => 36,
                'title' => 'dampak_edit',
            ],
            [
                //'id'    => 37,
                'title' => 'dampak_show',
            ],
            [
                //'id'    => 38,
                'title' => 'dampak_delete',
            ],
            [
                //'id'    => 39,
                'title' => 'dampak_access',
            ],
            [
                //'id'    => 40,
                'title' => 'cenderung_dampak_create',
            ],
            [
                //'id'    => 41,
                'title' => 'cenderung_dampak_edit',
            ],
            [
                //'id'    => 42,
                'title' => 'cenderung_dampak_show',
            ],
            [
                //'id'    => 43,
                'title' => 'cenderung_dampak_delete',
            ],
            [
                //'id'    => 44,
                'title' => 'cenderung_dampak_access',
            ],
            [
                //'id'    => 45,
                'title' => 'penanganan_create',
            ],
            [
                //'id'    => 46,
                'title' => 'penanganan_edit',
            ],
            [
                //'id'    => 47,
                'title' => 'penanganan_show',
            ],
            [
                //'id'    => 48,
                'title' => 'penanganan_delete',
            ],
            [
                //'id'    => 49,
                'title' => 'penanganan_access',
            ],
            [
                //'id'    => 50,
                'title' => 'pium_access',
            ],
            [
                //'id'    => 51,
                'title' => 'kategori_create',
            ],
            [
                //'id'    => 52,
                'title' => 'kategori_edit',
            ],
            [
                //'id'    => 53,
                'title' => 'kategori_show',
            ],
            [
                //'id'    => 54,
                'title' => 'kategori_delete',
            ],
            [
                //'id'    => 55,
                'title' => 'kategori_access',
            ],
            [
                //'id'    => 56,
                'title' => 'assess_create',
            ],
            [
                //'id'    => 57,
                'title' => 'assess_edit',
            ],
            [
                //'id'    => 58,
                'title' => 'assess_show',
            ],
            [
                //'id'    => 59,
                'title' => 'assess_delete',
            ],
            [
                //'id'    => 60,
                'title' => 'assess_access',
            ],
            [
                //'id'    => 61,
                'title' => 'content_management_access',
            ],
            [
                //'id'    => 62,
                'title' => 'content_category_create',
            ],
            [
                //'id'    => 63,
                'title' => 'content_category_edit',
            ],
            [
                //'id'    => 64,
                'title' => 'content_category_show',
            ],
            [
                //'id'    => 65,
                'title' => 'content_category_delete',
            ],
            [
                //'id'    => 66,
                'title' => 'content_category_access',
            ],
            [
                //'id'    => 67,
                'title' => 'content_tag_create',
            ],
            [
                //'id'    => 68,
                'title' => 'content_tag_edit',
            ],
            [
                //'id'    => 69,
                'title' => 'content_tag_show',
            ],
            [
                //'id'    => 70,
                'title' => 'content_tag_delete',
            ],
            [
                //'id'    => 71,
                'title' => 'content_tag_access',
            ],
            [
                //'id'    => 72,
                'title' => 'content_page_create',
            ],
            [
                //'id'    => 73,
                'title' => 'content_page_edit',
            ],
            [
                //'id'    => 74,
                'title' => 'content_page_show',
            ],
            [
                //'id'    => 75,
                'title' => 'content_page_delete',
            ],
            [
                //'id'    => 76,
                'title' => 'content_page_access',
            ],
            [
                //'id'    => 77,
                'title' => 'profile_password_edit',
            ],
        ];

        Permission::insert($permissions);
    }
}
