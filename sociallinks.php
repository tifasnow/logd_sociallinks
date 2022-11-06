<?php
/* Social Links on Bio Page module by Tifa Zabat
An optional module for PHP versions of Legend of the Green Dragon
Allows users to link to their Social Accounts from their Bio Pages with addition of a new field in the user profile.
To get the icons for the various social media profiles, I reccomend using a site such as Simple Icons https://simpleicons.org/ or Font Awesome https://fontawesome.com/
    CC-BY-SA 4.0 github:tifasnow https://github.com/tifasnow/logd_sociallinks/
    */

function sociallinks_getmoduleinfo(){
    $info = array (
        "name" => "Social Links on Bio Page",
        "version" => "2022.11.04",
        "author" => "<a href='https://github.com/tifasnow/' target=_new>Tifa Zabat</a>",
        "category" => "User",
        "description" => "Allows users to link to their Social Accounts from their Bio Pages with addition of a new field in the user profile.",
        "download" => "https://github.com/tifasnow/logd_sociallinks",
        "prefs" => array(
            "Social Links,title",
            "user_ao3" => "AO3 Username|",
            "user_battlenet" => "Battle.net Username|",
            "user_blogger" => "Blogger Username|",
            "user_deviantart" => "DeviantArt Username|",
            "user_discord" => "Discord Username|",
            "user_dribbble" => "Dribbble Username|",
            "user_facebook" => "Facebook Username|",
            "user_flickr" => "Flickr Username|",
            "user_flist" => "F-List Username|",
            "user_furaffinity" => "FurAffinity Username|",
            "user_furrynetwork" => "Furry Network Username|",
            "user_github" => "GitHub Username|",
            "user_goodreads" => "Goodreads Username|",
            "user_instagram" => "Instagram Username|",
            "user_ko-fi" => "Ko-fi Username|",
            "user_livejournal" => "LiveJournal Username|",
            "user_mastodon" => "Mastodon Username|",
            "user_patreon" => "Patreon Username|",
            "user_pinterest" => "Pinterest Username|",
            "user_reddit" => "Reddit Username|",
            "user_skype" => "Skype Username|",
            "user_snapchat" => "Snapchat Username|",
            "user_steam" => "Steam Username|",
            "user_telegram" => "Telegram Username|",
            "user_tiktok" => "TikTok Username|",
            "user_tumblr" => "Tumblr Username|",
            "user_twitter" => "Twitter Username|",
            "user_vero" => "Vero Username|",
            "user_vimeo" => "Vimeo Username|",
            "user_youtube" => "YouTube Username|",
            "user_weasyl" => "Weasyl Username|",
            "user_wordpress" => "WordPress Username|",
            "user_website" => "Website URL|",
            
        ),
        "settings" => array(
            "Social Links Settings,title",
            "show_ao3" => "Show AO3 icon?,bool|1",
            "show_battlenet" => "Show Battle.net icon?,bool|1",
            "show_blogger" => "Show Blogger icon?,bool|1",
            "show_deviantart" => "Show DeviantArt icon?,bool|1",
            "show_discord" => "Show Discord icon?,bool|1",
            "show_dribbble" => "Show Dribbble icon?,bool|1",
            "show_facebook" => "Show Facebook icon?,bool|1",
            "show_flickr" => "Show Flickr icon?,bool|1",
            "show_flist" => "Show F-List icon?,bool|1",
            "show_furaffinity" => "Show FurAffinity icon?,bool|1",
            "show_furrynetwork" => "Show Furry Network icon?,bool|1",
            "show_goodreads" => "Show Goodreads icon?,bool|1",
            "show_github" => "Show GitHub icon?,bool|1",
            "show_instagram" => "Show Instagram icon?,bool|1",
            "show_ko-fi" => "Show Ko-fi icon?,bool|1",
            "show_livejournal" => "Show LiveJournal icon?,bool|1",
            "show_mastodon" => "Show Mastodon icon?,bool|1",
            "show_patreon" => "Show Patreon icon?,bool|1",
            "show_pinterest" => "Show Pinterest icon?,bool|1",
            "show_reddit" => "Show Reddit icon?,bool|1",
            "show_skype" => "Show Skype icon?,bool|1",
            "show_snapchat" => "Show Snapchat icon?,bool|1",
            "show_steam" => "Show Steam icon?,bool|1",
            "show_telegram" => "Show Telegram icon?,bool|1",
            "show_tiktok" => "Show TikTok icon?,bool|1",
            "show_tumblr" => "Show Tumblr icon?,bool|1",
            "show_twitter" => "Show Twitter icon?,bool|1",
            "show_vero" => "Show Vero icon?,bool|1",	
            "show_vimeo" => "Show Vimeo icon?,bool|1",
            "show_youtube" => "Show YouTube icon?,bool|1",
            "show_weasyl" => "Show Weasyl icon?,bool|1",
            "show_wordpress" => "Show WordPress icon?,bool|1",
            "show_website" => "Show Website icon?,bool|1",
        ),
    );
    return $info;
}

