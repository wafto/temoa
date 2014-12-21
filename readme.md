## The Temoa Hub

[![Build Status](https://travis-ci.org/wafto/temoa.svg)](https://travis-ci.org/wafto/temoa)

### Funcionamiento del API (Cursos)

El API para este DEMO consiste en las altas, bajas, cambios y consultas para los diferentes cursos que el Socio Tecnológico pueda manipular comodamente desde un API Rest, el cual consta de las siguientes acciones disponibles:

|                   | POST                   | GET                                                | PUT                                   | DELETE |
|-------------------|------------------------|----------------------------------------------------|---------------------------------------|--------|
| api/v1/cursos     | Se crea un nuevo curso | Se listan los cursos                               | N/A                                   | N/A    |
| api/v1/cursos/:id | N/A                    | Ver información del curso con el identificador :id | Editar curso con el identificador :id |        |

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

### License

Temoa is open-sourced software licensed under the [MIT license](http://opensource.org/licenses/MIT)
