# Lab11Web
## DI Readme ini akan menjelaskan Tugas Praktikum 11 - 13
---

# PRAKTIKUM 11
Instalasi Codeigniter 4
Untuk melakukan instalasi Codeigniter 4 dapat dilakukan dengan dua cara, yaitu cara 
manual dan menggunakan `composer`. Pada praktikum ini kita menggunakan cara 
manual.
* Unduh Codeigniter dari website `https://codeigniter.com/download`
* Extrak file zip Codeigniter ke direktori `htdocs/lab11_ci`.
* Ubah nama direktory framework-4.x.xx menjadi `ci4`.
* Buka browser dengan alamat `http://localhost/lab11_ci/ci4/public/`

![image](https://user-images.githubusercontent.com/101393632/176114727-fb2d9470-1c25-4826-af6c-7c6d7d3220c0.png)

## membuat Route baru
Tambahkan kode berikut di dalam `Routes.php`

![image](https://user-images.githubusercontent.com/101393632/176117359-a8d84586-873a-4e47-96af-4fcb2c10300e.png)

Selanjutnya coba akses route yang telah dibuat dengan mengakses alamat url `http://localhost/lab11_ci/ci4/public/about`

![image](https://user-images.githubusercontent.com/101393632/176117888-74196594-cac2-43e3-9809-06e53af4fa69.png)

Ketika diakses akan mucul tampilan error 404 file not found, itu artinya file/page 
tersebut tidak ada. Untuk dapat mengakses halaman tersebut, harus dibuat terlebih 
dahulu Contoller yang sesuai dengan routing yang dibuat yaitu Contoller Page.

## membuat Controller
Selanjutnya adalah membuat Controller Page. Buat file baru dengan nama `page.php`
pada direktori Controller

![image](https://user-images.githubusercontent.com/101393632/176118307-7691576e-3af1-4e05-a9b2-69149f37c415.png)

## Auto Routing
Secara default fitur autoroute pada Codeiginiter sudah aktif. Untuk mengubah status 
autoroute dapat mengubah nilai variabelnya. Untuk menonaktifkan ubah nilai `true`
menjadi `false`.

![image](https://user-images.githubusercontent.com/101393632/176118748-036ef448-88eb-4fa4-baaa-4cf523961890.png)

![image](https://user-images.githubusercontent.com/101393632/176119041-a4449459-21ee-4000-bfa2-10de9d415cba.png)

## membuat view
Selanjutnya adalam membuat view untuk tampilan web agar lebih menarik. Buat file 
baru dengan nama about.php pada direktori view (app/view/about.php) kemudian isi 
kodenya seperti berikut.

![image](https://user-images.githubusercontent.com/101393632/176124049-c55aff7b-189a-4621-922a-6e48ac7d9bbd.png)


![image](https://user-images.githubusercontent.com/101393632/176123983-6d1394ca-9b1f-42ab-80e8-c6fa62a843ae.png)

## Membuat Layout Web dengan CSS
Pada dasarnya layout web dengan css dapat diimplamentasikan dengan mudah pada 
codeigniter. Yang perlu diketahui adalah, pada Codeigniter 4 file yang menyimpan asset 
css dan javascript terletak pada direktori public. 

Buat file css pada direktori public dengan nama `style.css` (copy file dari praktikum 
lab4_layout. Kita akan gunakan layout yang pernah dibuat pada praktikum 4)

![image](https://user-images.githubusercontent.com/101393632/176124718-797c7467-dcf3-431f-bfd1-3a140ab095e3.png)

Kemudian buat folder `template` pada direktori `view` kemudian buat file `header.php` dan 
`footer.php`

