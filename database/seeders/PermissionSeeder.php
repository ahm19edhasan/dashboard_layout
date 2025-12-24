<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Update Permission Table Settings
        $permissions = [
            [
                'en' => 'Advertiser-List',
                'ar' => 'قائمة أصحاب الإعلانات',
            ],
            [
                'en' => 'Advertiser-Create',
                'ar' => 'إنشاء صاحب إعلان',
            ],
            [
                'en' => 'Advertiser-Edit',
                'ar' => 'تعديل صاحب إعلان',
            ],
            [
                'en' => 'Advertiser-Delete',
                'ar' => 'حذف صاحب إعلان',
            ],
            [
                'en' => 'Publisher-List',
                'ar' => 'قائمة الناشرين',
            ],
            [
                'en' => 'Publisher-Create',
                'ar' => 'إنشاء ناشر',
            ],
            [
                'en' => 'Publisher-Edit',
                'ar' => 'تعديل ناشر',
            ],
            [
                'en' => 'Publisher-Delete',
                'ar' => 'حذف ناشر',
            ],
            [
                'en' => 'Category-List',
                'ar' => 'قائمة الفئات',
            ],
            [
                'en' => 'Category-Create',
                'ar' => 'إنشاء فئة',
            ],
            [
                'en' => 'Category-Edit',
                'ar' => 'تعديل فئة',
            ],
            [
                'en' => 'Category-Delete',
                'ar' => 'حذف فئة',
            ],
            [
                'en' => 'Country-List',
                'ar' => 'قائمة الدول',
            ],
            [
                'en' => 'Country-Create',
                'ar' => 'إنشاء دولة',
            ],
            [
                'en' => 'Country-Edit',
                'ar' => 'تعديل دولة',
            ],
            [
                'en' => 'Country-Delete',
                'ar' => 'حذف دولة',
            ],
            [
                'en' => 'Advertisement-List',
                'ar' => 'قائمة الإعلانات',
            ],
            [
                'en' => 'Advertisement-Create',
                'ar' => 'إنشاء إعلان',
            ],
            [
                'en' => 'Advertisement-Edit',
                'ar' => 'تعديل إعلان',
            ],
            [
                'en' => 'Advertisement-Delete',
                'ar' => 'حذف إعلان',
            ],
            [
                'en' => 'Admin-List',
                'ar' => 'قائمة المسؤولين',
            ],
            [
                'en' => 'Admin-Create',
                'ar' => 'إنشاء مسؤول',
            ],
            [
                'en' => 'Admin-Edit',
                'ar' => 'تعديل مسؤول',
            ],
            [
                'en' => 'Admin-Delete',
                'ar' => 'حذف مسؤول',
            ],
            [
                'en' => 'Role-List',
                'ar' => 'قائمة الصلاحيات',
            ],
            [
                'en' => 'Role-Create',
                'ar' => 'إنشاء صلاحية',
            ],
            [
                'en' => 'Role-Edit',
                'ar' => 'تعديل صلاحية',
            ],
            [
                'en' => 'Role-Delete',
                'ar' => 'حذف صلاحية',
            ],

        ];

        foreach ($permissions as $key => $value) {

            // Permission::create(['name' => $permission]);
            Permission::updateOrCreate([
                'name_en' => $value['en'],
                'name_ar' => $value['ar'],
            ],
                ['guard_name' => 'admin']
            );
        }
    }
}
