<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class insertPost extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('posts')->insert([
            [
                'tieu_de' => 'Ông Trump dẫn trước Tổng thống Biden trên toàn quốc',
                'chi_tiet' => 'Kết quả cuộc khảo sát của Đại học Emerson, do ủy ban hành động chính trị, Người Dân chủ vì Thế hệ mai sau tài trợ.',
                'the_loai_id' => 1
            ],
            [
                'tieu_de' => 'Bộ Chính trị thông báo về sức khỏe của Tổng bí thư Nguyễn Phú Trọng',
                'chi_tiet' => 'Thời gian qua, theo yêu cầu của Hội đồng chuyên môn bảo vệ sức khỏe cán bộ Trung ương, Tổng bí thư Nguyễn Phú Trọng vừa điều hành công việc, vừa điều trị, chăm sóc sức khỏe.',
                'the_loai_id' => 1
            ],
            [
                'tieu_de' => '5 cầu thủ tăng giá sau Euro 2024',
                'chi_tiet' => 'Lamine Yamal, tuyển Tây Ban Nha. Từ một cầu thủ triển vọng, Yamal trở thành ngôi sao thực sự sau khi giúp Tây Ban Nha vô địch Euro.',
                'the_loai_id' => 2
            ],
            [
                'tieu_de' => 'Mbappe kịp cùng Real đá Siêu Cup châu Âu',
                'chi_tiet' => 'Trận gần nhất Mbappe thi đấu là khi anh cùng Pháp thua Tây Ban Nha 1-2 ở bán kết ngày 9/7. Thông thường các cầu thủ dự Euro được nghỉ khoảng một tháng tính từ gần nhất với đội tuyển, vì thế Mbappe sẽ chỉ bắt đầu tập cùng Real từ 7/8.',
                'the_loai_id' => 2
            ],
            [
                'tieu_de' => 'Sự Kiện HoYo FEST 2024 Chính Thức Bắt Đầu!',
                'chi_tiet' => 'Sự kiện HoYo FEST 2024 đã chính thức bắt đầu rồi! Chúng tôi đã chuẩn bị những sự kiện online và offline thú vị dành cho tất cả Nhà Lữ Hành! Hoan nghênh các Nhà Lữ Hành tới tham gia nhé! ',
                'the_loai_id' => 3
            ],
            [
                'tieu_de' => 'Tuyển tập Genshin Impact - A Melody of Blissful Harmony',
                'chi_tiet' => 'Làm sao để khiến dòng suối róc rách trở nên tĩnh lặng, Làm sao để khiến những áng mây trôi xa theo gió ngừng bay; Để chúng quên đi thời gian, quên đi muộn phiền, Chỉ dừng lại vì thơ ca trong một khắc này.',
                'the_loai_id' => 3
            ],
        ]);
    }
}
