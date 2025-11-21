# 🚀 Technical Challenge – CRUD con Laravel 12 + Livewire + Spatie

Proyecto desarrollado como parte de un **Technical Challenge**, implementando un sistema CRUD robusto con roles de usuario, panel administrativo y perfiles.

Este sistema está construido con tecnologías modernas del ecosistema Laravel, priorizando claridad, estructura, modularidad y buenas prácticas.

---

## 📌 Tecnologías utilizadas

- **Laravel 12**
- **PHP 8.3**
- **Livewire 3**
- **Jetstream (Fortify)**
- **Spatie Permission**
- **MySQL**
- **Bootstrap 5**
- **Font Awesome**
- **Nginx**
- **Composer / Artisan CLI**

---

## 📂 Funcionalidades del sistema

### 👑 Rol: Admin
- CRUD completo de usuarios:
  - Crear
  - Editar
  - Actualizar
  - Eliminar
  - Ver detalles
- Asignar rol (admin/user)
- Dashboard exclusivo para administradores
- Control de acceso basado en roles vía Spatie Permission
- Livewire para formularios dinámicos

### 🙍‍♂️ Rol: User
- Puede actualizar:
  - Nombre
  - Email
  - Contraseña
  - Foto de perfil
- Dashboard propio
- Acceso restringido a áreas admin

---

## ⚙️ Instalación y ejecución (Linux)

### 1. Clonar repositorio
```bash
git clone https://github.com/TU-USUARIO/TU-REPO.git
cd TU-REPO
```

### 2. Instalar dependencias
```bash
composer install
npm install && npm run build
```

### 3. Crear archivo .env
```bash
cp .env.example .env
```

Configurar base de datos:
```
DB_DATABASE=crud
DB_USERNAME=root
DB_PASSWORD=tu_password
```

### 4. Generar APP_KEY
```bash
php artisan key:generate
```

### 5. Migraciones + Seeders
Incluye:
- RolesSeeder
- AdminUserSeeder

```bash
php artisan migrate --seed
```

### 6. Ejecutar servidor
```bash
php artisan serve
```

URL por defecto:
```
http://localhost:8000
```

---

## 🔐 Usuario administrador inicial

```
Email: admin@example.com
Password: password
```

---

## 🧩 Estructura del proyecto

```
routes/
 ├── web.php
 ├── admin.php
app/
 ├── Livewire/admin/users/
 ├── Http/Middleware/
database/
 └── seeders/
resources/
 ├── views/admin/
 ├── views/user/
 └── views/livewire/
```

---

## 💡 Decisiones técnicas

- Laravel 12 para base moderna y robusta  
- Livewire 3 para interactividad sin JavaScript  
- Spatie Permission para roles escalables  
- Bootstrap 5 + Font Awesome para UI rápida  
- Rutas separadas para admin  
- Dashboards distintos por rol  
- Módulos bien separados (middleware, seeders, components)

---

## 📄 License
Este repositorio no define una licencia específica.

---

## ✨ Autor
Desarrollado por **BETTO** como parte de un Technical Challenge.
