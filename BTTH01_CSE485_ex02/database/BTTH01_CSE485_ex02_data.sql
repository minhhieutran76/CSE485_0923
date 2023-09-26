create database BTTH01_CSE485;
use BTTH01_CSE485;

create table tacgia(
	ma_tgia INT UNSIGNED NOT NULL auto_increment PRIMARY KEY,
    ten_tgia VARCHAR(100) NOT NULL,
    hinh_tgia VARCHAR(100)
);

create table theloai(
	ma_tloai INT UNSIGNED NOT NULL auto_increment PRIMARY KEY,
    ten_tloai VARCHAR(50) NOT NULL
);

create table users(
	id int unsigned not null auto_increment primary key,
	usersname varchar(30) NOT NULL,
    pass varchar(20) NOT NULL
);

INSERT INTO users (usersname, pass) VALUES
('admin', '000'),
('hieu', 'hieu0706');

create table baiviet(
	ma_bviet INT UNSIGNED NOT NULL auto_increment PRIMARY KEY,
    tieude VARCHAR(200) NOT NULL,
    ten_bhat VARCHAR(100) NOT NULL,
    ma_tloai INT UNSIGNED NOT NULL,
    tomtat TEXT NOT NULL,
    noidung TEXT,
    ma_tgia INT UNSIGNED NOT NULL,
    ngayviet DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
    hinhanh VARCHAR(200) NULL,
    FOREIGN KEY (ma_tgia) REFERENCES tacgia(ma_tgia),
    FOREIGN KEY (ma_tloai) REFERENCES theloai(ma_tloai)
);

drop table tacgia;
drop table theloai;
drop table baiviet;
drop table users;

INSERT INTO tacgia (ten_tgia, hinh_tgia) VALUES
('Nhacvietplus', 'hinh_tgia_1.jpg'),
('Nhaccuatui', 'hinh_tgia_2.jpg'),
('Zingmp', 'hinh_tgia_3.jpg'),
('Yahoo', 'hinh_tgia_4.jpg'),
('Youtube', 'hinh_tgia_5.jpg');


INSERT INTO theloai (ten_tloai) VALUES
('Nhạc trữ tình'),
('Nhạc sến'),
('Nhạc remix');


INSERT INTO baiviet (tieude, ten_bhat, ma_tloai, tomtat, noidung, ma_tgia, hinhanh) VALUES
('Nhạc về tình yêu', 'Cây, lá và gió', 1, 'Anh và em', 'Hay', 1, 'hinh_baiviet_1.jpg'),
('Nhạc về cuộc sống', 'Cuộc sống mến thương', 1, 'Tôi và bạn', 'Tuyệt vời', 2, 'hinh_baiviet_2.jpg'),
('Nhạc về mẹ', 'Lòng mẹ', 2, 'Lòng mẹ', 'Xúc động', 3, 'hinh_baiviet_3.jpg'),
('Nhạc về cuộc đời', 'Phôi pha', 3, 'Em và tôi', 'Cảm xúc', 4, 'hinh_baiviet_4.jpg'),
('Nhạc về tình yêu tuổi trẻ', 'Nơi tình yêu bắt đầu', 3, 'Chúng ta', 'Tuổi trẻ', 5, 'hinh_baiviet_5.jpg');

truncate table tacgia;
truncate table theloai;
truncate table baiviet;