create database QuanLySinhVien;
use QuanLySinhVien;

create table Lop(
	id int unsigned auto_increment primary key not null,
	tenLop  varchar(255) not null
);

create table SinhVien(
	id int unsigned auto_increment primary key not null,
    tenSinhVien varchar(255) not null,
    email varchar(255) not null,
    ngaySinh date,
	idLop int unsigned not null,
    FOREIGN KEY (idLop) REFERENCES Lop(id)
);

insert into Lop (id, tenLop) values (1, 'Twin Pines');
insert into Lop (id, tenLop) values (2, 'Graedel');
insert into Lop (id, tenLop) values (3, 'Ryan');
insert into Lop (id, tenLop) values (4, 'Dottie');
insert into Lop (id, tenLop) values (5, 'Alpine');
insert into Lop (id, tenLop) values (6, 'Hauk');
insert into Lop (id, tenLop) values (7, 'Myrtle');
insert into Lop (id, tenLop) values (8, 'Donald');
insert into Lop (id, tenLop) values (9, 'Westerfield');
insert into Lop (id, tenLop) values (10, 'Schiller');

insert into SinhVien (id, tenSinhVien, email, ngaySinh, idLop) values (1, 'Philly', 'pmunning0@statcounter.com', '2023-01-14', 1);
insert into SinhVien (id, tenSinhVien, email, ngaySinh, idLop) values (2, 'Jakie', 'jwands1@dedecms.com', '2022-11-02', 2);
insert into SinhVien (id, tenSinhVien, email, ngaySinh, idLop) values (3, 'Leonelle', 'lpretswell2@friendfeed.com', '2023-07-27', 3);
insert into SinhVien (id, tenSinhVien, email, ngaySinh, idLop) values (4, 'Alfie', 'asaxby3@nba.com', '2023-05-25', 4);
insert into SinhVien (id, tenSinhVien, email, ngaySinh, idLop) values (5, 'Ikey', 'ihovel4@bbc.co.uk', '2023-02-14', 5);
insert into SinhVien (id, tenSinhVien, email, ngaySinh, idLop) values (6, 'Karole', 'kstammers5@washingtonpost.com', '2022-11-18', 6);
insert into SinhVien (id, tenSinhVien, email, ngaySinh, idLop) values (7, 'Lynelle', 'lrobinson6@github.com', '2023-06-16', 7);
insert into SinhVien (id, tenSinhVien, email, ngaySinh, idLop) values (8, 'Heidie', 'hhavers7@loc.gov', '2023-04-30', 8);
insert into SinhVien (id, tenSinhVien, email, ngaySinh, idLop) values (9, 'Erv', 'eunworth8@icio.us', '2022-12-19', 9);
insert into SinhVien (id, tenSinhVien, email, ngaySinh, idLop) values (10, 'Quillan', 'qcranch9@harvard.edu', '2022-12-19', 10);



