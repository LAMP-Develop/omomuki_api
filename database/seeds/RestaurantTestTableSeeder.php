<?php

use Illuminate\Database\Seeder;

class RestaurantTestTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // 全クエリ削除
        DB::table('restaurants')->truncate();

        DB::table('restaurants')->insert([
            [
                'name' => 'ロテイー チキンアンドジャッキー タコス',
                'cuisine_genre_id' => 13,
                'tel' => '050-5594-3566',
                'zipcode' => '600-8414',
                'pref_id' => 26,
                'address1' => '京都市下京区',
                'address2' => '高辻通烏丸東入ル匂天神町642-3',
                'gmap_url' => 'https://goo.gl/maps/apa9hpMq4RdjG6We7',
                'access'=> '阪急京都線 烏丸駅 徒歩10分
                地下鉄烏丸線 四条駅 徒歩10分
                ＪＲ 京都駅 車8分',
                'business_hours' => '火～日・祝前日・祝日
                ランチ　11:00～16:00
                ディナー　16:00～23:00
                （L.O.22:00、ドリンクL.O.22:30）',
                'regular_holiday' => '月曜日
                月曜日祝日の場合、翌火曜日が休みとさせていただきます。',
                'parking_flag' => 0,
                'parking_text' => 'なし',
                'credit_card' => 'JCB、AMEX、VISA、Master',
                'electronic_money' => '不可',
                'hp_url' => 'http://rcjt.jp/',
                'gnavi_url' => 'https://r.gnavi.co.jp/2r3ajwtg0000/',
                'tabelog_url' => 'https://tabelog.com/kyoto/A2601/A260201/26025041/'
            ],
            [
                'name' => '京季節料理 凛月',
                'cuisine_genre_id' => 28,
                'tel' => '050-3468-3483',
                'zipcode' => '604-0022',
                'pref_id' => 26,
                'address1' => '京都市中京区',
                'address2' => '室町御池上ル御池之町308',
                'gmap_url' => 'https://goo.gl/maps/D2CLW4zyU49jqwQT6',
                'access'=> '京都市営地下鉄烏丸線 烏丸御池駅 2番出口 徒歩2分',
                'business_hours' => '月～土
                12:00～14:00
                (予約のみ)
                17:30～23:00
                （L.O.22:30）',
                'regular_holiday' => '日曜日
                (10名以上の予約で営業)　連休の場合は最終月曜日が休み',
                'parking_flag' => 0,
                'parking_text' => 'なし',
                'credit_card' => 'VISA、Master、JCB、AMEX、Diners',
                'electronic_money' => '不可',
                'hp_url' => 'https://ringetsu.gorp.jp/',
                'gnavi_url' => 'https://r.gnavi.co.jp/c916700/',
                'tabelog_url' => 'https://tabelog.com/kyoto/A2601/A260202/26007927/'
            ],
            [
                'name' => 'ヤキニク甲 蛸薬師店',
                'cuisine_genre_id' => 14,
                'tel' => '050-5595-6586',
                'zipcode' => '604-8063',
                'pref_id' => 26,
                'address1' => '京都市中京区',
                'address2' => '油屋町120-1',
                'gmap_url' => 'https://goo.gl/maps/7U2uQoRd1KfxAfTz9',
                'access'=> '阪急京都線 烏丸駅 徒歩5分
                阪急京都線 京都河原町駅 徒歩5分
                地下鉄東西線 烏丸御池駅 徒歩10分
                京阪本線 祇園四条駅 徒歩12分',
                'business_hours' => '月～金
                ディナー　18:00～22:00
                土・日・祝
                ディナー　17:00～22:00
                ランチ　12:00～14:00
                ◆テイクアウト注文・受け取り可能時間◆
                全日11：00〜21：00',
                'regular_holiday' => '無',
                'parking_flag' => 0,
                'parking_text' => 'なし',
                'credit_card' => 'VISA、Master、JCB、AMEX、Diners',
                'electronic_money' => 'WeChatPay、Alipay、PayPay',
                'hp_url' => 'https://kinoe-yd.com/takoyakushi/',
                'gnavi_url' => 'https://r.gnavi.co.jp/c50n1ya90000/',
                'tabelog_url' => 'https://tabelog.com/kyoto/A2601/A260201/26030731/'
            ]
        ]);
    }
}
