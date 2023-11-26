create table stud(roll int primary key,name varchar(20),class varchar(20));

create table comp(cid int primary key ,c_name varchar(20),type varchar(20));

create table studcomp(roll int references stud(roll) on delete cascade, cid int 
 references comp(cid) on delete cascade,rank int ,primary key(roll,cid));

insert into stud values(101,'abc','tybcs');
insert into stud values(102,'xyz','sybcs');
insert into stud values(103,'mnop','fybcs');


insert into comp values(1,'Cricket','outdoor');
insert into comp values(2,'Chess','indoor');
insert into comp values(3,'Hockey','outdoor');


insert into studcomp values(101,1,1);
insert into studcomp values(102,2,2);
insert into studcomp values(101,1,1);
insert into studcomp values(101,2,1);




