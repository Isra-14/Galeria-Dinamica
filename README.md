
# Galer&iacute;a Din&aacute;mica
## Script de DB en MySQL

```MySQL
CREATE DATABASE galeria_practica;

CREATE TABLE fotos (
    id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    titulo VARCHAR(200) NOT NULL,
    imagen VARCHAR(200) NOT NULL,
    texto VARCHAR(200) NOT NULL
);
```
## Consideraciones
El c&oacute;digo de la galer&iacute;a esta ideado para imagenes de un mismo tama&ntilde;o para una mejor visualizaci&oacute;n.
