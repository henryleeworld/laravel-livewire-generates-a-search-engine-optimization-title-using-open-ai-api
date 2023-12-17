<?php

namespace Database\Seeders;

use App\Models\Post;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $posts = [
            [
                'title'   => '《ROCKMAN X DiVE 離線版》推出免費體驗 Demo 版及限時優惠，可體驗本篇第 8 章',
                'content' => 'CAPCOM 旗下動作 RPG《ROCKMAN X DiVE 離線版》今年 9 月於 Steam（PC）及 iOS、Android 平台上線，該作品為《ROCKMAN X DiVE》以離線版形式重新推出的作品。其中保留了「X DiVE」獨特的豐富遊戲性，收錄 100 名以上可遊玩角色、900 種以上關卡的龐大遊戲內容。',
            ],
            [
                'title'   => '「SHAMAN KING 展 通靈王 POP UP STORE」明日起高雄登場，武井宏之親筆撰寫中文問候',
                'content' => '首度移師來台展出的 SHAMAN KING 展 通靈王 POP UP STORE 將於明（16）日起在夢時代購物中心 6 樓時代會館免費開展。特展忠實呈現日本部分展區場景：全角色集結及華麗必殺技、特展限定作畫影片、幾近百幅細膩複製原畫、日本特展限定與台灣首發限定精品等。',
            ],
            [
                'title'   => '「THE 哆啦A夢展 台北 2023」明日盛大開展，集結多名日本藝術家重新定義哆啦A夢',
                'content' => '集結了村上隆、奈良美智、蜷川實花等 28 組日本知名藝術家，以「我心中的哆啦A夢」為主題的「THE 哆啦A夢展 台北 2023」，即將於明日正式開展，而主辦單位聯合數位文創也在今日搶先舉行開幕記者會，帶領媒體一探展覽面貌。此外，參展藝術家之一的梅佳代，今日也受邀參與活動記者會，並在自己的展區留下值得紀念的簽名與圖繪。',
            ],
        ];

        Post::insert($posts);
    }
}
