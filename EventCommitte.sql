
create table event(eno int primary key,title varchar(20),date Date );

create table committe(cno int primary key,c_name varchar(20),head varchar(10),from_time Time,to_time Time,status varchar(20));

create table EventCommitee(eno int references event(eno) on delete cascade ,cno int references committe(cno) on delete cascade,primary key(eno,cno));


$result=pg_query("update committe set status='working' where cno in(select cno from EventCommitee where eno=101)");

insert into event values(101,'abc','2023-11-12');
insert into event values(102,'pqr','2023-12-06');