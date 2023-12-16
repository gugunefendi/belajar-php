<?php

// VARIABEL DAN TIPE DATA
// cara membuat variabel di PHP adalah dengan $ (dolllar)
// PHP memiliki 8 tipe data
// 1. String : (teks) string dapat di deklarasikan dengan tanda kutip '' atau ""
// 2. integer : Digunakan untuk menyimpan bilangan bulat (angka tanpa desimal)
// 3. float : Digunakan untuk menyimpan angka desimal
// 4. Boolean : Digunakan untuk menyimpan nilai kebenaran true atau false
// 5. Array : Digunakan untuk menyimpan sekumpulan nilai. PHP mendukung array numerik (indeks berupa angka) dan array asosiatif (indeks berupa string)
// 6. Object : Digunakan untuk membuat tipe data baru yang dapat menyimpan data dan fungsi. Object biasanya di buat dari kelas (class)
// 7. NULL : Digunakan untuk menyatakan bawah variabel tidak memiliki nilai
// 8. Resource : Tipe data ini digunakan untuk mempresentasikan sumber daya eksternal, seperti koneksi ke database atau manipulasi berkas. Contoh (resource biasanya dihasilkan oleh fungsi tertentu)

// membuat variabel name tanpa menginisialisasi tipe data
$name;
// jika kita print $name maka akan eror karena $name tidak di inisialisasi tipe datanya

// membuat variabel age dengan tipe data int
$age = 30;

// membuat variabel height dengan tipe data float
$height = 176.3;

// membubat variabel marriage dengan tipe data boolean
$marriage = true;

// membuat array numerik (indeks berupa angka)
$scores = [12, 44, 77, 89];
// membuat array assosiatif (indeks berupa string)
$users = ["name" => "Gunawan", "email" => "gunawanefendi@gmail.com", "role" => "user"];

// membuat variabel global
$GLOBALS['x'] = 10;
$CREATOR = 'Gunawan Efendi';