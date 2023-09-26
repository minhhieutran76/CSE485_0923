use BTTH01_CSE485;

-- a. Liệt kê các bài viết về các bài hát thuộc thể loại Nhạc trữ tình
select * from baiviet where ma_tloai = '1';

-- b. Liệt kê các bài viết của tác giả “Nhacvietplus”
select * from baiviet where ma_tgia = '1';

-- c. Liệt kê các thể loại nhạc chưa có bài viết cảm nhận nào
select * from theloai where ma_tloai not in (select distinct ma_tloai from baiviet);

-- d.Liệt kê các bài viết với các thông tin sau: mã bài viết, tên bài viết, tên bài hát, tên tác giả, tên thể loại, ngày viết
SELECT b.ma_bviet, b.tieude, b.ten_bhat, tg.ten_tgia, tl.ten_tloai, b.ngayviet
FROM baiviet b
INNER JOIN tacgia tg ON b.ma_tgia = tg.ma_tgia
INNER JOIN theloai tl ON b.ma_tloai = tl.ma_tloai;

-- e. Tìm thể loại có số bài viết nhiều nhất
SELECT tl.ten_tloai, COUNT(b.ma_bviet) AS so_bai_viet
FROM theloai tl
LEFT JOIN baiviet b ON tl.ma_tloai = b.ma_tloai
GROUP BY tl.ten_tloai
ORDER BY so_bai_viet DESC
LIMIT 1;

-- f. Liệt kê 2 tác giả có số bài viết nhiều nhất
SELECT tg.ten_tgia, COUNT(b.ma_bviet) AS so_bai_viet
FROM tacgia tg
LEFT JOIN baiviet b ON tg.ma_tgia = b.ma_tgia
GROUP BY tg.ten_tgia
ORDER BY so_bai_viet DESC
LIMIT 2;

-- g. Liệt kê các bài viết về các bài hát có tựa bài hát chứa 1 trong các từ “yêu”, “thương”, “anh”, “em”
SELECT * FROM baiviet WHERE ten_bhat LIKE '%yêu%' OR ten_bhat LIKE '%thương%' OR ten_bhat LIKE '%anh%' OR ten_bhat LIKE '%em%';

-- h. Liệt kê các bài viết về các bài hát có tiêu đề bài viết hoặc tựa bài hát chứa 1 trong các từ “yêu”, “thương”, “anh”, “em”
SELECT * FROM baiviet WHERE tieude LIKE '%yêu%' OR tieude LIKE '%thương%' OR tieude LIKE '%anh%' OR tieude LIKE '%em%' OR ten_bhat LIKE '%yêu%' OR ten_bhat LIKE '%thương%' OR ten_bhat LIKE '%anh%' OR ten_bhat LIKE '%em%';

-- i. Tạo 1 view có tên vw_Music để hiển thị thông tin về Danh sách các bài viết kèm theo Tên thể loại và tên tác giả
