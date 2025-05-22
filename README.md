# Andina RENIEC Auth Plugin

Plugin WordPress desarrollado RENIEC (IDAAS Perú).

## 📆 Descripción
Este plugin permite generar un botón de autenticación con RENIEC (IDAAS Perú) usando un shortcode. Al hacer clic, el usuario es redirigido a una URL firmada generada con el SDK oficial.

## ✅ Características
- Página de configuración en WP Admin
- Configurable: `client_id`, `client_secret`, `redirect_uri`, etc.
- Shortcode `[boton_reniec]` para generar botón
- Estilos personalizados

## 🚀 Instalación
1. Clonar o descargar este repositorio
2. Instalar dependencias del SDK:
   ```bash
   composer require reniec/idaas
   ```
3. Copiar `reniec_idaas.json` en la raíz del plugin con la siguiente estructura:

```json
{
  "client_id": "demo-client-id",
  "client_secret": "demo-client-secret",
  "redirect_uri": "http://dominio.com/callback",
  "scope": "profile openid",
  "acr": "pki_dnie",
  "auth_uri": "https://api.idperu.pe/oauth2/authorize"
}
```

4. Activar el plugin desde el panel de WordPress

## 🔄 Uso
- Agrega el shortcode `[boton_reniec]` en cualquier página o entrada

## 💡 Estructura del plugin
```
andina-reniec-auth/
├── andina-reniec-auth.php
├── inc/
│   ├── settings-page.php
│   └── auth-reniec.php
├── templates/
│   └── shortcode-view.php
├── assets/
│   └── style.css
├── vendor/ ← generado por composer
├── composer.json
└── reniec_idaas.json
```

---
Desarrollado por ben1998pe
