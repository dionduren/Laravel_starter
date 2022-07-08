<?php

// bagian ini tidak perlu karena sudah tersambung dengan database

namespace App\Models;

// model jadi tempat menyimpan function dan data agar bisa digunakan berkali2. DB katnaya nanti disimpan di sini

class Datas
{
  private static $dashboard_data = [
    [
      "title" => "Dashboard Admin",
      "slug"  => "dashboard-admin",
      "author" => "Admin",
      "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Sapiente inventore eos quis, error ad odio nemo aut molestias quaerat deleniti. Ullam ducimus harum, ipsa saepe accusamus rem at est voluptas excepturi dolor suscipit blanditiis inventore quis sequi soluta vitae nobis mollitia maxime sunt amet. Numquam porro consequatur dolore ut dolores pariatur cupiditate quidem. Explicabo et, in sunt molestiae sint quae temporibus, enim iure illum blanditiis alias laudantium quam mollitia odit voluptas distinctio, ducimus voluptatem sed possimus cupiditate tempora minus vel?"
    ],
    [
      "title" => "Dashboard User",
      "slug"  => "dashboard-user",
      "author" => "User",
      "body" => "Oh-oh Aku takkan pernah berhenti Akan terus memahami, masih terus berfikir Bila harus memaksa atau berdarah untukmu Apapun itu asal kau mencoba menerimaku Dan kamu hanya perlu terima Dan tak harus memahami dan tak harus berfikir Hanya perlu mengerti, aku bernafas untukmu Jadi tetaplah di sini dan mulai menerimaku Cobalah mengerti semua ini mencari arti Selamanya takkan berhenti Inginkan rasakan rindu ini menjadi satu Biar waktu yangmemisahkan Dan kamu hanya perlu terima Dan tak harus memahami dan tak harus berfikir Hanya perlu mengerti, aku bernafas untukmu Jadi tetaplah di sini dan mulai menerimaku, oh Cobalah mengerti semua ini mencari arti Selamanya takkan berhenti Inginkan rasakan rindu ini menjadi satu Biar waktu yang memisahkan Huu-huu-huu Oh, cobalah mengerti semua ini mencari arti Selamanya takkan berhenti Inginkan rasakan rindu ini menjadi satu Biar waktu yang memisahkan Cobalah mengerti semua ini mencari arti Selamanya takkan berhenti, ho-o Selamanya takkan berhenti"
    ]
  ];

  public static function all()
  {
    return collect(self::$dashboard_data);
  }

  public static function find($slug)
  {
    // // data berisi array dari $dashboard_data
    // // $datax = self::$dashboard_data;
    // $datax = static::all();

    // // variabel untuk menyimpan data yang dicari
    // $new_data = [];
    // // pengulangan untuk memecah data array
    // foreach ($datax as $file) {
    //   // kalau halaman website namanya sesuai dengan slug yang terdapat di variabel slug di array ke-x, maka:
    //   if ($file["slug"] === $slug) {
    //     //variabel new data akan membawa data array ke-x menuju halaman tersebut untuk ditampilkan
    //     $new_data = $file;
    //   }
    // }
    // // yang dikembalikan adalah variabel array ke-x beserta variabel2nya
    // return $new_data;

    // data berisi array dari $dashboard_data
    $datax = static::all();

    // bentuk dari fungsi collection array, di mana fungsinya melakukan pencarian
    // untuk data pertama yang memiliki 'slug' yang sama dengan variabel $slug dari web.php
    return $datax->firstWhere('slug', $slug);
  }
}