function sociallinks_install(){
    debug("Installing Social Links on Bio Page module");
    module_addhook("bioinfo");
    module_addhook("footer-prefs");
    return true;
}

function sociallinks_uninstall(){
    debug("Uninstalling Social Links on Bio Page module");
    return true;
}

function sociallinks_dohook($hookname, $args){
    global $session;
    switch ($hookname) {
        case "bioinfo":
            rawoutput("<table border='0' cellpadding='2' cellspacing='0' align='center'><tr><td valign='top'>");

            output("`n`n`c`b`@Social Links`0`b`c`n");
            output_link("ao3", $args['acctid']);
            output_link("battlenet",$args['acctid']);
            output_link("blogger", $args['acctid']);
            output_link("discord",$args['acctid']);
            output_link("deviantart",$args['acctid']);
            output_link("dribbble",$args['acctid']);
            output_link("facebook",$args['acctid']);
            output_link("flickr",$args['acctid']);
            output_link("flist",$args['acctid']);
            output_link("furaffinity",$args['acctid']);
            output_link("furrynetwork",$args['acctid']);
            output_link("goodreads",$args['acctid']);
            output_link("github",$args['acctid']);
            output_link("instagram",$args['acctid']);
            output_link("ko-fi",$args['acctid']);
            output_link("livejournal",$args['acctid']);
            output_link("mastodon",$args['acctid']);
            output_link("patreon",$args['acctid']);
            output_link("pinterest",$args['acctid']);
            output_link("reddit",$args['acctid']);
            output_link("skype",$args['acctid']);
            output_link("snapchat",$args['acctid']);
            output_link("steam",$args['acctid']);
            output_link("telegram",$args['acctid']);
            output_link("tiktok",$args['acctid']);
            output_link("tumblr",$args['acctid']);
            output_link("twitter",$args['acctid']);
            output_link("vero",$args['acctid']);
            output_link("vimeo",$args['acctid']);
            output_link("youtube",$args['acctid']);
            output_link("weasyl",$args['acctid']);
            output_link("wordpress",$args['acctid']);
            output_link("website",$args['acctid']);

            rawoutput("</td></tr></table>");

            break;
        case "footer-prefs":
            $args['prefs']['prefs-sociallinks'] = array(
                "title" => translate_inline("Social Links"),
                "label" => translate_inline("Add your Social Links to your Bio Page"),
                "setting" => "prefs-sociallinks",
                "type" => "prefs-sociallinks",
            );
            break;
    }
    return $args;
}

/**
 * @param string $user_ao3
 * @return void
 */
