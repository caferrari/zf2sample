CREATE TABLE especie
(
  id serial NOT NULL,
  nome character varying(50) NOT NULL,
  CONSTRAINT pk_especie PRIMARY KEY (id ),
  CONSTRAINT un_especie_nome UNIQUE (nome )
)
WITH (
  OIDS=FALSE
);

CREATE TABLE raca
(
  id serial NOT NULL,
  especie_id integer NOT NULL,
  nome character varying(50) NOT NULL,
  CONSTRAINT pk_raca PRIMARY KEY (id ),
  CONSTRAINT fk_raca_especie FOREIGN KEY (especie_id)
      REFERENCES especie (id) MATCH SIMPLE
      ON UPDATE NO ACTION ON DELETE NO ACTION,
  CONSTRAINT un_raca UNIQUE (especie_id , nome )
)
WITH (
  OIDS=FALSE
);

