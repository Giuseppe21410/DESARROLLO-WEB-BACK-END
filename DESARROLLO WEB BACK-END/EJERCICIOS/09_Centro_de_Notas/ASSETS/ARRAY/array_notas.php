<?php
// Este script define un array multidimensional que contiene datos de estudiantes, sus notas y materias.
// El array está estructurado por centros, cursos y grupos, y cada estudiante tiene un nombre y un conjunto de notas por materia.
$datos = [
    "Centro Norte" => [
        "Primero" => [
            "A" => [
                [
                    "nombre" => "Diego",
                    "notas" => [
                        "Lengua" => 2,
                        "Historia" => 5,
                        "Educación Física" => 3,
                        "Inglés" => 5,
                        "Matemáticas" => 8,
                        "Música" => 1,
                        "Ciencias" => 8,
                        "Tecnología" => 3,
                    ]
                ],
                [
                    "nombre" => "Daniel",
                    "notas" => [
                        "Lengua" => 2,
                        "Historia" => 7,
                        "Educación Física" => 3,
                        "Inglés" => 9,
                        "Matemáticas" => 2,
                        "Música" => 8,
                        "Ciencias" => 7,
                        "Tecnología" => 6,
                    ]
                ],
                [
                    "nombre" => "Carla",
                    "notas" => [
                        "Lengua" => 8,
                        "Historia" => 8,
                        "Educación Física" => 1,
                        "Inglés" => 2,
                        "Matemáticas" => 10,
                        "Música" => 10,
                        "Ciencias" => 6,
                        "Tecnología" => 4,
                    ]
                ],
                [
                    "nombre" => "Irene",
                    "notas" => [
                        "Lengua" => 3,
                        "Historia" => 5,
                        "Educación Física" => 10,
                        "Inglés" => 10,
                        "Matemáticas" => 5,
                        "Música" => 5,
                        "Ciencias" => 8,
                        "Tecnología" => 10,
                    ]
                ],
                [
                    "nombre" => "Nora",
                    "notas" => [
                        "Lengua" => 9,
                        "Historia" => 5,
                        "Educación Física" => 8,
                        "Inglés" => 2,
                        "Matemáticas" => 3,
                        "Música" => 10,
                        "Ciencias" => 1,
                        "Tecnología" => 7,
                    ]
                ],
                [
                    "nombre" => "Diego",
                    "notas" => [
                        "Lengua" => 5,
                        "Historia" => 2,
                        "Educación Física" => 6,
                        "Inglés" => 6,
                        "Matemáticas" => 2,
                        "Música" => 5,
                        "Ciencias" => 1,
                        "Tecnología" => 10,
                    ]
                ],
                [
                    "nombre" => "Claudia",
                    "notas" => [
                        "Lengua" => 1,
                        "Historia" => 5,
                        "Educación Física" => 10,
                        "Inglés" => 2,
                        "Matemáticas" => 2,
                        "Música" => 2,
                        "Ciencias" => 7,
                        "Tecnología" => 3,
                    ]
                ],
                [
                    "nombre" => "Julia",
                    "notas" => [
                        "Lengua" => 7,
                        "Historia" => 7,
                        "Educación Física" => 3,
                        "Inglés" => 7,
                        "Matemáticas" => 6,
                        "Música" => 2,
                        "Ciencias" => 2,
                        "Tecnología" => 6,
                    ]
                ],
                [
                    "nombre" => "Emma",
                    "notas" => [
                        "Lengua" => 9,
                        "Historia" => 9,
                        "Educación Física" => 5,
                        "Inglés" => 1,
                        "Matemáticas" => 1,
                        "Música" => 1,
                        "Ciencias" => 10,
                        "Tecnología" => 1,
                    ]
                ],
                [
                    "nombre" => "Emma",
                    "notas" => [
                        "Lengua" => 5,
                        "Historia" => 6,
                        "Educación Física" => 3,
                        "Inglés" => 6,
                        "Matemáticas" => 5,
                        "Música" => 1,
                        "Ciencias" => 10,
                        "Tecnología" => 2,
                    ]
                ],
                [
                    "nombre" => "Antonio",
                    "notas" => [
                        "Lengua" => 1,
                        "Historia" => 1,
                        "Educación Física" => 9,
                        "Inglés" => 2,
                        "Matemáticas" => 10,
                        "Música" => 7,
                        "Ciencias" => 4,
                        "Tecnología" => 1,
                    ]
                ],
                [
                    "nombre" => "Isabel",
                    "notas" => [
                        "Lengua" => 3,
                        "Historia" => 10,
                        "Educación Física" => 1,
                        "Inglés" => 6,
                        "Matemáticas" => 5,
                        "Música" => 4,
                        "Ciencias" => 10,
                        "Tecnología" => 6,
                    ]
                ],
                [
                    "nombre" => "Antonio",
                    "notas" => [
                        "Lengua" => 10,
                        "Historia" => 3,
                        "Educación Física" => 2,
                        "Inglés" => 10,
                        "Matemáticas" => 10,
                        "Música" => 7,
                        "Ciencias" => 9,
                        "Tecnología" => 1,
                    ]
                ],
                [
                    "nombre" => "Álvaro",
                    "notas" => [
                        "Lengua" => 7,
                        "Historia" => 6,
                        "Educación Física" => 8,
                        "Inglés" => 7,
                        "Matemáticas" => 4,
                        "Música" => 5,
                        "Ciencias" => 9,
                        "Tecnología" => 3,
                    ]
                ],
                [
                    "nombre" => "Alba",
                    "notas" => [
                        "Lengua" => 7,
                        "Historia" => 8,
                        "Educación Física" => 4,
                        "Inglés" => 3,
                        "Matemáticas" => 9,
                        "Música" => 4,
                        "Ciencias" => 4,
                        "Tecnología" => 9,
                    ]
                ],
                [
                    "nombre" => "Leo",
                    "notas" => [
                        "Lengua" => 2,
                        "Historia" => 4,
                        "Educación Física" => 1,
                        "Inglés" => 1,
                        "Matemáticas" => 7,
                        "Música" => 5,
                        "Ciencias" => 4,
                        "Tecnología" => 6,
                    ]
                ],
                [
                    "nombre" => "Sofía",
                    "notas" => [
                        "Lengua" => 4,
                        "Historia" => 3,
                        "Educación Física" => 6,
                        "Inglés" => 10,
                        "Matemáticas" => 5,
                        "Música" => 5,
                        "Ciencias" => 8,
                        "Tecnología" => 1,
                    ]
                ],
                [
                    "nombre" => "Julia",
                    "notas" => [
                        "Lengua" => 9,
                        "Historia" => 9,
                        "Educación Física" => 4,
                        "Inglés" => 6,
                        "Matemáticas" => 9,
                        "Música" => 1,
                        "Ciencias" => 5,
                        "Tecnología" => 10,
                    ]
                ],
                [
                    "nombre" => "Olivia",
                    "notas" => [
                        "Lengua" => 4,
                        "Historia" => 4,
                        "Educación Física" => 6,
                        "Inglés" => 10,
                        "Matemáticas" => 10,
                        "Música" => 10,
                        "Ciencias" => 2,
                        "Tecnología" => 3,
                    ]
                ],
                [
                    "nombre" => "Leo",
                    "notas" => [
                        "Lengua" => 7,
                        "Historia" => 9,
                        "Educación Física" => 9,
                        "Inglés" => 7,
                        "Matemáticas" => 2,
                        "Música" => 2,
                        "Ciencias" => 6,
                        "Tecnología" => 9,
                    ]
                ],
            ],
            "B" => [
                [
                    "nombre" => "Gabriel",
                    "notas" => [
                        "Lengua" => 5,
                        "Historia" => 8,
                        "Educación Física" => 7,
                        "Inglés" => 2,
                        "Matemáticas" => 8,
                        "Música" => 7,
                        "Ciencias" => 6,
                        "Tecnología" => 2,
                    ]
                ],
                [
                    "nombre" => "Sofía",
                    "notas" => [
                        "Lengua" => 2,
                        "Historia" => 10,
                        "Educación Física" => 10,
                        "Inglés" => 1,
                        "Matemáticas" => 8,
                        "Música" => 8,
                        "Ciencias" => 5,
                        "Tecnología" => 7,
                    ]
                ],
                [
                    "nombre" => "Lucas",
                    "notas" => [
                        "Lengua" => 5,
                        "Historia" => 6,
                        "Educación Física" => 4,
                        "Inglés" => 3,
                        "Matemáticas" => 1,
                        "Música" => 9,
                        "Ciencias" => 7,
                        "Tecnología" => 7,
                    ]
                ],
                [
                    "nombre" => "David",
                    "notas" => [
                        "Lengua" => 9,
                        "Historia" => 5,
                        "Educación Física" => 3,
                        "Inglés" => 7,
                        "Matemáticas" => 6,
                        "Música" => 6,
                        "Ciencias" => 4,
                        "Tecnología" => 5,
                    ]
                ],
                [
                    "nombre" => "Isabel",
                    "notas" => [
                        "Lengua" => 1,
                        "Historia" => 3,
                        "Educación Física" => 2,
                        "Inglés" => 1,
                        "Matemáticas" => 10,
                        "Música" => 2,
                        "Ciencias" => 4,
                        "Tecnología" => 9,
                    ]
                ],
                [
                    "nombre" => "Mateo",
                    "notas" => [
                        "Lengua" => 6,
                        "Historia" => 2,
                        "Educación Física" => 9,
                        "Inglés" => 2,
                        "Matemáticas" => 9,
                        "Música" => 5,
                        "Ciencias" => 10,
                        "Tecnología" => 3,
                    ]
                ],
                [
                    "nombre" => "Mateo",
                    "notas" => [
                        "Lengua" => 8,
                        "Historia" => 4,
                        "Educación Física" => 9,
                        "Inglés" => 4,
                        "Matemáticas" => 9,
                        "Música" => 8,
                        "Ciencias" => 1,
                        "Tecnología" => 10,
                    ]
                ],
                [
                    "nombre" => "Gabriel",
                    "notas" => [
                        "Lengua" => 8,
                        "Historia" => 1,
                        "Educación Física" => 6,
                        "Inglés" => 9,
                        "Matemáticas" => 3,
                        "Música" => 9,
                        "Ciencias" => 5,
                        "Tecnología" => 5,
                    ]
                ],
                [
                    "nombre" => "Pablo",
                    "notas" => [
                        "Lengua" => 8,
                        "Historia" => 6,
                        "Educación Física" => 1,
                        "Inglés" => 8,
                        "Matemáticas" => 1,
                        "Música" => 3,
                        "Ciencias" => 3,
                        "Tecnología" => 6,
                    ]
                ],
                [
                    "nombre" => "Enzo",
                    "notas" => [
                        "Lengua" => 7,
                        "Historia" => 8,
                        "Educación Física" => 1,
                        "Inglés" => 2,
                        "Matemáticas" => 1,
                        "Música" => 10,
                        "Ciencias" => 10,
                        "Tecnología" => 7,
                    ]
                ],
                [
                    "nombre" => "Vega",
                    "notas" => [
                        "Lengua" => 4,
                        "Historia" => 1,
                        "Educación Física" => 8,
                        "Inglés" => 5,
                        "Matemáticas" => 3,
                        "Música" => 4,
                        "Ciencias" => 6,
                        "Tecnología" => 6,
                    ]
                ],
                [
                    "nombre" => "Martina",
                    "notas" => [
                        "Lengua" => 2,
                        "Historia" => 8,
                        "Educación Física" => 4,
                        "Inglés" => 8,
                        "Matemáticas" => 7,
                        "Música" => 5,
                        "Ciencias" => 10,
                        "Tecnología" => 4,
                    ]
                ],
                [
                    "nombre" => "Gabriel",
                    "notas" => [
                        "Lengua" => 4,
                        "Historia" => 5,
                        "Educación Física" => 4,
                        "Inglés" => 3,
                        "Matemáticas" => 4,
                        "Música" => 4,
                        "Ciencias" => 10,
                        "Tecnología" => 9,
                    ]
                ],
                [
                    "nombre" => "Alba",
                    "notas" => [
                        "Lengua" => 4,
                        "Historia" => 1,
                        "Educación Física" => 3,
                        "Inglés" => 4,
                        "Matemáticas" => 5,
                        "Música" => 5,
                        "Ciencias" => 3,
                        "Tecnología" => 6,
                    ]
                ],
                [
                    "nombre" => "Andrés",
                    "notas" => [
                        "Lengua" => 7,
                        "Historia" => 7,
                        "Educación Física" => 7,
                        "Inglés" => 1,
                        "Matemáticas" => 8,
                        "Música" => 7,
                        "Ciencias" => 5,
                        "Tecnología" => 5,
                    ]
                ],
                [
                    "nombre" => "Mario",
                    "notas" => [
                        "Lengua" => 2,
                        "Historia" => 3,
                        "Educación Física" => 4,
                        "Inglés" => 6,
                        "Matemáticas" => 8,
                        "Música" => 1,
                        "Ciencias" => 3,
                        "Tecnología" => 1,
                    ]
                ],
                [
                    "nombre" => "Noa",
                    "notas" => [
                        "Lengua" => 5,
                        "Historia" => 7,
                        "Educación Física" => 10,
                        "Inglés" => 2,
                        "Matemáticas" => 7,
                        "Música" => 6,
                        "Ciencias" => 10,
                        "Tecnología" => 3,
                    ]
                ],
                [
                    "nombre" => "Pedro",
                    "notas" => [
                        "Lengua" => 4,
                        "Historia" => 6,
                        "Educación Física" => 1,
                        "Inglés" => 6,
                        "Matemáticas" => 10,
                        "Música" => 1,
                        "Ciencias" => 5,
                        "Tecnología" => 2,
                    ]
                ],
                [
                    "nombre" => "Martina",
                    "notas" => [
                        "Lengua" => 6,
                        "Historia" => 1,
                        "Educación Física" => 6,
                        "Inglés" => 3,
                        "Matemáticas" => 9,
                        "Música" => 1,
                        "Ciencias" => 3,
                        "Tecnología" => 10,
                    ]
                ],
                [
                    "nombre" => "Mía",
                    "notas" => [
                        "Lengua" => 6,
                        "Historia" => 2,
                        "Educación Física" => 4,
                        "Inglés" => 5,
                        "Matemáticas" => 6,
                        "Música" => 4,
                        "Ciencias" => 1,
                        "Tecnología" => 5,
                    ]
                ],
            ],
            "C" => [
                [
                    "nombre" => "Sara",
                    "notas" => [
                        "Lengua" => 5,
                        "Historia" => 8,
                        "Educación Física" => 9,
                        "Inglés" => 5,
                        "Matemáticas" => 8,
                        "Música" => 2,
                        "Ciencias" => 2,
                        "Tecnología" => 1,
                    ]
                ],
                [
                    "nombre" => "Daniel",
                    "notas" => [
                        "Lengua" => 2,
                        "Historia" => 2,
                        "Educación Física" => 8,
                        "Inglés" => 1,
                        "Matemáticas" => 3,
                        "Música" => 6,
                        "Ciencias" => 10,
                        "Tecnología" => 4,
                    ]
                ],
                [
                    "nombre" => "Pablo",
                    "notas" => [
                        "Lengua" => 9,
                        "Historia" => 3,
                        "Educación Física" => 2,
                        "Inglés" => 1,
                        "Matemáticas" => 9,
                        "Música" => 5,
                        "Ciencias" => 5,
                        "Tecnología" => 1,
                    ]
                ],
                [
                    "nombre" => "Adrián",
                    "notas" => [
                        "Lengua" => 6,
                        "Historia" => 9,
                        "Educación Física" => 3,
                        "Inglés" => 6,
                        "Matemáticas" => 2,
                        "Música" => 7,
                        "Ciencias" => 3,
                        "Tecnología" => 2,
                    ]
                ],
                [
                    "nombre" => "Martina",
                    "notas" => [
                        "Lengua" => 10,
                        "Historia" => 7,
                        "Educación Física" => 4,
                        "Inglés" => 6,
                        "Matemáticas" => 7,
                        "Música" => 10,
                        "Ciencias" => 10,
                        "Tecnología" => 6,
                    ]
                ],
                [
                    "nombre" => "Enzo",
                    "notas" => [
                        "Lengua" => 7,
                        "Historia" => 2,
                        "Educación Física" => 6,
                        "Inglés" => 3,
                        "Matemáticas" => 6,
                        "Música" => 4,
                        "Ciencias" => 10,
                        "Tecnología" => 2,
                    ]
                ],
                [
                    "nombre" => "Juan",
                    "notas" => [
                        "Lengua" => 8,
                        "Historia" => 9,
                        "Educación Física" => 2,
                        "Inglés" => 4,
                        "Matemáticas" => 1,
                        "Música" => 3,
                        "Ciencias" => 7,
                        "Tecnología" => 8,
                    ]
                ],
                [
                    "nombre" => "Mario",
                    "notas" => [
                        "Lengua" => 1,
                        "Historia" => 1,
                        "Educación Física" => 6,
                        "Inglés" => 7,
                        "Matemáticas" => 8,
                        "Música" => 7,
                        "Ciencias" => 5,
                        "Tecnología" => 7,
                    ]
                ],
                [
                    "nombre" => "Isabel",
                    "notas" => [
                        "Lengua" => 5,
                        "Historia" => 9,
                        "Educación Física" => 7,
                        "Inglés" => 2,
                        "Matemáticas" => 6,
                        "Música" => 1,
                        "Ciencias" => 1,
                        "Tecnología" => 9,
                    ]
                ],
                [
                    "nombre" => "Lucas",
                    "notas" => [
                        "Lengua" => 9,
                        "Historia" => 9,
                        "Educación Física" => 2,
                        "Inglés" => 2,
                        "Matemáticas" => 7,
                        "Música" => 5,
                        "Ciencias" => 8,
                        "Tecnología" => 8,
                    ]
                ],
                [
                    "nombre" => "Hugo",
                    "notas" => [
                        "Lengua" => 2,
                        "Historia" => 3,
                        "Educación Física" => 4,
                        "Inglés" => 5,
                        "Matemáticas" => 10,
                        "Música" => 9,
                        "Ciencias" => 6,
                        "Tecnología" => 7,
                    ]
                ],
                [
                    "nombre" => "Chloe",
                    "notas" => [
                        "Lengua" => 3,
                        "Historia" => 7,
                        "Educación Física" => 2,
                        "Inglés" => 3,
                        "Matemáticas" => 7,
                        "Música" => 9,
                        "Ciencias" => 4,
                        "Tecnología" => 5,
                    ]
                ],
                [
                    "nombre" => "Pablo",
                    "notas" => [
                        "Lengua" => 1,
                        "Historia" => 3,
                        "Educación Física" => 2,
                        "Inglés" => 8,
                        "Matemáticas" => 6,
                        "Música" => 9,
                        "Ciencias" => 6,
                        "Tecnología" => 2,
                    ]
                ],
                [
                    "nombre" => "Leo",
                    "notas" => [
                        "Lengua" => 3,
                        "Historia" => 5,
                        "Educación Física" => 3,
                        "Inglés" => 6,
                        "Matemáticas" => 9,
                        "Música" => 2,
                        "Ciencias" => 9,
                        "Tecnología" => 6,
                    ]
                ],
                [
                    "nombre" => "Andrés",
                    "notas" => [
                        "Lengua" => 9,
                        "Historia" => 9,
                        "Educación Física" => 5,
                        "Inglés" => 8,
                        "Matemáticas" => 2,
                        "Música" => 3,
                        "Ciencias" => 6,
                        "Tecnología" => 4,
                    ]
                ],
                [
                    "nombre" => "David",
                    "notas" => [
                        "Lengua" => 6,
                        "Historia" => 3,
                        "Educación Física" => 9,
                        "Inglés" => 5,
                        "Matemáticas" => 6,
                        "Música" => 10,
                        "Ciencias" => 5,
                        "Tecnología" => 8,
                    ]
                ],
                [
                    "nombre" => "Isabel",
                    "notas" => [
                        "Lengua" => 8,
                        "Historia" => 4,
                        "Educación Física" => 9,
                        "Inglés" => 1,
                        "Matemáticas" => 10,
                        "Música" => 9,
                        "Ciencias" => 5,
                        "Tecnología" => 6,
                    ]
                ],
                [
                    "nombre" => "Adrián",
                    "notas" => [
                        "Lengua" => 1,
                        "Historia" => 8,
                        "Educación Física" => 10,
                        "Inglés" => 7,
                        "Matemáticas" => 3,
                        "Música" => 5,
                        "Ciencias" => 4,
                        "Tecnología" => 1,
                    ]
                ],
                [
                    "nombre" => "Sofía",
                    "notas" => [
                        "Lengua" => 8,
                        "Historia" => 7,
                        "Educación Física" => 9,
                        "Inglés" => 2,
                        "Matemáticas" => 4,
                        "Música" => 1,
                        "Ciencias" => 2,
                        "Tecnología" => 10,
                    ]
                ],
                [
                    "nombre" => "Luna",
                    "notas" => [
                        "Lengua" => 5,
                        "Historia" => 8,
                        "Educación Física" => 4,
                        "Inglés" => 1,
                        "Matemáticas" => 2,
                        "Música" => 2,
                        "Ciencias" => 7,
                        "Tecnología" => 3,
                    ]
                ],
            ],
        ],
        "Segundo" => [
            "A" => [
                [
                    "nombre" => "Olivia",
                    "notas" => [
                        "Lengua" => 5,
                        "Historia" => 10,
                        "Educación Física" => 9,
                        "Inglés" => 4,
                        "Matemáticas" => 3,
                        "Música" => 9,
                        "Ciencias" => 7,
                        "Tecnología" => 5,
                    ]
                ],
                [
                    "nombre" => "Adrián",
                    "notas" => [
                        "Lengua" => 10,
                        "Historia" => 5,
                        "Educación Física" => 9,
                        "Inglés" => 7,
                        "Matemáticas" => 10,
                        "Música" => 1,
                        "Ciencias" => 1,
                        "Tecnología" => 2,
                    ]
                ],
                [
                    "nombre" => "Daniel",
                    "notas" => [
                        "Lengua" => 9,
                        "Historia" => 8,
                        "Educación Física" => 6,
                        "Inglés" => 3,
                        "Matemáticas" => 5,
                        "Música" => 7,
                        "Ciencias" => 2,
                        "Tecnología" => 5,
                    ]
                ],
                [
                    "nombre" => "Manuel",
                    "notas" => [
                        "Lengua" => 6,
                        "Historia" => 3,
                        "Educación Física" => 4,
                        "Inglés" => 4,
                        "Matemáticas" => 6,
                        "Música" => 10,
                        "Ciencias" => 5,
                        "Tecnología" => 6,
                    ]
                ],
                [
                    "nombre" => "Adrián",
                    "notas" => [
                        "Lengua" => 4,
                        "Historia" => 10,
                        "Educación Física" => 7,
                        "Inglés" => 8,
                        "Matemáticas" => 1,
                        "Música" => 4,
                        "Ciencias" => 5,
                        "Tecnología" => 2,
                    ]
                ],
                [
                    "nombre" => "Carmen",
                    "notas" => [
                        "Lengua" => 9,
                        "Historia" => 4,
                        "Educación Física" => 2,
                        "Inglés" => 5,
                        "Matemáticas" => 8,
                        "Música" => 6,
                        "Ciencias" => 2,
                        "Tecnología" => 10,
                    ]
                ],
                [
                    "nombre" => "Carmen",
                    "notas" => [
                        "Lengua" => 1,
                        "Historia" => 3,
                        "Educación Física" => 10,
                        "Inglés" => 2,
                        "Matemáticas" => 4,
                        "Música" => 3,
                        "Ciencias" => 5,
                        "Tecnología" => 3,
                    ]
                ],
                [
                    "nombre" => "Paula",
                    "notas" => [
                        "Lengua" => 7,
                        "Historia" => 3,
                        "Educación Física" => 5,
                        "Inglés" => 6,
                        "Matemáticas" => 9,
                        "Música" => 5,
                        "Ciencias" => 5,
                        "Tecnología" => 10,
                    ]
                ],
                [
                    "nombre" => "Julia",
                    "notas" => [
                        "Lengua" => 6,
                        "Historia" => 2,
                        "Educación Física" => 8,
                        "Inglés" => 5,
                        "Matemáticas" => 8,
                        "Música" => 2,
                        "Ciencias" => 8,
                        "Tecnología" => 1,
                    ]
                ],
                [
                    "nombre" => "Mía",
                    "notas" => [
                        "Lengua" => 6,
                        "Historia" => 10,
                        "Educación Física" => 3,
                        "Inglés" => 5,
                        "Matemáticas" => 7,
                        "Música" => 10,
                        "Ciencias" => 8,
                        "Tecnología" => 4,
                    ]
                ],
                [
                    "nombre" => "Olivia",
                    "notas" => [
                        "Lengua" => 2,
                        "Historia" => 5,
                        "Educación Física" => 6,
                        "Inglés" => 6,
                        "Matemáticas" => 3,
                        "Música" => 3,
                        "Ciencias" => 8,
                        "Tecnología" => 8,
                    ]
                ],
                [
                    "nombre" => "Daniel",
                    "notas" => [
                        "Lengua" => 7,
                        "Historia" => 1,
                        "Educación Física" => 2,
                        "Inglés" => 7,
                        "Matemáticas" => 5,
                        "Música" => 9,
                        "Ciencias" => 5,
                        "Tecnología" => 1,
                    ]
                ],
                [
                    "nombre" => "Valeria",
                    "notas" => [
                        "Lengua" => 7,
                        "Historia" => 8,
                        "Educación Física" => 3,
                        "Inglés" => 8,
                        "Matemáticas" => 4,
                        "Música" => 6,
                        "Ciencias" => 8,
                        "Tecnología" => 10,
                    ]
                ],
                [
                    "nombre" => "Vega",
                    "notas" => [
                        "Lengua" => 4,
                        "Historia" => 1,
                        "Educación Física" => 1,
                        "Inglés" => 5,
                        "Matemáticas" => 1,
                        "Música" => 8,
                        "Ciencias" => 5,
                        "Tecnología" => 2,
                    ]
                ],
                [
                    "nombre" => "Sofía",
                    "notas" => [
                        "Lengua" => 8,
                        "Historia" => 3,
                        "Educación Física" => 9,
                        "Inglés" => 2,
                        "Matemáticas" => 1,
                        "Música" => 6,
                        "Ciencias" => 5,
                        "Tecnología" => 6,
                    ]
                ],
                [
                    "nombre" => "Gabriel",
                    "notas" => [
                        "Lengua" => 1,
                        "Historia" => 2,
                        "Educación Física" => 1,
                        "Inglés" => 2,
                        "Matemáticas" => 3,
                        "Música" => 2,
                        "Ciencias" => 2,
                        "Tecnología" => 2,
                    ]
                ],
                [
                    "nombre" => "Juan",
                    "notas" => [
                        "Lengua" => 2,
                        "Historia" => 10,
                        "Educación Física" => 6,
                        "Inglés" => 4,
                        "Matemáticas" => 3,
                        "Música" => 3,
                        "Ciencias" => 7,
                        "Tecnología" => 10,
                    ]
                ],
                [
                    "nombre" => "Alba",
                    "notas" => [
                        "Lengua" => 2,
                        "Historia" => 6,
                        "Educación Física" => 10,
                        "Inglés" => 5,
                        "Matemáticas" => 7,
                        "Música" => 3,
                        "Ciencias" => 1,
                        "Tecnología" => 10,
                    ]
                ],
                [
                    "nombre" => "Gabriel",
                    "notas" => [
                        "Lengua" => 3,
                        "Historia" => 7,
                        "Educación Física" => 1,
                        "Inglés" => 2,
                        "Matemáticas" => 10,
                        "Música" => 2,
                        "Ciencias" => 8,
                        "Tecnología" => 9,
                    ]
                ],
                [
                    "nombre" => "Olivia",
                    "notas" => [
                        "Lengua" => 7,
                        "Historia" => 1,
                        "Educación Física" => 9,
                        "Inglés" => 10,
                        "Matemáticas" => 1,
                        "Música" => 6,
                        "Ciencias" => 10,
                        "Tecnología" => 3,
                    ]
                ],
            ],
            "B" => [
                [
                    "nombre" => "Nora",
                    "notas" => [
                        "Lengua" => 2,
                        "Historia" => 8,
                        "Educación Física" => 9,
                        "Inglés" => 7,
                        "Matemáticas" => 6,
                        "Música" => 6,
                        "Ciencias" => 2,
                        "Tecnología" => 4,
                    ]
                ],
                [
                    "nombre" => "Mario",
                    "notas" => [
                        "Lengua" => 3,
                        "Historia" => 8,
                        "Educación Física" => 4,
                        "Inglés" => 9,
                        "Matemáticas" => 6,
                        "Música" => 2,
                        "Ciencias" => 10,
                        "Tecnología" => 8,
                    ]
                ],
                [
                    "nombre" => "Antonio",
                    "notas" => [
                        "Lengua" => 7,
                        "Historia" => 1,
                        "Educación Física" => 2,
                        "Inglés" => 7,
                        "Matemáticas" => 1,
                        "Música" => 5,
                        "Ciencias" => 1,
                        "Tecnología" => 6,
                    ]
                ],
                [
                    "nombre" => "Vega",
                    "notas" => [
                        "Lengua" => 4,
                        "Historia" => 1,
                        "Educación Física" => 1,
                        "Inglés" => 1,
                        "Matemáticas" => 7,
                        "Música" => 6,
                        "Ciencias" => 4,
                        "Tecnología" => 6,
                    ]
                ],
                [
                    "nombre" => "Noa",
                    "notas" => [
                        "Lengua" => 8,
                        "Historia" => 1,
                        "Educación Física" => 9,
                        "Inglés" => 10,
                        "Matemáticas" => 6,
                        "Música" => 10,
                        "Ciencias" => 3,
                        "Tecnología" => 2,
                    ]
                ],
                [
                    "nombre" => "Isabel",
                    "notas" => [
                        "Lengua" => 5,
                        "Historia" => 3,
                        "Educación Física" => 6,
                        "Inglés" => 5,
                        "Matemáticas" => 2,
                        "Música" => 4,
                        "Ciencias" => 1,
                        "Tecnología" => 1,
                    ]
                ],
                [
                    "nombre" => "Valeria",
                    "notas" => [
                        "Lengua" => 2,
                        "Historia" => 7,
                        "Educación Física" => 4,
                        "Inglés" => 10,
                        "Matemáticas" => 10,
                        "Música" => 6,
                        "Ciencias" => 9,
                        "Tecnología" => 6,
                    ]
                ],
                [
                    "nombre" => "Carmen",
                    "notas" => [
                        "Lengua" => 5,
                        "Historia" => 5,
                        "Educación Física" => 5,
                        "Inglés" => 6,
                        "Matemáticas" => 2,
                        "Música" => 8,
                        "Ciencias" => 2,
                        "Tecnología" => 4,
                    ]
                ],
                [
                    "nombre" => "Emma",
                    "notas" => [
                        "Lengua" => 1,
                        "Historia" => 8,
                        "Educación Física" => 6,
                        "Inglés" => 1,
                        "Matemáticas" => 6,
                        "Música" => 10,
                        "Ciencias" => 9,
                        "Tecnología" => 2,
                    ]
                ],
                [
                    "nombre" => "Alba",
                    "notas" => [
                        "Lengua" => 8,
                        "Historia" => 6,
                        "Educación Física" => 2,
                        "Inglés" => 9,
                        "Matemáticas" => 5,
                        "Música" => 10,
                        "Ciencias" => 9,
                        "Tecnología" => 1,
                    ]
                ],
                [
                    "nombre" => "Chloe",
                    "notas" => [
                        "Lengua" => 1,
                        "Historia" => 9,
                        "Educación Física" => 1,
                        "Inglés" => 9,
                        "Matemáticas" => 2,
                        "Música" => 3,
                        "Ciencias" => 4,
                        "Tecnología" => 3,
                    ]
                ],
                [
                    "nombre" => "Alejandro",
                    "notas" => [
                        "Lengua" => 6,
                        "Historia" => 4,
                        "Educación Física" => 5,
                        "Inglés" => 2,
                        "Matemáticas" => 2,
                        "Música" => 8,
                        "Ciencias" => 6,
                        "Tecnología" => 6,
                    ]
                ],
                [
                    "nombre" => "Daniel",
                    "notas" => [
                        "Lengua" => 4,
                        "Historia" => 5,
                        "Educación Física" => 2,
                        "Inglés" => 9,
                        "Matemáticas" => 7,
                        "Música" => 9,
                        "Ciencias" => 1,
                        "Tecnología" => 6,
                    ]
                ],
                [
                    "nombre" => "Emma",
                    "notas" => [
                        "Lengua" => 4,
                        "Historia" => 9,
                        "Educación Física" => 5,
                        "Inglés" => 5,
                        "Matemáticas" => 9,
                        "Música" => 3,
                        "Ciencias" => 2,
                        "Tecnología" => 8,
                    ]
                ],
                [
                    "nombre" => "Álvaro",
                    "notas" => [
                        "Lengua" => 3,
                        "Historia" => 7,
                        "Educación Física" => 3,
                        "Inglés" => 6,
                        "Matemáticas" => 6,
                        "Música" => 4,
                        "Ciencias" => 5,
                        "Tecnología" => 2,
                    ]
                ],
                [
                    "nombre" => "Sara",
                    "notas" => [
                        "Lengua" => 5,
                        "Historia" => 5,
                        "Educación Física" => 8,
                        "Inglés" => 8,
                        "Matemáticas" => 9,
                        "Música" => 3,
                        "Ciencias" => 8,
                        "Tecnología" => 2,
                    ]
                ],
                [
                    "nombre" => "Mario",
                    "notas" => [
                        "Lengua" => 9,
                        "Historia" => 1,
                        "Educación Física" => 8,
                        "Inglés" => 2,
                        "Matemáticas" => 10,
                        "Música" => 10,
                        "Ciencias" => 1,
                        "Tecnología" => 6,
                    ]
                ],
                [
                    "nombre" => "Emma",
                    "notas" => [
                        "Lengua" => 3,
                        "Historia" => 5,
                        "Educación Física" => 6,
                        "Inglés" => 9,
                        "Matemáticas" => 5,
                        "Música" => 6,
                        "Ciencias" => 3,
                        "Tecnología" => 4,
                    ]
                ],
                [
                    "nombre" => "Daniel",
                    "notas" => [
                        "Lengua" => 3,
                        "Historia" => 4,
                        "Educación Física" => 2,
                        "Inglés" => 2,
                        "Matemáticas" => 5,
                        "Música" => 6,
                        "Ciencias" => 8,
                        "Tecnología" => 3,
                    ]
                ],
                [
                    "nombre" => "Mario",
                    "notas" => [
                        "Lengua" => 4,
                        "Historia" => 1,
                        "Educación Física" => 8,
                        "Inglés" => 1,
                        "Matemáticas" => 1,
                        "Música" => 2,
                        "Ciencias" => 5,
                        "Tecnología" => 3,
                    ]
                ],
            ],
            "C" => [
                [
                    "nombre" => "Olivia",
                    "notas" => [
                        "Lengua" => 10,
                        "Historia" => 5,
                        "Educación Física" => 9,
                        "Inglés" => 4,
                        "Matemáticas" => 9,
                        "Música" => 8,
                        "Ciencias" => 8,
                        "Tecnología" => 2,
                    ]
                ],
                [
                    "nombre" => "Luna",
                    "notas" => [
                        "Lengua" => 1,
                        "Historia" => 8,
                        "Educación Física" => 10,
                        "Inglés" => 5,
                        "Matemáticas" => 8,
                        "Música" => 3,
                        "Ciencias" => 4,
                        "Tecnología" => 8,
                    ]
                ],
                [
                    "nombre" => "Álvaro",
                    "notas" => [
                        "Lengua" => 7,
                        "Historia" => 6,
                        "Educación Física" => 3,
                        "Inglés" => 2,
                        "Matemáticas" => 5,
                        "Música" => 9,
                        "Ciencias" => 6,
                        "Tecnología" => 3,
                    ]
                ],
                [
                    "nombre" => "Manuel",
                    "notas" => [
                        "Lengua" => 6,
                        "Historia" => 2,
                        "Educación Física" => 9,
                        "Inglés" => 4,
                        "Matemáticas" => 10,
                        "Música" => 5,
                        "Ciencias" => 5,
                        "Tecnología" => 5,
                    ]
                ],
                [
                    "nombre" => "Enzo",
                    "notas" => [
                        "Lengua" => 5,
                        "Historia" => 8,
                        "Educación Física" => 5,
                        "Inglés" => 5,
                        "Matemáticas" => 6,
                        "Música" => 5,
                        "Ciencias" => 8,
                        "Tecnología" => 7,
                    ]
                ],
                [
                    "nombre" => "Leo",
                    "notas" => [
                        "Lengua" => 8,
                        "Historia" => 4,
                        "Educación Física" => 1,
                        "Inglés" => 7,
                        "Matemáticas" => 5,
                        "Música" => 4,
                        "Ciencias" => 6,
                        "Tecnología" => 9,
                    ]
                ],
                [
                    "nombre" => "Chloe",
                    "notas" => [
                        "Lengua" => 9,
                        "Historia" => 7,
                        "Educación Física" => 2,
                        "Inglés" => 5,
                        "Matemáticas" => 4,
                        "Música" => 1,
                        "Ciencias" => 2,
                        "Tecnología" => 2,
                    ]
                ],
                [
                    "nombre" => "Juan",
                    "notas" => [
                        "Lengua" => 5,
                        "Historia" => 1,
                        "Educación Física" => 10,
                        "Inglés" => 2,
                        "Matemáticas" => 5,
                        "Música" => 3,
                        "Ciencias" => 5,
                        "Tecnología" => 8,
                    ]
                ],
                [
                    "nombre" => "Antonio",
                    "notas" => [
                        "Lengua" => 8,
                        "Historia" => 6,
                        "Educación Física" => 8,
                        "Inglés" => 3,
                        "Matemáticas" => 5,
                        "Música" => 10,
                        "Ciencias" => 4,
                        "Tecnología" => 4,
                    ]
                ],
                [
                    "nombre" => "Luna",
                    "notas" => [
                        "Lengua" => 6,
                        "Historia" => 4,
                        "Educación Física" => 9,
                        "Inglés" => 1,
                        "Matemáticas" => 7,
                        "Música" => 3,
                        "Ciencias" => 1,
                        "Tecnología" => 1,
                    ]
                ],
                [
                    "nombre" => "Juan",
                    "notas" => [
                        "Lengua" => 1,
                        "Historia" => 7,
                        "Educación Física" => 4,
                        "Inglés" => 10,
                        "Matemáticas" => 1,
                        "Música" => 10,
                        "Ciencias" => 6,
                        "Tecnología" => 7,
                    ]
                ],
                [
                    "nombre" => "Mía",
                    "notas" => [
                        "Lengua" => 7,
                        "Historia" => 10,
                        "Educación Física" => 9,
                        "Inglés" => 1,
                        "Matemáticas" => 4,
                        "Música" => 10,
                        "Ciencias" => 2,
                        "Tecnología" => 4,
                    ]
                ],
                [
                    "nombre" => "Carla",
                    "notas" => [
                        "Lengua" => 3,
                        "Historia" => 5,
                        "Educación Física" => 9,
                        "Inglés" => 3,
                        "Matemáticas" => 6,
                        "Música" => 9,
                        "Ciencias" => 2,
                        "Tecnología" => 10,
                    ]
                ],
                [
                    "nombre" => "Adrián",
                    "notas" => [
                        "Lengua" => 2,
                        "Historia" => 6,
                        "Educación Física" => 7,
                        "Inglés" => 4,
                        "Matemáticas" => 5,
                        "Música" => 5,
                        "Ciencias" => 10,
                        "Tecnología" => 9,
                    ]
                ],
                [
                    "nombre" => "Valeria",
                    "notas" => [
                        "Lengua" => 4,
                        "Historia" => 2,
                        "Educación Física" => 9,
                        "Inglés" => 7,
                        "Matemáticas" => 8,
                        "Música" => 4,
                        "Ciencias" => 6,
                        "Tecnología" => 6,
                    ]
                ],
                [
                    "nombre" => "Mía",
                    "notas" => [
                        "Lengua" => 6,
                        "Historia" => 2,
                        "Educación Física" => 2,
                        "Inglés" => 6,
                        "Matemáticas" => 5,
                        "Música" => 9,
                        "Ciencias" => 1,
                        "Tecnología" => 3,
                    ]
                ],
                [
                    "nombre" => "Vega",
                    "notas" => [
                        "Lengua" => 2,
                        "Historia" => 3,
                        "Educación Física" => 9,
                        "Inglés" => 10,
                        "Matemáticas" => 7,
                        "Música" => 2,
                        "Ciencias" => 7,
                        "Tecnología" => 10,
                    ]
                ],
                [
                    "nombre" => "Martina",
                    "notas" => [
                        "Lengua" => 8,
                        "Historia" => 9,
                        "Educación Física" => 8,
                        "Inglés" => 4,
                        "Matemáticas" => 10,
                        "Música" => 4,
                        "Ciencias" => 4,
                        "Tecnología" => 3,
                    ]
                ],
                [
                    "nombre" => "Paula",
                    "notas" => [
                        "Lengua" => 3,
                        "Historia" => 5,
                        "Educación Física" => 8,
                        "Inglés" => 9,
                        "Matemáticas" => 1,
                        "Música" => 3,
                        "Ciencias" => 1,
                        "Tecnología" => 8,
                    ]
                ],
                [
                    "nombre" => "Mía",
                    "notas" => [
                        "Lengua" => 4,
                        "Historia" => 6,
                        "Educación Física" => 5,
                        "Inglés" => 9,
                        "Matemáticas" => 8,
                        "Música" => 4,
                        "Ciencias" => 9,
                        "Tecnología" => 6,
                    ]
                ],
            ],
        ],
        "Tercero" => [
            "A" => [
                [
                    "nombre" => "Andrés",
                    "notas" => [
                        "Lengua" => 7,
                        "Historia" => 1,
                        "Educación Física" => 1,
                        "Inglés" => 6,
                        "Matemáticas" => 9,
                        "Música" => 8,
                        "Ciencias" => 1,
                        "Tecnología" => 5,
                    ]
                ],
                [
                    "nombre" => "David",
                    "notas" => [
                        "Lengua" => 2,
                        "Historia" => 10,
                        "Educación Física" => 2,
                        "Inglés" => 10,
                        "Matemáticas" => 2,
                        "Música" => 6,
                        "Ciencias" => 2,
                        "Tecnología" => 1,
                    ]
                ],
                [
                    "nombre" => "Claudia",
                    "notas" => [
                        "Lengua" => 4,
                        "Historia" => 3,
                        "Educación Física" => 3,
                        "Inglés" => 8,
                        "Matemáticas" => 9,
                        "Música" => 9,
                        "Ciencias" => 4,
                        "Tecnología" => 2,
                    ]
                ],
                [
                    "nombre" => "Álvaro",
                    "notas" => [
                        "Lengua" => 3,
                        "Historia" => 2,
                        "Educación Física" => 10,
                        "Inglés" => 7,
                        "Matemáticas" => 2,
                        "Música" => 6,
                        "Ciencias" => 8,
                        "Tecnología" => 3,
                    ]
                ],
                [
                    "nombre" => "Alejandro",
                    "notas" => [
                        "Lengua" => 10,
                        "Historia" => 4,
                        "Educación Física" => 2,
                        "Inglés" => 1,
                        "Matemáticas" => 4,
                        "Música" => 10,
                        "Ciencias" => 5,
                        "Tecnología" => 5,
                    ]
                ],
                [
                    "nombre" => "Mateo",
                    "notas" => [
                        "Lengua" => 8,
                        "Historia" => 9,
                        "Educación Física" => 6,
                        "Inglés" => 4,
                        "Matemáticas" => 6,
                        "Música" => 7,
                        "Ciencias" => 1,
                        "Tecnología" => 9,
                    ]
                ],
                [
                    "nombre" => "Julia",
                    "notas" => [
                        "Lengua" => 2,
                        "Historia" => 9,
                        "Educación Física" => 5,
                        "Inglés" => 7,
                        "Matemáticas" => 8,
                        "Música" => 7,
                        "Ciencias" => 5,
                        "Tecnología" => 1,
                    ]
                ],
                [
                    "nombre" => "Sara",
                    "notas" => [
                        "Lengua" => 4,
                        "Historia" => 6,
                        "Educación Física" => 7,
                        "Inglés" => 2,
                        "Matemáticas" => 1,
                        "Música" => 8,
                        "Ciencias" => 6,
                        "Tecnología" => 5,
                    ]
                ],
                [
                    "nombre" => "Julia",
                    "notas" => [
                        "Lengua" => 3,
                        "Historia" => 7,
                        "Educación Física" => 7,
                        "Inglés" => 1,
                        "Matemáticas" => 9,
                        "Música" => 2,
                        "Ciencias" => 9,
                        "Tecnología" => 1,
                    ]
                ],
                [
                    "nombre" => "Mía",
                    "notas" => [
                        "Lengua" => 3,
                        "Historia" => 9,
                        "Educación Física" => 2,
                        "Inglés" => 9,
                        "Matemáticas" => 10,
                        "Música" => 8,
                        "Ciencias" => 2,
                        "Tecnología" => 6,
                    ]
                ],
                [
                    "nombre" => "Sara",
                    "notas" => [
                        "Lengua" => 5,
                        "Historia" => 10,
                        "Educación Física" => 1,
                        "Inglés" => 7,
                        "Matemáticas" => 8,
                        "Música" => 1,
                        "Ciencias" => 9,
                        "Tecnología" => 8,
                    ]
                ],
                [
                    "nombre" => "Antonio",
                    "notas" => [
                        "Lengua" => 7,
                        "Historia" => 10,
                        "Educación Física" => 2,
                        "Inglés" => 10,
                        "Matemáticas" => 6,
                        "Música" => 7,
                        "Ciencias" => 6,
                        "Tecnología" => 8,
                    ]
                ],
                [
                    "nombre" => "Carla",
                    "notas" => [
                        "Lengua" => 4,
                        "Historia" => 6,
                        "Educación Física" => 9,
                        "Inglés" => 5,
                        "Matemáticas" => 3,
                        "Música" => 8,
                        "Ciencias" => 9,
                        "Tecnología" => 10,
                    ]
                ],
                [
                    "nombre" => "Chloe",
                    "notas" => [
                        "Lengua" => 2,
                        "Historia" => 1,
                        "Educación Física" => 10,
                        "Inglés" => 6,
                        "Matemáticas" => 9,
                        "Música" => 7,
                        "Ciencias" => 5,
                        "Tecnología" => 4,
                    ]
                ],
                [
                    "nombre" => "Adrián",
                    "notas" => [
                        "Lengua" => 1,
                        "Historia" => 2,
                        "Educación Física" => 9,
                        "Inglés" => 2,
                        "Matemáticas" => 5,
                        "Música" => 1,
                        "Ciencias" => 9,
                        "Tecnología" => 7,
                    ]
                ],
                [
                    "nombre" => "Sofía",
                    "notas" => [
                        "Lengua" => 7,
                        "Historia" => 1,
                        "Educación Física" => 10,
                        "Inglés" => 6,
                        "Matemáticas" => 8,
                        "Música" => 10,
                        "Ciencias" => 7,
                        "Tecnología" => 8,
                    ]
                ],
                [
                    "nombre" => "Luna",
                    "notas" => [
                        "Lengua" => 9,
                        "Historia" => 4,
                        "Educación Física" => 9,
                        "Inglés" => 4,
                        "Matemáticas" => 2,
                        "Música" => 10,
                        "Ciencias" => 10,
                        "Tecnología" => 2,
                    ]
                ],
                [
                    "nombre" => "Adrián",
                    "notas" => [
                        "Lengua" => 2,
                        "Historia" => 5,
                        "Educación Física" => 2,
                        "Inglés" => 1,
                        "Matemáticas" => 2,
                        "Música" => 6,
                        "Ciencias" => 9,
                        "Tecnología" => 9,
                    ]
                ],
                [
                    "nombre" => "Vega",
                    "notas" => [
                        "Lengua" => 3,
                        "Historia" => 3,
                        "Educación Física" => 10,
                        "Inglés" => 5,
                        "Matemáticas" => 2,
                        "Música" => 4,
                        "Ciencias" => 2,
                        "Tecnología" => 1,
                    ]
                ],
                [
                    "nombre" => "Manuel",
                    "notas" => [
                        "Lengua" => 5,
                        "Historia" => 6,
                        "Educación Física" => 6,
                        "Inglés" => 2,
                        "Matemáticas" => 5,
                        "Música" => 6,
                        "Ciencias" => 7,
                        "Tecnología" => 9,
                    ]
                ],
            ],
            "B" => [
                [
                    "nombre" => "Emma",
                    "notas" => [
                        "Lengua" => 1,
                        "Historia" => 5,
                        "Educación Física" => 3,
                        "Inglés" => 3,
                        "Matemáticas" => 2,
                        "Música" => 3,
                        "Ciencias" => 7,
                        "Tecnología" => 9,
                    ]
                ],
                [
                    "nombre" => "Nora",
                    "notas" => [
                        "Lengua" => 3,
                        "Historia" => 7,
                        "Educación Física" => 3,
                        "Inglés" => 4,
                        "Matemáticas" => 9,
                        "Música" => 2,
                        "Ciencias" => 4,
                        "Tecnología" => 8,
                    ]
                ],
                [
                    "nombre" => "Nora",
                    "notas" => [
                        "Lengua" => 1,
                        "Historia" => 6,
                        "Educación Física" => 5,
                        "Inglés" => 8,
                        "Matemáticas" => 8,
                        "Música" => 4,
                        "Ciencias" => 9,
                        "Tecnología" => 8,
                    ]
                ],
                [
                    "nombre" => "Daniel",
                    "notas" => [
                        "Lengua" => 7,
                        "Historia" => 7,
                        "Educación Física" => 2,
                        "Inglés" => 9,
                        "Matemáticas" => 9,
                        "Música" => 4,
                        "Ciencias" => 6,
                        "Tecnología" => 3,
                    ]
                ],
                [
                    "nombre" => "Carla",
                    "notas" => [
                        "Lengua" => 7,
                        "Historia" => 2,
                        "Educación Física" => 10,
                        "Inglés" => 1,
                        "Matemáticas" => 1,
                        "Música" => 1,
                        "Ciencias" => 9,
                        "Tecnología" => 3,
                    ]
                ],
                [
                    "nombre" => "Gabriel",
                    "notas" => [
                        "Lengua" => 9,
                        "Historia" => 2,
                        "Educación Física" => 7,
                        "Inglés" => 7,
                        "Matemáticas" => 1,
                        "Música" => 1,
                        "Ciencias" => 5,
                        "Tecnología" => 4,
                    ]
                ],
                [
                    "nombre" => "Mateo",
                    "notas" => [
                        "Lengua" => 8,
                        "Historia" => 9,
                        "Educación Física" => 2,
                        "Inglés" => 4,
                        "Matemáticas" => 2,
                        "Música" => 10,
                        "Ciencias" => 4,
                        "Tecnología" => 4,
                    ]
                ],
                [
                    "nombre" => "Olivia",
                    "notas" => [
                        "Lengua" => 7,
                        "Historia" => 7,
                        "Educación Física" => 6,
                        "Inglés" => 1,
                        "Matemáticas" => 9,
                        "Música" => 2,
                        "Ciencias" => 9,
                        "Tecnología" => 3,
                    ]
                ],
                [
                    "nombre" => "Martina",
                    "notas" => [
                        "Lengua" => 6,
                        "Historia" => 9,
                        "Educación Física" => 1,
                        "Inglés" => 7,
                        "Matemáticas" => 9,
                        "Música" => 9,
                        "Ciencias" => 2,
                        "Tecnología" => 6,
                    ]
                ],
                [
                    "nombre" => "David",
                    "notas" => [
                        "Lengua" => 3,
                        "Historia" => 2,
                        "Educación Física" => 2,
                        "Inglés" => 5,
                        "Matemáticas" => 5,
                        "Música" => 2,
                        "Ciencias" => 8,
                        "Tecnología" => 5,
                    ]
                ],
                [
                    "nombre" => "Hugo",
                    "notas" => [
                        "Lengua" => 9,
                        "Historia" => 2,
                        "Educación Física" => 1,
                        "Inglés" => 9,
                        "Matemáticas" => 2,
                        "Música" => 3,
                        "Ciencias" => 3,
                        "Tecnología" => 7,
                    ]
                ],
                [
                    "nombre" => "Juan",
                    "notas" => [
                        "Lengua" => 5,
                        "Historia" => 6,
                        "Educación Física" => 8,
                        "Inglés" => 1,
                        "Matemáticas" => 9,
                        "Música" => 5,
                        "Ciencias" => 7,
                        "Tecnología" => 6,
                    ]
                ],
                [
                    "nombre" => "Juan",
                    "notas" => [
                        "Lengua" => 6,
                        "Historia" => 10,
                        "Educación Física" => 9,
                        "Inglés" => 3,
                        "Matemáticas" => 7,
                        "Música" => 9,
                        "Ciencias" => 9,
                        "Tecnología" => 1,
                    ]
                ],
                [
                    "nombre" => "Emma",
                    "notas" => [
                        "Lengua" => 1,
                        "Historia" => 1,
                        "Educación Física" => 9,
                        "Inglés" => 6,
                        "Matemáticas" => 5,
                        "Música" => 6,
                        "Ciencias" => 3,
                        "Tecnología" => 1,
                    ]
                ],
                [
                    "nombre" => "Daniel",
                    "notas" => [
                        "Lengua" => 6,
                        "Historia" => 3,
                        "Educación Física" => 3,
                        "Inglés" => 6,
                        "Matemáticas" => 1,
                        "Música" => 6,
                        "Ciencias" => 7,
                        "Tecnología" => 2,
                    ]
                ],
                [
                    "nombre" => "Emma",
                    "notas" => [
                        "Lengua" => 3,
                        "Historia" => 10,
                        "Educación Física" => 9,
                        "Inglés" => 2,
                        "Matemáticas" => 10,
                        "Música" => 3,
                        "Ciencias" => 1,
                        "Tecnología" => 7,
                    ]
                ],
                [
                    "nombre" => "Valeria",
                    "notas" => [
                        "Lengua" => 9,
                        "Historia" => 2,
                        "Educación Física" => 10,
                        "Inglés" => 7,
                        "Matemáticas" => 2,
                        "Música" => 10,
                        "Ciencias" => 1,
                        "Tecnología" => 3,
                    ]
                ],
                [
                    "nombre" => "Manuel",
                    "notas" => [
                        "Lengua" => 8,
                        "Historia" => 3,
                        "Educación Física" => 10,
                        "Inglés" => 6,
                        "Matemáticas" => 6,
                        "Música" => 2,
                        "Ciencias" => 1,
                        "Tecnología" => 4,
                    ]
                ],
                [
                    "nombre" => "Alba",
                    "notas" => [
                        "Lengua" => 7,
                        "Historia" => 4,
                        "Educación Física" => 1,
                        "Inglés" => 1,
                        "Matemáticas" => 7,
                        "Música" => 6,
                        "Ciencias" => 9,
                        "Tecnología" => 10,
                    ]
                ],
                [
                    "nombre" => "Isabel",
                    "notas" => [
                        "Lengua" => 9,
                        "Historia" => 2,
                        "Educación Física" => 8,
                        "Inglés" => 7,
                        "Matemáticas" => 2,
                        "Música" => 4,
                        "Ciencias" => 4,
                        "Tecnología" => 6,
                    ]
                ],
            ],
            "C" => [
                [
                    "nombre" => "Antonio",
                    "notas" => [
                        "Lengua" => 7,
                        "Historia" => 4,
                        "Educación Física" => 1,
                        "Inglés" => 4,
                        "Matemáticas" => 10,
                        "Música" => 1,
                        "Ciencias" => 2,
                        "Tecnología" => 4,
                    ]
                ],
                [
                    "nombre" => "Sofía",
                    "notas" => [
                        "Lengua" => 10,
                        "Historia" => 2,
                        "Educación Física" => 8,
                        "Inglés" => 10,
                        "Matemáticas" => 7,
                        "Música" => 6,
                        "Ciencias" => 6,
                        "Tecnología" => 2,
                    ]
                ],
                [
                    "nombre" => "David",
                    "notas" => [
                        "Lengua" => 7,
                        "Historia" => 8,
                        "Educación Física" => 8,
                        "Inglés" => 1,
                        "Matemáticas" => 3,
                        "Música" => 8,
                        "Ciencias" => 5,
                        "Tecnología" => 9,
                    ]
                ],
                [
                    "nombre" => "Valeria",
                    "notas" => [
                        "Lengua" => 6,
                        "Historia" => 7,
                        "Educación Física" => 7,
                        "Inglés" => 6,
                        "Matemáticas" => 10,
                        "Música" => 8,
                        "Ciencias" => 6,
                        "Tecnología" => 6,
                    ]
                ],
                [
                    "nombre" => "Mateo",
                    "notas" => [
                        "Lengua" => 10,
                        "Historia" => 10,
                        "Educación Física" => 8,
                        "Inglés" => 3,
                        "Matemáticas" => 6,
                        "Música" => 7,
                        "Ciencias" => 3,
                        "Tecnología" => 8,
                    ]
                ],
                [
                    "nombre" => "Mateo",
                    "notas" => [
                        "Lengua" => 1,
                        "Historia" => 4,
                        "Educación Física" => 8,
                        "Inglés" => 6,
                        "Matemáticas" => 9,
                        "Música" => 1,
                        "Ciencias" => 1,
                        "Tecnología" => 4,
                    ]
                ],
                [
                    "nombre" => "Julia",
                    "notas" => [
                        "Lengua" => 1,
                        "Historia" => 3,
                        "Educación Física" => 1,
                        "Inglés" => 4,
                        "Matemáticas" => 7,
                        "Música" => 3,
                        "Ciencias" => 6,
                        "Tecnología" => 5,
                    ]
                ],
                [
                    "nombre" => "Alba",
                    "notas" => [
                        "Lengua" => 2,
                        "Historia" => 10,
                        "Educación Física" => 2,
                        "Inglés" => 2,
                        "Matemáticas" => 4,
                        "Música" => 9,
                        "Ciencias" => 1,
                        "Tecnología" => 9,
                    ]
                ],
                [
                    "nombre" => "Luna",
                    "notas" => [
                        "Lengua" => 1,
                        "Historia" => 6,
                        "Educación Física" => 6,
                        "Inglés" => 3,
                        "Matemáticas" => 8,
                        "Música" => 2,
                        "Ciencias" => 3,
                        "Tecnología" => 8,
                    ]
                ],
                [
                    "nombre" => "Adrián",
                    "notas" => [
                        "Lengua" => 1,
                        "Historia" => 5,
                        "Educación Física" => 4,
                        "Inglés" => 9,
                        "Matemáticas" => 3,
                        "Música" => 9,
                        "Ciencias" => 2,
                        "Tecnología" => 4,
                    ]
                ],
                [
                    "nombre" => "Juan",
                    "notas" => [
                        "Lengua" => 10,
                        "Historia" => 8,
                        "Educación Física" => 5,
                        "Inglés" => 10,
                        "Matemáticas" => 8,
                        "Música" => 10,
                        "Ciencias" => 8,
                        "Tecnología" => 5,
                    ]
                ],
                [
                    "nombre" => "Antonio",
                    "notas" => [
                        "Lengua" => 1,
                        "Historia" => 4,
                        "Educación Física" => 8,
                        "Inglés" => 4,
                        "Matemáticas" => 1,
                        "Música" => 8,
                        "Ciencias" => 2,
                        "Tecnología" => 7,
                    ]
                ],
                [
                    "nombre" => "Claudia",
                    "notas" => [
                        "Lengua" => 2,
                        "Historia" => 2,
                        "Educación Física" => 4,
                        "Inglés" => 8,
                        "Matemáticas" => 4,
                        "Música" => 4,
                        "Ciencias" => 5,
                        "Tecnología" => 1,
                    ]
                ],
                [
                    "nombre" => "Luna",
                    "notas" => [
                        "Lengua" => 7,
                        "Historia" => 5,
                        "Educación Física" => 6,
                        "Inglés" => 8,
                        "Matemáticas" => 9,
                        "Música" => 3,
                        "Ciencias" => 2,
                        "Tecnología" => 4,
                    ]
                ],
                [
                    "nombre" => "Pedro",
                    "notas" => [
                        "Lengua" => 2,
                        "Historia" => 7,
                        "Educación Física" => 1,
                        "Inglés" => 7,
                        "Matemáticas" => 6,
                        "Música" => 7,
                        "Ciencias" => 6,
                        "Tecnología" => 1,
                    ]
                ],
                [
                    "nombre" => "Chloe",
                    "notas" => [
                        "Lengua" => 7,
                        "Historia" => 7,
                        "Educación Física" => 8,
                        "Inglés" => 9,
                        "Matemáticas" => 2,
                        "Música" => 1,
                        "Ciencias" => 2,
                        "Tecnología" => 6,
                    ]
                ],
                [
                    "nombre" => "Chloe",
                    "notas" => [
                        "Lengua" => 9,
                        "Historia" => 8,
                        "Educación Física" => 9,
                        "Inglés" => 10,
                        "Matemáticas" => 2,
                        "Música" => 9,
                        "Ciencias" => 5,
                        "Tecnología" => 3,
                    ]
                ],
                [
                    "nombre" => "Carla",
                    "notas" => [
                        "Lengua" => 2,
                        "Historia" => 9,
                        "Educación Física" => 4,
                        "Inglés" => 6,
                        "Matemáticas" => 8,
                        "Música" => 6,
                        "Ciencias" => 3,
                        "Tecnología" => 1,
                    ]
                ],
                [
                    "nombre" => "Mario",
                    "notas" => [
                        "Lengua" => 1,
                        "Historia" => 5,
                        "Educación Física" => 2,
                        "Inglés" => 3,
                        "Matemáticas" => 1,
                        "Música" => 10,
                        "Ciencias" => 4,
                        "Tecnología" => 5,
                    ]
                ],
                [
                    "nombre" => "Daniel",
                    "notas" => [
                        "Lengua" => 2,
                        "Historia" => 4,
                        "Educación Física" => 7,
                        "Inglés" => 10,
                        "Matemáticas" => 6,
                        "Música" => 4,
                        "Ciencias" => 5,
                        "Tecnología" => 7,
                    ]
                ],
            ],
        ],
        "Cuarto" => [
            "A" => [
                [
                    "nombre" => "Nora",
                    "notas" => [
                        "Lengua" => 2,
                        "Historia" => 3,
                        "Educación Física" => 9,
                        "Inglés" => 6,
                        "Matemáticas" => 1,
                        "Música" => 10,
                        "Ciencias" => 1,
                        "Tecnología" => 2,
                    ]
                ],
                [
                    "nombre" => "Javier",
                    "notas" => [
                        "Lengua" => 6,
                        "Historia" => 10,
                        "Educación Física" => 8,
                        "Inglés" => 5,
                        "Matemáticas" => 10,
                        "Música" => 7,
                        "Ciencias" => 10,
                        "Tecnología" => 3,
                    ]
                ],
                [
                    "nombre" => "Paula",
                    "notas" => [
                        "Lengua" => 6,
                        "Historia" => 2,
                        "Educación Física" => 3,
                        "Inglés" => 8,
                        "Matemáticas" => 2,
                        "Música" => 4,
                        "Ciencias" => 8,
                        "Tecnología" => 2,
                    ]
                ],
                [
                    "nombre" => "Leo",
                    "notas" => [
                        "Lengua" => 2,
                        "Historia" => 6,
                        "Educación Física" => 8,
                        "Inglés" => 4,
                        "Matemáticas" => 7,
                        "Música" => 2,
                        "Ciencias" => 4,
                        "Tecnología" => 8,
                    ]
                ],
                [
                    "nombre" => "Manuel",
                    "notas" => [
                        "Lengua" => 8,
                        "Historia" => 4,
                        "Educación Física" => 3,
                        "Inglés" => 6,
                        "Matemáticas" => 4,
                        "Música" => 5,
                        "Ciencias" => 3,
                        "Tecnología" => 3,
                    ]
                ],
                [
                    "nombre" => "Enzo",
                    "notas" => [
                        "Lengua" => 6,
                        "Historia" => 5,
                        "Educación Física" => 5,
                        "Inglés" => 5,
                        "Matemáticas" => 7,
                        "Música" => 1,
                        "Ciencias" => 7,
                        "Tecnología" => 7,
                    ]
                ],
                [
                    "nombre" => "Sofía",
                    "notas" => [
                        "Lengua" => 1,
                        "Historia" => 4,
                        "Educación Física" => 3,
                        "Inglés" => 4,
                        "Matemáticas" => 2,
                        "Música" => 3,
                        "Ciencias" => 1,
                        "Tecnología" => 6,
                    ]
                ],
                [
                    "nombre" => "Alba",
                    "notas" => [
                        "Lengua" => 3,
                        "Historia" => 7,
                        "Educación Física" => 2,
                        "Inglés" => 9,
                        "Matemáticas" => 3,
                        "Música" => 9,
                        "Ciencias" => 2,
                        "Tecnología" => 10,
                    ]
                ],
                [
                    "nombre" => "Irene",
                    "notas" => [
                        "Lengua" => 1,
                        "Historia" => 4,
                        "Educación Física" => 2,
                        "Inglés" => 10,
                        "Matemáticas" => 9,
                        "Música" => 8,
                        "Ciencias" => 4,
                        "Tecnología" => 4,
                    ]
                ],
                [
                    "nombre" => "Sara",
                    "notas" => [
                        "Lengua" => 3,
                        "Historia" => 4,
                        "Educación Física" => 4,
                        "Inglés" => 10,
                        "Matemáticas" => 7,
                        "Música" => 5,
                        "Ciencias" => 7,
                        "Tecnología" => 5,
                    ]
                ],
                [
                    "nombre" => "Hugo",
                    "notas" => [
                        "Lengua" => 3,
                        "Historia" => 10,
                        "Educación Física" => 4,
                        "Inglés" => 4,
                        "Matemáticas" => 9,
                        "Música" => 6,
                        "Ciencias" => 8,
                        "Tecnología" => 9,
                    ]
                ],
                [
                    "nombre" => "Manuel",
                    "notas" => [
                        "Lengua" => 5,
                        "Historia" => 8,
                        "Educación Física" => 4,
                        "Inglés" => 10,
                        "Matemáticas" => 10,
                        "Música" => 5,
                        "Ciencias" => 6,
                        "Tecnología" => 6,
                    ]
                ],
                [
                    "nombre" => "Daniel",
                    "notas" => [
                        "Lengua" => 2,
                        "Historia" => 6,
                        "Educación Física" => 10,
                        "Inglés" => 8,
                        "Matemáticas" => 2,
                        "Música" => 4,
                        "Ciencias" => 3,
                        "Tecnología" => 7,
                    ]
                ],
                [
                    "nombre" => "Isabel",
                    "notas" => [
                        "Lengua" => 7,
                        "Historia" => 10,
                        "Educación Física" => 1,
                        "Inglés" => 4,
                        "Matemáticas" => 4,
                        "Música" => 9,
                        "Ciencias" => 1,
                        "Tecnología" => 5,
                    ]
                ],
                [
                    "nombre" => "Alejandro",
                    "notas" => [
                        "Lengua" => 5,
                        "Historia" => 4,
                        "Educación Física" => 7,
                        "Inglés" => 10,
                        "Matemáticas" => 7,
                        "Música" => 5,
                        "Ciencias" => 8,
                        "Tecnología" => 1,
                    ]
                ],
                [
                    "nombre" => "Mateo",
                    "notas" => [
                        "Lengua" => 1,
                        "Historia" => 8,
                        "Educación Física" => 2,
                        "Inglés" => 2,
                        "Matemáticas" => 6,
                        "Música" => 8,
                        "Ciencias" => 1,
                        "Tecnología" => 6,
                    ]
                ],
                [
                    "nombre" => "Sara",
                    "notas" => [
                        "Lengua" => 5,
                        "Historia" => 5,
                        "Educación Física" => 3,
                        "Inglés" => 4,
                        "Matemáticas" => 10,
                        "Música" => 1,
                        "Ciencias" => 3,
                        "Tecnología" => 9,
                    ]
                ],
                [
                    "nombre" => "Noa",
                    "notas" => [
                        "Lengua" => 3,
                        "Historia" => 5,
                        "Educación Física" => 5,
                        "Inglés" => 5,
                        "Matemáticas" => 7,
                        "Música" => 7,
                        "Ciencias" => 7,
                        "Tecnología" => 2,
                    ]
                ],
                [
                    "nombre" => "Alejandro",
                    "notas" => [
                        "Lengua" => 10,
                        "Historia" => 4,
                        "Educación Física" => 2,
                        "Inglés" => 5,
                        "Matemáticas" => 5,
                        "Música" => 7,
                        "Ciencias" => 5,
                        "Tecnología" => 5,
                    ]
                ],
                [
                    "nombre" => "Andrés",
                    "notas" => [
                        "Lengua" => 2,
                        "Historia" => 2,
                        "Educación Física" => 8,
                        "Inglés" => 5,
                        "Matemáticas" => 6,
                        "Música" => 2,
                        "Ciencias" => 6,
                        "Tecnología" => 8,
                    ]
                ],
            ],
            "B" => [
                [
                    "nombre" => "Pedro",
                    "notas" => [
                        "Lengua" => 6,
                        "Historia" => 4,
                        "Educación Física" => 3,
                        "Inglés" => 8,
                        "Matemáticas" => 10,
                        "Música" => 7,
                        "Ciencias" => 1,
                        "Tecnología" => 2,
                    ]
                ],
                [
                    "nombre" => "Paula",
                    "notas" => [
                        "Lengua" => 7,
                        "Historia" => 6,
                        "Educación Física" => 5,
                        "Inglés" => 4,
                        "Matemáticas" => 5,
                        "Música" => 8,
                        "Ciencias" => 6,
                        "Tecnología" => 10,
                    ]
                ],
                [
                    "nombre" => "Emma",
                    "notas" => [
                        "Lengua" => 1,
                        "Historia" => 9,
                        "Educación Física" => 9,
                        "Inglés" => 10,
                        "Matemáticas" => 10,
                        "Música" => 1,
                        "Ciencias" => 6,
                        "Tecnología" => 5,
                    ]
                ],
                [
                    "nombre" => "Pedro",
                    "notas" => [
                        "Lengua" => 8,
                        "Historia" => 7,
                        "Educación Física" => 7,
                        "Inglés" => 8,
                        "Matemáticas" => 4,
                        "Música" => 6,
                        "Ciencias" => 4,
                        "Tecnología" => 2,
                    ]
                ],
                [
                    "nombre" => "Irene",
                    "notas" => [
                        "Lengua" => 5,
                        "Historia" => 2,
                        "Educación Física" => 7,
                        "Inglés" => 9,
                        "Matemáticas" => 3,
                        "Música" => 3,
                        "Ciencias" => 5,
                        "Tecnología" => 1,
                    ]
                ],
                [
                    "nombre" => "Carla",
                    "notas" => [
                        "Lengua" => 5,
                        "Historia" => 6,
                        "Educación Física" => 10,
                        "Inglés" => 7,
                        "Matemáticas" => 9,
                        "Música" => 3,
                        "Ciencias" => 5,
                        "Tecnología" => 9,
                    ]
                ],
                [
                    "nombre" => "Nora",
                    "notas" => [
                        "Lengua" => 3,
                        "Historia" => 1,
                        "Educación Física" => 9,
                        "Inglés" => 6,
                        "Matemáticas" => 8,
                        "Música" => 6,
                        "Ciencias" => 8,
                        "Tecnología" => 1,
                    ]
                ],
                [
                    "nombre" => "Mía",
                    "notas" => [
                        "Lengua" => 2,
                        "Historia" => 7,
                        "Educación Física" => 6,
                        "Inglés" => 10,
                        "Matemáticas" => 9,
                        "Música" => 3,
                        "Ciencias" => 7,
                        "Tecnología" => 4,
                    ]
                ],
                [
                    "nombre" => "Luna",
                    "notas" => [
                        "Lengua" => 1,
                        "Historia" => 7,
                        "Educación Física" => 5,
                        "Inglés" => 9,
                        "Matemáticas" => 7,
                        "Música" => 4,
                        "Ciencias" => 3,
                        "Tecnología" => 10,
                    ]
                ],
                [
                    "nombre" => "Juan",
                    "notas" => [
                        "Lengua" => 9,
                        "Historia" => 3,
                        "Educación Física" => 3,
                        "Inglés" => 8,
                        "Matemáticas" => 9,
                        "Música" => 6,
                        "Ciencias" => 8,
                        "Tecnología" => 1,
                    ]
                ],
                [
                    "nombre" => "Julia",
                    "notas" => [
                        "Lengua" => 3,
                        "Historia" => 10,
                        "Educación Física" => 2,
                        "Inglés" => 3,
                        "Matemáticas" => 5,
                        "Música" => 2,
                        "Ciencias" => 6,
                        "Tecnología" => 8,
                    ]
                ],
                [
                    "nombre" => "Pedro",
                    "notas" => [
                        "Lengua" => 4,
                        "Historia" => 3,
                        "Educación Física" => 1,
                        "Inglés" => 8,
                        "Matemáticas" => 8,
                        "Música" => 10,
                        "Ciencias" => 3,
                        "Tecnología" => 9,
                    ]
                ],
                [
                    "nombre" => "Noa",
                    "notas" => [
                        "Lengua" => 5,
                        "Historia" => 6,
                        "Educación Física" => 6,
                        "Inglés" => 5,
                        "Matemáticas" => 1,
                        "Música" => 2,
                        "Ciencias" => 9,
                        "Tecnología" => 1,
                    ]
                ],
                [
                    "nombre" => "Manuel",
                    "notas" => [
                        "Lengua" => 2,
                        "Historia" => 4,
                        "Educación Física" => 3,
                        "Inglés" => 5,
                        "Matemáticas" => 10,
                        "Música" => 6,
                        "Ciencias" => 6,
                        "Tecnología" => 1,
                    ]
                ],
                [
                    "nombre" => "Juan",
                    "notas" => [
                        "Lengua" => 9,
                        "Historia" => 3,
                        "Educación Física" => 4,
                        "Inglés" => 3,
                        "Matemáticas" => 9,
                        "Música" => 9,
                        "Ciencias" => 9,
                        "Tecnología" => 7,
                    ]
                ],
                [
                    "nombre" => "Gabriel",
                    "notas" => [
                        "Lengua" => 2,
                        "Historia" => 10,
                        "Educación Física" => 5,
                        "Inglés" => 5,
                        "Matemáticas" => 9,
                        "Música" => 9,
                        "Ciencias" => 1,
                        "Tecnología" => 1,
                    ]
                ],
                [
                    "nombre" => "Adrián",
                    "notas" => [
                        "Lengua" => 5,
                        "Historia" => 4,
                        "Educación Física" => 2,
                        "Inglés" => 1,
                        "Matemáticas" => 3,
                        "Música" => 6,
                        "Ciencias" => 10,
                        "Tecnología" => 5,
                    ]
                ],
                [
                    "nombre" => "Noa",
                    "notas" => [
                        "Lengua" => 5,
                        "Historia" => 8,
                        "Educación Física" => 7,
                        "Inglés" => 1,
                        "Matemáticas" => 7,
                        "Música" => 7,
                        "Ciencias" => 1,
                        "Tecnología" => 5,
                    ]
                ],
                [
                    "nombre" => "Carla",
                    "notas" => [
                        "Lengua" => 7,
                        "Historia" => 7,
                        "Educación Física" => 5,
                        "Inglés" => 4,
                        "Matemáticas" => 10,
                        "Música" => 8,
                        "Ciencias" => 7,
                        "Tecnología" => 1,
                    ]
                ],
                [
                    "nombre" => "Andrés",
                    "notas" => [
                        "Lengua" => 6,
                        "Historia" => 9,
                        "Educación Física" => 9,
                        "Inglés" => 2,
                        "Matemáticas" => 1,
                        "Música" => 4,
                        "Ciencias" => 10,
                        "Tecnología" => 1,
                    ]
                ],
            ],
            "C" => [
                [
                    "nombre" => "Olivia",
                    "notas" => [
                        "Lengua" => 6,
                        "Historia" => 8,
                        "Educación Física" => 9,
                        "Inglés" => 8,
                        "Matemáticas" => 3,
                        "Música" => 3,
                        "Ciencias" => 5,
                        "Tecnología" => 5,
                    ]
                ],
                [
                    "nombre" => "Antonio",
                    "notas" => [
                        "Lengua" => 6,
                        "Historia" => 5,
                        "Educación Física" => 1,
                        "Inglés" => 6,
                        "Matemáticas" => 3,
                        "Música" => 7,
                        "Ciencias" => 1,
                        "Tecnología" => 5,
                    ]
                ],
                [
                    "nombre" => "Sara",
                    "notas" => [
                        "Lengua" => 6,
                        "Historia" => 9,
                        "Educación Física" => 8,
                        "Inglés" => 4,
                        "Matemáticas" => 6,
                        "Música" => 5,
                        "Ciencias" => 8,
                        "Tecnología" => 6,
                    ]
                ],
                [
                    "nombre" => "Daniel",
                    "notas" => [
                        "Lengua" => 4,
                        "Historia" => 5,
                        "Educación Física" => 7,
                        "Inglés" => 5,
                        "Matemáticas" => 10,
                        "Música" => 2,
                        "Ciencias" => 7,
                        "Tecnología" => 5,
                    ]
                ],
                [
                    "nombre" => "Mario",
                    "notas" => [
                        "Lengua" => 9,
                        "Historia" => 4,
                        "Educación Física" => 5,
                        "Inglés" => 9,
                        "Matemáticas" => 5,
                        "Música" => 4,
                        "Ciencias" => 1,
                        "Tecnología" => 6,
                    ]
                ],
                [
                    "nombre" => "Pedro",
                    "notas" => [
                        "Lengua" => 7,
                        "Historia" => 5,
                        "Educación Física" => 4,
                        "Inglés" => 10,
                        "Matemáticas" => 6,
                        "Música" => 2,
                        "Ciencias" => 9,
                        "Tecnología" => 9,
                    ]
                ],
                [
                    "nombre" => "Leo",
                    "notas" => [
                        "Lengua" => 4,
                        "Historia" => 1,
                        "Educación Física" => 9,
                        "Inglés" => 1,
                        "Matemáticas" => 2,
                        "Música" => 2,
                        "Ciencias" => 4,
                        "Tecnología" => 1,
                    ]
                ],
                [
                    "nombre" => "Antonio",
                    "notas" => [
                        "Lengua" => 2,
                        "Historia" => 10,
                        "Educación Física" => 2,
                        "Inglés" => 6,
                        "Matemáticas" => 5,
                        "Música" => 1,
                        "Ciencias" => 1,
                        "Tecnología" => 7,
                    ]
                ],
                [
                    "nombre" => "Irene",
                    "notas" => [
                        "Lengua" => 5,
                        "Historia" => 8,
                        "Educación Física" => 1,
                        "Inglés" => 3,
                        "Matemáticas" => 2,
                        "Música" => 6,
                        "Ciencias" => 5,
                        "Tecnología" => 10,
                    ]
                ],
                [
                    "nombre" => "Hugo",
                    "notas" => [
                        "Lengua" => 1,
                        "Historia" => 1,
                        "Educación Física" => 6,
                        "Inglés" => 7,
                        "Matemáticas" => 1,
                        "Música" => 8,
                        "Ciencias" => 10,
                        "Tecnología" => 3,
                    ]
                ],
                [
                    "nombre" => "Daniel",
                    "notas" => [
                        "Lengua" => 5,
                        "Historia" => 1,
                        "Educación Física" => 10,
                        "Inglés" => 3,
                        "Matemáticas" => 5,
                        "Música" => 9,
                        "Ciencias" => 7,
                        "Tecnología" => 1,
                    ]
                ],
                [
                    "nombre" => "Hugo",
                    "notas" => [
                        "Lengua" => 7,
                        "Historia" => 7,
                        "Educación Física" => 5,
                        "Inglés" => 1,
                        "Matemáticas" => 7,
                        "Música" => 6,
                        "Ciencias" => 6,
                        "Tecnología" => 4,
                    ]
                ],
                [
                    "nombre" => "Andrés",
                    "notas" => [
                        "Lengua" => 7,
                        "Historia" => 1,
                        "Educación Física" => 9,
                        "Inglés" => 1,
                        "Matemáticas" => 10,
                        "Música" => 8,
                        "Ciencias" => 3,
                        "Tecnología" => 2,
                    ]
                ],
                [
                    "nombre" => "Paula",
                    "notas" => [
                        "Lengua" => 8,
                        "Historia" => 4,
                        "Educación Física" => 7,
                        "Inglés" => 5,
                        "Matemáticas" => 5,
                        "Música" => 8,
                        "Ciencias" => 2,
                        "Tecnología" => 2,
                    ]
                ],
                [
                    "nombre" => "Vega",
                    "notas" => [
                        "Lengua" => 7,
                        "Historia" => 5,
                        "Educación Física" => 6,
                        "Inglés" => 1,
                        "Matemáticas" => 10,
                        "Música" => 1,
                        "Ciencias" => 5,
                        "Tecnología" => 1,
                    ]
                ],
                [
                    "nombre" => "Hugo",
                    "notas" => [
                        "Lengua" => 6,
                        "Historia" => 10,
                        "Educación Física" => 8,
                        "Inglés" => 9,
                        "Matemáticas" => 6,
                        "Música" => 1,
                        "Ciencias" => 6,
                        "Tecnología" => 9,
                    ]
                ],
                [
                    "nombre" => "Sofía",
                    "notas" => [
                        "Lengua" => 7,
                        "Historia" => 6,
                        "Educación Física" => 7,
                        "Inglés" => 1,
                        "Matemáticas" => 3,
                        "Música" => 2,
                        "Ciencias" => 7,
                        "Tecnología" => 1,
                    ]
                ],
                [
                    "nombre" => "Irene",
                    "notas" => [
                        "Lengua" => 2,
                        "Historia" => 8,
                        "Educación Física" => 10,
                        "Inglés" => 6,
                        "Matemáticas" => 1,
                        "Música" => 3,
                        "Ciencias" => 5,
                        "Tecnología" => 5,
                    ]
                ],
                [
                    "nombre" => "Diego",
                    "notas" => [
                        "Lengua" => 2,
                        "Historia" => 2,
                        "Educación Física" => 4,
                        "Inglés" => 9,
                        "Matemáticas" => 3,
                        "Música" => 8,
                        "Ciencias" => 5,
                        "Tecnología" => 8,
                    ]
                ],
                [
                    "nombre" => "Chloe",
                    "notas" => [
                        "Lengua" => 7,
                        "Historia" => 8,
                        "Educación Física" => 8,
                        "Inglés" => 3,
                        "Matemáticas" => 9,
                        "Música" => 3,
                        "Ciencias" => 10,
                        "Tecnología" => 6,
                    ]
                ],
            ],
        ],
        "Quinto" => [
            "A" => [
                [
                    "nombre" => "Enzo",
                    "notas" => [
                        "Lengua" => 10,
                        "Historia" => 10,
                        "Educación Física" => 7,
                        "Inglés" => 5,
                        "Matemáticas" => 9,
                        "Música" => 9,
                        "Ciencias" => 7,
                        "Tecnología" => 1,
                    ]
                ],
                [
                    "nombre" => "Mario",
                    "notas" => [
                        "Lengua" => 4,
                        "Historia" => 8,
                        "Educación Física" => 9,
                        "Inglés" => 2,
                        "Matemáticas" => 9,
                        "Música" => 9,
                        "Ciencias" => 6,
                        "Tecnología" => 9,
                    ]
                ],
                [
                    "nombre" => "Noa",
                    "notas" => [
                        "Lengua" => 3,
                        "Historia" => 10,
                        "Educación Física" => 6,
                        "Inglés" => 10,
                        "Matemáticas" => 9,
                        "Música" => 9,
                        "Ciencias" => 8,
                        "Tecnología" => 9,
                    ]
                ],
                [
                    "nombre" => "Vega",
                    "notas" => [
                        "Lengua" => 3,
                        "Historia" => 1,
                        "Educación Física" => 7,
                        "Inglés" => 5,
                        "Matemáticas" => 9,
                        "Música" => 3,
                        "Ciencias" => 6,
                        "Tecnología" => 1,
                    ]
                ],
                [
                    "nombre" => "Nora",
                    "notas" => [
                        "Lengua" => 4,
                        "Historia" => 10,
                        "Educación Física" => 8,
                        "Inglés" => 6,
                        "Matemáticas" => 5,
                        "Música" => 4,
                        "Ciencias" => 3,
                        "Tecnología" => 2,
                    ]
                ],
                [
                    "nombre" => "Alejandro",
                    "notas" => [
                        "Lengua" => 7,
                        "Historia" => 4,
                        "Educación Física" => 2,
                        "Inglés" => 9,
                        "Matemáticas" => 3,
                        "Música" => 4,
                        "Ciencias" => 7,
                        "Tecnología" => 9,
                    ]
                ],
                [
                    "nombre" => "Luna",
                    "notas" => [
                        "Lengua" => 1,
                        "Historia" => 1,
                        "Educación Física" => 10,
                        "Inglés" => 8,
                        "Matemáticas" => 3,
                        "Música" => 4,
                        "Ciencias" => 8,
                        "Tecnología" => 1,
                    ]
                ],
                [
                    "nombre" => "Olivia",
                    "notas" => [
                        "Lengua" => 4,
                        "Historia" => 6,
                        "Educación Física" => 5,
                        "Inglés" => 9,
                        "Matemáticas" => 4,
                        "Música" => 1,
                        "Ciencias" => 6,
                        "Tecnología" => 8,
                    ]
                ],
                [
                    "nombre" => "Irene",
                    "notas" => [
                        "Lengua" => 9,
                        "Historia" => 8,
                        "Educación Física" => 2,
                        "Inglés" => 7,
                        "Matemáticas" => 10,
                        "Música" => 3,
                        "Ciencias" => 9,
                        "Tecnología" => 9,
                    ]
                ],
                [
                    "nombre" => "Chloe",
                    "notas" => [
                        "Lengua" => 2,
                        "Historia" => 9,
                        "Educación Física" => 5,
                        "Inglés" => 4,
                        "Matemáticas" => 8,
                        "Música" => 7,
                        "Ciencias" => 4,
                        "Tecnología" => 1,
                    ]
                ],
                [
                    "nombre" => "Juan",
                    "notas" => [
                        "Lengua" => 4,
                        "Historia" => 4,
                        "Educación Física" => 3,
                        "Inglés" => 8,
                        "Matemáticas" => 5,
                        "Música" => 4,
                        "Ciencias" => 2,
                        "Tecnología" => 4,
                    ]
                ],
                [
                    "nombre" => "Claudia",
                    "notas" => [
                        "Lengua" => 9,
                        "Historia" => 3,
                        "Educación Física" => 6,
                        "Inglés" => 10,
                        "Matemáticas" => 8,
                        "Música" => 8,
                        "Ciencias" => 6,
                        "Tecnología" => 2,
                    ]
                ],
                [
                    "nombre" => "Alejandro",
                    "notas" => [
                        "Lengua" => 10,
                        "Historia" => 7,
                        "Educación Física" => 5,
                        "Inglés" => 7,
                        "Matemáticas" => 7,
                        "Música" => 9,
                        "Ciencias" => 7,
                        "Tecnología" => 6,
                    ]
                ],
                [
                    "nombre" => "Valeria",
                    "notas" => [
                        "Lengua" => 5,
                        "Historia" => 4,
                        "Educación Física" => 1,
                        "Inglés" => 3,
                        "Matemáticas" => 1,
                        "Música" => 1,
                        "Ciencias" => 8,
                        "Tecnología" => 3,
                    ]
                ],
                [
                    "nombre" => "Sofía",
                    "notas" => [
                        "Lengua" => 9,
                        "Historia" => 7,
                        "Educación Física" => 10,
                        "Inglés" => 4,
                        "Matemáticas" => 1,
                        "Música" => 3,
                        "Ciencias" => 1,
                        "Tecnología" => 9,
                    ]
                ],
                [
                    "nombre" => "Andrés",
                    "notas" => [
                        "Lengua" => 4,
                        "Historia" => 2,
                        "Educación Física" => 2,
                        "Inglés" => 4,
                        "Matemáticas" => 6,
                        "Música" => 8,
                        "Ciencias" => 1,
                        "Tecnología" => 8,
                    ]
                ],
                [
                    "nombre" => "Sara",
                    "notas" => [
                        "Lengua" => 1,
                        "Historia" => 5,
                        "Educación Física" => 7,
                        "Inglés" => 1,
                        "Matemáticas" => 4,
                        "Música" => 8,
                        "Ciencias" => 8,
                        "Tecnología" => 2,
                    ]
                ],
                [
                    "nombre" => "Valeria",
                    "notas" => [
                        "Lengua" => 3,
                        "Historia" => 5,
                        "Educación Física" => 3,
                        "Inglés" => 7,
                        "Matemáticas" => 3,
                        "Música" => 6,
                        "Ciencias" => 8,
                        "Tecnología" => 4,
                    ]
                ],
                [
                    "nombre" => "Chloe",
                    "notas" => [
                        "Lengua" => 1,
                        "Historia" => 5,
                        "Educación Física" => 5,
                        "Inglés" => 1,
                        "Matemáticas" => 4,
                        "Música" => 3,
                        "Ciencias" => 9,
                        "Tecnología" => 5,
                    ]
                ],
                [
                    "nombre" => "Mateo",
                    "notas" => [
                        "Lengua" => 6,
                        "Historia" => 3,
                        "Educación Física" => 4,
                        "Inglés" => 1,
                        "Matemáticas" => 4,
                        "Música" => 6,
                        "Ciencias" => 2,
                        "Tecnología" => 8,
                    ]
                ],
            ],
            "B" => [
                [
                    "nombre" => "Noa",
                    "notas" => [
                        "Lengua" => 7,
                        "Historia" => 9,
                        "Educación Física" => 4,
                        "Inglés" => 4,
                        "Matemáticas" => 3,
                        "Música" => 6,
                        "Ciencias" => 8,
                        "Tecnología" => 6,
                    ]
                ],
                [
                    "nombre" => "Chloe",
                    "notas" => [
                        "Lengua" => 6,
                        "Historia" => 1,
                        "Educación Física" => 7,
                        "Inglés" => 1,
                        "Matemáticas" => 3,
                        "Música" => 6,
                        "Ciencias" => 4,
                        "Tecnología" => 3,
                    ]
                ],
                [
                    "nombre" => "Alejandro",
                    "notas" => [
                        "Lengua" => 6,
                        "Historia" => 10,
                        "Educación Física" => 6,
                        "Inglés" => 8,
                        "Matemáticas" => 3,
                        "Música" => 1,
                        "Ciencias" => 4,
                        "Tecnología" => 10,
                    ]
                ],
                [
                    "nombre" => "Nora",
                    "notas" => [
                        "Lengua" => 1,
                        "Historia" => 8,
                        "Educación Física" => 8,
                        "Inglés" => 10,
                        "Matemáticas" => 3,
                        "Música" => 1,
                        "Ciencias" => 2,
                        "Tecnología" => 4,
                    ]
                ],
                [
                    "nombre" => "Manuel",
                    "notas" => [
                        "Lengua" => 4,
                        "Historia" => 4,
                        "Educación Física" => 4,
                        "Inglés" => 3,
                        "Matemáticas" => 8,
                        "Música" => 7,
                        "Ciencias" => 6,
                        "Tecnología" => 7,
                    ]
                ],
                [
                    "nombre" => "Chloe",
                    "notas" => [
                        "Lengua" => 5,
                        "Historia" => 4,
                        "Educación Física" => 6,
                        "Inglés" => 2,
                        "Matemáticas" => 1,
                        "Música" => 8,
                        "Ciencias" => 5,
                        "Tecnología" => 6,
                    ]
                ],
                [
                    "nombre" => "Carla",
                    "notas" => [
                        "Lengua" => 7,
                        "Historia" => 9,
                        "Educación Física" => 9,
                        "Inglés" => 6,
                        "Matemáticas" => 1,
                        "Música" => 4,
                        "Ciencias" => 5,
                        "Tecnología" => 2,
                    ]
                ],
                [
                    "nombre" => "Enzo",
                    "notas" => [
                        "Lengua" => 6,
                        "Historia" => 7,
                        "Educación Física" => 4,
                        "Inglés" => 10,
                        "Matemáticas" => 9,
                        "Música" => 4,
                        "Ciencias" => 6,
                        "Tecnología" => 2,
                    ]
                ],
                [
                    "nombre" => "Nora",
                    "notas" => [
                        "Lengua" => 4,
                        "Historia" => 3,
                        "Educación Física" => 6,
                        "Inglés" => 5,
                        "Matemáticas" => 10,
                        "Música" => 1,
                        "Ciencias" => 7,
                        "Tecnología" => 9,
                    ]
                ],
                [
                    "nombre" => "Mateo",
                    "notas" => [
                        "Lengua" => 9,
                        "Historia" => 7,
                        "Educación Física" => 6,
                        "Inglés" => 1,
                        "Matemáticas" => 10,
                        "Música" => 2,
                        "Ciencias" => 10,
                        "Tecnología" => 3,
                    ]
                ],
                [
                    "nombre" => "Luna",
                    "notas" => [
                        "Lengua" => 6,
                        "Historia" => 9,
                        "Educación Física" => 7,
                        "Inglés" => 6,
                        "Matemáticas" => 2,
                        "Música" => 4,
                        "Ciencias" => 6,
                        "Tecnología" => 3,
                    ]
                ],
                [
                    "nombre" => "Gabriel",
                    "notas" => [
                        "Lengua" => 7,
                        "Historia" => 8,
                        "Educación Física" => 2,
                        "Inglés" => 6,
                        "Matemáticas" => 8,
                        "Música" => 1,
                        "Ciencias" => 2,
                        "Tecnología" => 6,
                    ]
                ],
                [
                    "nombre" => "Enzo",
                    "notas" => [
                        "Lengua" => 3,
                        "Historia" => 6,
                        "Educación Física" => 6,
                        "Inglés" => 4,
                        "Matemáticas" => 3,
                        "Música" => 9,
                        "Ciencias" => 10,
                        "Tecnología" => 4,
                    ]
                ],
                [
                    "nombre" => "Pedro",
                    "notas" => [
                        "Lengua" => 2,
                        "Historia" => 4,
                        "Educación Física" => 9,
                        "Inglés" => 5,
                        "Matemáticas" => 7,
                        "Música" => 1,
                        "Ciencias" => 6,
                        "Tecnología" => 4,
                    ]
                ],
                [
                    "nombre" => "Sara",
                    "notas" => [
                        "Lengua" => 8,
                        "Historia" => 2,
                        "Educación Física" => 8,
                        "Inglés" => 2,
                        "Matemáticas" => 8,
                        "Música" => 7,
                        "Ciencias" => 2,
                        "Tecnología" => 9,
                    ]
                ],
                [
                    "nombre" => "Julia",
                    "notas" => [
                        "Lengua" => 9,
                        "Historia" => 6,
                        "Educación Física" => 7,
                        "Inglés" => 4,
                        "Matemáticas" => 3,
                        "Música" => 1,
                        "Ciencias" => 4,
                        "Tecnología" => 3,
                    ]
                ],
                [
                    "nombre" => "Javier",
                    "notas" => [
                        "Lengua" => 2,
                        "Historia" => 2,
                        "Educación Física" => 5,
                        "Inglés" => 5,
                        "Matemáticas" => 7,
                        "Música" => 4,
                        "Ciencias" => 5,
                        "Tecnología" => 5,
                    ]
                ],
                [
                    "nombre" => "Leo",
                    "notas" => [
                        "Lengua" => 7,
                        "Historia" => 3,
                        "Educación Física" => 7,
                        "Inglés" => 5,
                        "Matemáticas" => 7,
                        "Música" => 1,
                        "Ciencias" => 10,
                        "Tecnología" => 7,
                    ]
                ],
                [
                    "nombre" => "Manuel",
                    "notas" => [
                        "Lengua" => 10,
                        "Historia" => 3,
                        "Educación Física" => 1,
                        "Inglés" => 7,
                        "Matemáticas" => 5,
                        "Música" => 4,
                        "Ciencias" => 4,
                        "Tecnología" => 6,
                    ]
                ],
                [
                    "nombre" => "Leo",
                    "notas" => [
                        "Lengua" => 3,
                        "Historia" => 6,
                        "Educación Física" => 1,
                        "Inglés" => 10,
                        "Matemáticas" => 4,
                        "Música" => 5,
                        "Ciencias" => 5,
                        "Tecnología" => 4,
                    ]
                ],
            ],
            "C" => [
                [
                    "nombre" => "Alba",
                    "notas" => [
                        "Lengua" => 5,
                        "Historia" => 9,
                        "Educación Física" => 8,
                        "Inglés" => 2,
                        "Matemáticas" => 10,
                        "Música" => 9,
                        "Ciencias" => 8,
                        "Tecnología" => 3,
                    ]
                ],
                [
                    "nombre" => "Nora",
                    "notas" => [
                        "Lengua" => 5,
                        "Historia" => 2,
                        "Educación Física" => 9,
                        "Inglés" => 8,
                        "Matemáticas" => 9,
                        "Música" => 10,
                        "Ciencias" => 2,
                        "Tecnología" => 7,
                    ]
                ],
                [
                    "nombre" => "Adrián",
                    "notas" => [
                        "Lengua" => 3,
                        "Historia" => 1,
                        "Educación Física" => 5,
                        "Inglés" => 10,
                        "Matemáticas" => 10,
                        "Música" => 7,
                        "Ciencias" => 4,
                        "Tecnología" => 2,
                    ]
                ],
                [
                    "nombre" => "Julia",
                    "notas" => [
                        "Lengua" => 5,
                        "Historia" => 6,
                        "Educación Física" => 7,
                        "Inglés" => 3,
                        "Matemáticas" => 6,
                        "Música" => 1,
                        "Ciencias" => 10,
                        "Tecnología" => 2,
                    ]
                ],
                [
                    "nombre" => "Mario",
                    "notas" => [
                        "Lengua" => 8,
                        "Historia" => 1,
                        "Educación Física" => 9,
                        "Inglés" => 4,
                        "Matemáticas" => 7,
                        "Música" => 8,
                        "Ciencias" => 5,
                        "Tecnología" => 4,
                    ]
                ],
                [
                    "nombre" => "Pedro",
                    "notas" => [
                        "Lengua" => 7,
                        "Historia" => 1,
                        "Educación Física" => 3,
                        "Inglés" => 4,
                        "Matemáticas" => 4,
                        "Música" => 4,
                        "Ciencias" => 3,
                        "Tecnología" => 3,
                    ]
                ],
                [
                    "nombre" => "Mario",
                    "notas" => [
                        "Lengua" => 2,
                        "Historia" => 4,
                        "Educación Física" => 5,
                        "Inglés" => 9,
                        "Matemáticas" => 6,
                        "Música" => 2,
                        "Ciencias" => 10,
                        "Tecnología" => 6,
                    ]
                ],
                [
                    "nombre" => "Carla",
                    "notas" => [
                        "Lengua" => 7,
                        "Historia" => 6,
                        "Educación Física" => 2,
                        "Inglés" => 2,
                        "Matemáticas" => 10,
                        "Música" => 9,
                        "Ciencias" => 7,
                        "Tecnología" => 8,
                    ]
                ],
                [
                    "nombre" => "Sofía",
                    "notas" => [
                        "Lengua" => 3,
                        "Historia" => 2,
                        "Educación Física" => 1,
                        "Inglés" => 4,
                        "Matemáticas" => 7,
                        "Música" => 10,
                        "Ciencias" => 5,
                        "Tecnología" => 4,
                    ]
                ],
                [
                    "nombre" => "Nora",
                    "notas" => [
                        "Lengua" => 7,
                        "Historia" => 7,
                        "Educación Física" => 10,
                        "Inglés" => 4,
                        "Matemáticas" => 4,
                        "Música" => 10,
                        "Ciencias" => 5,
                        "Tecnología" => 5,
                    ]
                ],
                [
                    "nombre" => "Paula",
                    "notas" => [
                        "Lengua" => 6,
                        "Historia" => 10,
                        "Educación Física" => 10,
                        "Inglés" => 3,
                        "Matemáticas" => 7,
                        "Música" => 6,
                        "Ciencias" => 10,
                        "Tecnología" => 9,
                    ]
                ],
                [
                    "nombre" => "Mateo",
                    "notas" => [
                        "Lengua" => 9,
                        "Historia" => 7,
                        "Educación Física" => 5,
                        "Inglés" => 5,
                        "Matemáticas" => 7,
                        "Música" => 6,
                        "Ciencias" => 8,
                        "Tecnología" => 2,
                    ]
                ],
                [
                    "nombre" => "Noa",
                    "notas" => [
                        "Lengua" => 2,
                        "Historia" => 5,
                        "Educación Física" => 5,
                        "Inglés" => 5,
                        "Matemáticas" => 9,
                        "Música" => 10,
                        "Ciencias" => 1,
                        "Tecnología" => 2,
                    ]
                ],
                [
                    "nombre" => "Irene",
                    "notas" => [
                        "Lengua" => 6,
                        "Historia" => 4,
                        "Educación Física" => 3,
                        "Inglés" => 4,
                        "Matemáticas" => 7,
                        "Música" => 7,
                        "Ciencias" => 3,
                        "Tecnología" => 4,
                    ]
                ],
                [
                    "nombre" => "Nora",
                    "notas" => [
                        "Lengua" => 3,
                        "Historia" => 10,
                        "Educación Física" => 3,
                        "Inglés" => 9,
                        "Matemáticas" => 8,
                        "Música" => 7,
                        "Ciencias" => 8,
                        "Tecnología" => 10,
                    ]
                ],
                [
                    "nombre" => "Sara",
                    "notas" => [
                        "Lengua" => 2,
                        "Historia" => 4,
                        "Educación Física" => 3,
                        "Inglés" => 9,
                        "Matemáticas" => 10,
                        "Música" => 8,
                        "Ciencias" => 5,
                        "Tecnología" => 9,
                    ]
                ],
                [
                    "nombre" => "Diego",
                    "notas" => [
                        "Lengua" => 9,
                        "Historia" => 10,
                        "Educación Física" => 9,
                        "Inglés" => 10,
                        "Matemáticas" => 1,
                        "Música" => 2,
                        "Ciencias" => 5,
                        "Tecnología" => 7,
                    ]
                ],
                [
                    "nombre" => "Luna",
                    "notas" => [
                        "Lengua" => 10,
                        "Historia" => 10,
                        "Educación Física" => 10,
                        "Inglés" => 8,
                        "Matemáticas" => 8,
                        "Música" => 2,
                        "Ciencias" => 6,
                        "Tecnología" => 8,
                    ]
                ],
                [
                    "nombre" => "Mario",
                    "notas" => [
                        "Lengua" => 4,
                        "Historia" => 10,
                        "Educación Física" => 1,
                        "Inglés" => 2,
                        "Matemáticas" => 10,
                        "Música" => 3,
                        "Ciencias" => 6,
                        "Tecnología" => 9,
                    ]
                ],
                [
                    "nombre" => "Pablo",
                    "notas" => [
                        "Lengua" => 10,
                        "Historia" => 3,
                        "Educación Física" => 6,
                        "Inglés" => 6,
                        "Matemáticas" => 1,
                        "Música" => 10,
                        "Ciencias" => 6,
                        "Tecnología" => 1,
                    ]
                ],
            ],
        ],
        "Sexto" => [
            "A" => [
                [
                    "nombre" => "Mario",
                    "notas" => [
                        "Lengua" => 9,
                        "Historia" => 10,
                        "Educación Física" => 5,
                        "Inglés" => 1,
                        "Matemáticas" => 4,
                        "Música" => 9,
                        "Ciencias" => 10,
                        "Tecnología" => 6,
                    ]
                ],
                [
                    "nombre" => "Alejandro",
                    "notas" => [
                        "Lengua" => 1,
                        "Historia" => 2,
                        "Educación Física" => 6,
                        "Inglés" => 3,
                        "Matemáticas" => 5,
                        "Música" => 2,
                        "Ciencias" => 9,
                        "Tecnología" => 10,
                    ]
                ],
                [
                    "nombre" => "Andrés",
                    "notas" => [
                        "Lengua" => 1,
                        "Historia" => 10,
                        "Educación Física" => 6,
                        "Inglés" => 10,
                        "Matemáticas" => 2,
                        "Música" => 2,
                        "Ciencias" => 8,
                        "Tecnología" => 1,
                    ]
                ],
                [
                    "nombre" => "Paula",
                    "notas" => [
                        "Lengua" => 3,
                        "Historia" => 3,
                        "Educación Física" => 1,
                        "Inglés" => 4,
                        "Matemáticas" => 3,
                        "Música" => 10,
                        "Ciencias" => 9,
                        "Tecnología" => 4,
                    ]
                ],
                [
                    "nombre" => "Antonio",
                    "notas" => [
                        "Lengua" => 3,
                        "Historia" => 2,
                        "Educación Física" => 6,
                        "Inglés" => 10,
                        "Matemáticas" => 9,
                        "Música" => 9,
                        "Ciencias" => 10,
                        "Tecnología" => 3,
                    ]
                ],
                [
                    "nombre" => "Álvaro",
                    "notas" => [
                        "Lengua" => 4,
                        "Historia" => 10,
                        "Educación Física" => 8,
                        "Inglés" => 4,
                        "Matemáticas" => 8,
                        "Música" => 7,
                        "Ciencias" => 8,
                        "Tecnología" => 6,
                    ]
                ],
                [
                    "nombre" => "Juan",
                    "notas" => [
                        "Lengua" => 6,
                        "Historia" => 7,
                        "Educación Física" => 6,
                        "Inglés" => 9,
                        "Matemáticas" => 1,
                        "Música" => 4,
                        "Ciencias" => 2,
                        "Tecnología" => 7,
                    ]
                ],
                [
                    "nombre" => "Carla",
                    "notas" => [
                        "Lengua" => 5,
                        "Historia" => 2,
                        "Educación Física" => 9,
                        "Inglés" => 5,
                        "Matemáticas" => 7,
                        "Música" => 6,
                        "Ciencias" => 3,
                        "Tecnología" => 6,
                    ]
                ],
                [
                    "nombre" => "Pablo",
                    "notas" => [
                        "Lengua" => 9,
                        "Historia" => 9,
                        "Educación Física" => 2,
                        "Inglés" => 4,
                        "Matemáticas" => 10,
                        "Música" => 1,
                        "Ciencias" => 8,
                        "Tecnología" => 10,
                    ]
                ],
                [
                    "nombre" => "Vega",
                    "notas" => [
                        "Lengua" => 3,
                        "Historia" => 6,
                        "Educación Física" => 8,
                        "Inglés" => 9,
                        "Matemáticas" => 6,
                        "Música" => 9,
                        "Ciencias" => 1,
                        "Tecnología" => 3,
                    ]
                ],
                [
                    "nombre" => "Isabel",
                    "notas" => [
                        "Lengua" => 7,
                        "Historia" => 10,
                        "Educación Física" => 5,
                        "Inglés" => 5,
                        "Matemáticas" => 7,
                        "Música" => 10,
                        "Ciencias" => 4,
                        "Tecnología" => 1,
                    ]
                ],
                [
                    "nombre" => "Sara",
                    "notas" => [
                        "Lengua" => 9,
                        "Historia" => 5,
                        "Educación Física" => 6,
                        "Inglés" => 9,
                        "Matemáticas" => 10,
                        "Música" => 8,
                        "Ciencias" => 3,
                        "Tecnología" => 10,
                    ]
                ],
                [
                    "nombre" => "Noa",
                    "notas" => [
                        "Lengua" => 6,
                        "Historia" => 3,
                        "Educación Física" => 6,
                        "Inglés" => 2,
                        "Matemáticas" => 1,
                        "Música" => 10,
                        "Ciencias" => 2,
                        "Tecnología" => 5,
                    ]
                ],
                [
                    "nombre" => "Alba",
                    "notas" => [
                        "Lengua" => 4,
                        "Historia" => 6,
                        "Educación Física" => 10,
                        "Inglés" => 4,
                        "Matemáticas" => 6,
                        "Música" => 2,
                        "Ciencias" => 3,
                        "Tecnología" => 5,
                    ]
                ],
                [
                    "nombre" => "Olivia",
                    "notas" => [
                        "Lengua" => 3,
                        "Historia" => 1,
                        "Educación Física" => 4,
                        "Inglés" => 10,
                        "Matemáticas" => 3,
                        "Música" => 8,
                        "Ciencias" => 9,
                        "Tecnología" => 7,
                    ]
                ],
                [
                    "nombre" => "Carla",
                    "notas" => [
                        "Lengua" => 9,
                        "Historia" => 10,
                        "Educación Física" => 7,
                        "Inglés" => 4,
                        "Matemáticas" => 10,
                        "Música" => 7,
                        "Ciencias" => 8,
                        "Tecnología" => 10,
                    ]
                ],
                [
                    "nombre" => "David",
                    "notas" => [
                        "Lengua" => 6,
                        "Historia" => 10,
                        "Educación Física" => 2,
                        "Inglés" => 4,
                        "Matemáticas" => 3,
                        "Música" => 7,
                        "Ciencias" => 6,
                        "Tecnología" => 3,
                    ]
                ],
                [
                    "nombre" => "Juan",
                    "notas" => [
                        "Lengua" => 1,
                        "Historia" => 4,
                        "Educación Física" => 7,
                        "Inglés" => 5,
                        "Matemáticas" => 4,
                        "Música" => 3,
                        "Ciencias" => 9,
                        "Tecnología" => 8,
                    ]
                ],
                [
                    "nombre" => "Claudia",
                    "notas" => [
                        "Lengua" => 8,
                        "Historia" => 5,
                        "Educación Física" => 5,
                        "Inglés" => 1,
                        "Matemáticas" => 10,
                        "Música" => 7,
                        "Ciencias" => 6,
                        "Tecnología" => 4,
                    ]
                ],
                [
                    "nombre" => "Mateo",
                    "notas" => [
                        "Lengua" => 9,
                        "Historia" => 5,
                        "Educación Física" => 8,
                        "Inglés" => 1,
                        "Matemáticas" => 10,
                        "Música" => 6,
                        "Ciencias" => 6,
                        "Tecnología" => 1,
                    ]
                ],
            ],
            "B" => [
                [
                    "nombre" => "Enzo",
                    "notas" => [
                        "Lengua" => 9,
                        "Historia" => 3,
                        "Educación Física" => 1,
                        "Inglés" => 1,
                        "Matemáticas" => 10,
                        "Música" => 1,
                        "Ciencias" => 4,
                        "Tecnología" => 5,
                    ]
                ],
                [
                    "nombre" => "Carla",
                    "notas" => [
                        "Lengua" => 3,
                        "Historia" => 6,
                        "Educación Física" => 2,
                        "Inglés" => 4,
                        "Matemáticas" => 6,
                        "Música" => 8,
                        "Ciencias" => 9,
                        "Tecnología" => 2,
                    ]
                ],
                [
                    "nombre" => "Martina",
                    "notas" => [
                        "Lengua" => 9,
                        "Historia" => 2,
                        "Educación Física" => 7,
                        "Inglés" => 7,
                        "Matemáticas" => 9,
                        "Música" => 3,
                        "Ciencias" => 8,
                        "Tecnología" => 5,
                    ]
                ],
                [
                    "nombre" => "Pedro",
                    "notas" => [
                        "Lengua" => 5,
                        "Historia" => 10,
                        "Educación Física" => 2,
                        "Inglés" => 6,
                        "Matemáticas" => 6,
                        "Música" => 10,
                        "Ciencias" => 8,
                        "Tecnología" => 7,
                    ]
                ],
                [
                    "nombre" => "Javier",
                    "notas" => [
                        "Lengua" => 10,
                        "Historia" => 3,
                        "Educación Física" => 2,
                        "Inglés" => 10,
                        "Matemáticas" => 1,
                        "Música" => 4,
                        "Ciencias" => 9,
                        "Tecnología" => 6,
                    ]
                ],
                [
                    "nombre" => "Julia",
                    "notas" => [
                        "Lengua" => 4,
                        "Historia" => 1,
                        "Educación Física" => 7,
                        "Inglés" => 4,
                        "Matemáticas" => 9,
                        "Música" => 9,
                        "Ciencias" => 3,
                        "Tecnología" => 4,
                    ]
                ],
                [
                    "nombre" => "Luna",
                    "notas" => [
                        "Lengua" => 2,
                        "Historia" => 6,
                        "Educación Física" => 4,
                        "Inglés" => 5,
                        "Matemáticas" => 4,
                        "Música" => 7,
                        "Ciencias" => 4,
                        "Tecnología" => 4,
                    ]
                ],
                [
                    "nombre" => "Pablo",
                    "notas" => [
                        "Lengua" => 10,
                        "Historia" => 9,
                        "Educación Física" => 9,
                        "Inglés" => 7,
                        "Matemáticas" => 10,
                        "Música" => 4,
                        "Ciencias" => 5,
                        "Tecnología" => 4,
                    ]
                ],
                [
                    "nombre" => "Lucas",
                    "notas" => [
                        "Lengua" => 7,
                        "Historia" => 2,
                        "Educación Física" => 1,
                        "Inglés" => 10,
                        "Matemáticas" => 5,
                        "Música" => 4,
                        "Ciencias" => 8,
                        "Tecnología" => 9,
                    ]
                ],
                [
                    "nombre" => "Sofía",
                    "notas" => [
                        "Lengua" => 8,
                        "Historia" => 7,
                        "Educación Física" => 5,
                        "Inglés" => 8,
                        "Matemáticas" => 2,
                        "Música" => 4,
                        "Ciencias" => 6,
                        "Tecnología" => 8,
                    ]
                ],
                [
                    "nombre" => "Irene",
                    "notas" => [
                        "Lengua" => 7,
                        "Historia" => 9,
                        "Educación Física" => 7,
                        "Inglés" => 5,
                        "Matemáticas" => 5,
                        "Música" => 5,
                        "Ciencias" => 1,
                        "Tecnología" => 8,
                    ]
                ],
                [
                    "nombre" => "Emma",
                    "notas" => [
                        "Lengua" => 3,
                        "Historia" => 5,
                        "Educación Física" => 9,
                        "Inglés" => 7,
                        "Matemáticas" => 6,
                        "Música" => 10,
                        "Ciencias" => 4,
                        "Tecnología" => 7,
                    ]
                ],
                [
                    "nombre" => "Enzo",
                    "notas" => [
                        "Lengua" => 9,
                        "Historia" => 7,
                        "Educación Física" => 3,
                        "Inglés" => 2,
                        "Matemáticas" => 8,
                        "Música" => 6,
                        "Ciencias" => 8,
                        "Tecnología" => 5,
                    ]
                ],
                [
                    "nombre" => "Mía",
                    "notas" => [
                        "Lengua" => 6,
                        "Historia" => 2,
                        "Educación Física" => 7,
                        "Inglés" => 5,
                        "Matemáticas" => 6,
                        "Música" => 8,
                        "Ciencias" => 5,
                        "Tecnología" => 8,
                    ]
                ],
                [
                    "nombre" => "Irene",
                    "notas" => [
                        "Lengua" => 7,
                        "Historia" => 4,
                        "Educación Física" => 4,
                        "Inglés" => 2,
                        "Matemáticas" => 10,
                        "Música" => 9,
                        "Ciencias" => 7,
                        "Tecnología" => 2,
                    ]
                ],
                [
                    "nombre" => "Javier",
                    "notas" => [
                        "Lengua" => 2,
                        "Historia" => 5,
                        "Educación Física" => 4,
                        "Inglés" => 5,
                        "Matemáticas" => 5,
                        "Música" => 10,
                        "Ciencias" => 2,
                        "Tecnología" => 5,
                    ]
                ],
                [
                    "nombre" => "Pablo",
                    "notas" => [
                        "Lengua" => 2,
                        "Historia" => 7,
                        "Educación Física" => 3,
                        "Inglés" => 6,
                        "Matemáticas" => 10,
                        "Música" => 1,
                        "Ciencias" => 3,
                        "Tecnología" => 5,
                    ]
                ],
                [
                    "nombre" => "Daniel",
                    "notas" => [
                        "Lengua" => 8,
                        "Historia" => 7,
                        "Educación Física" => 1,
                        "Inglés" => 1,
                        "Matemáticas" => 10,
                        "Música" => 3,
                        "Ciencias" => 5,
                        "Tecnología" => 4,
                    ]
                ],
                [
                    "nombre" => "David",
                    "notas" => [
                        "Lengua" => 10,
                        "Historia" => 4,
                        "Educación Física" => 5,
                        "Inglés" => 2,
                        "Matemáticas" => 8,
                        "Música" => 7,
                        "Ciencias" => 9,
                        "Tecnología" => 8,
                    ]
                ],
                [
                    "nombre" => "Martina",
                    "notas" => [
                        "Lengua" => 4,
                        "Historia" => 1,
                        "Educación Física" => 4,
                        "Inglés" => 7,
                        "Matemáticas" => 2,
                        "Música" => 2,
                        "Ciencias" => 4,
                        "Tecnología" => 10,
                    ]
                ],
            ],
            "C" => [
                [
                    "nombre" => "Andrés",
                    "notas" => [
                        "Lengua" => 4,
                        "Historia" => 1,
                        "Educación Física" => 10,
                        "Inglés" => 1,
                        "Matemáticas" => 10,
                        "Música" => 8,
                        "Ciencias" => 4,
                        "Tecnología" => 10,
                    ]
                ],
                [
                    "nombre" => "Luna",
                    "notas" => [
                        "Lengua" => 3,
                        "Historia" => 2,
                        "Educación Física" => 6,
                        "Inglés" => 7,
                        "Matemáticas" => 7,
                        "Música" => 9,
                        "Ciencias" => 1,
                        "Tecnología" => 8,
                    ]
                ],
                [
                    "nombre" => "Noa",
                    "notas" => [
                        "Lengua" => 4,
                        "Historia" => 10,
                        "Educación Física" => 3,
                        "Inglés" => 1,
                        "Matemáticas" => 3,
                        "Música" => 7,
                        "Ciencias" => 2,
                        "Tecnología" => 6,
                    ]
                ],
                [
                    "nombre" => "Diego",
                    "notas" => [
                        "Lengua" => 10,
                        "Historia" => 2,
                        "Educación Física" => 2,
                        "Inglés" => 6,
                        "Matemáticas" => 2,
                        "Música" => 1,
                        "Ciencias" => 3,
                        "Tecnología" => 2,
                    ]
                ],
                [
                    "nombre" => "Álvaro",
                    "notas" => [
                        "Lengua" => 2,
                        "Historia" => 2,
                        "Educación Física" => 5,
                        "Inglés" => 5,
                        "Matemáticas" => 9,
                        "Música" => 5,
                        "Ciencias" => 2,
                        "Tecnología" => 2,
                    ]
                ],
                [
                    "nombre" => "Gabriel",
                    "notas" => [
                        "Lengua" => 1,
                        "Historia" => 7,
                        "Educación Física" => 7,
                        "Inglés" => 6,
                        "Matemáticas" => 4,
                        "Música" => 4,
                        "Ciencias" => 2,
                        "Tecnología" => 7,
                    ]
                ],
                [
                    "nombre" => "Mía",
                    "notas" => [
                        "Lengua" => 10,
                        "Historia" => 1,
                        "Educación Física" => 2,
                        "Inglés" => 10,
                        "Matemáticas" => 10,
                        "Música" => 4,
                        "Ciencias" => 6,
                        "Tecnología" => 6,
                    ]
                ],
                [
                    "nombre" => "Paula",
                    "notas" => [
                        "Lengua" => 1,
                        "Historia" => 4,
                        "Educación Física" => 9,
                        "Inglés" => 6,
                        "Matemáticas" => 3,
                        "Música" => 7,
                        "Ciencias" => 5,
                        "Tecnología" => 7,
                    ]
                ],
                [
                    "nombre" => "Mía",
                    "notas" => [
                        "Lengua" => 5,
                        "Historia" => 4,
                        "Educación Física" => 2,
                        "Inglés" => 3,
                        "Matemáticas" => 5,
                        "Música" => 1,
                        "Ciencias" => 7,
                        "Tecnología" => 9,
                    ]
                ],
                [
                    "nombre" => "Alba",
                    "notas" => [
                        "Lengua" => 10,
                        "Historia" => 10,
                        "Educación Física" => 9,
                        "Inglés" => 3,
                        "Matemáticas" => 7,
                        "Música" => 6,
                        "Ciencias" => 5,
                        "Tecnología" => 1,
                    ]
                ],
                [
                    "nombre" => "Pedro",
                    "notas" => [
                        "Lengua" => 6,
                        "Historia" => 3,
                        "Educación Física" => 2,
                        "Inglés" => 4,
                        "Matemáticas" => 8,
                        "Música" => 6,
                        "Ciencias" => 9,
                        "Tecnología" => 10,
                    ]
                ],
                [
                    "nombre" => "Mario",
                    "notas" => [
                        "Lengua" => 3,
                        "Historia" => 1,
                        "Educación Física" => 3,
                        "Inglés" => 4,
                        "Matemáticas" => 7,
                        "Música" => 6,
                        "Ciencias" => 7,
                        "Tecnología" => 2,
                    ]
                ],
                [
                    "nombre" => "Andrés",
                    "notas" => [
                        "Lengua" => 2,
                        "Historia" => 4,
                        "Educación Física" => 9,
                        "Inglés" => 1,
                        "Matemáticas" => 6,
                        "Música" => 6,
                        "Ciencias" => 5,
                        "Tecnología" => 9,
                    ]
                ],
                [
                    "nombre" => "Enzo",
                    "notas" => [
                        "Lengua" => 5,
                        "Historia" => 9,
                        "Educación Física" => 5,
                        "Inglés" => 5,
                        "Matemáticas" => 4,
                        "Música" => 9,
                        "Ciencias" => 10,
                        "Tecnología" => 6,
                    ]
                ],
                [
                    "nombre" => "Manuel",
                    "notas" => [
                        "Lengua" => 2,
                        "Historia" => 9,
                        "Educación Física" => 10,
                        "Inglés" => 10,
                        "Matemáticas" => 6,
                        "Música" => 10,
                        "Ciencias" => 1,
                        "Tecnología" => 10,
                    ]
                ],
                [
                    "nombre" => "Pedro",
                    "notas" => [
                        "Lengua" => 5,
                        "Historia" => 10,
                        "Educación Física" => 9,
                        "Inglés" => 1,
                        "Matemáticas" => 2,
                        "Música" => 3,
                        "Ciencias" => 5,
                        "Tecnología" => 1,
                    ]
                ],
                [
                    "nombre" => "Javier",
                    "notas" => [
                        "Lengua" => 10,
                        "Historia" => 9,
                        "Educación Física" => 1,
                        "Inglés" => 1,
                        "Matemáticas" => 6,
                        "Música" => 1,
                        "Ciencias" => 4,
                        "Tecnología" => 1,
                    ]
                ],
                [
                    "nombre" => "Gabriel",
                    "notas" => [
                        "Lengua" => 10,
                        "Historia" => 4,
                        "Educación Física" => 9,
                        "Inglés" => 4,
                        "Matemáticas" => 7,
                        "Música" => 1,
                        "Ciencias" => 6,
                        "Tecnología" => 8,
                    ]
                ],
                [
                    "nombre" => "Olivia",
                    "notas" => [
                        "Lengua" => 8,
                        "Historia" => 7,
                        "Educación Física" => 5,
                        "Inglés" => 2,
                        "Matemáticas" => 8,
                        "Música" => 3,
                        "Ciencias" => 2,
                        "Tecnología" => 9,
                    ]
                ],
                [
                    "nombre" => "Martina",
                    "notas" => [
                        "Lengua" => 5,
                        "Historia" => 2,
                        "Educación Física" => 4,
                        "Inglés" => 9,
                        "Matemáticas" => 3,
                        "Música" => 4,
                        "Ciencias" => 6,
                        "Tecnología" => 10,
                    ]
                ],
            ],
        ],
    ],
    "Centro Sur" => [
        "Primero" => [
            "A" => [
                [
                    "nombre" => "Mateo",
                    "notas" => [
                        "Lengua" => 9,
                        "Historia" => 8,
                        "Educación Física" => 1,
                        "Inglés" => 3,
                        "Matemáticas" => 5,
                        "Música" => 4,
                        "Ciencias" => 8,
                        "Tecnología" => 3,
                    ]
                ],
                [
                    "nombre" => "Noa",
                    "notas" => [
                        "Lengua" => 9,
                        "Historia" => 5,
                        "Educación Física" => 10,
                        "Inglés" => 7,
                        "Matemáticas" => 9,
                        "Música" => 10,
                        "Ciencias" => 1,
                        "Tecnología" => 10,
                    ]
                ],
                [
                    "nombre" => "Martina",
                    "notas" => [
                        "Lengua" => 4,
                        "Historia" => 5,
                        "Educación Física" => 4,
                        "Inglés" => 7,
                        "Matemáticas" => 1,
                        "Música" => 2,
                        "Ciencias" => 3,
                        "Tecnología" => 2,
                    ]
                ],
                [
                    "nombre" => "Alejandro",
                    "notas" => [
                        "Lengua" => 7,
                        "Historia" => 3,
                        "Educación Física" => 3,
                        "Inglés" => 10,
                        "Matemáticas" => 5,
                        "Música" => 2,
                        "Ciencias" => 9,
                        "Tecnología" => 7,
                    ]
                ],
                [
                    "nombre" => "Martina",
                    "notas" => [
                        "Lengua" => 5,
                        "Historia" => 1,
                        "Educación Física" => 9,
                        "Inglés" => 3,
                        "Matemáticas" => 9,
                        "Música" => 9,
                        "Ciencias" => 10,
                        "Tecnología" => 1,
                    ]
                ],
                [
                    "nombre" => "Hugo",
                    "notas" => [
                        "Lengua" => 8,
                        "Historia" => 7,
                        "Educación Física" => 6,
                        "Inglés" => 3,
                        "Matemáticas" => 10,
                        "Música" => 1,
                        "Ciencias" => 9,
                        "Tecnología" => 3,
                    ]
                ],
                [
                    "nombre" => "Valeria",
                    "notas" => [
                        "Lengua" => 3,
                        "Historia" => 8,
                        "Educación Física" => 5,
                        "Inglés" => 4,
                        "Matemáticas" => 1,
                        "Música" => 1,
                        "Ciencias" => 2,
                        "Tecnología" => 7,
                    ]
                ],
                [
                    "nombre" => "Irene",
                    "notas" => [
                        "Lengua" => 6,
                        "Historia" => 3,
                        "Educación Física" => 3,
                        "Inglés" => 1,
                        "Matemáticas" => 9,
                        "Música" => 3,
                        "Ciencias" => 1,
                        "Tecnología" => 10,
                    ]
                ],
                [
                    "nombre" => "Juan",
                    "notas" => [
                        "Lengua" => 4,
                        "Historia" => 2,
                        "Educación Física" => 7,
                        "Inglés" => 3,
                        "Matemáticas" => 1,
                        "Música" => 8,
                        "Ciencias" => 7,
                        "Tecnología" => 8,
                    ]
                ],
                [
                    "nombre" => "Gabriel",
                    "notas" => [
                        "Lengua" => 5,
                        "Historia" => 9,
                        "Educación Física" => 9,
                        "Inglés" => 6,
                        "Matemáticas" => 3,
                        "Música" => 3,
                        "Ciencias" => 6,
                        "Tecnología" => 5,
                    ]
                ],
                [
                    "nombre" => "Pablo",
                    "notas" => [
                        "Lengua" => 7,
                        "Historia" => 5,
                        "Educación Física" => 5,
                        "Inglés" => 10,
                        "Matemáticas" => 7,
                        "Música" => 9,
                        "Ciencias" => 1,
                        "Tecnología" => 1,
                    ]
                ],
                [
                    "nombre" => "Juan",
                    "notas" => [
                        "Lengua" => 1,
                        "Historia" => 1,
                        "Educación Física" => 9,
                        "Inglés" => 4,
                        "Matemáticas" => 4,
                        "Música" => 6,
                        "Ciencias" => 10,
                        "Tecnología" => 1,
                    ]
                ],
                [
                    "nombre" => "David",
                    "notas" => [
                        "Lengua" => 7,
                        "Historia" => 7,
                        "Educación Física" => 7,
                        "Inglés" => 3,
                        "Matemáticas" => 10,
                        "Música" => 5,
                        "Ciencias" => 3,
                        "Tecnología" => 3,
                    ]
                ],
                [
                    "nombre" => "Mateo",
                    "notas" => [
                        "Lengua" => 2,
                        "Historia" => 1,
                        "Educación Física" => 6,
                        "Inglés" => 7,
                        "Matemáticas" => 7,
                        "Música" => 10,
                        "Ciencias" => 5,
                        "Tecnología" => 10,
                    ]
                ],
                [
                    "nombre" => "Álvaro",
                    "notas" => [
                        "Lengua" => 5,
                        "Historia" => 5,
                        "Educación Física" => 5,
                        "Inglés" => 5,
                        "Matemáticas" => 3,
                        "Música" => 1,
                        "Ciencias" => 9,
                        "Tecnología" => 9,
                    ]
                ],
                [
                    "nombre" => "Antonio",
                    "notas" => [
                        "Lengua" => 1,
                        "Historia" => 4,
                        "Educación Física" => 6,
                        "Inglés" => 3,
                        "Matemáticas" => 2,
                        "Música" => 4,
                        "Ciencias" => 8,
                        "Tecnología" => 4,
                    ]
                ],
                [
                    "nombre" => "Leo",
                    "notas" => [
                        "Lengua" => 6,
                        "Historia" => 1,
                        "Educación Física" => 1,
                        "Inglés" => 8,
                        "Matemáticas" => 6,
                        "Música" => 7,
                        "Ciencias" => 8,
                        "Tecnología" => 5,
                    ]
                ],
                [
                    "nombre" => "Emma",
                    "notas" => [
                        "Lengua" => 10,
                        "Historia" => 1,
                        "Educación Física" => 6,
                        "Inglés" => 5,
                        "Matemáticas" => 4,
                        "Música" => 5,
                        "Ciencias" => 6,
                        "Tecnología" => 8,
                    ]
                ],
                [
                    "nombre" => "Pedro",
                    "notas" => [
                        "Lengua" => 10,
                        "Historia" => 2,
                        "Educación Física" => 1,
                        "Inglés" => 10,
                        "Matemáticas" => 10,
                        "Música" => 5,
                        "Ciencias" => 1,
                        "Tecnología" => 1,
                    ]
                ],
                [
                    "nombre" => "Adrián",
                    "notas" => [
                        "Lengua" => 9,
                        "Historia" => 6,
                        "Educación Física" => 1,
                        "Inglés" => 7,
                        "Matemáticas" => 2,
                        "Música" => 6,
                        "Ciencias" => 10,
                        "Tecnología" => 6,
                    ]
                ],
            ],
            "B" => [
                [
                    "nombre" => "Olivia",
                    "notas" => [
                        "Lengua" => 4,
                        "Historia" => 3,
                        "Educación Física" => 3,
                        "Inglés" => 5,
                        "Matemáticas" => 1,
                        "Música" => 9,
                        "Ciencias" => 6,
                        "Tecnología" => 1,
                    ]
                ],
                [
                    "nombre" => "Alejandro",
                    "notas" => [
                        "Lengua" => 5,
                        "Historia" => 2,
                        "Educación Física" => 9,
                        "Inglés" => 6,
                        "Matemáticas" => 10,
                        "Música" => 4,
                        "Ciencias" => 1,
                        "Tecnología" => 3,
                    ]
                ],
                [
                    "nombre" => "Javier",
                    "notas" => [
                        "Lengua" => 6,
                        "Historia" => 8,
                        "Educación Física" => 2,
                        "Inglés" => 9,
                        "Matemáticas" => 3,
                        "Música" => 1,
                        "Ciencias" => 8,
                        "Tecnología" => 2,
                    ]
                ],
                [
                    "nombre" => "Emma",
                    "notas" => [
                        "Lengua" => 10,
                        "Historia" => 6,
                        "Educación Física" => 1,
                        "Inglés" => 4,
                        "Matemáticas" => 7,
                        "Música" => 1,
                        "Ciencias" => 9,
                        "Tecnología" => 9,
                    ]
                ],
                [
                    "nombre" => "Sara",
                    "notas" => [
                        "Lengua" => 2,
                        "Historia" => 6,
                        "Educación Física" => 8,
                        "Inglés" => 8,
                        "Matemáticas" => 8,
                        "Música" => 10,
                        "Ciencias" => 1,
                        "Tecnología" => 1,
                    ]
                ],
                [
                    "nombre" => "Carmen",
                    "notas" => [
                        "Lengua" => 1,
                        "Historia" => 8,
                        "Educación Física" => 1,
                        "Inglés" => 2,
                        "Matemáticas" => 9,
                        "Música" => 7,
                        "Ciencias" => 4,
                        "Tecnología" => 6,
                    ]
                ],
                [
                    "nombre" => "Julia",
                    "notas" => [
                        "Lengua" => 10,
                        "Historia" => 6,
                        "Educación Física" => 2,
                        "Inglés" => 1,
                        "Matemáticas" => 4,
                        "Música" => 4,
                        "Ciencias" => 2,
                        "Tecnología" => 2,
                    ]
                ],
                [
                    "nombre" => "Antonio",
                    "notas" => [
                        "Lengua" => 5,
                        "Historia" => 8,
                        "Educación Física" => 6,
                        "Inglés" => 4,
                        "Matemáticas" => 10,
                        "Música" => 3,
                        "Ciencias" => 7,
                        "Tecnología" => 10,
                    ]
                ],
                [
                    "nombre" => "Alba",
                    "notas" => [
                        "Lengua" => 5,
                        "Historia" => 2,
                        "Educación Física" => 6,
                        "Inglés" => 7,
                        "Matemáticas" => 10,
                        "Música" => 9,
                        "Ciencias" => 9,
                        "Tecnología" => 7,
                    ]
                ],
                [
                    "nombre" => "Adrián",
                    "notas" => [
                        "Lengua" => 5,
                        "Historia" => 7,
                        "Educación Física" => 2,
                        "Inglés" => 6,
                        "Matemáticas" => 2,
                        "Música" => 7,
                        "Ciencias" => 4,
                        "Tecnología" => 4,
                    ]
                ],
                [
                    "nombre" => "Emma",
                    "notas" => [
                        "Lengua" => 10,
                        "Historia" => 6,
                        "Educación Física" => 4,
                        "Inglés" => 7,
                        "Matemáticas" => 8,
                        "Música" => 1,
                        "Ciencias" => 6,
                        "Tecnología" => 3,
                    ]
                ],
                [
                    "nombre" => "Sara",
                    "notas" => [
                        "Lengua" => 3,
                        "Historia" => 4,
                        "Educación Física" => 7,
                        "Inglés" => 6,
                        "Matemáticas" => 8,
                        "Música" => 10,
                        "Ciencias" => 3,
                        "Tecnología" => 3,
                    ]
                ],
                [
                    "nombre" => "Mía",
                    "notas" => [
                        "Lengua" => 2,
                        "Historia" => 2,
                        "Educación Física" => 6,
                        "Inglés" => 8,
                        "Matemáticas" => 2,
                        "Música" => 8,
                        "Ciencias" => 4,
                        "Tecnología" => 7,
                    ]
                ],
                [
                    "nombre" => "Hugo",
                    "notas" => [
                        "Lengua" => 5,
                        "Historia" => 9,
                        "Educación Física" => 3,
                        "Inglés" => 10,
                        "Matemáticas" => 10,
                        "Música" => 7,
                        "Ciencias" => 4,
                        "Tecnología" => 6,
                    ]
                ],
                [
                    "nombre" => "Nora",
                    "notas" => [
                        "Lengua" => 4,
                        "Historia" => 10,
                        "Educación Física" => 2,
                        "Inglés" => 5,
                        "Matemáticas" => 7,
                        "Música" => 10,
                        "Ciencias" => 7,
                        "Tecnología" => 1,
                    ]
                ],
                [
                    "nombre" => "Martina",
                    "notas" => [
                        "Lengua" => 7,
                        "Historia" => 8,
                        "Educación Física" => 10,
                        "Inglés" => 8,
                        "Matemáticas" => 6,
                        "Música" => 7,
                        "Ciencias" => 8,
                        "Tecnología" => 4,
                    ]
                ],
                [
                    "nombre" => "Carla",
                    "notas" => [
                        "Lengua" => 9,
                        "Historia" => 9,
                        "Educación Física" => 8,
                        "Inglés" => 1,
                        "Matemáticas" => 5,
                        "Música" => 9,
                        "Ciencias" => 4,
                        "Tecnología" => 2,
                    ]
                ],
                [
                    "nombre" => "Alba",
                    "notas" => [
                        "Lengua" => 10,
                        "Historia" => 1,
                        "Educación Física" => 5,
                        "Inglés" => 3,
                        "Matemáticas" => 6,
                        "Música" => 3,
                        "Ciencias" => 9,
                        "Tecnología" => 1,
                    ]
                ],
                [
                    "nombre" => "Paula",
                    "notas" => [
                        "Lengua" => 4,
                        "Historia" => 8,
                        "Educación Física" => 1,
                        "Inglés" => 4,
                        "Matemáticas" => 8,
                        "Música" => 9,
                        "Ciencias" => 1,
                        "Tecnología" => 3,
                    ]
                ],
                [
                    "nombre" => "Emma",
                    "notas" => [
                        "Lengua" => 4,
                        "Historia" => 6,
                        "Educación Física" => 4,
                        "Inglés" => 1,
                        "Matemáticas" => 4,
                        "Música" => 2,
                        "Ciencias" => 9,
                        "Tecnología" => 7,
                    ]
                ],
            ],
            "C" => [
                [
                    "nombre" => "Daniel",
                    "notas" => [
                        "Lengua" => 10,
                        "Historia" => 2,
                        "Educación Física" => 2,
                        "Inglés" => 7,
                        "Matemáticas" => 7,
                        "Música" => 3,
                        "Ciencias" => 4,
                        "Tecnología" => 9,
                    ]
                ],
                [
                    "nombre" => "Olivia",
                    "notas" => [
                        "Lengua" => 7,
                        "Historia" => 3,
                        "Educación Física" => 4,
                        "Inglés" => 8,
                        "Matemáticas" => 7,
                        "Música" => 7,
                        "Ciencias" => 8,
                        "Tecnología" => 6,
                    ]
                ],
                [
                    "nombre" => "Olivia",
                    "notas" => [
                        "Lengua" => 8,
                        "Historia" => 1,
                        "Educación Física" => 8,
                        "Inglés" => 10,
                        "Matemáticas" => 10,
                        "Música" => 1,
                        "Ciencias" => 5,
                        "Tecnología" => 1,
                    ]
                ],
                [
                    "nombre" => "Mateo",
                    "notas" => [
                        "Lengua" => 7,
                        "Historia" => 6,
                        "Educación Física" => 9,
                        "Inglés" => 5,
                        "Matemáticas" => 3,
                        "Música" => 8,
                        "Ciencias" => 6,
                        "Tecnología" => 4,
                    ]
                ],
                [
                    "nombre" => "Gabriel",
                    "notas" => [
                        "Lengua" => 10,
                        "Historia" => 3,
                        "Educación Física" => 2,
                        "Inglés" => 9,
                        "Matemáticas" => 9,
                        "Música" => 10,
                        "Ciencias" => 8,
                        "Tecnología" => 8,
                    ]
                ],
                [
                    "nombre" => "Manuel",
                    "notas" => [
                        "Lengua" => 3,
                        "Historia" => 7,
                        "Educación Física" => 3,
                        "Inglés" => 1,
                        "Matemáticas" => 9,
                        "Música" => 7,
                        "Ciencias" => 9,
                        "Tecnología" => 6,
                    ]
                ],
                [
                    "nombre" => "Emma",
                    "notas" => [
                        "Lengua" => 2,
                        "Historia" => 7,
                        "Educación Física" => 3,
                        "Inglés" => 3,
                        "Matemáticas" => 9,
                        "Música" => 6,
                        "Ciencias" => 2,
                        "Tecnología" => 10,
                    ]
                ],
                [
                    "nombre" => "Emma",
                    "notas" => [
                        "Lengua" => 4,
                        "Historia" => 7,
                        "Educación Física" => 2,
                        "Inglés" => 7,
                        "Matemáticas" => 5,
                        "Música" => 6,
                        "Ciencias" => 5,
                        "Tecnología" => 6,
                    ]
                ],
                [
                    "nombre" => "Carmen",
                    "notas" => [
                        "Lengua" => 10,
                        "Historia" => 3,
                        "Educación Física" => 4,
                        "Inglés" => 7,
                        "Matemáticas" => 3,
                        "Música" => 8,
                        "Ciencias" => 8,
                        "Tecnología" => 2,
                    ]
                ],
                [
                    "nombre" => "Daniel",
                    "notas" => [
                        "Lengua" => 3,
                        "Historia" => 7,
                        "Educación Física" => 10,
                        "Inglés" => 10,
                        "Matemáticas" => 8,
                        "Música" => 9,
                        "Ciencias" => 5,
                        "Tecnología" => 2,
                    ]
                ],
                [
                    "nombre" => "Emma",
                    "notas" => [
                        "Lengua" => 6,
                        "Historia" => 5,
                        "Educación Física" => 2,
                        "Inglés" => 5,
                        "Matemáticas" => 4,
                        "Música" => 5,
                        "Ciencias" => 9,
                        "Tecnología" => 7,
                    ]
                ],
                [
                    "nombre" => "Olivia",
                    "notas" => [
                        "Lengua" => 3,
                        "Historia" => 9,
                        "Educación Física" => 3,
                        "Inglés" => 2,
                        "Matemáticas" => 1,
                        "Música" => 9,
                        "Ciencias" => 6,
                        "Tecnología" => 1,
                    ]
                ],
                [
                    "nombre" => "Carla",
                    "notas" => [
                        "Lengua" => 2,
                        "Historia" => 5,
                        "Educación Física" => 3,
                        "Inglés" => 6,
                        "Matemáticas" => 2,
                        "Música" => 5,
                        "Ciencias" => 1,
                        "Tecnología" => 3,
                    ]
                ],
                [
                    "nombre" => "Claudia",
                    "notas" => [
                        "Lengua" => 5,
                        "Historia" => 7,
                        "Educación Física" => 2,
                        "Inglés" => 1,
                        "Matemáticas" => 3,
                        "Música" => 6,
                        "Ciencias" => 9,
                        "Tecnología" => 4,
                    ]
                ],
                [
                    "nombre" => "Noa",
                    "notas" => [
                        "Lengua" => 6,
                        "Historia" => 2,
                        "Educación Física" => 5,
                        "Inglés" => 5,
                        "Matemáticas" => 10,
                        "Música" => 7,
                        "Ciencias" => 4,
                        "Tecnología" => 6,
                    ]
                ],
                [
                    "nombre" => "Enzo",
                    "notas" => [
                        "Lengua" => 10,
                        "Historia" => 6,
                        "Educación Física" => 7,
                        "Inglés" => 10,
                        "Matemáticas" => 1,
                        "Música" => 8,
                        "Ciencias" => 1,
                        "Tecnología" => 3,
                    ]
                ],
                [
                    "nombre" => "Gabriel",
                    "notas" => [
                        "Lengua" => 5,
                        "Historia" => 7,
                        "Educación Física" => 4,
                        "Inglés" => 10,
                        "Matemáticas" => 9,
                        "Música" => 9,
                        "Ciencias" => 9,
                        "Tecnología" => 4,
                    ]
                ],
                [
                    "nombre" => "Julia",
                    "notas" => [
                        "Lengua" => 2,
                        "Historia" => 8,
                        "Educación Física" => 3,
                        "Inglés" => 3,
                        "Matemáticas" => 4,
                        "Música" => 7,
                        "Ciencias" => 9,
                        "Tecnología" => 1,
                    ]
                ],
                [
                    "nombre" => "Juan",
                    "notas" => [
                        "Lengua" => 2,
                        "Historia" => 5,
                        "Educación Física" => 4,
                        "Inglés" => 6,
                        "Matemáticas" => 2,
                        "Música" => 9,
                        "Ciencias" => 7,
                        "Tecnología" => 2,
                    ]
                ],
                [
                    "nombre" => "Claudia",
                    "notas" => [
                        "Lengua" => 2,
                        "Historia" => 5,
                        "Educación Física" => 6,
                        "Inglés" => 2,
                        "Matemáticas" => 5,
                        "Música" => 8,
                        "Ciencias" => 2,
                        "Tecnología" => 5,
                    ]
                ],
            ],
        ],
        "Segundo" => [
            "A" => [
                [
                    "nombre" => "Pablo",
                    "notas" => [
                        "Lengua" => 8,
                        "Historia" => 1,
                        "Educación Física" => 7,
                        "Inglés" => 9,
                        "Matemáticas" => 7,
                        "Música" => 10,
                        "Ciencias" => 4,
                        "Tecnología" => 2,
                    ]
                ],
                [
                    "nombre" => "Luna",
                    "notas" => [
                        "Lengua" => 5,
                        "Historia" => 3,
                        "Educación Física" => 1,
                        "Inglés" => 8,
                        "Matemáticas" => 4,
                        "Música" => 7,
                        "Ciencias" => 1,
                        "Tecnología" => 1,
                    ]
                ],
                [
                    "nombre" => "Manuel",
                    "notas" => [
                        "Lengua" => 4,
                        "Historia" => 8,
                        "Educación Física" => 7,
                        "Inglés" => 8,
                        "Matemáticas" => 4,
                        "Música" => 7,
                        "Ciencias" => 6,
                        "Tecnología" => 10,
                    ]
                ],
                [
                    "nombre" => "Alba",
                    "notas" => [
                        "Lengua" => 6,
                        "Historia" => 9,
                        "Educación Física" => 5,
                        "Inglés" => 7,
                        "Matemáticas" => 4,
                        "Música" => 5,
                        "Ciencias" => 1,
                        "Tecnología" => 3,
                    ]
                ],
                [
                    "nombre" => "Noa",
                    "notas" => [
                        "Lengua" => 8,
                        "Historia" => 2,
                        "Educación Física" => 7,
                        "Inglés" => 9,
                        "Matemáticas" => 5,
                        "Música" => 10,
                        "Ciencias" => 3,
                        "Tecnología" => 1,
                    ]
                ],
                [
                    "nombre" => "Lucas",
                    "notas" => [
                        "Lengua" => 8,
                        "Historia" => 1,
                        "Educación Física" => 6,
                        "Inglés" => 8,
                        "Matemáticas" => 2,
                        "Música" => 6,
                        "Ciencias" => 2,
                        "Tecnología" => 2,
                    ]
                ],
                [
                    "nombre" => "Irene",
                    "notas" => [
                        "Lengua" => 6,
                        "Historia" => 7,
                        "Educación Física" => 10,
                        "Inglés" => 3,
                        "Matemáticas" => 10,
                        "Música" => 4,
                        "Ciencias" => 2,
                        "Tecnología" => 3,
                    ]
                ],
                [
                    "nombre" => "Vega",
                    "notas" => [
                        "Lengua" => 9,
                        "Historia" => 9,
                        "Educación Física" => 8,
                        "Inglés" => 4,
                        "Matemáticas" => 9,
                        "Música" => 3,
                        "Ciencias" => 6,
                        "Tecnología" => 8,
                    ]
                ],
                [
                    "nombre" => "Mateo",
                    "notas" => [
                        "Lengua" => 8,
                        "Historia" => 3,
                        "Educación Física" => 1,
                        "Inglés" => 4,
                        "Matemáticas" => 10,
                        "Música" => 3,
                        "Ciencias" => 6,
                        "Tecnología" => 1,
                    ]
                ],
                [
                    "nombre" => "Daniel",
                    "notas" => [
                        "Lengua" => 4,
                        "Historia" => 10,
                        "Educación Física" => 6,
                        "Inglés" => 2,
                        "Matemáticas" => 2,
                        "Música" => 5,
                        "Ciencias" => 10,
                        "Tecnología" => 1,
                    ]
                ],
                [
                    "nombre" => "Lucas",
                    "notas" => [
                        "Lengua" => 7,
                        "Historia" => 3,
                        "Educación Física" => 9,
                        "Inglés" => 5,
                        "Matemáticas" => 4,
                        "Música" => 6,
                        "Ciencias" => 10,
                        "Tecnología" => 1,
                    ]
                ],
                [
                    "nombre" => "Luna",
                    "notas" => [
                        "Lengua" => 1,
                        "Historia" => 4,
                        "Educación Física" => 1,
                        "Inglés" => 4,
                        "Matemáticas" => 1,
                        "Música" => 5,
                        "Ciencias" => 3,
                        "Tecnología" => 3,
                    ]
                ],
                [
                    "nombre" => "Chloe",
                    "notas" => [
                        "Lengua" => 3,
                        "Historia" => 5,
                        "Educación Física" => 4,
                        "Inglés" => 6,
                        "Matemáticas" => 5,
                        "Música" => 6,
                        "Ciencias" => 9,
                        "Tecnología" => 5,
                    ]
                ],
                [
                    "nombre" => "Julia",
                    "notas" => [
                        "Lengua" => 4,
                        "Historia" => 9,
                        "Educación Física" => 9,
                        "Inglés" => 4,
                        "Matemáticas" => 8,
                        "Música" => 8,
                        "Ciencias" => 10,
                        "Tecnología" => 10,
                    ]
                ],
                [
                    "nombre" => "Irene",
                    "notas" => [
                        "Lengua" => 8,
                        "Historia" => 10,
                        "Educación Física" => 4,
                        "Inglés" => 1,
                        "Matemáticas" => 10,
                        "Música" => 7,
                        "Ciencias" => 6,
                        "Tecnología" => 6,
                    ]
                ],
                [
                    "nombre" => "Valeria",
                    "notas" => [
                        "Lengua" => 10,
                        "Historia" => 5,
                        "Educación Física" => 1,
                        "Inglés" => 3,
                        "Matemáticas" => 9,
                        "Música" => 7,
                        "Ciencias" => 7,
                        "Tecnología" => 10,
                    ]
                ],
                [
                    "nombre" => "Leo",
                    "notas" => [
                        "Lengua" => 1,
                        "Historia" => 10,
                        "Educación Física" => 2,
                        "Inglés" => 5,
                        "Matemáticas" => 10,
                        "Música" => 6,
                        "Ciencias" => 9,
                        "Tecnología" => 10,
                    ]
                ],
                [
                    "nombre" => "Pablo",
                    "notas" => [
                        "Lengua" => 7,
                        "Historia" => 7,
                        "Educación Física" => 2,
                        "Inglés" => 9,
                        "Matemáticas" => 1,
                        "Música" => 10,
                        "Ciencias" => 7,
                        "Tecnología" => 1,
                    ]
                ],
                [
                    "nombre" => "Paula",
                    "notas" => [
                        "Lengua" => 5,
                        "Historia" => 3,
                        "Educación Física" => 8,
                        "Inglés" => 6,
                        "Matemáticas" => 2,
                        "Música" => 2,
                        "Ciencias" => 5,
                        "Tecnología" => 4,
                    ]
                ],
                [
                    "nombre" => "Pedro",
                    "notas" => [
                        "Lengua" => 4,
                        "Historia" => 8,
                        "Educación Física" => 1,
                        "Inglés" => 5,
                        "Matemáticas" => 5,
                        "Música" => 4,
                        "Ciencias" => 4,
                        "Tecnología" => 9,
                    ]
                ],
            ],
            "B" => [
                [
                    "nombre" => "Carla",
                    "notas" => [
                        "Lengua" => 9,
                        "Historia" => 1,
                        "Educación Física" => 1,
                        "Inglés" => 7,
                        "Matemáticas" => 3,
                        "Música" => 7,
                        "Ciencias" => 10,
                        "Tecnología" => 2,
                    ]
                ],
                [
                    "nombre" => "Olivia",
                    "notas" => [
                        "Lengua" => 4,
                        "Historia" => 4,
                        "Educación Física" => 8,
                        "Inglés" => 9,
                        "Matemáticas" => 5,
                        "Música" => 9,
                        "Ciencias" => 5,
                        "Tecnología" => 3,
                    ]
                ],
                [
                    "nombre" => "Mario",
                    "notas" => [
                        "Lengua" => 2,
                        "Historia" => 4,
                        "Educación Física" => 3,
                        "Inglés" => 3,
                        "Matemáticas" => 4,
                        "Música" => 2,
                        "Ciencias" => 7,
                        "Tecnología" => 10,
                    ]
                ],
                [
                    "nombre" => "Javier",
                    "notas" => [
                        "Lengua" => 4,
                        "Historia" => 3,
                        "Educación Física" => 1,
                        "Inglés" => 7,
                        "Matemáticas" => 9,
                        "Música" => 8,
                        "Ciencias" => 1,
                        "Tecnología" => 1,
                    ]
                ],
                [
                    "nombre" => "Alejandro",
                    "notas" => [
                        "Lengua" => 7,
                        "Historia" => 7,
                        "Educación Física" => 8,
                        "Inglés" => 5,
                        "Matemáticas" => 5,
                        "Música" => 5,
                        "Ciencias" => 10,
                        "Tecnología" => 5,
                    ]
                ],
                [
                    "nombre" => "Sofía",
                    "notas" => [
                        "Lengua" => 5,
                        "Historia" => 1,
                        "Educación Física" => 9,
                        "Inglés" => 1,
                        "Matemáticas" => 8,
                        "Música" => 4,
                        "Ciencias" => 3,
                        "Tecnología" => 4,
                    ]
                ],
                [
                    "nombre" => "Luna",
                    "notas" => [
                        "Lengua" => 2,
                        "Historia" => 9,
                        "Educación Física" => 6,
                        "Inglés" => 6,
                        "Matemáticas" => 9,
                        "Música" => 1,
                        "Ciencias" => 1,
                        "Tecnología" => 10,
                    ]
                ],
                [
                    "nombre" => "Andrés",
                    "notas" => [
                        "Lengua" => 9,
                        "Historia" => 4,
                        "Educación Física" => 5,
                        "Inglés" => 6,
                        "Matemáticas" => 7,
                        "Música" => 3,
                        "Ciencias" => 2,
                        "Tecnología" => 7,
                    ]
                ],
                [
                    "nombre" => "Pablo",
                    "notas" => [
                        "Lengua" => 5,
                        "Historia" => 9,
                        "Educación Física" => 6,
                        "Inglés" => 1,
                        "Matemáticas" => 4,
                        "Música" => 5,
                        "Ciencias" => 5,
                        "Tecnología" => 6,
                    ]
                ],
                [
                    "nombre" => "Carla",
                    "notas" => [
                        "Lengua" => 1,
                        "Historia" => 9,
                        "Educación Física" => 4,
                        "Inglés" => 5,
                        "Matemáticas" => 2,
                        "Música" => 8,
                        "Ciencias" => 7,
                        "Tecnología" => 2,
                    ]
                ],
                [
                    "nombre" => "Enzo",
                    "notas" => [
                        "Lengua" => 8,
                        "Historia" => 4,
                        "Educación Física" => 7,
                        "Inglés" => 1,
                        "Matemáticas" => 4,
                        "Música" => 8,
                        "Ciencias" => 2,
                        "Tecnología" => 9,
                    ]
                ],
                [
                    "nombre" => "Daniel",
                    "notas" => [
                        "Lengua" => 10,
                        "Historia" => 8,
                        "Educación Física" => 6,
                        "Inglés" => 4,
                        "Matemáticas" => 9,
                        "Música" => 5,
                        "Ciencias" => 6,
                        "Tecnología" => 8,
                    ]
                ],
                [
                    "nombre" => "Diego",
                    "notas" => [
                        "Lengua" => 6,
                        "Historia" => 6,
                        "Educación Física" => 10,
                        "Inglés" => 5,
                        "Matemáticas" => 2,
                        "Música" => 3,
                        "Ciencias" => 5,
                        "Tecnología" => 10,
                    ]
                ],
                [
                    "nombre" => "Luna",
                    "notas" => [
                        "Lengua" => 2,
                        "Historia" => 3,
                        "Educación Física" => 9,
                        "Inglés" => 5,
                        "Matemáticas" => 5,
                        "Música" => 2,
                        "Ciencias" => 2,
                        "Tecnología" => 2,
                    ]
                ],
                [
                    "nombre" => "Adrián",
                    "notas" => [
                        "Lengua" => 5,
                        "Historia" => 7,
                        "Educación Física" => 5,
                        "Inglés" => 10,
                        "Matemáticas" => 9,
                        "Música" => 8,
                        "Ciencias" => 4,
                        "Tecnología" => 7,
                    ]
                ],
                [
                    "nombre" => "Sara",
                    "notas" => [
                        "Lengua" => 4,
                        "Historia" => 3,
                        "Educación Física" => 9,
                        "Inglés" => 6,
                        "Matemáticas" => 5,
                        "Música" => 8,
                        "Ciencias" => 7,
                        "Tecnología" => 5,
                    ]
                ],
                [
                    "nombre" => "Mía",
                    "notas" => [
                        "Lengua" => 1,
                        "Historia" => 3,
                        "Educación Física" => 3,
                        "Inglés" => 8,
                        "Matemáticas" => 2,
                        "Música" => 2,
                        "Ciencias" => 3,
                        "Tecnología" => 3,
                    ]
                ],
                [
                    "nombre" => "Javier",
                    "notas" => [
                        "Lengua" => 9,
                        "Historia" => 4,
                        "Educación Física" => 2,
                        "Inglés" => 7,
                        "Matemáticas" => 7,
                        "Música" => 6,
                        "Ciencias" => 7,
                        "Tecnología" => 4,
                    ]
                ],
                [
                    "nombre" => "Mateo",
                    "notas" => [
                        "Lengua" => 8,
                        "Historia" => 5,
                        "Educación Física" => 4,
                        "Inglés" => 6,
                        "Matemáticas" => 2,
                        "Música" => 10,
                        "Ciencias" => 5,
                        "Tecnología" => 1,
                    ]
                ],
                [
                    "nombre" => "Valeria",
                    "notas" => [
                        "Lengua" => 2,
                        "Historia" => 9,
                        "Educación Física" => 1,
                        "Inglés" => 5,
                        "Matemáticas" => 4,
                        "Música" => 8,
                        "Ciencias" => 6,
                        "Tecnología" => 6,
                    ]
                ],
            ],
            "C" => [
                [
                    "nombre" => "Paula",
                    "notas" => [
                        "Lengua" => 10,
                        "Historia" => 2,
                        "Educación Física" => 6,
                        "Inglés" => 3,
                        "Matemáticas" => 3,
                        "Música" => 10,
                        "Ciencias" => 4,
                        "Tecnología" => 7,
                    ]
                ],
                [
                    "nombre" => "Chloe",
                    "notas" => [
                        "Lengua" => 5,
                        "Historia" => 10,
                        "Educación Física" => 9,
                        "Inglés" => 10,
                        "Matemáticas" => 9,
                        "Música" => 8,
                        "Ciencias" => 8,
                        "Tecnología" => 7,
                    ]
                ],
                [
                    "nombre" => "Adrián",
                    "notas" => [
                        "Lengua" => 1,
                        "Historia" => 10,
                        "Educación Física" => 4,
                        "Inglés" => 5,
                        "Matemáticas" => 4,
                        "Música" => 10,
                        "Ciencias" => 9,
                        "Tecnología" => 6,
                    ]
                ],
                [
                    "nombre" => "Julia",
                    "notas" => [
                        "Lengua" => 3,
                        "Historia" => 6,
                        "Educación Física" => 1,
                        "Inglés" => 4,
                        "Matemáticas" => 8,
                        "Música" => 5,
                        "Ciencias" => 10,
                        "Tecnología" => 2,
                    ]
                ],
                [
                    "nombre" => "Javier",
                    "notas" => [
                        "Lengua" => 10,
                        "Historia" => 10,
                        "Educación Física" => 4,
                        "Inglés" => 3,
                        "Matemáticas" => 10,
                        "Música" => 1,
                        "Ciencias" => 2,
                        "Tecnología" => 10,
                    ]
                ],
                [
                    "nombre" => "Claudia",
                    "notas" => [
                        "Lengua" => 9,
                        "Historia" => 6,
                        "Educación Física" => 7,
                        "Inglés" => 6,
                        "Matemáticas" => 5,
                        "Música" => 5,
                        "Ciencias" => 7,
                        "Tecnología" => 6,
                    ]
                ],
                [
                    "nombre" => "Mía",
                    "notas" => [
                        "Lengua" => 7,
                        "Historia" => 8,
                        "Educación Física" => 8,
                        "Inglés" => 3,
                        "Matemáticas" => 9,
                        "Música" => 9,
                        "Ciencias" => 4,
                        "Tecnología" => 10,
                    ]
                ],
                [
                    "nombre" => "Julia",
                    "notas" => [
                        "Lengua" => 1,
                        "Historia" => 4,
                        "Educación Física" => 6,
                        "Inglés" => 7,
                        "Matemáticas" => 8,
                        "Música" => 9,
                        "Ciencias" => 10,
                        "Tecnología" => 7,
                    ]
                ],
                [
                    "nombre" => "Mateo",
                    "notas" => [
                        "Lengua" => 5,
                        "Historia" => 7,
                        "Educación Física" => 3,
                        "Inglés" => 2,
                        "Matemáticas" => 1,
                        "Música" => 1,
                        "Ciencias" => 4,
                        "Tecnología" => 4,
                    ]
                ],
                [
                    "nombre" => "Valeria",
                    "notas" => [
                        "Lengua" => 3,
                        "Historia" => 2,
                        "Educación Física" => 2,
                        "Inglés" => 1,
                        "Matemáticas" => 4,
                        "Música" => 5,
                        "Ciencias" => 2,
                        "Tecnología" => 2,
                    ]
                ],
                [
                    "nombre" => "Mateo",
                    "notas" => [
                        "Lengua" => 4,
                        "Historia" => 6,
                        "Educación Física" => 10,
                        "Inglés" => 2,
                        "Matemáticas" => 4,
                        "Música" => 1,
                        "Ciencias" => 5,
                        "Tecnología" => 7,
                    ]
                ],
                [
                    "nombre" => "Alejandro",
                    "notas" => [
                        "Lengua" => 10,
                        "Historia" => 4,
                        "Educación Física" => 9,
                        "Inglés" => 7,
                        "Matemáticas" => 3,
                        "Música" => 5,
                        "Ciencias" => 2,
                        "Tecnología" => 8,
                    ]
                ],
                [
                    "nombre" => "Noa",
                    "notas" => [
                        "Lengua" => 4,
                        "Historia" => 3,
                        "Educación Física" => 8,
                        "Inglés" => 6,
                        "Matemáticas" => 6,
                        "Música" => 7,
                        "Ciencias" => 5,
                        "Tecnología" => 3,
                    ]
                ],
                [
                    "nombre" => "Noa",
                    "notas" => [
                        "Lengua" => 4,
                        "Historia" => 8,
                        "Educación Física" => 1,
                        "Inglés" => 1,
                        "Matemáticas" => 9,
                        "Música" => 5,
                        "Ciencias" => 5,
                        "Tecnología" => 8,
                    ]
                ],
                [
                    "nombre" => "Carmen",
                    "notas" => [
                        "Lengua" => 9,
                        "Historia" => 4,
                        "Educación Física" => 9,
                        "Inglés" => 6,
                        "Matemáticas" => 6,
                        "Música" => 4,
                        "Ciencias" => 6,
                        "Tecnología" => 1,
                    ]
                ],
                [
                    "nombre" => "Diego",
                    "notas" => [
                        "Lengua" => 2,
                        "Historia" => 2,
                        "Educación Física" => 4,
                        "Inglés" => 9,
                        "Matemáticas" => 9,
                        "Música" => 4,
                        "Ciencias" => 10,
                        "Tecnología" => 10,
                    ]
                ],
                [
                    "nombre" => "Adrián",
                    "notas" => [
                        "Lengua" => 7,
                        "Historia" => 2,
                        "Educación Física" => 4,
                        "Inglés" => 5,
                        "Matemáticas" => 4,
                        "Música" => 10,
                        "Ciencias" => 9,
                        "Tecnología" => 2,
                    ]
                ],
                [
                    "nombre" => "Sara",
                    "notas" => [
                        "Lengua" => 5,
                        "Historia" => 9,
                        "Educación Física" => 1,
                        "Inglés" => 5,
                        "Matemáticas" => 10,
                        "Música" => 1,
                        "Ciencias" => 5,
                        "Tecnología" => 5,
                    ]
                ],
                [
                    "nombre" => "Gabriel",
                    "notas" => [
                        "Lengua" => 2,
                        "Historia" => 1,
                        "Educación Física" => 1,
                        "Inglés" => 10,
                        "Matemáticas" => 2,
                        "Música" => 1,
                        "Ciencias" => 8,
                        "Tecnología" => 4,
                    ]
                ],
                [
                    "nombre" => "Adrián",
                    "notas" => [
                        "Lengua" => 10,
                        "Historia" => 6,
                        "Educación Física" => 9,
                        "Inglés" => 2,
                        "Matemáticas" => 5,
                        "Música" => 1,
                        "Ciencias" => 2,
                        "Tecnología" => 9,
                    ]
                ],
            ],
        ],
        "Tercero" => [
            "A" => [
                [
                    "nombre" => "Carla",
                    "notas" => [
                        "Lengua" => 9,
                        "Historia" => 1,
                        "Educación Física" => 7,
                        "Inglés" => 9,
                        "Matemáticas" => 8,
                        "Música" => 2,
                        "Ciencias" => 7,
                        "Tecnología" => 2,
                    ]
                ],
                [
                    "nombre" => "Martina",
                    "notas" => [
                        "Lengua" => 5,
                        "Historia" => 4,
                        "Educación Física" => 5,
                        "Inglés" => 4,
                        "Matemáticas" => 9,
                        "Música" => 1,
                        "Ciencias" => 5,
                        "Tecnología" => 10,
                    ]
                ],
                [
                    "nombre" => "Diego",
                    "notas" => [
                        "Lengua" => 2,
                        "Historia" => 6,
                        "Educación Física" => 1,
                        "Inglés" => 6,
                        "Matemáticas" => 8,
                        "Música" => 1,
                        "Ciencias" => 1,
                        "Tecnología" => 5,
                    ]
                ],
                [
                    "nombre" => "Julia",
                    "notas" => [
                        "Lengua" => 7,
                        "Historia" => 2,
                        "Educación Física" => 4,
                        "Inglés" => 8,
                        "Matemáticas" => 6,
                        "Música" => 9,
                        "Ciencias" => 9,
                        "Tecnología" => 3,
                    ]
                ],
                [
                    "nombre" => "Daniel",
                    "notas" => [
                        "Lengua" => 8,
                        "Historia" => 7,
                        "Educación Física" => 1,
                        "Inglés" => 9,
                        "Matemáticas" => 4,
                        "Música" => 5,
                        "Ciencias" => 1,
                        "Tecnología" => 2,
                    ]
                ],
                [
                    "nombre" => "Carla",
                    "notas" => [
                        "Lengua" => 9,
                        "Historia" => 4,
                        "Educación Física" => 6,
                        "Inglés" => 3,
                        "Matemáticas" => 7,
                        "Música" => 4,
                        "Ciencias" => 2,
                        "Tecnología" => 3,
                    ]
                ],
                [
                    "nombre" => "Noa",
                    "notas" => [
                        "Lengua" => 3,
                        "Historia" => 6,
                        "Educación Física" => 10,
                        "Inglés" => 4,
                        "Matemáticas" => 6,
                        "Música" => 7,
                        "Ciencias" => 3,
                        "Tecnología" => 3,
                    ]
                ],
                [
                    "nombre" => "Álvaro",
                    "notas" => [
                        "Lengua" => 5,
                        "Historia" => 2,
                        "Educación Física" => 10,
                        "Inglés" => 4,
                        "Matemáticas" => 10,
                        "Música" => 7,
                        "Ciencias" => 6,
                        "Tecnología" => 3,
                    ]
                ],
                [
                    "nombre" => "Gabriel",
                    "notas" => [
                        "Lengua" => 8,
                        "Historia" => 10,
                        "Educación Física" => 5,
                        "Inglés" => 7,
                        "Matemáticas" => 2,
                        "Música" => 4,
                        "Ciencias" => 6,
                        "Tecnología" => 8,
                    ]
                ],
                [
                    "nombre" => "Carmen",
                    "notas" => [
                        "Lengua" => 2,
                        "Historia" => 8,
                        "Educación Física" => 4,
                        "Inglés" => 9,
                        "Matemáticas" => 2,
                        "Música" => 8,
                        "Ciencias" => 1,
                        "Tecnología" => 3,
                    ]
                ],
                [
                    "nombre" => "Pablo",
                    "notas" => [
                        "Lengua" => 2,
                        "Historia" => 9,
                        "Educación Física" => 5,
                        "Inglés" => 3,
                        "Matemáticas" => 1,
                        "Música" => 8,
                        "Ciencias" => 1,
                        "Tecnología" => 10,
                    ]
                ],
                [
                    "nombre" => "Vega",
                    "notas" => [
                        "Lengua" => 6,
                        "Historia" => 1,
                        "Educación Física" => 10,
                        "Inglés" => 7,
                        "Matemáticas" => 3,
                        "Música" => 9,
                        "Ciencias" => 5,
                        "Tecnología" => 1,
                    ]
                ],
                [
                    "nombre" => "Lucas",
                    "notas" => [
                        "Lengua" => 10,
                        "Historia" => 9,
                        "Educación Física" => 3,
                        "Inglés" => 9,
                        "Matemáticas" => 3,
                        "Música" => 6,
                        "Ciencias" => 10,
                        "Tecnología" => 7,
                    ]
                ],
                [
                    "nombre" => "Javier",
                    "notas" => [
                        "Lengua" => 1,
                        "Historia" => 8,
                        "Educación Física" => 1,
                        "Inglés" => 3,
                        "Matemáticas" => 7,
                        "Música" => 10,
                        "Ciencias" => 7,
                        "Tecnología" => 2,
                    ]
                ],
                [
                    "nombre" => "Leo",
                    "notas" => [
                        "Lengua" => 1,
                        "Historia" => 3,
                        "Educación Física" => 1,
                        "Inglés" => 1,
                        "Matemáticas" => 7,
                        "Música" => 1,
                        "Ciencias" => 10,
                        "Tecnología" => 1,
                    ]
                ],
                [
                    "nombre" => "Martina",
                    "notas" => [
                        "Lengua" => 2,
                        "Historia" => 2,
                        "Educación Física" => 3,
                        "Inglés" => 1,
                        "Matemáticas" => 5,
                        "Música" => 4,
                        "Ciencias" => 9,
                        "Tecnología" => 2,
                    ]
                ],
                [
                    "nombre" => "Pedro",
                    "notas" => [
                        "Lengua" => 10,
                        "Historia" => 6,
                        "Educación Física" => 10,
                        "Inglés" => 10,
                        "Matemáticas" => 2,
                        "Música" => 1,
                        "Ciencias" => 5,
                        "Tecnología" => 6,
                    ]
                ],
                [
                    "nombre" => "Mía",
                    "notas" => [
                        "Lengua" => 3,
                        "Historia" => 3,
                        "Educación Física" => 4,
                        "Inglés" => 8,
                        "Matemáticas" => 5,
                        "Música" => 2,
                        "Ciencias" => 8,
                        "Tecnología" => 2,
                    ]
                ],
                [
                    "nombre" => "Emma",
                    "notas" => [
                        "Lengua" => 6,
                        "Historia" => 6,
                        "Educación Física" => 2,
                        "Inglés" => 5,
                        "Matemáticas" => 8,
                        "Música" => 9,
                        "Ciencias" => 7,
                        "Tecnología" => 10,
                    ]
                ],
                [
                    "nombre" => "Daniel",
                    "notas" => [
                        "Lengua" => 2,
                        "Historia" => 1,
                        "Educación Física" => 10,
                        "Inglés" => 8,
                        "Matemáticas" => 5,
                        "Música" => 4,
                        "Ciencias" => 10,
                        "Tecnología" => 6,
                    ]
                ],
            ],
            "B" => [
                [
                    "nombre" => "Lucas",
                    "notas" => [
                        "Lengua" => 1,
                        "Historia" => 3,
                        "Educación Física" => 9,
                        "Inglés" => 8,
                        "Matemáticas" => 8,
                        "Música" => 6,
                        "Ciencias" => 6,
                        "Tecnología" => 10,
                    ]
                ],
                [
                    "nombre" => "Alba",
                    "notas" => [
                        "Lengua" => 2,
                        "Historia" => 3,
                        "Educación Física" => 4,
                        "Inglés" => 2,
                        "Matemáticas" => 6,
                        "Música" => 10,
                        "Ciencias" => 2,
                        "Tecnología" => 2,
                    ]
                ],
                [
                    "nombre" => "Noa",
                    "notas" => [
                        "Lengua" => 3,
                        "Historia" => 1,
                        "Educación Física" => 6,
                        "Inglés" => 4,
                        "Matemáticas" => 7,
                        "Música" => 9,
                        "Ciencias" => 1,
                        "Tecnología" => 7,
                    ]
                ],
                [
                    "nombre" => "Martina",
                    "notas" => [
                        "Lengua" => 9,
                        "Historia" => 2,
                        "Educación Física" => 3,
                        "Inglés" => 10,
                        "Matemáticas" => 2,
                        "Música" => 4,
                        "Ciencias" => 2,
                        "Tecnología" => 2,
                    ]
                ],
                [
                    "nombre" => "Álvaro",
                    "notas" => [
                        "Lengua" => 6,
                        "Historia" => 1,
                        "Educación Física" => 9,
                        "Inglés" => 2,
                        "Matemáticas" => 3,
                        "Música" => 8,
                        "Ciencias" => 8,
                        "Tecnología" => 2,
                    ]
                ],
                [
                    "nombre" => "David",
                    "notas" => [
                        "Lengua" => 4,
                        "Historia" => 7,
                        "Educación Física" => 9,
                        "Inglés" => 9,
                        "Matemáticas" => 1,
                        "Música" => 5,
                        "Ciencias" => 1,
                        "Tecnología" => 10,
                    ]
                ],
                [
                    "nombre" => "Carmen",
                    "notas" => [
                        "Lengua" => 9,
                        "Historia" => 1,
                        "Educación Física" => 9,
                        "Inglés" => 3,
                        "Matemáticas" => 5,
                        "Música" => 6,
                        "Ciencias" => 6,
                        "Tecnología" => 6,
                    ]
                ],
                [
                    "nombre" => "Irene",
                    "notas" => [
                        "Lengua" => 3,
                        "Historia" => 10,
                        "Educación Física" => 6,
                        "Inglés" => 5,
                        "Matemáticas" => 8,
                        "Música" => 10,
                        "Ciencias" => 3,
                        "Tecnología" => 10,
                    ]
                ],
                [
                    "nombre" => "Nora",
                    "notas" => [
                        "Lengua" => 2,
                        "Historia" => 10,
                        "Educación Física" => 4,
                        "Inglés" => 1,
                        "Matemáticas" => 5,
                        "Música" => 2,
                        "Ciencias" => 2,
                        "Tecnología" => 5,
                    ]
                ],
                [
                    "nombre" => "David",
                    "notas" => [
                        "Lengua" => 2,
                        "Historia" => 8,
                        "Educación Física" => 3,
                        "Inglés" => 3,
                        "Matemáticas" => 6,
                        "Música" => 3,
                        "Ciencias" => 4,
                        "Tecnología" => 5,
                    ]
                ],
                [
                    "nombre" => "Vega",
                    "notas" => [
                        "Lengua" => 6,
                        "Historia" => 10,
                        "Educación Física" => 5,
                        "Inglés" => 3,
                        "Matemáticas" => 6,
                        "Música" => 5,
                        "Ciencias" => 8,
                        "Tecnología" => 2,
                    ]
                ],
                [
                    "nombre" => "Sofía",
                    "notas" => [
                        "Lengua" => 2,
                        "Historia" => 7,
                        "Educación Física" => 1,
                        "Inglés" => 7,
                        "Matemáticas" => 9,
                        "Música" => 5,
                        "Ciencias" => 2,
                        "Tecnología" => 8,
                    ]
                ],
                [
                    "nombre" => "Chloe",
                    "notas" => [
                        "Lengua" => 3,
                        "Historia" => 2,
                        "Educación Física" => 3,
                        "Inglés" => 6,
                        "Matemáticas" => 9,
                        "Música" => 1,
                        "Ciencias" => 9,
                        "Tecnología" => 4,
                    ]
                ],
                [
                    "nombre" => "Gabriel",
                    "notas" => [
                        "Lengua" => 7,
                        "Historia" => 2,
                        "Educación Física" => 8,
                        "Inglés" => 9,
                        "Matemáticas" => 5,
                        "Música" => 8,
                        "Ciencias" => 1,
                        "Tecnología" => 3,
                    ]
                ],
                [
                    "nombre" => "Sara",
                    "notas" => [
                        "Lengua" => 9,
                        "Historia" => 8,
                        "Educación Física" => 2,
                        "Inglés" => 7,
                        "Matemáticas" => 4,
                        "Música" => 7,
                        "Ciencias" => 4,
                        "Tecnología" => 7,
                    ]
                ],
                [
                    "nombre" => "Nora",
                    "notas" => [
                        "Lengua" => 9,
                        "Historia" => 2,
                        "Educación Física" => 9,
                        "Inglés" => 2,
                        "Matemáticas" => 3,
                        "Música" => 3,
                        "Ciencias" => 8,
                        "Tecnología" => 8,
                    ]
                ],
                [
                    "nombre" => "Leo",
                    "notas" => [
                        "Lengua" => 10,
                        "Historia" => 1,
                        "Educación Física" => 9,
                        "Inglés" => 2,
                        "Matemáticas" => 6,
                        "Música" => 7,
                        "Ciencias" => 10,
                        "Tecnología" => 7,
                    ]
                ],
                [
                    "nombre" => "Nora",
                    "notas" => [
                        "Lengua" => 9,
                        "Historia" => 2,
                        "Educación Física" => 2,
                        "Inglés" => 5,
                        "Matemáticas" => 8,
                        "Música" => 8,
                        "Ciencias" => 7,
                        "Tecnología" => 3,
                    ]
                ],
                [
                    "nombre" => "Enzo",
                    "notas" => [
                        "Lengua" => 4,
                        "Historia" => 4,
                        "Educación Física" => 10,
                        "Inglés" => 4,
                        "Matemáticas" => 10,
                        "Música" => 10,
                        "Ciencias" => 3,
                        "Tecnología" => 7,
                    ]
                ],
                [
                    "nombre" => "Vega",
                    "notas" => [
                        "Lengua" => 5,
                        "Historia" => 9,
                        "Educación Física" => 7,
                        "Inglés" => 9,
                        "Matemáticas" => 1,
                        "Música" => 8,
                        "Ciencias" => 5,
                        "Tecnología" => 4,
                    ]
                ],
            ],
            "C" => [
                [
                    "nombre" => "Álvaro",
                    "notas" => [
                        "Lengua" => 4,
                        "Historia" => 10,
                        "Educación Física" => 6,
                        "Inglés" => 4,
                        "Matemáticas" => 9,
                        "Música" => 2,
                        "Ciencias" => 6,
                        "Tecnología" => 1,
                    ]
                ],
                [
                    "nombre" => "Adrián",
                    "notas" => [
                        "Lengua" => 3,
                        "Historia" => 3,
                        "Educación Física" => 1,
                        "Inglés" => 10,
                        "Matemáticas" => 2,
                        "Música" => 10,
                        "Ciencias" => 1,
                        "Tecnología" => 10,
                    ]
                ],
                [
                    "nombre" => "Enzo",
                    "notas" => [
                        "Lengua" => 6,
                        "Historia" => 5,
                        "Educación Física" => 4,
                        "Inglés" => 2,
                        "Matemáticas" => 10,
                        "Música" => 6,
                        "Ciencias" => 9,
                        "Tecnología" => 6,
                    ]
                ],
                [
                    "nombre" => "Álvaro",
                    "notas" => [
                        "Lengua" => 2,
                        "Historia" => 9,
                        "Educación Física" => 1,
                        "Inglés" => 9,
                        "Matemáticas" => 3,
                        "Música" => 8,
                        "Ciencias" => 5,
                        "Tecnología" => 7,
                    ]
                ],
                [
                    "nombre" => "Daniel",
                    "notas" => [
                        "Lengua" => 6,
                        "Historia" => 6,
                        "Educación Física" => 6,
                        "Inglés" => 5,
                        "Matemáticas" => 10,
                        "Música" => 4,
                        "Ciencias" => 5,
                        "Tecnología" => 3,
                    ]
                ],
                [
                    "nombre" => "Adrián",
                    "notas" => [
                        "Lengua" => 10,
                        "Historia" => 4,
                        "Educación Física" => 5,
                        "Inglés" => 5,
                        "Matemáticas" => 5,
                        "Música" => 8,
                        "Ciencias" => 7,
                        "Tecnología" => 2,
                    ]
                ],
                [
                    "nombre" => "Isabel",
                    "notas" => [
                        "Lengua" => 7,
                        "Historia" => 2,
                        "Educación Física" => 4,
                        "Inglés" => 9,
                        "Matemáticas" => 6,
                        "Música" => 9,
                        "Ciencias" => 8,
                        "Tecnología" => 4,
                    ]
                ],
                [
                    "nombre" => "Nora",
                    "notas" => [
                        "Lengua" => 3,
                        "Historia" => 8,
                        "Educación Física" => 7,
                        "Inglés" => 10,
                        "Matemáticas" => 4,
                        "Música" => 1,
                        "Ciencias" => 6,
                        "Tecnología" => 3,
                    ]
                ],
                [
                    "nombre" => "Noa",
                    "notas" => [
                        "Lengua" => 3,
                        "Historia" => 5,
                        "Educación Física" => 7,
                        "Inglés" => 10,
                        "Matemáticas" => 8,
                        "Música" => 6,
                        "Ciencias" => 2,
                        "Tecnología" => 2,
                    ]
                ],
                [
                    "nombre" => "Pablo",
                    "notas" => [
                        "Lengua" => 6,
                        "Historia" => 2,
                        "Educación Física" => 6,
                        "Inglés" => 4,
                        "Matemáticas" => 9,
                        "Música" => 1,
                        "Ciencias" => 6,
                        "Tecnología" => 1,
                    ]
                ],
                [
                    "nombre" => "Alejandro",
                    "notas" => [
                        "Lengua" => 5,
                        "Historia" => 8,
                        "Educación Física" => 5,
                        "Inglés" => 6,
                        "Matemáticas" => 2,
                        "Música" => 1,
                        "Ciencias" => 2,
                        "Tecnología" => 6,
                    ]
                ],
                [
                    "nombre" => "Luna",
                    "notas" => [
                        "Lengua" => 9,
                        "Historia" => 10,
                        "Educación Física" => 10,
                        "Inglés" => 10,
                        "Matemáticas" => 4,
                        "Música" => 7,
                        "Ciencias" => 6,
                        "Tecnología" => 5,
                    ]
                ],
                [
                    "nombre" => "Sofía",
                    "notas" => [
                        "Lengua" => 1,
                        "Historia" => 2,
                        "Educación Física" => 5,
                        "Inglés" => 2,
                        "Matemáticas" => 8,
                        "Música" => 8,
                        "Ciencias" => 10,
                        "Tecnología" => 10,
                    ]
                ],
                [
                    "nombre" => "Antonio",
                    "notas" => [
                        "Lengua" => 10,
                        "Historia" => 1,
                        "Educación Física" => 6,
                        "Inglés" => 9,
                        "Matemáticas" => 1,
                        "Música" => 6,
                        "Ciencias" => 7,
                        "Tecnología" => 4,
                    ]
                ],
                [
                    "nombre" => "Claudia",
                    "notas" => [
                        "Lengua" => 9,
                        "Historia" => 1,
                        "Educación Física" => 4,
                        "Inglés" => 6,
                        "Matemáticas" => 3,
                        "Música" => 10,
                        "Ciencias" => 3,
                        "Tecnología" => 5,
                    ]
                ],
                [
                    "nombre" => "Manuel",
                    "notas" => [
                        "Lengua" => 1,
                        "Historia" => 9,
                        "Educación Física" => 9,
                        "Inglés" => 8,
                        "Matemáticas" => 1,
                        "Música" => 2,
                        "Ciencias" => 6,
                        "Tecnología" => 8,
                    ]
                ],
                [
                    "nombre" => "Martina",
                    "notas" => [
                        "Lengua" => 1,
                        "Historia" => 6,
                        "Educación Física" => 3,
                        "Inglés" => 5,
                        "Matemáticas" => 3,
                        "Música" => 7,
                        "Ciencias" => 1,
                        "Tecnología" => 8,
                    ]
                ],
                [
                    "nombre" => "Irene",
                    "notas" => [
                        "Lengua" => 3,
                        "Historia" => 5,
                        "Educación Física" => 8,
                        "Inglés" => 3,
                        "Matemáticas" => 10,
                        "Música" => 2,
                        "Ciencias" => 4,
                        "Tecnología" => 5,
                    ]
                ],
                [
                    "nombre" => "Sofía",
                    "notas" => [
                        "Lengua" => 7,
                        "Historia" => 5,
                        "Educación Física" => 4,
                        "Inglés" => 1,
                        "Matemáticas" => 8,
                        "Música" => 7,
                        "Ciencias" => 4,
                        "Tecnología" => 10,
                    ]
                ],
                [
                    "nombre" => "Mateo",
                    "notas" => [
                        "Lengua" => 5,
                        "Historia" => 7,
                        "Educación Física" => 7,
                        "Inglés" => 4,
                        "Matemáticas" => 3,
                        "Música" => 6,
                        "Ciencias" => 3,
                        "Tecnología" => 8,
                    ]
                ],
            ],
        ],
        "Cuarto" => [
            "A" => [
                [
                    "nombre" => "Hugo",
                    "notas" => [
                        "Lengua" => 6,
                        "Historia" => 5,
                        "Educación Física" => 1,
                        "Inglés" => 9,
                        "Matemáticas" => 5,
                        "Música" => 8,
                        "Ciencias" => 5,
                        "Tecnología" => 10,
                    ]
                ],
                [
                    "nombre" => "Carmen",
                    "notas" => [
                        "Lengua" => 8,
                        "Historia" => 9,
                        "Educación Física" => 5,
                        "Inglés" => 10,
                        "Matemáticas" => 3,
                        "Música" => 8,
                        "Ciencias" => 7,
                        "Tecnología" => 3,
                    ]
                ],
                [
                    "nombre" => "Chloe",
                    "notas" => [
                        "Lengua" => 7,
                        "Historia" => 9,
                        "Educación Física" => 7,
                        "Inglés" => 2,
                        "Matemáticas" => 6,
                        "Música" => 10,
                        "Ciencias" => 9,
                        "Tecnología" => 2,
                    ]
                ],
                [
                    "nombre" => "Diego",
                    "notas" => [
                        "Lengua" => 5,
                        "Historia" => 6,
                        "Educación Física" => 10,
                        "Inglés" => 8,
                        "Matemáticas" => 8,
                        "Música" => 5,
                        "Ciencias" => 8,
                        "Tecnología" => 3,
                    ]
                ],
                [
                    "nombre" => "Adrián",
                    "notas" => [
                        "Lengua" => 6,
                        "Historia" => 4,
                        "Educación Física" => 6,
                        "Inglés" => 1,
                        "Matemáticas" => 6,
                        "Música" => 9,
                        "Ciencias" => 6,
                        "Tecnología" => 4,
                    ]
                ],
                [
                    "nombre" => "Sofía",
                    "notas" => [
                        "Lengua" => 4,
                        "Historia" => 9,
                        "Educación Física" => 8,
                        "Inglés" => 1,
                        "Matemáticas" => 1,
                        "Música" => 4,
                        "Ciencias" => 7,
                        "Tecnología" => 3,
                    ]
                ],
                [
                    "nombre" => "Enzo",
                    "notas" => [
                        "Lengua" => 4,
                        "Historia" => 9,
                        "Educación Física" => 4,
                        "Inglés" => 9,
                        "Matemáticas" => 1,
                        "Música" => 4,
                        "Ciencias" => 8,
                        "Tecnología" => 6,
                    ]
                ],
                [
                    "nombre" => "Andrés",
                    "notas" => [
                        "Lengua" => 1,
                        "Historia" => 8,
                        "Educación Física" => 6,
                        "Inglés" => 8,
                        "Matemáticas" => 2,
                        "Música" => 5,
                        "Ciencias" => 2,
                        "Tecnología" => 3,
                    ]
                ],
                [
                    "nombre" => "Antonio",
                    "notas" => [
                        "Lengua" => 7,
                        "Historia" => 7,
                        "Educación Física" => 6,
                        "Inglés" => 3,
                        "Matemáticas" => 2,
                        "Música" => 2,
                        "Ciencias" => 5,
                        "Tecnología" => 7,
                    ]
                ],
                [
                    "nombre" => "Valeria",
                    "notas" => [
                        "Lengua" => 5,
                        "Historia" => 8,
                        "Educación Física" => 9,
                        "Inglés" => 8,
                        "Matemáticas" => 1,
                        "Música" => 1,
                        "Ciencias" => 4,
                        "Tecnología" => 9,
                    ]
                ],
                [
                    "nombre" => "Enzo",
                    "notas" => [
                        "Lengua" => 5,
                        "Historia" => 9,
                        "Educación Física" => 9,
                        "Inglés" => 5,
                        "Matemáticas" => 6,
                        "Música" => 9,
                        "Ciencias" => 1,
                        "Tecnología" => 4,
                    ]
                ],
                [
                    "nombre" => "Sofía",
                    "notas" => [
                        "Lengua" => 2,
                        "Historia" => 1,
                        "Educación Física" => 1,
                        "Inglés" => 2,
                        "Matemáticas" => 4,
                        "Música" => 5,
                        "Ciencias" => 7,
                        "Tecnología" => 5,
                    ]
                ],
                [
                    "nombre" => "Nora",
                    "notas" => [
                        "Lengua" => 3,
                        "Historia" => 4,
                        "Educación Física" => 9,
                        "Inglés" => 10,
                        "Matemáticas" => 7,
                        "Música" => 2,
                        "Ciencias" => 3,
                        "Tecnología" => 6,
                    ]
                ],
                [
                    "nombre" => "Vega",
                    "notas" => [
                        "Lengua" => 8,
                        "Historia" => 6,
                        "Educación Física" => 1,
                        "Inglés" => 2,
                        "Matemáticas" => 8,
                        "Música" => 7,
                        "Ciencias" => 5,
                        "Tecnología" => 10,
                    ]
                ],
                [
                    "nombre" => "David",
                    "notas" => [
                        "Lengua" => 4,
                        "Historia" => 1,
                        "Educación Física" => 9,
                        "Inglés" => 10,
                        "Matemáticas" => 7,
                        "Música" => 1,
                        "Ciencias" => 9,
                        "Tecnología" => 1,
                    ]
                ],
                [
                    "nombre" => "Alejandro",
                    "notas" => [
                        "Lengua" => 7,
                        "Historia" => 6,
                        "Educación Física" => 8,
                        "Inglés" => 8,
                        "Matemáticas" => 3,
                        "Música" => 10,
                        "Ciencias" => 2,
                        "Tecnología" => 8,
                    ]
                ],
                [
                    "nombre" => "Leo",
                    "notas" => [
                        "Lengua" => 3,
                        "Historia" => 9,
                        "Educación Física" => 5,
                        "Inglés" => 10,
                        "Matemáticas" => 7,
                        "Música" => 2,
                        "Ciencias" => 6,
                        "Tecnología" => 2,
                    ]
                ],
                [
                    "nombre" => "Paula",
                    "notas" => [
                        "Lengua" => 10,
                        "Historia" => 2,
                        "Educación Física" => 5,
                        "Inglés" => 5,
                        "Matemáticas" => 10,
                        "Música" => 9,
                        "Ciencias" => 7,
                        "Tecnología" => 2,
                    ]
                ],
                [
                    "nombre" => "Nora",
                    "notas" => [
                        "Lengua" => 9,
                        "Historia" => 7,
                        "Educación Física" => 3,
                        "Inglés" => 9,
                        "Matemáticas" => 6,
                        "Música" => 4,
                        "Ciencias" => 6,
                        "Tecnología" => 5,
                    ]
                ],
                [
                    "nombre" => "Andrés",
                    "notas" => [
                        "Lengua" => 1,
                        "Historia" => 7,
                        "Educación Física" => 4,
                        "Inglés" => 3,
                        "Matemáticas" => 10,
                        "Música" => 7,
                        "Ciencias" => 5,
                        "Tecnología" => 7,
                    ]
                ],
            ],
            "B" => [
                [
                    "nombre" => "Antonio",
                    "notas" => [
                        "Lengua" => 7,
                        "Historia" => 2,
                        "Educación Física" => 9,
                        "Inglés" => 7,
                        "Matemáticas" => 1,
                        "Música" => 5,
                        "Ciencias" => 3,
                        "Tecnología" => 1,
                    ]
                ],
                [
                    "nombre" => "Claudia",
                    "notas" => [
                        "Lengua" => 4,
                        "Historia" => 9,
                        "Educación Física" => 2,
                        "Inglés" => 2,
                        "Matemáticas" => 6,
                        "Música" => 2,
                        "Ciencias" => 5,
                        "Tecnología" => 3,
                    ]
                ],
                [
                    "nombre" => "Daniel",
                    "notas" => [
                        "Lengua" => 8,
                        "Historia" => 9,
                        "Educación Física" => 7,
                        "Inglés" => 5,
                        "Matemáticas" => 6,
                        "Música" => 7,
                        "Ciencias" => 1,
                        "Tecnología" => 5,
                    ]
                ],
                [
                    "nombre" => "Gabriel",
                    "notas" => [
                        "Lengua" => 5,
                        "Historia" => 10,
                        "Educación Física" => 7,
                        "Inglés" => 1,
                        "Matemáticas" => 6,
                        "Música" => 4,
                        "Ciencias" => 9,
                        "Tecnología" => 3,
                    ]
                ],
                [
                    "nombre" => "Martina",
                    "notas" => [
                        "Lengua" => 1,
                        "Historia" => 10,
                        "Educación Física" => 4,
                        "Inglés" => 5,
                        "Matemáticas" => 10,
                        "Música" => 7,
                        "Ciencias" => 2,
                        "Tecnología" => 1,
                    ]
                ],
                [
                    "nombre" => "Pablo",
                    "notas" => [
                        "Lengua" => 7,
                        "Historia" => 8,
                        "Educación Física" => 4,
                        "Inglés" => 9,
                        "Matemáticas" => 1,
                        "Música" => 6,
                        "Ciencias" => 6,
                        "Tecnología" => 1,
                    ]
                ],
                [
                    "nombre" => "Valeria",
                    "notas" => [
                        "Lengua" => 10,
                        "Historia" => 6,
                        "Educación Física" => 3,
                        "Inglés" => 1,
                        "Matemáticas" => 6,
                        "Música" => 2,
                        "Ciencias" => 10,
                        "Tecnología" => 3,
                    ]
                ],
                [
                    "nombre" => "Antonio",
                    "notas" => [
                        "Lengua" => 1,
                        "Historia" => 1,
                        "Educación Física" => 1,
                        "Inglés" => 1,
                        "Matemáticas" => 9,
                        "Música" => 3,
                        "Ciencias" => 5,
                        "Tecnología" => 9,
                    ]
                ],
                [
                    "nombre" => "Vega",
                    "notas" => [
                        "Lengua" => 3,
                        "Historia" => 1,
                        "Educación Física" => 10,
                        "Inglés" => 7,
                        "Matemáticas" => 4,
                        "Música" => 8,
                        "Ciencias" => 2,
                        "Tecnología" => 10,
                    ]
                ],
                [
                    "nombre" => "Emma",
                    "notas" => [
                        "Lengua" => 7,
                        "Historia" => 1,
                        "Educación Física" => 7,
                        "Inglés" => 10,
                        "Matemáticas" => 4,
                        "Música" => 9,
                        "Ciencias" => 7,
                        "Tecnología" => 4,
                    ]
                ],
                [
                    "nombre" => "Claudia",
                    "notas" => [
                        "Lengua" => 7,
                        "Historia" => 4,
                        "Educación Física" => 1,
                        "Inglés" => 1,
                        "Matemáticas" => 5,
                        "Música" => 9,
                        "Ciencias" => 3,
                        "Tecnología" => 10,
                    ]
                ],
                [
                    "nombre" => "Sofía",
                    "notas" => [
                        "Lengua" => 5,
                        "Historia" => 3,
                        "Educación Física" => 2,
                        "Inglés" => 10,
                        "Matemáticas" => 3,
                        "Música" => 7,
                        "Ciencias" => 10,
                        "Tecnología" => 1,
                    ]
                ],
                [
                    "nombre" => "Chloe",
                    "notas" => [
                        "Lengua" => 3,
                        "Historia" => 7,
                        "Educación Física" => 1,
                        "Inglés" => 10,
                        "Matemáticas" => 9,
                        "Música" => 10,
                        "Ciencias" => 5,
                        "Tecnología" => 3,
                    ]
                ],
                [
                    "nombre" => "Noa",
                    "notas" => [
                        "Lengua" => 2,
                        "Historia" => 7,
                        "Educación Física" => 2,
                        "Inglés" => 6,
                        "Matemáticas" => 1,
                        "Música" => 1,
                        "Ciencias" => 5,
                        "Tecnología" => 5,
                    ]
                ],
                [
                    "nombre" => "Isabel",
                    "notas" => [
                        "Lengua" => 5,
                        "Historia" => 3,
                        "Educación Física" => 1,
                        "Inglés" => 10,
                        "Matemáticas" => 9,
                        "Música" => 9,
                        "Ciencias" => 8,
                        "Tecnología" => 2,
                    ]
                ],
                [
                    "nombre" => "Mateo",
                    "notas" => [
                        "Lengua" => 2,
                        "Historia" => 5,
                        "Educación Física" => 1,
                        "Inglés" => 5,
                        "Matemáticas" => 1,
                        "Música" => 9,
                        "Ciencias" => 5,
                        "Tecnología" => 1,
                    ]
                ],
                [
                    "nombre" => "Juan",
                    "notas" => [
                        "Lengua" => 3,
                        "Historia" => 3,
                        "Educación Física" => 5,
                        "Inglés" => 9,
                        "Matemáticas" => 9,
                        "Música" => 4,
                        "Ciencias" => 7,
                        "Tecnología" => 2,
                    ]
                ],
                [
                    "nombre" => "Alba",
                    "notas" => [
                        "Lengua" => 1,
                        "Historia" => 6,
                        "Educación Física" => 4,
                        "Inglés" => 10,
                        "Matemáticas" => 8,
                        "Música" => 4,
                        "Ciencias" => 2,
                        "Tecnología" => 10,
                    ]
                ],
                [
                    "nombre" => "Gabriel",
                    "notas" => [
                        "Lengua" => 7,
                        "Historia" => 9,
                        "Educación Física" => 1,
                        "Inglés" => 2,
                        "Matemáticas" => 10,
                        "Música" => 6,
                        "Ciencias" => 2,
                        "Tecnología" => 7,
                    ]
                ],
                [
                    "nombre" => "Julia",
                    "notas" => [
                        "Lengua" => 2,
                        "Historia" => 1,
                        "Educación Física" => 2,
                        "Inglés" => 8,
                        "Matemáticas" => 1,
                        "Música" => 9,
                        "Ciencias" => 10,
                        "Tecnología" => 9,
                    ]
                ],
            ],
            "C" => [
                [
                    "nombre" => "Chloe",
                    "notas" => [
                        "Lengua" => 1,
                        "Historia" => 2,
                        "Educación Física" => 7,
                        "Inglés" => 7,
                        "Matemáticas" => 6,
                        "Música" => 3,
                        "Ciencias" => 2,
                        "Tecnología" => 2,
                    ]
                ],
                [
                    "nombre" => "Daniel",
                    "notas" => [
                        "Lengua" => 3,
                        "Historia" => 10,
                        "Educación Física" => 9,
                        "Inglés" => 6,
                        "Matemáticas" => 6,
                        "Música" => 3,
                        "Ciencias" => 8,
                        "Tecnología" => 5,
                    ]
                ],
                [
                    "nombre" => "Claudia",
                    "notas" => [
                        "Lengua" => 1,
                        "Historia" => 6,
                        "Educación Física" => 5,
                        "Inglés" => 7,
                        "Matemáticas" => 2,
                        "Música" => 2,
                        "Ciencias" => 7,
                        "Tecnología" => 10,
                    ]
                ],
                [
                    "nombre" => "Martina",
                    "notas" => [
                        "Lengua" => 3,
                        "Historia" => 8,
                        "Educación Física" => 7,
                        "Inglés" => 8,
                        "Matemáticas" => 8,
                        "Música" => 3,
                        "Ciencias" => 6,
                        "Tecnología" => 8,
                    ]
                ],
                [
                    "nombre" => "Javier",
                    "notas" => [
                        "Lengua" => 1,
                        "Historia" => 4,
                        "Educación Física" => 7,
                        "Inglés" => 2,
                        "Matemáticas" => 6,
                        "Música" => 6,
                        "Ciencias" => 5,
                        "Tecnología" => 3,
                    ]
                ],
                [
                    "nombre" => "Nora",
                    "notas" => [
                        "Lengua" => 8,
                        "Historia" => 8,
                        "Educación Física" => 9,
                        "Inglés" => 9,
                        "Matemáticas" => 6,
                        "Música" => 9,
                        "Ciencias" => 5,
                        "Tecnología" => 7,
                    ]
                ],
                [
                    "nombre" => "Pedro",
                    "notas" => [
                        "Lengua" => 7,
                        "Historia" => 1,
                        "Educación Física" => 2,
                        "Inglés" => 6,
                        "Matemáticas" => 9,
                        "Música" => 5,
                        "Ciencias" => 7,
                        "Tecnología" => 8,
                    ]
                ],
                [
                    "nombre" => "Pedro",
                    "notas" => [
                        "Lengua" => 6,
                        "Historia" => 2,
                        "Educación Física" => 5,
                        "Inglés" => 5,
                        "Matemáticas" => 7,
                        "Música" => 4,
                        "Ciencias" => 2,
                        "Tecnología" => 10,
                    ]
                ],
                [
                    "nombre" => "Manuel",
                    "notas" => [
                        "Lengua" => 8,
                        "Historia" => 1,
                        "Educación Física" => 9,
                        "Inglés" => 2,
                        "Matemáticas" => 3,
                        "Música" => 1,
                        "Ciencias" => 10,
                        "Tecnología" => 6,
                    ]
                ],
                [
                    "nombre" => "Leo",
                    "notas" => [
                        "Lengua" => 9,
                        "Historia" => 7,
                        "Educación Física" => 7,
                        "Inglés" => 5,
                        "Matemáticas" => 6,
                        "Música" => 6,
                        "Ciencias" => 9,
                        "Tecnología" => 4,
                    ]
                ],
                [
                    "nombre" => "Juan",
                    "notas" => [
                        "Lengua" => 7,
                        "Historia" => 5,
                        "Educación Física" => 7,
                        "Inglés" => 3,
                        "Matemáticas" => 3,
                        "Música" => 6,
                        "Ciencias" => 4,
                        "Tecnología" => 1,
                    ]
                ],
                [
                    "nombre" => "Leo",
                    "notas" => [
                        "Lengua" => 6,
                        "Historia" => 5,
                        "Educación Física" => 6,
                        "Inglés" => 9,
                        "Matemáticas" => 7,
                        "Música" => 9,
                        "Ciencias" => 8,
                        "Tecnología" => 6,
                    ]
                ],
                [
                    "nombre" => "Paula",
                    "notas" => [
                        "Lengua" => 1,
                        "Historia" => 10,
                        "Educación Física" => 1,
                        "Inglés" => 7,
                        "Matemáticas" => 9,
                        "Música" => 6,
                        "Ciencias" => 5,
                        "Tecnología" => 9,
                    ]
                ],
                [
                    "nombre" => "Julia",
                    "notas" => [
                        "Lengua" => 7,
                        "Historia" => 9,
                        "Educación Física" => 5,
                        "Inglés" => 1,
                        "Matemáticas" => 5,
                        "Música" => 10,
                        "Ciencias" => 2,
                        "Tecnología" => 4,
                    ]
                ],
                [
                    "nombre" => "Mateo",
                    "notas" => [
                        "Lengua" => 4,
                        "Historia" => 10,
                        "Educación Física" => 1,
                        "Inglés" => 8,
                        "Matemáticas" => 2,
                        "Música" => 6,
                        "Ciencias" => 9,
                        "Tecnología" => 4,
                    ]
                ],
                [
                    "nombre" => "Mateo",
                    "notas" => [
                        "Lengua" => 10,
                        "Historia" => 10,
                        "Educación Física" => 10,
                        "Inglés" => 3,
                        "Matemáticas" => 4,
                        "Música" => 8,
                        "Ciencias" => 1,
                        "Tecnología" => 3,
                    ]
                ],
                [
                    "nombre" => "Pablo",
                    "notas" => [
                        "Lengua" => 8,
                        "Historia" => 9,
                        "Educación Física" => 9,
                        "Inglés" => 7,
                        "Matemáticas" => 8,
                        "Música" => 9,
                        "Ciencias" => 3,
                        "Tecnología" => 2,
                    ]
                ],
                [
                    "nombre" => "Nora",
                    "notas" => [
                        "Lengua" => 6,
                        "Historia" => 9,
                        "Educación Física" => 10,
                        "Inglés" => 1,
                        "Matemáticas" => 9,
                        "Música" => 8,
                        "Ciencias" => 2,
                        "Tecnología" => 5,
                    ]
                ],
                [
                    "nombre" => "Lucas",
                    "notas" => [
                        "Lengua" => 10,
                        "Historia" => 6,
                        "Educación Física" => 7,
                        "Inglés" => 8,
                        "Matemáticas" => 4,
                        "Música" => 3,
                        "Ciencias" => 10,
                        "Tecnología" => 8,
                    ]
                ],
                [
                    "nombre" => "David",
                    "notas" => [
                        "Lengua" => 2,
                        "Historia" => 9,
                        "Educación Física" => 2,
                        "Inglés" => 8,
                        "Matemáticas" => 1,
                        "Música" => 10,
                        "Ciencias" => 5,
                        "Tecnología" => 1,
                    ]
                ],
            ],
        ],
        "Quinto" => [
            "A" => [
                [
                    "nombre" => "Martina",
                    "notas" => [
                        "Lengua" => 2,
                        "Historia" => 7,
                        "Educación Física" => 3,
                        "Inglés" => 3,
                        "Matemáticas" => 8,
                        "Música" => 4,
                        "Ciencias" => 6,
                        "Tecnología" => 8,
                    ]
                ],
                [
                    "nombre" => "Manuel",
                    "notas" => [
                        "Lengua" => 7,
                        "Historia" => 3,
                        "Educación Física" => 3,
                        "Inglés" => 8,
                        "Matemáticas" => 9,
                        "Música" => 2,
                        "Ciencias" => 5,
                        "Tecnología" => 3,
                    ]
                ],
                [
                    "nombre" => "Sofía",
                    "notas" => [
                        "Lengua" => 2,
                        "Historia" => 1,
                        "Educación Física" => 4,
                        "Inglés" => 9,
                        "Matemáticas" => 7,
                        "Música" => 9,
                        "Ciencias" => 7,
                        "Tecnología" => 6,
                    ]
                ],
                [
                    "nombre" => "Alejandro",
                    "notas" => [
                        "Lengua" => 1,
                        "Historia" => 2,
                        "Educación Física" => 3,
                        "Inglés" => 5,
                        "Matemáticas" => 8,
                        "Música" => 5,
                        "Ciencias" => 7,
                        "Tecnología" => 4,
                    ]
                ],
                [
                    "nombre" => "Pedro",
                    "notas" => [
                        "Lengua" => 6,
                        "Historia" => 4,
                        "Educación Física" => 8,
                        "Inglés" => 5,
                        "Matemáticas" => 7,
                        "Música" => 10,
                        "Ciencias" => 8,
                        "Tecnología" => 10,
                    ]
                ],
                [
                    "nombre" => "Enzo",
                    "notas" => [
                        "Lengua" => 1,
                        "Historia" => 6,
                        "Educación Física" => 1,
                        "Inglés" => 3,
                        "Matemáticas" => 4,
                        "Música" => 10,
                        "Ciencias" => 2,
                        "Tecnología" => 4,
                    ]
                ],
                [
                    "nombre" => "Lucas",
                    "notas" => [
                        "Lengua" => 4,
                        "Historia" => 3,
                        "Educación Física" => 5,
                        "Inglés" => 5,
                        "Matemáticas" => 7,
                        "Música" => 6,
                        "Ciencias" => 7,
                        "Tecnología" => 1,
                    ]
                ],
                [
                    "nombre" => "Javier",
                    "notas" => [
                        "Lengua" => 5,
                        "Historia" => 10,
                        "Educación Física" => 9,
                        "Inglés" => 1,
                        "Matemáticas" => 4,
                        "Música" => 8,
                        "Ciencias" => 10,
                        "Tecnología" => 3,
                    ]
                ],
                [
                    "nombre" => "Pablo",
                    "notas" => [
                        "Lengua" => 8,
                        "Historia" => 5,
                        "Educación Física" => 7,
                        "Inglés" => 1,
                        "Matemáticas" => 10,
                        "Música" => 3,
                        "Ciencias" => 5,
                        "Tecnología" => 9,
                    ]
                ],
                [
                    "nombre" => "Leo",
                    "notas" => [
                        "Lengua" => 4,
                        "Historia" => 9,
                        "Educación Física" => 8,
                        "Inglés" => 2,
                        "Matemáticas" => 8,
                        "Música" => 1,
                        "Ciencias" => 1,
                        "Tecnología" => 10,
                    ]
                ],
                [
                    "nombre" => "Paula",
                    "notas" => [
                        "Lengua" => 3,
                        "Historia" => 5,
                        "Educación Física" => 8,
                        "Inglés" => 6,
                        "Matemáticas" => 9,
                        "Música" => 5,
                        "Ciencias" => 1,
                        "Tecnología" => 7,
                    ]
                ],
                [
                    "nombre" => "Carmen",
                    "notas" => [
                        "Lengua" => 3,
                        "Historia" => 7,
                        "Educación Física" => 6,
                        "Inglés" => 2,
                        "Matemáticas" => 6,
                        "Música" => 10,
                        "Ciencias" => 6,
                        "Tecnología" => 1,
                    ]
                ],
                [
                    "nombre" => "Hugo",
                    "notas" => [
                        "Lengua" => 10,
                        "Historia" => 6,
                        "Educación Física" => 9,
                        "Inglés" => 4,
                        "Matemáticas" => 3,
                        "Música" => 5,
                        "Ciencias" => 1,
                        "Tecnología" => 5,
                    ]
                ],
                [
                    "nombre" => "Juan",
                    "notas" => [
                        "Lengua" => 9,
                        "Historia" => 5,
                        "Educación Física" => 7,
                        "Inglés" => 4,
                        "Matemáticas" => 7,
                        "Música" => 3,
                        "Ciencias" => 10,
                        "Tecnología" => 2,
                    ]
                ],
                [
                    "nombre" => "Carla",
                    "notas" => [
                        "Lengua" => 6,
                        "Historia" => 8,
                        "Educación Física" => 4,
                        "Inglés" => 6,
                        "Matemáticas" => 9,
                        "Música" => 1,
                        "Ciencias" => 8,
                        "Tecnología" => 10,
                    ]
                ],
                [
                    "nombre" => "Hugo",
                    "notas" => [
                        "Lengua" => 1,
                        "Historia" => 5,
                        "Educación Física" => 7,
                        "Inglés" => 7,
                        "Matemáticas" => 10,
                        "Música" => 6,
                        "Ciencias" => 2,
                        "Tecnología" => 4,
                    ]
                ],
                [
                    "nombre" => "Nora",
                    "notas" => [
                        "Lengua" => 6,
                        "Historia" => 4,
                        "Educación Física" => 3,
                        "Inglés" => 6,
                        "Matemáticas" => 7,
                        "Música" => 4,
                        "Ciencias" => 7,
                        "Tecnología" => 7,
                    ]
                ],
                [
                    "nombre" => "Leo",
                    "notas" => [
                        "Lengua" => 8,
                        "Historia" => 5,
                        "Educación Física" => 7,
                        "Inglés" => 9,
                        "Matemáticas" => 4,
                        "Música" => 7,
                        "Ciencias" => 9,
                        "Tecnología" => 4,
                    ]
                ],
                [
                    "nombre" => "Emma",
                    "notas" => [
                        "Lengua" => 6,
                        "Historia" => 1,
                        "Educación Física" => 7,
                        "Inglés" => 10,
                        "Matemáticas" => 6,
                        "Música" => 6,
                        "Ciencias" => 9,
                        "Tecnología" => 1,
                    ]
                ],
                [
                    "nombre" => "Mía",
                    "notas" => [
                        "Lengua" => 1,
                        "Historia" => 7,
                        "Educación Física" => 7,
                        "Inglés" => 10,
                        "Matemáticas" => 5,
                        "Música" => 3,
                        "Ciencias" => 7,
                        "Tecnología" => 2,
                    ]
                ],
            ],
            "B" => [
                [
                    "nombre" => "Olivia",
                    "notas" => [
                        "Lengua" => 2,
                        "Historia" => 9,
                        "Educación Física" => 8,
                        "Inglés" => 4,
                        "Matemáticas" => 7,
                        "Música" => 2,
                        "Ciencias" => 10,
                        "Tecnología" => 3,
                    ]
                ],
                [
                    "nombre" => "Antonio",
                    "notas" => [
                        "Lengua" => 3,
                        "Historia" => 9,
                        "Educación Física" => 2,
                        "Inglés" => 5,
                        "Matemáticas" => 5,
                        "Música" => 4,
                        "Ciencias" => 10,
                        "Tecnología" => 6,
                    ]
                ],
                [
                    "nombre" => "Claudia",
                    "notas" => [
                        "Lengua" => 2,
                        "Historia" => 9,
                        "Educación Física" => 1,
                        "Inglés" => 4,
                        "Matemáticas" => 9,
                        "Música" => 5,
                        "Ciencias" => 6,
                        "Tecnología" => 3,
                    ]
                ],
                [
                    "nombre" => "Hugo",
                    "notas" => [
                        "Lengua" => 6,
                        "Historia" => 4,
                        "Educación Física" => 5,
                        "Inglés" => 7,
                        "Matemáticas" => 9,
                        "Música" => 8,
                        "Ciencias" => 6,
                        "Tecnología" => 8,
                    ]
                ],
                [
                    "nombre" => "Mario",
                    "notas" => [
                        "Lengua" => 3,
                        "Historia" => 5,
                        "Educación Física" => 4,
                        "Inglés" => 4,
                        "Matemáticas" => 3,
                        "Música" => 7,
                        "Ciencias" => 7,
                        "Tecnología" => 6,
                    ]
                ],
                [
                    "nombre" => "Juan",
                    "notas" => [
                        "Lengua" => 10,
                        "Historia" => 3,
                        "Educación Física" => 1,
                        "Inglés" => 7,
                        "Matemáticas" => 7,
                        "Música" => 3,
                        "Ciencias" => 1,
                        "Tecnología" => 6,
                    ]
                ],
                [
                    "nombre" => "Emma",
                    "notas" => [
                        "Lengua" => 4,
                        "Historia" => 5,
                        "Educación Física" => 10,
                        "Inglés" => 7,
                        "Matemáticas" => 6,
                        "Música" => 8,
                        "Ciencias" => 10,
                        "Tecnología" => 2,
                    ]
                ],
                [
                    "nombre" => "Martina",
                    "notas" => [
                        "Lengua" => 9,
                        "Historia" => 1,
                        "Educación Física" => 1,
                        "Inglés" => 7,
                        "Matemáticas" => 9,
                        "Música" => 9,
                        "Ciencias" => 6,
                        "Tecnología" => 3,
                    ]
                ],
                [
                    "nombre" => "Antonio",
                    "notas" => [
                        "Lengua" => 1,
                        "Historia" => 4,
                        "Educación Física" => 1,
                        "Inglés" => 3,
                        "Matemáticas" => 5,
                        "Música" => 3,
                        "Ciencias" => 3,
                        "Tecnología" => 7,
                    ]
                ],
                [
                    "nombre" => "Antonio",
                    "notas" => [
                        "Lengua" => 7,
                        "Historia" => 4,
                        "Educación Física" => 4,
                        "Inglés" => 6,
                        "Matemáticas" => 1,
                        "Música" => 8,
                        "Ciencias" => 2,
                        "Tecnología" => 3,
                    ]
                ],
                [
                    "nombre" => "Sara",
                    "notas" => [
                        "Lengua" => 10,
                        "Historia" => 6,
                        "Educación Física" => 5,
                        "Inglés" => 7,
                        "Matemáticas" => 9,
                        "Música" => 4,
                        "Ciencias" => 7,
                        "Tecnología" => 3,
                    ]
                ],
                [
                    "nombre" => "Alejandro",
                    "notas" => [
                        "Lengua" => 10,
                        "Historia" => 1,
                        "Educación Física" => 1,
                        "Inglés" => 9,
                        "Matemáticas" => 10,
                        "Música" => 7,
                        "Ciencias" => 1,
                        "Tecnología" => 9,
                    ]
                ],
                [
                    "nombre" => "Javier",
                    "notas" => [
                        "Lengua" => 5,
                        "Historia" => 7,
                        "Educación Física" => 8,
                        "Inglés" => 4,
                        "Matemáticas" => 2,
                        "Música" => 10,
                        "Ciencias" => 5,
                        "Tecnología" => 4,
                    ]
                ],
                [
                    "nombre" => "Carmen",
                    "notas" => [
                        "Lengua" => 7,
                        "Historia" => 6,
                        "Educación Física" => 9,
                        "Inglés" => 10,
                        "Matemáticas" => 8,
                        "Música" => 2,
                        "Ciencias" => 1,
                        "Tecnología" => 2,
                    ]
                ],
                [
                    "nombre" => "Javier",
                    "notas" => [
                        "Lengua" => 7,
                        "Historia" => 1,
                        "Educación Física" => 1,
                        "Inglés" => 1,
                        "Matemáticas" => 2,
                        "Música" => 5,
                        "Ciencias" => 6,
                        "Tecnología" => 7,
                    ]
                ],
                [
                    "nombre" => "Sara",
                    "notas" => [
                        "Lengua" => 6,
                        "Historia" => 4,
                        "Educación Física" => 7,
                        "Inglés" => 6,
                        "Matemáticas" => 10,
                        "Música" => 1,
                        "Ciencias" => 7,
                        "Tecnología" => 4,
                    ]
                ],
                [
                    "nombre" => "Hugo",
                    "notas" => [
                        "Lengua" => 10,
                        "Historia" => 5,
                        "Educación Física" => 1,
                        "Inglés" => 7,
                        "Matemáticas" => 3,
                        "Música" => 9,
                        "Ciencias" => 8,
                        "Tecnología" => 5,
                    ]
                ],
                [
                    "nombre" => "Mateo",
                    "notas" => [
                        "Lengua" => 5,
                        "Historia" => 9,
                        "Educación Física" => 6,
                        "Inglés" => 7,
                        "Matemáticas" => 4,
                        "Música" => 9,
                        "Ciencias" => 10,
                        "Tecnología" => 2,
                    ]
                ],
                [
                    "nombre" => "Álvaro",
                    "notas" => [
                        "Lengua" => 10,
                        "Historia" => 2,
                        "Educación Física" => 5,
                        "Inglés" => 2,
                        "Matemáticas" => 7,
                        "Música" => 8,
                        "Ciencias" => 4,
                        "Tecnología" => 3,
                    ]
                ],
                [
                    "nombre" => "Daniel",
                    "notas" => [
                        "Lengua" => 4,
                        "Historia" => 7,
                        "Educación Física" => 8,
                        "Inglés" => 2,
                        "Matemáticas" => 1,
                        "Música" => 4,
                        "Ciencias" => 7,
                        "Tecnología" => 2,
                    ]
                ],
            ],
            "C" => [
                [
                    "nombre" => "Martina",
                    "notas" => [
                        "Lengua" => 4,
                        "Historia" => 8,
                        "Educación Física" => 3,
                        "Inglés" => 9,
                        "Matemáticas" => 10,
                        "Música" => 6,
                        "Ciencias" => 7,
                        "Tecnología" => 9,
                    ]
                ],
                [
                    "nombre" => "Julia",
                    "notas" => [
                        "Lengua" => 4,
                        "Historia" => 6,
                        "Educación Física" => 2,
                        "Inglés" => 9,
                        "Matemáticas" => 3,
                        "Música" => 7,
                        "Ciencias" => 3,
                        "Tecnología" => 10,
                    ]
                ],
                [
                    "nombre" => "Manuel",
                    "notas" => [
                        "Lengua" => 10,
                        "Historia" => 9,
                        "Educación Física" => 2,
                        "Inglés" => 10,
                        "Matemáticas" => 6,
                        "Música" => 3,
                        "Ciencias" => 1,
                        "Tecnología" => 9,
                    ]
                ],
                [
                    "nombre" => "Vega",
                    "notas" => [
                        "Lengua" => 4,
                        "Historia" => 6,
                        "Educación Física" => 6,
                        "Inglés" => 7,
                        "Matemáticas" => 3,
                        "Música" => 6,
                        "Ciencias" => 1,
                        "Tecnología" => 2,
                    ]
                ],
                [
                    "nombre" => "Mateo",
                    "notas" => [
                        "Lengua" => 8,
                        "Historia" => 10,
                        "Educación Física" => 4,
                        "Inglés" => 4,
                        "Matemáticas" => 9,
                        "Música" => 9,
                        "Ciencias" => 9,
                        "Tecnología" => 8,
                    ]
                ],
                [
                    "nombre" => "Noa",
                    "notas" => [
                        "Lengua" => 5,
                        "Historia" => 1,
                        "Educación Física" => 6,
                        "Inglés" => 7,
                        "Matemáticas" => 3,
                        "Música" => 1,
                        "Ciencias" => 7,
                        "Tecnología" => 3,
                    ]
                ],
                [
                    "nombre" => "Pablo",
                    "notas" => [
                        "Lengua" => 1,
                        "Historia" => 8,
                        "Educación Física" => 3,
                        "Inglés" => 9,
                        "Matemáticas" => 10,
                        "Música" => 9,
                        "Ciencias" => 3,
                        "Tecnología" => 10,
                    ]
                ],
                [
                    "nombre" => "Gabriel",
                    "notas" => [
                        "Lengua" => 6,
                        "Historia" => 6,
                        "Educación Física" => 4,
                        "Inglés" => 5,
                        "Matemáticas" => 10,
                        "Música" => 2,
                        "Ciencias" => 4,
                        "Tecnología" => 4,
                    ]
                ],
                [
                    "nombre" => "Sofía",
                    "notas" => [
                        "Lengua" => 3,
                        "Historia" => 8,
                        "Educación Física" => 4,
                        "Inglés" => 6,
                        "Matemáticas" => 7,
                        "Música" => 4,
                        "Ciencias" => 2,
                        "Tecnología" => 8,
                    ]
                ],
                [
                    "nombre" => "Pablo",
                    "notas" => [
                        "Lengua" => 7,
                        "Historia" => 9,
                        "Educación Física" => 2,
                        "Inglés" => 4,
                        "Matemáticas" => 1,
                        "Música" => 6,
                        "Ciencias" => 9,
                        "Tecnología" => 3,
                    ]
                ],
                [
                    "nombre" => "Irene",
                    "notas" => [
                        "Lengua" => 3,
                        "Historia" => 5,
                        "Educación Física" => 5,
                        "Inglés" => 7,
                        "Matemáticas" => 2,
                        "Música" => 7,
                        "Ciencias" => 1,
                        "Tecnología" => 10,
                    ]
                ],
                [
                    "nombre" => "Hugo",
                    "notas" => [
                        "Lengua" => 4,
                        "Historia" => 9,
                        "Educación Física" => 4,
                        "Inglés" => 6,
                        "Matemáticas" => 5,
                        "Música" => 5,
                        "Ciencias" => 2,
                        "Tecnología" => 1,
                    ]
                ],
                [
                    "nombre" => "Manuel",
                    "notas" => [
                        "Lengua" => 7,
                        "Historia" => 10,
                        "Educación Física" => 6,
                        "Inglés" => 2,
                        "Matemáticas" => 8,
                        "Música" => 4,
                        "Ciencias" => 5,
                        "Tecnología" => 1,
                    ]
                ],
                [
                    "nombre" => "Irene",
                    "notas" => [
                        "Lengua" => 3,
                        "Historia" => 3,
                        "Educación Física" => 1,
                        "Inglés" => 8,
                        "Matemáticas" => 1,
                        "Música" => 2,
                        "Ciencias" => 2,
                        "Tecnología" => 10,
                    ]
                ],
                [
                    "nombre" => "Enzo",
                    "notas" => [
                        "Lengua" => 1,
                        "Historia" => 3,
                        "Educación Física" => 3,
                        "Inglés" => 1,
                        "Matemáticas" => 10,
                        "Música" => 1,
                        "Ciencias" => 10,
                        "Tecnología" => 4,
                    ]
                ],
                [
                    "nombre" => "Andrés",
                    "notas" => [
                        "Lengua" => 8,
                        "Historia" => 3,
                        "Educación Física" => 10,
                        "Inglés" => 9,
                        "Matemáticas" => 5,
                        "Música" => 7,
                        "Ciencias" => 8,
                        "Tecnología" => 7,
                    ]
                ],
                [
                    "nombre" => "Pablo",
                    "notas" => [
                        "Lengua" => 2,
                        "Historia" => 8,
                        "Educación Física" => 5,
                        "Inglés" => 3,
                        "Matemáticas" => 8,
                        "Música" => 8,
                        "Ciencias" => 10,
                        "Tecnología" => 9,
                    ]
                ],
                [
                    "nombre" => "Paula",
                    "notas" => [
                        "Lengua" => 7,
                        "Historia" => 3,
                        "Educación Física" => 1,
                        "Inglés" => 1,
                        "Matemáticas" => 6,
                        "Música" => 10,
                        "Ciencias" => 8,
                        "Tecnología" => 7,
                    ]
                ],
                [
                    "nombre" => "Manuel",
                    "notas" => [
                        "Lengua" => 3,
                        "Historia" => 2,
                        "Educación Física" => 8,
                        "Inglés" => 2,
                        "Matemáticas" => 8,
                        "Música" => 5,
                        "Ciencias" => 5,
                        "Tecnología" => 4,
                    ]
                ],
                [
                    "nombre" => "Lucas",
                    "notas" => [
                        "Lengua" => 10,
                        "Historia" => 4,
                        "Educación Física" => 8,
                        "Inglés" => 6,
                        "Matemáticas" => 2,
                        "Música" => 8,
                        "Ciencias" => 3,
                        "Tecnología" => 8,
                    ]
                ],
            ],
        ],
        "Sexto" => [
            "A" => [
                [
                    "nombre" => "Vega",
                    "notas" => [
                        "Lengua" => 4,
                        "Historia" => 8,
                        "Educación Física" => 9,
                        "Inglés" => 6,
                        "Matemáticas" => 3,
                        "Música" => 6,
                        "Ciencias" => 3,
                        "Tecnología" => 6,
                    ]
                ],
                [
                    "nombre" => "Gabriel",
                    "notas" => [
                        "Lengua" => 7,
                        "Historia" => 5,
                        "Educación Física" => 9,
                        "Inglés" => 2,
                        "Matemáticas" => 10,
                        "Música" => 10,
                        "Ciencias" => 1,
                        "Tecnología" => 10,
                    ]
                ],
                [
                    "nombre" => "Sofía",
                    "notas" => [
                        "Lengua" => 3,
                        "Historia" => 1,
                        "Educación Física" => 2,
                        "Inglés" => 6,
                        "Matemáticas" => 10,
                        "Música" => 7,
                        "Ciencias" => 9,
                        "Tecnología" => 10,
                    ]
                ],
                [
                    "nombre" => "Julia",
                    "notas" => [
                        "Lengua" => 5,
                        "Historia" => 9,
                        "Educación Física" => 1,
                        "Inglés" => 2,
                        "Matemáticas" => 1,
                        "Música" => 7,
                        "Ciencias" => 3,
                        "Tecnología" => 1,
                    ]
                ],
                [
                    "nombre" => "Pablo",
                    "notas" => [
                        "Lengua" => 8,
                        "Historia" => 1,
                        "Educación Física" => 1,
                        "Inglés" => 5,
                        "Matemáticas" => 9,
                        "Música" => 1,
                        "Ciencias" => 9,
                        "Tecnología" => 2,
                    ]
                ],
                [
                    "nombre" => "Emma",
                    "notas" => [
                        "Lengua" => 2,
                        "Historia" => 7,
                        "Educación Física" => 2,
                        "Inglés" => 3,
                        "Matemáticas" => 10,
                        "Música" => 1,
                        "Ciencias" => 7,
                        "Tecnología" => 3,
                    ]
                ],
                [
                    "nombre" => "Valeria",
                    "notas" => [
                        "Lengua" => 7,
                        "Historia" => 2,
                        "Educación Física" => 6,
                        "Inglés" => 8,
                        "Matemáticas" => 7,
                        "Música" => 8,
                        "Ciencias" => 5,
                        "Tecnología" => 6,
                    ]
                ],
                [
                    "nombre" => "Álvaro",
                    "notas" => [
                        "Lengua" => 1,
                        "Historia" => 5,
                        "Educación Física" => 8,
                        "Inglés" => 5,
                        "Matemáticas" => 3,
                        "Música" => 6,
                        "Ciencias" => 1,
                        "Tecnología" => 6,
                    ]
                ],
                [
                    "nombre" => "Noa",
                    "notas" => [
                        "Lengua" => 4,
                        "Historia" => 9,
                        "Educación Física" => 1,
                        "Inglés" => 1,
                        "Matemáticas" => 4,
                        "Música" => 10,
                        "Ciencias" => 8,
                        "Tecnología" => 8,
                    ]
                ],
                [
                    "nombre" => "Claudia",
                    "notas" => [
                        "Lengua" => 9,
                        "Historia" => 6,
                        "Educación Física" => 1,
                        "Inglés" => 5,
                        "Matemáticas" => 10,
                        "Música" => 7,
                        "Ciencias" => 2,
                        "Tecnología" => 7,
                    ]
                ],
                [
                    "nombre" => "Mía",
                    "notas" => [
                        "Lengua" => 2,
                        "Historia" => 5,
                        "Educación Física" => 7,
                        "Inglés" => 6,
                        "Matemáticas" => 5,
                        "Música" => 3,
                        "Ciencias" => 8,
                        "Tecnología" => 8,
                    ]
                ],
                [
                    "nombre" => "Sofía",
                    "notas" => [
                        "Lengua" => 8,
                        "Historia" => 9,
                        "Educación Física" => 2,
                        "Inglés" => 6,
                        "Matemáticas" => 4,
                        "Música" => 9,
                        "Ciencias" => 1,
                        "Tecnología" => 9,
                    ]
                ],
                [
                    "nombre" => "Valeria",
                    "notas" => [
                        "Lengua" => 2,
                        "Historia" => 4,
                        "Educación Física" => 4,
                        "Inglés" => 8,
                        "Matemáticas" => 3,
                        "Música" => 6,
                        "Ciencias" => 3,
                        "Tecnología" => 5,
                    ]
                ],
                [
                    "nombre" => "Diego",
                    "notas" => [
                        "Lengua" => 6,
                        "Historia" => 1,
                        "Educación Física" => 4,
                        "Inglés" => 7,
                        "Matemáticas" => 2,
                        "Música" => 9,
                        "Ciencias" => 3,
                        "Tecnología" => 6,
                    ]
                ],
                [
                    "nombre" => "Alejandro",
                    "notas" => [
                        "Lengua" => 4,
                        "Historia" => 6,
                        "Educación Física" => 5,
                        "Inglés" => 4,
                        "Matemáticas" => 7,
                        "Música" => 8,
                        "Ciencias" => 3,
                        "Tecnología" => 1,
                    ]
                ],
                [
                    "nombre" => "Sofía",
                    "notas" => [
                        "Lengua" => 10,
                        "Historia" => 4,
                        "Educación Física" => 7,
                        "Inglés" => 10,
                        "Matemáticas" => 2,
                        "Música" => 3,
                        "Ciencias" => 6,
                        "Tecnología" => 6,
                    ]
                ],
                [
                    "nombre" => "Irene",
                    "notas" => [
                        "Lengua" => 2,
                        "Historia" => 2,
                        "Educación Física" => 5,
                        "Inglés" => 7,
                        "Matemáticas" => 4,
                        "Música" => 3,
                        "Ciencias" => 3,
                        "Tecnología" => 6,
                    ]
                ],
                [
                    "nombre" => "Andrés",
                    "notas" => [
                        "Lengua" => 8,
                        "Historia" => 8,
                        "Educación Física" => 7,
                        "Inglés" => 7,
                        "Matemáticas" => 10,
                        "Música" => 10,
                        "Ciencias" => 1,
                        "Tecnología" => 5,
                    ]
                ],
                [
                    "nombre" => "Paula",
                    "notas" => [
                        "Lengua" => 10,
                        "Historia" => 2,
                        "Educación Física" => 6,
                        "Inglés" => 8,
                        "Matemáticas" => 9,
                        "Música" => 6,
                        "Ciencias" => 2,
                        "Tecnología" => 6,
                    ]
                ],
                [
                    "nombre" => "Andrés",
                    "notas" => [
                        "Lengua" => 7,
                        "Historia" => 9,
                        "Educación Física" => 9,
                        "Inglés" => 10,
                        "Matemáticas" => 8,
                        "Música" => 7,
                        "Ciencias" => 9,
                        "Tecnología" => 7,
                    ]
                ],
            ],
            "B" => [
                [
                    "nombre" => "Noa",
                    "notas" => [
                        "Lengua" => 9,
                        "Historia" => 8,
                        "Educación Física" => 1,
                        "Inglés" => 5,
                        "Matemáticas" => 6,
                        "Música" => 1,
                        "Ciencias" => 4,
                        "Tecnología" => 8,
                    ]
                ],
                [
                    "nombre" => "Alejandro",
                    "notas" => [
                        "Lengua" => 8,
                        "Historia" => 5,
                        "Educación Física" => 7,
                        "Inglés" => 5,
                        "Matemáticas" => 6,
                        "Música" => 3,
                        "Ciencias" => 9,
                        "Tecnología" => 7,
                    ]
                ],
                [
                    "nombre" => "Sofía",
                    "notas" => [
                        "Lengua" => 5,
                        "Historia" => 8,
                        "Educación Física" => 5,
                        "Inglés" => 4,
                        "Matemáticas" => 7,
                        "Música" => 4,
                        "Ciencias" => 4,
                        "Tecnología" => 2,
                    ]
                ],
                [
                    "nombre" => "Luna",
                    "notas" => [
                        "Lengua" => 1,
                        "Historia" => 4,
                        "Educación Física" => 1,
                        "Inglés" => 9,
                        "Matemáticas" => 4,
                        "Música" => 5,
                        "Ciencias" => 5,
                        "Tecnología" => 9,
                    ]
                ],
                [
                    "nombre" => "Enzo",
                    "notas" => [
                        "Lengua" => 7,
                        "Historia" => 1,
                        "Educación Física" => 1,
                        "Inglés" => 7,
                        "Matemáticas" => 2,
                        "Música" => 7,
                        "Ciencias" => 2,
                        "Tecnología" => 10,
                    ]
                ],
                [
                    "nombre" => "Pablo",
                    "notas" => [
                        "Lengua" => 7,
                        "Historia" => 8,
                        "Educación Física" => 10,
                        "Inglés" => 10,
                        "Matemáticas" => 6,
                        "Música" => 8,
                        "Ciencias" => 10,
                        "Tecnología" => 4,
                    ]
                ],
                [
                    "nombre" => "Pablo",
                    "notas" => [
                        "Lengua" => 9,
                        "Historia" => 2,
                        "Educación Física" => 9,
                        "Inglés" => 7,
                        "Matemáticas" => 10,
                        "Música" => 3,
                        "Ciencias" => 2,
                        "Tecnología" => 9,
                    ]
                ],
                [
                    "nombre" => "Claudia",
                    "notas" => [
                        "Lengua" => 7,
                        "Historia" => 10,
                        "Educación Física" => 10,
                        "Inglés" => 8,
                        "Matemáticas" => 3,
                        "Música" => 7,
                        "Ciencias" => 7,
                        "Tecnología" => 9,
                    ]
                ],
                [
                    "nombre" => "Olivia",
                    "notas" => [
                        "Lengua" => 9,
                        "Historia" => 5,
                        "Educación Física" => 10,
                        "Inglés" => 3,
                        "Matemáticas" => 7,
                        "Música" => 8,
                        "Ciencias" => 9,
                        "Tecnología" => 6,
                    ]
                ],
                [
                    "nombre" => "Leo",
                    "notas" => [
                        "Lengua" => 8,
                        "Historia" => 8,
                        "Educación Física" => 4,
                        "Inglés" => 1,
                        "Matemáticas" => 4,
                        "Música" => 2,
                        "Ciencias" => 9,
                        "Tecnología" => 7,
                    ]
                ],
                [
                    "nombre" => "Olivia",
                    "notas" => [
                        "Lengua" => 9,
                        "Historia" => 7,
                        "Educación Física" => 7,
                        "Inglés" => 2,
                        "Matemáticas" => 8,
                        "Música" => 5,
                        "Ciencias" => 7,
                        "Tecnología" => 6,
                    ]
                ],
                [
                    "nombre" => "Mateo",
                    "notas" => [
                        "Lengua" => 6,
                        "Historia" => 1,
                        "Educación Física" => 10,
                        "Inglés" => 2,
                        "Matemáticas" => 9,
                        "Música" => 5,
                        "Ciencias" => 8,
                        "Tecnología" => 4,
                    ]
                ],
                [
                    "nombre" => "Noa",
                    "notas" => [
                        "Lengua" => 9,
                        "Historia" => 2,
                        "Educación Física" => 3,
                        "Inglés" => 7,
                        "Matemáticas" => 10,
                        "Música" => 4,
                        "Ciencias" => 2,
                        "Tecnología" => 9,
                    ]
                ],
                [
                    "nombre" => "Mateo",
                    "notas" => [
                        "Lengua" => 7,
                        "Historia" => 5,
                        "Educación Física" => 8,
                        "Inglés" => 10,
                        "Matemáticas" => 3,
                        "Música" => 5,
                        "Ciencias" => 6,
                        "Tecnología" => 1,
                    ]
                ],
                [
                    "nombre" => "Leo",
                    "notas" => [
                        "Lengua" => 1,
                        "Historia" => 10,
                        "Educación Física" => 1,
                        "Inglés" => 6,
                        "Matemáticas" => 2,
                        "Música" => 7,
                        "Ciencias" => 7,
                        "Tecnología" => 8,
                    ]
                ],
                [
                    "nombre" => "Irene",
                    "notas" => [
                        "Lengua" => 3,
                        "Historia" => 8,
                        "Educación Física" => 4,
                        "Inglés" => 5,
                        "Matemáticas" => 5,
                        "Música" => 9,
                        "Ciencias" => 5,
                        "Tecnología" => 1,
                    ]
                ],
                [
                    "nombre" => "Alejandro",
                    "notas" => [
                        "Lengua" => 10,
                        "Historia" => 2,
                        "Educación Física" => 2,
                        "Inglés" => 6,
                        "Matemáticas" => 5,
                        "Música" => 1,
                        "Ciencias" => 5,
                        "Tecnología" => 8,
                    ]
                ],
                [
                    "nombre" => "Nora",
                    "notas" => [
                        "Lengua" => 5,
                        "Historia" => 5,
                        "Educación Física" => 8,
                        "Inglés" => 7,
                        "Matemáticas" => 2,
                        "Música" => 1,
                        "Ciencias" => 7,
                        "Tecnología" => 7,
                    ]
                ],
                [
                    "nombre" => "Diego",
                    "notas" => [
                        "Lengua" => 2,
                        "Historia" => 1,
                        "Educación Física" => 2,
                        "Inglés" => 3,
                        "Matemáticas" => 7,
                        "Música" => 2,
                        "Ciencias" => 4,
                        "Tecnología" => 2,
                    ]
                ],
                [
                    "nombre" => "Pedro",
                    "notas" => [
                        "Lengua" => 4,
                        "Historia" => 3,
                        "Educación Física" => 3,
                        "Inglés" => 9,
                        "Matemáticas" => 8,
                        "Música" => 1,
                        "Ciencias" => 6,
                        "Tecnología" => 4,
                    ]
                ],
            ],
            "C" => [
                [
                    "nombre" => "Alejandro",
                    "notas" => [
                        "Lengua" => 5,
                        "Historia" => 2,
                        "Educación Física" => 6,
                        "Inglés" => 3,
                        "Matemáticas" => 6,
                        "Música" => 3,
                        "Ciencias" => 4,
                        "Tecnología" => 8,
                    ]
                ],
                [
                    "nombre" => "Martina",
                    "notas" => [
                        "Lengua" => 10,
                        "Historia" => 5,
                        "Educación Física" => 3,
                        "Inglés" => 8,
                        "Matemáticas" => 4,
                        "Música" => 4,
                        "Ciencias" => 4,
                        "Tecnología" => 9,
                    ]
                ],
                [
                    "nombre" => "Alejandro",
                    "notas" => [
                        "Lengua" => 9,
                        "Historia" => 2,
                        "Educación Física" => 2,
                        "Inglés" => 5,
                        "Matemáticas" => 9,
                        "Música" => 9,
                        "Ciencias" => 6,
                        "Tecnología" => 8,
                    ]
                ],
                [
                    "nombre" => "Martina",
                    "notas" => [
                        "Lengua" => 3,
                        "Historia" => 8,
                        "Educación Física" => 9,
                        "Inglés" => 5,
                        "Matemáticas" => 4,
                        "Música" => 6,
                        "Ciencias" => 6,
                        "Tecnología" => 1,
                    ]
                ],
                [
                    "nombre" => "Hugo",
                    "notas" => [
                        "Lengua" => 6,
                        "Historia" => 4,
                        "Educación Física" => 5,
                        "Inglés" => 6,
                        "Matemáticas" => 2,
                        "Música" => 6,
                        "Ciencias" => 3,
                        "Tecnología" => 5,
                    ]
                ],
                [
                    "nombre" => "Nora",
                    "notas" => [
                        "Lengua" => 4,
                        "Historia" => 9,
                        "Educación Física" => 4,
                        "Inglés" => 1,
                        "Matemáticas" => 1,
                        "Música" => 8,
                        "Ciencias" => 7,
                        "Tecnología" => 2,
                    ]
                ],
                [
                    "nombre" => "Enzo",
                    "notas" => [
                        "Lengua" => 10,
                        "Historia" => 5,
                        "Educación Física" => 3,
                        "Inglés" => 7,
                        "Matemáticas" => 1,
                        "Música" => 1,
                        "Ciencias" => 8,
                        "Tecnología" => 7,
                    ]
                ],
                [
                    "nombre" => "Martina",
                    "notas" => [
                        "Lengua" => 8,
                        "Historia" => 2,
                        "Educación Física" => 8,
                        "Inglés" => 2,
                        "Matemáticas" => 1,
                        "Música" => 8,
                        "Ciencias" => 2,
                        "Tecnología" => 3,
                    ]
                ],
                [
                    "nombre" => "Carla",
                    "notas" => [
                        "Lengua" => 1,
                        "Historia" => 8,
                        "Educación Física" => 4,
                        "Inglés" => 1,
                        "Matemáticas" => 3,
                        "Música" => 7,
                        "Ciencias" => 8,
                        "Tecnología" => 5,
                    ]
                ],
                [
                    "nombre" => "Carla",
                    "notas" => [
                        "Lengua" => 8,
                        "Historia" => 6,
                        "Educación Física" => 8,
                        "Inglés" => 3,
                        "Matemáticas" => 6,
                        "Música" => 8,
                        "Ciencias" => 8,
                        "Tecnología" => 6,
                    ]
                ],
                [
                    "nombre" => "Alejandro",
                    "notas" => [
                        "Lengua" => 6,
                        "Historia" => 4,
                        "Educación Física" => 3,
                        "Inglés" => 2,
                        "Matemáticas" => 4,
                        "Música" => 4,
                        "Ciencias" => 5,
                        "Tecnología" => 6,
                    ]
                ],
                [
                    "nombre" => "Lucas",
                    "notas" => [
                        "Lengua" => 7,
                        "Historia" => 3,
                        "Educación Física" => 10,
                        "Inglés" => 5,
                        "Matemáticas" => 8,
                        "Música" => 3,
                        "Ciencias" => 6,
                        "Tecnología" => 5,
                    ]
                ],
                [
                    "nombre" => "Emma",
                    "notas" => [
                        "Lengua" => 6,
                        "Historia" => 8,
                        "Educación Física" => 1,
                        "Inglés" => 2,
                        "Matemáticas" => 6,
                        "Música" => 8,
                        "Ciencias" => 2,
                        "Tecnología" => 10,
                    ]
                ],
                [
                    "nombre" => "Sofía",
                    "notas" => [
                        "Lengua" => 9,
                        "Historia" => 6,
                        "Educación Física" => 6,
                        "Inglés" => 2,
                        "Matemáticas" => 1,
                        "Música" => 3,
                        "Ciencias" => 7,
                        "Tecnología" => 1,
                    ]
                ],
                [
                    "nombre" => "Antonio",
                    "notas" => [
                        "Lengua" => 4,
                        "Historia" => 3,
                        "Educación Física" => 5,
                        "Inglés" => 4,
                        "Matemáticas" => 3,
                        "Música" => 7,
                        "Ciencias" => 2,
                        "Tecnología" => 5,
                    ]
                ],
                [
                    "nombre" => "Adrián",
                    "notas" => [
                        "Lengua" => 10,
                        "Historia" => 5,
                        "Educación Física" => 7,
                        "Inglés" => 5,
                        "Matemáticas" => 9,
                        "Música" => 9,
                        "Ciencias" => 2,
                        "Tecnología" => 8,
                    ]
                ],
                [
                    "nombre" => "Daniel",
                    "notas" => [
                        "Lengua" => 6,
                        "Historia" => 8,
                        "Educación Física" => 6,
                        "Inglés" => 2,
                        "Matemáticas" => 1,
                        "Música" => 6,
                        "Ciencias" => 10,
                        "Tecnología" => 3,
                    ]
                ],
                [
                    "nombre" => "Nora",
                    "notas" => [
                        "Lengua" => 5,
                        "Historia" => 8,
                        "Educación Física" => 8,
                        "Inglés" => 1,
                        "Matemáticas" => 7,
                        "Música" => 3,
                        "Ciencias" => 4,
                        "Tecnología" => 6,
                    ]
                ],
                [
                    "nombre" => "Irene",
                    "notas" => [
                        "Lengua" => 9,
                        "Historia" => 4,
                        "Educación Física" => 5,
                        "Inglés" => 3,
                        "Matemáticas" => 2,
                        "Música" => 10,
                        "Ciencias" => 3,
                        "Tecnología" => 9,
                    ]
                ],
                [
                    "nombre" => "Valeria",
                    "notas" => [
                        "Lengua" => 7,
                        "Historia" => 8,
                        "Educación Física" => 6,
                        "Inglés" => 1,
                        "Matemáticas" => 4,
                        "Música" => 2,
                        "Ciencias" => 8,
                        "Tecnología" => 9,
                    ]
                ],
            ],
        ],
    ],
    "Centro Este" => [
        "Primero" => [
            "A" => [
                [
                    "nombre" => "Javier",
                    "notas" => [
                        "Lengua" => 4,
                        "Historia" => 5,
                        "Educación Física" => 2,
                        "Inglés" => 2,
                        "Matemáticas" => 6,
                        "Música" => 2,
                        "Ciencias" => 1,
                        "Tecnología" => 1,
                    ]
                ],
                [
                    "nombre" => "Enzo",
                    "notas" => [
                        "Lengua" => 9,
                        "Historia" => 1,
                        "Educación Física" => 9,
                        "Inglés" => 8,
                        "Matemáticas" => 2,
                        "Música" => 2,
                        "Ciencias" => 2,
                        "Tecnología" => 10,
                    ]
                ],
                [
                    "nombre" => "Nora",
                    "notas" => [
                        "Lengua" => 2,
                        "Historia" => 10,
                        "Educación Física" => 10,
                        "Inglés" => 3,
                        "Matemáticas" => 3,
                        "Música" => 8,
                        "Ciencias" => 9,
                        "Tecnología" => 7,
                    ]
                ],
                [
                    "nombre" => "Pablo",
                    "notas" => [
                        "Lengua" => 10,
                        "Historia" => 4,
                        "Educación Física" => 10,
                        "Inglés" => 8,
                        "Matemáticas" => 10,
                        "Música" => 6,
                        "Ciencias" => 9,
                        "Tecnología" => 6,
                    ]
                ],
                [
                    "nombre" => "Chloe",
                    "notas" => [
                        "Lengua" => 8,
                        "Historia" => 10,
                        "Educación Física" => 7,
                        "Inglés" => 6,
                        "Matemáticas" => 8,
                        "Música" => 1,
                        "Ciencias" => 2,
                        "Tecnología" => 4,
                    ]
                ],
                [
                    "nombre" => "Gabriel",
                    "notas" => [
                        "Lengua" => 4,
                        "Historia" => 2,
                        "Educación Física" => 5,
                        "Inglés" => 3,
                        "Matemáticas" => 2,
                        "Música" => 1,
                        "Ciencias" => 3,
                        "Tecnología" => 6,
                    ]
                ],
                [
                    "nombre" => "Adrián",
                    "notas" => [
                        "Lengua" => 2,
                        "Historia" => 1,
                        "Educación Física" => 3,
                        "Inglés" => 1,
                        "Matemáticas" => 1,
                        "Música" => 8,
                        "Ciencias" => 1,
                        "Tecnología" => 8,
                    ]
                ],
                [
                    "nombre" => "Alejandro",
                    "notas" => [
                        "Lengua" => 1,
                        "Historia" => 6,
                        "Educación Física" => 5,
                        "Inglés" => 1,
                        "Matemáticas" => 1,
                        "Música" => 7,
                        "Ciencias" => 6,
                        "Tecnología" => 8,
                    ]
                ],
                [
                    "nombre" => "Mateo",
                    "notas" => [
                        "Lengua" => 4,
                        "Historia" => 2,
                        "Educación Física" => 6,
                        "Inglés" => 3,
                        "Matemáticas" => 2,
                        "Música" => 2,
                        "Ciencias" => 8,
                        "Tecnología" => 7,
                    ]
                ],
                [
                    "nombre" => "Javier",
                    "notas" => [
                        "Lengua" => 5,
                        "Historia" => 2,
                        "Educación Física" => 6,
                        "Inglés" => 2,
                        "Matemáticas" => 5,
                        "Música" => 5,
                        "Ciencias" => 3,
                        "Tecnología" => 3,
                    ]
                ],
                [
                    "nombre" => "Valeria",
                    "notas" => [
                        "Lengua" => 4,
                        "Historia" => 9,
                        "Educación Física" => 10,
                        "Inglés" => 6,
                        "Matemáticas" => 2,
                        "Música" => 5,
                        "Ciencias" => 3,
                        "Tecnología" => 7,
                    ]
                ],
                [
                    "nombre" => "Diego",
                    "notas" => [
                        "Lengua" => 7,
                        "Historia" => 4,
                        "Educación Física" => 9,
                        "Inglés" => 5,
                        "Matemáticas" => 10,
                        "Música" => 9,
                        "Ciencias" => 2,
                        "Tecnología" => 7,
                    ]
                ],
                [
                    "nombre" => "Mateo",
                    "notas" => [
                        "Lengua" => 8,
                        "Historia" => 10,
                        "Educación Física" => 4,
                        "Inglés" => 9,
                        "Matemáticas" => 8,
                        "Música" => 3,
                        "Ciencias" => 3,
                        "Tecnología" => 3,
                    ]
                ],
                [
                    "nombre" => "Noa",
                    "notas" => [
                        "Lengua" => 3,
                        "Historia" => 4,
                        "Educación Física" => 10,
                        "Inglés" => 1,
                        "Matemáticas" => 4,
                        "Música" => 9,
                        "Ciencias" => 7,
                        "Tecnología" => 10,
                    ]
                ],
                [
                    "nombre" => "Alejandro",
                    "notas" => [
                        "Lengua" => 5,
                        "Historia" => 1,
                        "Educación Física" => 4,
                        "Inglés" => 8,
                        "Matemáticas" => 5,
                        "Música" => 7,
                        "Ciencias" => 2,
                        "Tecnología" => 8,
                    ]
                ],
                [
                    "nombre" => "Claudia",
                    "notas" => [
                        "Lengua" => 2,
                        "Historia" => 9,
                        "Educación Física" => 3,
                        "Inglés" => 1,
                        "Matemáticas" => 6,
                        "Música" => 6,
                        "Ciencias" => 6,
                        "Tecnología" => 4,
                    ]
                ],
                [
                    "nombre" => "Enzo",
                    "notas" => [
                        "Lengua" => 1,
                        "Historia" => 1,
                        "Educación Física" => 4,
                        "Inglés" => 1,
                        "Matemáticas" => 10,
                        "Música" => 8,
                        "Ciencias" => 9,
                        "Tecnología" => 6,
                    ]
                ],
                [
                    "nombre" => "Valeria",
                    "notas" => [
                        "Lengua" => 8,
                        "Historia" => 4,
                        "Educación Física" => 6,
                        "Inglés" => 1,
                        "Matemáticas" => 6,
                        "Música" => 4,
                        "Ciencias" => 7,
                        "Tecnología" => 1,
                    ]
                ],
                [
                    "nombre" => "Alejandro",
                    "notas" => [
                        "Lengua" => 3,
                        "Historia" => 7,
                        "Educación Física" => 3,
                        "Inglés" => 5,
                        "Matemáticas" => 4,
                        "Música" => 5,
                        "Ciencias" => 10,
                        "Tecnología" => 10,
                    ]
                ],
                [
                    "nombre" => "Alba",
                    "notas" => [
                        "Lengua" => 10,
                        "Historia" => 5,
                        "Educación Física" => 8,
                        "Inglés" => 10,
                        "Matemáticas" => 6,
                        "Música" => 4,
                        "Ciencias" => 10,
                        "Tecnología" => 9,
                    ]
                ],
            ],
            "B" => [
                [
                    "nombre" => "Mateo",
                    "notas" => [
                        "Lengua" => 2,
                        "Historia" => 1,
                        "Educación Física" => 9,
                        "Inglés" => 9,
                        "Matemáticas" => 1,
                        "Música" => 2,
                        "Ciencias" => 2,
                        "Tecnología" => 10,
                    ]
                ],
                [
                    "nombre" => "Alejandro",
                    "notas" => [
                        "Lengua" => 9,
                        "Historia" => 1,
                        "Educación Física" => 4,
                        "Inglés" => 4,
                        "Matemáticas" => 9,
                        "Música" => 9,
                        "Ciencias" => 4,
                        "Tecnología" => 2,
                    ]
                ],
                [
                    "nombre" => "Andrés",
                    "notas" => [
                        "Lengua" => 2,
                        "Historia" => 5,
                        "Educación Física" => 9,
                        "Inglés" => 1,
                        "Matemáticas" => 3,
                        "Música" => 10,
                        "Ciencias" => 4,
                        "Tecnología" => 1,
                    ]
                ],
                [
                    "nombre" => "Alejandro",
                    "notas" => [
                        "Lengua" => 3,
                        "Historia" => 2,
                        "Educación Física" => 6,
                        "Inglés" => 8,
                        "Matemáticas" => 8,
                        "Música" => 3,
                        "Ciencias" => 3,
                        "Tecnología" => 3,
                    ]
                ],
                [
                    "nombre" => "Claudia",
                    "notas" => [
                        "Lengua" => 10,
                        "Historia" => 5,
                        "Educación Física" => 10,
                        "Inglés" => 9,
                        "Matemáticas" => 9,
                        "Música" => 7,
                        "Ciencias" => 1,
                        "Tecnología" => 2,
                    ]
                ],
                [
                    "nombre" => "Irene",
                    "notas" => [
                        "Lengua" => 9,
                        "Historia" => 6,
                        "Educación Física" => 2,
                        "Inglés" => 10,
                        "Matemáticas" => 8,
                        "Música" => 8,
                        "Ciencias" => 10,
                        "Tecnología" => 7,
                    ]
                ],
                [
                    "nombre" => "Luna",
                    "notas" => [
                        "Lengua" => 4,
                        "Historia" => 5,
                        "Educación Física" => 2,
                        "Inglés" => 1,
                        "Matemáticas" => 4,
                        "Música" => 2,
                        "Ciencias" => 5,
                        "Tecnología" => 1,
                    ]
                ],
                [
                    "nombre" => "Isabel",
                    "notas" => [
                        "Lengua" => 10,
                        "Historia" => 10,
                        "Educación Física" => 7,
                        "Inglés" => 8,
                        "Matemáticas" => 1,
                        "Música" => 6,
                        "Ciencias" => 4,
                        "Tecnología" => 3,
                    ]
                ],
                [
                    "nombre" => "Emma",
                    "notas" => [
                        "Lengua" => 5,
                        "Historia" => 5,
                        "Educación Física" => 1,
                        "Inglés" => 7,
                        "Matemáticas" => 7,
                        "Música" => 3,
                        "Ciencias" => 1,
                        "Tecnología" => 4,
                    ]
                ],
                [
                    "nombre" => "Juan",
                    "notas" => [
                        "Lengua" => 1,
                        "Historia" => 3,
                        "Educación Física" => 1,
                        "Inglés" => 7,
                        "Matemáticas" => 4,
                        "Música" => 6,
                        "Ciencias" => 8,
                        "Tecnología" => 7,
                    ]
                ],
                [
                    "nombre" => "Isabel",
                    "notas" => [
                        "Lengua" => 5,
                        "Historia" => 10,
                        "Educación Física" => 9,
                        "Inglés" => 4,
                        "Matemáticas" => 1,
                        "Música" => 3,
                        "Ciencias" => 2,
                        "Tecnología" => 5,
                    ]
                ],
                [
                    "nombre" => "Andrés",
                    "notas" => [
                        "Lengua" => 3,
                        "Historia" => 5,
                        "Educación Física" => 6,
                        "Inglés" => 1,
                        "Matemáticas" => 4,
                        "Música" => 1,
                        "Ciencias" => 5,
                        "Tecnología" => 6,
                    ]
                ],
                [
                    "nombre" => "Pablo",
                    "notas" => [
                        "Lengua" => 2,
                        "Historia" => 1,
                        "Educación Física" => 10,
                        "Inglés" => 1,
                        "Matemáticas" => 4,
                        "Música" => 7,
                        "Ciencias" => 5,
                        "Tecnología" => 8,
                    ]
                ],
                [
                    "nombre" => "Pablo",
                    "notas" => [
                        "Lengua" => 7,
                        "Historia" => 8,
                        "Educación Física" => 8,
                        "Inglés" => 2,
                        "Matemáticas" => 6,
                        "Música" => 4,
                        "Ciencias" => 5,
                        "Tecnología" => 2,
                    ]
                ],
                [
                    "nombre" => "Noa",
                    "notas" => [
                        "Lengua" => 8,
                        "Historia" => 3,
                        "Educación Física" => 7,
                        "Inglés" => 7,
                        "Matemáticas" => 8,
                        "Música" => 10,
                        "Ciencias" => 3,
                        "Tecnología" => 9,
                    ]
                ],
                [
                    "nombre" => "Luna",
                    "notas" => [
                        "Lengua" => 7,
                        "Historia" => 8,
                        "Educación Física" => 1,
                        "Inglés" => 1,
                        "Matemáticas" => 10,
                        "Música" => 8,
                        "Ciencias" => 2,
                        "Tecnología" => 4,
                    ]
                ],
                [
                    "nombre" => "Adrián",
                    "notas" => [
                        "Lengua" => 3,
                        "Historia" => 1,
                        "Educación Física" => 2,
                        "Inglés" => 2,
                        "Matemáticas" => 8,
                        "Música" => 9,
                        "Ciencias" => 1,
                        "Tecnología" => 9,
                    ]
                ],
                [
                    "nombre" => "Carla",
                    "notas" => [
                        "Lengua" => 5,
                        "Historia" => 8,
                        "Educación Física" => 1,
                        "Inglés" => 9,
                        "Matemáticas" => 9,
                        "Música" => 5,
                        "Ciencias" => 10,
                        "Tecnología" => 6,
                    ]
                ],
                [
                    "nombre" => "Andrés",
                    "notas" => [
                        "Lengua" => 3,
                        "Historia" => 2,
                        "Educación Física" => 7,
                        "Inglés" => 10,
                        "Matemáticas" => 2,
                        "Música" => 5,
                        "Ciencias" => 2,
                        "Tecnología" => 7,
                    ]
                ],
                [
                    "nombre" => "Mía",
                    "notas" => [
                        "Lengua" => 2,
                        "Historia" => 9,
                        "Educación Física" => 8,
                        "Inglés" => 8,
                        "Matemáticas" => 1,
                        "Música" => 3,
                        "Ciencias" => 1,
                        "Tecnología" => 6,
                    ]
                ],
            ],
            "C" => [
                [
                    "nombre" => "Mateo",
                    "notas" => [
                        "Lengua" => 4,
                        "Historia" => 3,
                        "Educación Física" => 9,
                        "Inglés" => 10,
                        "Matemáticas" => 9,
                        "Música" => 3,
                        "Ciencias" => 7,
                        "Tecnología" => 9,
                    ]
                ],
                [
                    "nombre" => "Manuel",
                    "notas" => [
                        "Lengua" => 1,
                        "Historia" => 1,
                        "Educación Física" => 10,
                        "Inglés" => 4,
                        "Matemáticas" => 1,
                        "Música" => 5,
                        "Ciencias" => 9,
                        "Tecnología" => 8,
                    ]
                ],
                [
                    "nombre" => "Mario",
                    "notas" => [
                        "Lengua" => 2,
                        "Historia" => 1,
                        "Educación Física" => 5,
                        "Inglés" => 9,
                        "Matemáticas" => 1,
                        "Música" => 10,
                        "Ciencias" => 2,
                        "Tecnología" => 6,
                    ]
                ],
                [
                    "nombre" => "Isabel",
                    "notas" => [
                        "Lengua" => 10,
                        "Historia" => 8,
                        "Educación Física" => 2,
                        "Inglés" => 8,
                        "Matemáticas" => 10,
                        "Música" => 1,
                        "Ciencias" => 3,
                        "Tecnología" => 1,
                    ]
                ],
                [
                    "nombre" => "Noa",
                    "notas" => [
                        "Lengua" => 4,
                        "Historia" => 5,
                        "Educación Física" => 9,
                        "Inglés" => 10,
                        "Matemáticas" => 6,
                        "Música" => 10,
                        "Ciencias" => 7,
                        "Tecnología" => 6,
                    ]
                ],
                [
                    "nombre" => "Mateo",
                    "notas" => [
                        "Lengua" => 2,
                        "Historia" => 3,
                        "Educación Física" => 5,
                        "Inglés" => 1,
                        "Matemáticas" => 10,
                        "Música" => 9,
                        "Ciencias" => 3,
                        "Tecnología" => 9,
                    ]
                ],
                [
                    "nombre" => "Nora",
                    "notas" => [
                        "Lengua" => 10,
                        "Historia" => 3,
                        "Educación Física" => 3,
                        "Inglés" => 1,
                        "Matemáticas" => 9,
                        "Música" => 3,
                        "Ciencias" => 10,
                        "Tecnología" => 1,
                    ]
                ],
                [
                    "nombre" => "Claudia",
                    "notas" => [
                        "Lengua" => 7,
                        "Historia" => 9,
                        "Educación Física" => 8,
                        "Inglés" => 8,
                        "Matemáticas" => 6,
                        "Música" => 8,
                        "Ciencias" => 6,
                        "Tecnología" => 7,
                    ]
                ],
                [
                    "nombre" => "Irene",
                    "notas" => [
                        "Lengua" => 6,
                        "Historia" => 5,
                        "Educación Física" => 4,
                        "Inglés" => 8,
                        "Matemáticas" => 10,
                        "Música" => 1,
                        "Ciencias" => 7,
                        "Tecnología" => 7,
                    ]
                ],
                [
                    "nombre" => "Valeria",
                    "notas" => [
                        "Lengua" => 7,
                        "Historia" => 9,
                        "Educación Física" => 3,
                        "Inglés" => 7,
                        "Matemáticas" => 10,
                        "Música" => 5,
                        "Ciencias" => 2,
                        "Tecnología" => 2,
                    ]
                ],
                [
                    "nombre" => "Luna",
                    "notas" => [
                        "Lengua" => 6,
                        "Historia" => 5,
                        "Educación Física" => 8,
                        "Inglés" => 1,
                        "Matemáticas" => 10,
                        "Música" => 4,
                        "Ciencias" => 4,
                        "Tecnología" => 2,
                    ]
                ],
                [
                    "nombre" => "Leo",
                    "notas" => [
                        "Lengua" => 4,
                        "Historia" => 1,
                        "Educación Física" => 9,
                        "Inglés" => 5,
                        "Matemáticas" => 9,
                        "Música" => 8,
                        "Ciencias" => 5,
                        "Tecnología" => 7,
                    ]
                ],
                [
                    "nombre" => "Isabel",
                    "notas" => [
                        "Lengua" => 4,
                        "Historia" => 4,
                        "Educación Física" => 3,
                        "Inglés" => 1,
                        "Matemáticas" => 6,
                        "Música" => 3,
                        "Ciencias" => 2,
                        "Tecnología" => 10,
                    ]
                ],
                [
                    "nombre" => "Julia",
                    "notas" => [
                        "Lengua" => 1,
                        "Historia" => 4,
                        "Educación Física" => 6,
                        "Inglés" => 2,
                        "Matemáticas" => 3,
                        "Música" => 2,
                        "Ciencias" => 9,
                        "Tecnología" => 9,
                    ]
                ],
                [
                    "nombre" => "Diego",
                    "notas" => [
                        "Lengua" => 3,
                        "Historia" => 10,
                        "Educación Física" => 1,
                        "Inglés" => 7,
                        "Matemáticas" => 10,
                        "Música" => 3,
                        "Ciencias" => 1,
                        "Tecnología" => 3,
                    ]
                ],
                [
                    "nombre" => "Mía",
                    "notas" => [
                        "Lengua" => 3,
                        "Historia" => 5,
                        "Educación Física" => 5,
                        "Inglés" => 9,
                        "Matemáticas" => 2,
                        "Música" => 7,
                        "Ciencias" => 6,
                        "Tecnología" => 3,
                    ]
                ],
                [
                    "nombre" => "Leo",
                    "notas" => [
                        "Lengua" => 10,
                        "Historia" => 9,
                        "Educación Física" => 5,
                        "Inglés" => 7,
                        "Matemáticas" => 2,
                        "Música" => 3,
                        "Ciencias" => 4,
                        "Tecnología" => 8,
                    ]
                ],
                [
                    "nombre" => "Irene",
                    "notas" => [
                        "Lengua" => 4,
                        "Historia" => 3,
                        "Educación Física" => 3,
                        "Inglés" => 3,
                        "Matemáticas" => 7,
                        "Música" => 7,
                        "Ciencias" => 7,
                        "Tecnología" => 4,
                    ]
                ],
                [
                    "nombre" => "Lucas",
                    "notas" => [
                        "Lengua" => 8,
                        "Historia" => 2,
                        "Educación Física" => 5,
                        "Inglés" => 5,
                        "Matemáticas" => 3,
                        "Música" => 9,
                        "Ciencias" => 7,
                        "Tecnología" => 9,
                    ]
                ],
                [
                    "nombre" => "Olivia",
                    "notas" => [
                        "Lengua" => 4,
                        "Historia" => 3,
                        "Educación Física" => 9,
                        "Inglés" => 4,
                        "Matemáticas" => 1,
                        "Música" => 3,
                        "Ciencias" => 7,
                        "Tecnología" => 8,
                    ]
                ],
            ],
        ],
        "Segundo" => [
            "A" => [
                [
                    "nombre" => "Javier",
                    "notas" => [
                        "Lengua" => 8,
                        "Historia" => 2,
                        "Educación Física" => 6,
                        "Inglés" => 3,
                        "Matemáticas" => 4,
                        "Música" => 6,
                        "Ciencias" => 1,
                        "Tecnología" => 5,
                    ]
                ],
                [
                    "nombre" => "Alejandro",
                    "notas" => [
                        "Lengua" => 7,
                        "Historia" => 1,
                        "Educación Física" => 9,
                        "Inglés" => 4,
                        "Matemáticas" => 4,
                        "Música" => 3,
                        "Ciencias" => 9,
                        "Tecnología" => 2,
                    ]
                ],
                [
                    "nombre" => "David",
                    "notas" => [
                        "Lengua" => 8,
                        "Historia" => 8,
                        "Educación Física" => 10,
                        "Inglés" => 2,
                        "Matemáticas" => 3,
                        "Música" => 2,
                        "Ciencias" => 1,
                        "Tecnología" => 6,
                    ]
                ],
                [
                    "nombre" => "Gabriel",
                    "notas" => [
                        "Lengua" => 7,
                        "Historia" => 2,
                        "Educación Física" => 9,
                        "Inglés" => 3,
                        "Matemáticas" => 1,
                        "Música" => 4,
                        "Ciencias" => 3,
                        "Tecnología" => 10,
                    ]
                ],
                [
                    "nombre" => "Lucas",
                    "notas" => [
                        "Lengua" => 4,
                        "Historia" => 5,
                        "Educación Física" => 9,
                        "Inglés" => 10,
                        "Matemáticas" => 7,
                        "Música" => 10,
                        "Ciencias" => 8,
                        "Tecnología" => 8,
                    ]
                ],
                [
                    "nombre" => "Antonio",
                    "notas" => [
                        "Lengua" => 7,
                        "Historia" => 2,
                        "Educación Física" => 3,
                        "Inglés" => 3,
                        "Matemáticas" => 10,
                        "Música" => 3,
                        "Ciencias" => 4,
                        "Tecnología" => 9,
                    ]
                ],
                [
                    "nombre" => "Álvaro",
                    "notas" => [
                        "Lengua" => 3,
                        "Historia" => 1,
                        "Educación Física" => 8,
                        "Inglés" => 8,
                        "Matemáticas" => 1,
                        "Música" => 3,
                        "Ciencias" => 1,
                        "Tecnología" => 7,
                    ]
                ],
                [
                    "nombre" => "Mía",
                    "notas" => [
                        "Lengua" => 4,
                        "Historia" => 4,
                        "Educación Física" => 10,
                        "Inglés" => 8,
                        "Matemáticas" => 2,
                        "Música" => 3,
                        "Ciencias" => 7,
                        "Tecnología" => 6,
                    ]
                ],
                [
                    "nombre" => "Luna",
                    "notas" => [
                        "Lengua" => 6,
                        "Historia" => 3,
                        "Educación Física" => 2,
                        "Inglés" => 3,
                        "Matemáticas" => 1,
                        "Música" => 10,
                        "Ciencias" => 6,
                        "Tecnología" => 2,
                    ]
                ],
                [
                    "nombre" => "Isabel",
                    "notas" => [
                        "Lengua" => 6,
                        "Historia" => 2,
                        "Educación Física" => 7,
                        "Inglés" => 2,
                        "Matemáticas" => 2,
                        "Música" => 2,
                        "Ciencias" => 6,
                        "Tecnología" => 7,
                    ]
                ],
                [
                    "nombre" => "Emma",
                    "notas" => [
                        "Lengua" => 6,
                        "Historia" => 6,
                        "Educación Física" => 10,
                        "Inglés" => 4,
                        "Matemáticas" => 3,
                        "Música" => 8,
                        "Ciencias" => 5,
                        "Tecnología" => 9,
                    ]
                ],
                [
                    "nombre" => "Mario",
                    "notas" => [
                        "Lengua" => 3,
                        "Historia" => 10,
                        "Educación Física" => 2,
                        "Inglés" => 6,
                        "Matemáticas" => 8,
                        "Música" => 2,
                        "Ciencias" => 2,
                        "Tecnología" => 6,
                    ]
                ],
                [
                    "nombre" => "Daniel",
                    "notas" => [
                        "Lengua" => 8,
                        "Historia" => 3,
                        "Educación Física" => 6,
                        "Inglés" => 6,
                        "Matemáticas" => 8,
                        "Música" => 2,
                        "Ciencias" => 3,
                        "Tecnología" => 8,
                    ]
                ],
                [
                    "nombre" => "Juan",
                    "notas" => [
                        "Lengua" => 9,
                        "Historia" => 7,
                        "Educación Física" => 1,
                        "Inglés" => 6,
                        "Matemáticas" => 7,
                        "Música" => 2,
                        "Ciencias" => 5,
                        "Tecnología" => 8,
                    ]
                ],
                [
                    "nombre" => "Lucas",
                    "notas" => [
                        "Lengua" => 7,
                        "Historia" => 7,
                        "Educación Física" => 5,
                        "Inglés" => 10,
                        "Matemáticas" => 10,
                        "Música" => 1,
                        "Ciencias" => 9,
                        "Tecnología" => 2,
                    ]
                ],
                [
                    "nombre" => "Claudia",
                    "notas" => [
                        "Lengua" => 1,
                        "Historia" => 10,
                        "Educación Física" => 6,
                        "Inglés" => 2,
                        "Matemáticas" => 7,
                        "Música" => 10,
                        "Ciencias" => 4,
                        "Tecnología" => 1,
                    ]
                ],
                [
                    "nombre" => "Isabel",
                    "notas" => [
                        "Lengua" => 5,
                        "Historia" => 9,
                        "Educación Física" => 2,
                        "Inglés" => 10,
                        "Matemáticas" => 8,
                        "Música" => 3,
                        "Ciencias" => 5,
                        "Tecnología" => 2,
                    ]
                ],
                [
                    "nombre" => "Gabriel",
                    "notas" => [
                        "Lengua" => 5,
                        "Historia" => 4,
                        "Educación Física" => 6,
                        "Inglés" => 5,
                        "Matemáticas" => 4,
                        "Música" => 8,
                        "Ciencias" => 10,
                        "Tecnología" => 5,
                    ]
                ],
                [
                    "nombre" => "Olivia",
                    "notas" => [
                        "Lengua" => 7,
                        "Historia" => 7,
                        "Educación Física" => 7,
                        "Inglés" => 2,
                        "Matemáticas" => 6,
                        "Música" => 2,
                        "Ciencias" => 3,
                        "Tecnología" => 1,
                    ]
                ],
                [
                    "nombre" => "Enzo",
                    "notas" => [
                        "Lengua" => 9,
                        "Historia" => 6,
                        "Educación Física" => 9,
                        "Inglés" => 6,
                        "Matemáticas" => 4,
                        "Música" => 7,
                        "Ciencias" => 8,
                        "Tecnología" => 5,
                    ]
                ],
            ],
            "B" => [
                [
                    "nombre" => "Nora",
                    "notas" => [
                        "Lengua" => 2,
                        "Historia" => 2,
                        "Educación Física" => 1,
                        "Inglés" => 5,
                        "Matemáticas" => 6,
                        "Música" => 2,
                        "Ciencias" => 6,
                        "Tecnología" => 10,
                    ]
                ],
                [
                    "nombre" => "Olivia",
                    "notas" => [
                        "Lengua" => 1,
                        "Historia" => 10,
                        "Educación Física" => 2,
                        "Inglés" => 1,
                        "Matemáticas" => 2,
                        "Música" => 10,
                        "Ciencias" => 10,
                        "Tecnología" => 4,
                    ]
                ],
                [
                    "nombre" => "Alejandro",
                    "notas" => [
                        "Lengua" => 8,
                        "Historia" => 4,
                        "Educación Física" => 10,
                        "Inglés" => 6,
                        "Matemáticas" => 8,
                        "Música" => 7,
                        "Ciencias" => 8,
                        "Tecnología" => 9,
                    ]
                ],
                [
                    "nombre" => "Diego",
                    "notas" => [
                        "Lengua" => 4,
                        "Historia" => 6,
                        "Educación Física" => 6,
                        "Inglés" => 3,
                        "Matemáticas" => 6,
                        "Música" => 6,
                        "Ciencias" => 4,
                        "Tecnología" => 2,
                    ]
                ],
                [
                    "nombre" => "Mía",
                    "notas" => [
                        "Lengua" => 4,
                        "Historia" => 8,
                        "Educación Física" => 6,
                        "Inglés" => 4,
                        "Matemáticas" => 8,
                        "Música" => 6,
                        "Ciencias" => 6,
                        "Tecnología" => 8,
                    ]
                ],
                [
                    "nombre" => "Alba",
                    "notas" => [
                        "Lengua" => 1,
                        "Historia" => 8,
                        "Educación Física" => 3,
                        "Inglés" => 9,
                        "Matemáticas" => 4,
                        "Música" => 7,
                        "Ciencias" => 5,
                        "Tecnología" => 1,
                    ]
                ],
                [
                    "nombre" => "Nora",
                    "notas" => [
                        "Lengua" => 1,
                        "Historia" => 9,
                        "Educación Física" => 8,
                        "Inglés" => 8,
                        "Matemáticas" => 5,
                        "Música" => 8,
                        "Ciencias" => 3,
                        "Tecnología" => 5,
                    ]
                ],
                [
                    "nombre" => "Chloe",
                    "notas" => [
                        "Lengua" => 5,
                        "Historia" => 8,
                        "Educación Física" => 1,
                        "Inglés" => 5,
                        "Matemáticas" => 9,
                        "Música" => 3,
                        "Ciencias" => 1,
                        "Tecnología" => 4,
                    ]
                ],
                [
                    "nombre" => "Hugo",
                    "notas" => [
                        "Lengua" => 5,
                        "Historia" => 10,
                        "Educación Física" => 9,
                        "Inglés" => 3,
                        "Matemáticas" => 8,
                        "Música" => 7,
                        "Ciencias" => 8,
                        "Tecnología" => 6,
                    ]
                ],
                [
                    "nombre" => "Pedro",
                    "notas" => [
                        "Lengua" => 8,
                        "Historia" => 8,
                        "Educación Física" => 9,
                        "Inglés" => 5,
                        "Matemáticas" => 2,
                        "Música" => 7,
                        "Ciencias" => 1,
                        "Tecnología" => 1,
                    ]
                ],
                [
                    "nombre" => "Carla",
                    "notas" => [
                        "Lengua" => 7,
                        "Historia" => 5,
                        "Educación Física" => 5,
                        "Inglés" => 9,
                        "Matemáticas" => 2,
                        "Música" => 7,
                        "Ciencias" => 1,
                        "Tecnología" => 4,
                    ]
                ],
                [
                    "nombre" => "Olivia",
                    "notas" => [
                        "Lengua" => 9,
                        "Historia" => 6,
                        "Educación Física" => 3,
                        "Inglés" => 8,
                        "Matemáticas" => 1,
                        "Música" => 7,
                        "Ciencias" => 6,
                        "Tecnología" => 3,
                    ]
                ],
                [
                    "nombre" => "Carmen",
                    "notas" => [
                        "Lengua" => 7,
                        "Historia" => 7,
                        "Educación Física" => 3,
                        "Inglés" => 9,
                        "Matemáticas" => 2,
                        "Música" => 4,
                        "Ciencias" => 6,
                        "Tecnología" => 10,
                    ]
                ],
                [
                    "nombre" => "Javier",
                    "notas" => [
                        "Lengua" => 6,
                        "Historia" => 5,
                        "Educación Física" => 10,
                        "Inglés" => 5,
                        "Matemáticas" => 8,
                        "Música" => 9,
                        "Ciencias" => 8,
                        "Tecnología" => 5,
                    ]
                ],
                [
                    "nombre" => "Daniel",
                    "notas" => [
                        "Lengua" => 10,
                        "Historia" => 10,
                        "Educación Física" => 9,
                        "Inglés" => 3,
                        "Matemáticas" => 1,
                        "Música" => 4,
                        "Ciencias" => 6,
                        "Tecnología" => 3,
                    ]
                ],
                [
                    "nombre" => "Paula",
                    "notas" => [
                        "Lengua" => 10,
                        "Historia" => 5,
                        "Educación Física" => 10,
                        "Inglés" => 10,
                        "Matemáticas" => 2,
                        "Música" => 4,
                        "Ciencias" => 4,
                        "Tecnología" => 2,
                    ]
                ],
                [
                    "nombre" => "Alejandro",
                    "notas" => [
                        "Lengua" => 10,
                        "Historia" => 3,
                        "Educación Física" => 5,
                        "Inglés" => 4,
                        "Matemáticas" => 7,
                        "Música" => 9,
                        "Ciencias" => 1,
                        "Tecnología" => 8,
                    ]
                ],
                [
                    "nombre" => "Martina",
                    "notas" => [
                        "Lengua" => 6,
                        "Historia" => 2,
                        "Educación Física" => 2,
                        "Inglés" => 6,
                        "Matemáticas" => 4,
                        "Música" => 1,
                        "Ciencias" => 10,
                        "Tecnología" => 3,
                    ]
                ],
                [
                    "nombre" => "Hugo",
                    "notas" => [
                        "Lengua" => 7,
                        "Historia" => 3,
                        "Educación Física" => 10,
                        "Inglés" => 6,
                        "Matemáticas" => 5,
                        "Música" => 5,
                        "Ciencias" => 4,
                        "Tecnología" => 5,
                    ]
                ],
                [
                    "nombre" => "Manuel",
                    "notas" => [
                        "Lengua" => 10,
                        "Historia" => 3,
                        "Educación Física" => 5,
                        "Inglés" => 5,
                        "Matemáticas" => 10,
                        "Música" => 6,
                        "Ciencias" => 5,
                        "Tecnología" => 5,
                    ]
                ],
            ],
            "C" => [
                [
                    "nombre" => "Martina",
                    "notas" => [
                        "Lengua" => 7,
                        "Historia" => 2,
                        "Educación Física" => 1,
                        "Inglés" => 9,
                        "Matemáticas" => 5,
                        "Música" => 6,
                        "Ciencias" => 2,
                        "Tecnología" => 4,
                    ]
                ],
                [
                    "nombre" => "Noa",
                    "notas" => [
                        "Lengua" => 10,
                        "Historia" => 7,
                        "Educación Física" => 6,
                        "Inglés" => 5,
                        "Matemáticas" => 1,
                        "Música" => 4,
                        "Ciencias" => 8,
                        "Tecnología" => 1,
                    ]
                ],
                [
                    "nombre" => "Lucas",
                    "notas" => [
                        "Lengua" => 5,
                        "Historia" => 8,
                        "Educación Física" => 5,
                        "Inglés" => 2,
                        "Matemáticas" => 3,
                        "Música" => 2,
                        "Ciencias" => 2,
                        "Tecnología" => 6,
                    ]
                ],
                [
                    "nombre" => "Olivia",
                    "notas" => [
                        "Lengua" => 6,
                        "Historia" => 3,
                        "Educación Física" => 9,
                        "Inglés" => 4,
                        "Matemáticas" => 7,
                        "Música" => 9,
                        "Ciencias" => 4,
                        "Tecnología" => 3,
                    ]
                ],
                [
                    "nombre" => "Noa",
                    "notas" => [
                        "Lengua" => 10,
                        "Historia" => 5,
                        "Educación Física" => 3,
                        "Inglés" => 4,
                        "Matemáticas" => 10,
                        "Música" => 10,
                        "Ciencias" => 8,
                        "Tecnología" => 9,
                    ]
                ],
                [
                    "nombre" => "Nora",
                    "notas" => [
                        "Lengua" => 9,
                        "Historia" => 5,
                        "Educación Física" => 10,
                        "Inglés" => 10,
                        "Matemáticas" => 1,
                        "Música" => 6,
                        "Ciencias" => 8,
                        "Tecnología" => 2,
                    ]
                ],
                [
                    "nombre" => "Mía",
                    "notas" => [
                        "Lengua" => 9,
                        "Historia" => 5,
                        "Educación Física" => 5,
                        "Inglés" => 1,
                        "Matemáticas" => 5,
                        "Música" => 10,
                        "Ciencias" => 6,
                        "Tecnología" => 6,
                    ]
                ],
                [
                    "nombre" => "Emma",
                    "notas" => [
                        "Lengua" => 3,
                        "Historia" => 9,
                        "Educación Física" => 5,
                        "Inglés" => 1,
                        "Matemáticas" => 2,
                        "Música" => 4,
                        "Ciencias" => 4,
                        "Tecnología" => 6,
                    ]
                ],
                [
                    "nombre" => "Martina",
                    "notas" => [
                        "Lengua" => 10,
                        "Historia" => 3,
                        "Educación Física" => 2,
                        "Inglés" => 6,
                        "Matemáticas" => 3,
                        "Música" => 7,
                        "Ciencias" => 6,
                        "Tecnología" => 10,
                    ]
                ],
                [
                    "nombre" => "Julia",
                    "notas" => [
                        "Lengua" => 8,
                        "Historia" => 10,
                        "Educación Física" => 4,
                        "Inglés" => 1,
                        "Matemáticas" => 4,
                        "Música" => 7,
                        "Ciencias" => 9,
                        "Tecnología" => 6,
                    ]
                ],
                [
                    "nombre" => "Manuel",
                    "notas" => [
                        "Lengua" => 6,
                        "Historia" => 8,
                        "Educación Física" => 9,
                        "Inglés" => 2,
                        "Matemáticas" => 10,
                        "Música" => 1,
                        "Ciencias" => 9,
                        "Tecnología" => 1,
                    ]
                ],
                [
                    "nombre" => "Hugo",
                    "notas" => [
                        "Lengua" => 2,
                        "Historia" => 2,
                        "Educación Física" => 3,
                        "Inglés" => 10,
                        "Matemáticas" => 5,
                        "Música" => 2,
                        "Ciencias" => 9,
                        "Tecnología" => 6,
                    ]
                ],
                [
                    "nombre" => "Luna",
                    "notas" => [
                        "Lengua" => 1,
                        "Historia" => 6,
                        "Educación Física" => 9,
                        "Inglés" => 5,
                        "Matemáticas" => 2,
                        "Música" => 10,
                        "Ciencias" => 7,
                        "Tecnología" => 1,
                    ]
                ],
                [
                    "nombre" => "Álvaro",
                    "notas" => [
                        "Lengua" => 5,
                        "Historia" => 4,
                        "Educación Física" => 5,
                        "Inglés" => 9,
                        "Matemáticas" => 6,
                        "Música" => 9,
                        "Ciencias" => 9,
                        "Tecnología" => 4,
                    ]
                ],
                [
                    "nombre" => "Irene",
                    "notas" => [
                        "Lengua" => 6,
                        "Historia" => 1,
                        "Educación Física" => 8,
                        "Inglés" => 2,
                        "Matemáticas" => 7,
                        "Música" => 1,
                        "Ciencias" => 7,
                        "Tecnología" => 5,
                    ]
                ],
                [
                    "nombre" => "Mía",
                    "notas" => [
                        "Lengua" => 8,
                        "Historia" => 6,
                        "Educación Física" => 9,
                        "Inglés" => 2,
                        "Matemáticas" => 1,
                        "Música" => 10,
                        "Ciencias" => 5,
                        "Tecnología" => 3,
                    ]
                ],
                [
                    "nombre" => "Emma",
                    "notas" => [
                        "Lengua" => 10,
                        "Historia" => 10,
                        "Educación Física" => 7,
                        "Inglés" => 4,
                        "Matemáticas" => 2,
                        "Música" => 2,
                        "Ciencias" => 3,
                        "Tecnología" => 6,
                    ]
                ],
                [
                    "nombre" => "Enzo",
                    "notas" => [
                        "Lengua" => 6,
                        "Historia" => 4,
                        "Educación Física" => 10,
                        "Inglés" => 7,
                        "Matemáticas" => 3,
                        "Música" => 7,
                        "Ciencias" => 3,
                        "Tecnología" => 7,
                    ]
                ],
                [
                    "nombre" => "Manuel",
                    "notas" => [
                        "Lengua" => 2,
                        "Historia" => 1,
                        "Educación Física" => 1,
                        "Inglés" => 1,
                        "Matemáticas" => 6,
                        "Música" => 7,
                        "Ciencias" => 2,
                        "Tecnología" => 9,
                    ]
                ],
                [
                    "nombre" => "Martina",
                    "notas" => [
                        "Lengua" => 6,
                        "Historia" => 6,
                        "Educación Física" => 1,
                        "Inglés" => 8,
                        "Matemáticas" => 8,
                        "Música" => 1,
                        "Ciencias" => 8,
                        "Tecnología" => 4,
                    ]
                ],
            ],
        ],
        "Tercero" => [
            "A" => [
                [
                    "nombre" => "Valeria",
                    "notas" => [
                        "Lengua" => 3,
                        "Historia" => 10,
                        "Educación Física" => 7,
                        "Inglés" => 4,
                        "Matemáticas" => 6,
                        "Música" => 8,
                        "Ciencias" => 9,
                        "Tecnología" => 5,
                    ]
                ],
                [
                    "nombre" => "Isabel",
                    "notas" => [
                        "Lengua" => 3,
                        "Historia" => 9,
                        "Educación Física" => 3,
                        "Inglés" => 1,
                        "Matemáticas" => 7,
                        "Música" => 6,
                        "Ciencias" => 1,
                        "Tecnología" => 6,
                    ]
                ],
                [
                    "nombre" => "Paula",
                    "notas" => [
                        "Lengua" => 4,
                        "Historia" => 6,
                        "Educación Física" => 7,
                        "Inglés" => 1,
                        "Matemáticas" => 10,
                        "Música" => 7,
                        "Ciencias" => 7,
                        "Tecnología" => 6,
                    ]
                ],
                [
                    "nombre" => "Diego",
                    "notas" => [
                        "Lengua" => 3,
                        "Historia" => 10,
                        "Educación Física" => 7,
                        "Inglés" => 5,
                        "Matemáticas" => 9,
                        "Música" => 8,
                        "Ciencias" => 9,
                        "Tecnología" => 8,
                    ]
                ],
                [
                    "nombre" => "Martina",
                    "notas" => [
                        "Lengua" => 4,
                        "Historia" => 4,
                        "Educación Física" => 10,
                        "Inglés" => 5,
                        "Matemáticas" => 9,
                        "Música" => 1,
                        "Ciencias" => 3,
                        "Tecnología" => 5,
                    ]
                ],
                [
                    "nombre" => "Luna",
                    "notas" => [
                        "Lengua" => 2,
                        "Historia" => 7,
                        "Educación Física" => 6,
                        "Inglés" => 4,
                        "Matemáticas" => 6,
                        "Música" => 4,
                        "Ciencias" => 1,
                        "Tecnología" => 5,
                    ]
                ],
                [
                    "nombre" => "Irene",
                    "notas" => [
                        "Lengua" => 3,
                        "Historia" => 2,
                        "Educación Física" => 7,
                        "Inglés" => 7,
                        "Matemáticas" => 5,
                        "Música" => 8,
                        "Ciencias" => 5,
                        "Tecnología" => 2,
                    ]
                ],
                [
                    "nombre" => "Manuel",
                    "notas" => [
                        "Lengua" => 2,
                        "Historia" => 1,
                        "Educación Física" => 7,
                        "Inglés" => 9,
                        "Matemáticas" => 2,
                        "Música" => 6,
                        "Ciencias" => 10,
                        "Tecnología" => 5,
                    ]
                ],
                [
                    "nombre" => "Luna",
                    "notas" => [
                        "Lengua" => 8,
                        "Historia" => 5,
                        "Educación Física" => 5,
                        "Inglés" => 10,
                        "Matemáticas" => 3,
                        "Música" => 5,
                        "Ciencias" => 9,
                        "Tecnología" => 10,
                    ]
                ],
                [
                    "nombre" => "Valeria",
                    "notas" => [
                        "Lengua" => 5,
                        "Historia" => 2,
                        "Educación Física" => 8,
                        "Inglés" => 4,
                        "Matemáticas" => 2,
                        "Música" => 10,
                        "Ciencias" => 3,
                        "Tecnología" => 1,
                    ]
                ],
                [
                    "nombre" => "Hugo",
                    "notas" => [
                        "Lengua" => 8,
                        "Historia" => 2,
                        "Educación Física" => 3,
                        "Inglés" => 2,
                        "Matemáticas" => 6,
                        "Música" => 5,
                        "Ciencias" => 6,
                        "Tecnología" => 8,
                    ]
                ],
                [
                    "nombre" => "Alba",
                    "notas" => [
                        "Lengua" => 8,
                        "Historia" => 6,
                        "Educación Física" => 1,
                        "Inglés" => 3,
                        "Matemáticas" => 5,
                        "Música" => 6,
                        "Ciencias" => 7,
                        "Tecnología" => 10,
                    ]
                ],
                [
                    "nombre" => "Luna",
                    "notas" => [
                        "Lengua" => 3,
                        "Historia" => 7,
                        "Educación Física" => 3,
                        "Inglés" => 2,
                        "Matemáticas" => 7,
                        "Música" => 4,
                        "Ciencias" => 3,
                        "Tecnología" => 5,
                    ]
                ],
                [
                    "nombre" => "Leo",
                    "notas" => [
                        "Lengua" => 1,
                        "Historia" => 1,
                        "Educación Física" => 10,
                        "Inglés" => 2,
                        "Matemáticas" => 1,
                        "Música" => 4,
                        "Ciencias" => 6,
                        "Tecnología" => 2,
                    ]
                ],
                [
                    "nombre" => "Álvaro",
                    "notas" => [
                        "Lengua" => 6,
                        "Historia" => 6,
                        "Educación Física" => 1,
                        "Inglés" => 3,
                        "Matemáticas" => 5,
                        "Música" => 10,
                        "Ciencias" => 8,
                        "Tecnología" => 6,
                    ]
                ],
                [
                    "nombre" => "Isabel",
                    "notas" => [
                        "Lengua" => 3,
                        "Historia" => 2,
                        "Educación Física" => 9,
                        "Inglés" => 2,
                        "Matemáticas" => 9,
                        "Música" => 10,
                        "Ciencias" => 3,
                        "Tecnología" => 5,
                    ]
                ],
                [
                    "nombre" => "Juan",
                    "notas" => [
                        "Lengua" => 10,
                        "Historia" => 5,
                        "Educación Física" => 1,
                        "Inglés" => 2,
                        "Matemáticas" => 2,
                        "Música" => 9,
                        "Ciencias" => 2,
                        "Tecnología" => 1,
                    ]
                ],
                [
                    "nombre" => "Emma",
                    "notas" => [
                        "Lengua" => 5,
                        "Historia" => 6,
                        "Educación Física" => 8,
                        "Inglés" => 3,
                        "Matemáticas" => 7,
                        "Música" => 2,
                        "Ciencias" => 3,
                        "Tecnología" => 3,
                    ]
                ],
                [
                    "nombre" => "Juan",
                    "notas" => [
                        "Lengua" => 2,
                        "Historia" => 5,
                        "Educación Física" => 7,
                        "Inglés" => 5,
                        "Matemáticas" => 2,
                        "Música" => 2,
                        "Ciencias" => 8,
                        "Tecnología" => 7,
                    ]
                ],
                [
                    "nombre" => "Sara",
                    "notas" => [
                        "Lengua" => 6,
                        "Historia" => 1,
                        "Educación Física" => 10,
                        "Inglés" => 9,
                        "Matemáticas" => 5,
                        "Música" => 10,
                        "Ciencias" => 9,
                        "Tecnología" => 8,
                    ]
                ],
            ],
            "B" => [
                [
                    "nombre" => "Vega",
                    "notas" => [
                        "Lengua" => 4,
                        "Historia" => 6,
                        "Educación Física" => 1,
                        "Inglés" => 9,
                        "Matemáticas" => 1,
                        "Música" => 5,
                        "Ciencias" => 7,
                        "Tecnología" => 8,
                    ]
                ],
                [
                    "nombre" => "Juan",
                    "notas" => [
                        "Lengua" => 6,
                        "Historia" => 6,
                        "Educación Física" => 2,
                        "Inglés" => 3,
                        "Matemáticas" => 2,
                        "Música" => 10,
                        "Ciencias" => 7,
                        "Tecnología" => 10,
                    ]
                ],
                [
                    "nombre" => "Pedro",
                    "notas" => [
                        "Lengua" => 8,
                        "Historia" => 4,
                        "Educación Física" => 9,
                        "Inglés" => 10,
                        "Matemáticas" => 9,
                        "Música" => 9,
                        "Ciencias" => 10,
                        "Tecnología" => 10,
                    ]
                ],
                [
                    "nombre" => "Lucas",
                    "notas" => [
                        "Lengua" => 4,
                        "Historia" => 5,
                        "Educación Física" => 3,
                        "Inglés" => 5,
                        "Matemáticas" => 2,
                        "Música" => 5,
                        "Ciencias" => 6,
                        "Tecnología" => 4,
                    ]
                ],
                [
                    "nombre" => "Antonio",
                    "notas" => [
                        "Lengua" => 5,
                        "Historia" => 2,
                        "Educación Física" => 5,
                        "Inglés" => 1,
                        "Matemáticas" => 9,
                        "Música" => 1,
                        "Ciencias" => 10,
                        "Tecnología" => 9,
                    ]
                ],
                [
                    "nombre" => "Daniel",
                    "notas" => [
                        "Lengua" => 3,
                        "Historia" => 8,
                        "Educación Física" => 7,
                        "Inglés" => 1,
                        "Matemáticas" => 1,
                        "Música" => 3,
                        "Ciencias" => 4,
                        "Tecnología" => 6,
                    ]
                ],
                [
                    "nombre" => "Paula",
                    "notas" => [
                        "Lengua" => 2,
                        "Historia" => 5,
                        "Educación Física" => 9,
                        "Inglés" => 4,
                        "Matemáticas" => 4,
                        "Música" => 1,
                        "Ciencias" => 7,
                        "Tecnología" => 10,
                    ]
                ],
                [
                    "nombre" => "Juan",
                    "notas" => [
                        "Lengua" => 7,
                        "Historia" => 7,
                        "Educación Física" => 10,
                        "Inglés" => 8,
                        "Matemáticas" => 7,
                        "Música" => 9,
                        "Ciencias" => 6,
                        "Tecnología" => 2,
                    ]
                ],
                [
                    "nombre" => "Mario",
                    "notas" => [
                        "Lengua" => 5,
                        "Historia" => 5,
                        "Educación Física" => 2,
                        "Inglés" => 5,
                        "Matemáticas" => 10,
                        "Música" => 9,
                        "Ciencias" => 2,
                        "Tecnología" => 3,
                    ]
                ],
                [
                    "nombre" => "Alba",
                    "notas" => [
                        "Lengua" => 10,
                        "Historia" => 6,
                        "Educación Física" => 7,
                        "Inglés" => 8,
                        "Matemáticas" => 3,
                        "Música" => 8,
                        "Ciencias" => 10,
                        "Tecnología" => 7,
                    ]
                ],
                [
                    "nombre" => "Luna",
                    "notas" => [
                        "Lengua" => 3,
                        "Historia" => 6,
                        "Educación Física" => 10,
                        "Inglés" => 4,
                        "Matemáticas" => 6,
                        "Música" => 2,
                        "Ciencias" => 6,
                        "Tecnología" => 1,
                    ]
                ],
                [
                    "nombre" => "Vega",
                    "notas" => [
                        "Lengua" => 3,
                        "Historia" => 7,
                        "Educación Física" => 5,
                        "Inglés" => 3,
                        "Matemáticas" => 10,
                        "Música" => 7,
                        "Ciencias" => 9,
                        "Tecnología" => 4,
                    ]
                ],
                [
                    "nombre" => "Chloe",
                    "notas" => [
                        "Lengua" => 4,
                        "Historia" => 1,
                        "Educación Física" => 8,
                        "Inglés" => 5,
                        "Matemáticas" => 3,
                        "Música" => 2,
                        "Ciencias" => 7,
                        "Tecnología" => 8,
                    ]
                ],
                [
                    "nombre" => "Chloe",
                    "notas" => [
                        "Lengua" => 10,
                        "Historia" => 5,
                        "Educación Física" => 4,
                        "Inglés" => 4,
                        "Matemáticas" => 1,
                        "Música" => 4,
                        "Ciencias" => 3,
                        "Tecnología" => 6,
                    ]
                ],
                [
                    "nombre" => "Pedro",
                    "notas" => [
                        "Lengua" => 7,
                        "Historia" => 6,
                        "Educación Física" => 7,
                        "Inglés" => 9,
                        "Matemáticas" => 8,
                        "Música" => 3,
                        "Ciencias" => 8,
                        "Tecnología" => 3,
                    ]
                ],
                [
                    "nombre" => "Martina",
                    "notas" => [
                        "Lengua" => 6,
                        "Historia" => 1,
                        "Educación Física" => 8,
                        "Inglés" => 3,
                        "Matemáticas" => 9,
                        "Música" => 2,
                        "Ciencias" => 7,
                        "Tecnología" => 6,
                    ]
                ],
                [
                    "nombre" => "Irene",
                    "notas" => [
                        "Lengua" => 1,
                        "Historia" => 6,
                        "Educación Física" => 3,
                        "Inglés" => 5,
                        "Matemáticas" => 3,
                        "Música" => 3,
                        "Ciencias" => 10,
                        "Tecnología" => 7,
                    ]
                ],
                [
                    "nombre" => "Julia",
                    "notas" => [
                        "Lengua" => 10,
                        "Historia" => 9,
                        "Educación Física" => 5,
                        "Inglés" => 10,
                        "Matemáticas" => 9,
                        "Música" => 3,
                        "Ciencias" => 1,
                        "Tecnología" => 5,
                    ]
                ],
                [
                    "nombre" => "Noa",
                    "notas" => [
                        "Lengua" => 5,
                        "Historia" => 8,
                        "Educación Física" => 10,
                        "Inglés" => 4,
                        "Matemáticas" => 5,
                        "Música" => 10,
                        "Ciencias" => 7,
                        "Tecnología" => 4,
                    ]
                ],
                [
                    "nombre" => "Mía",
                    "notas" => [
                        "Lengua" => 4,
                        "Historia" => 9,
                        "Educación Física" => 4,
                        "Inglés" => 7,
                        "Matemáticas" => 10,
                        "Música" => 5,
                        "Ciencias" => 6,
                        "Tecnología" => 4,
                    ]
                ],
            ],
            "C" => [
                [
                    "nombre" => "Gabriel",
                    "notas" => [
                        "Lengua" => 3,
                        "Historia" => 7,
                        "Educación Física" => 10,
                        "Inglés" => 6,
                        "Matemáticas" => 6,
                        "Música" => 2,
                        "Ciencias" => 4,
                        "Tecnología" => 8,
                    ]
                ],
                [
                    "nombre" => "Gabriel",
                    "notas" => [
                        "Lengua" => 9,
                        "Historia" => 10,
                        "Educación Física" => 5,
                        "Inglés" => 1,
                        "Matemáticas" => 5,
                        "Música" => 1,
                        "Ciencias" => 2,
                        "Tecnología" => 8,
                    ]
                ],
                [
                    "nombre" => "Adrián",
                    "notas" => [
                        "Lengua" => 7,
                        "Historia" => 3,
                        "Educación Física" => 7,
                        "Inglés" => 1,
                        "Matemáticas" => 9,
                        "Música" => 9,
                        "Ciencias" => 8,
                        "Tecnología" => 3,
                    ]
                ],
                [
                    "nombre" => "Paula",
                    "notas" => [
                        "Lengua" => 1,
                        "Historia" => 7,
                        "Educación Física" => 10,
                        "Inglés" => 4,
                        "Matemáticas" => 9,
                        "Música" => 5,
                        "Ciencias" => 2,
                        "Tecnología" => 10,
                    ]
                ],
                [
                    "nombre" => "Antonio",
                    "notas" => [
                        "Lengua" => 3,
                        "Historia" => 4,
                        "Educación Física" => 1,
                        "Inglés" => 8,
                        "Matemáticas" => 9,
                        "Música" => 1,
                        "Ciencias" => 3,
                        "Tecnología" => 7,
                    ]
                ],
                [
                    "nombre" => "Chloe",
                    "notas" => [
                        "Lengua" => 8,
                        "Historia" => 4,
                        "Educación Física" => 2,
                        "Inglés" => 10,
                        "Matemáticas" => 6,
                        "Música" => 1,
                        "Ciencias" => 2,
                        "Tecnología" => 10,
                    ]
                ],
                [
                    "nombre" => "Álvaro",
                    "notas" => [
                        "Lengua" => 7,
                        "Historia" => 6,
                        "Educación Física" => 2,
                        "Inglés" => 3,
                        "Matemáticas" => 7,
                        "Música" => 6,
                        "Ciencias" => 1,
                        "Tecnología" => 7,
                    ]
                ],
                [
                    "nombre" => "Leo",
                    "notas" => [
                        "Lengua" => 10,
                        "Historia" => 4,
                        "Educación Física" => 1,
                        "Inglés" => 8,
                        "Matemáticas" => 5,
                        "Música" => 1,
                        "Ciencias" => 6,
                        "Tecnología" => 5,
                    ]
                ],
                [
                    "nombre" => "Martina",
                    "notas" => [
                        "Lengua" => 4,
                        "Historia" => 3,
                        "Educación Física" => 5,
                        "Inglés" => 10,
                        "Matemáticas" => 10,
                        "Música" => 9,
                        "Ciencias" => 8,
                        "Tecnología" => 5,
                    ]
                ],
                [
                    "nombre" => "David",
                    "notas" => [
                        "Lengua" => 8,
                        "Historia" => 4,
                        "Educación Física" => 3,
                        "Inglés" => 3,
                        "Matemáticas" => 7,
                        "Música" => 9,
                        "Ciencias" => 9,
                        "Tecnología" => 7,
                    ]
                ],
                [
                    "nombre" => "Diego",
                    "notas" => [
                        "Lengua" => 5,
                        "Historia" => 5,
                        "Educación Física" => 1,
                        "Inglés" => 2,
                        "Matemáticas" => 8,
                        "Música" => 1,
                        "Ciencias" => 5,
                        "Tecnología" => 1,
                    ]
                ],
                [
                    "nombre" => "Juan",
                    "notas" => [
                        "Lengua" => 4,
                        "Historia" => 3,
                        "Educación Física" => 9,
                        "Inglés" => 9,
                        "Matemáticas" => 2,
                        "Música" => 9,
                        "Ciencias" => 8,
                        "Tecnología" => 2,
                    ]
                ],
                [
                    "nombre" => "Leo",
                    "notas" => [
                        "Lengua" => 2,
                        "Historia" => 1,
                        "Educación Física" => 4,
                        "Inglés" => 8,
                        "Matemáticas" => 10,
                        "Música" => 6,
                        "Ciencias" => 10,
                        "Tecnología" => 10,
                    ]
                ],
                [
                    "nombre" => "Javier",
                    "notas" => [
                        "Lengua" => 8,
                        "Historia" => 2,
                        "Educación Física" => 4,
                        "Inglés" => 3,
                        "Matemáticas" => 10,
                        "Música" => 1,
                        "Ciencias" => 3,
                        "Tecnología" => 6,
                    ]
                ],
                [
                    "nombre" => "Pablo",
                    "notas" => [
                        "Lengua" => 9,
                        "Historia" => 5,
                        "Educación Física" => 2,
                        "Inglés" => 3,
                        "Matemáticas" => 2,
                        "Música" => 7,
                        "Ciencias" => 5,
                        "Tecnología" => 7,
                    ]
                ],
                [
                    "nombre" => "Noa",
                    "notas" => [
                        "Lengua" => 1,
                        "Historia" => 6,
                        "Educación Física" => 7,
                        "Inglés" => 6,
                        "Matemáticas" => 7,
                        "Música" => 9,
                        "Ciencias" => 8,
                        "Tecnología" => 6,
                    ]
                ],
                [
                    "nombre" => "Adrián",
                    "notas" => [
                        "Lengua" => 3,
                        "Historia" => 7,
                        "Educación Física" => 2,
                        "Inglés" => 3,
                        "Matemáticas" => 1,
                        "Música" => 8,
                        "Ciencias" => 8,
                        "Tecnología" => 7,
                    ]
                ],
                [
                    "nombre" => "Claudia",
                    "notas" => [
                        "Lengua" => 9,
                        "Historia" => 10,
                        "Educación Física" => 7,
                        "Inglés" => 7,
                        "Matemáticas" => 7,
                        "Música" => 7,
                        "Ciencias" => 1,
                        "Tecnología" => 8,
                    ]
                ],
                [
                    "nombre" => "Hugo",
                    "notas" => [
                        "Lengua" => 2,
                        "Historia" => 6,
                        "Educación Física" => 8,
                        "Inglés" => 7,
                        "Matemáticas" => 1,
                        "Música" => 1,
                        "Ciencias" => 7,
                        "Tecnología" => 8,
                    ]
                ],
                [
                    "nombre" => "Mía",
                    "notas" => [
                        "Lengua" => 2,
                        "Historia" => 4,
                        "Educación Física" => 1,
                        "Inglés" => 1,
                        "Matemáticas" => 2,
                        "Música" => 4,
                        "Ciencias" => 8,
                        "Tecnología" => 4,
                    ]
                ],
            ],
        ],
        "Cuarto" => [
            "A" => [
                [
                    "nombre" => "Valeria",
                    "notas" => [
                        "Lengua" => 4,
                        "Historia" => 2,
                        "Educación Física" => 6,
                        "Inglés" => 2,
                        "Matemáticas" => 3,
                        "Música" => 8,
                        "Ciencias" => 1,
                        "Tecnología" => 7,
                    ]
                ],
                [
                    "nombre" => "Lucas",
                    "notas" => [
                        "Lengua" => 2,
                        "Historia" => 6,
                        "Educación Física" => 6,
                        "Inglés" => 4,
                        "Matemáticas" => 10,
                        "Música" => 5,
                        "Ciencias" => 8,
                        "Tecnología" => 10,
                    ]
                ],
                [
                    "nombre" => "Vega",
                    "notas" => [
                        "Lengua" => 2,
                        "Historia" => 1,
                        "Educación Física" => 10,
                        "Inglés" => 2,
                        "Matemáticas" => 10,
                        "Música" => 6,
                        "Ciencias" => 9,
                        "Tecnología" => 3,
                    ]
                ],
                [
                    "nombre" => "Luna",
                    "notas" => [
                        "Lengua" => 1,
                        "Historia" => 8,
                        "Educación Física" => 8,
                        "Inglés" => 1,
                        "Matemáticas" => 10,
                        "Música" => 2,
                        "Ciencias" => 10,
                        "Tecnología" => 1,
                    ]
                ],
                [
                    "nombre" => "Pablo",
                    "notas" => [
                        "Lengua" => 2,
                        "Historia" => 2,
                        "Educación Física" => 5,
                        "Inglés" => 10,
                        "Matemáticas" => 1,
                        "Música" => 4,
                        "Ciencias" => 2,
                        "Tecnología" => 4,
                    ]
                ],
                [
                    "nombre" => "Mario",
                    "notas" => [
                        "Lengua" => 10,
                        "Historia" => 2,
                        "Educación Física" => 8,
                        "Inglés" => 8,
                        "Matemáticas" => 5,
                        "Música" => 6,
                        "Ciencias" => 2,
                        "Tecnología" => 5,
                    ]
                ],
                [
                    "nombre" => "Andrés",
                    "notas" => [
                        "Lengua" => 7,
                        "Historia" => 9,
                        "Educación Física" => 7,
                        "Inglés" => 2,
                        "Matemáticas" => 9,
                        "Música" => 8,
                        "Ciencias" => 9,
                        "Tecnología" => 5,
                    ]
                ],
                [
                    "nombre" => "Antonio",
                    "notas" => [
                        "Lengua" => 8,
                        "Historia" => 10,
                        "Educación Física" => 9,
                        "Inglés" => 6,
                        "Matemáticas" => 5,
                        "Música" => 1,
                        "Ciencias" => 2,
                        "Tecnología" => 2,
                    ]
                ],
                [
                    "nombre" => "Antonio",
                    "notas" => [
                        "Lengua" => 2,
                        "Historia" => 10,
                        "Educación Física" => 2,
                        "Inglés" => 8,
                        "Matemáticas" => 8,
                        "Música" => 5,
                        "Ciencias" => 9,
                        "Tecnología" => 6,
                    ]
                ],
                [
                    "nombre" => "Mía",
                    "notas" => [
                        "Lengua" => 6,
                        "Historia" => 3,
                        "Educación Física" => 10,
                        "Inglés" => 4,
                        "Matemáticas" => 9,
                        "Música" => 8,
                        "Ciencias" => 2,
                        "Tecnología" => 9,
                    ]
                ],
                [
                    "nombre" => "Hugo",
                    "notas" => [
                        "Lengua" => 3,
                        "Historia" => 2,
                        "Educación Física" => 3,
                        "Inglés" => 7,
                        "Matemáticas" => 10,
                        "Música" => 3,
                        "Ciencias" => 10,
                        "Tecnología" => 8,
                    ]
                ],
                [
                    "nombre" => "Hugo",
                    "notas" => [
                        "Lengua" => 5,
                        "Historia" => 8,
                        "Educación Física" => 6,
                        "Inglés" => 4,
                        "Matemáticas" => 7,
                        "Música" => 7,
                        "Ciencias" => 8,
                        "Tecnología" => 9,
                    ]
                ],
                [
                    "nombre" => "Olivia",
                    "notas" => [
                        "Lengua" => 8,
                        "Historia" => 9,
                        "Educación Física" => 1,
                        "Inglés" => 8,
                        "Matemáticas" => 1,
                        "Música" => 1,
                        "Ciencias" => 4,
                        "Tecnología" => 8,
                    ]
                ],
                [
                    "nombre" => "Isabel",
                    "notas" => [
                        "Lengua" => 8,
                        "Historia" => 10,
                        "Educación Física" => 4,
                        "Inglés" => 3,
                        "Matemáticas" => 7,
                        "Música" => 2,
                        "Ciencias" => 8,
                        "Tecnología" => 5,
                    ]
                ],
                [
                    "nombre" => "David",
                    "notas" => [
                        "Lengua" => 7,
                        "Historia" => 6,
                        "Educación Física" => 1,
                        "Inglés" => 10,
                        "Matemáticas" => 9,
                        "Música" => 5,
                        "Ciencias" => 10,
                        "Tecnología" => 2,
                    ]
                ],
                [
                    "nombre" => "Antonio",
                    "notas" => [
                        "Lengua" => 9,
                        "Historia" => 8,
                        "Educación Física" => 4,
                        "Inglés" => 4,
                        "Matemáticas" => 9,
                        "Música" => 4,
                        "Ciencias" => 5,
                        "Tecnología" => 5,
                    ]
                ],
                [
                    "nombre" => "Nora",
                    "notas" => [
                        "Lengua" => 7,
                        "Historia" => 1,
                        "Educación Física" => 8,
                        "Inglés" => 10,
                        "Matemáticas" => 1,
                        "Música" => 7,
                        "Ciencias" => 3,
                        "Tecnología" => 9,
                    ]
                ],
                [
                    "nombre" => "Mía",
                    "notas" => [
                        "Lengua" => 6,
                        "Historia" => 3,
                        "Educación Física" => 6,
                        "Inglés" => 7,
                        "Matemáticas" => 4,
                        "Música" => 5,
                        "Ciencias" => 2,
                        "Tecnología" => 4,
                    ]
                ],
                [
                    "nombre" => "Isabel",
                    "notas" => [
                        "Lengua" => 4,
                        "Historia" => 3,
                        "Educación Física" => 6,
                        "Inglés" => 6,
                        "Matemáticas" => 2,
                        "Música" => 6,
                        "Ciencias" => 8,
                        "Tecnología" => 9,
                    ]
                ],
                [
                    "nombre" => "Emma",
                    "notas" => [
                        "Lengua" => 7,
                        "Historia" => 4,
                        "Educación Física" => 3,
                        "Inglés" => 9,
                        "Matemáticas" => 8,
                        "Música" => 5,
                        "Ciencias" => 4,
                        "Tecnología" => 2,
                    ]
                ],
            ],
            "B" => [
                [
                    "nombre" => "Sofía",
                    "notas" => [
                        "Lengua" => 4,
                        "Historia" => 7,
                        "Educación Física" => 2,
                        "Inglés" => 6,
                        "Matemáticas" => 3,
                        "Música" => 7,
                        "Ciencias" => 9,
                        "Tecnología" => 10,
                    ]
                ],
                [
                    "nombre" => "Mario",
                    "notas" => [
                        "Lengua" => 8,
                        "Historia" => 1,
                        "Educación Física" => 9,
                        "Inglés" => 2,
                        "Matemáticas" => 10,
                        "Música" => 1,
                        "Ciencias" => 8,
                        "Tecnología" => 7,
                    ]
                ],
                [
                    "nombre" => "Mía",
                    "notas" => [
                        "Lengua" => 7,
                        "Historia" => 9,
                        "Educación Física" => 10,
                        "Inglés" => 1,
                        "Matemáticas" => 3,
                        "Música" => 3,
                        "Ciencias" => 10,
                        "Tecnología" => 6,
                    ]
                ],
                [
                    "nombre" => "Antonio",
                    "notas" => [
                        "Lengua" => 8,
                        "Historia" => 4,
                        "Educación Física" => 8,
                        "Inglés" => 4,
                        "Matemáticas" => 3,
                        "Música" => 9,
                        "Ciencias" => 7,
                        "Tecnología" => 10,
                    ]
                ],
                [
                    "nombre" => "Carmen",
                    "notas" => [
                        "Lengua" => 6,
                        "Historia" => 8,
                        "Educación Física" => 1,
                        "Inglés" => 10,
                        "Matemáticas" => 2,
                        "Música" => 2,
                        "Ciencias" => 5,
                        "Tecnología" => 10,
                    ]
                ],
                [
                    "nombre" => "Lucas",
                    "notas" => [
                        "Lengua" => 1,
                        "Historia" => 10,
                        "Educación Física" => 7,
                        "Inglés" => 1,
                        "Matemáticas" => 9,
                        "Música" => 6,
                        "Ciencias" => 2,
                        "Tecnología" => 1,
                    ]
                ],
                [
                    "nombre" => "Paula",
                    "notas" => [
                        "Lengua" => 6,
                        "Historia" => 3,
                        "Educación Física" => 1,
                        "Inglés" => 6,
                        "Matemáticas" => 8,
                        "Música" => 5,
                        "Ciencias" => 9,
                        "Tecnología" => 4,
                    ]
                ],
                [
                    "nombre" => "Mía",
                    "notas" => [
                        "Lengua" => 6,
                        "Historia" => 3,
                        "Educación Física" => 7,
                        "Inglés" => 2,
                        "Matemáticas" => 3,
                        "Música" => 10,
                        "Ciencias" => 2,
                        "Tecnología" => 1,
                    ]
                ],
                [
                    "nombre" => "Nora",
                    "notas" => [
                        "Lengua" => 10,
                        "Historia" => 6,
                        "Educación Física" => 8,
                        "Inglés" => 6,
                        "Matemáticas" => 6,
                        "Música" => 3,
                        "Ciencias" => 2,
                        "Tecnología" => 7,
                    ]
                ],
                [
                    "nombre" => "Nora",
                    "notas" => [
                        "Lengua" => 7,
                        "Historia" => 9,
                        "Educación Física" => 10,
                        "Inglés" => 10,
                        "Matemáticas" => 2,
                        "Música" => 4,
                        "Ciencias" => 4,
                        "Tecnología" => 5,
                    ]
                ],
                [
                    "nombre" => "Sofía",
                    "notas" => [
                        "Lengua" => 10,
                        "Historia" => 8,
                        "Educación Física" => 3,
                        "Inglés" => 6,
                        "Matemáticas" => 2,
                        "Música" => 3,
                        "Ciencias" => 10,
                        "Tecnología" => 8,
                    ]
                ],
                [
                    "nombre" => "Martina",
                    "notas" => [
                        "Lengua" => 3,
                        "Historia" => 3,
                        "Educación Física" => 9,
                        "Inglés" => 9,
                        "Matemáticas" => 8,
                        "Música" => 8,
                        "Ciencias" => 8,
                        "Tecnología" => 4,
                    ]
                ],
                [
                    "nombre" => "Vega",
                    "notas" => [
                        "Lengua" => 10,
                        "Historia" => 8,
                        "Educación Física" => 8,
                        "Inglés" => 5,
                        "Matemáticas" => 6,
                        "Música" => 5,
                        "Ciencias" => 3,
                        "Tecnología" => 4,
                    ]
                ],
                [
                    "nombre" => "Mario",
                    "notas" => [
                        "Lengua" => 1,
                        "Historia" => 6,
                        "Educación Física" => 2,
                        "Inglés" => 6,
                        "Matemáticas" => 4,
                        "Música" => 4,
                        "Ciencias" => 1,
                        "Tecnología" => 5,
                    ]
                ],
                [
                    "nombre" => "Mario",
                    "notas" => [
                        "Lengua" => 8,
                        "Historia" => 8,
                        "Educación Física" => 1,
                        "Inglés" => 5,
                        "Matemáticas" => 6,
                        "Música" => 5,
                        "Ciencias" => 1,
                        "Tecnología" => 6,
                    ]
                ],
                [
                    "nombre" => "Diego",
                    "notas" => [
                        "Lengua" => 3,
                        "Historia" => 4,
                        "Educación Física" => 8,
                        "Inglés" => 1,
                        "Matemáticas" => 3,
                        "Música" => 5,
                        "Ciencias" => 7,
                        "Tecnología" => 10,
                    ]
                ],
                [
                    "nombre" => "Daniel",
                    "notas" => [
                        "Lengua" => 7,
                        "Historia" => 4,
                        "Educación Física" => 7,
                        "Inglés" => 2,
                        "Matemáticas" => 4,
                        "Música" => 1,
                        "Ciencias" => 10,
                        "Tecnología" => 2,
                    ]
                ],
                [
                    "nombre" => "Enzo",
                    "notas" => [
                        "Lengua" => 2,
                        "Historia" => 4,
                        "Educación Física" => 2,
                        "Inglés" => 8,
                        "Matemáticas" => 9,
                        "Música" => 7,
                        "Ciencias" => 10,
                        "Tecnología" => 9,
                    ]
                ],
                [
                    "nombre" => "Mateo",
                    "notas" => [
                        "Lengua" => 4,
                        "Historia" => 10,
                        "Educación Física" => 1,
                        "Inglés" => 7,
                        "Matemáticas" => 10,
                        "Música" => 9,
                        "Ciencias" => 8,
                        "Tecnología" => 1,
                    ]
                ],
                [
                    "nombre" => "Valeria",
                    "notas" => [
                        "Lengua" => 3,
                        "Historia" => 7,
                        "Educación Física" => 3,
                        "Inglés" => 4,
                        "Matemáticas" => 6,
                        "Música" => 5,
                        "Ciencias" => 7,
                        "Tecnología" => 4,
                    ]
                ],
            ],
            "C" => [
                [
                    "nombre" => "Alejandro",
                    "notas" => [
                        "Lengua" => 6,
                        "Historia" => 6,
                        "Educación Física" => 3,
                        "Inglés" => 4,
                        "Matemáticas" => 1,
                        "Música" => 8,
                        "Ciencias" => 3,
                        "Tecnología" => 4,
                    ]
                ],
                [
                    "nombre" => "Andrés",
                    "notas" => [
                        "Lengua" => 4,
                        "Historia" => 1,
                        "Educación Física" => 4,
                        "Inglés" => 3,
                        "Matemáticas" => 2,
                        "Música" => 3,
                        "Ciencias" => 6,
                        "Tecnología" => 1,
                    ]
                ],
                [
                    "nombre" => "Valeria",
                    "notas" => [
                        "Lengua" => 6,
                        "Historia" => 8,
                        "Educación Física" => 4,
                        "Inglés" => 5,
                        "Matemáticas" => 10,
                        "Música" => 8,
                        "Ciencias" => 4,
                        "Tecnología" => 1,
                    ]
                ],
                [
                    "nombre" => "Olivia",
                    "notas" => [
                        "Lengua" => 7,
                        "Historia" => 8,
                        "Educación Física" => 7,
                        "Inglés" => 8,
                        "Matemáticas" => 8,
                        "Música" => 1,
                        "Ciencias" => 8,
                        "Tecnología" => 9,
                    ]
                ],
                [
                    "nombre" => "Leo",
                    "notas" => [
                        "Lengua" => 8,
                        "Historia" => 8,
                        "Educación Física" => 8,
                        "Inglés" => 8,
                        "Matemáticas" => 9,
                        "Música" => 2,
                        "Ciencias" => 10,
                        "Tecnología" => 1,
                    ]
                ],
                [
                    "nombre" => "Hugo",
                    "notas" => [
                        "Lengua" => 10,
                        "Historia" => 1,
                        "Educación Física" => 9,
                        "Inglés" => 10,
                        "Matemáticas" => 4,
                        "Música" => 6,
                        "Ciencias" => 6,
                        "Tecnología" => 4,
                    ]
                ],
                [
                    "nombre" => "Sofía",
                    "notas" => [
                        "Lengua" => 8,
                        "Historia" => 2,
                        "Educación Física" => 6,
                        "Inglés" => 8,
                        "Matemáticas" => 6,
                        "Música" => 8,
                        "Ciencias" => 9,
                        "Tecnología" => 7,
                    ]
                ],
                [
                    "nombre" => "Pablo",
                    "notas" => [
                        "Lengua" => 4,
                        "Historia" => 1,
                        "Educación Física" => 6,
                        "Inglés" => 10,
                        "Matemáticas" => 5,
                        "Música" => 5,
                        "Ciencias" => 7,
                        "Tecnología" => 1,
                    ]
                ],
                [
                    "nombre" => "Chloe",
                    "notas" => [
                        "Lengua" => 2,
                        "Historia" => 2,
                        "Educación Física" => 4,
                        "Inglés" => 3,
                        "Matemáticas" => 8,
                        "Música" => 9,
                        "Ciencias" => 6,
                        "Tecnología" => 2,
                    ]
                ],
                [
                    "nombre" => "Isabel",
                    "notas" => [
                        "Lengua" => 1,
                        "Historia" => 6,
                        "Educación Física" => 3,
                        "Inglés" => 9,
                        "Matemáticas" => 2,
                        "Música" => 9,
                        "Ciencias" => 10,
                        "Tecnología" => 9,
                    ]
                ],
                [
                    "nombre" => "Gabriel",
                    "notas" => [
                        "Lengua" => 6,
                        "Historia" => 6,
                        "Educación Física" => 7,
                        "Inglés" => 9,
                        "Matemáticas" => 4,
                        "Música" => 1,
                        "Ciencias" => 10,
                        "Tecnología" => 7,
                    ]
                ],
                [
                    "nombre" => "Sofía",
                    "notas" => [
                        "Lengua" => 5,
                        "Historia" => 4,
                        "Educación Física" => 5,
                        "Inglés" => 6,
                        "Matemáticas" => 1,
                        "Música" => 6,
                        "Ciencias" => 1,
                        "Tecnología" => 5,
                    ]
                ],
                [
                    "nombre" => "Sofía",
                    "notas" => [
                        "Lengua" => 4,
                        "Historia" => 7,
                        "Educación Física" => 6,
                        "Inglés" => 7,
                        "Matemáticas" => 5,
                        "Música" => 1,
                        "Ciencias" => 5,
                        "Tecnología" => 9,
                    ]
                ],
                [
                    "nombre" => "Olivia",
                    "notas" => [
                        "Lengua" => 7,
                        "Historia" => 5,
                        "Educación Física" => 7,
                        "Inglés" => 1,
                        "Matemáticas" => 8,
                        "Música" => 4,
                        "Ciencias" => 5,
                        "Tecnología" => 1,
                    ]
                ],
                [
                    "nombre" => "Pedro",
                    "notas" => [
                        "Lengua" => 6,
                        "Historia" => 7,
                        "Educación Física" => 7,
                        "Inglés" => 10,
                        "Matemáticas" => 6,
                        "Música" => 5,
                        "Ciencias" => 2,
                        "Tecnología" => 2,
                    ]
                ],
                [
                    "nombre" => "David",
                    "notas" => [
                        "Lengua" => 2,
                        "Historia" => 5,
                        "Educación Física" => 9,
                        "Inglés" => 1,
                        "Matemáticas" => 1,
                        "Música" => 4,
                        "Ciencias" => 6,
                        "Tecnología" => 10,
                    ]
                ],
                [
                    "nombre" => "Carla",
                    "notas" => [
                        "Lengua" => 9,
                        "Historia" => 9,
                        "Educación Física" => 4,
                        "Inglés" => 4,
                        "Matemáticas" => 8,
                        "Música" => 8,
                        "Ciencias" => 8,
                        "Tecnología" => 2,
                    ]
                ],
                [
                    "nombre" => "Nora",
                    "notas" => [
                        "Lengua" => 1,
                        "Historia" => 1,
                        "Educación Física" => 10,
                        "Inglés" => 8,
                        "Matemáticas" => 5,
                        "Música" => 3,
                        "Ciencias" => 10,
                        "Tecnología" => 8,
                    ]
                ],
                [
                    "nombre" => "Pablo",
                    "notas" => [
                        "Lengua" => 8,
                        "Historia" => 3,
                        "Educación Física" => 10,
                        "Inglés" => 10,
                        "Matemáticas" => 4,
                        "Música" => 2,
                        "Ciencias" => 6,
                        "Tecnología" => 9,
                    ]
                ],
                [
                    "nombre" => "Martina",
                    "notas" => [
                        "Lengua" => 4,
                        "Historia" => 9,
                        "Educación Física" => 10,
                        "Inglés" => 10,
                        "Matemáticas" => 1,
                        "Música" => 8,
                        "Ciencias" => 9,
                        "Tecnología" => 4,
                    ]
                ],
            ],
        ],
        "Quinto" => [
            "A" => [
                [
                    "nombre" => "Andrés",
                    "notas" => [
                        "Lengua" => 9,
                        "Historia" => 2,
                        "Educación Física" => 6,
                        "Inglés" => 4,
                        "Matemáticas" => 2,
                        "Música" => 8,
                        "Ciencias" => 6,
                        "Tecnología" => 3,
                    ]
                ],
                [
                    "nombre" => "Manuel",
                    "notas" => [
                        "Lengua" => 2,
                        "Historia" => 6,
                        "Educación Física" => 5,
                        "Inglés" => 6,
                        "Matemáticas" => 4,
                        "Música" => 4,
                        "Ciencias" => 8,
                        "Tecnología" => 3,
                    ]
                ],
                [
                    "nombre" => "Carmen",
                    "notas" => [
                        "Lengua" => 8,
                        "Historia" => 2,
                        "Educación Física" => 6,
                        "Inglés" => 8,
                        "Matemáticas" => 1,
                        "Música" => 1,
                        "Ciencias" => 6,
                        "Tecnología" => 1,
                    ]
                ],
                [
                    "nombre" => "Mateo",
                    "notas" => [
                        "Lengua" => 1,
                        "Historia" => 4,
                        "Educación Física" => 5,
                        "Inglés" => 7,
                        "Matemáticas" => 3,
                        "Música" => 7,
                        "Ciencias" => 7,
                        "Tecnología" => 5,
                    ]
                ],
                [
                    "nombre" => "Carmen",
                    "notas" => [
                        "Lengua" => 1,
                        "Historia" => 1,
                        "Educación Física" => 2,
                        "Inglés" => 5,
                        "Matemáticas" => 8,
                        "Música" => 9,
                        "Ciencias" => 2,
                        "Tecnología" => 8,
                    ]
                ],
                [
                    "nombre" => "Isabel",
                    "notas" => [
                        "Lengua" => 5,
                        "Historia" => 6,
                        "Educación Física" => 3,
                        "Inglés" => 7,
                        "Matemáticas" => 9,
                        "Música" => 8,
                        "Ciencias" => 7,
                        "Tecnología" => 8,
                    ]
                ],
                [
                    "nombre" => "Adrián",
                    "notas" => [
                        "Lengua" => 5,
                        "Historia" => 8,
                        "Educación Física" => 8,
                        "Inglés" => 8,
                        "Matemáticas" => 2,
                        "Música" => 3,
                        "Ciencias" => 4,
                        "Tecnología" => 5,
                    ]
                ],
                [
                    "nombre" => "Luna",
                    "notas" => [
                        "Lengua" => 6,
                        "Historia" => 7,
                        "Educación Física" => 4,
                        "Inglés" => 5,
                        "Matemáticas" => 9,
                        "Música" => 7,
                        "Ciencias" => 9,
                        "Tecnología" => 3,
                    ]
                ],
                [
                    "nombre" => "Vega",
                    "notas" => [
                        "Lengua" => 6,
                        "Historia" => 4,
                        "Educación Física" => 4,
                        "Inglés" => 2,
                        "Matemáticas" => 6,
                        "Música" => 2,
                        "Ciencias" => 1,
                        "Tecnología" => 5,
                    ]
                ],
                [
                    "nombre" => "Leo",
                    "notas" => [
                        "Lengua" => 1,
                        "Historia" => 3,
                        "Educación Física" => 6,
                        "Inglés" => 6,
                        "Matemáticas" => 8,
                        "Música" => 10,
                        "Ciencias" => 7,
                        "Tecnología" => 3,
                    ]
                ],
                [
                    "nombre" => "Lucas",
                    "notas" => [
                        "Lengua" => 5,
                        "Historia" => 3,
                        "Educación Física" => 9,
                        "Inglés" => 4,
                        "Matemáticas" => 5,
                        "Música" => 1,
                        "Ciencias" => 1,
                        "Tecnología" => 8,
                    ]
                ],
                [
                    "nombre" => "Manuel",
                    "notas" => [
                        "Lengua" => 1,
                        "Historia" => 10,
                        "Educación Física" => 6,
                        "Inglés" => 1,
                        "Matemáticas" => 4,
                        "Música" => 8,
                        "Ciencias" => 9,
                        "Tecnología" => 4,
                    ]
                ],
                [
                    "nombre" => "Enzo",
                    "notas" => [
                        "Lengua" => 7,
                        "Historia" => 7,
                        "Educación Física" => 5,
                        "Inglés" => 2,
                        "Matemáticas" => 4,
                        "Música" => 7,
                        "Ciencias" => 9,
                        "Tecnología" => 4,
                    ]
                ],
                [
                    "nombre" => "Martina",
                    "notas" => [
                        "Lengua" => 5,
                        "Historia" => 1,
                        "Educación Física" => 1,
                        "Inglés" => 9,
                        "Matemáticas" => 6,
                        "Música" => 1,
                        "Ciencias" => 8,
                        "Tecnología" => 2,
                    ]
                ],
                [
                    "nombre" => "Alejandro",
                    "notas" => [
                        "Lengua" => 2,
                        "Historia" => 2,
                        "Educación Física" => 8,
                        "Inglés" => 9,
                        "Matemáticas" => 8,
                        "Música" => 5,
                        "Ciencias" => 7,
                        "Tecnología" => 3,
                    ]
                ],
                [
                    "nombre" => "Daniel",
                    "notas" => [
                        "Lengua" => 8,
                        "Historia" => 10,
                        "Educación Física" => 1,
                        "Inglés" => 7,
                        "Matemáticas" => 1,
                        "Música" => 10,
                        "Ciencias" => 6,
                        "Tecnología" => 2,
                    ]
                ],
                [
                    "nombre" => "Vega",
                    "notas" => [
                        "Lengua" => 10,
                        "Historia" => 5,
                        "Educación Física" => 9,
                        "Inglés" => 5,
                        "Matemáticas" => 4,
                        "Música" => 10,
                        "Ciencias" => 1,
                        "Tecnología" => 2,
                    ]
                ],
                [
                    "nombre" => "Isabel",
                    "notas" => [
                        "Lengua" => 6,
                        "Historia" => 10,
                        "Educación Física" => 1,
                        "Inglés" => 6,
                        "Matemáticas" => 7,
                        "Música" => 4,
                        "Ciencias" => 4,
                        "Tecnología" => 7,
                    ]
                ],
                [
                    "nombre" => "David",
                    "notas" => [
                        "Lengua" => 1,
                        "Historia" => 10,
                        "Educación Física" => 1,
                        "Inglés" => 7,
                        "Matemáticas" => 10,
                        "Música" => 8,
                        "Ciencias" => 4,
                        "Tecnología" => 7,
                    ]
                ],
                [
                    "nombre" => "Lucas",
                    "notas" => [
                        "Lengua" => 9,
                        "Historia" => 5,
                        "Educación Física" => 7,
                        "Inglés" => 10,
                        "Matemáticas" => 9,
                        "Música" => 2,
                        "Ciencias" => 2,
                        "Tecnología" => 9,
                    ]
                ],
            ],
            "B" => [
                [
                    "nombre" => "David",
                    "notas" => [
                        "Lengua" => 9,
                        "Historia" => 1,
                        "Educación Física" => 7,
                        "Inglés" => 9,
                        "Matemáticas" => 8,
                        "Música" => 6,
                        "Ciencias" => 8,
                        "Tecnología" => 4,
                    ]
                ],
                [
                    "nombre" => "Sofía",
                    "notas" => [
                        "Lengua" => 7,
                        "Historia" => 9,
                        "Educación Física" => 7,
                        "Inglés" => 10,
                        "Matemáticas" => 10,
                        "Música" => 5,
                        "Ciencias" => 8,
                        "Tecnología" => 4,
                    ]
                ],
                [
                    "nombre" => "Pedro",
                    "notas" => [
                        "Lengua" => 5,
                        "Historia" => 7,
                        "Educación Física" => 9,
                        "Inglés" => 6,
                        "Matemáticas" => 5,
                        "Música" => 3,
                        "Ciencias" => 2,
                        "Tecnología" => 1,
                    ]
                ],
                [
                    "nombre" => "Sofía",
                    "notas" => [
                        "Lengua" => 10,
                        "Historia" => 8,
                        "Educación Física" => 6,
                        "Inglés" => 2,
                        "Matemáticas" => 9,
                        "Música" => 5,
                        "Ciencias" => 3,
                        "Tecnología" => 4,
                    ]
                ],
                [
                    "nombre" => "Carla",
                    "notas" => [
                        "Lengua" => 10,
                        "Historia" => 4,
                        "Educación Física" => 2,
                        "Inglés" => 3,
                        "Matemáticas" => 3,
                        "Música" => 6,
                        "Ciencias" => 9,
                        "Tecnología" => 2,
                    ]
                ],
                [
                    "nombre" => "Alejandro",
                    "notas" => [
                        "Lengua" => 3,
                        "Historia" => 2,
                        "Educación Física" => 2,
                        "Inglés" => 6,
                        "Matemáticas" => 8,
                        "Música" => 1,
                        "Ciencias" => 4,
                        "Tecnología" => 2,
                    ]
                ],
                [
                    "nombre" => "Julia",
                    "notas" => [
                        "Lengua" => 10,
                        "Historia" => 4,
                        "Educación Física" => 5,
                        "Inglés" => 8,
                        "Matemáticas" => 7,
                        "Música" => 10,
                        "Ciencias" => 5,
                        "Tecnología" => 4,
                    ]
                ],
                [
                    "nombre" => "Luna",
                    "notas" => [
                        "Lengua" => 9,
                        "Historia" => 8,
                        "Educación Física" => 3,
                        "Inglés" => 9,
                        "Matemáticas" => 5,
                        "Música" => 5,
                        "Ciencias" => 9,
                        "Tecnología" => 7,
                    ]
                ],
                [
                    "nombre" => "Olivia",
                    "notas" => [
                        "Lengua" => 8,
                        "Historia" => 7,
                        "Educación Física" => 3,
                        "Inglés" => 5,
                        "Matemáticas" => 5,
                        "Música" => 10,
                        "Ciencias" => 9,
                        "Tecnología" => 7,
                    ]
                ],
                [
                    "nombre" => "Juan",
                    "notas" => [
                        "Lengua" => 9,
                        "Historia" => 4,
                        "Educación Física" => 10,
                        "Inglés" => 5,
                        "Matemáticas" => 1,
                        "Música" => 4,
                        "Ciencias" => 8,
                        "Tecnología" => 2,
                    ]
                ],
                [
                    "nombre" => "Luna",
                    "notas" => [
                        "Lengua" => 3,
                        "Historia" => 8,
                        "Educación Física" => 8,
                        "Inglés" => 9,
                        "Matemáticas" => 4,
                        "Música" => 8,
                        "Ciencias" => 5,
                        "Tecnología" => 4,
                    ]
                ],
                [
                    "nombre" => "Leo",
                    "notas" => [
                        "Lengua" => 10,
                        "Historia" => 5,
                        "Educación Física" => 5,
                        "Inglés" => 7,
                        "Matemáticas" => 10,
                        "Música" => 4,
                        "Ciencias" => 5,
                        "Tecnología" => 1,
                    ]
                ],
                [
                    "nombre" => "Nora",
                    "notas" => [
                        "Lengua" => 5,
                        "Historia" => 7,
                        "Educación Física" => 8,
                        "Inglés" => 6,
                        "Matemáticas" => 9,
                        "Música" => 6,
                        "Ciencias" => 1,
                        "Tecnología" => 4,
                    ]
                ],
                [
                    "nombre" => "Andrés",
                    "notas" => [
                        "Lengua" => 4,
                        "Historia" => 7,
                        "Educación Física" => 3,
                        "Inglés" => 2,
                        "Matemáticas" => 4,
                        "Música" => 10,
                        "Ciencias" => 2,
                        "Tecnología" => 3,
                    ]
                ],
                [
                    "nombre" => "Mateo",
                    "notas" => [
                        "Lengua" => 10,
                        "Historia" => 8,
                        "Educación Física" => 1,
                        "Inglés" => 9,
                        "Matemáticas" => 5,
                        "Música" => 6,
                        "Ciencias" => 4,
                        "Tecnología" => 2,
                    ]
                ],
                [
                    "nombre" => "Alejandro",
                    "notas" => [
                        "Lengua" => 5,
                        "Historia" => 5,
                        "Educación Física" => 8,
                        "Inglés" => 4,
                        "Matemáticas" => 3,
                        "Música" => 2,
                        "Ciencias" => 6,
                        "Tecnología" => 6,
                    ]
                ],
                [
                    "nombre" => "Sara",
                    "notas" => [
                        "Lengua" => 1,
                        "Historia" => 8,
                        "Educación Física" => 2,
                        "Inglés" => 7,
                        "Matemáticas" => 1,
                        "Música" => 3,
                        "Ciencias" => 6,
                        "Tecnología" => 2,
                    ]
                ],
                [
                    "nombre" => "Carmen",
                    "notas" => [
                        "Lengua" => 3,
                        "Historia" => 10,
                        "Educación Física" => 3,
                        "Inglés" => 9,
                        "Matemáticas" => 1,
                        "Música" => 9,
                        "Ciencias" => 6,
                        "Tecnología" => 2,
                    ]
                ],
                [
                    "nombre" => "Alejandro",
                    "notas" => [
                        "Lengua" => 9,
                        "Historia" => 10,
                        "Educación Física" => 3,
                        "Inglés" => 6,
                        "Matemáticas" => 3,
                        "Música" => 9,
                        "Ciencias" => 9,
                        "Tecnología" => 5,
                    ]
                ],
                [
                    "nombre" => "Juan",
                    "notas" => [
                        "Lengua" => 2,
                        "Historia" => 7,
                        "Educación Física" => 8,
                        "Inglés" => 3,
                        "Matemáticas" => 6,
                        "Música" => 9,
                        "Ciencias" => 4,
                        "Tecnología" => 5,
                    ]
                ],
            ],
            "C" => [
                [
                    "nombre" => "Sara",
                    "notas" => [
                        "Lengua" => 9,
                        "Historia" => 7,
                        "Educación Física" => 7,
                        "Inglés" => 7,
                        "Matemáticas" => 5,
                        "Música" => 5,
                        "Ciencias" => 2,
                        "Tecnología" => 6,
                    ]
                ],
                [
                    "nombre" => "Pablo",
                    "notas" => [
                        "Lengua" => 6,
                        "Historia" => 4,
                        "Educación Física" => 9,
                        "Inglés" => 7,
                        "Matemáticas" => 3,
                        "Música" => 8,
                        "Ciencias" => 8,
                        "Tecnología" => 10,
                    ]
                ],
                [
                    "nombre" => "Paula",
                    "notas" => [
                        "Lengua" => 10,
                        "Historia" => 3,
                        "Educación Física" => 1,
                        "Inglés" => 7,
                        "Matemáticas" => 1,
                        "Música" => 4,
                        "Ciencias" => 3,
                        "Tecnología" => 5,
                    ]
                ],
                [
                    "nombre" => "Diego",
                    "notas" => [
                        "Lengua" => 4,
                        "Historia" => 2,
                        "Educación Física" => 6,
                        "Inglés" => 2,
                        "Matemáticas" => 7,
                        "Música" => 6,
                        "Ciencias" => 4,
                        "Tecnología" => 8,
                    ]
                ],
                [
                    "nombre" => "Lucas",
                    "notas" => [
                        "Lengua" => 2,
                        "Historia" => 1,
                        "Educación Física" => 5,
                        "Inglés" => 3,
                        "Matemáticas" => 8,
                        "Música" => 8,
                        "Ciencias" => 9,
                        "Tecnología" => 6,
                    ]
                ],
                [
                    "nombre" => "Mía",
                    "notas" => [
                        "Lengua" => 3,
                        "Historia" => 9,
                        "Educación Física" => 9,
                        "Inglés" => 6,
                        "Matemáticas" => 9,
                        "Música" => 3,
                        "Ciencias" => 1,
                        "Tecnología" => 1,
                    ]
                ],
                [
                    "nombre" => "Emma",
                    "notas" => [
                        "Lengua" => 10,
                        "Historia" => 7,
                        "Educación Física" => 9,
                        "Inglés" => 5,
                        "Matemáticas" => 1,
                        "Música" => 1,
                        "Ciencias" => 5,
                        "Tecnología" => 8,
                    ]
                ],
                [
                    "nombre" => "Sofía",
                    "notas" => [
                        "Lengua" => 8,
                        "Historia" => 4,
                        "Educación Física" => 1,
                        "Inglés" => 1,
                        "Matemáticas" => 1,
                        "Música" => 7,
                        "Ciencias" => 3,
                        "Tecnología" => 3,
                    ]
                ],
                [
                    "nombre" => "Mía",
                    "notas" => [
                        "Lengua" => 1,
                        "Historia" => 6,
                        "Educación Física" => 6,
                        "Inglés" => 6,
                        "Matemáticas" => 3,
                        "Música" => 8,
                        "Ciencias" => 4,
                        "Tecnología" => 7,
                    ]
                ],
                [
                    "nombre" => "Alba",
                    "notas" => [
                        "Lengua" => 10,
                        "Historia" => 8,
                        "Educación Física" => 5,
                        "Inglés" => 6,
                        "Matemáticas" => 7,
                        "Música" => 10,
                        "Ciencias" => 3,
                        "Tecnología" => 8,
                    ]
                ],
                [
                    "nombre" => "Luna",
                    "notas" => [
                        "Lengua" => 10,
                        "Historia" => 6,
                        "Educación Física" => 8,
                        "Inglés" => 6,
                        "Matemáticas" => 2,
                        "Música" => 3,
                        "Ciencias" => 1,
                        "Tecnología" => 1,
                    ]
                ],
                [
                    "nombre" => "Daniel",
                    "notas" => [
                        "Lengua" => 6,
                        "Historia" => 7,
                        "Educación Física" => 2,
                        "Inglés" => 5,
                        "Matemáticas" => 6,
                        "Música" => 1,
                        "Ciencias" => 3,
                        "Tecnología" => 3,
                    ]
                ],
                [
                    "nombre" => "Diego",
                    "notas" => [
                        "Lengua" => 1,
                        "Historia" => 3,
                        "Educación Física" => 5,
                        "Inglés" => 7,
                        "Matemáticas" => 6,
                        "Música" => 6,
                        "Ciencias" => 9,
                        "Tecnología" => 8,
                    ]
                ],
                [
                    "nombre" => "Luna",
                    "notas" => [
                        "Lengua" => 1,
                        "Historia" => 3,
                        "Educación Física" => 3,
                        "Inglés" => 1,
                        "Matemáticas" => 7,
                        "Música" => 8,
                        "Ciencias" => 7,
                        "Tecnología" => 5,
                    ]
                ],
                [
                    "nombre" => "Mateo",
                    "notas" => [
                        "Lengua" => 10,
                        "Historia" => 5,
                        "Educación Física" => 10,
                        "Inglés" => 1,
                        "Matemáticas" => 8,
                        "Música" => 7,
                        "Ciencias" => 5,
                        "Tecnología" => 7,
                    ]
                ],
                [
                    "nombre" => "Pablo",
                    "notas" => [
                        "Lengua" => 3,
                        "Historia" => 3,
                        "Educación Física" => 9,
                        "Inglés" => 10,
                        "Matemáticas" => 7,
                        "Música" => 9,
                        "Ciencias" => 6,
                        "Tecnología" => 1,
                    ]
                ],
                [
                    "nombre" => "Javier",
                    "notas" => [
                        "Lengua" => 2,
                        "Historia" => 5,
                        "Educación Física" => 3,
                        "Inglés" => 2,
                        "Matemáticas" => 4,
                        "Música" => 8,
                        "Ciencias" => 5,
                        "Tecnología" => 8,
                    ]
                ],
                [
                    "nombre" => "Adrián",
                    "notas" => [
                        "Lengua" => 2,
                        "Historia" => 5,
                        "Educación Física" => 5,
                        "Inglés" => 7,
                        "Matemáticas" => 8,
                        "Música" => 10,
                        "Ciencias" => 4,
                        "Tecnología" => 4,
                    ]
                ],
                [
                    "nombre" => "Noa",
                    "notas" => [
                        "Lengua" => 3,
                        "Historia" => 5,
                        "Educación Física" => 2,
                        "Inglés" => 9,
                        "Matemáticas" => 10,
                        "Música" => 4,
                        "Ciencias" => 7,
                        "Tecnología" => 9,
                    ]
                ],
                [
                    "nombre" => "Leo",
                    "notas" => [
                        "Lengua" => 9,
                        "Historia" => 8,
                        "Educación Física" => 9,
                        "Inglés" => 6,
                        "Matemáticas" => 5,
                        "Música" => 3,
                        "Ciencias" => 4,
                        "Tecnología" => 3,
                    ]
                ],
            ],
        ],
        "Sexto" => [
            "A" => [
                [
                    "nombre" => "Emma",
                    "notas" => [
                        "Lengua" => 8,
                        "Historia" => 1,
                        "Educación Física" => 8,
                        "Inglés" => 5,
                        "Matemáticas" => 6,
                        "Música" => 3,
                        "Ciencias" => 3,
                        "Tecnología" => 3,
                    ]
                ],
                [
                    "nombre" => "Luna",
                    "notas" => [
                        "Lengua" => 6,
                        "Historia" => 2,
                        "Educación Física" => 6,
                        "Inglés" => 10,
                        "Matemáticas" => 1,
                        "Música" => 7,
                        "Ciencias" => 9,
                        "Tecnología" => 3,
                    ]
                ],
                [
                    "nombre" => "Vega",
                    "notas" => [
                        "Lengua" => 8,
                        "Historia" => 8,
                        "Educación Física" => 6,
                        "Inglés" => 3,
                        "Matemáticas" => 4,
                        "Música" => 7,
                        "Ciencias" => 4,
                        "Tecnología" => 8,
                    ]
                ],
                [
                    "nombre" => "Daniel",
                    "notas" => [
                        "Lengua" => 7,
                        "Historia" => 6,
                        "Educación Física" => 4,
                        "Inglés" => 3,
                        "Matemáticas" => 8,
                        "Música" => 5,
                        "Ciencias" => 7,
                        "Tecnología" => 4,
                    ]
                ],
                [
                    "nombre" => "Martina",
                    "notas" => [
                        "Lengua" => 8,
                        "Historia" => 2,
                        "Educación Física" => 4,
                        "Inglés" => 3,
                        "Matemáticas" => 3,
                        "Música" => 2,
                        "Ciencias" => 3,
                        "Tecnología" => 9,
                    ]
                ],
                [
                    "nombre" => "Isabel",
                    "notas" => [
                        "Lengua" => 9,
                        "Historia" => 2,
                        "Educación Física" => 1,
                        "Inglés" => 6,
                        "Matemáticas" => 3,
                        "Música" => 2,
                        "Ciencias" => 7,
                        "Tecnología" => 5,
                    ]
                ],
                [
                    "nombre" => "Manuel",
                    "notas" => [
                        "Lengua" => 8,
                        "Historia" => 10,
                        "Educación Física" => 9,
                        "Inglés" => 3,
                        "Matemáticas" => 6,
                        "Música" => 2,
                        "Ciencias" => 9,
                        "Tecnología" => 2,
                    ]
                ],
                [
                    "nombre" => "Vega",
                    "notas" => [
                        "Lengua" => 6,
                        "Historia" => 7,
                        "Educación Física" => 3,
                        "Inglés" => 9,
                        "Matemáticas" => 10,
                        "Música" => 4,
                        "Ciencias" => 8,
                        "Tecnología" => 5,
                    ]
                ],
                [
                    "nombre" => "Nora",
                    "notas" => [
                        "Lengua" => 6,
                        "Historia" => 10,
                        "Educación Física" => 1,
                        "Inglés" => 7,
                        "Matemáticas" => 2,
                        "Música" => 9,
                        "Ciencias" => 3,
                        "Tecnología" => 8,
                    ]
                ],
                [
                    "nombre" => "Carla",
                    "notas" => [
                        "Lengua" => 6,
                        "Historia" => 4,
                        "Educación Física" => 1,
                        "Inglés" => 6,
                        "Matemáticas" => 7,
                        "Música" => 2,
                        "Ciencias" => 5,
                        "Tecnología" => 2,
                    ]
                ],
                [
                    "nombre" => "Manuel",
                    "notas" => [
                        "Lengua" => 4,
                        "Historia" => 7,
                        "Educación Física" => 9,
                        "Inglés" => 4,
                        "Matemáticas" => 5,
                        "Música" => 4,
                        "Ciencias" => 5,
                        "Tecnología" => 2,
                    ]
                ],
                [
                    "nombre" => "Sara",
                    "notas" => [
                        "Lengua" => 6,
                        "Historia" => 10,
                        "Educación Física" => 6,
                        "Inglés" => 2,
                        "Matemáticas" => 5,
                        "Música" => 9,
                        "Ciencias" => 2,
                        "Tecnología" => 5,
                    ]
                ],
                [
                    "nombre" => "Leo",
                    "notas" => [
                        "Lengua" => 6,
                        "Historia" => 9,
                        "Educación Física" => 8,
                        "Inglés" => 6,
                        "Matemáticas" => 9,
                        "Música" => 8,
                        "Ciencias" => 5,
                        "Tecnología" => 4,
                    ]
                ],
                [
                    "nombre" => "Carmen",
                    "notas" => [
                        "Lengua" => 7,
                        "Historia" => 6,
                        "Educación Física" => 3,
                        "Inglés" => 4,
                        "Matemáticas" => 10,
                        "Música" => 3,
                        "Ciencias" => 1,
                        "Tecnología" => 2,
                    ]
                ],
                [
                    "nombre" => "Alba",
                    "notas" => [
                        "Lengua" => 8,
                        "Historia" => 2,
                        "Educación Física" => 10,
                        "Inglés" => 7,
                        "Matemáticas" => 7,
                        "Música" => 5,
                        "Ciencias" => 7,
                        "Tecnología" => 6,
                    ]
                ],
                [
                    "nombre" => "Vega",
                    "notas" => [
                        "Lengua" => 5,
                        "Historia" => 6,
                        "Educación Física" => 9,
                        "Inglés" => 9,
                        "Matemáticas" => 10,
                        "Música" => 9,
                        "Ciencias" => 7,
                        "Tecnología" => 5,
                    ]
                ],
                [
                    "nombre" => "Isabel",
                    "notas" => [
                        "Lengua" => 1,
                        "Historia" => 2,
                        "Educación Física" => 7,
                        "Inglés" => 9,
                        "Matemáticas" => 8,
                        "Música" => 8,
                        "Ciencias" => 9,
                        "Tecnología" => 1,
                    ]
                ],
                [
                    "nombre" => "Claudia",
                    "notas" => [
                        "Lengua" => 2,
                        "Historia" => 4,
                        "Educación Física" => 3,
                        "Inglés" => 6,
                        "Matemáticas" => 5,
                        "Música" => 3,
                        "Ciencias" => 5,
                        "Tecnología" => 7,
                    ]
                ],
                [
                    "nombre" => "Luna",
                    "notas" => [
                        "Lengua" => 2,
                        "Historia" => 2,
                        "Educación Física" => 8,
                        "Inglés" => 7,
                        "Matemáticas" => 9,
                        "Música" => 6,
                        "Ciencias" => 9,
                        "Tecnología" => 6,
                    ]
                ],
                [
                    "nombre" => "Hugo",
                    "notas" => [
                        "Lengua" => 5,
                        "Historia" => 3,
                        "Educación Física" => 6,
                        "Inglés" => 4,
                        "Matemáticas" => 10,
                        "Música" => 3,
                        "Ciencias" => 5,
                        "Tecnología" => 10,
                    ]
                ],
            ],
            "B" => [
                [
                    "nombre" => "Mario",
                    "notas" => [
                        "Lengua" => 9,
                        "Historia" => 10,
                        "Educación Física" => 5,
                        "Inglés" => 10,
                        "Matemáticas" => 1,
                        "Música" => 6,
                        "Ciencias" => 2,
                        "Tecnología" => 2,
                    ]
                ],
                [
                    "nombre" => "Juan",
                    "notas" => [
                        "Lengua" => 1,
                        "Historia" => 6,
                        "Educación Física" => 8,
                        "Inglés" => 1,
                        "Matemáticas" => 1,
                        "Música" => 5,
                        "Ciencias" => 1,
                        "Tecnología" => 6,
                    ]
                ],
                [
                    "nombre" => "Noa",
                    "notas" => [
                        "Lengua" => 4,
                        "Historia" => 4,
                        "Educación Física" => 7,
                        "Inglés" => 5,
                        "Matemáticas" => 10,
                        "Música" => 1,
                        "Ciencias" => 1,
                        "Tecnología" => 7,
                    ]
                ],
                [
                    "nombre" => "Noa",
                    "notas" => [
                        "Lengua" => 9,
                        "Historia" => 2,
                        "Educación Física" => 7,
                        "Inglés" => 9,
                        "Matemáticas" => 8,
                        "Música" => 6,
                        "Ciencias" => 9,
                        "Tecnología" => 5,
                    ]
                ],
                [
                    "nombre" => "Álvaro",
                    "notas" => [
                        "Lengua" => 10,
                        "Historia" => 3,
                        "Educación Física" => 9,
                        "Inglés" => 6,
                        "Matemáticas" => 7,
                        "Música" => 8,
                        "Ciencias" => 4,
                        "Tecnología" => 2,
                    ]
                ],
                [
                    "nombre" => "David",
                    "notas" => [
                        "Lengua" => 1,
                        "Historia" => 5,
                        "Educación Física" => 4,
                        "Inglés" => 1,
                        "Matemáticas" => 1,
                        "Música" => 6,
                        "Ciencias" => 6,
                        "Tecnología" => 9,
                    ]
                ],
                [
                    "nombre" => "Diego",
                    "notas" => [
                        "Lengua" => 8,
                        "Historia" => 8,
                        "Educación Física" => 10,
                        "Inglés" => 9,
                        "Matemáticas" => 10,
                        "Música" => 6,
                        "Ciencias" => 5,
                        "Tecnología" => 9,
                    ]
                ],
                [
                    "nombre" => "Adrián",
                    "notas" => [
                        "Lengua" => 4,
                        "Historia" => 3,
                        "Educación Física" => 7,
                        "Inglés" => 3,
                        "Matemáticas" => 7,
                        "Música" => 5,
                        "Ciencias" => 10,
                        "Tecnología" => 1,
                    ]
                ],
                [
                    "nombre" => "Daniel",
                    "notas" => [
                        "Lengua" => 1,
                        "Historia" => 3,
                        "Educación Física" => 1,
                        "Inglés" => 2,
                        "Matemáticas" => 5,
                        "Música" => 9,
                        "Ciencias" => 5,
                        "Tecnología" => 10,
                    ]
                ],
                [
                    "nombre" => "Carmen",
                    "notas" => [
                        "Lengua" => 2,
                        "Historia" => 2,
                        "Educación Física" => 5,
                        "Inglés" => 4,
                        "Matemáticas" => 8,
                        "Música" => 2,
                        "Ciencias" => 6,
                        "Tecnología" => 1,
                    ]
                ],
                [
                    "nombre" => "Álvaro",
                    "notas" => [
                        "Lengua" => 4,
                        "Historia" => 10,
                        "Educación Física" => 8,
                        "Inglés" => 5,
                        "Matemáticas" => 5,
                        "Música" => 5,
                        "Ciencias" => 5,
                        "Tecnología" => 5,
                    ]
                ],
                [
                    "nombre" => "Alejandro",
                    "notas" => [
                        "Lengua" => 3,
                        "Historia" => 5,
                        "Educación Física" => 7,
                        "Inglés" => 3,
                        "Matemáticas" => 10,
                        "Música" => 1,
                        "Ciencias" => 9,
                        "Tecnología" => 10,
                    ]
                ],
                [
                    "nombre" => "Leo",
                    "notas" => [
                        "Lengua" => 6,
                        "Historia" => 6,
                        "Educación Física" => 9,
                        "Inglés" => 8,
                        "Matemáticas" => 1,
                        "Música" => 8,
                        "Ciencias" => 8,
                        "Tecnología" => 4,
                    ]
                ],
                [
                    "nombre" => "Sofía",
                    "notas" => [
                        "Lengua" => 6,
                        "Historia" => 10,
                        "Educación Física" => 1,
                        "Inglés" => 1,
                        "Matemáticas" => 1,
                        "Música" => 7,
                        "Ciencias" => 9,
                        "Tecnología" => 1,
                    ]
                ],
                [
                    "nombre" => "Álvaro",
                    "notas" => [
                        "Lengua" => 8,
                        "Historia" => 4,
                        "Educación Física" => 9,
                        "Inglés" => 10,
                        "Matemáticas" => 5,
                        "Música" => 4,
                        "Ciencias" => 5,
                        "Tecnología" => 1,
                    ]
                ],
                [
                    "nombre" => "Paula",
                    "notas" => [
                        "Lengua" => 4,
                        "Historia" => 7,
                        "Educación Física" => 2,
                        "Inglés" => 5,
                        "Matemáticas" => 9,
                        "Música" => 7,
                        "Ciencias" => 6,
                        "Tecnología" => 8,
                    ]
                ],
                [
                    "nombre" => "Hugo",
                    "notas" => [
                        "Lengua" => 1,
                        "Historia" => 7,
                        "Educación Física" => 8,
                        "Inglés" => 7,
                        "Matemáticas" => 5,
                        "Música" => 2,
                        "Ciencias" => 8,
                        "Tecnología" => 1,
                    ]
                ],
                [
                    "nombre" => "Paula",
                    "notas" => [
                        "Lengua" => 7,
                        "Historia" => 1,
                        "Educación Física" => 8,
                        "Inglés" => 8,
                        "Matemáticas" => 6,
                        "Música" => 4,
                        "Ciencias" => 10,
                        "Tecnología" => 4,
                    ]
                ],
                [
                    "nombre" => "Chloe",
                    "notas" => [
                        "Lengua" => 10,
                        "Historia" => 10,
                        "Educación Física" => 9,
                        "Inglés" => 6,
                        "Matemáticas" => 5,
                        "Música" => 5,
                        "Ciencias" => 3,
                        "Tecnología" => 6,
                    ]
                ],
                [
                    "nombre" => "Alejandro",
                    "notas" => [
                        "Lengua" => 4,
                        "Historia" => 7,
                        "Educación Física" => 8,
                        "Inglés" => 2,
                        "Matemáticas" => 5,
                        "Música" => 4,
                        "Ciencias" => 10,
                        "Tecnología" => 5,
                    ]
                ],
            ],
            "C" => [
                [
                    "nombre" => "Alba",
                    "notas" => [
                        "Lengua" => 2,
                        "Historia" => 2,
                        "Educación Física" => 7,
                        "Inglés" => 6,
                        "Matemáticas" => 9,
                        "Música" => 7,
                        "Ciencias" => 8,
                        "Tecnología" => 4,
                    ]
                ],
                [
                    "nombre" => "Claudia",
                    "notas" => [
                        "Lengua" => 7,
                        "Historia" => 7,
                        "Educación Física" => 6,
                        "Inglés" => 4,
                        "Matemáticas" => 4,
                        "Música" => 8,
                        "Ciencias" => 9,
                        "Tecnología" => 7,
                    ]
                ],
                [
                    "nombre" => "Paula",
                    "notas" => [
                        "Lengua" => 9,
                        "Historia" => 1,
                        "Educación Física" => 5,
                        "Inglés" => 3,
                        "Matemáticas" => 3,
                        "Música" => 8,
                        "Ciencias" => 5,
                        "Tecnología" => 7,
                    ]
                ],
                [
                    "nombre" => "Diego",
                    "notas" => [
                        "Lengua" => 9,
                        "Historia" => 9,
                        "Educación Física" => 10,
                        "Inglés" => 1,
                        "Matemáticas" => 8,
                        "Música" => 6,
                        "Ciencias" => 4,
                        "Tecnología" => 5,
                    ]
                ],
                [
                    "nombre" => "David",
                    "notas" => [
                        "Lengua" => 1,
                        "Historia" => 4,
                        "Educación Física" => 5,
                        "Inglés" => 2,
                        "Matemáticas" => 1,
                        "Música" => 1,
                        "Ciencias" => 2,
                        "Tecnología" => 5,
                    ]
                ],
                [
                    "nombre" => "Olivia",
                    "notas" => [
                        "Lengua" => 9,
                        "Historia" => 9,
                        "Educación Física" => 9,
                        "Inglés" => 8,
                        "Matemáticas" => 9,
                        "Música" => 10,
                        "Ciencias" => 8,
                        "Tecnología" => 9,
                    ]
                ],
                [
                    "nombre" => "Manuel",
                    "notas" => [
                        "Lengua" => 4,
                        "Historia" => 5,
                        "Educación Física" => 7,
                        "Inglés" => 1,
                        "Matemáticas" => 10,
                        "Música" => 8,
                        "Ciencias" => 2,
                        "Tecnología" => 10,
                    ]
                ],
                [
                    "nombre" => "Sara",
                    "notas" => [
                        "Lengua" => 3,
                        "Historia" => 10,
                        "Educación Física" => 5,
                        "Inglés" => 8,
                        "Matemáticas" => 2,
                        "Música" => 8,
                        "Ciencias" => 10,
                        "Tecnología" => 3,
                    ]
                ],
                [
                    "nombre" => "Noa",
                    "notas" => [
                        "Lengua" => 7,
                        "Historia" => 6,
                        "Educación Física" => 10,
                        "Inglés" => 10,
                        "Matemáticas" => 3,
                        "Música" => 2,
                        "Ciencias" => 9,
                        "Tecnología" => 3,
                    ]
                ],
                [
                    "nombre" => "Martina",
                    "notas" => [
                        "Lengua" => 9,
                        "Historia" => 10,
                        "Educación Física" => 3,
                        "Inglés" => 10,
                        "Matemáticas" => 10,
                        "Música" => 10,
                        "Ciencias" => 9,
                        "Tecnología" => 4,
                    ]
                ],
                [
                    "nombre" => "Lucas",
                    "notas" => [
                        "Lengua" => 1,
                        "Historia" => 4,
                        "Educación Física" => 9,
                        "Inglés" => 3,
                        "Matemáticas" => 8,
                        "Música" => 1,
                        "Ciencias" => 4,
                        "Tecnología" => 7,
                    ]
                ],
                [
                    "nombre" => "Pablo",
                    "notas" => [
                        "Lengua" => 1,
                        "Historia" => 7,
                        "Educación Física" => 5,
                        "Inglés" => 8,
                        "Matemáticas" => 9,
                        "Música" => 3,
                        "Ciencias" => 7,
                        "Tecnología" => 7,
                    ]
                ],
                [
                    "nombre" => "Leo",
                    "notas" => [
                        "Lengua" => 8,
                        "Historia" => 4,
                        "Educación Física" => 1,
                        "Inglés" => 10,
                        "Matemáticas" => 6,
                        "Música" => 4,
                        "Ciencias" => 10,
                        "Tecnología" => 3,
                    ]
                ],
                [
                    "nombre" => "Antonio",
                    "notas" => [
                        "Lengua" => 8,
                        "Historia" => 8,
                        "Educación Física" => 9,
                        "Inglés" => 7,
                        "Matemáticas" => 1,
                        "Música" => 2,
                        "Ciencias" => 2,
                        "Tecnología" => 4,
                    ]
                ],
                [
                    "nombre" => "Noa",
                    "notas" => [
                        "Lengua" => 1,
                        "Historia" => 6,
                        "Educación Física" => 2,
                        "Inglés" => 8,
                        "Matemáticas" => 3,
                        "Música" => 1,
                        "Ciencias" => 4,
                        "Tecnología" => 6,
                    ]
                ],
                [
                    "nombre" => "Nora",
                    "notas" => [
                        "Lengua" => 9,
                        "Historia" => 5,
                        "Educación Física" => 1,
                        "Inglés" => 9,
                        "Matemáticas" => 1,
                        "Música" => 9,
                        "Ciencias" => 9,
                        "Tecnología" => 3,
                    ]
                ],
                [
                    "nombre" => "Andrés",
                    "notas" => [
                        "Lengua" => 4,
                        "Historia" => 9,
                        "Educación Física" => 2,
                        "Inglés" => 5,
                        "Matemáticas" => 8,
                        "Música" => 2,
                        "Ciencias" => 8,
                        "Tecnología" => 6,
                    ]
                ],
                [
                    "nombre" => "Hugo",
                    "notas" => [
                        "Lengua" => 8,
                        "Historia" => 2,
                        "Educación Física" => 2,
                        "Inglés" => 6,
                        "Matemáticas" => 8,
                        "Música" => 1,
                        "Ciencias" => 10,
                        "Tecnología" => 8,
                    ]
                ],
                [
                    "nombre" => "David",
                    "notas" => [
                        "Lengua" => 3,
                        "Historia" => 5,
                        "Educación Física" => 7,
                        "Inglés" => 2,
                        "Matemáticas" => 10,
                        "Música" => 8,
                        "Ciencias" => 6,
                        "Tecnología" => 9,
                    ]
                ],
                [
                    "nombre" => "Daniel",
                    "notas" => [
                        "Lengua" => 5,
                        "Historia" => 4,
                        "Educación Física" => 5,
                        "Inglés" => 3,
                        "Matemáticas" => 2,
                        "Música" => 5,
                        "Ciencias" => 6,
                        "Tecnología" => 10,
                    ]
                ],
            ],
        ],
    ],
];

?>