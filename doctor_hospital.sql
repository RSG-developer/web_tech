
 create table hospital(hosp_no int primary key,hname varchar(20),city varchar(10));


 create table doctor(doc_no int primary key,dname varchar(20),address varchar(20),city varchar(20),area varchar(20),hosp_no int references hospital(hosp_no));


WITH HospitalInfo AS (SELECT hosp_no FROM hospital WHERE hname = '$hname') SELECT d.doc_no, d.dname, d.address, d.city, d.area FROM Doctor d
JOIN HospitalInfo h ON d.hosp_no = h.hosp_no;