CREATE USER 'usuario'@'localhost' IDENTIFIED BY '1234';
GRANT INSERT, UPDATE, SELECT ON db_sistema.*  TO 'usuario'@'localhost';