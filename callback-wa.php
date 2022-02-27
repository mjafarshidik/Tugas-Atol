<?php
   include("functions.php");
   $content=file_get_contents('php://input');
   $payload=json_decode($content,true); // konversi payload ke array asosiatif
   $pengirim=$payload["from"];
   $pesan=$payload["message"];
   $jawaban="";
   if(strtolower($pesan)=="hi") $jawaban="Hi juga..."; else
   if(strtolower($pesan)=="?nama") $jawaban="Nama saya Andri Heryandi"; else
   if(strtolower($pesan)=="?alamat") $jawaban="Saya tinggal di Bandung"; else
                                     $jawaban="Saya tidak mengerti pertanyaan anda";
   sendWhatsapp($pengirim,$jawaban);
