# Apadrina_un_arbol
Apadrina un Árbol - Plataforma de Reforestación (ODS 15)
Este proyecto es una aplicación web diseñada para fomentar la reforestación y el cuidado ambiental, alineada con el Objetivo de Desarrollo Sostenible 15 (Vida de Ecosistemas Terrestres). La plataforma permite a los usuarios explorar un catálogo de especies de árboles, realizar apadrinamientos y recibir un certificado digital personalizado.

Características Principales
Catálogo Interactivo: Visualización dinámica de árboles disponibles para apadrinamiento.
Sistema de Adopción: Flujo de pago simulado con validaciones en tiempo real y seguridad de datos.
Generación de Certificados: Creación automática de documentos PDF para los padrinos.
Geolocalización: Integración con Google Maps para ubicar zonas de reforestación.
Panel Administrativo: Gestión de inventario de árboles y visualización de registros.

Seguridad Implementada
Protección SQL: Uso de Sentencias Preparadas (Prepared Statements) para prevenir SQL Injection.
Cifrado de Credenciales: Hashing de contraseñas mediante el algoritmo BCRYPT.
Manejo de Sesiones: Control de acceso restringido para áreas administrativas y de usuario.
Sanitización de Inputs: Validación estricta de datos tanto en cliente (JS) como en servidor (PHP).

Instalación y Despliegue
Clonar el repositorio: git clone https://github.com/tu-usuario/apadrina-un-arbol.git
Importar el archivo SQL incluido en la carpeta /db a tu servidor MySQL.
Configurar las credenciales de acceso en el archivo includes/db.php.
El proyecto está optimizado para ejecutarse en servidores Apache (Probado en InfinityFree)
