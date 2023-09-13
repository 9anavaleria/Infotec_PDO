

INSERT INTO CATEGORIA VALUES
(null,'Lubricantes'),
(null,'Repuestos'),
(null,'Filtros'),
(null,'Llantas'),
(null,'Lujos'),
(null,'Hidraulicos'),
(null,'Grasas'),
(null,'Productos Limpieza'),
(null,'Aditivos'),
(null,'Refrigerantes');

INSERT INTO CLIENTES VALUES
('Cliente-1',2),
('Cliente-2',2),
('Cliente-3',2),
('Cliente-4',2),
('Cliente-5',2),
('Cliente-6',2),
('Cliente-7',2),
('Cliente-8',2);

INSERT INTO PROVEEDORES VALUES
(null,'Distribuidora LUBOG'),
(null,'Mundial de Repuestos'),
(null,'Filtros Colombia'),
(null,'Lubricantes BEG'),
(null,'Michellin Colombia'),
(null,'Partes plasticas & Cia'),
(null,'Asbestos de Colombia'),
(null,'Servi Lujos'),
(null,'Simoniz S.A.'),
(null,'Castrol-Corbeta');



INSERT INTO SERVICIOS VALUES
('Serv_1','Cambio de aceite',15000),
('Serv_2','Cambio Pastillas',10000),
('Serv_3','Reparacion motor',450000),
('Serv_4','Calibrada Valvulas',60000),
('Serv_5','Cambio Llantas',12000),
('Serv_6','Cambio luces',18000),
('Serv_7','Cambio guaya freno',25000),
('Serv_8','Cambio Clutch',38000),
('Serv_9','Cambio filtro',8000),
('Serv_10','Instalación Lujos',5000);

INSERT INTO PRODUCTOS VALUES
(1,'prod_1','Moto Bien 220ml',24900,12),
(1,'prod_2','Motul C2 400ml',84900,8),
(2,'prod_3','Kit De Arrastre Casarella',104500,2),
(2,'prod_4','Pastillas Frenos Cross Trasera',23000,4),
(3,'prod_5','Filtro De Aire Universal',41000,10),
(3,'prod_6','Filtro De Aire Pulsar Ns200',45000,6),
(4,'prod_7','Llanta Trasera Michelin 130/70-13',237000,4),
(4,'prod_8','Llanta Delantera Pirelli 110/70 R7',351000,4),
(5,'prod_9','Espejos Rizoma De Lujo',70000,6),
(5,'prod_10','Protector Radiador',65000,6),
(6,'prod_11','Aceite Hidraulico 20 Delta Oil',22000,6),
(6,'prod_12','Aceite Hidráulico Premium 750cc',12000,6),
(7,'prod_13','Grasa Lubricante Truper Multiusos Carro Moto 450g 750cc',15000,4),
(7,'prod_14','Cojin Grasa De Litio Para Mantenimientos Universal',4000,12),
(8,'prod_15','Renovador De Farolas Lubristone',17000,4),
(8,'prod_16','Super Kit De Limpieza/lavado Universal Para Moto',34000,2),
(9,'prod_17','Aditivo Moto Bien Octanaje Simoniz Aumenta Potencia',9000,6),
(9,'prod_18','Aditivo Antifriccion Motos Scooter Liqui Moly',19000,6),
(10,'prod_19','Liquido Refrigerante Moto Ipone Radiador Liquid 1l Frances',19000,6),
(10,'prod_20','Aditivo Antifriccion Motos Scooter Liqui Moly',19000,6);


INSERT INTO VEHICULOS VALUES
('ABC123','Cliente-1'),
('DFG456','Cliente-2'),
('XYZ789','Cliente-3'),
('CAF33F','Cliente-1'),
('SUF45M','Cliente-4'),
('GMF235','Cliente-5'),
('DSB262','Cliente-6'),
('KDB68R','Cliente-7'),
('URD25G','Cliente-8');

INSERT INTO COMPRAS VALUES
('COM-1','2022-09-01',734800,4), 
('COM-2','2022-09-02',224000,2), 
('COM-3','2022-09-03',558000,3), 
('COM-4','2022-09-04',1948000,5), 
('COM-5','2022-09-05',642000,8), 
('COM-6','2022-09-06',144000,1), 
('COM-7','2022-09-07',74000,10),
('COM-8','2022-09-08',104000,6), 
('COM-9','2022-09-09',306000,9),
('COM-10','2022-09-10',156000,7); 

INSERT INTO LISTA_PRODUCTOS_C VALUES
('COM-1','prod_1',19900,12),
('COM-1','prod_2',62000,8),
('COM-2','prod_3',80000,2),
('COM-2','prod_4',16000,4),
('COM-3','prod_5',33000,10),
('COM-3','prod_6',38000,6),
('COM-4','prod_7',187000,4),
('COM-4','prod_8',300000,4),
('COM-5','prod_9',55000,6),
('COM-5','prod_10',52000,6),
('COM-6','prod_11',16000,6),
('COM-6','prod_12',8000,6),
('COM-7','prod_13',11000,4),
('COM-7','prod_14',2500,12),
('COM-8','prod_15',13000,4),
('COM-8','prod_16',26000,2),
('COM-9','prod_17',38000,6),
('COM-9','prod_18',13000,6),
('COM-10','prod_19',12500,6),
('COM-10','prod_20',13500,6);

INSERT INTO FACTURA VALUES
(null,'Cliente-1','2022-09-26','ABC123',43000,8170,20000,71179);

INSERT INTO LISTA_PRODUCTOS_F VALUES
(1,'prod_15',1),
(1,'prod_11',1),
(1,'prod_14',1);

INSERT INTO LISTA_SERVICIOS_F VALUES
('Serv_1',1),
('Serv_10',1);




