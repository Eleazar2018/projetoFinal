/* Modelo-Logico-Condominio3: */

CREATE TABLE Condomino (
    ID INTEGER PRIMARY KEY,
    nome VARCHAR (50),
    email VARCHAR (50),
    endereco VARCHAR (50)
);

CREATE TABLE Portaria (
    id INTEGER PRIMARY KEY,
    nome VARCHAR (50),
    turno VARCHAR (50),
    telefone VARCHAR (50),
    endereco VARCHAR (50)
);

CREATE TABLE Lazerfestas (
    id INTEGER PRIMARY KEY,
    data DATE,
    condomino VARCHAR (50),
    portaria VARCHAR (50)
);

CREATE TABLE Financeiro (
    id INTEGER PRIMARY KEY,
    Condomino VARCHAR (50),
    Agente VARCHAR (50),
    Status BOOLEAN
);

CREATE TABLE Encomendas (
    id INTEGER PRIMARY KEY,
    condomino VARCHAR (50),
    dataRecebimento DATE,
    portaria VARCHAR (50)
);

CREATE TABLE Achadosperdidos (
    data DATE PRIMARY KEY,
    portaria VARCHAR (50),
    condomino VARCHAR (50)
);

CREATE TABLE Manutencao (
    id INTEGER PRIMARY KEY,
    data DATE,
    assunto VARCHAR(50),
    nome VARCHAR(50)
);

CREATE TABLE Ocorrencias (
    id INTEGER PRIMARY KEY,
    assunto VARCHAR(50),
    data DATE PRIMARY KEY,
    descricao VARCHAR(50),
    portaria VARCHAR(50),
    condomino VARCHAR(50)
);

CREATE TABLE Reservas (
    ID INTEGER PRIMARY KEY,
    data DATE,
    condomino VARCHAR(50),
    portaria VARCHAR(50)
);

CREATE TABLE Sindico (
    id INTEGER PRIMARY KEY,
    nome VARCHAR(50)
);

CREATE TABLE Pagamento (
    codigo INTEGER PRIMARY KEY,
    Valor FLOAT(3,2),
    Vencimento DATE,
    condomino VARCHAR(50)
); 

ALTER TABLE Portaria ADD CONSTRAINT FK_Portaria_2
    FOREIGN KEY (nome)
    REFERENCES Manutencao (nome);
 
ALTER TABLE Achados-perdidos ADD CONSTRAINT FK_Achados-perdidos_2
    FOREIGN KEY (portaria)
    REFERENCES Portaria (nome);
 
ALTER TABLE Manutencao ADD CONSTRAINT FK_Manutencao_2
    FOREIGN KEY (nome)
    REFERENCES Portaria (nome);
 
ALTER TABLE Reservas ADD CONSTRAINT FK_Reservas_2
    FOREIGN KEY (condomino)
    REFERENCES Condomino (nome);
 
ALTER TABLE Pagamento ADD CONSTRAINT FK_Pagamento_1
    FOREIGN KEY (codigo)
    REFERENCES Condômino (ID);

INSERT INTO Condomino VALUES ();
INSERT INTO Portaria VALUES ();
INSERT INTO Lazer-festas VALUES ();
INSERT INTO Financeiro VALUES ();
INSERT INTO Encomendas VALUES ();
INSERT INTO Achados-perdidos VALUES ();
INSERT INTO Manutencao VALUES ();
INSERT INTO Ocorrencias VALUES ();
INSERT INTO Reservas VALUES ();
INSERT INTO Sindico VALUES ();
INSERT INTO Pagamento VALUES ();


    select * FROM Condomino;
    select * FROM Portaria
    select * FROM Lazer-festas
    select * FROM Financeiro
    select * FROM Encomendas
    select * FROM Achados-perdidos
    select * FROM Manutencao
    select * FROM Ocorrencias
    select * FROM Reservas
    select * FROM Sindico
    select * FROM Pagamento

 
