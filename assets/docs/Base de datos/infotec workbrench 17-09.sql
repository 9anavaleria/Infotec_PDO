-- -----------------------------------------------------
-- Table ROLES
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS ROLES (
  id_rol INT NOT NULL AUTO_INCREMENT,
  nombre_rol VARCHAR(50) NULL,
  PRIMARY KEY (id_rol))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table USUARIOS
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS USUARIOS (
  id_rol INT NOT NULL,
  id_usuario VARCHAR(10) NOT NULL,
  nombres_usuario VARCHAR(50) NOT NULL,
  apellidos_usuario VARCHAR(50) NOT NULL,
  correo_usuario VARCHAR(100) NOT NULL,
  telefono_usuario VARCHAR(15) NOT NULL,
  pass_usuario VARCHAR(150) NOT NULL,
  PRIMARY KEY (id_usuario),
  INDEX ind_personas_rol (id_rol ASC) ,
  UNIQUE INDEX correo_persona_UNIQUE (correo_usuario ASC) ,
  CONSTRAINT fk_personas_rol
    FOREIGN KEY (id_rol)
    REFERENCES ROLES (id_rol)
    ON DELETE CASCADE
    ON UPDATE CASCADE)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table CLIENTES
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS CLIENTES (
  id_cliente INT NOT NULL AUTO_INCREMENT,
  identificacion_cliente VARCHAR(10) NOT NULL,
  nombre_cliente VARCHAR(45) NULL,
  apellido_cliente VARCHAR(45) NULL,
  telefono_cliente VARCHAR(45) NULL,
  correo_cliente VARCHAR(45) NULL,
  PRIMARY KEY (id_cliente, identificacion_cliente),
  INDEX ind_cliente_personas (identificacion_cliente ASC) ,
  UNIQUE INDEX identificacion_cliente_UNIQUE (identificacion_cliente ASC) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table SERVICIOS
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS SERVICIOS (
  id_servicios INT NOT NULL AUTO_INCREMENT,
  nombre_servicio VARCHAR(50) NOT NULL,
  precio_servicio DECIMAL(10,2) NOT NULL,
  PRIMARY KEY (id_servicios))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table VEHICULOS
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS VEHICULOS (
  id_vehiculo INT NOT NULL AUTO_INCREMENT,
  id_cliente VARCHAR(10) NOT NULL,
  placa_vehiculo VARCHAR(6) NOT NULL,
  PRIMARY KEY (id_vehiculo),
  UNIQUE INDEX id_vehiculo_UNIQUE (id_vehiculo ASC) ,
  INDEX ind_vehiculos_clientes (id_cliente ASC) ,
  UNIQUE INDEX placa_vehiculo_UNIQUE (placa_vehiculo ASC) ,
  CONSTRAINT fk_vehiculo_cliente
    FOREIGN KEY (id_cliente)
    REFERENCES CLIENTES (id_cliente)
    ON DELETE CASCADE
    ON UPDATE CASCADE)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table CATEGORIA
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS CATEGORIA (
  id_categoria INT NOT NULL AUTO_INCREMENT,
  nombre_categoria VARCHAR(50) NOT NULL,
  PRIMARY KEY (id_categoria))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table PRODUCTOS
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS PRODUCTOS (
  id_categoria INT NOT NULL,
  id_producto INT NOT NULL AUTO_INCREMENT,
  nombre_producto VARCHAR(50) NOT NULL,
  precio_producto DECIMAL(10,2) NOT NULL,
  exist_producto INT NOT NULL,
  INDEX ind_producto_categoria (id_categoria ASC) ,
  PRIMARY KEY (id_producto),
  CONSTRAINT fk_producto_categoria
    FOREIGN KEY (id_categoria)
    REFERENCES CATEGORIA (id_categoria)
    ON DELETE CASCADE
    ON UPDATE CASCADE)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table FACTURA
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS FACTURA (
  id_factura INT NOT NULL AUTO_INCREMENT,
  id_usuarios VARCHAR(10) NOT NULL,
  identificacion_cliente VARCHAR(10) NOT NULL,
  placa_vehiculo INT NOT NULL,
  fecha_factura DATE NOT NULL,
  total_antesiva_prod DECIMAL(10,2) NOT NULL,
  iva_pedido DECIMAL(10,2) NOT NULL,
  total_pedido DECIMAL(10,2) NOT NULL,
  PRIMARY KEY (id_factura),
  INDEX ind_factura_usurario (id_usuarios ASC) ,
  INDEX ind_factura_vehiculo (placa_vehiculo ASC) ,
  INDEX fk_factura_cliente_idx (identificacion_cliente ASC) ,
  CONSTRAINT fk_factura_usuario
    FOREIGN KEY (id_usuarios)
    REFERENCES USUARIOS (id_usuario)
    ON DELETE CASCADE
    ON UPDATE CASCADE,
  CONSTRAINT fk_factura_vehiculo
    FOREIGN KEY (placa_vehiculo)
    REFERENCES VEHICULOS (id_vehiculo)
    ON DELETE CASCADE
    ON UPDATE CASCADE,
  CONSTRAINT fk_factura_cliente
    FOREIGN KEY (identificacion_cliente)
    REFERENCES CLIENTES (identificacion_cliente)
    ON DELETE CASCADE
    ON UPDATE CASCADE)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table LISTA_PRODUCTOS_F
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS LISTA_PRODUCTOS_F (
  id_listP INT NOT NULL AUTO_INCREMENT,
  id_factura INT NOT NULL,
  id_producto INT NOT NULL,
  cantidad_productos INT NOT NULL,
  valor_venta DECIMAL(10,0) NOT NULL,
  INDEX ind_lista_productos_f_productos (id_producto ASC) ,
  INDEX ind_lista_productos_f_factura (id_factura ASC) ,
  PRIMARY KEY (id_listP),
  CONSTRAINT fk_lista_productos_f
    FOREIGN KEY (id_producto)
    REFERENCES PRODUCTOS (id_producto)
    ON DELETE CASCADE
    ON UPDATE CASCADE,
  CONSTRAINT fk_lista_productos_f_factura
    FOREIGN KEY (id_factura)
    REFERENCES FACTURA (id_factura)
    ON DELETE CASCADE
    ON UPDATE CASCADE)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table LISTA_SERVICIOS_F
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS LISTA_SERVICIOS_F (
  id_listS INT NOT NULL AUTO_INCREMENT,
  id_factura INT NOT NULL,
  id_servicios INT NOT NULL,
  cantidad_servicio INT NOT NULL,
  valor_venta DECIMAL(10,0) NULL,
  INDEX ind_lista_servicio_f_servicio (id_servicios ASC) ,
  INDEX ind_lista_servicio_f_factura (id_factura ASC) ,
  PRIMARY KEY (id_listS),
  CONSTRAINT fk_lista_servicio_f_servicio
    FOREIGN KEY (id_servicios)
    REFERENCES SERVICIOS (id_servicios)
    ON DELETE CASCADE
    ON UPDATE CASCADE,
  CONSTRAINT fk_lista_servicio_f_factura
    FOREIGN KEY (id_factura)
    REFERENCES FACTURA (id_factura)
    ON DELETE CASCADE
    ON UPDATE CASCADE)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
