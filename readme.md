## The Temoa Hub

[![Build Status](https://travis-ci.org/wafto/temoa.svg)](https://travis-ci.org/wafto/temoa)

### Funcionamiento del API (Cursos)

El API para este DEMO consiste en las altas, bajas, cambios y consultas para los diferentes cursos que el Socio Tecnológico pueda manipular comodamente desde un API Rest, el cual consta de las siguientes acciones disponibles:

|                   | POST                   | GET                                                | PUT                                   | DELETE |
|-------------------|------------------------|----------------------------------------------------|---------------------------------------|--------|
| api/v1/cursos     | Se crea un nuevo curso | Se listan los cursos                               | N/A                                   | N/A    |
| api/v1/cursos/:id | N/A                    | Ver información del curso con el identificador :id | Editar curso con el identificador :id |    Elimina el curso con el identificador :id    |


##### API - Inserción de Curso POST api/v1/cursos

Para el funcionamiento correcto de la adicción del curso mediante el API se debe seguir un ejemplo como el siguiente (cabe recordar que el usuario y contraseña debe ser válida y perteneciente a un socio tecnológico):

```
curl --user socio@example.com:secret -H "Content-Type: application/json" -d
'{
  "folioExterno": "b5dfdb68d0c7c",
  "nombre": "Et aut voluptatem facere aut.",
  "categoria": "Desarollo y Sistemas",
  "descripcion": "Laboriosam accusamus omnis suscipit facere voluptas. Aliquam et voluptatem eos sed. Magnam omnis et esse omnis vel possimus. Provident est et autem cumque ipsa. Nisi est sapiente nobis. Voluptatibus maxime fugiat rem autem perferendis veritatis consequatur. Minus in asperiores placeat ducimus ullam. Eos iste illo molestias qui. Corporis nemo alias cumque atque alias aut praesentium voluptate. Ut blanditiis rem vel possimus. Culpa debitis asperiores veritatis debitis dolorem est quo. Pariatur saepe est illo praesentium commodi modi tempora. Voluptates et officiis atque est doloremque excepturi earum. Esse sit sint suscipit adipisci perspiciatis. Accusantium illum pariatur molestiae ut magni voluptatum dolorem. Libero est officiis repellendus quisquam debitis id qui rerum. Eaque esse beatae dolorem qui iste tenetur rerum. Quia non eum nostrum dolor optio laboriosam in. Ut et facere nihil omnis et commodi impedit. Corporis labore sequi ut cum. Accusamus et rerum placeat nesciunt ea non porro. Odio laboriosam in in aut aut illo. Laborum excepturi eos dicta ipsam aut. Earum nulla vel quae vitae temporibus voluptate. Rem vel porro et dolorum et dicta non.",
  "duracion": 32,
  "formato": "línea",
  "cancelado": 0,
  "tags": [
    "quo1",
    "dolores1",
    "molestiae2",
    "repellat3"
  ],
  "inicio": "2015-04-12 12:11:08",
  "creado": "2014-12-16 01:41:19",
  "actualizado": "2014-12-16 01:41:19"
}
' http://104.236.101.166/api/v1/cursos
```
Una vez realizado el post del curso las posibles respuestas pueden ser el mismo recurso en caso de éxito, en caso de algún error o bien los datos fueron incorrectos al intentar agregarlo la respuesta puede ser:

```
{"message":"Unauthorized"}
```

```
{"error":true,"message":{"external_number":["The external number has already been taken."]}}
```
Dependiendo del resultado el mensaje de error varia.

##### API - Listado de curso GET api/v1/cursos

Para el listado de cursos solo es necesario acceder a la url con el método post, algunos ejemplos de los diferentes listados más filtros básicos en algunos casos se muestran a continuación:

```
http://104.236.101.166/api/v1/cursos
```

```
http://104.236.101.166/api/v1/cursos?page=2&size=2
```

```
http://104.236.101.166/api/v1/cursos?page=2&size=2&search[category_id][eq]=2&search[name][lk]=foo
```

El resultado del listado contiene tambien el número total de cursos, la página en la que se encuentra actualmente el usuario, el tamaño de la página así como un arreglo de todos los cursos con información relevante.

```
{
  total: 1003,
  page: 2,
  size: 2,
  items: [
    {
        {
            id: 3,
            folioInterno: "84cf7f823cdb",
            folioExterno: "2d9810cc7377",
            nombre: "Corporis laudantium nostrum sed labore reprehenderit quaerat.",
            categoria: "Seguridad",
            socioTecnologico: {
                id: 172,
                nombre: "Grady PLC",
                responsable: "Hector Bode II",
                rfc: "XAGS940204DF5",
                areaEspecialidad: "est",
                creado: "2014-12-18 01:51:23",
                actualizado: "2014-12-18 01:51:23"
            },
            descripcion: "Fuga vel voluptatem tempora nisi impedit aut. Ut omnis nemo ut ullam. Incidunt pariatur facere et repellendus beatae rerum. Autem deserunt quo voluptatum voluptas. Consequuntur porro est consequatur temporibus ipsam fugit iusto iste. Eum modi et aut modi. In praesentium blanditiis doloremque aut repellat. Aspernatur eaque exercitationem eum quo delectus quis dolor. Pariatur qui eaque reprehenderit maxime. Nulla nemo voluptatibus id ea nesciunt. Omnis in est aliquam suscipit nemo rerum tempore. Ut rerum illo sint. Et architecto ea velit officiis. Explicabo qui minus eum adipisci. Quia eos officiis amet dolores quis dolores doloribus. Tempore laudantium et nostrum asperiores dolor quod blanditiis voluptas. Magni quia quia vitae qui. Voluptatem aut et aut nihil ut iusto enim. Numquam illum odit assumenda iste voluptatem. Et et quae asperiores exercitationem necessitatibus. Adipisci iste fuga sunt nam tenetur debitis. Maiores sint laboriosam repellat quod. Eveniet nulla et est consequuntur. Vero et placeat explicabo. Fuga nam animi quasi minus necessitatibus maxime. Et et earum sequi.",
            duracion: 8,
            formato: "presencial",
            cancelado: 0,
            imagen: "http://lorempixel.com/640/480/",
            tags: [
                "sint6",
                "eligendi3",
                "dolore3",
                "sed1"
            ],
            inicio: "2016-04-21 05:45:58",
            creado: "2014-12-18 01:51:43",
            actualizado: "2014-12-18 01:51:43"
        },
        {...}
  ]
}
```

##### API - Ver curso espécifico GET api/v1/cursos/:id

Llamada al API con el identificador correspondiente:

```
http://104.236.101.166/api/v1/cursos/1
```

Resultado:

```
{
    id: 1,
    folioInterno: "2a6a882414d6",
    folioExterno: "87b9ac40801a",
    nombre: "Soluta illo dolores sed assumenda nulla eaque.",
    categoria: "Otros",
    socioTecnologico: {
    id: 371,
        nombre: "Leuschke-Wisozk",
        responsable: "Mr. Philip Roberts Jr.",
        rfc: "LHKK710309ER2",
        areaEspecialidad: "explicabo",
        creado: "2014-12-18 01:51:28",
        actualizado: "2014-12-18 01:51:28"
    },
    descripcion: "Voluptatem molestiae aliquam debitis aut vero molestiae accusantium libero. Enim quia qui ut sunt molestiae et. Consequatur exercitationem qui fugit aut sed rerum laborum omnis. Minus veniam non rem ad dolores voluptatem ut. Deserunt aut ipsum quis mollitia quo nesciunt debitis. Id hic mollitia sit ex. Esse aut qui ea. Incidunt aut placeat totam eveniet quia aliquam inventore. Est voluptates perferendis et. Voluptas dolores dignissimos aliquid soluta possimus rerum illum est. Sunt esse quia animi velit. Aspernatur modi pariatur adipisci soluta. Quos sint facere mollitia rem eos inventore. Itaque iure aut blanditiis autem beatae illo. Reiciendis ratione repellat et culpa perferendis explicabo libero ad. Consequuntur atque voluptatem dolor perferendis et id est. Nulla aut doloribus id occaecati veritatis animi. Quo et qui natus ipsum iusto. Quidem id harum qui dolorem architecto inventore. Placeat ad aut ut in recusandae blanditiis amet iste. Illum nihil aut quis ipsa. Dolor repellat voluptas non sint. Nostrum aut repellat rerum rerum magni sunt. Sed delectus laborum praesentium voluptatibus odio.",
    duracion: 80,
    formato: "presencial",
    cancelado: 0,
    imagen: "http://lorempixel.com/640/480/",
    tags: [
        "et33",
        "eveniet1"
    ],
    inicio: "2016-09-27 16:05:16",
    creado: "2014-12-18 01:51:43",
    actualizado: "2014-12-18 01:51:43"
}
```

##### API - Editar curso PUT api/v1/cursos/:id

Llamada al API con el identificador correspondiente:

```
curl -X PUT --user socio@example.com:secret -H "Content-Type: application/json" -d
'{
  "folioExterno": "b5dfdb68d0c7c",
  "nombre": "Et aut voluptatem facere aut.",
  "categoria": "Desarollo y Sistemas",
  "descripcion": "Laboriosam accusamus omnis suscipit facere voluptas. Aliquam et voluptatem eos sed. Magnam omnis et esse omnis vel possimus. Provident est et autem cumque ipsa. Nisi est sapiente nobis. Voluptatibus maxime fugiat rem autem perferendis veritatis consequatur. Minus in asperiores placeat ducimus ullam. Eos iste illo molestias qui. Corporis nemo alias cumque atque alias aut praesentium voluptate. Ut blanditiis rem vel possimus. Culpa debitis asperiores veritatis debitis dolorem est quo. Pariatur saepe est illo praesentium commodi modi tempora. Voluptates et officiis atque est doloremque excepturi earum. Esse sit sint suscipit adipisci perspiciatis. Accusantium illum pariatur molestiae ut magni voluptatum dolorem. Libero est officiis repellendus quisquam debitis id qui rerum. Eaque esse beatae dolorem qui iste tenetur rerum. Quia non eum nostrum dolor optio laboriosam in. Ut et facere nihil omnis et commodi impedit. Corporis labore sequi ut cum. Accusamus et rerum placeat nesciunt ea non porro. Odio laboriosam in in aut aut illo. Laborum excepturi eos dicta ipsam aut. Earum nulla vel quae vitae temporibus voluptate. Rem vel porro et dolorum et dicta non.",
  "duracion": 32,
  "formato": "línea",
  "cancelado": 0,
  "tags": [
    "quo1",
    "dolores1",
    "molestiae2",
    "repellat3"
  ],
  "inicio": "2015-04-12 12:11:08",
  "creado": "2014-12-16 01:41:19",
  "actualizado": "2014-12-16 01:41:19"
}
' http://104.236.101.166/api/v1/cursos/1
```

##### API - Eliminar curso PUT api/v1/cursos/:id

Elimación del curso con el identificador :id

```
curl -X DELETE "http://104.236.101.166/api/v1/cursos/1"
```

### License

Temoa is open-sourced software licensed under the [MIT license](http://opensource.org/licenses/MIT)
