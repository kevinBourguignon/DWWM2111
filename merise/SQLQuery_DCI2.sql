USE CDI

--Q1: Donner nom, job, num�ro et salaire de tous les employ�s, puis seulement des employ�s du d�partement 10

SELECT ENAME, JOB, EMPNO, SAL, DEPTNO FROM EMP
WHERE DEPTNO = 10; 

--Q2: Donner nom, job et salaire des employ�s de type MANAGER dont le salaire est sup�rieur � 2800

SELECT ENAME, JOB, SAL FROM EMP
WHERE JOB = 'MANAGER' AND SAL > 2800;

--Q3: Donner la liste des MANAGER n'appartenant pas au d�partement 30

SELECT ENAME, JOB FROM EMP 
WHERE JOB = 'MANAGER' AND DEPTNO <> 30; 

--Q4:Liste des employ�s de salaire compris entre 1200 et 1400

SELECT ENAME, SAL FROM EMP
WHERE SAL > 1200 AND SAL < 1400;

--Q5:Liste des employ�s des d�partements 10 et 30 class�s dans l'ordre alphab�tique

SELECT ENAME, DEPTNO FROM EMP 
WHERE DEPTNO = 10 OR DEPTNO = 30
ORDER BY ENAME;

--Q6:Liste des employ�s du d�partement 30 class�s dans l'ordre des salaires croissants

SELECT ENAME, SAL, DEPTNO FROM EMP
WHERE DEPTNO = 30
ORDER BY SAL ASC;

--Q7:Liste de tous les employ�s class�s par emploi et salaires d�croissants

SELECT ENAME, JOB, SAL FROM EMP
ORDER BY JOB DESC, SAL DESC;

--Q8:Liste des diff�rents emplois

SELECT JOB FROM EMP
GROUP BY JOB;

--Q9:Donner le nom du d�partement o� travaille ALLEN
		--version simplifier
SELECT DNAME FROM DEPT
WHERE DEPTNO = (SELECT DEPTNO FROM EMP WHERE ENAME = 'ALLEN');
			--version plus long
SELECT DNAME FROM DEPT
INNER JOIN EMP 
	ON (DEPT.DEPTNO = EMP.DEPTNO)
	WHERE ENAME = 'ALLEN';

--Q10:Liste des employ�s avec nom du d�partement, nom, job, salaire class�s par noms de d�partements et par salaires d�croissants.

SELECT DEPT.DNAME, EMP.ENAME, EMP.JOB, EMP.SAL FROM EMP
INNER JOIN DEPT ON DEPT.DEPTNO = EMP.DEPTNO
ORDER BY DNAME DESC, SAL DESC;


--Q11:Liste des employ�s vendeurs (SALESMAN) avec affichage de nom, salaire, commissions, salaire + commissions

SELECT  JOB, ENAME, SAL, COMM, (SAL + COMM)  FROM EMP
WHERE JOB = 'SALESMAN'; 

--Q12:Liste des employ�s du d�partement 20: nom, job, date d'embauche sous forme VEN 28 FEV 1997'

SELECT ENAME, JOB, FORMAT(HIREDATE, 'ddd dd MMMM yyyy') FROM EMP
WHERE DEPTNO = 20  

--Q13: Donner le salaire le plus �lev� par d�partement

SELECT DNAME, MAX(EMP.SAL) AS SAL FROM DEPT
INNER JOIN EMP ON EMP.DEPTNO = DEPT.DEPTNO
GROUP BY DNAME;

--Q14:Donner d�partement par d�partement masse salariale, nombre d'employ�s, salaire moyen par type d'emploi.

Select DNAME, SUM(EMP.SAL) AS SAL, COUNT(EMP.EMPNO) AS EMPNO, AVG(EMP.SAL) AS SAL FROM DEPT
FULL JOIN EMP ON EMP.DEPTNO = DEPT.DEPTNO
GROUP BY DNAME;

--Q15:M�me question mais on se limite aux sous-ensembles d'au moins 2 employ�s

Select DNAME, SUM(EMP.SAL) AS SAL, COUNT(*) AS EMPNO, AVG(EMP.SAL) AS SALMOYENNE FROM DEPT
INNER JOIN EMP ON EMP.DEPTNO = DEPT.DEPTNO
GROUP BY DNAME, JOB HAVING COUNT(*) > 1;


--Q16:Liste des employ�s (Nom, d�partement, salaire) de m�me emploi que JONES

Select ENAME, DEPTNO, SAL FROM EMP
WHERE JOB = (select JOB from EMP WHERE ENAME = 'JONES');

--Q17:Liste des employ�s (nom, salaire) dont le salaire est sup�rieur � la moyenne globale des salaires

Select ENAME, SAL FROM EMP
WHERE SAL > (select AVG(SAL) from EMP);

--Q18:Cr�ation d'une table PROJET avec comme colonnes num�ro de projet (3 chiffres), nom de projet(5 caract�res), budget. Entrez les valeurs suivantes:
--101, ALPHA, 96000
--102, BETA, 82000
--103, GAMMA, 15000


--Q19:Ajouter l'attribut num�ro de projet � la table EMP et affecter tous les vendeurs du d�partement 30 au projet 101, et les autres au projet 102

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



--Q20:Cr�er une vue comportant tous les employ�s avec nom, job, nom de d�partement et nom de projet

CREATE VIEW 
Select ENAME, JOB, DEPT.DNAME, PROJET.nom_de_projet From EMP 
INNER JOIN DEPT ON DEPT.DEPTNO = EMP.DEPTNO
INNER JOIN PROJET ON PROJET.numprojet = EMP.numprojet



