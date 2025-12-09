# Proyecto `api-laravel2`

API REST y vista web para gestionar estudiantes en Laravel.

---

## 📁 Estructura de carpetas

- **`app/Http/Controllers/Api/`**  
  Contiene `StudentController.php`: controlador para operaciones CRUD mediante la API.

- **`app/Http/Controllers/`**  
  Contiene `StudentWebController.php`: controlador para mostrar la lista de estudiantes en la web.

- **`app/Models/`**  
  Contiene `Students.php`: modelo que representa la tabla `students` en la base de datos.

- **`database/migrations/`**  
  Incluye la migración para crear la tabla `students` con campos: `id`, `name`, `email`, `birthdate`, `course` y `timestamps`.

- **`resources/views/layouts/`**  
  Contiene `app.blade.php`: plantilla base con menú de navegación.

- **`resources/views/students/`**  
  Contiene `index.blade.php`: vista que muestra una tabla con todos los estudiantes.

- **`routes/api.php`**  
  Define las rutas de la API REST para gestionar estudiantes.

- **`routes/web.php`**  
  Define las rutas web: página de inicio y lista de estudiantes.

---

## 🔌 Endpoints de la API (`/api/`)

| Método HTTP | Ruta                   | Acción                              |
|-------------|------------------------|-------------------------------------|
| `GET`       | `/students`            | Obtiene todos los estudiantes       |
| `GET`       | `/students/{id}`       | Obtiene un estudiante por ID        |
| `POST`      | `/students`            | Crea un nuevo estudiante            |
| `PUT`       | `/students/{id}`       | Actualiza **todos** los datos       |
| `PATCH`     | `/students/{id}`       | Actualiza **solo los campos enviados** |
| `DELETE`    | `/students/{id}`       | Elimina un estudiante               |

> Todos los endpoints devuelven respuestas en formato JSON. Se incluyen validaciones y mensajes de error adecuados según el caso.