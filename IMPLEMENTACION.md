# IMPLEMENTACION.md

## ✨ Detalles de implementación del plugin Andina RENIEC Auth

Este documento explica la integración técnica del SDK de IDAAS Perú (RENIEC) y las decisiones tomadas en el desarrollo.

## 🔧 Tecnologías utilizadas
- WordPress (PHP 7+)
- SDK RENIEC: [reniec/idaas](https://github.com/pkiep-reniec/idaas_sdk_php)
- Composer para gestionar dependencias

## ✏️ Estructura modular
El plugin se organiza de forma modular en carpetas `inc/`, `templates/`, `assets/` para mantener separación de responsabilidades.

## 🔐 Configuración en el administrador
El archivo `inc/settings-page.php` crea una página en "Ajustes > RENIEC Auth" donde se definen los parámetros:
- client_id
- client_secret
- redirect_uri

## ⚖️ Firma y URL de autenticación
La clase `ReniecIdaasClient` (SDK oficial) espera como parámetro la ruta a un archivo JSON con los datos de configuración.

El plugin:
1. Usa `require_once` al SDK
2. Pasa la ruta `reniec_idaas.json`
3. Genera la URL con `$client->getLoginUrl()`

## 🔹 Shortcode
El shortcode `[boton_reniec]` renderiza el botón. La vista se encuentra en `templates/shortcode-view.php`.

## 🔴 Consideraciones
- No se valida la respuesta de RENIEC (por requerimiento)
- Se maneja la URL de forma estática usando el archivo `reniec_idaas.json` por requerimiento del SDK

## 🌟 Resultado
Plugin funcional, empaquetado y listo para uso. Requiere credenciales oficiales de IDAAS Perú para funcionar en producción.
