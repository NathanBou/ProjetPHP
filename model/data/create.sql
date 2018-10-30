CREATE TABLE article (
	libelle TEXT,
	infoscompl TEXT,
	prix REAL,
	ref INTEGER PRIMARY KEY,
	categorie INTEGER,
	image TEXT,
	FOREIGN KEY(categorie) REFERENCES categorie(id)
);

CREATE TABLE categorie (
	id INTEGER PRIMARY KEY,
	nom TEXT,
	pere INTEGER,
	FOREIGN KEY(pere) REFERENCES categorie(id)
);

CREATE TABLE utilisateur (
	username TEXT UNIQUE PRIMARY KEY,
	password TEXT,
	type INTEGER
);
