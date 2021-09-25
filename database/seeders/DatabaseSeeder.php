<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Artist;
use App\Models\Workart;
use App\Models\User;


class DatabaseSeeder extends Seeder
{
  /**
   * Seed the application's database.
   *
   * @return void
   */
  public function run()
  {
    Artist::factory(1)->create([
      'id' => 1,
      'name' => 'Milagros Reyes',
      'profile_picture' => 'uploads_artist/Milagros_Reyes.png',
      'bio' => 'Fotógrafa con estudios de diseño de imagen y sonido, fotografía profesional y creativa, literatura latinoamericana, protocolo e Inglés de negocios.',
      'website' => 'https://culturacolectiva.com/',
      'email' => 'Milagroskrey@gmail.com',
      'instagram' => 'https://www.instagram.com/drrecorda',
      'facebook' => 'https://www.facebook.com/DrRecorda',
      'twitter' => 'https://twitter.com/DrRecorda',
      'other_socials' => '',
      'highlighted' => '0',
    ]);

    Artist::factory(1)->create([
      'id' => 2,
      'name' => 'Andrés Barthel',
      'profile_picture' => 'uploads_artist/Andres_Barthel.png',
      'bio' => 'Para ir de Bogotá hasta Barcelona uno debe pasar por Barthel. La obra del artista colombiano está plagada de trazos punk y de ritmos violentos que encierran la sutileza y la ternura de un hombre violento',
      'website' => 'https://post-punk.com/',
      'email' => 'andresbarthel190@hotmail.com',
      'instagram' => 'https://www.instagram.com/andres_barthel_/?hl=en',
      'facebook' => '',
      'twitter' => '',
      'other_socials' => '',
      'highlighted' => '0',
    ]);

    Artist::factory(1)->create([
      'id' => 3,
      'name' => 'Aluhé Molina',
      'profile_picture' => 'uploads_artist/Aluhe_Molina.png',
      'bio' => 'Dibujanta y escenógrafa rionegrina que se caracteriza de una obra llena de un colorido discurso',
      'website' => 'https://artpop.org/',
      'email' => 'alumolina@hotmail.com',
      'instagram' => 'https://www.instagram.com/aluilus/',
      'facebook' => '',
      'twitter' => '',
      'other_socials' => '',
      'highlighted' => '0',
    ]);

    Artist::factory(1)->create([
      'id' => 4,
      'name' => 'Sara Agustina',
      'profile_picture' => 'uploads_artist/Sara_Agustina.png',
      'bio' => 'Ilustradora, tatuadora y artista visual residente en Cali',
      'website' => 'https://www.behance.net/saraagustina/',
      'email' => 'saraagustina28@gmail.com',
      'instagram' => 'https://www.instagram.com/saraagustina/?hl=en',
      'facebook' => '',
      'twitter' => '',
      'other_socials' => '',
      'highlighted' => '0',
    ]);

    Artist::factory(1)->create([
      'id' => 5,
      'name' => 'Emiliano Montani',
      'profile_picture' => 'uploads_artist/Emiliano_Montani.png',
      'bio' => 'Guitarrista, diseñador y desarrollador web argentino que actualmente reside en Zaragoza',
      'website' => 'https://www.domestika.org/en/emilianomontani',
      'email' => 'emimonta@gmail.com',
      'instagram' => 'https://www.instagram.com/saraagustina/?hl=en',
      'facebook' => 'https://www.facebook.com/soyemontani',
      'twitter' => 'https://twitter.com/soyemont?lang=hr',
      'other_socials' => 'https://www.behance.net/montani?fbclid=IwAR329e3mjl8jvdsmhj7Js4MtYFfUfEhHEw9PthxJvYKhuNiOKNfmfY9DWGg',
      'highlighted' => '0',
    ]);

    Artist::factory(1)->create([
      'id' => 6,
      'name' => 'Rick Wessels',
      'profile_picture' => 'uploads_artist/Rick_Wessels.png',
      'bio' => 'Maastric based artist from Países Bajos',
      'website' => 'https://www.collaging.org/450186287',
      'email' => 'rckwsls@gmail.com',
      'instagram' => 'https://www.instagram.com/rckwsls/?hl=en',
      'facebook' => 'https://www.facebook.com/rckwsls/',
      'twitter' => '',
      'other_socials' => '',
      'highlighted' => '0',
    ]);

    Artist::factory(1)->create([
      'id' => 7,
      'name' => 'Camila Lozano',
      'profile_picture' => 'uploads_artist/Camila_Lozano.png',
      'bio' => 'Ilustradora, tatuadora de Bogotá',
      'website' => 'https://www.picuki.com/profile/marica.mila666',
      'email' => 'marica.mila@gmail.com',
      'instagram' => 'https://www.instagram.com/marica.mila666/?hl=en',
      'facebook' => '',
      'twitter' => '',
      'other_socials' => '',
      'highlighted' => '0',
    ]);


    /**
     *
     * Here comes Milagros Rey workarts.
     *
     */


    Workart::factory(1)->create([
      'artist_id' => '1',
      'title' => '3200',
      'imageworkart' => 'uploads_workart/3200_Reyes.png',
      'edition' => 'Edición abierta',
      'price' => '€20,00 EUR',
      'technique' => 'Impresión digital',
      'theme' => 'Paisajes y arquitectura',
      'category' => 'Mediano',
      'others' => '',
      'carousel' => '0',
    ]);

    Workart::factory(1)->create([
      'artist_id' => '1',
      'title' => 'Satellite of Love',
      'imageworkart' => 'uploads_workart/Satellite_of_Love_Reyes.png',
      'edition' => 'Edición abierta',
      'price' => '€20,00 EUR',
      'technique' => 'Impresión digital',
      'theme' => 'Paisajes y arquitectura',
      'category' => 'Mediano',
      'others' => '',
      'carousel' => '0',
    ]);

    Workart::factory(1)->create([
      'artist_id' => '1',
      'title' => 'Momento Frappé',
      'imageworkart' => 'uploads_workart/Momento_frappe_Reyes.png',
      'edition' => 'Edición abierta',
      'price' => '€40,00 EUR',
      'technique' => 'Impresión digital',
      'theme' => 'Animales',
      'category' => 'Grande',
      'others' => '',
      'carousel' => '0',
    ]);

    Workart::factory(1)->create([
      'artist_id' => '1',
      'title' => 'Este tipo me habla a mí?',
      'imageworkart' => 'uploads_workart/Este_tipo_me_habla_a_mi_Reyes.png',
      'edition' => 'Edición abierta',
      'price' => '€20,00 EUR',
      'technique' => 'Impresión digital',
      'theme' => 'Escenas cotidianas',
      'category' => 'Mediano',
      'others' => '',
      'carousel' => '0',
    ]);

    Workart::factory(1)->create([
      'artist_id' => '1',
      'title' => 'Rhythm',
      'imageworkart' => 'uploads_workart/Rhythm_Reyes.png',
      'edition' => 'Edición abierta',
      'price' => '€20,00 EUR',
      'technique' => 'Impresión digital',
      'theme' => 'Paisajes y arquitectura',
      'category' => 'Mediano',
      'others' => '',
      'carousel' => '0',
    ]);

    Workart::factory(1)->create([
      'artist_id' => '1',
      'title' => '0',
      'imageworkart' => 'uploads_workart/0_Reyes.png',
      'edition' => 'Edición abierta',
      'price' => '€20,00 EUR',
      'technique' => 'Impresión digital',
      'theme' => 'Personas y retratos',
      'category' => 'Mediano',
      'others' => '',
      'carousel' => '0',
    ]);

    /**
     *
     * Here comes Andrés Barthel workarts.
     *
     */


    Workart::factory(1)->create([
      'artist_id' => '2',
      'title' => 'Elefantes',
      'imageworkart' => 'uploads_workart/Elefantes_Barthel.png',
      'edition' => 'Edición abierta',
      'price' => '€20,00 EUR',
      'technique' => 'Dibujo',
      'theme' => 'Urban art',
      'category' => 'Mediano',
      'others' => '',
      'carousel' => '0',
    ]);

    Workart::factory(1)->create([
      'artist_id' => '2',
      'title' => 'Amazonas',
      'imageworkart' => 'uploads_workart/Amazonas_Barthel.png',
      'edition' => 'Edición abierta',
      'price' => '€30,00 EUR',
      'technique' => 'Dibujo',
      'theme' => 'Urban art',
      'category' => 'Mediano',
      'others' => '',
      'carousel' => '0',
    ]);

    Workart::factory(1)->create([
      'artist_id' => '2',
      'title' => 'Hermano Arnu',
      'imageworkart' => 'uploads_workart/Hermano_Arnu_Barthel.png',
      'edition' => 'Edición abierta',
      'price' => '20 euretes',
      'technique' => 'Dibujo',
      'theme' => 'Paisajes y arquitectura',
      'category' => 'Mediano',
      'others' => '',
      'carousel' => '0',
    ]);

    Workart::factory(1)->create([
      'artist_id' => '2',
      'title' => 'Punky y Cerdo',
      'imageworkart' => 'uploads_workart/Punky_y_Cerdo_Barthel.png',
      'edition' => 'Edición abierta',
      'price' => '€20,00 EUR',
      'technique' => 'Dibujo',
      'theme' => 'Escenas cotidianas',
      'category' => 'Mediano',
      'others' => '',
      'carousel' => '0',
    ]);

    Workart::factory(1)->create([
      'artist_id' => '2',
      'title' => 'Alicia',
      'imageworkart' => 'uploads_workart/Alicia_Barthel.png',
      'edition' => 'Edición abierta',
      'price' => '€20,00 EUR',
      'technique' => 'Dibujo',
      'theme' => 'Arte, música y películas',
      'category' => 'Mediano',
      'others' => '',
      'carousel' => '0',
    ]);


    /**
     *
     * Here comes Aluhé Molina workarts.
     *
     */


    Workart::factory(1)->create([
      'artist_id' => '3',
      'title' => 'Verano',
      'imageworkart' => 'uploads_workart/Verano_Molina.png',
      'edition' => 'Edición abierta',
      'price' => '€20,00 EUR',
      'technique' => 'Dibujo',
      'theme' => 'Escenas cotidianas',
      'category' => 'Mediano',
      'others' => '',
      'carousel' => '0',
    ]);

    Workart::factory(1)->create([
      'artist_id' => '3',
      'title' => 'Gata con Botas',
      'imageworkart' => 'uploads_workart/Gata_con_Botas_Molina.png',
      'edition' => 'Edición limitada',
      'price' => '€60,00 EUR',
      'technique' => 'Dibujo',
      'theme' => 'Animales',
      'category' => 'Grande',
      'others' => '',
      'carousel' => '0',
    ]);

    Workart::factory(1)->create([
      'artist_id' => '3',
      'title' => 'Florista Verde',
      'imageworkart' => 'uploads_workart/Florista_Verde_Molina.png',
      'edition' => 'Edición abierta',
      'price' => '€15,00 EUR',
      'technique' => 'Dibujo',
      'theme' => 'Escenas cotidianas',
      'category' => 'Pequeño',
      'others' => '',
      'carousel' => '0',
    ]);

    Workart::factory(1)->create([
      'artist_id' => '3',
      'title' => 'Boga',
      'imageworkart' => 'uploads_workart/Boga_Molina.png',
      'edition' => 'Edición abierta',
      'price' => '€15,00 EUR',
      'technique' => 'Dibujo',
      'theme' => 'Escenas cotidianas',
      'category' => 'Pequeño',
      'others' => '',
      'carousel' => '0',
    ]);

    Workart::factory(1)->create([
      'artist_id' => '3',
      'title' => 'Me pesa la ciudad',
      'imageworkart' => 'uploads_workart/Me_pesa_la_ciudad_Molina.png',
      'edition' => 'Edición abierta',
      'price' => '€28,00 EUR',
      'technique' => 'Dibujo',
      'theme' => 'Paisajes y arquitectura',
      'category' => 'Mediano',
      'others' => '',
      'carousel' => '0',
    ]);

    Workart::factory(1)->create([
      'artist_id' => '3',
      'title' => 'Casa',
      'imageworkart' => 'uploads_workart/Casa_Molina.png',
      'edition' => 'Edición abierta',
      'price' => '€14,00 EUR',
      'technique' => 'Dibujo',
      'theme' => 'Paisajes y arquitecturas',
      'category' => 'Pequeño',
      'others' => '',
      'carousel' => '0',
    ]);

    Workart::factory(1)->create([
      'artist_id' => '3',
      'title' => 'Todos bailan',
      'imageworkart' => 'uploads_workart/Todos_bailan_Molina.png',
      'edition' => 'Edición abierta',
      'price' => '€30,00 EUR',
      'technique' => 'Collage',
      'theme' => 'Personas y retratos',
      'category' => 'Mediano',
      'others' => '',
      'carousel' => '0',
    ]);


    /**
     *
     * Here comes Sara Agustina workarts.
     *
     */


    Workart::factory(1)->create([
      'artist_id' => '4',
      'title' => 'Diosa del Sol',
      'imageworkart' => 'uploads_workart/Diosa_del_Sol_Agustina.png',
      'edition' => 'Edición abierta',
      'price' => '€88,00 EUR',
      'technique' => 'Impresión digital',
      'theme' => 'Personas y retratos',
      'category' => 'Grande',
      'others' => '',
      'carousel' => '0',
    ]);

    Workart::factory(1)->create([
      'artist_id' => '4',
      'title' => 'Amor Libre',
      'imageworkart' => 'uploads_workart/Amor_Libre_Agustina.png',
      'edition' => 'Edición abierta',
      'price' => '€72,00 EUR',
      'technique' => 'Impresión digital',
      'theme' => 'Personas y retratos',
      'category' => 'Grande',
      'others' => '',
      'carousel' => '0',
    ]);

    Workart::factory(1)->create([
      'artist_id' => '4',
      'title' => 'Puta Galáctica',
      'imageworkart' => 'uploads_workart/Puta_Galáctica_Agustina.png',
      'edition' => 'Edición abierta',
      'price' => '€78,00 EUR',
      'technique' => 'Impresión digital',
      'theme' => 'Personas y retratos',
      'category' => 'Grande',
      'others' => '',
      'carousel' => '0',
    ]);

    Workart::factory(1)->create([
      'artist_id' => '4',
      'title' => 'Este cuerpo es mío',
      'imageworkart' => 'uploads_workart/Este_cuerpo_es_mio_Agustina.png',
      'edition' => 'Edición abierta',
      'price' => '€45,00 EUR',
      'technique' => 'Impresión digital',
      'theme' => 'Personas y retratos',
      'category' => 'Mediano',
      'others' => '',
      'carousel' => '0',
    ]);

    Workart::factory(1)->create([
      'artist_id' => '4',
      'title' => 'Narrativa trans',
      'imageworkart' => 'uploads_workart/Narrativa_trans_Agustina.png',
      'edition' => 'Edición abierta',
      'price' => '€45,00 EUR',
      'technique' => 'Impresión digital',
      'theme' => 'Paisajes y arquitecturas',
      'category' => 'Mediano',
      'others' => '',
      'carousel' => '0',
    ]);

    Workart::factory(1)->create([
      'artist_id' => '4',
      'title' => 'Raizal',
      'imageworkart' => 'uploads_workart/Raizal_Agustina.png',
      'edition' => 'Edición abierta',
      'price' => '€30,00 EUR',
      'technique' => 'Impresión digital',
      'theme' => 'Personas y retratos',
      'category' => 'Mediano',
      'others' => '',
      'carousel' => '0',
    ]);


    /**
     *
     * Here comes Emiliano Montani workarts.
     *
     */


    Workart::factory(1)->create([
      'artist_id' => '5',
      'title' => 'Descubrir',
      'imageworkart' => 'uploads_workart/Descubrir_Montani.png',
      'edition' => 'Edición abierta',
      'price' => '€24,00 EUR',
      'technique' => 'Impresión digital',
      'theme' => 'Geométrico',
      'category' => 'Mediano',
      'others' => '',
      'carousel' => '0',
    ]);

    Workart::factory(1)->create([
      'artist_id' => '5',
      'title' => 'Explorar',
      'imageworkart' => 'uploads_workart/Explorar_Montani.png',
      'edition' => 'Edición abierta',
      'price' => '€24,00 EUR',
      'technique' => 'Impresión digital',
      'theme' => 'Geométrico',
      'category' => 'Mediano',
      'others' => '',
      'carousel' => '0',
    ]);

    Workart::factory(1)->create([
      'artist_id' => '5',
      'title' => 'Sumergirse',
      'imageworkart' => 'uploads_workart/Sumergirse_Montani.png',
      'edition' => 'Edición abierta',
      'price' => '€18,00 EUR',
      'technique' => 'Impresión digital',
      'theme' => 'Geométrico',
      'category' => 'Mediano',
      'others' => '',
      'carousel' => '0',
    ]);

    Workart::factory(1)->create([
      'artist_id' => '5',
      'title' => 'Barbarie',
      'imageworkart' => 'uploads_workart/Barbarie_Montani.png',
      'edition' => 'Edición abierta',
      'price' => '€27,00 EUR',
      'technique' => 'Impresión digital',
      'theme' => 'Geométrico',
      'category' => 'Mediano',
      'others' => '',
      'carousel' => '0',
    ]);


    /**
     *
     * Here comes Rick Wessels workarts.
     *
     */


    Workart::factory(1)->create([
      'artist_id' => '6',
      'title' => 'Into the mountains II',
      'imageworkart' => 'uploads_workart/Into_the_mountains_2_Wessels.png',
      'edition' => 'Edición abierta',
      'price' => '€22,00 EUR',
      'technique' => 'Collage digital',
      'theme' => 'Personas y retratos',
      'category' => 'Mediano',
      'others' => '',
      'carousel' => '0',
    ]);

    Workart::factory(1)->create([
      'artist_id' => '6',
      'title' => 'Untrue',
      'imageworkart' => 'uploads_workart/Untrue_Wessels.png',
      'edition' => 'Edición abierta',
      'price' => '€18,00 EUR',
      'technique' => 'Collage digital',
      'theme' => 'Personas y retratos',
      'category' => 'Mediano',
      'others' => '',
      'carousel' => '0',
    ]);

    Workart::factory(1)->create([
      'artist_id' => '6',
      'title' => 'Unbroken',
      'imageworkart' => 'uploads_workart/Unbroken_Wessels.png',
      'edition' => 'Edición abierta',
      'price' => '€23,00 EUR',
      'technique' => 'Collage digital',
      'theme' => 'Personas y retratos',
      'category' => 'Mediano',
      'others' => '',
      'carousel' => '0',
    ]);


    Workart::factory(1)->create([
      'artist_id' => '6',
      'title' => 'Lady In Venice III',
      'imageworkart' => 'uploads_workart/Lady_In_Venice_3_Wessels.png',
      'edition' => 'Edición abierta',
      'price' => '€26,00 EUR',
      'technique' => 'Collage digital',
      'theme' => 'Personas y retratos',
      'category' => 'Mediano',
      'others' => '',
      'carousel' => '0',
    ]);


    /**
     *
     * Here comes Camila Lozano workarts.
     *
     */


    Workart::factory(1)->create([
      'artist_id' => '7',
      'title' => 'Fly Away',
      'imageworkart' => 'uploads_workart/Fly_Away_Lozano.png',
      'edition' => 'Pieza única',
      'price' => '€30,00 EUR',
      'technique' => 'Serigrafía',
      'theme' => 'Geométrico',
      'category' => 'Grande',
      'others' => '',
      'carousel' => '0',
    ]);

    Workart::factory(1)->create([
      'artist_id' => '7',
      'title' => 'Yin Yang',
      'imageworkart' => 'uploads_workart/Yin_Yang_Lozano.png',
      'edition' => 'Pieza única',
      'price' => '€35,00 EUR',
      'technique' => 'Serigrafía',
      'theme' => 'Geométrico',
      'category' => 'Grande',
      'others' => '',
      'carousel' => '0',
    ]);

    User::factory(1)->create([
      'id' => 1,
      'name' => 'Admin',
      'email' => 'admin@gmail.com',
      'isAdmin' => true,
    ]);
  }
}
