<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;

use function Ramsey\Uuid\v1;

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
            'imatge_url'=>'https://ep01.epimg.net/elviajero/imagenes/2017/12/01/actualidad/1512143439_985308_1512146284_noticia_normal.jpg',
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
            'imatge_url'=> 'https://media.timeout.com/images/105764007/image.jpg',
            'descripcio'=> "Els entrepans de calamars autèntics de la cuina madrilenya, podem dir que són part d'un plat estrany tractant-se de l'interior d'Espanya, però del que sí que estem segurs és que el plat està boníssim i no te'n pots anar de Madrid sense abans tastar-lo."
        ]);
        DB::table('plat')->insert([
            'nom'=> 'Paella Valenciana',
            'imatge_url'=> 'https://www.comedera.com/wp-content/uploads/2015/06/paella-3397457_1280.jpg',
            'descripcio'=> "Es tracta d'una recepta a base d'arròs, que s'elabora en una paella que es posen ingredients com el pollastre, el conill, el garrofó, mongeta tendra, el safrà i altres ingredients."
        ]);
        DB::table('plat')->insert([
            'nom'=> 'Canelons Trufats',
            'imatge_url'=> 'https://comprartrufa.shop/wp-content/uploads/2020/12/DSC_0493x-scaled.jpg',
            'descripcio'=> "Els canelons Rossini són els que porten foie gras perquè és com li agradaven al compositor (Rossini); doncs a Barcelona no ens quedem curts i hi afegim tòfona negra o succedanis, segons l’economia de cadascú, que tampoc està el forn per a tòfones."
        ]);
        DB::table('plat')->insert([
            'nom'=> 'Pa amb tomàquet',
            'imatge_url'=> 'https://filesedc.com/uploads/cuina/lr/201109/IMG_4559.JPG',
            'descripcio'=> "Típic plat català el qual es pot menjar amb molts tipus d'aliments i en molts àpats."
        ]);

        //Italia
        DB::table('plat')->insert([
            'nom'=> 'Filet Florentí',
            'imatge_url'=> 'https://cdn.pixabay.com/photo/2016/05/10/10/43/rib-1383427_960_720.jpg',
            'descripcio'=> "Es prepara ruixant tots dos costats de la carn amb unes gotes d'oli d'oliva. Després es cuina a la graella i es rosteix a les brases fins a la cocció desitjada."
        ]);
        DB::table('plat')->insert([
            'nom'=> 'Pizza Napolitana',
            'imatge_url'=> 'https://casamodena.es/wp-content/uploads/2019/03/26.03.-casa.png',
            'descripcio'=> "No es pot discutir que la pizza napolitana és la millor d'Itàlia. Les seves dues especialitats són la margarida, amb tomàquet, alfàbrega i oli; i la marinera, amb oli d'oliva, tomàquet, all i orenga. A més, la massa de les pizzes napolitanes és més fina."
        ]);

        DB::table('plat')->insert([
            'nom'=> 'Crostini di Fegato',
            'imatge_url'=> 'https://www.ricetteperbimby.it/foto-ricette/crostini-di-fegatini-toscani-bimby.jpg',
            'descripcio'=> "Un antipasto florentí molt típic són els crostini di fegato, que consisteix en pa fregit coberts en una barreja de fetge (vedella, pollastre, oca, ànec…) barrejades amb anxoves picades, ceba i tàperes."
        ]);

        //xina

        DB::table('plat')->insert([
            'nom'=> 'Cerdo asado rojo',
            'imatge_url'=> 'https://ecucuba.com/wp-content/uploads/2021/08/chinese-five-spice-roast-pork-103754-1.jpeg',
            'descripcio'=> "El color característic d'aquest plat és donat per una salsa de soja amb sucre i una pasta de mongetes amb què es cuina el porc. Pots trobar aquest menjar típic tant en parades de carrer com als millors restaurants de Xangai."
        ]);

        DB::table('plat')->insert([
            'nom'=> 'Hot Pot',
            'imatge_url'=> 'https://images.ecestaticos.com/seQonrbopoalwJJKAa9hDqjbdcM=/1x110:2120x1301/1600x900/filters:fill(white):format(jpg)/f.elconfidencial.com%2Foriginal%2F777%2F0ad%2F737%2F7770ad737389803c8588948ad97d7183.jpg',
            'descripcio'=> "El seu nom fa referència al mode de preparació i com se serveix aquest menjar típic: en una olla calenta i al centre de la taula. Cada comensal fica els seus trossos de carn, peix i verdura a l'olla perquè es vagi fent."
        ]);

        DB::table('plat')->insert([
            'nom'=> 'Empanades Goubuli',
            'imatge_url'=> 'https://upload.wikimedia.org/wikipedia/commons/thumb/f/f4/Baozi_Chengdu.JPG/1200px-Baozi_Chengdu.JPG',
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
            'imatge_url'=> 'https://revistaconecta.es/wp-content/uploads/2020/12/Arroz-frito-con-pin%CC%83aFeat1-1.jpg',
            'descripcio'=> "A més del Pad Thai, el Khao Pad Saparod és el típic plat que us agradarà a gairebé tots. Es tracta d'arròs fregit amb gambes o pollastre, pinya, ou, anacards, panses i salsa de peix. Es fa amb curri en pols així que també té un toc de gust de curri."
        ]);

        DB::table('plat')->insert([
            'nom'=> 'Pad Siuw',
            'imatge_url'=> 'https://speisekarte.menu/storage/media/dishes_main/1297527/img-9121-1531910292.jpg',
            'descripcio'=> "És un plat de fideus saltejats amb pollastre, ou, pebre, all i fet amb salsa d'ostres. Els fideus són més grans i enganxosos que els del Pad Thai de manera que no és un plat que sol tenir tant èxit. La textura dels fideus pot semblar estranya al principi."
        ]);

        //Australia
        DB::table('plat')->insert([
            'nom'=> 'Cangur a la Parrilla',
            'imatge_url'=> 'https://i.pinimg.com/originals/66/6b/ac/666bacf273b4f8edfc212a1d01bc77ae.jpg',
            'descripcio'=> "Encara que a molts altres països la carn de cangur és desconeguda, a Austràlia és un menjar típic que és gairebé obligatori tastar. Si tagrada experimentar aquesta carn tagradarà. Si en vols més, pots demanar carn de cocodril."
        ]);

        DB::table('plat')->insert([
            'nom'=> 'Yabbies',
            'imatge_url'=> 'https://blog.informationplanet.com.br/wp-content/uploads/2017/10/Sem-T%C3%ADtulo-1-16.jpg',
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
            'imatge_url'=> 'https://cdni.rbth.com/rbthmedia/images/2018.12/original/5c18f8ff85600a5a0076869e.jpg',
            'descripcio'=> "Una cosa que és evidentment tradicional a Moscou són les sopes russes. Feta de cogombres, tubercles i carn, acompanyada de crema agra. El més característic és el suc de cogombrets en què es basa aquest plat típic rus."
        ]);
        DB::table('plat')->insert([
            'nom'=> 'Kulebiaka',
            'imatge_url'=> 'https://cdn.galleries.smcloud.net/t/galleries/gf-bSQA-wSoD-NLoQ_kulebiak-latwy-przepis-na-wigilijnego-kulebiaka-1920x1080-nocrop.jpg',
            'descripcio'=> "Un pastís típic rus que generalment va farcit de salmó, arròs, ous durs, xampinyons o ceba. Té un aspecte de pa brioix i és una recepta que ha estat copiada per alts cuiners per experimentar amb nous sabors arreu del món."
        ]);
        DB::table('plat')->insert([
            'nom'=> 'Carn a la Stroganoff',
            'imatge_url'=> 'https://estaticos-cdn.prensaiberica.es/clip/40e16f2b-79de-4a9a-adb6-c2ab54c703fe_16-9-discover-aspect-ratio_default_0.jpg',
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
            'imatge_url'=> 'https://www.mexicodesconocido.com.mx/sites/default/files/fichas-destino/kokopelli-tacos-tijuana.png',
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
            'imatge_url'=> 'https://www.lavanguardia.com/files/og_thumbnail/files/fp/uploads/2021/04/19/607d5decc1e75.r_d.1712-756-0.jpeg',
            'descripcio'=> "Aquesta mena de galetes farcides són un menjar típic argentí que s'ha estès a molts altres llocs del món. Poden portar el farcit que més t'agradi (mel, fruita…) encara que els més demanats són els de dolç de llet."
        ]);
        DB::table('plat')->insert([
            'nom'=> 'Empanadas Salteñas',
            'imatge_url'=> 'https://www.clarin.com/img/2018/05/23/S1uISXQJX_1256x620__2.jpg',
            'descripcio'=> "Les empanades saltenyes es destaquen perquè contenen com a ingredient diferencial la patata i la carn es talla a ganivet. Es poden fer fregides o al forn."
        ]);

        //Egipte
        DB::table('plat')->insert([
            'nom'=> 'Ful Medames',
            'imatge_url'=> 'https://www.cookingwithamc.info/sites/default/files/styles/hero/public/migrate/recipe/1573827826-amc-rid3491-image3598.jpeg.jpg?itok=E2AxkVfC',
            'descripcio'=> "Un xut d'energia que has de provar almenys una vegada (aquí se sol menjar d'esmorzar). Les faves són les grans protagonistes del plat. No és estrany que per menjar-les també et serveixin pa de pita."
        ]);

        DB::table('plat')->insert([
            'nom'=> 'Mezze',
            'imatge_url'=> 'https://astelus.com/wp-content/viajes/Los-Mezzedes.jpg',
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
            'imatge_url'=> 'https://www.bebevoyage.com/wp-content/uploads/elementor/thumbs/PXL_20210120_212500186-p73cfd4naor4rz9vweb2c6f40rzkxud4m198zlqah4.jpg',
            'descripcio'=> "Es tracta d'un dels guisats més exquisits que tastaràs, sobretot si ets amant del cacauet. És conegut com a guisat de cacauet i és popular en una gran quantitat de països, és un platet típic d'Àfrica Occidental i Àfrica Central."
        ]);

        DB::table('plat')->insert([
            'nom'=> 'Thieboudienne',
            'imatge_url'=> 'https://cloudfront-eu-central-1.images.arcpublishing.com/larazon/FQLJC5ZMGJHENNO56GRZPIBEXI.jpg',
            'descripcio'=> "El thieboudienne és un plat de tipus been cin, on tots els ingredients es preparen en una mateixa marmita. El peix pot ser de diferents tipus, juntament amb l'arròs i el tomàquet, els ingredients poden variar d'un lloc a un altre."
        ]);

        DB::table('plat')->insert([
            'nom'=> 'Fataya',
            'imatge_url'=> 'https://assets.afcdn.com/recipe/20160422/29489_w1024h576c1cx1494cy2656.webp',
            'descripcio'=> "Són crestes de carn o peix amb ceba, tomàquet i pebre, mateixes que són acompanyades d'una salsa picant per “remullar-se”."
        ]);


        //CATEGORIES
        DB::table('categoria')->insert([
            'categoria_nom' =>'Verdura', //1
            'imatge_url' => '../../images/icons/verdura.png'
        ]);

        DB::table('categoria')->insert([
            'categoria_nom' =>'Carn', //2
            'imatge_url' => '../../images/icons/carn.png'
        ]);

        DB::table('categoria')->insert([
            'categoria_nom' =>'Marisc', //3
            'imatge_url' => '../../images/icons/marisc.png'
        ]);

        DB::table('categoria')->insert([
            'categoria_nom' =>'Llegums', //4
            'imatge_url' => '../../images/icons/llegums.png'
        ]);

        DB::table('categoria')->insert([
            'categoria_nom' =>'Làctics', //5
            'imatge_url' => '../../images/icons/lactics.png'
        ]);

        DB::table('categoria')->insert([
            'categoria_nom' =>'Condiments', //6
            'imatge_url' => '../../images/icons/condiments.png'
        ]);

        DB::table('categoria')->insert([
            'categoria_nom' =>'Cereals', //7
            'imatge_url' => '../../images/icons/cereals.png'
        ]);

        DB::table('categoria')->insert([
            'categoria_nom' =>'Líquids', //8
            'imatge_url' => '../../images/icons/liquids.png'
        ]);

        DB::table('categoria')->insert([
            'categoria_nom' =>'Fruits secs', //9
            'imatge_url' => '../../images/icons/fruits_secs.png'
        ]);


        //INGREDIENTS
        DB::table('ingredient')->insert([
            'ingredient_nom' => 'Pa',
            'categoria_id' => 7
        ]);

        DB::table('ingredient')->insert([
            'ingredient_nom' => 'All',
            'categoria_id' => 1
        ]);

        DB::table('ingredient')->insert([
            'ingredient_nom' => 'Ceba',
            'categoria_id' => 1
        ]);

        DB::table('ingredient')->insert([
            'ingredient_nom' => "Oli d'oliva",
            'categoria_id' => 6
        ]);

        DB::table('ingredient')->insert([
            'ingredient_nom' => "Sal",
            'categoria_id' => 6
        ]);

        DB::table('ingredient')->insert([
            'ingredient_nom' => "Pebre Negre",
            'categoria_id' => 6
        ]);

        DB::table('ingredient')->insert([
            'ingredient_nom' => "Tomàquets",
            'categoria_id' => 1
        ]);

        DB::table('ingredient')->insert([
            'ingredient_nom' => "Mantega",
            'categoria_id' => 5
        ]);

        DB::table('ingredient')->insert([
            'ingredient_nom' => "Porc",
            'categoria_id' => 2
        ]);

        DB::table('ingredient')->insert([
            'ingredient_nom' => "Salsa de soja",
            'categoria_id' => 6
        ]);

        DB::table('ingredient')->insert([
            'ingredient_nom' => "Mel",
            'categoria_id' => 6
        ]);

        DB::table('ingredient')->insert([
            'ingredient_nom' => "Pebre blanc",
            'categoria_id' => 6
        ]);

        DB::table('ingredient')->insert([
            'ingredient_nom' => "Aigua",
            'categoria_id' => 8
        ]);

        DB::table('ingredient')->insert([
            'ingredient_nom' => "Llagostins",
            'categoria_id' => 3
        ]);

        DB::table('ingredient')->insert([
            'ingredient_nom' => "Ous",
            'categoria_id' => 5
        ]);

        DB::table('ingredient')->insert([
            'ingredient_nom' => "Salsa de Soja negre",
            'categoria_id' => 6
        ]);

        DB::table('ingredient')->insert([
            'ingredient_nom' => "Patates",
            'categoria_id' => 1
        ]);

        DB::table('ingredient')->insert([
            'ingredient_nom' => "Llimona",
            'categoria_id' => 1
        ]);

        DB::table('ingredient')->insert([
            'ingredient_nom' => "Farigola",
            'categoria_id' => 6
        ]);

        DB::table('ingredient')->insert([
            'ingredient_nom' => "Vinagre",
            'categoria_id' => 6
        ]);

        DB::table('ingredient')->insert([
            'ingredient_nom' => "Farina",
            'categoria_id' => 7
        ]);

        DB::table('ingredient')->insert([
            'ingredient_nom' => "Llevadura",
            'categoria_id' => 7
        ]);

        DB::table('ingredient')->insert([
            'ingredient_nom' => "Xampinyons",
            'categoria_id' => 1
        ]);

        DB::table('ingredient')->insert([
            'ingredient_nom' => "Julivert",
            'categoria_id' => 6
        ]);

        DB::table('ingredient')->insert([
            'ingredient_nom' => "Pebre Vermell",
            'categoria_id' => 6
        ]);

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
            'ingredient_nom' => 'Conill',
            'categoria_id' => 2
        ]);

        DB::table('ingredient')->insert([
            'ingredient_nom' => "Arrós bomba",
            'categoria_id' => 4
        ]);

        DB::table('ingredient')->insert([
            'ingredient_nom' => 'Bejoques',
            'categoria_id' => 1
        ]);

        DB::table('ingredient')->insert([
            'ingredient_nom' => 'Fesols',
            'categoria_id' => 1
        ]);

        DB::table('ingredient')->insert([
            'ingredient_nom' => 'Carxofa',
            'categoria_id' => 1
        ]);

        DB::table('ingredient')->insert([
            'ingredient_nom' => 'Cargols',
            'categoria_id' => 2
        ]);

        DB::table('ingredient')->insert([
            'ingredient_nom' => 'Plaques de Canelons',
            'categoria_id' => 7
        ]);

        DB::table('ingredient')->insert([
            'ingredient_nom' => 'Formatge ratllat',
            'categoria_id' => 5
        ]);

        DB::table('ingredient')->insert([
            'ingredient_nom' => 'Bolets',
            'categoria_id' => 1
        ]);

        DB::table('ingredient')->insert([
            'ingredient_nom' => 'Carn Picada',
            'categoria_id' => 2
        ]);

        DB::table('ingredient')->insert([
            'ingredient_nom' => 'Tòfona',
            'categoria_id' => 1
        ]);

        DB::table('ingredient')->insert([
            'ingredient_nom' => 'Puerro',
            'categoria_id' => 1
        ]);

        DB::table('ingredient')->insert([
            'ingredient_nom' => 'Pà de Pagés',
            'categoria_id' => 7
        ]);

        DB::table('ingredient')->insert([
            'ingredient_nom' => 'Tomàquet de temporada',
            'categoria_id' => 1
        ]);

        DB::table('ingredient')->insert([
            'ingredient_nom' => 'Massa de Pizza',
            'categoria_id' => 7
        ]);

        DB::table('ingredient')->insert([
            'ingredient_nom' => 'Mozzarella',
            'categoria_id' => 5
        ]);

        DB::table('ingredient')->insert([
            'ingredient_nom' => 'Alfàbrega',
            'categoria_id' => 6
        ]);

        DB::table('ingredient')->insert([
            'ingredient_nom' => 'Fetge de Pollastre',
            'categoria_id' => 1
        ]);

        DB::table('ingredient')->insert([
            'ingredient_nom' => 'Anxoves',
            'categoria_id' => 3
        ]);

        DB::table('ingredient')->insert([
            'ingredient_nom' => 'Tàperes',
            'categoria_id' => 1
        ]);

        DB::table('ingredient')->insert([
            'ingredient_nom' => 'Vi',
            'categoria_id' => 8
        ]);

        DB::table('ingredient')->insert([
            'ingredient_nom' => 'Caldo de peix',
            'categoria_id' => 8
        ]);

        DB::table('ingredient')->insert([
            'ingredient_nom' => 'Salvia',
            'categoria_id' => 6
        ]);
        
        DB::table('ingredient')->insert([
            'ingredient_nom' => 'Salsa Hoisin',
            'categoria_id' => 6
        ]);

        DB::table('ingredient')->insert([
            'ingredient_nom' => "Vi d'arrós xinés",
            'categoria_id' => 8
        ]);
        
        DB::table('ingredient')->insert([
            'ingredient_nom' => "Salsa d'ostres",
            'categoria_id' => 6
        ]);

        DB::table('ingredient')->insert([
            'ingredient_nom' => 'Salsa de soja fosca',
            'categoria_id' => 6
        ]);

        DB::table('ingredient')->insert([
            'ingredient_nom' => 'Sucre moré',
            'categoria_id' => 6
        ]);

        DB::table('ingredient')->insert([
            'ingredient_nom' => 'Polvo cinc espècies xineses',
            'categoria_id' => 6
        ]);

        DB::table('ingredient')->insert([
            'ingredient_nom' => 'Anís',
            'categoria_id' => 8
        ]);
        
        DB::table('ingredient')->insert([
            'ingredient_nom' => 'Llaurer',
            'categoria_id' => 6
        ]);

        DB::table('ingredient')->insert([
            'ingredient_nom' => 'Carn (a triar)',
            'categoria_id' => 2
        ]);

        DB::table('ingredient')->insert([
            'ingredient_nom' => 'Peix (a triar)',
            'categoria_id' => 2
        ]);

        DB::table('ingredient')->insert([
            'ingredient_nom' => 'Espinaques',
            'categoria_id' => 1
        ]);

        DB::table('ingredient')->insert([
            'ingredient_nom' => 'Ceba Vermella',
            'categoria_id' => 1
        ]);

        DB::table('ingredient')->insert([
            'ingredient_nom' => "Tallarines d'Arrós",
            'categoria_id' => 7
        ]);

        DB::table('ingredient')->insert([
            'ingredient_nom' => 'Xalotes',
            'categoria_id' => 1
        ]);

        DB::table('ingredient')->insert([
            'ingredient_nom' => 'Rave',
            'categoria_id' => 1
        ]);

        DB::table('ingredient')->insert([
            'ingredient_nom' => 'Salsa de Peix',
            'categoria_id' => 6
        ]);

        DB::table('ingredient')->insert([
            'ingredient_nom' => 'Sucre de Palma',
            'categoria_id' => 6
        ]);

        DB::table('ingredient')->insert([
            'ingredient_nom' => 'Llima',
            'categoria_id' => 1
        ]);

        DB::table('ingredient')->insert([
            'ingredient_nom' => 'Brots de Soja',
            'categoria_id' => 1
        ]);

        DB::table('ingredient')->insert([
            'ingredient_nom' => 'Cacahuets',
            'categoria_id' => 9
        ]);

        DB::table('ingredient')->insert([
            'ingredient_nom' => 'Chili',
            'categoria_id' => 6
        ]);

        DB::table('ingredient')->insert([
            'ingredient_nom' => 'Pinya',
            'categoria_id' => 1
        ]);

        DB::table('ingredient')->insert([
            'ingredient_nom' => 'Arrós Basmati',
            'categoria_id' => 4
        ]);

        DB::table('ingredient')->insert([
            'ingredient_nom' => 'Anacards',
            'categoria_id' => 9
        ]);

        DB::table('ingredient')->insert([
            'ingredient_nom' => 'Oli de sèsam',
            'categoria_id' => 6
        ]);

        DB::table('ingredient')->insert([
            'ingredient_nom' => "Fideus d'arrós",
            'categoria_id' => 7
        ]);

        DB::table('ingredient')->insert([
            'ingredient_nom' => 'Salsa de soja lleugera',
            'categoria_id' => 6
        ]);

        DB::table('ingredient')->insert([
            'ingredient_nom' => 'Bròquil',
            'categoria_id' => 1
        ]);

        DB::table('ingredient')->insert([
            'ingredient_nom' => 'Oli vegetal',
            'categoria_id' => 6
        ]);

        DB::table('ingredient')->insert([
            'ingredient_nom' => 'Filet de Cangur',
            'categoria_id' => 2
        ]);

        DB::table('ingredient')->insert([
            'ingredient_nom' => 'Rúcula',
            'categoria_id' => 1
        ]);

        DB::table('ingredient')->insert([
            'ingredient_nom' => 'Bledes',
            'categoria_id' => 1
        ]);

        DB::table('ingredient')->insert([
            'ingredient_nom' => 'Formatge feta',
            'categoria_id' => 5
        ]);

        DB::table('ingredient')->insert([
            'ingredient_nom' => 'Sal marina',
            'categoria_id' => 6
        ]);

        DB::table('ingredient')->insert([
            'ingredient_nom' => 'Mostassa',
            'categoria_id' => 6
        ]);

        DB::table('ingredient')->insert([
            'ingredient_nom' => 'Yabbies (llagostes blaves de riu)',
            'categoria_id' => 3
        ]);

        DB::table('ingredient')->insert([
            'ingredient_nom' => 'Caldo de carn',
            'categoria_id' => 8
        ]);

        DB::table('ingredient')->insert([
            'ingredient_nom' => 'Pasta de full',
            'categoria_id' => 7
        ]);

        DB::table('ingredient')->insert([
            'ingredient_nom' => 'Carn magra',
            'categoria_id' => 2
        ]);

        DB::table('ingredient')->insert([
            'ingredient_nom' => 'Ceba perlada',
            'categoria_id' => 1
        ]);

        DB::table('ingredient')->insert([
            'ingredient_nom' => 'Cogombre',
            'categoria_id' => 1
        ]);

        DB::table('ingredient')->insert([
            'ingredient_nom' => 'Llet',
            'categoria_id' => 5
        ]);

        DB::table('ingredient')->insert([
            'ingredient_nom' => "Farcit d'arrós i xampinyons",
            'categoria_id' => 1
        ]);

        DB::table('ingredient')->insert([
            'ingredient_nom' => 'Anet',
            'categoria_id' => 6
        ]);

        DB::table('ingredient')->insert([
            'ingredient_nom' => 'Vadella',
            'categoria_id' => 1
        ]);

        DB::table('ingredient')->insert([
            'ingredient_nom' => 'Nata per a cuinar',
            'categoria_id' => 5
        ]);

        DB::table('ingredient')->insert([
            'ingredient_nom' => 'Massa de blat de moro',
            'categoria_id' => 7
        ]);

        DB::table('ingredient')->insert([
            'ingredient_nom' => 'Bistec picat',
            'categoria_id' => 2
        ]);

        DB::table('ingredient')->insert([
            'ingredient_nom' => 'Llonganissa',
            'categoria_id' => 2
        ]);

        DB::table('ingredient')->insert([
            'ingredient_nom' => 'Salsa verda',
            'categoria_id' => 6
        ]);

        DB::table('ingredient')->insert([
            'ingredient_nom' => 'Salsa vermella',
            'categoria_id' => 6
        ]);

        DB::table('ingredient')->insert([
            'ingredient_nom' => 'Coriandre',
            'categoria_id' => 6
        ]);

        DB::table('ingredient')->insert([
            'ingredient_nom' => 'Formatge fresc',
            'categoria_id' => 5
        ]);

        DB::table('ingredient')->insert([
            'ingredient_nom' => 'Truita de blat de moro',
            'categoria_id' => 7
        ]);

        DB::table('ingredient')->insert([
            'ingredient_nom' => 'Alvocat',
            'categoria_id' => 1
        ]);

        DB::table('ingredient')->insert([
            'ingredient_nom' => 'Fesols negres',
            'categoria_id' => 4
        ]);

        DB::table('ingredient')->insert([
            'ingredient_nom' => 'Vinagre',
            'categoria_id' => 6
        ]);

        DB::table('ingredient')->insert([
            'ingredient_nom' => 'Roquefort',
            'categoria_id' => 5
        ]);

        DB::table('ingredient')->insert([
            'ingredient_nom' => 'Salame',
            'categoria_id' => 2
        ]);

        DB::table('ingredient')->insert([
            'ingredient_nom' => 'Provolone',
            'categoria_id' => 5
        ]);

        DB::table('ingredient')->insert([
            'ingredient_nom' => 'Embotit',
            'categoria_id' => 2
        ]);

        DB::table('ingredient')->insert([
            'ingredient_nom' => 'Vainilla',
            'categoria_id' => 6
        ]);

        DB::table('ingredient')->insert([
            'ingredient_nom' => 'Farina de blat',
            'categoria_id' => 7
        ]);

        DB::table('ingredient')->insert([
            'ingredient_nom' => 'Dolç de llet',
            'categoria_id' => 6
        ]);

        DB::table('ingredient')->insert([
            'ingredient_nom' => 'Coco ratllat',
            'categoria_id' => 6
        ]);

        DB::table('ingredient')->insert([
            'ingredient_nom' => 'Morró vermell',
            'categoria_id' => 6
        ]);

        DB::table('ingredient')->insert([
            'ingredient_nom' => 'Greix',
            'categoria_id' => 2
        ]);

        DB::table('ingredient')->insert([
            'ingredient_nom' => 'Orenga',
            'categoria_id' => 6
        ]);

        DB::table('ingredient')->insert([
            'ingredient_nom' => 'Faves',
            'categoria_id' => 1
        ]);

        DB::table('ingredient')->insert([
            'ingredient_nom' => 'Comí',
            'categoria_id' => 6
        ]);

        DB::table('ingredient')->insert([
            'ingredient_nom' => 'Kobeiba (carn, peix, nous)',
            'categoria_id' => 2
        ]);

        DB::table('ingredient')->insert([
            'ingredient_nom' => 'Kibbeh (mandonguilles)',
            'categoria_id' => 2
        ]);

        DB::table('ingredient')->insert([
            'ingredient_nom' => 'Hummus',
            'categoria_id' => 4
        ]);

        DB::table('ingredient')->insert([
            'ingredient_nom' => 'Cardamom',
            'categoria_id' => 6
        ]);

        DB::table('ingredient')->insert([
            'ingredient_nom' => 'Nou molta',
            'categoria_id' => 6
        ]);

        DB::table('ingredient')->insert([
            'ingredient_nom' => 'Pa de pita',
            'categoria_id' => 7
        ]);

        DB::table('ingredient')->insert([
            'ingredient_nom' => 'Col',
            'categoria_id' => 1
        ]);

        DB::table('ingredient')->insert([
            'ingredient_nom' => 'Carbasses',
            'categoria_id' => 1
        ]);

        DB::table('ingredient')->insert([
            'ingredient_nom' => 'Alberginia',
            'categoria_id' => 1
        ]);

        DB::table('ingredient')->insert([
            'ingredient_nom' => 'Yuca',
            'categoria_id' => 1
        ]);

        DB::table('ingredient')->insert([
            'ingredient_nom' => 'Pebre verd',
            'categoria_id' => 6
        ]);

        DB::table('ingredient')->insert([
            'ingredient_nom' => 'Ostres',
            'categoria_id' => 3
        ]);

        DB::table('ingredient')->insert([
            'ingredient_nom' => 'Guindilla',
            'categoria_id' => 6
        ]);

        DB::table('ingredient')->insert([
            'ingredient_nom' =>'Gambes',
            'categoria_id' => 3
        ]);

        DB::table('ingredient')->insert([
            'ingredient_nom' => 'Calamar',
            'categoria_id' => 3
        ]);
        
        DB::table('ingredient')->insert([
            'ingredient_nom' => 'Tofu',
            'categoria_id' => 1
        ]);

        DB::table('ingredient')->insert([
            'ingredient_nom' => 'Corder',
            'categoria_id' => 2
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
            'ingredient_id' => 1,
            'plat_id' => 1
        ]);
        DB::table('ingredients_plat')->insert([
            'ingredient_id' => 136,
            'plat_id' => 1
        ]);

        DB::table('ingredients_plat')->insert([
            'ingredient_id' => 30,
            'plat_id' => 2
        ]);
        DB::table('ingredients_plat')->insert([
            'ingredient_id' => 28,
            'plat_id' => 2
        ]);
        DB::table('ingredients_plat')->insert([
            'ingredient_id' => 29,
            'plat_id' => 2
        ]);
        DB::table('ingredients_plat')->insert([
            'ingredient_id' => 31,
            'plat_id' => 2
        ]);
        DB::table('ingredients_plat')->insert([
            'ingredient_id' => 32,
            'plat_id' => 2
        ]);
        DB::table('ingredients_plat')->insert([
            'ingredient_id' => 33,
            'plat_id' => 2
        ]);
        DB::table('ingredients_plat')->insert([
            'ingredient_id' => 34,
            'plat_id' => 2
        ]);

        DB::table('ingredients_plat')->insert([
            'ingredient_id' => 35,
            'plat_id' => 3
        ]);
        DB::table('ingredients_plat')->insert([
            'ingredient_id' => 36,
            'plat_id' => 3
        ]);
        DB::table('ingredients_plat')->insert([
            'ingredient_id' => 37,
            'plat_id' => 3
        ]);
        DB::table('ingredients_plat')->insert([
            'ingredient_id' => 38,
            'plat_id' => 3
        ]);
        DB::table('ingredients_plat')->insert([
            'ingredient_id' => 39,
            'plat_id' => 3
        ]);
        DB::table('ingredients_plat')->insert([
            'ingredient_id' => 40,
            'plat_id' => 3
        ]);
        DB::table('ingredients_plat')->insert([
            'ingredient_id' => 2,
            'plat_id' => 3
        ]);
        DB::table('ingredients_plat')->insert([
            'ingredient_id' => 3,
            'plat_id' => 3
        ]);

        DB::table('ingredients_plat')->insert([
            'ingredient_id' => 41,
            'plat_id' => 4
        ]);
        DB::table('ingredients_plat')->insert([
            'ingredient_id' => 42,
            'plat_id' => 4
        ]);
        DB::table('ingredients_plat')->insert([
            'ingredient_id' => 5,
            'plat_id' => 4
        ]);
        DB::table('ingredients_plat')->insert([
            'ingredient_id' => 4,
            'plat_id' => 4
        ]);

        DB::table('ingredients_plat')->insert([
            'ingredient_id' => 96,
            'plat_id' => 5
        ]);
        DB::table('ingredients_plat')->insert([
            'ingredient_id' => 5,
            'plat_id' => 5
        ]);
        DB::table('ingredients_plat')->insert([
            'ingredient_id' => 4,
            'plat_id' => 5
        ]);
        DB::table('ingredients_plat')->insert([
            'ingredient_id' => 6,
            'plat_id' => 5
        ]);

        DB::table('ingredients_plat')->insert([
            'ingredient_id' => 43,
            'plat_id' => 6
        ]);
        DB::table('ingredients_plat')->insert([
            'ingredient_id' => 45,
            'plat_id' => 6
        ]);
        DB::table('ingredients_plat')->insert([
            'ingredient_id' => 44,
            'plat_id' => 6
        ]);
        DB::table('ingredients_plat')->insert([
            'ingredient_id' => 4,
            'plat_id' => 6
        ]);
        DB::table('ingredients_plat')->insert([
            'ingredient_id' => 7,
            'plat_id' => 6
        ]);

        DB::table('ingredients_plat')->insert([
            'ingredient_id' => 46,
            'plat_id' => 7
        ]);
        DB::table('ingredients_plat')->insert([
            'ingredient_id' => 47,
            'plat_id' => 7
        ]);
        DB::table('ingredients_plat')->insert([
            'ingredient_id' => 48,
            'plat_id' => 7
        ]);
        DB::table('ingredients_plat')->insert([
            'ingredient_id' => 49,
            'plat_id' => 7
        ]);
        DB::table('ingredients_plat')->insert([
            'ingredient_id' => 88,
            'plat_id' => 7
        ]);
        DB::table('ingredients_plat')->insert([
            'ingredient_id' => 51,
            'plat_id' => 7
        ]);
        DB::table('ingredients_plat')->insert([
            'ingredient_id' => 1,
            'plat_id' => 7
        ]);
        DB::table('ingredients_plat')->insert([
            'ingredient_id' => 3,
            'plat_id' => 7
        ]);
        DB::table('ingredients_plat')->insert([
            'ingredient_id' => 8,
            'plat_id' => 7
        ]);
        DB::table('ingredients_plat')->insert([
            'ingredient_id' => 5,
            'plat_id' => 7
        ]);
        DB::table('ingredients_plat')->insert([
            'ingredient_id' => 4,
            'plat_id' => 7
        ]);

        DB::table('ingredients_plat')->insert([
            'ingredient_id' => 9,
            'plat_id' => 8
        ]);
        DB::table('ingredients_plat')->insert([
            'ingredient_id' => 52,
            'plat_id' => 8
        ]);
        DB::table('ingredients_plat')->insert([
            'ingredient_id' => 53,
            'plat_id' => 8
        ]);
        DB::table('ingredients_plat')->insert([
            'ingredient_id' => 54,
            'plat_id' => 8
        ]);
        DB::table('ingredients_plat')->insert([
            'ingredient_id' => 55,
            'plat_id' => 8
        ]);
        DB::table('ingredients_plat')->insert([
            'ingredient_id' => 56,
            'plat_id' => 8
        ]);
        DB::table('ingredients_plat')->insert([
            'ingredient_id' => 57,
            'plat_id' => 8
        ]);
        DB::table('ingredients_plat')->insert([
            'ingredient_id' => 58,
            'plat_id' => 8
        ]);
        DB::table('ingredients_plat')->insert([
            'ingredient_id' => 59,
            'plat_id' => 8
        ]);
        DB::table('ingredients_plat')->insert([
            'ingredient_id' => 10,
            'plat_id' => 8
        ]);
        DB::table('ingredients_plat')->insert([
            'ingredient_id' => 11,
            'plat_id' => 8
        ]);
        DB::table('ingredients_plat')->insert([
            'ingredient_id' => 12,
            'plat_id' => 8
        ]);

        DB::table('ingredients_plat')->insert([
            'ingredient_id' => 60,
            'plat_id' => 9
        ]);
        DB::table('ingredients_plat')->insert([
            'ingredient_id' => 61,
            'plat_id' => 9
        ]);
        DB::table('ingredients_plat')->insert([
            'ingredient_id' => 62,
            'plat_id' => 9
        ]);
        DB::table('ingredients_plat')->insert([
            'ingredient_id' => 23,
            'plat_id' => 9
        ]);
        DB::table('ingredients_plat')->insert([
            'ingredient_id' => 137,
            'plat_id' => 9
        ]);

        DB::table('ingredients_plat')->insert([
            'ingredient_id' => 21,
            'plat_id' => 10
        ]);
        DB::table('ingredients_plat')->insert([
            'ingredient_id' => 13,
            'plat_id' => 10
        ]);
        DB::table('ingredients_plat')->insert([
            'ingredient_id' => 5,
            'plat_id' => 10
        ]);
        DB::table('ingredients_plat')->insert([
            'ingredient_id' => 4,
            'plat_id' => 10
        ]);
        DB::table('ingredients_plat')->insert([
            'ingredient_id' => 9,
            'plat_id' => 10
        ]);
        DB::table('ingredients_plat')->insert([
            'ingredient_id' => 63,
            'plat_id' => 10
        ]);
        DB::table('ingredients_plat')->insert([
            'ingredient_id' => 11,
            'plat_id' => 10
        ]);
        DB::table('ingredients_plat')->insert([
            'ingredient_id' => 10,
            'plat_id' => 10
        ]);
        DB::table('ingredients_plat')->insert([
            'ingredient_id' => 6,
            'plat_id' => 10
        ]);
        DB::table('ingredients_plat')->insert([
            'ingredient_id' => 2,
            'plat_id' => 10
        ]);

        DB::table('ingredients_plat')->insert([
            'ingredient_id' => 64,
            'plat_id' => 11
        ]);
        DB::table('ingredients_plat')->insert([
            'ingredient_id' => 65,
            'plat_id' => 11
        ]);
        DB::table('ingredients_plat')->insert([
            'ingredient_id' => 66,
            'plat_id' => 11
        ]);
        DB::table('ingredients_plat')->insert([
            'ingredient_id' => 67,
            'plat_id' => 11
        ]);
        DB::table('ingredients_plat')->insert([
            'ingredient_id' => 68,
            'plat_id' => 11
        ]);
        DB::table('ingredients_plat')->insert([
            'ingredient_id' => 69,
            'plat_id' => 11
        ]);
        DB::table('ingredients_plat')->insert([
            'ingredient_id' => 70,
            'plat_id' => 11
        ]);
        DB::table('ingredients_plat')->insert([
            'ingredient_id' => 71,
            'plat_id' => 11
        ]);
        DB::table('ingredients_plat')->insert([
            'ingredient_id' => 72,
            'plat_id' => 11
        ]);
        DB::table('ingredients_plat')->insert([
            'ingredient_id' => 14,
            'plat_id' => 11
        ]);
        DB::table('ingredients_plat')->insert([
            'ingredient_id' => 137,
            'plat_id' => 11
        ]);
        DB::table('ingredients_plat')->insert([
            'ingredient_id' => 15,
            'plat_id' => 11
        ]);
        DB::table('ingredients_plat')->insert([
            'ingredient_id' => 2,
            'plat_id' => 11
        ]);
        DB::table('ingredients_plat')->insert([
            'ingredient_id' => 4,
            'plat_id' => 11
        ]);

        DB::table('ingredients_plat')->insert([
            'ingredient_id' => 14,
            'plat_id' => 12
        ]);
        DB::table('ingredients_plat')->insert([
            'ingredient_id' => 3,
            'plat_id' => 12
        ]);
        DB::table('ingredients_plat')->insert([
            'ingredient_id' => 7,
            'plat_id' => 12
        ]);
        DB::table('ingredients_plat')->insert([
            'ingredient_id' => 15,
            'plat_id' => 12
        ]);
        DB::table('ingredients_plat')->insert([
            'ingredient_id' => 10,
            'plat_id' => 12
        ]);
        DB::table('ingredients_plat')->insert([
            'ingredient_id' => 73,
            'plat_id' => 12
        ]);
        DB::table('ingredients_plat')->insert([
            'ingredient_id' => 74,
            'plat_id' => 12
        ]);
        DB::table('ingredients_plat')->insert([
            'ingredient_id' => 75,
            'plat_id' => 12
        ]);
        DB::table('ingredients_plat')->insert([
            'ingredient_id' => 76,
            'plat_id' => 12
        ]);

        DB::table('ingredients_plat')->insert([
            'ingredient_id' => 77,
            'plat_id' => 13
        ]);
        DB::table('ingredients_plat')->insert([
            'ingredient_id' => 10,
            'plat_id' => 13
        ]);
        DB::table('ingredients_plat')->insert([
            'ingredient_id' => 78,
            'plat_id' => 13
        ]);
        DB::table('ingredients_plat')->insert([
            'ingredient_id' => 67,
            'plat_id' => 13
        ]);
        DB::table('ingredients_plat')->insert([
            'ingredient_id' => 79,
            'plat_id' => 13
        ]);
        DB::table('ingredients_plat')->insert([
            'ingredient_id' => 80,
            'plat_id' => 13
        ]);
        DB::table('ingredients_plat')->insert([
            'ingredient_id' => 56,
            'plat_id' => 13
        ]);
        DB::table('ingredients_plat')->insert([
            'ingredient_id' => 2,
            'plat_id' => 13
        ]);
        DB::table('ingredients_plat')->insert([
            'ingredient_id' => 15,
            'plat_id' => 13
        ]);
        DB::table('ingredients_plat')->insert([
            'ingredient_id' => 12,
            'plat_id' => 13
        ]);

        DB::table('ingredients_plat')->insert([
            'ingredient_id' => 81,
            'plat_id' => 14
        ]);
        DB::table('ingredients_plat')->insert([
            'ingredient_id' => 82,
            'plat_id' => 14
        ]);
        DB::table('ingredients_plat')->insert([
            'ingredient_id' => 83,
            'plat_id' => 14
        ]);
        DB::table('ingredients_plat')->insert([
            'ingredient_id' => 84,
            'plat_id' => 14
        ]);
        DB::table('ingredients_plat')->insert([
            'ingredient_id' => 85,
            'plat_id' => 14
        ]);
        DB::table('ingredients_plat')->insert([
            'ingredient_id' => 86,
            'plat_id' => 14
        ]);
        DB::table('ingredients_plat')->insert([
            'ingredient_id' => 56,
            'plat_id' => 14
        ]);
        DB::table('ingredients_plat')->insert([
            'ingredient_id' => 17,
            'plat_id' => 14
        ]);
        DB::table('ingredients_plat')->insert([
            'ingredient_id' => 18,
            'plat_id' => 14
        ]);
        DB::table('ingredients_plat')->insert([
            'ingredient_id' => 19,
            'plat_id' => 14
        ]);
        DB::table('ingredients_plat')->insert([
            'ingredient_id' => 4,
            'plat_id' => 14
        ]);
        DB::table('ingredients_plat')->insert([
            'ingredient_id' => 6,
            'plat_id' => 14
        ]);
        DB::table('ingredients_plat')->insert([
            'ingredient_id' => 20,
            'plat_id' => 14
        ]);

        DB::table('ingredients_plat')->insert([
            'ingredient_id' => 87,
            'plat_id' => 15
        ]);
        DB::table('ingredients_plat')->insert([
            'ingredient_id' => 4,
            'plat_id' => 15
        ]);
        DB::table('ingredients_plat')->insert([
            'ingredient_id' => 6,
            'plat_id' => 15
        ]);
        DB::table('ingredients_plat')->insert([
            'ingredient_id' => 5,
            'plat_id' => 15
        ]);

        DB::table('ingredients_plat')->insert([
            'ingredient_id' => 38,
            'plat_id' => 16
        ]);
        DB::table('ingredients_plat')->insert([
            'ingredient_id' => 88,
            'plat_id' => 16
        ]);
        DB::table('ingredients_plat')->insert([
            'ingredient_id' => 4,
            'plat_id' => 16
        ]);
        DB::table('ingredients_plat')->insert([
            'ingredient_id' => 89,
            'plat_id' => 16
        ]);
        DB::table('ingredients_plat')->insert([
            'ingredient_id' => 15,
            'plat_id' => 16
        ]);
        DB::table('ingredients_plat')->insert([
            'ingredient_id' => 21,
            'plat_id' => 16
        ]);

        DB::table('ingredients_plat')->insert([
            'ingredient_id' => 90,
            'plat_id' => 17
        ]);
        DB::table('ingredients_plat')->insert([
            'ingredient_id' => 91,
            'plat_id' => 17
        ]);
        DB::table('ingredients_plat')->insert([
            'ingredient_id' => 92,
            'plat_id' => 17
        ]);
        DB::table('ingredients_plat')->insert([
            'ingredient_id' => 17,
            'plat_id' => 17
        ]);
        DB::table('ingredients_plat')->insert([
            'ingredient_id' => 3,
            'plat_id' => 17
        ]);
        DB::table('ingredients_plat')->insert([
            'ingredient_id' => 26,
            'plat_id' => 17
        ]);

        DB::table('ingredients_plat')->insert([
            'ingredient_id' => 21,
            'plat_id' => 18
        ]);
        DB::table('ingredients_plat')->insert([
            'ingredient_id' => 22,
            'plat_id' => 18
        ]);
        DB::table('ingredients_plat')->insert([
            'ingredient_id' => 8,
            'plat_id' => 18
        ]);
        DB::table('ingredients_plat')->insert([
            'ingredient_id' => 15,
            'plat_id' => 18
        ]);
        DB::table('ingredients_plat')->insert([
            'ingredient_id' => 5,
            'plat_id' => 18
        ]);
        DB::table('ingredients_plat')->insert([
            'ingredient_id' => 3,
            'plat_id' => 18
        ]);
        DB::table('ingredients_plat')->insert([
            'ingredient_id' => 23,
            'plat_id' => 18
        ]);
        DB::table('ingredients_plat')->insert([
            'ingredient_id' => 24,
            'plat_id' => 18
        ]);
        DB::table('ingredients_plat')->insert([
            'ingredient_id' => 5,
            'plat_id' => 18
        ]);
        DB::table('ingredients_plat')->insert([
            'ingredient_id' => 93,
            'plat_id' => 18
        ]);
        DB::table('ingredients_plat')->insert([
            'ingredient_id' => 94,
            'plat_id' => 18
        ]);
        DB::table('ingredients_plat')->insert([
            'ingredient_id' => 95,
            'plat_id' => 18
        ]);
        DB::table('ingredients_plat')->insert([
            'ingredient_id' => 50,
            'plat_id' => 18
        ]);
        DB::table('ingredients_plat')->insert([
            'ingredient_id' => 74,
            'plat_id' => 18
        ]);

        DB::table('ingredients_plat')->insert([
            'ingredient_id' => 27,
            'plat_id' => 19
        ]);
        DB::table('ingredients_plat')->insert([
            'ingredient_id' => 23,
            'plat_id' => 19
        ]);
        DB::table('ingredients_plat')->insert([
            'ingredient_id' => 4,
            'plat_id' => 19
        ]);
        DB::table('ingredients_plat')->insert([
            'ingredient_id' => 5,
            'plat_id' => 19
        ]);
        DB::table('ingredients_plat')->insert([
            'ingredient_id' => 6,
            'plat_id' => 19
        ]);
        DB::table('ingredients_plat')->insert([
            'ingredient_id' => 3,
            'plat_id' => 19
        ]);
        DB::table('ingredients_plat')->insert([
            'ingredient_id' => 97,
            'plat_id' => 19
        ]);
        DB::table('ingredients_plat')->insert([
            'ingredient_id' => 49,
            'plat_id' => 19
        ]);
        DB::table('ingredients_plat')->insert([
            'ingredient_id' => 86,
            'plat_id' => 19
        ]);

        DB::table('ingredients_plat')->insert([
            'ingredient_id' => 32,
            'plat_id' => 20
        ]);
        DB::table('ingredients_plat')->insert([
            'ingredient_id' => 4,
            'plat_id' => 20
        ]);
        DB::table('ingredients_plat')->insert([
            'ingredient_id' => 3,
            'plat_id' => 20
        ]);
        DB::table('ingredients_plat')->insert([
            'ingredient_id' => 5,
            'plat_id' => 20
        ]);
        DB::table('ingredients_plat')->insert([
            'ingredient_id' => 6,
            'plat_id' => 20
        ]);
        DB::table('ingredients_plat')->insert([
            'ingredient_id' => 98,
            'plat_id' => 20
        ]);
        DB::table('ingredients_plat')->insert([
            'ingredient_id' => 99,
            'plat_id' => 20
        ]);
        DB::table('ingredients_plat')->insert([
            'ingredient_id' => 100,
            'plat_id' => 20
        ]);
        DB::table('ingredients_plat')->insert([
            'ingredient_id' => 101,
            'plat_id' => 20
        ]);
        DB::table('ingredients_plat')->insert([
            'ingredient_id' => 102,
            'plat_id' => 20
        ]);
        DB::table('ingredients_plat')->insert([
            'ingredient_id' => 103,
            'plat_id' => 20
        ]);
        DB::table('ingredients_plat')->insert([
            'ingredient_id' => 104,
            'plat_id' => 20
        ]);

        DB::table('ingredients_plat')->insert([
            'ingredient_id' => 3,
            'plat_id' => 21
        ]);
        DB::table('ingredients_plat')->insert([
            'ingredient_id' => 5,
            'plat_id' => 21
        ]);
        DB::table('ingredients_plat')->insert([
            'ingredient_id' => 6,
            'plat_id' => 21
        ]);
        DB::table('ingredients_plat')->insert([
            'ingredient_id' => 2,
            'plat_id' => 21
        ]);
        DB::table('ingredients_plat')->insert([
            'ingredient_id' => 103,
            'plat_id' => 21
        ]);
        DB::table('ingredients_plat')->insert([
            'ingredient_id' => 105,
            'plat_id' => 21
        ]);
        DB::table('ingredients_plat')->insert([
            'ingredient_id' => 106,
            'plat_id' => 21
        ]);
        DB::table('ingredients_plat')->insert([
            'ingredient_id' => 72,
            'plat_id' => 21
        ]);
        DB::table('ingredients_plat')->insert([
            'ingredient_id' => 7,
            'plat_id' => 21
        ]);
        DB::table('ingredients_plat')->insert([
            'ingredient_id' => 93,
            'plat_id' => 21
        ]);
        DB::table('ingredients_plat')->insert([
            'ingredient_id' => 2,
            'plat_id' => 21
        ]);

        DB::table('ingredients_plat')->insert([
            'ingredient_id' => 1,
            'plat_id' => 22
        ]);
        DB::table('ingredients_plat')->insert([
            'ingredient_id' => 9,
            'plat_id' => 22
        ]);
        DB::table('ingredients_plat')->insert([
            'ingredient_id' => 3,
            'plat_id' => 22
        ]);
        DB::table('ingredients_plat')->insert([
            'ingredient_id' => 18,
            'plat_id' => 22
        ]);
        DB::table('ingredients_plat')->insert([
            'ingredient_id' => 107,
            'plat_id' => 22
        ]);
        DB::table('ingredients_plat')->insert([
            'ingredient_id' => 20,
            'plat_id' => 22
        ]);

        DB::table('ingredients_plat')->insert([
            'ingredient_id' => 109,
            'plat_id' => 23
        ]);
        DB::table('ingredients_plat')->insert([
            'ingredient_id' => 110,
            'plat_id' => 23
        ]);
        DB::table('ingredients_plat')->insert([
            'ingredient_id' => 111,
            'plat_id' => 23
        ]);
        DB::table('ingredients_plat')->insert([
            'ingredient_id' => 112,
            'plat_id' => 23
        ]);

        DB::table('ingredients_plat')->insert([
            'ingredient_id' => 8,
            'plat_id' => 24
        ]);
        DB::table('ingredients_plat')->insert([
            'ingredient_id' => 15,
            'plat_id' => 24
        ]);
        DB::table('ingredients_plat')->insert([
            'ingredient_id' => 18,
            'plat_id' => 24
        ]);
        DB::table('ingredients_plat')->insert([
            'ingredient_id' => 5,
            'plat_id' => 24
        ]);
        DB::table('ingredients_plat')->insert([
            'ingredient_id' => 56,
            'plat_id' => 24
        ]);
        DB::table('ingredients_plat')->insert([
            'ingredient_id' => 113,
            'plat_id' => 24
        ]);
        DB::table('ingredients_plat')->insert([
            'ingredient_id' => 114,
            'plat_id' => 24
        ]);
        DB::table('ingredients_plat')->insert([
            'ingredient_id' => 115,
            'plat_id' => 24
        ]);
        DB::table('ingredients_plat')->insert([
            'ingredient_id' => 116,
            'plat_id' => 24
        ]);
        DB::table('ingredients_plat')->insert([
            'ingredient_id' => 22,
            'plat_id' => 24
        ]);

        DB::table('ingredients_plat')->insert([
            'ingredient_id' => 9,
            'plat_id' => 25
        ]);
        DB::table('ingredients_plat')->insert([
            'ingredient_id' => 3,
            'plat_id' => 25
        ]);
        DB::table('ingredients_plat')->insert([
            'ingredient_id' => 17,
            'plat_id' => 25
        ]);
        DB::table('ingredients_plat')->insert([
            'ingredient_id' => 15,
            'plat_id' => 25
        ]);
        DB::table('ingredients_plat')->insert([
            'ingredient_id' => 5,
            'plat_id' => 25
        ]);
        DB::table('ingredients_plat')->insert([
            'ingredient_id' => 2,
            'plat_id' => 25
        ]);
        DB::table('ingredients_plat')->insert([
            'ingredient_id' => 117,
            'plat_id' => 25
        ]);
        DB::table('ingredients_plat')->insert([
            'ingredient_id' => 118,
            'plat_id' => 25
        ]);
        DB::table('ingredients_plat')->insert([
            'ingredient_id' => 119,
            'plat_id' => 25
        ]);
        DB::table('ingredients_plat')->insert([
            'ingredient_id' => 25,
            'plat_id' => 25
        ]);

        DB::table('ingredients_plat')->insert([
            'ingredient_id' => 2,
            'plat_id' => 26
        ]);
        DB::table('ingredients_plat')->insert([
            'ingredient_id' => 18,
            'plat_id' => 26
        ]);
        DB::table('ingredients_plat')->insert([
            'ingredient_id' => 5,
            'plat_id' => 26
        ]);
        DB::table('ingredients_plat')->insert([
            'ingredient_id' => 24,
            'plat_id' => 26
        ]);
        DB::table('ingredients_plat')->insert([
            'ingredient_id' => 7,
            'plat_id' => 26
        ]);
        DB::table('ingredients_plat')->insert([
            'ingredient_id' => 25,
            'plat_id' => 26
        ]);
        DB::table('ingredients_plat')->insert([
            'ingredient_id' => 4,
            'plat_id' => 26
        ]);
        DB::table('ingredients_plat')->insert([
            'ingredient_id' => 120,
            'plat_id' => 26
        ]);
        DB::table('ingredients_plat')->insert([
            'ingredient_id' => 121,
            'plat_id' => 26
        ]);

        DB::table('ingredients_plat')->insert([
            'ingredient_id' => 122,
            'plat_id' => 27
        ]);
        DB::table('ingredients_plat')->insert([
            'ingredient_id' => 123,
            'plat_id' => 27
        ]);
        DB::table('ingredients_plat')->insert([
            'ingredient_id' => 124,
            'plat_id' => 27
        ]);

        DB::table('ingredients_plat')->insert([
            'ingredient_id' => 27,
            'plat_id' => 28
        ]);
        DB::table('ingredients_plat')->insert([
            'ingredient_id' => 138,
            'plat_id' => 28
        ]);
        DB::table('ingredients_plat')->insert([
            'ingredient_id' => 3,
            'plat_id' => 28
        ]);
        DB::table('ingredients_plat')->insert([
            'ingredient_id' => 2,
            'plat_id' => 28
        ]);
        DB::table('ingredients_plat')->insert([
            'ingredient_id' => 1,
            'plat_id' => 28
        ]);
        DB::table('ingredients_plat')->insert([
            'ingredient_id' => 25,
            'plat_id' => 28
        ]);
        DB::table('ingredients_plat')->insert([
            'ingredient_id' => 6,
            'plat_id' => 28
        ]);
        DB::table('ingredients_plat')->insert([
            'ingredient_id' => 24,
            'plat_id' => 28
        ]);
        DB::table('ingredients_plat')->insert([
            'ingredient_id' => 5,
            'plat_id' => 28
        ]);
        DB::table('ingredients_plat')->insert([
            'ingredient_id' => 125,
            'plat_id' => 28
        ]);
        DB::table('ingredients_plat')->insert([
            'ingredient_id' => 126,
            'plat_id' => 28
        ]);
        DB::table('ingredients_plat')->insert([
            'ingredient_id' => 127,
            'plat_id' => 28
        ]);

        DB::table('ingredients_plat')->insert([
            'ingredient_id' => 138,
            'plat_id' => 29
        ]);
        DB::table('ingredients_plat')->insert([
            'ingredient_id' => 3,
            'plat_id' => 29
        ]);
        DB::table('ingredients_plat')->insert([
            'ingredient_id' => 8,
            'plat_id' => 29
        ]);
        DB::table('ingredients_plat')->insert([
            'ingredient_id' => 26,
            'plat_id' => 29
        ]);
        DB::table('ingredients_plat')->insert([
            'ingredient_id' => 19,
            'plat_id' => 29
        ]);
        DB::table('ingredients_plat')->insert([
            'ingredient_id' => 4,
            'plat_id' => 29
        ]);
        DB::table('ingredients_plat')->insert([
            'ingredient_id' => 5,
            'plat_id' => 29
        ]);
        DB::table('ingredients_plat')->insert([
            'ingredient_id' => 6,
            'plat_id' => 29
        ]);
        DB::table('ingredients_plat')->insert([
            'ingredient_id' => 7,
            'plat_id' => 29
        ]);
        DB::table('ingredients_plat')->insert([
            'ingredient_id' => 59,
            'plat_id' => 29
        ]);

        DB::table('ingredients_plat')->insert([
            'ingredient_id' => 26,
            'plat_id' => 30
        ]);
        DB::table('ingredients_plat')->insert([
            'ingredient_id' => 7,
            'plat_id' => 30
        ]);
        DB::table('ingredients_plat')->insert([
            'ingredient_id' => 3,
            'plat_id' => 30
        ]);
        DB::table('ingredients_plat')->insert([
            'ingredient_id' => 2,
            'plat_id' => 30
        ]);
        DB::table('ingredients_plat')->insert([
            'ingredient_id' => 25,
            'plat_id' => 30
        ]);
        DB::table('ingredients_plat')->insert([
            'ingredient_id' => 4,
            'plat_id' => 30
        ]);
        DB::table('ingredients_plat')->insert([
            'ingredient_id' => 24,
            'plat_id' => 30
        ]);
        DB::table('ingredients_plat')->insert([
            'ingredient_id' => 5,
            'plat_id' => 30
        ]);
        DB::table('ingredients_plat')->insert([
            'ingredient_id' => 6,
            'plat_id' => 30
        ]);
        DB::table('ingredients_plat')->insert([
            'ingredient_id' => 61,
            'plat_id' => 30
        ]);
        DB::table('ingredients_plat')->insert([
            'ingredient_id' => 30,
            'plat_id' => 30
        ]);
        DB::table('ingredients_plat')->insert([
            'ingredient_id' => 128,
            'plat_id' => 30
        ]);
        DB::table('ingredients_plat')->insert([
            'ingredient_id' => 129,
            'plat_id' => 30
        ]);
        DB::table('ingredients_plat')->insert([
            'ingredient_id' => 130,
            'plat_id' => 30
        ]);
        DB::table('ingredients_plat')->insert([
            'ingredient_id' => 131,
            'plat_id' => 30
        ]);
        DB::table('ingredients_plat')->insert([
            'ingredient_id' => 132,
            'plat_id' => 30
        ]);
        DB::table('ingredients_plat')->insert([
            'ingredient_id' => 133,
            'plat_id' => 30
        ]);
        DB::table('ingredients_plat')->insert([
            'ingredient_id' => 59,
            'plat_id' => 30
        ]);
        DB::table('ingredients_plat')->insert([
            'ingredient_id' => 134,
            'plat_id' => 30
        ]);

        DB::table('ingredients_plat')->insert([
            'ingredient_id' => 5,
            'plat_id' => 31
        ]);
        DB::table('ingredients_plat')->insert([
            'ingredient_id' => 22,
            'plat_id' => 31
        ]);
        DB::table('ingredients_plat')->insert([
            'ingredient_id' => 15,
            'plat_id' => 31
        ]);
        DB::table('ingredients_plat')->insert([
            'ingredient_id' => 8,
            'plat_id' => 31
        ]);
        DB::table('ingredients_plat')->insert([
            'ingredient_id' => 38,
            'plat_id' => 31
        ]);
        DB::table('ingredients_plat')->insert([
            'ingredient_id' => 3,
            'plat_id' => 31
        ]);
        DB::table('ingredients_plat')->insert([
            'ingredient_id' => 2,
            'plat_id' => 31
        ]);
        DB::table('ingredients_plat')->insert([
            'ingredient_id' => 7,
            'plat_id' => 31
        ]);
        DB::table('ingredients_plat')->insert([
            'ingredient_id' => 6,
            'plat_id' => 31
        ]);
        DB::table('ingredients_plat')->insert([
            'ingredient_id' => 4,
            'plat_id' => 31
        ]);
        DB::table('ingredients_plat')->insert([
            'ingredient_id' => 114,
            'plat_id' => 31
        ]);
        DB::table('ingredients_plat')->insert([
            'ingredient_id' => 13,
            'plat_id' => 31
        ]);
    }
}
