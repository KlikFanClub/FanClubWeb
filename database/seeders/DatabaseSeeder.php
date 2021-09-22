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
            'name'=>'Milagros Rey',
            'profile_picture'=>'',
            'bio'=>'Fotógrafa con estudios de diseño de imagen y sonido, fotografía profesional y creativa, literatura latinoamericana, protocolo e Inglés de negocios.',
            'website'=>'https://culturacolectiva.com/',
            'email'=>'Milagroskrey@gmail.com',
            'instagram'=>'https://www.instagram.com/drrecorda',
            'facebook'=>'https://www.facebook.com/DrRecorda',
            'twitter'=>'https://twitter.com/DrRecorda',
            'other_socials'=>'',
            'highlighted'=>'0',
        ]);

        Artist::factory(1)->create([
            'name'=>'Andrés Barthel',
            'profile_picture'=>'',
            'bio'=>'Para ir de Bogotá hasta Barcelona uno debe pasar por Barthel. La obra del artista colombiano está plagada de trazos punk y de ritmos violentos que encierran la sutileza y la ternura de un hombre violento',
            'website'=>'https://post-punk.com/',
            'email'=>'andresbarthel190@hotmail.com',
            'instagram'=>'https://www.instagram.com/andres_barthel_/?hl=en',
            'facebook'=>'',
            'twitter'=>'',
            'other_socials'=>'',
            'highlighted'=>'0',
        ]);

        Artist::factory(1)->create([
            'name'=>'Aluhé Molina',
            'profile_picture'=>'',
            'bio'=>'Dibujanta y escenógrafa rionegrina que se caracteriza de una obra llena de un colorido discurso',
            'website'=>'https://artpop.org/',
            'email'=>'alumolina@hotmail.com',
            'instagram'=>'https://www.instagram.com/aluilus/',
            'facebook'=>'',
            'twitter'=>'',
            'other_socials'=>'',
            'highlighted'=>'0',
        ]);

        Artist::factory(1)->create([
            'name'=>'Sara Agustina',
            'profile_picture'=>'',
            'bio'=>'Ilustradora, tatuadora y artista visual residente en Cali',
            'website'=>'https://www.behance.net/saraagustina/',
            'email'=>'saraagustina28@gmail.com',
            'instagram'=>'https://www.instagram.com/saraagustina/?hl=en',
            'facebook'=>'',
            'twitter'=>'',
            'other_socials'=>'',
            'highlighted'=>'0',
        ]);

        Artist::factory(1)->create([
            'name'=>'Emiliano Montani',
            'profile_picture'=>'',
            'bio'=>'Guitarrista, diseñador y desarrollador web argentino que actualmente reside en Zaragoza',
            'website'=>'https://www.domestika.org/en/emilianomontani',
            'email'=>'emimonta@gmail.com',
            'instagram'=>'https://www.instagram.com/saraagustina/?hl=en',
            'facebook'=>'https://www.facebook.com/soyemontani',
            'twitter'=>'https://twitter.com/soyemont?lang=hr',
            'other_socials'=>'https://www.behance.net/montani?fbclid=IwAR329e3mjl8jvdsmhj7Js4MtYFfUfEhHEw9PthxJvYKhuNiOKNfmfY9DWGg',
            'highlighted'=>'0',
        ]);

        Artist::factory(1)->create([
            'name'=>'Rick Wessels',
            'profile_picture'=>'',
            'bio'=>'Maastric based artist from Países Bajos',
            'website'=>'https://www.collaging.org/450186287',
            'email'=>'rckwsls@gmail.com',
            'instagram'=>'https://www.instagram.com/rckwsls/?hl=en',
            'facebook'=>'https://www.facebook.com/rckwsls/',
            'twitter'=>'',
            'other_socials'=>'',
            'highlighted'=>'0',
        ]);

        Artist::factory(1)->create([
            'name'=>'Camila Lozano',
            'profile_picture'=>'',
            'bio'=>'Ilustradora, tatuadora de Bogotá',
            'website'=>'https://www.picuki.com/profile/marica.mila666',
            'email'=>'marica.mila@gmail.com',
            'instagram'=>'https://www.instagram.com/marica.mila666/?hl=en',
            'facebook'=>'',
            'twitter'=>'',
            'other_socials'=>'',
            'highlighted'=>'0',
        ]);


                                /**
                                 *
                                 * Here comes Milagros Rey workarts.
                                 *
                                 */


        Workart::factory(1)->create([
            'artist_id'=>'1',
            'title'=>'3200',
            'imageworkart'=>'',
            'edition'=>'Edición abierta',
            'price'=>'€20,00 EUR',
            'technique'=>'Impresión digital',
            'theme'=>'Paisajes y arquitectura',
            'category'=>'Mediano',
            'others'=>'',
            'carousel'=>'0',
        ]);

        Workart::factory(1)->create([
            'artist_id'=>'1',
            'title'=>'Satellite of Love',
            'imageworkart'=>'',
            'edition'=>'Edición abierta',
            'price'=>'€20,00 EUR',
            'technique'=>'Impresión digital',
            'theme'=>'Paisajes y arquitectura',
            'category'=>'Mediano',
            'others'=>'',
            'carousel'=>'0',
        ]);

        Workart::factory(1)->create([
            'artist_id'=>'1',
            'title'=>'Momento Frappé',
            'imageworkart'=>'',
            'edition'=>'Edición abierta',
            'price'=>'€40,00 EUR',
            'technique'=>'Impresión digital',
            'theme'=>'Animales',
            'category'=>'Grande',
            'others'=>'',
            'carousel'=>'0',
        ]);

        Workart::factory(1)->create([
            'artist_id'=>'1',
            'title'=>'Este tipo me habla a mí?',
            'imageworkart'=>'',
            'edition'=>'Edición abierta',
            'price'=>'€20,00 EUR',
            'technique'=>'Impresión digital',
            'theme'=>'Escenas cotidianas',
            'category'=>'Mediano',
            'others'=>'',
            'carousel'=>'0',
        ]);

        Workart::factory(1)->create([
            'artist_id'=>'1',
            'title'=>'Rhythm',
            'imageworkart'=>'',
            'edition'=>'Edición abierta',
            'price'=>'€20,00 EUR',
            'technique'=>'Impresión digital',
            'theme'=>'Paisajes y arquitectura',
            'category'=>'Mediano',
            'others'=>'',
            'carousel'=>'0',
        ]);

        Workart::factory(1)->create([
            'artist_id'=>'1',
            'title'=>'0',
            'imageworkart'=>'',
            'edition'=>'Edición abierta',
            'price'=>'€20,00 EUR',
            'technique'=>'Impresión digital',
            'theme'=>'Personas y retratos',
            'category'=>'Mediano',
            'others'=>'',
            'carousel'=>'0',
        ]);

                                /**
                                 *
                                 * Here comes Andrés Barthel workarts.
                                 *
                                 */


        Workart::factory(1)->create([
            'artist_id'=>'2',
            'title'=>'Elefantes',
            'imageworkart'=>'',
            'edition'=>'Edición abierta',
            'price'=>'€20,00 EUR',
            'technique'=>'Dibujo',
            'theme'=>'Urban art',
            'category'=>'Mediano',
            'others'=>'',
            'carousel'=>'0',
        ]);

        Workart::factory(1)->create([
            'artist_id'=>'2',
            'title'=>'Amazonas',
            'imageworkart'=>'',
            'edition'=>'Edición abierta',
            'price'=>'€30,00 EUR',
            'technique'=>'Dibujo',
            'theme'=>'Urban art',
            'category'=>'Mediano',
            'others'=>'',
            'carousel'=>'0',
        ]);

        Workart::factory(1)->create([
            'artist_id'=>'2',
            'title'=>'Hermano Arnu',
            'imageworkart'=>'',
            'edition'=>'Edición abierta',
            'price'=>'20 euretes',
            'technique'=>'Dibujo',
            'theme'=>'Paisajes y arquitectura',
            'category'=>'Mediano',
            'others'=>'',
            'carousel'=>'0',
        ]);

        Workart::factory(1)->create([
            'artist_id'=>'2',
            'title'=>'Punky y Cerdo',
            'imageworkart'=>'',
            'edition'=>'Edición abierta',
            'price'=>'€20,00 EUR',
            'technique'=>'Dibujo',
            'theme'=>'Escenas cotidianas',
            'category'=>'Mediano',
            'others'=>'',
            'carousel'=>'0',
        ]);

        Workart::factory(1)->create([
            'artist_id'=>'2',
            'title'=>'Alicia',
            'imageworkart'=>'',
            'edition'=>'Edición abierta',
            'price'=>'€20,00 EUR',
            'technique'=>'Dibujo',
            'theme'=>'Arte, música y películas',
            'category'=>'Mediano',
            'others'=>'',
            'carousel'=>'0',
        ]);


                            /**
                             *
                             * Here comes Aluhé Molina workarts.
                             *
                             */


        Workart::factory(1)->create([
            'artist_id'=>'3',
            'title'=>'Verano',
            'imageworkart'=>'',
            'edition'=>'Edición abierta',
            'price'=>'€20,00 EUR',
            'technique'=>'Dibujo',
            'theme'=>'Escenas cotidianas',
            'category'=>'Mediano',
            'others'=>'',
            'carousel'=>'0',
        ]);

        Workart::factory(1)->create([
            'artist_id'=>'3',
            'title'=>'Gata con Botas',
            'imageworkart'=>'',
            'edition'=>'Edición limitada',
            'price'=>'€60,00 EUR',
            'technique'=>'Dibujo',
            'theme'=>'Animales',
            'category'=>'Grande',
            'others'=>'',
            'carousel'=>'0',
        ]);

        Workart::factory(1)->create([
            'artist_id'=>'3',
            'title'=>'Florista Verde',
            'imageworkart'=>'',
            'edition'=>'Edición abierta',
            'price'=>'€15,00 EUR',
            'technique'=>'Dibujo',
            'theme'=>'Escenas cotidianas',
            'category'=>'Pequeño',
            'others'=>'',
            'carousel'=>'0',
        ]);

        Workart::factory(1)->create([
            'artist_id'=>'3',
            'title'=>'Boga',
            'imageworkart'=>'',
            'edition'=>'Edición abierta',
            'price'=>'€15,00 EUR',
            'technique'=>'Dibujo',
            'theme'=>'Escenas cotidianas',
            'category'=>'Pequeño',
            'others'=>'',
            'carousel'=>'0',
        ]);

        Workart::factory(1)->create([
            'artist_id'=>'3',
            'title'=>'Me pesa la ciudad',
            'imageworkart'=>'',
            'edition'=>'Edición abierta',
            'price'=>'€28,00 EUR',
            'technique'=>'Dibujo',
            'theme'=>'Paisajes y arquitectura',
            'category'=>'Mediano',
            'others'=>'',
            'carousel'=>'0',
        ]);

        Workart::factory(1)->create([
            'artist_id'=>'3',
            'title'=>'Casa',
            'imageworkart'=>'',
            'edition'=>'Edición abierta',
            'price'=>'€14,00 EUR',
            'technique'=>'Dibujo',
            'theme'=>'Paisajes y arquitecturas',
            'category'=>'Pequeño',
            'others'=>'',
            'carousel'=>'0',
        ]);

        Workart::factory(1)->create([
            'artist_id'=>'3',
            'title'=>'Casa',
            'imageworkart'=>'',
            'edition'=>'Edición abierta',
            'price'=>'€30,00 EUR',
            'technique'=>'Collage',
            'theme'=>'Personas y retratos',
            'category'=>'Mediano',
            'others'=>'',
            'carousel'=>'0',
        ]);


                                /**
                                 *
                                 * Here comes Sara Agustina workarts.
                                 *
                                 */


        Workart::factory(1)->create([
            'artist_id'=>'4',
            'title'=>'Diosa del Sol',
            'imageworkart'=>'',
            'edition'=>'Edición abierta',
            'price'=>'€88,00 EUR',
            'technique'=>'Impresión digital',
            'theme'=>'Personas y retratos',
            'category'=>'Grande',
            'others'=>'',
            'carousel'=>'0',
        ]);

        Workart::factory(1)->create([
            'artist_id'=>'4',
            'title'=>'Amor Libre',
            'imageworkart'=>'',
            'edition'=>'Edición abierta',
            'price'=>'€72,00 EUR',
            'technique'=>'Impresión digital',
            'theme'=>'Personas y retratos',
            'category'=>'Grande',
            'others'=>'',
            'carousel'=>'0',
        ]);

        Workart::factory(1)->create([
            'artist_id'=>'4',
            'title'=>'Puta Galáctica',
            'imageworkart'=>'',
            'edition'=>'Edición abierta',
            'price'=>'€78,00 EUR',
            'technique'=>'Impresión digital',
            'theme'=>'Personas y retratos',
            'category'=>'Grande',
            'others'=>'',
            'carousel'=>'0',
        ]);

        Workart::factory(1)->create([
            'artist_id'=>'4',
            'title'=>'Este cuerpo es mío',
            'imageworkart'=>'',
            'edition'=>'Edición abierta',
            'price'=>'€45,00 EUR',
            'technique'=>'Impresión digital',
            'theme'=>'Personas y retratos',
            'category'=>'Mediano',
            'others'=>'',
            'carousel'=>'0',
        ]);

        Workart::factory(1)->create([
            'artist_id'=>'4',
            'title'=>'Narrativa trans',
            'imageworkart'=>'',
            'edition'=>'Edición abierta',
            'price'=>'€45,00 EUR',
            'technique'=>'Impresión digital',
            'theme'=>'Paisajes y arquitecturas',
            'category'=>'Mediano',
            'others'=>'',
            'carousel'=>'0',
        ]);

        Workart::factory(1)->create([
            'artist_id'=>'4',
            'title'=>'Raizal',
            'imageworkart'=>'',
            'edition'=>'Edición abierta',
            'price'=>'€30,00 EUR',
            'technique'=>'Impresión digital',
            'theme'=>'Personas y retratos',
            'category'=>'Mediano',
            'others'=>'',
            'carousel'=>'0',
        ]);


                            /**
                             *
                             * Here comes Emiliano Montani workarts.
                             *
                             */


        Workart::factory(1)->create([
            'artist_id'=>'5',
            'title'=>'Descubrir',
            'imageworkart'=>'',
            'edition'=>'Edición abierta',
            'price'=>'€24,00 EUR',
            'technique'=>'Impresión digital',
            'theme'=>'Geométrico',
            'category'=>'Mediano',
            'others'=>'',
            'carousel'=>'0',
        ]);

        Workart::factory(1)->create([
            'artist_id'=>'5',
            'title'=>'Explorar',
            'imageworkart'=>'',
            'edition'=>'Edición abierta',
            'price'=>'€24,00 EUR',
            'technique'=>'Impresión digital',
            'theme'=>'Geométrico',
            'category'=>'Mediano',
            'others'=>'',
            'carousel'=>'0',
        ]);

        Workart::factory(1)->create([
            'artist_id'=>'5',
            'title'=>'Sumergirse',
            'imageworkart'=>'',
            'edition'=>'Edición abierta',
            'price'=>'€18,00 EUR',
            'technique'=>'Impresión digital',
            'theme'=>'Geométrico',
            'category'=>'Mediano',
            'others'=>'',
            'carousel'=>'0',
        ]);

        Workart::factory(1)->create([
            'artist_id'=>'5',
            'title'=>'Barbarie',
            'imageworkart'=>'',
            'edition'=>'Edición abierta',
            'price'=>'€27,00 EUR',
            'technique'=>'Impresión digital',
            'theme'=>'Geométrico',
            'category'=>'Mediano',
            'others'=>'',
            'carousel'=>'0',
        ]);


                                /**
                                 *
                                 * Here comes Rick Wessels workarts.
                                 *
                                 */


        Workart::factory(1)->create([
            'artist_id'=>'6',
            'title'=>'Into the mountains II',
            'imageworkart'=>'',
            'edition'=>'Edición abierta',
            'price'=>'€22,00 EUR',
            'technique'=>'Collage digital',
            'theme'=>'Personas y retratos',
            'category'=>'Mediano',
            'others'=>'',
            'carousel'=>'0',
        ]);

        Workart::factory(1)->create([
            'artist_id'=>'6',
            'title'=>'Untrue',
            'imageworkart'=>'',
            'edition'=>'Edición abierta',
            'price'=>'€18,00 EUR',
            'technique'=>'Collage digital',
            'theme'=>'Personas y retratos',
            'category'=>'Mediano',
            'others'=>'',
            'carousel'=>'0',
        ]);

        Workart::factory(1)->create([
            'artist_id'=>'6',
            'title'=>'Unbroken',
            'imageworkart'=>'',
            'edition'=>'Edición abierta',
            'price'=>'€23,00 EUR',
            'technique'=>'Collage digital',
            'theme'=>'Personas y retratos',
            'category'=>'Mediano',
            'others'=>'',
            'carousel'=>'0',
        ]);


        Workart::factory(1)->create([
            'artist_id'=>'6',
            'title'=>'Lady In Venice III',
            'imageworkart'=>'',
            'edition'=>'Edición abierta',
            'price'=>'€26,00 EUR',
            'technique'=>'Collage digital',
            'theme'=>'Personas y retratos',
            'category'=>'Mediano',
            'others'=>'',
            'carousel'=>'0',
        ]);


                                /**
                                 *
                                 * Here comes Camila Lozano workarts.
                                 *
                                 */


        Workart::factory(1)->create([
            'artist_id'=>'7',
            'title'=>'Fly Away',
            'imageworkart'=>'',
            'edition'=>'Pieza única',
            'price'=>'€30,00 EUR',
            'technique'=>'Serigrafía',
            'theme'=>'Geométrico',
            'category'=>'Grande',
            'others'=>'',
            'carousel'=>'0',
        ]);

        Workart::factory(1)->create([
            'artist_id'=>'7',
            'title'=>'Yin Yang',
            'imageworkart'=>'',
            'edition'=>'Pieza única',
            'price'=>'€35,00 EUR',
            'technique'=>'Serigrafía',
            'theme'=>'Geométrico',
            'category'=>'Grande',
            'others'=>'',
            'carousel'=>'0',
        ]);







        User::factory(1)->create([
            'id'=>1,
            'name'=>'Admin',
            'email'=>'admin@gmail.com',
            'isAdmin'=>true,
        ]);
    }
}
