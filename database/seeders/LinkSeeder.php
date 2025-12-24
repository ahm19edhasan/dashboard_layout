<?php

namespace Database\Seeders;

use App\Models\Link;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LinkSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('links')->truncate();

        $data = [
            [
                'key' => 'evernote',
                'value' => 'https://www.evernote.com/clip.action?url=',
                'icon' => 'fab fa-evernote',
                'type' => 'Evernote',
                'status' => 1,
            ],

            [
                'key' => 'facebook',
                'value' => 'https://www.facebook.com/sharer/sharer.php?u=',
                'icon' => 'fab fa-facebook-f',
                'type' => 'Facebook',
                'status' => 1,
            ],

            [
                'key' => 'hackernews',
                'value' => 'https://news.ycombinator.com/submitlink?t=:text&u=',
                'icon' => 'fab fa-hacker-news',
                'type' => 'Hackernews',
                'status' => 1,
            ],

            [
                'key' => 'linkedin',
                'value' => 'https://www.linkedin.com/sharing/share-offsite?mini=true&url=',
                'icon' => 'fab fa-linkedin-in',
                'type' => 'Linkedin',
                'status' => 1,
            ],

            [
                'key' => 'email',
                'value' => 'mailto:?subject=:text&body=:',
                'icon' => 'fas fa-envelope',
                'type' => 'Email',
                'status' => 1,
            ],

            [
                'key' => 'pinterest',
                'value' => 'https://pinterest.com/pin/create/button/?url=',
                'icon' => 'fab fa-pinterest',
                'type' => 'Pinterest',
                'status' => 1,
            ],

            [
                'key' => 'pocket',
                'value' => 'https://getpocket.com/edit?url=',
                'icon' => 'fab fa-get-pocket',
                'type' => 'Pocket',
                'status' => 1,
            ],

            [
                'key' => 'reddit',
                'value' => 'https://www.reddit.com/submit?title=:text&url=',
                'icon' => 'fab fa-reddit',
                'type' => 'Reddit',
                'status' => 1,
            ],

            [
                'key' => 'skype',
                'value' => 'https://web.skype.com/share?url=',
                'icon' => 'fab fa-skype',
                'type' => 'Skype',
                'status' => 1,
            ],

            [
                'key' => 'telegram',
                'value' => 'https://twitter.com/intent/tweet?text=:text&url=',
                'icon' => 'fab fa-telegram',
                'type' => 'Telegram',
                'status' => 1,
            ],

            [
                'key' => 'twitter',
                'value' => 'https://twitter.com/intent/tweet?text=:text&url=',
                'icon' => 'fab fa-twitter',
                'type' => 'Twitter',
                'status' => 1,
            ],

            [
                'key' => 'vkontakte',
                'value' => 'https://vk.com/share.php?url=',
                'icon' => 'fab fa-vk',
                'type' => 'Vkontakte',
                'status' => 1,
            ],

            [
                'key' => 'whatsapp',
                'value' => 'https://wa.me/?text=',
                'icon' => 'fab fa-whatsapp',
                'type' => 'Whatsapp',
                'status' => 1,
            ],

            [
                'key' => 'xing',
                'value' => 'https://www.xing.com/spi/shares/new?url=',
                'icon' => 'fab fa-xing',
                'type' => 'Xing',
                'status' => 1,
            ],
        ];

        foreach ( $data as $key => $value ) {
            Link::create([
                'key' => $value['key'],
                'value' => $value['value'],
                'icon' => $value['icon'],
                'type' => $value['type'],
                'status' => 1,
            ]);
        }
    }
}
