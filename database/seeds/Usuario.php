<?php

use Illuminate\Database\Seeder;

use App\Models\User;

class Usuario extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create
        ([
            'nombre' => 'Danilo Alfonso',
            'apellido' => 'Cadena Cadena',
            'email' => 'daniloacc1991@gmail.com',
            'password' => bcrypt('123456'),
            'tipo_id' => 3,
            'estado' => 1
        ]);
        
        User::create
        ([
        'nombre' => 'Justin Andres',
        'apellido' => 'Rodriguez Perez',
        'email' => 'justinrodriguez@hotmail.com',
        'password' => bcrypt('justin123'),
        'tipo_id' => 1,
        'estado' => 1
        ]);
        User::create
        ([
        'nombre' => 'Samuel',
        'apellido' => 'Forero Pardo',
        'email' => 'samuelforero@hotmail.com',
        'password' => bcrypt('samuel345'),
        'tipo_id' => 1,
        'estado' => 1
        ]);
        User::create
        ([
        'nombre' => 'Angie Lorena',
        'apellido' => 'Forero Pardo',
        'email' => 'angielorena@hotmail.com',
        'password' => bcrypt('angie567'),
        'tipo_id' => 1,
        'estado' => 1
        ]);
        User::create
        ([
        'nombre' => 'Marian Gabriela',
        'apellido' => 'Piñerez Perez',
        'email' => 'marianpiñerez@hotmail.com',
        'password' => bcrypt('mariam789'),
        'tipo_id' => 1,
        'estado' => 1
        ]);
        User::create
        ([
        'nombre' => 'Jonathan Andres',
        'apellido' => 'Rodriguez Perez',
        'email' => 'jonathanrodriguez@hotmail.com',
        'password' => bcrypt('jonathan901'),
        'tipo_id' => 2,
        'estado' => 1
        ]);
        User::create
        ([
        'nombre' => 'Javier Dario ',
        'apellido' => 'Mayorga Amorocho',
        'email' => 'javierMayorga@hotmail.com',
        'password' => bcrypt('javier123'),
        'tipo_id' => 1,
        'estado' => 1
        ]);
        User::create
        ([
        'nombre' => 'Diego Andres',
        'apellido' => 'Serna Lopez',
        'email' => 'diegoserna@hotmail.com',
        'password' => bcrypt('diego345'),
        'tipo_id' => 1,
        'estado' => 1
        ]);
        User::create
        ([
        'nombre' => 'Johan Camilo',
        'apellido' => 'Perez Rodriguez',
        'email' => 'johanperez@hotmail.com',
        'password' => bcrypt('johan567'),
        'tipo_id' => 1,
        'estado' => 1
        ]);
        User::create
        ([
        'nombre' => 'Gloria',
        'apellido' => 'Arcieniegas Ortiz',
        'email' => 'gloriaarciniegas@hotmail.com',
        'password' => bcrypt('gloria789'),
        'tipo_id' => 2,
        'estado' => 1
        ]);
        User::create
        ([
        'nombre' => 'Yuly Adriana',
        'apellido' => 'Gonzalez Castro',
        'email' => 'yulygonzalez00@hotmail.com',
        'password' => bcrypt('yuly901'),
        'tipo_id' => 1,
        'estado' => 1
        ]);
        User::create
        ([
        'nombre' => 'Yuly Carolina',
        'apellido' => 'Mantilla Celis',
        'email' => 'yulymantilla11@hotmail.com',
        'password' => bcrypt('yuly109'),
        'tipo_id' => 1,
        'estado' => 1
        ]);
        User::create
        ([
        'nombre' => 'Margy Yulieth',
        'apellido' => 'Rodriguez Pardo',
        'email' => 'margyrodriguez02@hotmail.com',
        'password' => bcrypt('margy765'),
        'tipo_id' => 1,
        'estado' => 1
        ]);
        User::create
        ([
        'nombre' => 'Karol Estefany',
        'apellido' => 'Meneces Chacon',
        'email' => 'karolmeneces01@hotmail.com',
        'password' => bcrypt('karol543'),
        'tipo_id' => 1,
        'estado' => 1
        ]);
        User::create
        ([
        'nombre' => 'Valentina',
        'apellido' => 'Abril Florez',
        'email' => 'valentinaflorez0@hotmail.com',
        'password' => bcrypt('valentina321'),
        'tipo_id' => 1,
        'estado' => 1
        ]);
        User::create
        ([
        'nombre' => 'Maria Camila ',
        'apellido' => 'Fajardo Gutierrez',
        'email' => 'mariafajardog@hotmail.cm',
        'password' => bcrypt('maria111'),
        'tipo_id' => 1,
        'estado' => 1
        ]);
        User::create
        ([
        'nombre' => 'Dana Valentina ',
        'apellido' => 'Rincon Rueda',
        'email' => 'Danarincon@hotmail.com',
        'password' => bcrypt('dana222'),
        'tipo_id' => 1,
        'estado' => 1
        ]);
        User::create
        ([
        'nombre' => 'Carlos Fernando ',
        'apellido' => 'Franco Avila',
        'email' => 'carlosfranco@hotmail.com',
        'password' => bcrypt('carlos333'),
        'tipo_id' => 1,
        'estado' => 1
        ]);
        User::create
        ([
        'nombre' => 'Maria Paula',
        'apellido' => 'Ortiz Cruz',
        'email' => 'mariaortiz123@hotmail.com',
        'password' => bcrypt('maria444'),
        'tipo_id' => 1,
        'estado' => 1
        ]);
        User::create
        ([
        'nombre' => 'Fredy Raul',
        'apellido' => 'Cala Ayala',
        'email' => 'fredycalaa@hotmail.com',
        'password' => bcrypt('fredy555'),
        'tipo_id' => 1,
        'estado' => 1
        ]);
        User::create
        ([
        'nombre' => 'Farid ',
        'apellido' => 'Andrade Araque',
        'email' => 'faridandrade@hotmail.com',
        'password' => bcrypt('farid777'),
        'tipo_id' => 1,
        'estado' => 1
        ]);
        User::create
        ([
        'nombre' => 'Jose Alexander',
        'apellido' => 'Muñoz Calderon',
        'email' => 'josemuñuzc@hotmail.com',
        'password' => bcrypt('jose888'),
        'tipo_id' => 1,
        'estado' => 1
        ]);
        User::create
        ([
        'nombre' => 'Esther ',
        'apellido' => 'Herrera Ortiz',
        'email' => 'estherherrera0@hotmail.com',
        'password' => bcrypt('esther999'),
        'tipo_id' => 1,
        'estado' => 1
        ]);
        User::create
        ([
        'nombre' => 'Luz Dary',
        'apellido' => 'Amorocho Silva',
        'email' => 'luzamorocho@hotmail.com',
        'password' => bcrypt('luz901'),
        'tipo_id' => 2,
        'estado' => 1
        ]);
        User::create
        ([
        'nombre' => 'Diego Fernando',
        'apellido' => 'Sanin Lopez',
        'email' => 'diegosanin@hotmail.com',
        'password' => bcrypt('diego902'),
        'tipo_id' => 1,
        'estado' => 1
        ]);
        User::create
        ([
        'nombre' => 'Tatiana Carolina',
        'apellido' => 'Paez Rincon',
        'email' => 'tatianapaez@hotmail.com',
        'password' => bcrypt('tatina903'),
        'tipo_id' => 1,
        'estado' => 1
        ]);
        User::create
        ([
        'nombre' => 'Monica Liseth',
        'apellido' => 'Diaz Suarez',
        'email' => 'monicadiazs@hotmail.com',
        'password' => bcrypt('monica904'),
        'tipo_id' => 1,
        'estado' => 1
        ]);
        User::create
        ([
        'nombre' => 'Jhonatan Javier',
        'apellido' => 'Ruiz Moreno',
        'email' => 'jhonatnaruizm@hotmail.com',
        'password' => bcrypt('jhonatan905'),
        'tipo_id' => 1,
        'estado' => 1
        ]);
        User::create
        ([
        'nombre' => 'Sergio Andres',
        'apellido' => 'Galviz Mendez',
        'email' => 'sergiogalvizm@hotmail.com',
        'password' => bcrypt('sergio906'),
        'tipo_id' => 1,
        'estado' => 1
        ]);
        User::create
        ([
        'nombre' => 'Giovanny Smith',
        'apellido' => 'Cataño Medina',
        'email' => 'giovannycataño@hotmail.com',
        'password' => bcrypt('giovanny907'),
        'tipo_id' => 1,
        'estado' => 1
        ]);
        User::create
        ([
        'nombre' => 'Jose Alejandro',
        'apellido' => 'Pinzon Ayala',
        'email' => 'josepinzona@hotmail.com',
        'password' => bcrypt('jose908'),
        'tipo_id' => 1,
        'estado' => 1
        ]);
        User::create
        ([
        'nombre' => 'Erika Johana ',
        'apellido' => 'Rosas Ortiz',
        'email' => 'erikarosas@hotmail.com',
        'password' => bcrypt('erika909'),
        'tipo_id' => 1,
        'estado' => 1
        ]);
        User::create
        ([
        'nombre' => 'Jenny Liseth ',
        'apellido' => 'Perez Bustos',
        'email' => 'jennyperez@hotmail.com',
        'password' => bcrypt('jenny101'),
        'tipo_id' => 1,
        'estado' => 1
        ]);
        User::create
        ([
        'nombre' => 'Mary Sofia',
        'apellido' => 'Camargo Cuadros',
        'email' => 'marycamargo@hotmail.com',
        'password' => bcrypt('mary102'),
        'tipo_id' => 1,
        'estado' => 1
        ]);
        User::create
        ([
        'nombre' => 'Sandy Johana ',
        'apellido' => 'Sanabria Cuadros',
        'email' => 'sandysanabria@hotmail.com',
        'password' => bcrypt('sandy103'),
        'tipo_id' => 1,
        'estado' => 1
        ]);
        User::create
        ([
        'nombre' => 'Olga Patricia',
        'apellido' => 'Neyra Suarez',
        'email' => 'olganeyra@hotmail.com',
        'password' => bcrypt('olga104'),
        'tipo_id' => 1,
        'estado' => 1
        ]);
        User::create
        ([
        'nombre' => 'Luz Eugenia',
        'apellido' => 'Agon Rueda',
        'email' => 'luzagon@hotmail.com',
        'password' => bcrypt('luz105'),
        'tipo_id' => 1,
        'estado' => 1
        ]);
        User::create
        ([
        'nombre' => 'Roger Fabian ',
        'apellido' => 'Arenas Merchan',
        'email' => 'rogerarenas@hotmail.com',
        'password' => bcrypt('roger106'),
        'tipo_id' => 1,
        'estado' => 1
        ]);
        User::create
        ([
        'nombre' => 'Margarita ',
        'apellido' => 'Perez Hernandez',
        'email' => 'maegaritaperez@hotmail.com',
        'password' => bcrypt('margarita107'),
        'tipo_id' => 1,
        'estado' => 1
        ]);
        User::create
        ([
        'nombre' => 'Liliana ',
        'apellido' => 'Carvajal Pinto',
        'email' => 'lilianacarvajal@hotmail.com',
        'password' => bcrypt('liliana108'),
        'tipo_id' => 1,
        'estado' => 1
        ]);
        User::create
        ([
        'nombre' => 'Wendy katerine',
        'apellido' => 'Urueta Atencio',
        'email' => 'wendyurueta@hotmail.com',
        'password' => bcrypt('wendy109'),
        'tipo_id' => 1,
        'estado' => 1
        ]);
        User::create
        ([
        'nombre' => 'Viviana ',
        'apellido' => 'Sisa Veira',
        'email' => 'vivianasisa@hotmail.com',
        'password' => bcrypt('viviana201'),
        'tipo_id' => 1,
        'estado' => 1
        ]);
        User::create
        ([
        'nombre' => 'Analy Siomara',
        'apellido' => 'Bueno Rios',
        'email' => 'analybueno@hotmail.com',
        'password' => bcrypt('analy201'),
        'tipo_id' => 1,
        'estado' => 1
        ]);
    }
}
