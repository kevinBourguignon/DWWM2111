USE CDI

--Q1: Donner nom, job, numéro et salaire de tous les employés, puis seulement des employés du département 10

SELECT ENAME, JOB, EMPNO, SAL, DEPTNO FROM EMP
WHERE DEPTNO = 10; 

--Q2: Donner nom, job et salaire des employés de type MANAGER dont le salaire est supérieur à 2800

SELECT ENAME, JOB, SAL FROM EMP
WHERE JOB = 'MANAGER' AND SAL > 2800;

--Q3: Donner la liste des MANAGER n'appartenant pas au département 30

SELECT ENAME, JOB FROM EMP 
WHERE JOB = 'MANAGER' AND DEPTNO <> 30; 

--Q4:Liste des employés de salaire compris entre 1200 et 1400

SELECT ENAME, SAL FROM EMP
WHERE SAL > 1200 AND SAL < 1400;

--Q5:Liste des employés des départements 10 et 30 classés dans l'ordre alphabétique

SELECT ENAME, DEPTNO FROM EMP 
WHERE DEPTNO = 10 OR DEPTNO = 30
ORDER BY ENAME;

--Q6:Liste des employés du département 30 classés dans l'ordre des salaires croissants

SELECT ENAME, SAL, DEPTNO FROM EMP
WHERE DEPTNO = 30
ORDER BY SAL ASC;

--Q7:Liste de tous les employés classés par emploi et salaires décroissants

SELECT ENAME, JOB, SAL FROM EMP
ORDER BY JOB DESC, SAL DESC;

--Q8:Liste des différents emplois

SELECT JOB FROM EMP
GROUP BY JOB;

--Q9:Donner le nom du département où travaille ALLEN
		--version simplifier
SELECT DNAME FROM DEPT
WHERE DEPTNO = (SELECT DEPTNO FROM EMP WHERE ENAME = 'ALLEN');
			--version plus long
SELECT DNAME FROM DEPT
INNER JOIN EMP 
	ON (DEPT.DEPTNO = EMP.DEPTNO)
	WHERE ENAME = 'ALLEN';

--Q10:Liste des employés avec nom du département, nom, job, salaire classés par noms de départements et par salaires décroissants.

SELECT DEPT.DNAME, EMP.ENAME, EMP.JOB, EMP.SAL FROM EMP
INNER JOIN DEPT ON DEPT.DEPTNO = EMP.DEPTNO
ORDER BY DNAME DESC, SAL DESC;


--Q11:Liste des employés vendeurs (SALESMAN) avec affichage de nom, salaire, commissions, salaire + commissions

SELECT  JOB, ENAME, SAL, COMM, (SAL + COMM)  FROM EMP
WHERE JOB = 'SALESMAN'; 

--Q12:Liste des employés du département 20: nom, job, date d'embauche sous forme VEN 28 FEV 1997'

SELECT ENAME, JOB, FORMAT(HIREDATE, 'ddd dd MMMM yyyy') FROM EMP
WHERE DEPTNO = 20  

--Q13: Donner le salaire le plus élevé par département

SELECT DNAME, MAX(EMP.SAL) AS SAL FROM DEPT
INNER JOIN EMP ON EMP.DEPTNO = DEPT.DEPTNO
GROUP BY DNAME;

--Q14:Donner département par département masse salariale, nombre d'employés, salaire moyen par type d'emploi.

Select DNAME, SUM(EMP.SAL) AS SAL, COUNT(EMP.EMPNO) AS EMPNO, AVG(EMP.SAL) AS SAL FROM DEPT
FULL JOIN EMP ON EMP.DEPTNO = DEPT.DEPTNO
GROUP BY DNAME;

--Q15:Même question mais on se limite aux sous-ensembles d'au moins 2 employés

Select DNAME, SUM(EMP.SAL) AS SAL, COUNT(*) AS EMPNO, AVG(EMP.SAL) AS SALMOYENNE FROM DEPT
INNER JOIN EMP ON EMP.DEPTNO = DEPT.DEPTNO
GROUP BY DNAME, JOB HAVING COUNT(*) > 1;


--Q16:Liste des employés (Nom, département, salaire) de même emploi que JONES

Select ENAME, DEPTNO, SAL FROM EMP
WHERE JOB = (select JOB from EMP WHERE ENAME = 'JONES');

--Q17:Liste des employés (nom, salaire) dont le salaire est supérieur à la moyenne globale des salaires

Select ENAME, SAL FROM EMP
WHERE SAL > (select AVG(SAL) from EMP);

--Q18:Création d'une table PROJET avec comme colonnes numéro de projet (3 chiffres), nom de projet(5 caractères), budget. Entrez les valeurs suivantes:
--101, ALPHA, 96000
--102, BETA, 82000
--103, GAMMA, 15000


--Q19:Ajouter l'attribut numéro de projet à la table EMP et affecter tous les vendeurs du département 30 au projet 101, et les autres au projet 102

Alter Table EMP
ADD  numprojet INT
ALTER TABLE EMP
ADD Constraint FK_EMP_numprojet FOREIGN KEY (numprojet) REFERENCES PROJET (numprojet);

UPDATE EMP
SET numprojet = 101
WHERE JOB = 'SALESMAN'
UPDATE EMP
SET numprojet = 102
WHERE JOB <> 'SALESMAN'  



--Q20:Créer une vue comportant tous les employés avec nom, job, nom de département et nom de projet

CREATE VIEW 
Select ENAME, JOB, DEPT.DNAME, PROJET.nom_de_projet From EMP 
INNER JOIN DEPT ON DEPT.DEPTNO = EMP.DEPTNO
INNER JOIN PROJET ON PROJET.numprojet = EMP.numprojet