function output_link(string $linktype, int $acctid): void
{
    $links_arr=array(
        'ao3' => array (
            'link' => "https://archiveofourown.org/users/__USER__",
            'image' => "modules/sociallinks/images/ao3.svg",
            'title' => 'Archive of Our Own'
        ),
        'battlenet' => array(
            'link' => "https://battle.net/__USER__",
            'image' => "modules/sociallinks/images/battlenet.svg",
            'title' => 'Battle.Net'
        ),
        'blogger' => array(
            'link' => "https://__USER__.blogspot.com",
            'image' => "modules/sociallinks/images/blogger.svg",
            'title' => 'Blogger'
        ),
        'discord' => array(
            'image'=>'modules/sociallinks/images/discord.svg',
            'title' =>'Discord',
        ),
        'deviantart' => array(
            'link' => "https://__USER__.deviantart.com",
            'image' => "modules/sociallinks/images/deviantart.svg",
            'title' => 'DeviantArt'
        ),
        'dribbble' => array(
            'link' => "https://dribbble.com/__USER__",
            'image' => "modules/sociallinks/images/dribbble.svg",
            'title' => 'Dribbble'
        ),
        'facebook' => array(
            'link' => "https://www.facebook.com/__USER__",
            'image' => "modules/sociallinks/images/facebook.svg",
            'title' => 'Facebook'
        ),
        'flickr' => array(
            'link' => "https://www.flickr.com/photos/__USER__",
            'image' => "modules/sociallinks/images/flickr.svg",
            'title' => 'Flickr'
        ),
        'flist' => array(
            'link' => "https://www.f-list.net/c/__USER__",
            'image' => "modules/sociallinks/images/flist.svg",
            'title' => 'F-List'
        ),
        'furaffinity' => array(
            'link' => "https://www.furaffinity.net/user/__USER__",
            'image' => "modules/sociallinks/images/furaffinity.svg",
            'title' => 'FurAffinity'
        ),
        'furrynetwork' => array(
            'link' => "https://www.furrynetwork.com/__USER__",
            'image' => "modules/sociallinks/images/furrynetwork.svg",
            'title' => 'Furry Network'
        ),
        'goodreads' => array(
            'link' => "https://www.goodreads.com/__USER__",
            'image' => "modules/sociallinks/images/goodreads.svg",
            'title' => 'Goodreads'
        ),
        'github' => array(
            'link' => "https://www.github.com/__USER__",
            'image' => "modules/sociallinks/images/github.svg",
            'title' => 'GitHub'
        ),
        'instagram' => array(
            'link' => "https://www.instagram.com/__USER__",
            'image' => "modules/sociallinks/images/instagram.svg",
            'title' => 'Instagram'
        ),
        'ko-fi' => array(
            'link' => "https://ko-fi.com/__USER__",
            'image' => "modules/sociallinks/images/ko-fi.svg",
            'title' => 'Ko-Fi'
        ),
        'livejournal' => array(
            'link' => "https://__USER__.livejournal.com",
            'image' => "modules/sociallinks/images/livejournal.svg",
            'title' => 'LiveJournal'
        ),
        'mastodon' => array(
            'link' => "__USER__",
            'image' => "modules/sociallinks/images/mastodon.svg",
            'title' => 'Mastodon'
        ),
        'patreon' => array(
            'link' => "https://www.patreon.com/__USER__",
            'image' => "modules/sociallinks/images/patreon.svg",
            'title' => 'Patreon'
        ),
        'pinterest' => array(
            'link' => "https://www.pinterest.com/__USER__",
            'image' => "modules/sociallinks/images/pinterest.svg",
            'title' => 'Pinterest'
        ),
        'reddit' => array(
            'link' => "https://www.reddit.com/user/__USER__",
            'image' => "modules/sociallinks/images/reddit.svg",
            'title' => 'Reddit'
        ),
        'skype' => array(
            'link' => "skype:__USER__?chat",
            'image' => "modules/sociallinks/images/skype.svg",
            'title' => 'Skype'
        ),
        'snapchat' => array(
            'link' => "https://www.snapchat.com/add/__USER__",
            'image' => "modules/sociallinks/images/snapchat.svg",
            'title' => 'Snapchat'
        ),
        'steam' => array(
            'link' => "https://steamcommunity.com/id/__USER__",
            'image' => "modules/sociallinks/images/steam.svg",
            'title' => 'Steam'
        ),
        'telegram' => array(
            'link' => "https://t.me/__USER__",
            'image' => "modules/sociallinks/images/telegram.svg",
            'title' => 'Telegram'
        ),
        'tiktok' => array(
            'link' => "https://www.tiktok.com/@__USER__",
            'image' => "modules/sociallinks/images/tiktok.svg",
            'title' => 'TikTok'
        ),
        'tumblr' => array(
            'link' => "https://__USER__.tumblr.com",
            'image' => "modules/sociallinks/images/tumblr.svg",
            'title' => 'Tumblr'
        ),
        'twitch' => array(
            'link' => "https://www.twitch.tv/__USER__",
            'image' => "modules/sociallinks/images/twitch.svg",
            'title' => 'Twitch'
        ),
        'twitter' => array(
            'link' => "https://twitter.com/__USER__",
            'image' => "modules/sociallinks/images/twitter.svg",
            'title' => 'Twitter'
        ),
        'vero' => array(
            'link' => "https://vero.co/__USER__",
            'image' => "modules/sociallinks/images/vero.svg",
            'title' => 'Vero'
        ),
        'vimeo' => array(
            'link' => "https://vimeo.com/__USER__",
            'image' => "modules/sociallinks/images/vimeo.svg",
            'title' => 'Vimeo'
        ),
        'youtube' => array(
            'link' => "https://www.youtube.com/user/__USER__",
            'image' => "modules/sociallinks/images/youtube.svg",
            'title' => 'YouTube'
        ),
        'weasyl' => array(
            'link' => "https://www.weasyl.com/~__USER__",
            'image' => "modules/sociallinks/images/weasyl.svg",
            'title' => 'Weasyl'
        ),
        'wordpress' => array(
            'link' => "https://__USER__.wordpress.com",
            'image' => "modules/sociallinks/images/wordpress.svg",
            'title' => 'WordPress'
        ),
        'website' => array(
            'link' => "__USER__",
            'image' => "modules/sociallinks/images/link.svg",
            'title' => 'Website'
        ),

    );

    $uservar="user_$linktype";
    $var = get_module_pref($uservar, "sociallinks", $acctid);
    $var = stripslashes(preg_replace("'[\"\'\\><@?*&; ]'","",$var));
    if(isset($links_arr[$linktype])) {
        $link_details = $links_arr[$linktype];

        if(isset($link_details['link'])) {
            $link = $link_details['link'];

            $link = str_replace("__USER__", $var, $link);
            if ($var > "" && (get_module_setting("show_$linktype") == 1)) {
                $image = $link_details['image'];
                $title = $link_details['title'];
                rawoutput("<a href='$link' target='_blank'><img src='$image' alt='$title' title='$title' style='width: 32px; height: 32px;'></a>");
            }
        } else if ($var > "" && (get_module_setting("show_$linktype") == 1)) {
            $image = $link_details['image'];
            $title = $link_details['title'];
            rawoutput("<span><img src='$image' alt='$title' title='$title' style='width: 32px; height: 32px;'>$var</span>");
        }
    }
}

function sociallinks_run(){
    global $session;
}

?>