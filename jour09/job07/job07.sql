SELECT * FROM `etudiants` WHERE naissance<DATE_SUB(CURRENT_DATE(),INTERVAL 18 YEAR);