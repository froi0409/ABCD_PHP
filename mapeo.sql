CREATE TABLE trabajadores(
    Id VARCHAR(20), 
    Nombre VARCHAR(100),
    Apellido VARCHAR(100),
    Direccion VARCHAR(100),
    Genero VARCHAR(50),
    Salario DECIMAL(11,2),
    CONSTRAINT PK_ID PRIMARY KEY(Id)
);

INSERT INTO trabajadores VALUES('20210001','Carlos Alfredo','Torres Santizo', 'Quetzaltenango', 'Masculino', '5000.00');