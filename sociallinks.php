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
            "user_500px" => "500px Username|",
            "user_ao3" => "AO3 Username|",
            "user_applemusic" => "Apple Music Username|",
            "user_applepodcasts" => "Apple Podcasts Username|",
            "user_askfm" => "Ask.fm Username|",
            "user_bandcamp" => "Bandcamp Username|",
            "user_behance" => "Behance Username|",	
            "user_battlenet" => "Battle.net Username|",
            "user_blogger" => "Blogger Username|",
            "user_canva" => "Canva Username|",
            "user_cashapp" => "CashApp Username|",
            "user_codepen" => "CodePen Username|",
            "user_curseforge" => "CurseForge Username|",
            "user_deviantart" => "DeviantArt Username|",
            "user_devto" => "Dev.to Username|",
            "user_digg" => "Digg Username|",
            "user_discord" => "Discord Username|",
            "user_dribbble" => "Dribbble Username|",
            "user_duolingo" => "Duolingo Username|",
            "user_epicgames" => "Epic Games Username|",
            "user_etsy" => "Etsy Username|",
            "user_facebook" => "Facebook Username|",
            "user_fanfiction" => "FanFiction Username|",
            "user_fandom" => "Fandom Username|",
            "user_fivem" => "FiveM Username|",
            "user_fiverr" => "Fiverr Username|",
            "user_flickr" => "Flickr Username|",
            "user_flist" => "F-List Username|",
            "user_furaffinity" => "FurAffinity Username|",
            "user_furrynetwork" => "Furry Network Username|",
            "user_github" => "GitHub Username|",
            "user_gitlab" => "GitLab Username|",
            "user_goodreads" => "Goodreads Username|",
            "user_googlepodcasts" => "Google Podcasts Username|",
            "user_hey" => "Hey Username|",
            "user_icq" => "ICQ Username|",
            "user_imdb" => "IMDb Username|",
            "user_imgur" => "Imgur Username|",
            "user_instagram" => "Instagram Username|",
            "user_itchio" => "Itch.io Username|",
            "user_keybase" => "Keybase Username|",
            "user_kickstarter" => "Kickstarter Username|",	
            "user_kik" => "Kik Username|",
            "user_ko-fi" => "Ko-fi Username|",
            "user_lastfm" => "Last.fm Username|",	
            "user_LINE" => "LINE Username|",
            "user_linkedin" => "LinkedIn Username|",
            "user_livejournal" => "LiveJournal Username|",
            "user_mastodon" => "Mastodon URL|",
            "user_medium" => "Medium Username|",
            "user_messenger" => "Messenger Username|",
            "user_minecraft" => "Minecraft Username|",
            "user_nextdoor" => "Nextdoor Username|",
            "user_nintendo3ds" => "Nintendo 3DS Friend Code|",
            "user_nintendoswitch" => "Nintendo Switch Friend Code|",
            "user_onlyfans" => "OnlyFans Username|",
            "user_openstreetmap" => "OpenStreetMap Username|",
            "user_origin" => "Origin Username|",
            "user_pandora" => "Pandora Username|",
            "user_patreon" => "Patreon Username|",
            "user_paypal" => "PayPal Username|",
            "user_pinterest" => "Pinterest Username|",
            "user_pixiv" => "Pixiv Username|",
            "user_playstation" => "PlayStation Network Username|",
            "user_quora" => "Quora Username|",
            "user_reddit" => "Reddit Username|",
            "user_roblox" => "Roblox Username|",
            "user_rocketleague" => "Rocket League Username|",
            "user_scp" => "SCP Wiki Username|",
            "user_scratch" => "Scratch Username|",
            "user_skype" => "Skype Username|",
            "user_snapchat" => "Snapchat Username|",
            "user_sofurry" => "SoFurry Username|",
            "user_soundcloud" => "SoundCloud Username|",
            "user_spotify" => "Spotify Username|",
            "user_stackoverflow" => "Stack Overflow Username|",
            "user_steam" => "Steam Username|",
            "user_strava" => "Strava Username|",
            "user_substack" => "Substack Username|",
            "user_swarm" => "Swarm Username|",
            "user_telegram" => "Telegram Username|",
            "user_tiktok" => "TikTok Username|",
            "user_tumblr" => "Tumblr Username|",
            "user_twitter" => "Twitter Username|",
            "user_twitch" => "Twitch Username|",
            "user_ubisoft" => "Ubisoft Username|",
            "user_unsplash" => "Unsplash Username|",
            "user_vero" => "Vero Username|",
            "user_venmo" => "Venmo Username|",
            "user_viber" => "Viber Username|",
            "user_vimeo" => "Vimeo Username|",
            "user_vk" => "VK Username|",
            "user_VSCO" => "VSCO Username|",
            "user_wattpad" => "WattPad Username|",
            "user_weasyl" => "Weasyl Username|",
            "user_wechat" => "WeChat Username|",
            "user_whatsapp" => "WhatsApp Username|",
            "user_wikipedia" => "Wikipedia Username|",
            "user_wikia" => "Wikia Username|",
            "user_wikidot" => "Wikidot Username|",
            "user_wikimedia" => "Wikimedia Username|",
            "user_wordpress" => "WordPress Username|",
            "user_xbox" => "Xbox Live Gamertag|",
            "user_xda" => "XDA Developers Username|",
            "user_yahoo" => "Yahoo Username|",
            "user_youtube" => "YouTube Username|",
            "user_website" => "Website URL|",
            
        ),
        "settings" => array(
            "Social Links Settings,title",
            "show_500px" => "Show 500px Icon?,bool|1",
            "show_ao3" => "Show AO3 icon?,bool|1",
            "show_applemusic" => "Show Apple Music icon?,bool|1",
            "show_applepodcasts" => "Show Apple Podcasts icon?,bool|1",
            "show_askfm" => "Show Ask.fm icon?,bool|1",
            "show_bandcamp" => "Show Bandcamp icon?,bool|1",
            "show_behance" => "Show Behance icon?,bool|1",
            "show_battlenet" => "Show Battle.net icon?,bool|1",
            "show_blogger" => "Show Blogger icon?,bool|1",
            "show_canva" => "Show Canva icon?,bool|1",
            "show_cashapp" => "Show CashApp icon?,bool|1",
            "show_codepen" => "Show CodePen icon?,bool|1",
            "show_curseforge" => "Show CurseForge icon?,bool|1",
            "show_deviantart" => "Show DeviantArt icon?,bool|1",
            "show_devto" => "Show Dev.to icon?,bool|1",
            "show_discord" => "Show Discord icon?,bool|1",
            "show_digg" => "Show Digg icon?,bool|1",
            "show_dribbble" => "Show Dribbble icon?,bool|1",
            "show_duolingo" => "Show Duolingo icon?,bool|1",
            "show_epicgames" => "Show Epic Games icon?,bool|1",
            "show_etsy" => "Show Etsy icon?,bool|1",
            "show_facebook" => "Show Facebook icon?,bool|1",
            "show_fanfiction" => "Show FanFiction icon?,bool|1",
            "show_fandom" => "Show Fandom icon?,bool|1",
            "show_fivem" => "Show FiveM icon?,bool|1",
            "show_fiverr" => "Show Fiverr icon?,bool|1",
            "show_flickr" => "Show Flickr icon?,bool|1",
            "show_flist" => "Show F-List icon?,bool|1",
            "show_furaffinity" => "Show FurAffinity icon?,bool|1",
            "show_furrynetwork" => "Show Furry Network icon?,bool|1",
            "show_goodreads" => "Show Goodreads icon?,bool|1",
            "show_googlepodcasts" => "Show Google Podcasts icon?,bool|1",
            "show_github" => "Show GitHub icon?,bool|1",
            "show_gitlab" => "Show GitLab icon?,bool|1",
            "show_hey" => "Show Hey icon?,bool|1",
            "show_icq" => "Show ICQ icon?,bool|1",
            "show_imdb" => "Show IMDb icon?,bool|1",
            "show_imgur" => "Show Imgur icon?,bool|1",
            "show_instagram" => "Show Instagram icon?,bool|1",
            "show_itchio" => "Show Itch.io icon?,bool|1",	
            "show_keybase" => "Show Keybase icon?,bool|1",
            "show_kickstarter" => "Show Kickstarter icon?,bool|1",
            "show_kik" => "Show Kik icon?,bool|1", 
            "show_ko-fi" => "Show Ko-fi icon?,bool|1",
            "show_lastfm" => "Show Last.fm icon?,bool|1",
            "show_LINE" => "Show LINE icon?,bool|1",
            "show_linkedin" => "Show LinkedIn icon?,bool|1",
            "show_livejournal" => "Show LiveJournal icon?,bool|1",
            "show_mastodon" => "Show Mastodon icon?,bool|1",
            "show_medium" => "Show Medium icon?,bool|1",
            "show_messenger" => "Show Messenger icon?,bool|1",
            "show_minecraft" => "Show Minecraft icon?,bool|1",
            "show_nextdoor" => "Show Nextdoor icon?,bool|1",
            "show_nintendo3ds" => "Show Nintendo 3DS icon?,bool|1",
            "show_nintendoswitch" => "Show Nintendo Switch icon?,bool|1",
            "show_onlyfans" => "Show OnlyFans icon?,bool|1",
            "show_openstreetmap" => "Show OpenStreetMap icon?,bool|1",
            "show_origin" => "Show Origin icon?,bool|1",
            "show_pandora" => "Show Pandora icon?,bool|1",
            "show_patreon" => "Show Patreon icon?,bool|1",
            "show_paypal" => "Show PayPal icon?,bool|1",
            "show_pinterest" => "Show Pinterest icon?,bool|1",
            "show_pixiv" => "Show Pixiv icon?,bool|1",
            "show_playstation" => "Show PlayStation Network icon?,bool|1",
            "show_quora" => "Show Quora icon?,bool|1",
            "show_reddit" => "Show Reddit icon?,bool|1",
            "show_roblox" => "Show Roblox icon?,bool|1",
            "show_rocketleague" => "Show Rocket League icon?,bool|1",	
            "show_scp" => "Show SCP Wiki icon?,bool|1",
            "show_scratch" => "Show Scratch icon?,bool|1",
            "show_skype" => "Show Skype icon?,bool|1",
            "show_snapchat" => "Show Snapchat icon?,bool|1",
            "show_sofurry" => "Show SoFurry icon?,bool|1",
            "show_soundcloud" => "Show SoundCloud icon?,bool|1",
            "show_spotify" => "Show Spotify icon?,bool|1",
            "show_stackoverflow" => "Show Stack Overflow icon?,bool|1",
            "show_steam" => "Show Steam icon?,bool|1",
            "show_strava" => "Show Strava icon?,bool|1",
            "show_substack" => "Show Substack icon?,bool|1",
            "show_swarm" => "Show Swarm icon?,bool|1",
            "show_telegram" => "Show Telegram icon?,bool|1",
            "show_tiktok" => "Show TikTok icon?,bool|1",
            "show_tumblr" => "Show Tumblr icon?,bool|1",
            "show_twitter" => "Show Twitter icon?,bool|1",
            "show_twitch" => "Show Twitch icon?,bool|1",
            "show_ubisoft" => "Show Ubisoft icon?,bool|1",	
            "show_unsplash" => "Show Unsplash icon?,bool|1",
            "show_vero" => "Show Vero icon?,bool|1",	
            "show_venmo" => "Show Venmo icon?,bool|1",
            "show_viber" => "Show Viber icon?,bool|1",
            "show_vimeo" => "Show Vimeo icon?,bool|1",
            "show_vk" => "Show VK icon?,bool|1",
            "show_VSCO" => "Show VSCO icon?,bool|1",
            "show_wattpad" => "Show Wattpad icon?,bool|1",
            "show_weasyl" => "Show Weasyl icon?,bool|1",
            "show_wechat" => "Show WeChat icon?,bool|1",
            "show_whatsapp" => "Show WhatsApp icon?,bool|1",
            "show_wikipedia" => "Show Wikipedia icon?,bool|1",
            "show_wikia" => "Show Wikia icon?,bool|1",
            "show_wikidot" => "Show Wikidot icon?,bool|1",
            "show_wikimedia" => "Show Wikimedia icon?,bool|1",
            "show_wordpress" => "Show WordPress icon?,bool|1",
            "show_xbox" => "Show Xbox Live icon?,bool|1",
            "show_xda" => "Show XDA Developers icon?,bool|1",
            "show_yahoo" => "Show Yahoo icon?,bool|1",
            "user_youtube" => "YouTube Username|",
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
            output_link("500px", $args['acctid']);
            output_link("ao3", $args['acctid']);
            output_link("applemusic", $args['acctid']);
            output_link("applepodcasts", $args['acctid']);
            output_link("askfm", $args['acctid']);
            output_link("bandcamp", $args['acctid']);
            output_link("behance", $args['acctid']);
            output_link("battlenet",$args['acctid']);
            output_link("blogger", $args['acctid']);
            output_link("canva", $args['acctid']);
            output_link("cashapp", $args['acctid']);
            output_link("codepen", $args['acctid']);
            output_link("curseforge", $args['acctid']);
            output_link("digg", $args['acctid']);
            output_link("discord",$args['acctid']);
            output_link("deviantart",$args['acctid']);
            output_link("devto",$args['acctid']);
            output_link("dribbble",$args['acctid']);
            output_link("duolingo",$args['acctid']);
            output_link("epicgames",$args['acctid']);
            output_link("etsy",$args['acctid']);
            output_link("facebook",$args['acctid']);
            output_link("fandom",$args['acctid']);
            output_link("fanfiction",$args['acctid']);
            output_link("fivem",$args['acctid']);
            output_link("fiverr",$args['acctid']);
            output_link("flickr",$args['acctid']);
            output_link("flist",$args['acctid']);
            output_link("furaffinity",$args['acctid']);
            output_link("furrynetwork",$args['acctid']);
            output_link("goodreads",$args['acctid']);
            output_link("googlepodcasts",$args['acctid']);
            output_link("github",$args['acctid']);
            output_link("gitlab",$args['acctid']);
            output_link("hey",$args['acctid']);
            output_link("icq",$args['acctid']);
            output_link("imdb",$args['acctid']);
            output_link("imgur",$args['acctid']);
            output_link("instagram",$args['acctid']);
            output_link("itchio",$args['acctid']);
            output_link("keybase",$args['acctid']);
            output_link("kickstarter",$args['acctid']);
            output_link("kik",$args['acctid']);
            output_link("ko-fi",$args['acctid']);
            output_link("lastfm",$args['acctid']);
            output_link("LINE",$args['acctid']);
            output_link("linkedin",$args['acctid']);
            output_link("livejournal",$args['acctid']);
            output_link("mastodon",$args['acctid']);
            output_link("medium",$args['acctid']);
            output_link("messenger",$args['acctid']);
            output_link("minecraft",$args['acctid']);
            output_link("nextdoor",$args['acctid']);
            output_link("nintendo3ds",$args['acctid']);
            output_link("nintendoswitch",$args['acctid']);
            output_link("onlyfans",$args['acctid']);
            output_link("openstreetmap",$args['acctid']);
            output_link("origin",$args['acctid']);
            output_link("pandora",$args['acctid']);
            output_link("patreon",$args['acctid']);
            output_link("paypal",$args['acctid']);
            output_link("pinterest",$args['acctid']);
            output_link("pixiv",$args['acctid']);
            output_link("playstation",$args['acctid']);
            output_link("quora",$args['acctid']);
            output_link("reddit",$args['acctid']);
            output_link("roblox",$args['acctid']);
            output_link("rocketleague",$args['acctid']);
            output_link("scp",$args['acctid']);
            output_link("scratch",$args['acctid']);
            output_link("skype",$args['acctid']);
            output_link("snapchat",$args['acctid']);
            output_link("sofurry",$args['acctid']);
            output_link("soundcloud",$args['acctid']);
            output_link("spotify",$args['acctid']);
            output_link("stackoverflow",$args['acctid']);
            output_link("steam",$args['acctid']);
            output_link("strava",$args['acctid']);
            output_link("substack",$args['acctid']);
            output_link("Swarm",$args['acctid']);
            output_link("telegram",$args['acctid']);
            output_link("tiktok",$args['acctid']);
            output_link("tumblr",$args['acctid']);
            output_link("twitter",$args['acctid']);
            output_link("twitch",$args['acctid']);
            output_link("ubisoft",$args['acctid']);
            output_link("unsplash",$args['acctid']);
            output_link("vero",$args['acctid']);
            output_link("venmo",$args['acctid']);
            output_link("viber",$args['acctid']);
            output_link("vimeo",$args['acctid']);
            output_link("vk",$args['acctid']);
            output_link("VSCO",$args['acctid']);
            output_link("wattpad",$args['acctid']);
            output_link("weasyl",$args['acctid']);
            output_link("wechat",$args['acctid']);
            output_link("whatsapp",$args['acctid']);
            output_link("wikipedia",$args['acctid']);
            output_link("wikia",$args['acctid']);
            output_link("wikidot",$args['acctid']);
            output_link("wikimedia",$args['acctid']);
            output_link("wordpress",$args['acctid']);
            output_link("xbox",$args['acctid']);
            output_link("xda",$args['acctid']);
            output_link("yahoo",$args['acctid']);
            output_link("youtube",$args['acctid']);
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
        "500px" => array (
            "icon" => "500px",
            "url" => "https://500px.com/_USER_",
            "title" => "500px",
        ),
        'ao3' => array (
            'link' => "https://archiveofourown.org/users/__USER__",
            'image' => "modules/sociallinks/images/ao3.svg",
            'title' => 'Archive of Our Own'
        ),
        'applemusic' => array (
            'link' => "https://music.apple.com/profile/__USER__",
            'image' => "modules/sociallinks/images/applemusic.svg",
            'title' => 'Apple Music'
        ),
        'applepodcasts' => array (
            'link' => "https://podcasts.apple.com/profile/__USER__",
            'image' => "modules/sociallinks/images/applepodcasts.svg",
            'title' => 'Apple Podcasts'
        ),
        'askfm' => array (
            'link' => "https://ask.fm/__USER__",
            'image' => "modules/sociallinks/images/askfm.svg",
            'title' => 'Ask.fm'
        ),
        'bandcamp' => array (
            'link' => "https://__USER__.bandcamp.com/",
            'image' => "modules/sociallinks/images/bandcamp.svg",
            'title' => 'Bandcamp'
        ),
        'behance' => array (
            'link' => "https://www.behance.net/__USER__",
            'image' => "modules/sociallinks/images/behance.svg",
            'title' => 'Behance'
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
        'canva' => array(
            'link' => "https://www.canva.com/__USER__",
            'image' => "modules/sociallinks/images/canva.svg",
            'title' => 'Canva'
        ),
        'cashapp' => array(
            'link' => "https://cash.app/$__USER__",
            'image' => "modules/sociallinks/images/cashapp.svg",
            'title' => 'CashApp'
        ),
        'codepen' => array(
            'link' => "https://codepen.io/__USER__",
            'image' => "modules/sociallinks/images/codepen.svg",
            'title' => 'CodePen'
        ),
        'curseforge' => array(
            'link' => "https://www.curseforge.com/members/__USER__",
            'image' => "modules/sociallinks/images/curseforge.svg",
            'title' => 'CurseForge'
        ),
        'digg' => array(
            'link' => "https://digg.com/u/__USER__",
            'image' => "modules/sociallinks/images/digg.svg",
            'title' => 'Digg'
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
        'devto' => array(
            'link' => "https://dev.to/__USER__",
            'image' => "modules/sociallinks/images/devto.svg",
            'title' => 'Dev.to'
        ),
        'dribbble' => array(
            'link' => "https://dribbble.com/__USER__",
            'image' => "modules/sociallinks/images/dribbble.svg",
            'title' => 'Dribbble'
        ),
        'duolingo' => array(
            'link' => "https://www.duolingo.com/profile/__USER__",
            'image' => "modules/sociallinks/images/duolingo.svg",
            'title' => 'Duolingo'
        ),
        'epicgames' => array(
            'link' => "https://www.epicgames.com/id/__USER__",
            'image' => "modules/sociallinks/images/epicgames.svg",
            'title' => 'Epic Games'
        ),
        'etsy' => array(
            'link' => "https://www.etsy.com/shop/__USER__",
            'image' => "modules/sociallinks/images/etsy.svg",
            'title' => 'Etsy'
        ),
        'facebook' => array(
            'link' => "https://www.facebook.com/__USER__",
            'image' => "modules/sociallinks/images/facebook.svg",
            'title' => 'Facebook'
        ),
        'fandom' => array(
            'link' => "https://__USER__.fandom.com",
            'image' => "modules/sociallinks/images/fandom.svg",
            'title' => 'Fandom'
        ),
        'fanfiction' => array(
            'link' => "https://www.fanfiction.net/u/__USER__",
            'image' => "modules/sociallinks/images/fanfiction.svg",
            'title' => 'FanFiction'
        ),
        'fivem' => array(
            'link' => "https://forum.fivem.net/u/__USER__",
            'image' => "modules/sociallinks/images/fivem.svg",
            'title' => 'FiveM'
        ),
        'fiverr' => array(
            'link' => "https://www.fiverr.com/__USER__",
            'image' => "modules/sociallinks/images/fiverr.svg",
            'title' => 'Fiverr'
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
        'googlepodcasts' => array(
            'link' => "https://podcasts.google.com/u/__USER__",
            'image' => "modules/sociallinks/images/googlepodcasts.svg",
            'title' => 'Google Podcasts'
        ),
        'github' => array(
            'link' => "https://www.github.com/__USER__",
            'image' => "modules/sociallinks/images/github.svg",
            'title' => 'GitHub'
        ),
        'gitlab' => array(
            'link' => "https://www.gitlab.com/__USER__",
            'image' => "modules/sociallinks/images/gitlab.svg",
            'title' => 'GitLab'
        ),
        'hey' => array(
            'link' => "https://hey.com/__USER__",
            'image' => "modules/sociallinks/images/hey.svg",
            'title' => 'Hey'
        ),
        'icq' => array(
            'link' => "https://icq.com/people/__USER__",
            'image' => "modules/sociallinks/images/icq.svg",
            'title' => 'ICQ'
        ),
        'imdb' => array(
            'link' => "https://www.imdb.com/name/__USER__",
            'image' => "modules/sociallinks/images/imdb.svg",
            'title' => 'IMDb'
        ),
        'imgur' => array(
            'link' => "https://imgur.com/user/__USER__",
            'image' => "modules/sociallinks/images/imgur.svg",
            'title' => 'Imgur'
        ),
        'instagram' => array(
            'link' => "https://www.instagram.com/__USER__",
            'image' => "modules/sociallinks/images/instagram.svg",
            'title' => 'Instagram'
        ),
        'itchio' => array(
            'link' => "https://__USER__.itch.io",
            'image' => "modules/sociallinks/images/itchio.svg",
            'title' => 'Itch.io'
        ),
        'keybase' => array(
            'link' => "https://keybase.io/__USER__",
            'image' => "modules/sociallinks/images/keybase.svg",
            'title' => 'Keybase'
        ),
        'kickstarter' => array(
            'link' => "https://www.kickstarter.com/profile/__USER__",
            'image' => "modules/sociallinks/images/kickstarter.svg",
            'title' => 'Kickstarter'
        ),
        'kik' => array(
            'link' => "https://www.kik.com/__USER__",
            'image' => "modules/sociallinks/images/kik.svg",
            'title' => 'Kik'
        ),
        'ko-fi' => array(
            'link' => "https://ko-fi.com/__USER__",
            'image' => "modules/sociallinks/images/ko-fi.svg",
            'title' => 'Ko-Fi'
        ),
        'lastfm' => array(
            'link' => "https://www.last.fm/user/__USER__",
            'image' => "modules/sociallinks/images/lastfm.svg",
            'title' => 'Last.fm'
        ),
        'LINE' => array(
            'link' => "https://line.me/ti/p/__USER__",
            'image' => "modules/sociallinks/images/line.svg",
            'title' => 'LINE'
        ),
        'linkedin' => array(
            'link' => "https://www.linkedin.com/in/__USER__",
            'image' => "modules/sociallinks/images/linkedin.svg",
            'title' => 'LinkedIn'
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
        'medium' => array(
            'link' => "https://medium.com/@__USER__",
            'image' => "modules/sociallinks/images/medium.svg",
            'title' => 'Medium'
        ),
        'messenger' => array(
            'link' => "https://m.me/__USER__",
            'image' => "modules/sociallinks/images/messenger.svg",
            'title' => 'Messenger'
        ),
        'minecraft' => array(
            'link' => "https://namemc.com/profile/__USER__",
            'image' => "modules/sociallinks/images/minecraft.svg",
            'title' => 'Minecraft'
        ),
        'nextdoor' => array(
            'link' => "https://nextdoor.com/__USER__",
            'image' => "modules/sociallinks/images/nextdoor.svg",
            'title' => 'Nextdoor'
        ),
        'nintendo3ds' => array(
            'link' => "__USER__",
            'image' => "modules/sociallinks/images/nintendo3ds.svg",
            'title' => 'Nintendo 3DS'
        ),
        'nintendoswitch' => array(
            'link' => "__USER__",
            'image' => "modules/sociallinks/images/nintendoswitch.svg",
            'title' => 'Nintendo Switch'
        ),
        'onlyfans' => array(
            'link' => "https://onlyfans.com/__USER__",
            'image' => "modules/sociallinks/images/onlyfans.svg",
            'title' => 'OnlyFans'
        ),
        'openstreetmap' => array(
            'link' => "https://www.openstreetmap.org/user/__USER__",
            'image' => "modules/sociallinks/images/openstreetmap.svg",
            'title' => 'OpenStreetMap'
        ),
        'origin' => array(
            'link' => "https://www.origin.com/__USER__",
            'image' => "modules/sociallinks/images/origin.svg",
            'title' => 'Origin'
        ),
        'pandora' => array(
            'link' => "https://www.pandora.com/profile/__USER__",
            'image' => "modules/sociallinks/images/pandora.svg",
            'title' => 'Pandora'
        ),
        'patreon' => array(
            'link' => "https://www.patreon.com/__USER__",
            'image' => "modules/sociallinks/images/patreon.svg",
            'title' => 'Patreon'
        ),
        'paypal' => array(
            'link' => "https://www.paypal.me/__USER__",
            'image' => "modules/sociallinks/images/paypal.svg",
            'title' => 'PayPal'
        ),
        'pinterest' => array(
            'link' => "https://www.pinterest.com/__USER__",
            'image' => "modules/sociallinks/images/pinterest.svg",
            'title' => 'Pinterest'
        ),
        'pixiv' => array(
            'link' => "https://www.pixiv.net/member.php?id=__USER__",
            'image' => "modules/sociallinks/images/pixiv.svg",
            'title' => 'Pixiv'
        ),
        'playstation' => array(
            'link' => "https://my.playstation.com/__USER__",
            'image' => "modules/sociallinks/images/playstation.svg",
            'title' => 'PlayStation'
        ),
        'qoura' => array(
            'link' => "https://www.qoura.com/__USER__",
            'image' => "modules/sociallinks/images/qoura.svg",
            'title' => 'Qoura'
        ),
        'reddit' => array(
            'link' => "https://www.reddit.com/user/__USER__",
            'image' => "modules/sociallinks/images/reddit.svg",
            'title' => 'Reddit'
        ),
        'roblox' => array(
            'link' => "https://www.roblox.com/user.aspx?username=__USER__",
            'image' => "modules/sociallinks/images/roblox.svg",
            'title' => 'Roblox'
        ),
        'rocketleague' => array(
            'link' => "https://rocketleague.tracker.network/profile/__USER__",
            'image' => "modules/sociallinks/images/rocketleague.svg",
            'title' => 'Rocket League'
        ),
        'scp' => array(
            'link' => "http://scp-wiki.wikidot.com/__USER__",
            'image' => "modules/sociallinks/images/scp.svg",
            'title' => 'SCP Wiki'
        ),
        'scratch' => array(
            'link' => "https://scratch.mit.edu/users/__USER__",
            'image' => "modules/sociallinks/images/scratch.svg",
            'title' => 'Scratch'
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
        'sofurry' => array(
            'link' => "https://www.sofurry.com/__USER__",
            'image' => "modules/sociallinks/images/sofurry.svg",
            'title' => 'SoFurry'
        ),
        'soundcloud' => array(
            'link' => "https://www.soundcloud.com/__USER__",
            'image' => "modules/sociallinks/images/soundcloud.svg",
            'title' => 'SoundCloud'
        ),
        'spotify' => array(
            'link' => "https://open.spotify.com/user/__USER__",
            'image' => "modules/sociallinks/images/spotify.svg",
            'title' => 'Spotify'
        ),
        'stackoverflow' => array(
            'link' => "https://stackoverflow.com/users/__USER__",
            'image' => "modules/sociallinks/images/stackoverflow.svg",
            'title' => 'Stack Overflow'
        ),
        'steam' => array(
            'link' => "https://steamcommunity.com/id/__USER__",
            'image' => "modules/sociallinks/images/steam.svg",
            'title' => 'Steam'
        ),
        'strava' => array(
            'link' => "https://www.strava.com/athletes/__USER__",
            'image' => "modules/sociallinks/images/strava.svg",
            'title' => 'Strava'
        ),
        'substack' => array(
            'link' => "https://__USER__.substack.com",
            'image' => "modules/sociallinks/images/substack.svg",
            'title' => 'Substack'
        ),
        'swarm' => array(
            'link' => "https://foursquare.com/__USER__",
            'image' => "modules/sociallinks/images/swarm.svg",
            'title' => 'Swarm'
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
        'ubisoft' => array(
            'link' => "https://club.ubisoft.com/en-GB/profile/__USER__",
            'image' => "modules/sociallinks/images/ubisoft.svg",
            'title' => 'Ubisoft'
        ),
        'unsplash' => array(
            'link' => "https://unsplash.com/@__USER__",
            'image' => "modules/sociallinks/images/unsplash.svg",
            'title' => 'Unsplash'
        ),
        'vero' => array(
            'link' => "https://vero.co/__USER__",
            'image' => "modules/sociallinks/images/vero.svg",
            'title' => 'Vero'
        ),
        'venmo' => array(
            'link' => "https://venmo.com/__USER__",
            'image' => "modules/sociallinks/images/venmo.svg",
            'title' => 'Venmo'
        ),
        'viber' => array(
            'link' => "viber://chat?number=__USER__",
            'image' => "modules/sociallinks/images/viber.svg",
            'title' => 'Viber'
        ),
        'vimeo' => array(
            'link' => "https://vimeo.com/__USER__",
            'image' => "modules/sociallinks/images/vimeo.svg",
            'title' => 'Vimeo'
        ),
        'vk' => array(
            'link' => "https://vk.com/__USER__",
            'image' => "modules/sociallinks/images/vk.svg",
            'title' => 'VK'
        ),
        'VSCO' => array(
            'link' => "https://vsco.co/__USER__/images/1",
            'image' => "modules/sociallinks/images/vsco.svg",
            'title' => 'VSCO'
        ),
        'wattpad' => array(
            'link' => "https://www.wattpad.com/user/__USER__",
            'image' => "modules/sociallinks/images/wattpad.svg",
            'title' => 'Wattpad'
        ),
        'weasyl' => array(
            'link' => "https://www.weasyl.com/~__USER__",
            'image' => "modules/sociallinks/images/weasyl.svg",
            'title' => 'Weasyl'
        ),
        'wechat' => array(
            'link' => "weixin://dl/chat?__USER__",
            'image' => "modules/sociallinks/images/wechat.svg",
            'title' => 'WeChat'
        ),
        'whatsapp' => array(
            'link' => "https://wa.me/__USER__",
            'image' => "modules/sociallinks/images/whatsapp.svg",
            'title' => 'WhatsApp'
        ),
        'wikipedia' => array(
            'link' => "https://en.wikipedia.org/wiki/User:__USER__",
            'image' => "modules/sociallinks/images/wikipedia.svg",
            'title' => 'Wikipedia'
        ),
        'wikia' => array(
            'link' => "https://__USER__.wikia.com",
            'image' => "modules/sociallinks/images/wikia.svg",
            'title' => 'Wikia'
        ),
        'wikidot' => array(
            'link' => "https://__USER__.wikidot.com",
            'image' => "modules/sociallinks/images/wikidot.svg",
            'title' => 'Wikidot'
        ),
        'wikimedia' => array(
            'link' => "https://commons.wikimedia.org/wiki/User:__USER__",
            'image' => "modules/sociallinks/images/wikimedia.svg",
            'title' => 'Wikimedia'
        ),	
        'wordpress' => array(
            'link' => "https://__USER__.wordpress.com",
            'image' => "modules/sociallinks/images/wordpress.svg",
            'title' => 'WordPress'
        ),
        'xbox' => array(
            'link' => "https://account.xbox.com/en-US/Profile?Gamertag=__USER__",
            'image' => "modules/sociallinks/images/xbox.svg",
            'title' => 'Xbox'
        ),
        'xda' => array(
            'link' => "https://forum.xda-developers.com/member.php?u=__USER__",
            'image' => "modules/sociallinks/images/xda.svg",
            'title' => 'XDA'
        ),
        'yahoo' => array(
            'link' => "https://answers.yahoo.com/dir/index?sid=396545433",
            'image' => "modules/sociallinks/images/yahoo.svg",
            'title' => 'Yahoo'
        ),
        'youtube' => array(
            'link' => "https://www.youtube.com/user/__USER__",
            'image' => "modules/sociallinks/images/youtube.svg",
            'title' => 'YouTube'
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