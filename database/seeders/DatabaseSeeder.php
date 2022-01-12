<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;


//User: ddb179363 Pass: Admin1234
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        //seeders pais
        DB::table('pais')->insert([
            'pais_nom'=>'Espanya',
            'continent'=>'Europa'
        ]);
        DB::table('pais')->insert([
            'pais_nom'=>'Itàlia',
            'continent'=>'Europa'
        ]);
        DB::table('pais')->insert([
            'pais_nom'=>'Xina',
            'continent'=>'Àsia'
        ]);
        DB::table('pais')->insert([
            'pais_nom'=>'Tailàndia',
            'continent'=>'Àsia'
        ]);
        DB::table('pais')->insert([
            //aqui hi deia sydney com a pais, ho he cambiat per Australia, sydney es una ciutat d'australia.
            'pais_nom'=>'Australia',
            'continent'=>'Oceania'
        ]);
        DB::table('pais')->insert([
            'pais_nom'=>'Rússia',
            'continent'=>'Àsia'
        ]);
        DB::table('pais')->insert([
            'pais_nom'=>'Mèxic',
            'continent'=>'Amèrica'
        ]);
        DB::table('pais')->insert([
            'pais_nom'=>'Argentina',
            'continent'=>'Amèrica'
        ]);
        DB::table('pais')->insert([
            'pais_nom'=>'Egipte',
            'continent'=>'Àfrica'
        ]);
        DB::table('pais')->insert([
            'pais_nom'=>'Senegal',
            'continent'=>'Àfrica'
        ]);

        //seeders ciutat
        //espanya
        DB::table('ciutat')->insert([
            'ciutat_nom'=>'Madrid',
            'imatge_url'=>'https://upload.wikimedia.org/wikipedia/commons/4/44/Plaza_Mayor_de_Madrid_06.jpg',
            'pais_id'=>1
        ]);
        DB::table('ciutat')->insert([
            'ciutat_nom'=>'València',
            'imatge_url'=>'https://d2bgjx2gb489de.cloudfront.net/gbb-blogs/wp-content/uploads/2020/01/15165921/Aerial-panoramic-view-of-the-old-town-in-Valencia-from-Santa-Caterina-tower.jpg',
            'pais_id'=>1
        ]);
        DB::table('ciutat')->insert([
            'ciutat_nom'=>'Barcelona',
            'imatge_url'=>'https://img.static-af.com/images/meta/IDname/CITY-BCN-1?aspect_ratio=2:1&max_width=1920',
            'pais_id'=>1
        ]);
        
        //itàlia
        DB::table('ciutat')->insert([
            'ciutat_nom'=>'Toscana',
            'imatge_url'=>'https://www.viajarflorencia.com/wp-content/uploads/visitar-cinque-terre-italia.jpg',
            'pais_id'=>2
        ]);
        DB::table('ciutat')->insert([
            'ciutat_nom'=>'Nàpols',
            'imatge_url'=>'https://www.mutuam.cat/wp-content/uploads/2015/06/napols-1.jpg',
            'pais_id'=>2
        ]);
        DB::table('ciutat')->insert([
            'ciutat_nom'=>'Florència',
            'imatge_url'=>'https://www.lavanguardia.com/files/image_449_220/uploads/2017/11/20/5fa3decd68344.jpeg',
            'pais_id'=>2
        ]);

        //xina
        DB::table('ciutat')->insert([
            'ciutat_nom'=> 'Shanghái',
            'imatge_url'=>'https://viajaresparasiempre.com/wp-content/uploads/2019/10/shangai-paseos-inolvidables.jpg',
            'pais_id'=>3
        ]);
        DB::table('ciutat')->insert([
            'ciutat_nom'=> 'Pekín',
            'imatge_url'=>'https://elviajerofeliz.com/wp-content/uploads/2018/12/que-ver-en-pekin.jpg',
            'pais_id'=>3
        ]);
        DB::table('ciutat')->insert([
            'ciutat_nom'=> 'Tianjin',
            'imatge_url'=>'https://digital.ihg.com/is/image/ihg/holiday-inn-tianjin-6132698998-4x3',
            'pais_id'=>3
        ]);

        //tailandia
        DB::table('ciutat')->insert([
            'ciutat_nom'=> 'Bankok',
            'imatge_url'=>'https://dondealojarse.net/wp-content/uploads/2019/11/bangkok.jpg',
            'pais_id'=>4
        ]);
        DB::table('ciutat')->insert([
            'ciutat_nom'=> 'Ratchaburi',
            'imatge_url'=>'https://mediaim.expedia.com/destination/2/dcd305e781749df294ead18175892b6d.jpg',
            'pais_id'=>4
        ]);
        DB::table('ciutat')->insert([
            'ciutat_nom'=> 'Pai-Mae Hong Son',
            'imatge_url'=>'http://static.asiawebdirect.com/m/phuket/portals/thaiwave-com/shared/teasersL/mae-hong-son/teaserMultiLarge/imageHilight/mae-hong-son.jpg',
            'pais_id'=>4
        ]);

        //australia
        DB::table('ciutat')->insert([
            'ciutat_nom'=> 'Sydney',
            'imatge_url'=>'https://media-cdn.tripadvisor.com/media/photo-s/1c/e3/6f/80/hotel-exterior-night.jpg',
            'pais_id'=>5
        ]);
        DB::table('ciutat')->insert([
            'ciutat_nom'=> 'Melbourne',
            'imatge_url'=>'https://wp-growpro.s3-eu-west-1.amazonaws.com/media/2018/03/Que-ver-en-Melbourne.jpg',
            'pais_id'=>5
        ]);
        DB::table('ciutat')->insert([
            'ciutat_nom'=> 'Canberra',
            'imatge_url'=>'https://estaticos.muyhistoria.es/uploads/images/article/591033945bafe8e2443c986b/canberra-c.jpg',
            'pais_id'=>5
        ]);

        //russia
        DB::table('ciutat')->insert([
            'ciutat_nom'=> 'Moscou',
            'imatge_url'=>'https://www.petitfute.es/medias/mag/11779/835/225851-le-musee-historique-d-etat.jpg',
            'pais_id'=>6
        ]);
        DB::table('ciutat')->insert([
            'ciutat_nom'=> 'Sant Petersburg',
            'imatge_url'=>'https://media.tacdn.com/media/attractions-splice-spp-674x446/06/6f/68/63.jpg',
            'pais_id'=>6
        ]);
        DB::table('ciutat')->insert([
            'ciutat_nom'=> 'Iekaterinburg',
            'imatge_url'=>'https://yekaterinburgtimes.com/wp-content/uploads/2018/04/1.0-DSC_8363-777x437.jpg',
            'pais_id'=>6
        ]);

        //mexic
        DB::table('ciutat')->insert([
            'ciutat_nom'=> 'Ciudad de México',
            'imatge_url'=>'https://www.barcelo.com/pinandtravel/wp-content/uploads/2018/09/Apertura1-25-1170x532.jpg',
            'pais_id'=>7
        ]);
        DB::table('ciutat')->insert([
            'ciutat_nom'=> 'Tijuana',
            'imatge_url'=>'https://imagenescityexpress.scdn6.secure.raxcdn.com/sites/default/files/2017-10/guia-tijuana.jpg',
            'pais_id'=>7
        ]);
        DB::table('ciutat')->insert([
            'ciutat_nom'=> 'Guadalajara',
            'imatge_url'=>'https://cdn.pixabay.com/photo/2019/10/19/20/44/guadalajara-4562248__480.jpg',
            'pais_id'=>7
        ]);

        //argentina
        DB::table('ciutat')->insert([
            'ciutat_nom'=> 'Buenos Aires',
            'imatge_url'=>'https://www.cronista.com/files/image/352/352344/61251b22add52.jpg',
            'pais_id'=>8
        ]);
        DB::table('ciutat')->insert([
            'ciutat_nom'=> 'Córdoba',
            'imatge_url'=>'https://pymstatic.com/74245/conversions/psicologos-cordoba-argentina-default.jpg',
            'pais_id'=>8
        ]);
        DB::table('ciutat')->insert([
            'ciutat_nom'=> 'Salta',
            'imatge_url'=>'https://www.adonde-y-cuando.es/site/images/illustration/oualler/-salta.jpg',
            'pais_id'=>8
        ]);

        //egipte
        DB::table('ciutat')->insert([
            'ciutat_nom'=> 'Luxor',
            'imatge_url'=>'https://egiptoexclusivo.com/wp-content/uploads/2020/12/faraon-ramses-ii-templo-luxor.jpg',
            'pais_id'=>9
        ]);
        DB::table('ciutat')->insert([
            'ciutat_nom'=> 'Alexandria',
            'imatge_url'=>'https://mediaim.expedia.com/destination/1/8d54c706395bb3567b503830e06197ba.jpg',
            'pais_id'=>9
        ]);
        DB::table('ciutat')->insert([
            'ciutat_nom'=> 'El Caire',
            'imatge_url'=>'https://images.unsplash.com/photo-1572252009286-268acec5ca0a?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=750&q=80',
            'pais_id'=>9
        ]);

        //senegal
        DB::table('ciutat')->insert([
            'ciutat_nom'=> 'Senegal',
            'imatge_url'=>'https://www.afd.fr/sites/afd/files/styles/visuel_principal/public/2020-12-08-22-52/ville-senegal-tremeau.jpg?itok=qDIKpH9Z',
            'pais_id'=>10
        ]);
        DB::table('ciutat')->insert([
            'ciutat_nom'=> 'Saint-Louis',
            'imatge_url'=>'https://ep01.epimg.net/elviajero/imagenes/2019/02/14/actualidad/1550135880_329066_1550167688_noticia_fotograma.jpg',
            'pais_id'=>10
        ]);
        DB::table('ciutat')->insert([
            'ciutat_nom'=> 'Rufisque',
            'imatge_url'=>'https://static.smarttravelapp.com/data/pois/5380_Rufisque3_1480406561.jpg',
            'pais_id'=>10
        ]);
        
        //PLATS

        //Espanya
        DB::table('plat')->insert([
            'nom'=> 'Bocadillo de Calamares',
            'imatge_url'=> 'https://www.hogarmania.com/archivos/201411/bocadillo-calamares-xl-668x400x80xX.jpg',
            'descripcio'=> "Els entrepans de calamars autèntics de la cuina madrilenya, podem dir que són part d'un plat estrany tractant-se de l'interior d'Espanya, però del que sí que estem segurs és que el plat està boníssim i no te'n pots anar de Madrid sense abans tastar-lo."
        ]);
        DB::table('plat')->insert([
            'nom'=> 'Paella Valenciana',
            'imatge_url'=> 'https://spanishsabores.com/wp-content/uploads/2020/05/Seafood-Paella-1837-Blog.jpg',
            'descripcio'=> "Es tracta d'una recepta a base d'arròs, que s'elabora en una paella que es posen ingredients com el pollastre, el conill, el garrofó, mongeta tendra, el safrà i altres ingredients."
        ]);
        DB::table('plat')->insert([
            'nom'=> 'Canelons Trufats',
            'imatge_url'=> 'https://comprartrufa.shop/wp-content/uploads/2020/12/DSC_0493x-scaled.jpg',
            'descripcio'=> "Els canelons Rossini són els que porten foie gras perquè és com li agradaven al compositor (Rossini); doncs a Barcelona no ens quedem curts i hi afegim tòfona negra o succedanis, segons l’economia de cadascú, que tampoc està el forn per a tòfones."
        ]);
        DB::table('plat')->insert([
            'nom'=> 'Pa amb tomàquet',
            'imatge_url'=> 'https://cdn02.visitbarcelona.com/files/11116-3-imagen/pa-tomaquet-recepta-gastronomia-catalunya-enjoy-c1b.jpg',
            'descripcio'=> "Típic plat català el qual es pot menjar amb molts tipus d'aliments i en molts àpats."
        ]);

        //Italia
        DB::table('plat')->insert([
            'nom'=> 'Filet Florentí',
            'imatge_url'=> 'https://italian-traditions.com/wp-content/uploads/2018/07/fiorentina-2.jpg',
            'descripcio'=> "Es prepara ruixant tots dos costats de la carn amb unes gotes d'oli d'oliva. Després es cuina a la graella i es rosteix a les brases fins a la cocció desitjada."
        ]);
        DB::table('plat')->insert([
            'nom'=> 'Pizza Napolitana',
            'imatge_url'=> 'https://upload.wikimedia.org/wikipedia/commons/a/a3/Eq_it-na_pizza-margherita_sep2005_sml.jpg',
            'descripcio'=> "No es pot discutir que la pizza napolitana és la millor d'Itàlia. Les seves dues especialitats són la margarida, amb tomàquet, alfàbrega i oli; i la marinera, amb oli d'oliva, tomàquet, all i orenga. A més, la massa de les pizzes napolitanes és més fina."
        ]);

        DB::table('plat')->insert([
            'nom'=> 'Crostini di Fegato',
            'imatge_url'=> 'https://assets.tmecosys.com/image/upload/t_web767x639/img/recipe/vimdb/239104.jpg',
            'descripcio'=> "Un antipasto florentí molt típic són els crostini di fegato, que consisteix en pa fregit coberts en una barreja de fetge (vedella, pollastre, oca, ànec…) barrejades amb anxoves picades, ceba i tàperes."
        ]);

        //xina

        DB::table('plat')->insert([
            'nom'=> 'Cerdo asado rojo',
            'imatge_url'=> 'https://us.123rf.com/450wm/watthano/watthano1409/watthano140900006/31424782-cerdo-rojo-asado-con-salsa-la-cocina-china.jpg?ver=6',
            'descripcio'=> "El color característic d'aquest plat és donat per una salsa de soja amb sucre i una pasta de mongetes amb què es cuina el porc. Pots trobar aquest menjar típic tant en parades de carrer com als millors restaurants de Xangai."
        ]);

        DB::table('plat')->insert([
            'nom'=> 'Hot Pot',
            'imatge_url'=> 'https://www.cocinista.es/download/bancorecursos/recetas/receta-olla-china-hotpot.jpg',
            'descripcio'=> "El seu nom fa referència al mode de preparació i com se serveix aquest menjar típic: en una olla calenta i al centre de la taula. Cada comensal fica els seus trossos de carn, peix i verdura a l'olla perquè es vagi fent."
        ]);

        DB::table('plat')->insert([
            'nom'=> 'Empanades Goubuli',
            'imatge_url'=> 'https://i.pinimg.com/originals/5e/ec/54/5eec54c2f4163de7ee98e75e99eee442.jpg',
            'descripcio'=> "És la marca tradicional i representativa dels entrepans de Tianjin. A més dels sabors tradicionals, Goubuli ha afegit variants com les empanades de Perla, de Drac i Fènix, les empanades de marisc, entre d'altres."
        ]);

        //Tailandia
        DB::table('plat')->insert([
            'nom'=> 'Pad Thai',
            'imatge_url'=> 'https://i.blogs.es/f9e85e/receta-de-pad-thai-pakus-directo-paladar/1366_2000.jpg',
            'descripcio'=> "El menjar típic tailandès per excel·lència. No pots visitar Bangkok o qualsevol ciutat de Tailàndia i anar-te'n sense tastar aquest plat típic. Els noodles van acompanyats de soja, vegetals o potser una mica de carn i fruits secs picats."
        ]);

        DB::table('plat')->insert([
            'nom'=> 'Khao Pad Saparod',
            'imatge_url'=> 'https://i1.wp.com/elcalderoviajero.com/wp-content/uploads/2017/12/arroz-frito-con-pi%C3%B1a-tailandes-10.jpg?fit=750%2C498&ssl=1',
            'descripcio'=> "A més del Pad Thai, el Khao Pad Saparod és el típic plat que us agradarà a gairebé tots. Es tracta d'arròs fregit amb gambes o pollastre, pinya, ou, anacards, panses i salsa de peix. Es fa amb curri en pols així que també té un toc de gust de curri."
        ]);

        DB::table('plat')->insert([
            'nom'=> 'Pad Siuw',
            'imatge_url'=> 'https://www.196flavors.com/wp-content/uploads/2017/05/pad-see-ew-6-FP.jpg',
            'descripcio'=> "És un plat de fideus saltejats amb pollastre, ou, pebre, all i fet amb salsa d'ostres. Els fideus són més grans i enganxosos que els del Pad Thai de manera que no és un plat que sol tenir tant èxit. La textura dels fideus pot semblar estranya al principi."
        ]);

        //Australia
        DB::table('plat')->insert([
            'nom'=> 'Cangur a la Parrilla',
            'imatge_url'=> 'https://comidatipica.blog/wp-content/uploads/2020/10/Canguro-a-la-parrilla.png',
            'descripcio'=> "Encara que a molts altres països la carn de cangur és desconeguda, a Austràlia és un menjar típic que és gairebé obligatori tastar. Si tagrada experimentar aquesta carn tagradarà. Si en vols més, pots demanar carn de cocodril."
        ]);

        DB::table('plat')->insert([
            'nom'=> 'Yabbies',
            'imatge_url'=> 'https://lacomidatipica.com/wp-content/uploads/2019/05/Yabbies-.png',
            'descripcio'=> "Encara que el seu nom sigui una mica desconegut, aquests animals són una mena de llagostes o llagostins que viuen en aigua dolça. Hi ha moltes maneres de cuinar-los i els trobaràs en més menjars típics australians."
        ]);

        DB::table('plat')->insert([
            'nom'=> 'Meat Pie',
            'imatge_url'=> 'https://img.taste.com.au/BbERqiBQ/taste/2016/11/aussie-meat-pies-16289-1.jpeg',
            'descripcio'=> "Els pastissos de carn tradicionals d'Austràlia són de mida d'una mà i estan farcits amb carn i salsa i recoberts de salsa de tomàquet. Avui dia pots trobar pastissos amb diferents farcits i la veritat és que alguns estan boníssims."
        ]);

        //Russia
        DB::table('plat')->insert([
            'nom'=> 'Rassólnik',
            'imatge_url'=> 'https://cdn.shopify.com/s/files/1/1257/0365/files/rassolnik1_large.jpg?v=1472748866',
            'descripcio'=> "Una cosa que és evidentment tradicional a Moscou són les sopes russes. Feta de cogombres, tubercles i carn, acompanyada de crema agra. El més característic és el suc de cogombrets en què es basa aquest plat típic rus."
        ]);
        DB::table('plat')->insert([
            'nom'=> 'Kulebiaka',
            'imatge_url'=> 'https://lacomidatipica.com/wp-content/uploads/2019/04/Kulebiaka-.png',
            'descripcio'=> "Un pastís típic rus que generalment va farcit de salmó, arròs, ous durs, xampinyons o ceba. Té un aspecte de pa brioix i és una recepta que ha estat copiada per alts cuiners per experimentar amb nous sabors arreu del món."
        ]);
        DB::table('plat')->insert([
            'nom'=> 'Carn a la Stroganoff',
            'imatge_url'=> 'https://www.coosur.com/uploads/recetasaceiteoliva/ternera-stroganoff.jpg',
            'descripcio'=> "La carn més típica de Rússia és la carn a la stroganoff. Són trossets de vedella, acompanyat de bolets, ceba i una forta salsa agra. El plat ve normalment acompanyat d'arròs."
        ]);

        //Mexic
        DB::table('plat')->insert([
            'nom'=> 'Huaraches',
            'imatge_url'=> 'https://espaciomex.com/wp-content/uploads/2019/03/huarache-3323447_1920-1280x640.jpg',
            'descripcio'=> "Aquest plat típic es diu així perquè la seva base, feta de blat de moro, té la forma d'una sandàlia. A sobre s'hi posen fesols, carn de vedella i formatge, i s'acompanya d'una salsa picant."
        ]);

        DB::table('plat')->insert([
            'nom'=> 'Tacos Tijuana',
            'imatge_url'=> 'https://tipsparatuviaje.com/wp-content/uploads/2018/04/taco-3.jpg',
            'descripcio'=> "El tac estil Tijuana té la particularitat que la truita de blat de moro té una forma de con, cosa que la fa més apta per acomodar el deliciós farcit de carn, alvocat i salsa picant de chiles."
        ]);

        DB::table('plat')->insert([
            'nom'=> 'Torta Ahogada',
            'imatge_url'=> 'https://dam.cocinafacil.com.mx/wp-content/uploads/2017/03/torta-ahogada-.jpg',
            'descripcio'=> "Es prepara amb un boixet allargat de sabor salat partit a la meitat al que se li afegeixen carn de porc i fesols. La coca s'enfonsa en una salsa vermella picant i se serveix amb cebes llesques."
        ]);

        //Argentina
        DB::table('plat')->insert([
            'nom'=> 'Picada',
            'imatge_url'=> 'https://i.pinimg.com/originals/66/aa/49/66aa49da3f1c0ea54a7f5fb558532d73.jpg',
            'descripcio'=> "Les picades més simples porten formatge, pernil cuit, salami, olives i patates fregits o blat de moro, però poden portar gairebé de tot: mortadel·la, truita de patates, salsitxes, falafel, anxoves…"
        ]);

        DB::table('plat')->insert([
            'nom'=> 'Alfajores',
            'imatge_url'=> 'https://www.elmundoeats.com/wp-content/uploads/2021/07/FP2-Argentine-alfajores-on-a-rack-500x375.jpg',
            'descripcio'=> "Aquesta mena de galetes farcides són un menjar típic argentí que s'ha estès a molts altres llocs del món. Poden portar el farcit que més t'agradi (mel, fruita…) encara que els més demanats són els de dolç de llet."
        ]);
        DB::table('plat')->insert([
            'nom'=> 'Empanadas Salteñas',
            'imatge_url'=> 'https://elcordillerano1.cdn.net.ar/252/elcordillerano/images/95/02/950225_b60e587383b0cb976412c5de2dc89af2532e28925576f5994b5b671b2f1d9bdb/md.webp',
            'descripcio'=> "Les empanades saltenyes es destaquen perquè contenen com a ingredient diferencial la patata i la carn es talla a ganivet. Es poden fer fregides o al forn."
        ]);

        //Egipte
        DB::table('plat')->insert([
            'nom'=> 'Ful Medames',
            'imatge_url'=> 'https://comidasegipcias.com/wp-content/uploads/2019/09/ful-medames-receta-1024x576.jpg',
            'descripcio'=> "Un xut d'energia que has de provar almenys una vegada (aquí se sol menjar d'esmorzar). Les faves són les grans protagonistes del plat. No és estrany que per menjar-les també et serveixin pa de pita."
        ]);

        DB::table('plat')->insert([
            'nom'=> 'Mezze',
            'imatge_url'=> 'https://tuprensalocal.com/wp-content/uploads/2021/03/2021_0307_hummus-egipto.jpg',
            'descripcio'=> "Els entrants freds o aperitius són molt populars en aquesta ciutat egípcia. Solen servir-se principalment en petits atuells o recipients."
        ]);

        
        DB::table('plat')->insert([
            'nom'=> 'Koftas',
            'imatge_url'=> 'https://astelus.com/wp-content/viajes/la-preparacion-de-la-kofta-tipica-egipcia.jpg',
            'descripcio'=> "Aquest menjar típic del Caire i d'Egipte en general són unes boles de carn de vedella i xai amb espècies, que tradicionalment es presenten en forma de kebab."
        ]);

        //Senegal
        DB::table('plat')->insert([
            'nom'=> 'Maafe',
            'imatge_url'=> 'https://okdiario.com/img/2018/12/04/receta-de-maafe-senegales-1.jpg',
            'descripcio'=> "Es tracta d'un dels guisats més exquisits que tastaràs, sobretot si ets amant del cacauet. És conegut com a guisat de cacauet i és popular en una gran quantitat de països, és un platet típic d'Àfrica Occidental i Àfrica Central."
        ]);

        DB::table('plat')->insert([
            'nom'=> 'Thieboudienne',
            'imatge_url'=> 'https://www.internationalcuisine.com/wp-content/uploads/2019/08/Thieboudienne-500x500.jpeg',
            'descripcio'=> "El thieboudienne és un plat de tipus been cin, on tots els ingredients es preparen en una mateixa marmita. El peix pot ser de diferents tipus, juntament amb l'arròs i el tomàquet, els ingredients poden variar d'un lloc a un altre."
        ]);

        DB::table('plat')->insert([
            'nom'=> 'Fataya',
            'imatge_url'=> 'https://media-cdn.tripadvisor.com/media/photo-s/19/1f/8b/10/fataya-senegal-food.jpg',
            'descripcio'=> "Són crestes de carn o peix amb ceba, tomàquet i pebre, mateixes que són acompanyades d'una salsa picant per “remullar-se”."
        ]);


        //CATEGORIES
        DB::table('categoria')->insert([
            'categoria_nom' =>'Verdures'
        ]);

        DB::table('categoria')->insert([
            'categoria_nom' =>'Carn'
        ]);

        DB::table('categoria')->insert([
            'categoria_nom' =>'Marisc'
        ]);

        //INGREDIENTS
        DB::table('ingredient')->insert([
            'ingredient_nom' => 'Pastanaga',
            'categoria_id' => 1
        ]);

        DB::table('ingredient')->insert([
            'ingredient_nom' => 'Vedella',
            'categoria_id' => 2
        ]);

        DB::table('ingredient')->insert([
            'ingredient_nom' => 'Pollastre',
            'categoria_id' => 2
        ]);

        DB::table('ingredient')->insert([
            'ingredient_nom' =>'Gambes',
            'categoria_id' => 3
        ]);

        DB::table('ingredient')->insert([
            'ingredient_nom' => 'Calamar',
            'categoria_id' => 3
        ]);

        //CIUTAT-PLAT
        DB::table('ciutat_plat')->insert([
            'ciutat_id' => 1,
            'plat_id' => 1
        ]);

        DB::table('ciutat_plat')->insert([
            'ciutat_id' => 2,
            'plat_id' => 2
        ]);

        DB::table('ciutat_plat')->insert([
            'ciutat_id' => 3,
            'plat_id' => 3
        ]);

        DB::table('ciutat_plat')->insert([
            'ciutat_id' => 3,
            'plat_id' => 4
        ]);

        DB::table('ciutat_plat')->insert([
            'ciutat_id' => 4,
            'plat_id' => 5
        ]);

        DB::table('ciutat_plat')->insert([
            'ciutat_id' => 5,
            'plat_id' => 6
        ]);

        DB::table('ciutat_plat')->insert([
            'ciutat_id' => 6,
            'plat_id' => 7
        ]);

        DB::table('ciutat_plat')->insert([
            'ciutat_id' => 7,
            'plat_id' => 8
        ]);

        DB::table('ciutat_plat')->insert([
            'ciutat_id' => 8,
            'plat_id' => 9
        ]);

        DB::table('ciutat_plat')->insert([
            'ciutat_id' => 9,
            'plat_id' => 10
        ]);

        DB::table('ciutat_plat')->insert([
            'ciutat_id' => 10,
            'plat_id' => 11
        ]);

        DB::table('ciutat_plat')->insert([
            'ciutat_id' => 11,
            'plat_id' => 12
        ]);

        DB::table('ciutat_plat')->insert([
            'ciutat_id' => 12,
            'plat_id' => 13
        ]);

        
        DB::table('ciutat_plat')->insert([
            'ciutat_id' => 13,
            'plat_id' => 14
        ]);

        
        DB::table('ciutat_plat')->insert([
            'ciutat_id' => 14,
            'plat_id' => 15
        ]);

        
        DB::table('ciutat_plat')->insert([
            'ciutat_id' => 15,
            'plat_id' => 16
        ]);

        
        DB::table('ciutat_plat')->insert([
            'ciutat_id' => 16,
            'plat_id' => 17
        ]);

        
        DB::table('ciutat_plat')->insert([
            'ciutat_id' => 17,
            'plat_id' => 18
        ]);

        
        DB::table('ciutat_plat')->insert([
            'ciutat_id' => 18,
            'plat_id' => 19
        ]);

        
        DB::table('ciutat_plat')->insert([
            'ciutat_id' => 19,
            'plat_id' => 20
        ]);

        
        DB::table('ciutat_plat')->insert([
            'ciutat_id' => 20,
            'plat_id' => 21
        ]);

        
        DB::table('ciutat_plat')->insert([
            'ciutat_id' => 21,
            'plat_id' => 22
        ]);

        
        DB::table('ciutat_plat')->insert([
            'ciutat_id' => 22,
            'plat_id' => 23
        ]);

        DB::table('ciutat_plat')->insert([
            'ciutat_id' => 23,
            'plat_id' => 24
        ]);

        DB::table('ciutat_plat')->insert([
            'ciutat_id' => 24,
            'plat_id' => 25
        ]);

        DB::table('ciutat_plat')->insert([
            'ciutat_id' => 25,
            'plat_id' => 26
        ]);

        DB::table('ciutat_plat')->insert([
            'ciutat_id' => 26,
            'plat_id' => 27
        ]);

        DB::table('ciutat_plat')->insert([
            'ciutat_id' => 27,
            'plat_id' => 28
        ]);

        DB::table('ciutat_plat')->insert([
            'ciutat_id' => 28,
            'plat_id' => 29
        ]);

        DB::table('ciutat_plat')->insert([
            'ciutat_id' => 29,
            'plat_id' => 30
        ]);

        DB::table('ciutat_plat')->insert([
            'ciutat_id' => 30,
            'plat_id' => 31
        ]);

        //INGREDIENT-PLAT
        DB::table('ingredients_plat')->insert([
            'ingredient_id' => 5,
            'plat_id' => 1
        ]);

        DB::table('ingredients_plat')->insert([
            'ingredient_id' => 4,
            'plat_id' => 2
        ]);
    }
}
