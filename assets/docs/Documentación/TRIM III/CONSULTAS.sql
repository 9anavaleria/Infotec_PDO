
-- Consultas de inserción

ALTER TABLE FACTURA ADD total_servicio DECIMAL(10,2);

ALTER TABLE FACTURA ADD total_pedido DECIMAL(10,2);

-- Actualización

ALTER TABLE PERSONAS CHANGE telefono_persona email_persona VARCHAR(100);
ALTER TABLE PERSONAS CHANGE correo_persona telefono_persona VARCHAR(15);


-- SELECCIÓN GENERAL

SELECT * FROM PERSONAS;

-- SELECCIÓN ESPECIFICA

SELECT id_personas, email_persona, apellidos_persona FROM PERSONAS;  

-- SELECCIÓN CON CRITERIO

SELECT id_personas, email_persona, apellidos_persona FROM PERSONAS WHERE id_personas = 'Cliente-6';

-- CON OPERADORES LOGICOS
-- OR

SELECT id_personas, email_persona, apellidos_persona FROM PERSONAS WHERE id_personas = 'Cliente-6' OR id_personas = 'cliente-4';

-- AND 

SELECT id_producto, nombre_producto FROM PRODUCTOS WHERE precio_producto = 9000 AND id_categoria = 9;

-- NOT

SELECT nombres_persona, telefono_persona FROM PERSONAS WHERE id_personas NOT IN ('Admin-1');

--CON OPERADORES DE COMPARACIÓN

--DIFERENTE 

SELECT * FROM PRODUCTOS WHERE precio_producto <> 41000;

--MENOR QUE

SELECT * FROM PRODUCTOS WHERE precio_producto < 20000;

--MAYOR QUE

SELECT * FROM PRODUCTOS WHERE precio_producto > 20000;

--Menor o igual que

SELECT * FROM PRODUCTOS WHERE precio_producto <= 20000;

