<div align="center">

# 🌿 ECOCONECTA 🌿

[![PHP](https://img.shields.io/badge/PHP-777BB4?style=for-the-badge&logo=php&logoColor=white)](https://www.php.net/)
[![HTML5](https://img.shields.io/badge/HTML5-E34F26?style=for-the-badge&logo=html5&logoColor=white)](https://developer.mozilla.org/es/docs/Web/HTML)
[![CSS3](https://img.shields.io/badge/CSS3-1572B6?style=for-the-badge&logo=css3&logoColor=white)](https://developer.mozilla.org/es/docs/Web/CSS)
[![JavaScript](https://img.shields.io/badge/JavaScript-F7DF1E?style=for-the-badge&logo=javascript&logoColor=black)](https://developer.mozilla.org/es/docs/Web/JavaScript)
[![Bootstrap](https://img.shields.io/badge/Bootstrap-7952B3?style=for-the-badge&logo=bootstrap&logoColor=white)](https://getbootstrap.com/)
[![PostgreSQL](https://img.shields.io/badge/PostgreSQL-336791?style=for-the-badge&logo=postgresql&logoColor=white)](https://www.postgresql.org/)

*Una plataforma web para conectar comunidades y promover iniciativas ecológicas*

</div>

## 📋 Índice

- [Descripción](#-descripción)
- [Características](#-características)
- [Tecnologías](#-tecnologías)
- [Arquitectura](#-arquitectura)
- [Instalación](#-instalación)
- [Uso](#-uso)
- [Equipo](#-equipo)
- [Licencia](#-licencia)

## 📝 Descripción

Ecoconecta es una plataforma web diseñada para facilitar la conexión entre comunidades y promover iniciativas ecológicas. El sistema permite a los usuarios compartir proyectos ambientales, organizar eventos, y colaborar en actividades que beneficien al medio ambiente, todo bajo una interfaz intuitiva y amigable.

## ✨ Características

- 👥 Gestión de usuarios y perfiles
- 🌱 Publicación y gestión de proyectos ecológicos
- 📅 Organización de eventos ambientales
- 🔔 Sistema de notificaciones
- 📊 Panel de estadísticas e informes
- 💬 Foro de discusión comunitario
- 📱 Diseño responsivo para dispositivos móviles

## 🛠️ Tecnologías

### Frontend
- **HTML5**: Estructura del sitio web
- **CSS3**: Estilizado y diseño responsivo
- **JavaScript**: Interactividad y funcionalidades dinámicas
- **Bootstrap**: Framework para el diseño de la interfaz de usuario

### Backend
- **PHP**: Lenguaje de programación del lado del servidor
- **PostgreSQL**: Sistema de gestión de base de datos

### Herramientas de Desarrollo
- **XAMPP**: Entorno de desarrollo que incluye Apache, PHP y PostgreSQL
- **Git**: Control de versiones

## 🏗️ Arquitectura

Ecoconecta está desarrollado bajo una arquitectura monolítica donde todos los componentes de la aplicación (frontend, backend y base de datos) están integrados en un solo sistema. Esta arquitectura facilita el desarrollo y mantenimiento del proyecto.

## 💻 Instalación

### Requisitos previos
- [XAMPP](https://www.apachefriends.org/es/index.html) (con Apache, PHP y PostgreSQL)
- [Git](https://git-scm.com/downloads)

### Pasos de instalación

1. **Clonar el repositorio**
   ```bash
   git clone https://github.com/tu-usuario/eco-conecta-platform.git
   cd eco-conecta-platform
   ```

2. **Configurar XAMPP**
   - Inicia el panel de control de XAMPP
   - Inicia los servicios de Apache y PostgreSQL

3. **Configurar la base de datos**
   - Accede a phpPgAdmin a través de http://localhost/phppgadmin/
   - Crea una nueva base de datos llamada `ecoconecta`
   - Importa el archivo SQL ubicado en `database/ecoconecta.sql`

4. **Configurar el proyecto**
   - Copia todo el contenido del repositorio en la carpeta `htdocs` de XAMPP (generalmente en `C:\xampp\htdocs\` en Windows o `/opt/lampp/htdocs/` en Linux)
   - Renombra el archivo `config.example.php` a `config.php` y configura las credenciales de la base de datos

5. **Acceder al sistema**
   - Abre tu navegador y navega a `http://localhost/eco-conecta-platform`

## 🚀 Uso

1. **Iniciar sesión o registrarse**
   - Utiliza las credenciales por defecto para administrador:
     - Usuario: `admin`
     - Contraseña: `admin123`
   - O regístrate como nuevo usuario

2. **Explorar el sistema**
   - Navega por las diferentes secciones del sistema
   - Crea proyectos, eventos o participa en foros

3. **Administración**
   - Los usuarios con permisos de administrador pueden acceder al panel de administración para gestionar usuarios, proyectos y estadísticas

## 👥 Equipo

- **Oscar Steven López Noguera** - Desarrollador Frontend
- **Maryuri Idaly Ortiz Diaz** - Desarrolladora Backend
- **Jeisson Hernan Ojeda Piandoy** - Analista de Base de Datos
- **Brayan Jair Enriquez Pastas** - Líder de Proyecto

## 📄 Licencia

Este proyecto está bajo la Licencia MIT - ver el archivo [LICENSE](LICENSE) para más detalles.

---

<div align="center">

💚 **Ecoconecta** - Conectando comunidades para un futuro más verde © 2023

</div>
