<?php

namespace App\Controllers;

class Page extends BaseController
{
  public function about()
  {
    return view('about', [
      'title' => 'Halaman About',
      'content' => 'Ini adalah halaman about yang menjelaskan tentang isi 
        halaman ini.'
    ]);
  }

  public function contact()
  {
    return view('contact', [
      'title' => 'Halaman kontak',
      'content' => 'Ini adalah halaman contact yang menjelaskan tentang isi 
        halaman ini.'
    ]);
  }
  public function faqs()
  {
    return view('faqs', [
      'title' => 'Halaman Artikel',
      'content' => 'Ini adalah halaman artikel yang menjelaskan tentang isi 
        halaman ini.'
    ]);
  }
  public function tos()
  {
    return view('tos', [
      'title' => 'Halaman tos',
      'content' => 'Ini adalah halaman tos yang menjelaskan tentang isi 
        halaman ini.'
    ]);
  }
  public function home()
  {
    return view('home', [
      'title' => 'Halaman home',
      'content' => 'Ini adalah halaman home yang menjelaskan tentang isi 
        halaman ini.'
    ]);
  }
}
  // public function contact()
  // {
  //   echo "Ini halaman Contact";
  // }
  // public function faqs()
  // {
  //   echo "Ini halaman FAQ";
  // }
  // public function tos()
  // {
  //   echo "ini halaman Term of Services";
  // }
